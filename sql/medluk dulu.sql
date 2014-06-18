-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 07, 2012 at 11:16 AM
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
('4fc71889-3df8-4726-b776-12a09ca6fb3e', 'Derwent', '8771338448009.jpg', 'y');

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
('4fc7281b-a338-4125-b002-12a09ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'Etc', 'y'),
('4fcc6393-c498-46d5-935c-104c9ca6fb3e', '4fc72031-7d60-4a29-8b0b-12a09ca6fb3e', 'cek id', 'y');

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

--
-- Dumping data for table `colours`
--

INSERT INTO `colours` (`id`, `code`, `name`, `key`, `pict`) VALUES
('4fd04734-42d4-49b9-953b-12649ca6fb3e', '089', 'cadmium orange', ' A (iii) S4 O I', 'cadmium_orange 089 A (iii) S4 O I.png'),
('4fd04735-0678-4fb3-b2b5-12649ca6fb3e', '587', 'Rosse Madder Genuine', ' B (i) S4 T G', 'Rosse_Madder_Genuine 587 B (i) S4 T G.png'),
('4fd04735-2eb0-4c50-b00d-12649ca6fb3e', '311', 'Hooker''s Green', ' A S1 T ST I', 'Hooker''s_Green 311 A S1 T ST I.png'),
('4fd04735-89a8-42f6-a0f1-12649ca6fb3e', '538', 'Prussian Blue', ' A (iv) S1 T ST I', 'Prussian_Blue 538 A (iv) S1 T ST I.png'),
('4fd04735-e36c-423d-abd8-12649ca6fb3e', '347', 'lemon yellow hue', ' AA S2 O I', 'lemon_yellow_hue 347 AA S2 O I.png'),
('4fd04735-fc54-4e3a-9cdc-12649ca6fb3e', '724', 'winsor orange', ' A S1 SO I', 'winsor_orange 724 A S1 SO I.png'),
('4fd047eb-00c4-4255-b354-12649ca6fb3e', '089', 'cadmium orange', ' A (iii) S4 O I', 'cadmium_orange 089 A (iii) S4 O I.png'),
('4fd047eb-6c80-4c9d-beae-12649ca6fb3e', '724', 'winsor orange', ' A S1 SO I', 'winsor_orange 724 A S1 SO I.png'),
('4fd047eb-9c78-4339-911e-12649ca6fb3e', '587', 'Rosse Madder Genuine', ' B (i) S4 T G', 'Rosse_Madder_Genuine 587 B (i) S4 T G.png'),
('4fd047eb-bc24-4cfd-9972-12649ca6fb3e', '538', 'Prussian Blue', ' A (iv) S1 T ST I', 'Prussian_Blue 538 A (iv) S1 T ST I.png'),
('4fd047eb-c92c-4e41-9da0-12649ca6fb3e', '347', 'lemon yellow hue', ' AA S2 O I', 'lemon_yellow_hue 347 AA S2 O I.png'),
('4fd047eb-d4c4-468e-b22c-12649ca6fb3e', '311', 'Hooker''s Green', ' A S1 T ST I', 'Hooker''s_Green 311 A S1 T ST I.png'),
('4fd050de-3c40-4399-8b71-12649ca6fb3e', '314', 'Hooker''s Green green', ' A S1 T ST I', 'Hooker''s_Green_green 314 A S1 T ST I.png'),
('4fd050de-7b60-4862-95ca-12649ca6fb3e', '311', 'Hooker''s Green', ' A S1 T ST I', 'Hooker''s_Green 311 A S1 T ST I.png'),
('4fd050de-e328-4116-a9a6-12649ca6fb3e', '089', 'cadmium orange', ' A (iii) S4 O I', 'cadmium_orange 089 A (iii) S4 O I.png'),
('4fd050de-eea8-4f90-8746-12649ca6fb3e', '049', 'cadmium orange blue', ' A (iii) S4 O I', 'cadmium_orange_blue 049 A (iii) S4 O I.png'),
('4fd050df-00d4-4dc9-a53c-12649ca6fb3e', '587', 'Rosse Madder Genuine', ' B (i) S4 T G', 'Rosse_Madder_Genuine 587 B (i) S4 T G.png'),
('4fd050df-03ec-42c0-9b85-12649ca6fb3e', '724', 'winsor orange yello', ' A S1 SO I', 'winsor_orange_yello 724 A S1 SO I.png'),
('4fd050df-0948-4a95-a835-12649ca6fb3e', '538', 'Prussian Blue', ' A (iv) S1 T ST I', 'Prussian_Blue 538 A (iv) S1 T ST I.png'),
('4fd050df-327c-4270-80dd-12649ca6fb3e', '587', 'Rosse Madder Genuine x', ' B (i) S4 T G', 'Rosse_Madder_Genuine_x 587 B (i) S4 T G.png'),
('4fd050df-35d0-445f-8c82-12649ca6fb3e', '538', 'Prussian Blue moon', ' A (iv) S1 T ST I', 'Prussian_Blue_moon 538 A (iv) S1 T ST I.png'),
('4fd050df-6b28-4e48-99ff-12649ca6fb3e', '347', 'lemon yellow hue', ' AA S2 O I', 'lemon_yellow_hue 347 AA S2 O I.png'),
('4fd050df-b5a0-4b13-8c8b-12649ca6fb3e', '724', 'winsor orange', ' A S1 SO I', 'winsor_orange 724 A S1 SO I.png'),
('4fd050df-b834-4c24-894d-12649ca6fb3e', '347', 'lemon yellow hue hue', ' AA S2 O I', 'lemon_yellow_hue_hue 347 AA S2 O I.png');

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

--
-- Dumping data for table `colours_products`
--

INSERT INTO `colours_products` (`id`, `product_id`, `colour_id`) VALUES
('4fd04735-1f44-499b-b27d-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fd04735-e36c-423d-abd8-12649ca6fb3e'),
('4fd04735-5624-4068-993e-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fd04735-89a8-42f6-a0f1-12649ca6fb3e'),
('4fd04735-56d8-439f-9cda-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fd04735-0678-4fb3-b2b5-12649ca6fb3e'),
('4fd04735-c54c-4f4c-8ac3-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fd04735-fc54-4e3a-9cdc-12649ca6fb3e'),
('4fd04735-e63c-4a8b-82f2-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fd04735-2eb0-4c50-b00d-12649ca6fb3e'),
('4fd04735-f680-4397-a6e9-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fd04734-42d4-49b9-953b-12649ca6fb3e'),
('4fd047eb-24f8-4840-a5e2-12649ca6fb3e', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd047eb-00c4-4255-b354-12649ca6fb3e'),
('4fd047eb-3358-4a96-8c62-12649ca6fb3e', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd047eb-bc24-4cfd-9972-12649ca6fb3e'),
('4fd047eb-46e4-4028-99bb-12649ca6fb3e', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd047eb-d4c4-468e-b22c-12649ca6fb3e'),
('4fd047eb-b928-4f0d-8d31-12649ca6fb3e', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd047eb-9c78-4339-911e-12649ca6fb3e'),
('4fd047eb-ba48-4d36-8a1e-12649ca6fb3e', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd047eb-c92c-4e41-9da0-12649ca6fb3e'),
('4fd047ec-51a4-4dda-a769-12649ca6fb3e', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd047eb-6c80-4c9d-beae-12649ca6fb3e'),
('4fd050de-4e20-4fa0-a312-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050de-3c40-4399-8b71-12649ca6fb3e'),
('4fd050de-845c-4782-9f68-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050de-7b60-4862-95ca-12649ca6fb3e'),
('4fd050de-8fb4-464e-a9c7-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050de-eea8-4f90-8746-12649ca6fb3e'),
('4fd050de-eb58-497d-8fcd-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050de-e328-4116-a9a6-12649ca6fb3e'),
('4fd050df-3848-442d-aa8a-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-b834-4c24-894d-12649ca6fb3e'),
('4fd050df-5bbc-418a-911d-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-b5a0-4b13-8c8b-12649ca6fb3e'),
('4fd050df-7ffc-48cf-b989-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-6b28-4e48-99ff-12649ca6fb3e'),
('4fd050df-8984-4994-82bb-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-327c-4270-80dd-12649ca6fb3e'),
('4fd050df-9d3c-4443-b38b-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-0948-4a95-a835-12649ca6fb3e'),
('4fd050df-c8d0-47f8-911a-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-35d0-445f-8c82-12649ca6fb3e'),
('4fd050df-de10-4c70-a7ab-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-00d4-4dc9-a53c-12649ca6fb3e'),
('4fd050e0-ae10-4d4f-b1e6-12649ca6fb3e', '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fd050df-03ec-42c0-9b85-12649ca6fb3e');

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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `brand_sub_catalogue_id`, `category_sub_id`, `name`, `desc`, `template`, `main_pict`, `sub_pict1`, `sub_pict2`, `sub_pict3`, `sub_pict4`, `colour_pdf`, `product_terkait1`, `product_terkait2`, `tutorial1`, `tutorial2`, `tutorial3`) VALUES
('4fd04705-4e14-4846-9bf6-12649ca6fb3e', '4fc72786-1c98-45dc-80e0-12a09ca6fb3e', '4fc70fbe-4a3c-465f-a5f1-12a09ca6fb3e', 'Artic', 'barang bagus', 'Cat', '5431339049733.jpg', '4651339049780.png', '', '', '', '6631339049780.pdf', '', '', '', '', ''),
('4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fc72786-1c98-45dc-80e0-12a09ca6fb3e', '4fc70fbe-4a3c-465f-a5f1-12a09ca6fb3e', 'monkey', 'skjaksjaksjakjskasasas', 'Cat', '2121339049921.png', '7981339049963.png', '', '', '', '9891339049963.pdf', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '', '', '', ''),
('4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '4fc72772-e1c4-4161-8ff3-12a09ca6fb3e', '4fc70fbe-4a3c-465f-a5f1-12a09ca6fb3e', '09093993892', '342434234', 'Cat', '5341339052022.jpg', '6941339052254.png', '', '', '', '1281339052254.pdf', '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '', '', '');

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

--
-- Dumping data for table `selling_units`
--

INSERT INTO `selling_units` (`id`, `old_price`, `discount`, `product_id`, `item_number`, `name`, `size`, `new_price`) VALUES
('4fd04769-616c-4763-95ab-12649ca6fb3e', 300, 10, '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '201928982', 'djshshdjhdjs', 'ueyueyw', 270),
('4fd04819-9bcc-42ed-8945-12649ca6fb3e', 2147483647, 10, '4fd047c2-a208-4dab-b3b6-12649ca6fb3e', '232132132', 'asASSAA', 'aSAs', 2147483647),
('4fd04a65-426c-4a6c-8f14-12649ca6fb3e', 1000000, 99.99, '4fd04705-4e14-4846-9bf6-12649ca6fb3e', '1412', 'asdfsafew', '1412ml', 100),
('4fd0510b-288c-4b37-9dc2-12649ca6fb3e', 100000000, 30, '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '12323123', 'sdasdsad', '12ee', 70000000),
('4fd05141-2660-4562-b7d6-12649ca6fb3e', 12, 100, '4fd04ff6-af60-4226-b9e2-12649ca6fb3e', '344344343', 'erdsfdsfgfdg', 'fg4', 0);

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

--
-- Dumping data for table `selling_units_colours`
--

INSERT INTO `selling_units_colours` (`id`, `selling_unit_id`, `colour_id`) VALUES
('4fd04819-098c-42d3-8b69-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd047eb-6c80-4c9d-beae-12649ca6fb3e'),
('4fd04819-3530-4842-9b78-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd04735-89a8-42f6-a0f1-12649ca6fb3e'),
('4fd04819-3c58-41db-b740-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd04735-0678-4fb3-b2b5-12649ca6fb3e'),
('4fd04819-4a08-4bb4-8c51-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd04735-2eb0-4c50-b00d-12649ca6fb3e'),
('4fd04819-75e8-4b9b-9c63-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd047eb-bc24-4cfd-9972-12649ca6fb3e'),
('4fd04819-8908-4ec0-863b-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd04734-42d4-49b9-953b-12649ca6fb3e'),
('4fd04819-a2dc-4ab2-8759-12649ca6fb3e', '4fd04819-9bcc-42ed-8945-12649ca6fb3e', '4fd047eb-9c78-4339-911e-12649ca6fb3e'),
('4fd04dfa-51bc-4184-81ad-12649ca6fb3e', '4fd04769-616c-4763-95ab-12649ca6fb3e', '4fd04735-e36c-423d-abd8-12649ca6fb3e'),
('4fd04dfa-7f18-48bd-b439-12649ca6fb3e', '4fd04769-616c-4763-95ab-12649ca6fb3e', '4fd04735-89a8-42f6-a0f1-12649ca6fb3e'),
('4fd04dfb-5834-4904-a29a-12649ca6fb3e', '4fd04769-616c-4763-95ab-12649ca6fb3e', '4fd04735-2eb0-4c50-b00d-12649ca6fb3e'),
('4fd04dfb-5894-426f-a5e1-12649ca6fb3e', '4fd04769-616c-4763-95ab-12649ca6fb3e', '4fd04735-0678-4fb3-b2b5-12649ca6fb3e'),
('4fd04dfb-789c-4612-ba22-12649ca6fb3e', '4fd04769-616c-4763-95ab-12649ca6fb3e', '4fd04735-fc54-4e3a-9cdc-12649ca6fb3e'),
('4fd04e0a-61a4-4b53-a165-12649ca6fb3e', '4fd04a65-426c-4a6c-8f14-12649ca6fb3e', '4fd04735-2eb0-4c50-b00d-12649ca6fb3e'),
('4fd04e0a-86bc-448f-a291-12649ca6fb3e', '4fd04a65-426c-4a6c-8f14-12649ca6fb3e', '4fd04735-89a8-42f6-a0f1-12649ca6fb3e'),
('4fd04e0a-9310-4d29-930d-12649ca6fb3e', '4fd04a65-426c-4a6c-8f14-12649ca6fb3e', '4fd04735-e36c-423d-abd8-12649ca6fb3e'),
('4fd04e0a-e5c0-4c41-8107-12649ca6fb3e', '4fd04a65-426c-4a6c-8f14-12649ca6fb3e', '4fd04734-42d4-49b9-953b-12649ca6fb3e'),
('4fd04e0a-f188-4dce-9541-12649ca6fb3e', '4fd04a65-426c-4a6c-8f14-12649ca6fb3e', '4fd04735-0678-4fb3-b2b5-12649ca6fb3e'),
('4fd0510b-37e4-4fb9-851b-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050de-e328-4116-a9a6-12649ca6fb3e'),
('4fd0510b-4598-4a12-b3f2-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050df-327c-4270-80dd-12649ca6fb3e'),
('4fd0510b-4c70-415d-b0ef-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050de-7b60-4862-95ca-12649ca6fb3e'),
('4fd0510b-9d8c-4e1c-bc4c-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050de-3c40-4399-8b71-12649ca6fb3e'),
('4fd0510b-b1ec-4933-84ac-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050df-0948-4a95-a835-12649ca6fb3e'),
('4fd0510b-d2f0-4db6-a863-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050de-eea8-4f90-8746-12649ca6fb3e'),
('4fd0510c-61fc-471f-a336-12649ca6fb3e', '4fd0510b-288c-4b37-9dc2-12649ca6fb3e', '4fd050df-35d0-445f-8c82-12649ca6fb3e'),
('4fd05141-353c-4269-8e45-12649ca6fb3e', '4fd05141-2660-4562-b7d6-12649ca6fb3e', '4fd050df-327c-4270-80dd-12649ca6fb3e'),
('4fd05141-62fc-469d-9de1-12649ca6fb3e', '4fd05141-2660-4562-b7d6-12649ca6fb3e', '4fd050de-3c40-4399-8b71-12649ca6fb3e'),
('4fd05141-c28c-453f-8c7c-12649ca6fb3e', '4fd05141-2660-4562-b7d6-12649ca6fb3e', '4fd050df-0948-4a95-a835-12649ca6fb3e'),
('4fd05141-cd38-4f7d-b94d-12649ca6fb3e', '4fd05141-2660-4562-b7d6-12649ca6fb3e', '4fd050de-7b60-4862-95ca-12649ca6fb3e');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
