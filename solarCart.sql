-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 05, 2015 at 01:31 AM
-- Server version: 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `solarCart`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`) VALUES
(1, 'Solar Panel Tools'),
(2, 'Solar Panel Components'),
(3, 'Solar Panel Layers'),
(4, 'Solar Panel Frames'),
(5, 'Solar Support');

-- --------------------------------------------------------

--
-- Table structure for table `managers`
--

CREATE TABLE `managers` (
  `forename` varchar(32) NOT NULL,
  `surname` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `managers`
--

INSERT INTO `managers` (`forename`, `surname`, `email`, `username`, `password`) VALUES
('b', 'b', 'b', 'b', '1f2883f9160c17f1d432b599d02cca2f'),
('Bill', 'Smith', 'emailtest@test.com', 'bsmith', '32aa0c466818e1ccba25b8793db98c94'),
('Steve', 'Wheeler', 'af@temail.com', 'sWheeler', '920688bd88d6a1ba0e177f17bdf6dddd');

-- --------------------------------------------------------

--
-- Table structure for table `markers`
--

CREATE TABLE `markers` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `address` varchar(80) NOT NULL,
  `lat` decimal(10,6) NOT NULL,
  `lng` decimal(10,6) NOT NULL,
  `Progress` int(100) NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `markers`
--

INSERT INTO `markers` (`id`, `name`, `address`, `lat`, `lng`, `Progress`) VALUES
(19, 'staff', 'upstate', '34.952649', '-81.929099', 20),
(21, 'drschwarz', 'Iowa', '42.498934', '-96.365891', 99);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `qty` int(11) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `address` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `price` decimal(10,2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `title`, `description`, `image`, `price`) VALUES
(1, 2, 'Caulk Silicon Material', 'Caulk is a type of finishing material that is used to fill in gaps, cracks, and breaks in various surfaces. By using caulk, you can help to prevent heat loss around windows and doors, water leakage around toilets and bathtubs, and cracks in your driveway and foundation. Sometimes referred to as sealant, caulk used to only be available in polyurethane and silicone forms. However, there are now a variety of different types of caulk specifically designed for a number of different home repair jobs.', 'caulkSiliconMaterial.jpg', '99.99'),
(2, 1, 'Copper Wire', 'Solid and stranded (classes AA and A) bare copper are suitable for overhead transmission and distribution applications. Stranded conductor of greater flexibility (classes B and C) are suitable for uninsulated hook up, jumpers, and grounds in electrical construction. Soft drawn copper is unilay construction.', 'copperWire.jpg', '59.99'),
(3, 2, 'Diode', 'A diode is a specialized electronic component with two electrodes called the anode and the cathode. Most diodes are made with semiconductor materials such as silicon, germanium, or selenium', 'diode.jpg', '79.99'),
(4, 4, 'Wood Plate', 'This wooden plate supports the Solar Panel frame. It will support the finished design', 'woodPlate.jpg', '89.99'),
(5, 5, 'Jones Plug', 'Economically priced yet extremely durable, Jones Plugs are best utilized where mating and unmating, high current capacity and economics are crucial factors. Jones Plugs are best for applications where a high reliability is too costly and a low end stamped connector is unable to handle the current, environment, or mating and unmating', 'jonesPlug.jpg', '77.99'),
(6, 5, 'Lumber', 'From hardwoods to softwoods, we have everything you need for your lumber project or repair. Choose from plywood and OSB panels, landscape timbers, cedar lumber and decking, treated lumber, dimensional lumber or redwood lumber.', 'lumber.jpg', '66.99');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `username`, `password`, `join_date`) VALUES
(14, 'staff', 'staff', 'staff@staff.com', 'staff', '1253208465b1efa876f982d8a9e73eef', '2015-12-04 08:15:58'),
(17, 'Amanda', 'Schwarz', 'schwarz@schwarz.com', 'drschwarz', '7a6997399bc917009bdff68ac7f19a53', '2015-12-04 17:11:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `managers`
--
ALTER TABLE `managers`
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `markers`
--
ALTER TABLE `markers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `markers`
--
ALTER TABLE `markers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;