<?php
/*table2 --> stores the items for each category

CREATE TABLE sportsequipment (
    sportsequipmentID INT(11) NOT NULL AUTO_INCREMENT,
    sportsequipmentCategoryID INT(11) NOT NULL,
    sportsequipmentCode VARCHAR(64) NOT NULL UNIQUE,
    sportsequipmentName VARCHAR(64) NOT NULL,
    description TEXT NOT NULL,
    Size               TEXT       NOT NULL ,    
    price DECIMAL(10,2) NOT NULL,
    
    dateCreated DATETIME NOT NULL,

    PRIMARY KEY (sportsequipmentID)
)

Insert items inside each category--> bicycle , tennis, yoga mat, dumbbells and shoes

--Bikes
//bike1
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (1, 'FUSETRAILB', 'Fuse 27.5' , 'Calm under pressure, yet deft and precise, the Fuse is an entirely different kind of hardtail.
The Fuse 27.5 handles rough, sketchy descents and steep, technical climbs with absolute confidence. 
Durable 29mm interal width alloy wheelset and 130-millimeters of suspension courtesy of an X-Fusion fork.',
'SMALL' ,1274.99,NOW(),'imagesPh2/96022-71_FUSE-275-ARCTBLU-BLK_FDSQ.webp.jpg');

//bike2
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (1, 'TURBOLEVOB2', 'Turbo Levo Expert' , 'Levo’s fully integrated Turbo Full Power 2.2 motor, 
700Wh battery, and advanced MasterMind Turbo Control Unit deliver 
category-leading 90 Nm of torque and 565 watts of power for up to five hours 
of ride time, empowering you to ride farther and faster than ever before.', 'MEDIUM',
8999.99,NOW());

//bike3
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (1, 'JETT24B3', 'Jett 24' , 'Features an adjustable handlebar that allows kids to fine 
tune reach as their arms grow. The 2-hole position cranks combined with longer seat tubes give
plenty of flexibility to dial-in the optimal pedaling position.','SMALL',
449.99,NOW());

//bike4
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (1, 'RollEntryB4', 'Roll 3.0 Low Entry' , 'The Low-Entry Roll is made from our A1 Premium Aluminum, 
and it features our Ground Control Positioning that makes it easy to put a foot down when stopped. 
This Roll also comes ready with rack/fender mount, making it easy to carry extra weight.', 'X SMALL',
749.99,NOW());

//bike5

INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (1, 'TurboSLB5', 'Turbo Como SL 4.0' , 'Long-Range - Fully integrated Specialized 320Wh 
downntube battery w/optional Range Extender compatibility for up to 62 miles (100 km) or 4.5 hours 
(eco mode) or up to 93 miles (150 km) or 6.75 hours w/ range extender (eco mode).', 'MEDIUM',
1999.99,NOW());




--Tennis Rackets
//Racket 1
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (2, 'UlV4TR1', 'Ultra 100 V4 Tennis Racket' , 'On the subject of looks, this racket has no rival: 
color-shifting blues dance to the different angles of sun rays deflecting off the racket surface for a dazzling display.',
'Small',249.00,NOW());

//Racket 2
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (2, 'Bu100V5TR2', 'Wilson Burn 100 V5 Tennis Racket' , 'Grommet construction provides a consistent, more forgiving string bed response while dramatically increasing the sweet spot.',
'Medium',179.00,NOW());

//Racket 3
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (2, 'MiJu25TR3', ' Wilson Minions 2.0 Junior 25 Tennis Racket' , 'Aluminum composition supplies notable durability and lightweight strength.',
'Small',179.00,NOW());

//Racket 4
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (2, 'USOpenTR4', ' US Open 23 Tennis Racket' , 'Unique beam geometry augments stability and power.', 'Large.',179.00,NOW());




-- YOGA MATS
//MAT 1
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (3, 'PROliM1', 'PROlite Yoga Mat' , 'Raised textural design on top side of the mat allows you transition 
from burpees to lateral bounds without losing traction, Dimensions: 66cm x 180cm (26" x 71"), 6mm (0.24")', 'SMALL',
98.00,NOW());

//MAT 2
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated)  
VALUES (3, 'LoopM2St', 'Loop it up Mat Strap' , 'Buckle-free closure on both ends adjusts to fit any mat, 
100% polyester','LARGE', 24.00,NOW());

//MAT 3
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated)  
VALUES (3, 'WarBlM3', 'Warrior Mat' , 'Luxe, matte finish and oversized design helps you stay on the mat
Made with ethically sourced, premium, all-natural rubber.', 'MEDIUM',128.00,NOW());

//MAT4
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (3, 'WarCamoBlM4', 'Camo Warrior Mat' , 'Features the same never-ever-slip grip,
perfect cushion & luxe, matte finish of our formaldehyde & PVC-free original. Anti-odor.', 'MEDIUM', 138.00,NOW());

//MAT5
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (3, 'AIRM4Bl', 'Air Mat' , 'ultra-light, travel-friendly version of our popular Warrior Mat,
 the Air Yoga Mat rolls thinner for on-the-go yoga. Anti-odor ','LARGE', 98.00,NOW());




//Dumbell Set
//1
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (4, 'CAP150LbRDB1', 'CAP 150 lb Coated Rubber Hex Dumbbell Weight Set' , '150lb Set A-Frame Black Dumbbell Set', '150 lb', 189.99,NOW());

//2
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (4, 'PowerFlDB2', 'Lifepro PowerFlow Adjustable Dumbbell Plus 5-in-1 Single 25-lb ' , 'Gradually increase the weight you’re lifting in 5-lb-increments 
up to 25 lbs using our built-in easy adjustment system, eliminating the need for a full rack of gym weights.', '25 lb', 189.99,NOW());

//3
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (4, 'BalFrDB3', 'BalanceFrom Dumbbell Set with Stand', 'Wide selection of dumbbells;
Hexagon shape for easy storage;
Sets come with dumbbells and stands;
2-year warranty.', '5lb 8lb, 12lb', 69.00,NOW());

//4
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (4, 'CAPNeDB4', 'CAP Neoprene Dumbbell Yellow, Single', 'Original Hex Shaped heads prevent rolling
Medium diameter handle provides essential grip and security during use
Neoprene coating is durable and protective','2lb', 4.97,NOW());




//shoes 

//1
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'CottSh1P', 'Cotton Shoes Original', 'Experience unparalleled comfort with our cotton shoes, meticulously crafted for 
durability and breathability.','7/7.5/8/8.5/9', 127.99,NOW());

//2
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'Ro14S2P', 'Rojos Shoes Fuego', ' Featuring a striking design and impeccable craftsmanship, 
these shoes are sure to turn heads wherever you go.
Step out in confidence and style with the Rojos collection.','7/7.5/8/8.5/9/9.5/10', 378.99,NOW());

//3
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'CarnivFeSh3P', 'Carnival Inspo', 'Embrace the spirit of celebration with our Carnival shoes. 
Designed for those who love to stand out, these shoes exude vibrancy and energy.
 With their playful design and superior comfort, 
 the Carnival collection is perfect for any occasion..','6/6.5/7/7.5/8/8.5/9', 150.99,NOW());

//4
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'Retro99Sh4P', 'Twisted 90s', 'Channel vintage vibes with our Retro shoes. Inspired by classic designs,
these shoes offer a timeless appeal with a modern twist. 
Step back in time while enjoying the comfort and quality of our Retro collection.','6/6.5/7/7.5/8/8.5/9', 289.99,NOW());

//5
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'TodoTerSh5P', 'Todo Terreno', ' Designed for the adventurous spirit, our Todo Terreno shoes are built to withstand any terrain. 
Whether hiking through rugged landscapes or exploring urban jungles, 
these shoes provide the ultimate protection and support.','7/7.5/8/8.5/9/10/10.5', 1000.00,NOW());
//6

INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'RunLov14Sh6P', 'RunLovers <3,', ': For the avid runners and fitness enthusiasts,
our Runlovers shoes are a must-have. Engineered for performance and endurance, these shoes offer
superior cushioning and stability to help you achieve your fitness goals.','5/6/6.5/7/7.5/8/8.5/9/9,5/10/10.5', 1009.39,NOW());

//7
INSERT INTO sportsequipment (sportsequipmentCategoryID, sportsequipmentCode, 
sportsequipmentName, description, Size, price, dateCreated) 
VALUES (5, 'GreLanSh7P', 'The Green Lantern', 'Illuminate your style with our Green Lantern shoes. 
With their sleek design and innovative features, 
these shoes are a symbol of sophistication and elegance. 
Step into the spotlight with the Green Lantern collection.','7/7.5/8/8.5/9/10', 1100.00,NOW());



*/


$hola = 34;











?>
