CREATE DATABASE bid_item_db;
USE bid_item_db;

CREATE TABLE Departments
( 
DeptCode VARCHAR(4) NOT NULL,
DeptName VARCHAR(25) NOT NULL,

CONSTRAINT PK_CODE PRIMARY KEY(DeptCode)
);

CREATE TABLE Items
(
ItemID INT AUTO_INCREMENT,
ItemName VARCHAR(25) NOT NULL,
ItemDescr VARCHAR(500),
DeptCode VARCHAR(4) NOT NULL,
ItemStatus ENUM('ACTIVE', 'SOLD') DEFAULT 'ACTIVE' NOT NULL,

CONSTRAINT PK_ITEMID PRIMARY KEY(ItemID),
CONSTRAINT FK_DEPTCODE FOREIGN KEY(DeptCode) REFERENCES Departments(DeptCode)
);

CREATE TABLE Bids
(
BidID INT AUTO_INCREMENT,
BidderF_Name VARCHAR(15) NOT NULL,
BidderL_Name VARCHAR(25) NOT NULL,
BidderEmail VARCHAR(25) NOT NULL,
BidAmount DECIMAL(5,2) NOT NULL,
ItemID INT NOT NULL,

CONSTRAINT PK_BIDID PRIMARY KEY(BidID),
CONSTRAINT FK_ITEMID FOREIGN KEY(ItemID) REFERENCES Items(ItemID)
);

INSERT INTO Departments VALUES
('ELEC', 'Electronics'),
('CLTH', 'Clothing'),
('APPL', 'Appliances'),
('JWL', 'Jewelry');

INSERT INTO Items(ItemID, ItemName, ItemDescr, DeptCode) VALUES
(1, 'Smart Watch', 'This smart watch contains many features to make your life easier. It features a small touch screen display and high quality speakers.
            After being connected to your phone, the smart watch can send messages, check social media and even more.', 'ELEC'),
(2, 'Wired Headphones', 'This pair of headphones features high quality sound with excellent clarity and deep bass. 
            They have very durable ear cushioning and are adjustable for maximum comfort.', 'ELEC'),
(3, 'DSLR Camera', 'This DSLR camera is compact, easy to use, and verstile. Easily capture any moment from photos of outdoor sporting events to close-up 
            images of a flower. This camera features a water resistant body and comes with 2 lenses.', 'ELEC'),
(4, 'Designer Bag', 'This is a designer bag from one of the most popular French designers. 
            It has a beautiful color that would compliment almost any outfit. It is made of the eco-friendly materials.', 'CLTH'),
(5, 'Leather Shoes', 'This is a pair of handcrafted Italian shoes. They are made of the highest quality leather and feature a comfortable sole.
            They are mens size 10.', 'CLTH'),
(6, 'Cowboy Hat', 'This is a vintage cowboy hat from the early 60s. It is made of leather with brass hardware and a braided leather strap. This hat is a truely unique find!', 'CLTH'),
(7, 'Heart Necklace', 'This necklace has a charming heart shaped design. It is made of 14k gold and 2.0 carat diamonds.
                It has a 18 inch handcrafted sterling silver chain. The perfect gift for someone special!', 'JWL'),
(8, 'Earrings', 'This is a an antique pair of earrings from the 1800s. 
            They are made of sterling silver with accents of gold. They feature topaz and diamond gemstones.
            They are a truely unique find!', 'JWL'),
(9, 'Diamond Ring', 'This diamond ring has an elegant design with 4 carat diamonds. The band is made of 24k gold. 
            It is size 9 with a diameter of 20 mm.', 'JWL'),
(10, 'Electric Oven', 'This is a stainless steel electric oven. It features a 4-burner cooktop, a built-in air fryer, convection cooking, and a heating drawer. 
            It also features useful technology like a built-in timer and a oven light.', 'APPL'),
(11, 'Microwave', 'This 1000 watt microwave has all the features of a modern microwave. It has a unique sleek design. 
            It is easy to operate and has many time saving features to simplify your meal prep.', 'APPL'),
(12, 'Blender', 'This blender is one of the best on the market. It has superior blending power and advanced features.
            You can easily make smoothies and other great meals twice as fast as other blenders.', 'APPL');