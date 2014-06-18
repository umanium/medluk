-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 08, 2012 at 09:56 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medluk`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pict` varchar(25) NOT NULL,
  `publish` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `name`, `pict`, `publish`) VALUES
('4fc7163f-1f5c-42c6-a12c-12a09ca6fb3e', 'Winsor & Newton', '5041338447423.png', 'y'),
('4fc7181c-e6b4-4191-9f5d-12a09ca6fb3e', 'Reeves', '5811338448123.jpg', 'y'),
('4fc71853-76d4-4e5c-b49d-12a09ca6fb3e', 'Autograph', '7941338447955.png', 'y'),
('4fc7186c-15b8-4ecc-8544-12a09ca6fb3e', 'Sakura', '4901338447980.jpg', 'y'),
('4fc71889-3df8-4726-b776-12a09ca6fb3e', 'Derwent', '8771338448009.jpg', 'y'),
('4fd180ed-45ec-41bc-b45a-062c9ca6fb3e', 'coba brand', '3811339130109.jpg', 't');

-- --------------------------------------------------------

--
-- Table structure for table `brand_catalogues`
--

CREATE TABLE IF NOT EXISTS `brand_catalogues` (
  `id` char(36) NOT NULL,
  `brand_id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pict` varchar(25) NOT NULL,
  `publish` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_catalogues`
--

INSERT INTO `brand_catalogues` (`id`, `brand_id`, `name`, `pict`, `publish`) VALUES
('4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', '4fc7163f-1f5c-42c6-a12c-12a09ca6fb3e', 'Cat Oil', '4041338449969.png', 'y'),
('4fc72055-e5c8-4fd7-959b-12a09ca6fb3e', '4fc7163f-1f5c-42c6-a12c-12a09ca6fb3e', 'Cat Air', '6441338450039.png', 'y'),
('4fc720ae-eb14-4a26-b699-12a09ca6fb3e', '4fc7186c-15b8-4ecc-8544-12a09ca6fb3e', 'Easel', '2801338450094.png', 'y'),
('4fc720c9-5b84-4603-820a-12a09ca6fb3e', '4fc7163f-1f5c-42c6-a12c-12a09ca6fb3e', 'Aksesoris', '1181338450121.png', 'y'),
('4fc720e3-e43c-4670-ac48-12a09ca6fb3e', '4fc7181c-e6b4-4191-9f5d-12a09ca6fb3e', 'Paper', '3461338450147.png', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `brand_sub_catalogues`
--

CREATE TABLE IF NOT EXISTS `brand_sub_catalogues` (
  `id` char(36) NOT NULL,
  `brand_catalogue_id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `publish` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brand_sub_catalogues`
--

INSERT INTO `brand_sub_catalogues` (`id`, `brand_catalogue_id`, `name`, `publish`) VALUES
('4fc72772-e1c4-4161-8ff3-12a09ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'Cat', 'y'),
('4fc72786-1c98-45dc-80e0-12a09ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'Medium', 'y'),
('4fc7280d-c9ac-4f58-afec-12a09ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'Solvent', 'y'),
('4fc72814-d128-4239-b945-12a09ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'Up', 'y'),
('4fc7281b-a338-4125-b002-12a09ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'Etc', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pict` varchar(25) NOT NULL,
  `long_pict` varchar(25) NOT NULL,
  `publish` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `pict`, `long_pict`, `publish`) VALUES
