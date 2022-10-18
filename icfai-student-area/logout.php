<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: index.php');
?>
<!-- CREATE TABLE IF NOT EXISTS `accounts` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
  	`password` varchar(255) NOT NULL,
  	`email` varchar(100) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES (1, 'test', '$2y$10$SfhYIDtn.iOuCW7zfoFLuuZHX6lja4lF4XA4JqNmpiH/.P3zB8JCa', 'test@test.com'); -->
<!-- 
CREATE TABLE IF NOT EXISTS `Student-profile` (
	`id` int(11) NOT NULL AUTO_INCREMENT,
  	`username` varchar(50) NOT NULL,
    `name` varchar(50) NOT NULL,
    `Father_Name` varchar(50) NOT NULL,
    `Mother_Name` varchar(50) NOT NULL,
    `DOB` varchar(50) NOT NULL,
    `email` varchar(100) NOT NULL,
    `Contact` varchar(50) NOT NULL,
    `Course` varchar(50) NOT NULL,
    `Year_of_Joining` varchar(50) NOT NULL,
    `Year_of_Graduation` varchar(50) NOT NULL,
  	`Address` varchar(255) NOT NULL,
    `City` varchar(50) NOT NULL,
    `State` varchar(50) NOT NULL,
    `Pincode` varchar(50) NOT NULL,
    `Blood_group` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `Student-profile` (`id`, `username`, `name`, `Father_Name`,`Mother_Name`,`DOB`,`email`,`Contact`,`Course`, `Year_of_Joining`,`Year_of_Graduation`,`Address`,`City`,`State`,`Pincode`,`Blood_group`) 
VALUES (1, '17stujpcs0012', 'Vinay Pokra', 'Rajendra Pokra','Asha Pokra','24-5-2000','vvinayppokra@gmail.com','7426885024','Btech','2017','2021','ramganjmandi','Kota','rajasthan','326519','A+'); -->


<!-- CREATE TABLE IF NOT EXISTS `Club` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
    `Name` varchar(50) NOT NULL,
    `EnrollMent` varchar(50) NOT NULL,
    `Course` varchar(255) NOT NULL,
    `Email` varchar(100) NOT NULL,
    `WhatsApp` varchar(50) NOT NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

INSERT INTO `Club` (`id`, `Name`, `EnrollMent`, `Course`,`Email`,`WhatsApp`) VALUES (1, 'Vinay pokra', '17stujpcs0012', 'btech','vvinayppokra@gmail.com','7426885024'); -->