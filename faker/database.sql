create database faker;

use faker;

CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `ProductName` varchar(100) NOT NULL,
  `ProductDescription` varchar(200) NOT NULL,
  `ProductPrice` int(10) NOT NULL,
  `ProductQuantity` int(10) NOT NULL,

  PRIMARY KEY  (`id`)
);