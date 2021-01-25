CREATE TABLE `users`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar
(100) NOT NULL,
  `PASSWORD` varchar
(100) NOT NULL,
  PRIMARY KEY
(`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


CREATE TABLE `customers`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `First_Name` varchar
(100) NOT NULL,
  `Last_Name` varchar
(100) NOT NULL,
  PRIMARY KEY
(`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;


CREATE TABLE `orders`
(
  `ID` int NOT NULL AUTO_INCREMENT,
  `Product` varchar
(30) NOT NULL,
  `Customer_Id` int DEFAULT NULL,
  PRIMARY KEY
(`ID`),
  KEY `Customer_Id`
(`Customer_Id`),
  CONSTRAINT `orders_ibfk_1` FOREIGN KEY
(`Customer_Id`) REFERENCES `customers`
(`ID`) ON
DELETE CASCADE
) ENGINE=InnoDB
AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
