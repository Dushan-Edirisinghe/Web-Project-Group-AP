-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 11:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amberdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user_iduser`) VALUES
(1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `idcart` int(11) NOT NULL,
  `customer_idcustomer` int(11) NOT NULL,
  `customer_user_iduser` int(11) NOT NULL,
  `updated` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`idcart`, `customer_idcustomer`, `customer_user_iduser`, `updated`) VALUES
(1, 1, 6, '2024-09-02 11:14:35');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems`
--

CREATE TABLE `cartitems` (
  `cart_idcart` int(11) NOT NULL,
  `cart_customer_idcustomer` int(11) NOT NULL,
  `cart_customer_user_iduser` int(11) NOT NULL,
  `item_iditem` int(11) NOT NULL,
  `quantitiy` int(11) NOT NULL,
  `price` float NOT NULL,
  `addedTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cartitems`
--

INSERT INTO `cartitems` (`cart_idcart`, `cart_customer_idcustomer`, `cart_customer_user_iduser`, `item_iditem`, `quantitiy`, `price`, `addedTime`) VALUES
(1, 1, 6, 6, 2, 1080, '2024-09-02 16:48:36');

-- --------------------------------------------------------

--
-- Table structure for table `cartitems_has_order`
--

CREATE TABLE `cartitems_has_order` (
  `cartItems_cart_idcart` int(11) NOT NULL,
  `cartItems_cart_customer_idcustomer` int(11) NOT NULL,
  `cartItems_cart_customer_user_iduser` int(11) NOT NULL,
  `cartItems_item_iditem` int(11) NOT NULL,
  `order_idorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `idcustomer` int(11) NOT NULL,
  `user_iduser` int(11) NOT NULL,
  `tpNumber` varchar(10) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`idcustomer`, `user_iduser`, `tpNumber`, `address`) VALUES
(1, 6, NULL, NULL),
(2, 11, NULL, NULL),
(3, 14, NULL, NULL),
(4, 5, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_order`
--

CREATE TABLE `customer_has_order` (
  `customer_idcustomer` int(11) NOT NULL,
  `customer_user_iduser` int(11) NOT NULL,
  `order_idorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer_has_payment`
--

CREATE TABLE `customer_has_payment` (
  `customer_idcustomer` int(11) NOT NULL,
  `customer_user_iduser` int(11) NOT NULL,
  `payment_idpayment` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `iditem` int(11) NOT NULL,
  `itemName` varchar(150) DEFAULT NULL,
  `itemQuantity` int(11) DEFAULT NULL,
  `itemPrice` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`iditem`, `itemName`, `itemQuantity`, `itemPrice`) VALUES
(4, 'T-Shirt', 35, 1500),
(5, 'Hoodie', 134, 2500),
(6, 'Cap', 43, 540);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `idorder` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `amount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_has_item`
--

CREATE TABLE `order_has_item` (
  `order_idorder` int(11) NOT NULL,
  `item_iditem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `idpayment` int(11) NOT NULL,
  `amount` float DEFAULT NULL,
  `date` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment_has_order`
--

CREATE TABLE `payment_has_order` (
  `payment_idpayment` int(11) NOT NULL,
  `order_idorder` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `description`, `image`) VALUES
(1, 'Product 1', 19.99, 'Description for Product 1', '../assets/images/hat/hat1.jpg'),
(2, 'Product 2', 10.99, 'Description for Product 2', '../assets/images/hat/hat2.jpg'),
(3, 'Product 3', 12.99, 'Description for Product 2', '../assets/images/hoodie/hoodie1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(11) NOT NULL,
  `fnameUser` varchar(45) DEFAULT NULL,
  `lnameUser` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `type` char(3) DEFAULT NULL,
  `passhash` varchar(300) DEFAULT NULL,
  `salt` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `fnameUser`, `lnameUser`, `email`, `type`, `passhash`, `salt`) VALUES
(5, 'Ron', 'ron', 'rr@12.com', 'U', 'ZDAwYjI2OWFlMGViNTYwNjgzMWVlYTllMWE0NGUxZTU1YzExNmM4ZDAyNjFlMDBjMTA3NDE4YjMwN2RiZmI4Mw==', 'Mzk3NWExZjA4NGVjOTVkMmNjNzhmMjY1YThiYjhiZjc='),
(6, 'John', 'Doe', 'jd@gmail.com', 'U', 'YWUxMjU5OTE1OTE0YTMwNzQyOTA5YWFkMWRmMThjM2NlOTYwMjAwNjVjOTNlZWQ0OGY1NDJlYzUxZGFkZDBlNg==', 'YzY1MzBiNTY3N2ZlZGNmMTNjM2E2YWFhZTEwMGQxOTU='),
(11, 'Test', 'Customer', 'tc@123.com', 'U', 'NzM5YzhlNTQ0NDkyOTc3MTMxZWM1MTFjZTFmZDFlYjYyM2Q5YjE4ZmZhOThjMzkxZTY5OWEwM2JmODNhYzE4Yw==', 'YzMxOGFiMGI1NzEwMjY2OTNjYTdkOTgwZmI5OGMyOGM='),
(14, 'Jane', 'Smith', 'janesmith@gmail.com', 'U', 'OWJjNDY5N2I5YjA4MjIyNDczOGIxM2I4NTU2YjBjYWM0OGYzZjYzM2FhNjhkN2Q1ZWE3YjkyNjY0Mzc3YjFjMQ==', 'ODJmODAzM2YxZDk4ZmYzNGVmZWRkOWJiZjJjZTg0YzU='),
(15, 'Admin', 'Test', 'admin@amber.lk', 'A', 'OWJjNDY5N2I5YjA4MjIyNDczOGIxM2I4NTU2YjBjYWM0OGYzZjYzM2FhNjhkN2Q1ZWE3YjkyNjY0Mzc3YjFjMQ==', 'ODJmODAzM2YxZDk4ZmYzNGVmZWRkOWJiZjJjZTg0YzU='),
(17, 'New', 'User', 'new1@gmail.com', 'U', 'ZTY4YjhkZDA1ZWViYWVmYzJmOTExNjJkNzc3YjIxNzJiYjVjMWZkMDQxNmM5YTZlOTgyOTMyOWZlNWJkN2RmMw==', 'NjhkODQ4M2M2OTQ0NzE1ZWQzNTNjODNjOThjYjY0YTA=');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`user_iduser`),
  ADD KEY `fk_admin_user1_idx` (`user_iduser`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`idcart`,`customer_idcustomer`,`customer_user_iduser`),
  ADD KEY `fk_cart_customer1_idx` (`customer_idcustomer`,`customer_user_iduser`);

--
-- Indexes for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD PRIMARY KEY (`cart_idcart`,`cart_customer_idcustomer`,`cart_customer_user_iduser`,`item_iditem`),
  ADD KEY `fk_cart_has_item_item1_idx` (`item_iditem`),
  ADD KEY `fk_cart_has_item_cart1_idx` (`cart_idcart`,`cart_customer_idcustomer`,`cart_customer_user_iduser`);

--
-- Indexes for table `cartitems_has_order`
--
ALTER TABLE `cartitems_has_order`
  ADD PRIMARY KEY (`cartItems_cart_idcart`,`cartItems_cart_customer_idcustomer`,`cartItems_cart_customer_user_iduser`,`cartItems_item_iditem`,`order_idorder`),
  ADD KEY `fk_cartItems_has_order_order1_idx` (`order_idorder`),
  ADD KEY `fk_cartItems_has_order_cartItems1_idx` (`cartItems_cart_idcart`,`cartItems_cart_customer_idcustomer`,`cartItems_cart_customer_user_iduser`,`cartItems_item_iditem`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`idcustomer`,`user_iduser`),
  ADD KEY `fk_customer_user_idx` (`user_iduser`);

--
-- Indexes for table `customer_has_order`
--
ALTER TABLE `customer_has_order`
  ADD PRIMARY KEY (`customer_idcustomer`,`customer_user_iduser`,`order_idorder`),
  ADD KEY `fk_customer_has_order_order1_idx` (`order_idorder`),
  ADD KEY `fk_customer_has_order_customer1_idx` (`customer_idcustomer`,`customer_user_iduser`);

--
-- Indexes for table `customer_has_payment`
--
ALTER TABLE `customer_has_payment`
  ADD PRIMARY KEY (`customer_idcustomer`,`customer_user_iduser`,`payment_idpayment`),
  ADD KEY `fk_customer_has_payment_payment1_idx` (`payment_idpayment`),
  ADD KEY `fk_customer_has_payment_customer1_idx` (`customer_idcustomer`,`customer_user_iduser`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`iditem`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `order_has_item`
--
ALTER TABLE `order_has_item`
  ADD PRIMARY KEY (`order_idorder`,`item_iditem`),
  ADD KEY `fk_order_has_item_item1_idx` (`item_iditem`),
  ADD KEY `fk_order_has_item_order1_idx` (`order_idorder`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`idpayment`);

--
-- Indexes for table `payment_has_order`
--
ALTER TABLE `payment_has_order`
  ADD PRIMARY KEY (`payment_idpayment`,`order_idorder`),
  ADD KEY `fk_payment_has_order_order1_idx` (`order_idorder`),
  ADD KEY `fk_payment_has_order_payment1_idx` (`payment_idpayment`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `idcart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `idcustomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `iditem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `idpayment` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `fk_admin_user1` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_cart_customer1` FOREIGN KEY (`customer_idcustomer`,`customer_user_iduser`) REFERENCES `customer` (`idcustomer`, `user_iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cartitems`
--
ALTER TABLE `cartitems`
  ADD CONSTRAINT `fk_cart_has_item_cart1` FOREIGN KEY (`cart_idcart`,`cart_customer_idcustomer`,`cart_customer_user_iduser`) REFERENCES `cart` (`idcart`, `customer_idcustomer`, `customer_user_iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cart_has_item_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `cartitems_has_order`
--
ALTER TABLE `cartitems_has_order`
  ADD CONSTRAINT `fk_cartItems_has_order_cartItems1` FOREIGN KEY (`cartItems_cart_idcart`,`cartItems_cart_customer_idcustomer`,`cartItems_cart_customer_user_iduser`,`cartItems_item_iditem`) REFERENCES `cartitems` (`cart_idcart`, `cart_customer_idcustomer`, `cart_customer_user_iduser`, `item_iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cartItems_has_order_order1` FOREIGN KEY (`order_idorder`) REFERENCES `order` (`idorder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `fk_customer_user` FOREIGN KEY (`user_iduser`) REFERENCES `user` (`iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer_has_order`
--
ALTER TABLE `customer_has_order`
  ADD CONSTRAINT `fk_customer_has_order_customer1` FOREIGN KEY (`customer_idcustomer`,`customer_user_iduser`) REFERENCES `customer` (`idcustomer`, `user_iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_order_order1` FOREIGN KEY (`order_idorder`) REFERENCES `order` (`idorder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `customer_has_payment`
--
ALTER TABLE `customer_has_payment`
  ADD CONSTRAINT `fk_customer_has_payment_customer1` FOREIGN KEY (`customer_idcustomer`,`customer_user_iduser`) REFERENCES `customer` (`idcustomer`, `user_iduser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_customer_has_payment_payment1` FOREIGN KEY (`payment_idpayment`) REFERENCES `payment` (`idpayment`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order_has_item`
--
ALTER TABLE `order_has_item`
  ADD CONSTRAINT `fk_order_has_item_item1` FOREIGN KEY (`item_iditem`) REFERENCES `item` (`iditem`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_has_item_order1` FOREIGN KEY (`order_idorder`) REFERENCES `order` (`idorder`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `payment_has_order`
--
ALTER TABLE `payment_has_order`
  ADD CONSTRAINT `fk_payment_has_order_order1` FOREIGN KEY (`order_idorder`) REFERENCES `order` (`idorder`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_payment_has_order_payment1` FOREIGN KEY (`payment_idpayment`) REFERENCES `payment` (`idpayment`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