('4fc5c28c-6290-42b2-bde9-11849ca6fb3e', 'Berdasarkan Minyak', '7761338882417.png', '1851338882298.png', 'y'),
('4fc5c2c1-c2b4-4d74-8cce-11849ca6fb3e', 'Berdasarkan Air', 'cake.icon2.png', '', 'y'),
('4fc5c30d-1be8-4a76-af20-11849ca6fb3e', 'Kertas', 'cake.icon3.png', '', 'y'),
('4fc5c438-a2cc-442e-89dc-11849ca6fb3e', 'Kanvas', 'cake.icon4.png', '', 'y'),
('4fc5c51e-da40-40ac-917c-11849ca6fb3e', 'Easel', 'cake.icon5.png', '', 'y'),
('4fc5c52d-5368-48ab-8e38-11849ca6fb3e', 'Kuas', 'cake.icon6.png', '', 'y'),
('4fc5ee7e-da84-42da-a88f-11849ca6fb3e', 'Kain', '3291338371710.jpg', '', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `category_subs`
--

CREATE TABLE IF NOT EXISTS `category_subs` (
  `id` char(36) NOT NULL,
  `category_id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `pict` varchar(25) NOT NULL,
  `publish` char(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category_subs`
--

INSERT INTO `category_subs` (`id`, `category_id`, `name`, `pict`, `publish`) VALUES
('4fc70fbe-4a3c-465f-a5f1-12a09ca6fb3e', '4fc5c2c1-c2b4-4d74-8cce-11849ca6fb3e', 'Cat Air', '2701338445758.png', 'y'),
('4fc7106d-a508-4344-97e0-12a09ca6fb3e', '4fc5c30d-1be8-4a76-af20-11849ca6fb3e', 'Poster', '2701338445933.png', 'y');

-- --------------------------------------------------------

--
-- Table structure for table `category_subs_products`
--

CREATE TABLE IF NOT EXISTS `category_subs_products` (
  `id` char(36) NOT NULL,
  `category_sub_id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colours`
--

CREATE TABLE IF NOT EXISTS `colours` (
  `id` char(36) NOT NULL,
  `code` varchar(5) NOT NULL,
  `name` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  `pict` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colours_keys`
--

CREATE TABLE IF NOT EXISTS `colours_keys` (
  `id` char(36) NOT NULL,
  `colour_id` char(36) NOT NULL,
  `key_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `colours_products`
--

CREATE TABLE IF NOT EXISTS `colours_products` (
  `id` char(36) NOT NULL,
  `product_id` char(36) NOT NULL,
  `colour_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE IF NOT EXISTS `keys` (
  `id` char(36) NOT NULL,
  `code` varchar(5) NOT NULL,
  `desc` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `code`, `desc`) VALUES
('4fcda873-f354-4047-b0f5-09ec9ca6fb3e', 'AA', 'Extremely Permanent'),
('4fcda882-6304-4fc3-8700-09ec9ca6fb3e', 'A', 'Permanent'),
('4fcda891-8fd4-403f-8e95-09ec9ca6fb3e', 'B', 'Moderately Durable'),
('4fcda8b8-3094-463c-8a42-09ec9ca6fb3e', '(i)', '''A'' rated in full strength may fade in thin washes'),
('4fcda8d3-7d80-4350-8221-09ec9ca6fb3e', '(ii)', 'Cannot be relied upon to withstand damp'),
('4fcda8f6-40cc-4ec5-b6d2-09ec9ca6fb3e', '(iii)', 'Bleached by acids, acidic atmosphere'),
('4fcda912-4dc8-42b6-8e08-09ec9ca6fb3e', '(iv)', 'Fluctuating colour, fades in light, recovers in dark');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` char(36) NOT NULL,
  `brand_sub_catalogue_id` char(36) NOT NULL,
  `category_sub_id` char(36) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `template` varchar(50) NOT NULL,
  `main_pict` varchar(25) NOT NULL,
  `sub_pict1` varchar(25) NOT NULL,
  `sub_pict2` varchar(25) NOT NULL,
  `sub_pict3` varchar(25) NOT NULL,
  `sub_pict4` varchar(25) NOT NULL,
  `colour_pdf` varchar(25) NOT NULL,
  `product_terkait1` char(36) NOT NULL,
  `product_terkait2` char(36) NOT NULL,
  `tutorial1` char(36) NOT NULL,
  `tutorial2` char(36) NOT NULL,
  `tutorial3` char(36) NOT NULL,
  `publish` char(1) NOT NULL DEFAULT 'y',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selling_units`
--

CREATE TABLE IF NOT EXISTS `selling_units` (
  `id` char(36) NOT NULL,
  `old_price` int(20) NOT NULL,
  `discount` float DEFAULT NULL,
  `product_id` char(36) NOT NULL,
  `item_number` char(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `size` varchar(15) NOT NULL,
  `new_price` int(20) NOT NULL,
  PRIMARY KEY (`id`,`item_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selling_units_colours`
--

CREATE TABLE IF NOT EXISTS `selling_units_colours` (
  `id` char(36) NOT NULL,
  `selling_unit_id` char(36) NOT NULL,
  `colour_id` char(36) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
