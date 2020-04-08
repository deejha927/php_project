-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 08, 2020 at 03:42 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `addproduct`
--

CREATE TABLE `addproduct` (
  `productid` int(11) NOT NULL,
  `pname` text NOT NULL,
  `pprize` varchar(200) NOT NULL,
  `buy_price` int(11) NOT NULL,
  `pdetail` varchar(400) NOT NULL,
  `pimage` text NOT NULL,
  `categoryid` int(11) NOT NULL,
  `in_stock` int(11) DEFAULT NULL,
  `total_product_bought` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addproduct`
--

INSERT INTO `addproduct` (`productid`, `pname`, `pprize`, `buy_price`, `pdetail`, `pimage`, `categoryid`, `in_stock`, `total_product_bought`) VALUES
(36, 'Black Halter Top', '549', 499, 'Black Halter Top From Zara', 'uploads/tops (8).jpeg', 3, 15, 15),
(37, 'Pastel Pink Halter Top', '599', 499, 'Pastel Pink Halter Top From Lavish', 'uploads/tops (11).jpeg', 3, 13, 15),
(38, 'One Shoulder Black Chic Top', '799', 699, 'One Shoulder Black Chic Top From Lavish', 'uploads/tops (9).jpeg', 3, 15, 15),
(39, 'Blue Floral Embroidered Top', '849', 799, 'Blue Floral Embroidered Top Zara', 'uploads/tops (5).jpeg', 3, 10, 10),
(40, 'Navy Blue Tie-Knot Top', '549', 499, 'Navy Blue Tie-Knot Top From Zara', 'uploads/tops (6).jpeg', 3, 10, 10),
(41, 'Lavender Off Shoulder Top', '500', 450, 'Lavender Off Shoulder Top Lavish', 'uploads/tops (7).jpeg', 3, 15, 15),
(42, 'Off Shoulder Ribbed Crop Top', '599', 499, 'Off Shoulder Ribbed Crop Top Zara', 'uploads/tops (10).jpeg', 3, 10, 10),
(43, 'Off Shoulder Black Classic Top', '649', 499, 'Off Shoulder Black Classic Top Gucci', 'uploads/tops (12).jpeg', 3, 10, 10),
(44, 'One Shoulder Black Sleeveless Top', '599', 499, 'One Shoulder Black Sleeveless Top Zara', 'uploads/tops (14).jpeg', 3, 12, 12),
(45, 'One Shoulder Black Sequins Top', '599', 399, 'One Shoulder Black Sequins Top Zara', 'uploads/tops (13).jpeg', 3, 10, 10),
(46, 'Leopard Cami Top', '649', 599, 'Leopard Cami Top Zara/Lavish', 'uploads/tops (16).jpeg', 3, 5, 5),
(47, 'Coffee Obsessed Tshirt', '699', 599, 'Coffee Obsessed Tshirt Levis', 'uploads/tops (15).jpeg', 3, 10, 10),
(48, 'Pastel Blue Shirt', '999', 799, 'Pastel Blue Shirt Global Desi', 'uploads/shirts (7).jpeg', 5, 10, 10),
(49, 'Olive Green Casual Shirt', '675', 599, 'Olive Green Casual Shirt Global Desi', 'uploads/shirts (6).jpeg', 5, 10, 10),
(50, 'Black & Red Tshirt Dress', '799', 699, 'Black & Red Tshirt Dress FabIndia', 'uploads/tops (17).jpeg', 3, 15, 15),
(51, 'Mustard Yellow Shirt', '799', 699, 'Mustard Yellow Shirt FabIndia', 'uploads/shirts (8).jpeg', 5, 9, 10),
(52, 'Pink Formal Shirt', '899', 799, 'Pink Formal Shirt FabIndia', 'uploads/shirts (10).jpeg', 5, 10, 10),
(53, 'White Chic Shirt', '750', 699, 'White Chic Shirt Biba', 'uploads/shirts (9).jpeg', 5, 10, 10),
(54, 'White & Red Striped Shirt', '750', 699, 'White & Red Striped Shirt Biba', 'uploads/shirts (1).jpeg', 5, 5, 5),
(55, 'Blue Denim Shirt', '599', 499, 'Blue Denim Shirt Biba', 'uploads/shirts (11).jpeg', 5, 10, 10),
(56, 'Blue Classic Tshirt', '499', 399, 'Blue Classic Tshirt Globus', 'uploads/tops (18).jpeg', 3, 12, 12),
(57, 'Green Chic Kurti', '1100', 950, 'Green Chic Kurti Allen Solly', 'uploads/kurtis (6).jpeg', 7, 12, 12),
(58, 'Black Fit & Flare Dress', '1000', 799, 'Black Fit & Flare Dress Global Desi', 'uploads/kurtis (8).jpeg', 7, 10, 10),
(59, 'Yellow Overlapping Kurti', '1199', 899, 'Yellow Overlapping Kurti Global Desi', 'uploads/kurtis (7).jpeg', 7, 10, 10),
(60, 'Tassels Kurti', '1199', 999, 'Tassels Kurti Zara', 'uploads/kurtis (10).jpeg', 7, 12, 12),
(61, 'Pastel Green Kurti With Scarf', '1200', 800, 'Pastel Green Kurti With Scarf Zara', 'uploads/kurtis (9).jpeg', 7, 12, 12),
(62, 'Blue Jacket Style Kurti', '1199', 999, 'Blue Jacket Style Kurti Zara', 'uploads/kurtis (12).jpeg', 7, 13, 13),
(64, 'Embroidered White Kurti', '1000', 899, 'Embroidered White Kurti Zara', 'uploads/kurtis (11).jpeg', 7, 10, 10),
(65, 'Pink Jacket Style Kurti', '1000', 899, 'Pink Jacket Style Kurti Global Desi', 'uploads/kurtis (14).jpeg', 7, 12, 12),
(66, 'Yellow & Golden Work Kurti', '1200', 1100, 'Yellow & Golden Work Kurti Levis', 'uploads/kurtis (13).jpeg', 7, 12, 12),
(67, 'Black Block Print Kurti', '1299', 999, 'Black Block Print Kurti Levis', 'uploads/kurtis (16).jpeg', 7, 13, 13),
(68, 'Grey Designer Kurti', '1399', 1100, 'Grey Designer Kurti Lavish', 'uploads/kurtis (15).jpeg', 7, 12, 12),
(69, 'Pink Frilled Sleeves Kurti', '1000', 900, 'Pink Frilled Sleeves Kurti Lavish', 'uploads/kurtis (17).jpeg', 7, 12, 12),
(70, 'Grey & Black Designer Kurti', '1399', 1200, 'Grey & Black Designer Kurti Lavish', 'uploads/kurtis (19).jpeg', 7, 10, 10),
(71, 'Black Leather Fanny Pack', '550', 500, '', 'uploads/purse (3).jpeg', 8, 9, 9),
(73, 'Metallic Pink Fanny Pack ', '600', 560, '', 'uploads/purse (1).jpeg', 8, 20, 20),
(75, 'Baby Pink Fanny Pack ', '450', 400, '', 'uploads/purse (2).jpeg', 8, 13, 13),
(76, 'Pink Fanny Pack ', '640', 600, '', 'uploads/purse (4).jpeg', 8, 7, 7),
(77, 'Red Champion Fanny Pack ', '670', 540, '', 'uploads/purse (5).jpeg', 8, 9, 9),
(78, 'Paper bags', '230', 200, '', 'uploads/purse (6).jpeg', 8, 23, 23),
(80, 'Pastel Pink Round Sling Purse', '510', 470, '', 'uploads/purse (7).jpeg', 8, 5, 5),
(81, 'Baby Pink Leather Backpack', '600', 560, '', 'uploads/bag (1).jpeg', 6, 6, 6),
(82, 'Moschino Jacket Bag', '600', 560, '', 'uploads/bag (2).jpeg', 6, 7, 7),
(83, 'chevron pattern backpack', '670', 600, '', 'uploads/bag (3).jpeg', 6, 16, 16),
(84, 'Pink collegiate Backpack', '660', 620, '', 'uploads/bag (4).jpeg', 6, 7, 7),
(86, 'Blue Aesthetic sling Purse', '630', 600, '', 'uploads/bag (5).jpeg', 8, 7, 7),
(87, 'Pink Floral Backpack', '730', 700, '', 'uploads/bag (6).jpeg', 6, 9, 9),
(88, 'Red Tote Bag', '430', 400, '', 'uploads/bag (7).jpeg', 6, 7, 7),
(89, 'Camera Sling Purse', '650', 610, '', 'uploads/bag (8).jpeg', 8, 8, 8),
(90, 'Flamingo Sling Purse', '580', 500, '', 'uploads/bag (9).jpeg', 8, 6, 6),
(92, 'Owl Tassel Bag', '670', 600, '', 'uploads/bag (10).jpeg', 6, 21, 21),
(93, 'Red Squared Purse', '650', 600, '', 'uploads/bag (11).jpeg', 8, 12, 12),
(94, 'Yellow Heart Backpack', '340', 300, '', 'uploads/bag (12).jpeg', 6, 9, 9),
(95, 'Yellow Backpack', '440', 400, '', 'uploads/bag (13).jpeg', 6, 7, 7),
(96, 'Smiley Bag', '320', 300, '', 'uploads/bag (14).jpeg', 6, 13, 13),
(97, 'Transparent Backpack', '740', 680, '', 'uploads/bag (15).jpeg', 6, 19, 19),
(98, 'Sunflower Backpack', '520', 450, '', 'uploads/bag (16).jpeg', 6, 6, 6),
(99, 'Pastel Blue Pom Pom Bag', '820', 700, '', 'uploads/bag (17).jpeg', 6, 2, 2),
(100, 'Pastel Blue Backpack', '740', 600, '', 'uploads/bag (18).jpeg', 6, 5, 5),
(101, 'Glitter Drama Bag', '930', 800, '', 'uploads/bag (19).jpeg', 6, 6, 6),
(102, 'Blue Duck Print Bag', '740', 670, '', 'uploads/bag (20).jpeg', 6, 0, 0),
(103, 'Unicorn Fanny Pack', '650', 400, 'Unicorn Fanny Pack Zara', 'uploads/purse (14).jpeg', 8, 10, 10),
(104, 'Heart Sling Purse', '740', 500, 'Heart Sling Purse', 'uploads/purse (11).jpeg', 8, 8, 8),
(105, 'Grey Gharara', '1500', 950, 'Grey Gharara', 'uploads/bottom_wear (27).jpeg', 2, 8, 8),
(106, 'Printed Designer Skirt', '1200', 850, 'Printed Designer Skirt', 'uploads/bottom_wear (9).jpeg', 2, 5, 5),
(108, 'Grey Legging', '1100', 700, 'Grey Legging', 'uploads/bottom_wear (8).jpeg', 2, 2, 2),
(109, 'Blue Block Print Skirt', '1400', 1200, '', 'uploads/bottom_wear (1).jpeg', 2, 8, 8),
(110, 'Multi-color Casual Skirt', '1300', 1000, '', 'uploads/bottom_wear (10).jpeg', 2, 9, 9),
(111, 'Red Jaipuri Palazzo', '1500', 1100, '', 'uploads/bottom_wear (18).jpeg', 2, 14, 14),
(112, 'Pastel Green Plant', '1700', 1300, '', 'uploads/bottom_wear (19).jpeg', 2, 3, 3),
(113, 'Black and Golden Palazzo', '1670', 1400, '', 'uploads/bottom_wear (20).jpeg', 2, 7, 7),
(114, 'Pink Casual Print Palazo', '1450', 1100, '', 'uploads/bottom_wear (21).jpeg', 2, 1, 1),
(115, 'Pink Palazzo', '1450', 1200, '', 'uploads/bottom_wear (22).jpeg', 2, 15, 15),
(116, 'Minimalist Palazzo', '1430', 1230, '', 'uploads/bottom_wear (23).jpeg', 2, 6, 6),
(117, 'Navy Blue Printed Skirt', '1600', 1400, '', 'uploads/bottom_wear (24).jpeg', 2, 8, 8),
(118, 'Red Tassels Kurta', '1480', 1270, '', 'uploads/bottom_wear (25).jpeg', 7, 7, 7),
(119, 'Beige Pants', '1730', 1470, '', 'uploads/bottom_wear (28).jpeg', 2, 15, 15),
(120, 'White Beige pants', '1480', 1200, '', 'uploads/bottom_wear (29).jpeg', 2, 8, 8),
(121, 'Black Leggings', '1740', 1400, '', 'uploads/bottom_wear (30).jpeg', 2, 9, 9),
(122, 'Blue Rajasthani Skirt', '1900', 1800, '', 'uploads/bottom_wear (31).jpeg', 2, 16, 16),
(123, 'Turquoise Printed Skirt', '1850', 1600, '', 'uploads/bottom_wear (32).jpeg', 2, 18, 18),
(124, 'Green Casual Skirt', '1820', 1400, '', 'uploads/bottom_wear (33).jpeg', 2, 17, 17),
(125, 'Summer Love Skirt', '1490', 1300, '', 'uploads/bottom_wear (34).jpeg', 2, 13, 13),
(126, 'Black and Red Border Skirt', '1780', 1500, '', 'uploads/bottom_wear (35).jpeg', 2, 16, 16),
(127, 'Printed Designer Skirt', '1930', 1700, '', 'uploads/bottom_wear (36).jpeg', 2, 10, 10),
(128, 'Blue Border Print Skirt', '1770', 1600, '', 'uploads/bottom_wear (37).jpeg', 2, 15, 15),
(129, 'White Block Print Palazzo', '1150', 1000, '', 'uploads/bottom_wear (38).jpeg', 2, 21, 21),
(130, 'White Embroidered Shirt', '800', 700, '', 'uploads/shirts (2).jpeg', 5, 9, 9),
(131, 'Blue Striped Shirt', '980', 800, '', 'uploads/shirts (3).jpeg', 5, 8, 8),
(132, 'Light Blue Formal Shirt', '750', 600, '', 'uploads/shirts (4).jpeg', 5, 9, 9),
(133, 'Bual Pattern Shirt', '780', 500, '', 'uploads/shirts (5).jpeg', 5, 9, 9),
(135, 'Pastel Pink Rectangular Sling Purse', '700', 600, '', 'uploads/purse (8).jpeg', 8, 7, 7),
(136, 'Red Embroidered Tasseled Sling Purse ', '800', 700, '', 'uploads/purse (9).jpeg', 8, 5, 5),
(137, 'Red Heart Fanny Pack', '780', 600, '', 'uploads/purse (18).jpeg', 8, 6, 6),
(138, 'Blue Fanny Pack', '600', 490, '', 'uploads/purse (17).jpeg', 8, 5, 5),
(139, 'Red Fanny Pack', '780', 560, '', 'uploads/purse (12).jpeg', 8, 17, 17),
(140, 'Jute Tote Bag', '750', 480, '', 'uploads/purse (15).jpeg', 8, 11, 11),
(142, 'Panda Bear Wallet', '890', 700, '', 'uploads/purse (10).jpeg', 8, 14, 14);

-- --------------------------------------------------------

--
-- Table structure for table `addtocart`
--

CREATE TABLE `addtocart` (
  `email` varchar(30) NOT NULL,
  `productid` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `img` text,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `addtocart`
--

INSERT INTO `addtocart` (`email`, `productid`, `id`, `img`, `size`) VALUES
('deejha927@gmail.com', 37, 1, 'uploads/tops (11).jpeg', 'Small'),
('deejha927@gmail.com', 51, 2, 'uploads/shirts (8).jpeg', 'Small'),
('roshni@gmail.com', 37, 3, 'uploads/tops (11).jpeg', 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `alogin`
--

CREATE TABLE `alogin` (
  `id` int(11) NOT NULL,
  `aname` varchar(30) NOT NULL,
  `apass` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alogin`
--

INSERT INTO `alogin` (`id`, `aname`, `apass`) VALUES
(1, 'admin', 'admin123'),
(2, 'deepak', 'deepakjha123');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `cname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `cname`) VALUES
(2, 'bottom-wear'),
(3, 'tops'),
(5, 'shirt'),
(6, 'bags'),
(7, 'top-wear'),
(8, 'purses');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contactid` int(11) NOT NULL,
  `cname` text NOT NULL,
  `cmail` varchar(11) NOT NULL,
  `cmsg` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phone` decimal(10,0) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `pid` int(11) NOT NULL,
  `email` text NOT NULL,
  `pname` varchar(60) NOT NULL,
  `price` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`pid`, `email`, `pname`, `price`, `date`) VALUES
(1, 'roshni@gmail.com', 'Pastel Pink Halter Top', 599, '2020-03-08');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `pass` varchar(40) NOT NULL,
  `contact` bigint(11) NOT NULL,
  `address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `pass`, `contact`, `address`) VALUES
(15, 'roshni', 'roshni@gmail.com', '12345678', 9922889977, '\r\nnashik road.');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `email` varchar(30) NOT NULL,
  `productid` int(11) NOT NULL,
  `wish_id` int(11) NOT NULL,
  `img` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD PRIMARY KEY (`productid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD PRIMARY KEY (`id`),
  ADD KEY `productid` (`productid`);

--
-- Indexes for table `alogin`
--
ALTER TABLE `alogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`),
  ADD KEY `categoryid` (`categoryid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addproduct`
--
ALTER TABLE `addproduct`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `addtocart`
--
ALTER TABLE `addtocart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `addproduct`
--
ALTER TABLE `addproduct`
  ADD CONSTRAINT `addproduct_ibfk_1` FOREIGN KEY (`categoryid`) REFERENCES `category` (`categoryid`);

--
-- Constraints for table `addtocart`
--
ALTER TABLE `addtocart`
  ADD CONSTRAINT `addtocart_ibfk_1` FOREIGN KEY (`productid`) REFERENCES `addproduct` (`productid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
