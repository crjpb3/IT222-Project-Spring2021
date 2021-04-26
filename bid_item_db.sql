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
ItemDescr VARCHAR(100),
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
(2, 'Wired Headphones', 'Sony Inline Mic Pink Headphones', 'ELEC'),
(3, ' DSLR Camera', 'Nikon 3200 4K HDR Red Camera', 'ELEC'),
(4, 'Designer Bag', 'Dulcet and Banana 12" x 14" x 6" Designer Bag', 'CLTH'),
(5, 'Leather Shoes', 'WHAT ARE THOSE!?', 'CLTH'),
(6, 'Cowboy Hat', 'Sports Team Blue and White Baseball Cap', 'CLTH'),
(7, 'Heart Necklace', '12" Gold Heart Necklace', 'JWL'),
(8, 'Earrings', 'Silver 1" Diameter Hoop Earrings', 'JWL'),
(9, 'Diamond Ring', '4 Diamond 24k Gold Ring', 'JWL'),
(10, 'Electric Oven', 'Electric Convection Oven', 'APPL'),
(11, 'Microwave', '1100 Watt HotPocket Microwave', 'APPL'),
(12, 'Blender', 'Ninja Brand Blender for All Your Blending Needs', 'APPL');