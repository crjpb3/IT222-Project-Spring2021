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

INSERT INTO Items VALUES
(1, 'Smart Watch', 'LG Series 2 Black Smart Watch', 'ELEC'),
(2, 'Camera', 'Nikon 3200 4K HDR Red Camera', 'ELEC'),
(3, 'Headphones', 'Sony Inline Mic Pink Headphones', 'ELEC'),
(4, 'Bag', 'Generic 12" x 14" x 6" Beige Canvas Bag', 'CLTH'),
(5, 'Hat', 'Sports Team Blue and White Baseball Cap', 'CLTH'),
(6, 'Shoes', 'WHAT ARE THOSE!?', 'CLTH'),
(7, 'Earrings', 'Silver 1" Diameter Hoop Earrings', 'JWL'),
(8, 'Necklace', '12" Gold Locket Necklace', 'JWL'),
(9, 'Ring', '4 Diamond 24k Gold Ring', 'JWL'),
(10, 'Blender', 'Ninja Brand Blender for All Your Blending Needs', 'APPL'),
(11, 'Microwave', '1100 Watt HotPocket Microwave', 'APPL'),
(12, 'Oven', 'Gas Convection Oven', 'APPL');