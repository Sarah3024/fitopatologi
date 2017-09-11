-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2017 at 03:50 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cendawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id_city` int(11) NOT NULL,
  `name_city` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `name_class` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `divisi_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `name_customer` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `address_customer` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `tlp_customer` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `fax_customer` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id_district` int(11) NOT NULL,
  `name_district` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `id_city` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `divisi`
--

CREATE TABLE `divisi` (
  `id_divisi` int(11) NOT NULL,
  `name_divisi` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE `family` (
  `id_family` int(11) NOT NULL,
  `name_family` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `ordo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `genus`
--

CREATE TABLE `genus` (
  `id_genus` int(11) NOT NULL,
  `name_genus` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `family_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isolator`
--

CREATE TABLE `isolator` (
  `id_isolator` int(11) NOT NULL,
  `name_isolator` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `date_isolator` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `instansi_isolator` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `expertise_isolator` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isolat_cendawan`
--

CREATE TABLE `isolat_cendawan` (
  `id_cendawan` int(11) NOT NULL,
  `no_cendawan` int(11) NOT NULL,
  `code_cendawan` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `name_cendawan` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `number_cendawan` int(11) DEFAULT NULL,
  `label_cendawan` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `status_verifiedData` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `time_verifiedData` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `utilization` text COLLATE utf8_croatian_ci,
  `comment_cendawan` text COLLATE utf8_croatian_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `location_id` int(11) NOT NULL,
  `species_id` int(11) NOT NULL,
  `photo_id` int(11) NOT NULL,
  `storage_id` int(11) NOT NULL,
  `updating_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `isolat_order`
--

CREATE TABLE `isolat_order` (
  `id_isolatOrder` int(11) NOT NULL,
  `no_isolatOrder` int(11) DEFAULT NULL,
  `unitPackage_isolat` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `amount_isolat` int(11) NOT NULL,
  `info_isolat_order` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id_location` int(11) NOT NULL,
  `latitude` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `longitude` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `atitude` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `district_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(11) NOT NULL,
  `no_order` int(11) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `species_id` int(11) DEFAULT NULL,
  `amount_order` int(11) DEFAULT NULL,
  `date_order` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_expire` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `typeOrder_id` int(11) DEFAULT NULL,
  `isolatOrder_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ordo`
--

CREATE TABLE `ordo` (
  `id_ordo` int(11) NOT NULL,
  `name_ordo` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `class_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id_photo` int(11) NOT NULL,
  `biakan_photo` longtext COLLATE utf8_croatian_ci NOT NULL,
  `micrograf` longtext COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id_province` int(11) NOT NULL,
  `name_province` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `raiser`
--

CREATE TABLE `raiser` (
  `id_raiser` int(11) NOT NULL,
  `name_raiser` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `instansi_raiser` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `expertise_raiser` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `species`
--

CREATE TABLE `species` (
  `id_species` int(11) NOT NULL,
  `name_species` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `description_species` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `genus_id` int(11) NOT NULL,
  `substrat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id_state` int(11) NOT NULL,
  `name_state` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id_storage` int(11) NOT NULL,
  `no_tube` int(11) NOT NULL,
  `rak` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `isolator_id` int(11) NOT NULL,
  `raiser_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `substrat`
--

CREATE TABLE `substrat` (
  `id_substrat` int(11) NOT NULL,
  `name_substrat` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `ecology` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `biology` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `physiology` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `mycotoxin` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_order`
--

CREATE TABLE `type_order` (
  `id_typeOrder` int(11) NOT NULL,
  `name_typeOrder` varchar(255) COLLATE utf8_croatian_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `updateting`
--

CREATE TABLE `updateting` (
  `id_updating` int(11) NOT NULL,
  `date_updating` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_users` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `lengthName` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `instansi_user` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `typeuser_id` int(11) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

CREATE TABLE `user_type` (
  `id_usertype` int(11) NOT NULL,
  `name_usertype` varchar(255) COLLATE utf8_croatian_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id_city`),
  ADD KEY `province_id` (`province_id`);

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`),
  ADD KEY `divisi_id` (`divisi_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id_district`),
  ADD KEY `id_city` (`id_city`);

--
-- Indexes for table `divisi`
--
ALTER TABLE `divisi`
  ADD PRIMARY KEY (`id_divisi`);

--
-- Indexes for table `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id_family`),
  ADD KEY `ordo_id` (`ordo_id`);

--
-- Indexes for table `genus`
--
ALTER TABLE `genus`
  ADD PRIMARY KEY (`id_genus`),
  ADD KEY `family_id` (`family_id`);

--
-- Indexes for table `isolator`
--
ALTER TABLE `isolator`
  ADD PRIMARY KEY (`id_isolator`);

--
-- Indexes for table `isolat_cendawan`
--
ALTER TABLE `isolat_cendawan`
  ADD PRIMARY KEY (`id_cendawan`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `updating_id` (`updating_id`),
  ADD KEY `storage_id` (`storage_id`),
  ADD KEY `photo_id` (`photo_id`),
  ADD KEY `species_id` (`species_id`),
  ADD KEY `location_id` (`location_id`);

--
-- Indexes for table `isolat_order`
--
ALTER TABLE `isolat_order`
  ADD PRIMARY KEY (`id_isolatOrder`),
  ADD KEY `no_isolatOrder` (`no_isolatOrder`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id_location`),
  ADD KEY `district_id` (`district_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`),
  ADD KEY `typeOrder_id` (`typeOrder_id`),
  ADD KEY `isolatOrder_id` (`isolatOrder_id`),
  ADD KEY `user_id` (`customer_id`),
  ADD KEY `species_id` (`species_id`);

--
-- Indexes for table `ordo`
--
ALTER TABLE `ordo`
  ADD PRIMARY KEY (`id_ordo`),
  ADD KEY `class_id` (`class_id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id_photo`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id_province`),
  ADD KEY `state_id` (`state_id`);

--
-- Indexes for table `raiser`
--
ALTER TABLE `raiser`
  ADD PRIMARY KEY (`id_raiser`);

--
-- Indexes for table `species`
--
ALTER TABLE `species`
  ADD PRIMARY KEY (`id_species`),
  ADD KEY `genus_id` (`genus_id`),
  ADD KEY `substrat` (`substrat_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id_state`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id_storage`),
  ADD KEY `isolator_id` (`isolator_id`),
  ADD KEY `raiser_id` (`raiser_id`);

--
-- Indexes for table `substrat`
--
ALTER TABLE `substrat`
  ADD PRIMARY KEY (`id_substrat`);

--
-- Indexes for table `type_order`
--
ALTER TABLE `type_order`
  ADD PRIMARY KEY (`id_typeOrder`);

--
-- Indexes for table `updateting`
--
ALTER TABLE `updateting`
  ADD PRIMARY KEY (`id_updating`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_users`),
  ADD KEY `typeuser_id` (`typeuser_id`);

--
-- Indexes for table `user_type`
--
ALTER TABLE `user_type`
  ADD PRIMARY KEY (`id_usertype`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `city`
--
ALTER TABLE `city`
  ADD CONSTRAINT `city_ibfk_1` FOREIGN KEY (`province_id`) REFERENCES `province` (`id_province`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `class`
--
ALTER TABLE `class`
  ADD CONSTRAINT `class_ibfk_1` FOREIGN KEY (`divisi_id`) REFERENCES `divisi` (`id_divisi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `district`
--
ALTER TABLE `district`
  ADD CONSTRAINT `district_ibfk_1` FOREIGN KEY (`id_city`) REFERENCES `city` (`id_city`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`ordo_id`) REFERENCES `ordo` (`id_ordo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `genus`
--
ALTER TABLE `genus`
  ADD CONSTRAINT `genus_ibfk_1` FOREIGN KEY (`family_id`) REFERENCES `family` (`id_family`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `isolat_cendawan`
--
ALTER TABLE `isolat_cendawan`
  ADD CONSTRAINT `isolat_cendawan_ibfk_1` FOREIGN KEY (`species_id`) REFERENCES `species` (`id_species`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isolat_cendawan_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id_users`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isolat_cendawan_ibfk_3` FOREIGN KEY (`updating_id`) REFERENCES `updateting` (`id_updating`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isolat_cendawan_ibfk_4` FOREIGN KEY (`photo_id`) REFERENCES `photo` (`id_photo`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isolat_cendawan_ibfk_5` FOREIGN KEY (`storage_id`) REFERENCES `storage` (`id_storage`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `isolat_cendawan_ibfk_6` FOREIGN KEY (`location_id`) REFERENCES `location` (`id_location`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `location`
--
ALTER TABLE `location`
  ADD CONSTRAINT `location_ibfk_1` FOREIGN KEY (`district_id`) REFERENCES `district` (`id_district`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`typeOrder_id`) REFERENCES `type_order` (`id_typeOrder`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`isolatOrder_id`) REFERENCES `isolat_order` (`id_isolatOrder`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_3` FOREIGN KEY (`species_id`) REFERENCES `species` (`id_species`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_ibfk_4` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ordo`
--
ALTER TABLE `ordo`
  ADD CONSTRAINT `ordo_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class` (`id_class`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `province`
--
ALTER TABLE `province`
  ADD CONSTRAINT `province_ibfk_1` FOREIGN KEY (`state_id`) REFERENCES `state` (`id_state`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `species`
--
ALTER TABLE `species`
  ADD CONSTRAINT `species_ibfk_1` FOREIGN KEY (`genus_id`) REFERENCES `genus` (`id_genus`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `species_ibfk_2` FOREIGN KEY (`substrat_id`) REFERENCES `substrat` (`id_substrat`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `storage_ibfk_1` FOREIGN KEY (`raiser_id`) REFERENCES `raiser` (`id_raiser`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `storage_ibfk_2` FOREIGN KEY (`isolator_id`) REFERENCES `isolator` (`id_isolator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`typeuser_id`) REFERENCES `user_type` (`id_usertype`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
