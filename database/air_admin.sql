-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 05, 2018 at 02:53 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `air_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_camera`
--

CREATE TABLE `add_camera` (
  `c_id` int(11) NOT NULL,
  `brand_name` varchar(20) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `effective_pixels` varchar(10) NOT NULL,
  `img_type` varchar(10) NOT NULL,
  `digital_zoom` varchar(10) NOT NULL,
  `video_resolution` varchar(10) NOT NULL,
  `flash_memory` varchar(10) NOT NULL,
  `battery` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `warranty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_camera`
--

INSERT INTO `add_camera` (`c_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `effective_pixels`, `img_type`, `digital_zoom`, `video_resolution`, `flash_memory`, `battery`, `weight`, `warranty`) VALUES
(12, 'Canon IXUS 190', '14', 'Air_camera_images/aa9b0b5d0070cc5cbf3b1e7400bb6e22canon_10.jpeg', 'Air_camera_images/aa9b0b5d0070cc5cbf3b1e7400bb6e22canon_8.jpeg', '9295', 'Blue', '20', 'jpeg', '10', '1200', '12', '15', '470', '1'),
(13, 'GoPro Action', '3', 'Air_camera_images/326c447dd8d699c11762bc9d6bfce4d2GoPro_4.jpg', 'Air_camera_images/326c447dd8d699c11762bc9d6bfce4d2GoPro_10.jpg', '6000', 'Black', '18', 'jpg', '14', '1000', '8', '20', '400', '2'),
(14, 'GoPro Hero Sports', '2', 'Air_camera_images/66686748297c268aca7484859ba96c76GoPro_6.jpg', 'Air_camera_images/66686748297c268aca7484859ba96c76GoPro_7.jpg', '16990', 'Black', '10', 'jpg', '12', '1440', '8', '14', '550', '2'),
(15, 'sony s11', '4', 'Air_camera_images/6d1d0b6b69ee471392744aa6108cddc8sony_20.jpg', 'Air_camera_images/6d1d0b6b69ee471392744aa6108cddc8sony_23.jpg', '12990', 'Black', '20', 'jpg', '10', '1200', '8', '16', '600', '2'),
(16, 'Nikon D3400', '2', 'Air_camera_images/287353eb727a03d6e8bacde72c312ee3nikon_6.jpg', 'Air_camera_images/287353eb727a03d6e8bacde72c312ee3nikon_7.jpg', '34000', 'Black', '12', 'jpg', '24', '1920', '16', '24', '700', '2');

-- --------------------------------------------------------

--
-- Table structure for table `add_headphone`
--

CREATE TABLE `add_headphone` (
  `h_id` int(11) NOT NULL,
  `brand_name` varchar(10) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `headphone_type` varchar(20) NOT NULL,
  `connectivity` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `warranty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_headphone`
--

INSERT INTO `add_headphone` (`h_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `headphone_type`, `connectivity`, `weight`, `warranty`) VALUES
(7, 'SONY s1', '7', 'Air_headphone_images/c9bf9b200106e90cd6fe5dad88ccb96dsony_1.jpeg', 'Air_headphone_images/c9bf9b200106e90cd6fe5dad88ccb96dsony_2.jpeg', '350', 'BLACK', 'Over the Ear', 'Wired', '120g', '2'),
(9, 'Bose Quiet', '15', 'Air_headphone_images/5a9b741ba6d66626608545022c9007babose_2.jpg', 'Air_headphone_images/5a9b741ba6d66626608545022c9007babose_4.jpg', '25200', 'Black', 'Over the Ear', 'Wired', '700', '1'),
(10, 'Mic E22MP', '15', 'Air_headphone_images/363dbd7ef3af55a83ef67171a8a6159emic_1.jpg', 'Air_headphone_images/363dbd7ef3af55a83ef67171a8a6159emic_2.jpg', '275', 'Red', 'In the Ear', 'Wired', '15', '2'),
(11, 'Sony MDR-E', '4', 'Air_headphone_images/f17e51a8defff3ec9db5d77eb4026d79sony_5.jpg', 'Air_headphone_images/f17e51a8defff3ec9db5d77eb4026d79sony_3.jpg', '500', 'Blue', 'In the Ear', 'Wired', '6', '2'),
(12, 'Sony MDRXB', '2', 'Air_headphone_images/b2cf02e3825c98f412af8ddb05bace33sony_10.jpg', 'Air_headphone_images/b2cf02e3825c98f412af8ddb05bace33sony_11.jpg', '6299', 'Red', 'Over the Ear', 'Wire Less', '420', '1'),
(13, 'samsung s3', '3', 'Air_headphone_images/be32d0ddb99008d6b564ee2905c75538samsung-1.jpeg', 'Air_headphone_images/be32d0ddb99008d6b564ee2905c75538samsung-3.jpeg', '599', 'Blue', 'In the Ear', 'Wired', '7', '2');

-- --------------------------------------------------------

--
-- Table structure for table `add_laptop`
--

CREATE TABLE `add_laptop` (
  `l_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `hard_disk` varchar(10) NOT NULL,
  `dis_size` varchar(10) NOT NULL,
  `os` varchar(20) NOT NULL,
  `processor` varchar(20) NOT NULL,
  `processor_g` varchar(20) NOT NULL,
  `graphics_card` varchar(10) NOT NULL,
  `camera_f` varchar(10) NOT NULL,
  `battery` varchar(100) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `warranty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_laptop`
--

INSERT INTO `add_laptop` (`l_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `ram`, `hard_disk`, `dis_size`, `os`, `processor`, `processor_g`, `graphics_card`, `camera_f`, `battery`, `weight`, `warranty`) VALUES
(9, 'Asus Pentium', '8', 'Air_laptop_images/ac80fc9faceb0468b16b96a6988e1854asus_1.jpg', 'Air_laptop_images/ac80fc9faceb0468b16b96a6988e1854asus-na-laptop-original-imaf9ph3rdteekcz.jpg', '17990', 'Black', '4', '1', '15.6', 'Wndows 10 Home', 'Quad Core', '7th', '2', '2', '40', '2', '2'),
(11, 'HP 15q', '3', 'Air_laptop_images/7aabe3e7dc21418a8164e65fec3c4fa2hp_5.jpg', 'Air_laptop_images/7aabe3e7dc21418a8164e65fec3c4fa2hp_6.jpg', '23990', 'Black', '4', '1', '15.6', 'Wndows 10 Home', 'Core A9', '7th', '2', '4', '48', '1.86', '2'),
(12, 'Asus VivoBook', '3', 'Air_laptop_images/3933fff1cb367d3814774c7d2e0b5dd7asus_9.jpg', 'Air_laptop_images/3933fff1cb367d3814774c7d2e0b5dd7asus_6.jpg', '51990', 'Firmament', '8', '1', '14.2', 'Window 10 Home', 'core i5', '8th', '4', '2.1', '48', '2.2', '2'),
(13, 'Dell Inspiron 15', '2', 'Air_laptop_images/7d19d1c5ccbd125227c088d419bbbbbedell_10.jpg', 'Air_laptop_images/7d19d1c5ccbd125227c088d419bbbbbedell_13.jpg', '40990', 'Licorice B', '8', '1', '15.6', 'Wndows 10 Home', 'Quad Core', '7th', '4', '1.2', '44', '2.22', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_mobile`
--

CREATE TABLE `add_mobile` (
  `m_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` varchar(20) NOT NULL,
  `ram` varchar(10) NOT NULL,
  `rom` varchar(10) NOT NULL,
  `dis_size` varchar(10) NOT NULL,
  `android_os` varchar(20) NOT NULL,
  `camera_real` varchar(10) NOT NULL,
  `camera_front` varchar(10) NOT NULL,
  `battery` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `warranty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_mobile`
--

INSERT INTO `add_mobile` (`m_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `ram`, `rom`, `dis_size`, `android_os`, `camera_real`, `camera_front`, `battery`, `weight`, `warranty`) VALUES
(11, 'honor H2', '10', 'Air_mobile_images/12c5ad8ba3238cbed30183e10ac89b71honor_1.jpg', 'Air_mobile_images/12c5ad8ba3238cbed30183e10ac89b71honor-7a-v100r001-aum-al20-original-imaf5h4amtq4heys_002.jpg', '25000', 'gold', '4', '32', '14.2', 'android orea', '13.2', '22.3', '2500', '500', '10'),
(12, 'Apple iPhone SE', '10', 'Air_mobile_images/6d1342ae65ebdbe052b507c925baf0a0iphone_13.jpg', 'Air_mobile_images/6d1342ae65ebdbe052b507c925baf0a0iphone_12.jpg', '15999', 'Rose Gold', '4', '32', '10.16', 'Apple A9', '12', '1.2', '4500', '250', '1'),
(13, 'Honor 7A', '4', 'Air_mobile_images/bc1cd4c7cf2390f81bf1e199eda74129honor_5.jpg', 'Air_mobile_images/bc1cd4c7cf2390f81bf1e199eda74129honor_6.jpg', '7999', 'Gold', '3', '32', '5.7', 'Android Pie', '13', '8', '3000', '420', '1'),
(14, 'Apple iPhone 6', '1', 'Air_mobile_images/7c6a3cdfcece844450d1583dbd416846iphone_4.jpg', 'Air_mobile_images/7c6a3cdfcece844450d1583dbd416846iphone_10.jpg', '19999', 'Space Grey', '4', '32', '4.7', 'Apple A8 64-bit', '8', '1.2', '4500', '440', '1'),
(15, 'OPPO F9', '2', 'Air_mobile_images/1be15d4fa628bf4fcd1cd857a9264c3aoppo_23.jpg', 'Air_mobile_images/1be15d4fa628bf4fcd1cd857a9264c3aoppo_22.jpg', '18990', 'Stellar Purple', '4', '64', '6.3', 'Android Oreo', '16', '16', '3500', '520', '1'),
(16, 'OPPO F9 Pro', '3', 'Air_mobile_images/6fa71f07b6d3783e3b39e8e5de11313aoppo_27.jpg', 'Air_mobile_images/6fa71f07b6d3783e3b39e8e5de11313aoppo_20.jpg', '23990', 'Twilight Blue', '6', '64', '6.3', 'Android Pie', '16', '25', '5200', '470', '1'),
(17, 'Samsung Galaxy On Nxt', '5', 'Air_mobile_images/0f321c5a152f1234f6b5276bd0fd4438samsung_9.jpg', 'Air_mobile_images/0f321c5a152f1234f6b5276bd0fd4438samsung_5.jpg', '9990', 'Black', '3', '64', '5.5', 'Android Oreo', '13', '8', '4500', '400', '1'),
(18, 'Samsung Galaxy On Nxt', '2', 'Air_mobile_images/516141e593fee10415776e1da507ff84samsung_3.jpg', 'Air_mobile_images/516141e593fee10415776e1da507ff84samsung_11.jpg', '9990', 'Gold', '3', '64', '5.5', 'Android Pie', '13', '8', '4200', '400', '1'),
(19, 'Vivo V11 Pro', '6', 'Air_mobile_images/01bd97d56d3c4c29f864261bb980b3cevivo_16.jpg', 'Air_mobile_images/01bd97d56d3c4c29f864261bb980b3cevivo_15.jpg', '25990', 'Starry Night Black', '6', '64', '6.41', 'Android Pie', '12', '25', '3400', '440', '1'),
(20, 'Vivo Y81', '2', 'Air_mobile_images/6c16e9b76c6cfc2cfcda8ab841f805f1vivo_19.jpg', 'Air_mobile_images/6c16e9b76c6cfc2cfcda8ab841f805f1vivo_21.jpg', '11990', 'Gold', '3', '32', '6.1', 'Android Oreo', '13', '5', '3260', '470', '1'),
(21, 'Apple iPhone', '3', 'Air_mobile_images/9a5fd83aece5d005f318fbd8b4354c7aiphone_11.jpg', 'Air_mobile_images/9a5fd83aece5d005f318fbd8b4354c7aiphone_16.jpg', '15999', 'Space Grey', '4', '32', '4', ' iOS 10', '12', '1.2', '4500', '450', '1'),
(22, 'Apple iPhone XS', '2', 'Air_mobile_images/28119cd798219436d2f7fcf8e8d85842iphone_17.jpg', 'Air_mobile_images/28119cd798219436d2f7fcf8e8d85842iphone_18.jpg', '104900', 'Gold', '4', '64', '6.5', 'iOS 12', '12', '7', '4700', '208', '1');

-- --------------------------------------------------------

--
-- Table structure for table `add_pendrive`
--

CREATE TABLE `add_pendrive` (
  `p_id` int(11) NOT NULL,
  `brand_name` varchar(100) NOT NULL,
  `product_qty` varchar(10) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `price` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL,
  `capacity` varchar(10) NOT NULL,
  `usb_version` varchar(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `speed` varchar(10) NOT NULL,
  `weight` varchar(10) NOT NULL,
  `warranty` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `add_pendrive`
--

INSERT INTO `add_pendrive` (`p_id`, `brand_name`, `product_qty`, `img1`, `img2`, `price`, `color`, `capacity`, `usb_version`, `type`, `speed`, `weight`, `warranty`) VALUES
(11, 'sony s5', '4', 'Air_penDrive_images/f693d9baa9efeffaf906ae41aa3e54a1sony_2.jpeg', 'Air_penDrive_images/f693d9baa9efeffaf906ae41aa3e54a1sony_4.jpg', '400', 'Black', '32', '3.0', 'plastic', '100', '9', '3'),
(12, 'SanDisk iXpand', '14', 'Air_penDrive_images/28f1bdaf02549cb648175be4cf1f6f9fsandisk_11.jpg', 'Air_penDrive_images/28f1bdaf02549cb648175be4cf1f6f9fsandisk_12.jpg', '2499', 'Grey', '64', '3.0', 'Plastic', '100', '5', '3'),
(13, 'Sony USM32MX3', '5', 'Air_penDrive_images/863b721e17e6ec6b407f1c383157b4e6sony_10.jpg', 'Air_penDrive_images/863b721e17e6ec6b407f1c383157b4e6sony_16.jpg', '799', 'Glod', '32', '3.1', 'Metal', '100', '6.6', '3'),
(14, 'Sony USM32X', '4', 'Air_penDrive_images/b9d62eae53f58a3468a408fbd974f635sony_20.jpg', 'Air_penDrive_images/b9d62eae53f58a3468a408fbd974f635sony_21.jpg', '699', 'Black', '32', '3.1', 'Plastic', '110', '6', '2'),
(15, 'Toshiba Hayabusa', '5', 'Air_penDrive_images/07d5df6f291f25d51bfb80c149f3c446toshiba_6.jpg', 'Air_penDrive_images/07d5df6f291f25d51bfb80c149f3c446toshiba_7.jpg', '490', 'Light Blue', '8', '3.0', 'Plastic', '100', '5', '2'),
(16, 'Toshiba U364', '2', 'Air_penDrive_images/2a36e7b66d180ee78886313f8a723eedtoshiba_10.jpg', 'Air_penDrive_images/2a36e7b66d180ee78886313f8a723eedtoshiba_11.jpg', '3599', 'Silver', '64', '3.0', 'Metal', '100', '12', '2'),
(17, 'SanDisk SDDD3', '3', 'Air_penDrive_images/a658dbe7c3287d3309f4b1e328113545sandisk_15.jpg', 'Air_penDrive_images/a658dbe7c3287d3309f4b1e328113545sandisk_16.jpg', '1149', 'Gold', '64', '3.0', 'Plastic', '110', '8', '3'),
(18, 'Printland Credit Card', '5', 'Air_penDrive_images/bd18bc2a17927ec98c5a54a73228f32cpendrive-1.jpg', 'Air_penDrive_images/bd18bc2a17927ec98c5a54a73228f32cpendrive-2.jpg', '399', 'Multicolor', '8', '2.0', 'Plastic', '100', '11', '2'),
(19, 'HP X765W', '5', 'Air_penDrive_images/5f78485250a8c77739a9cf08a850951dhp_12.jpg', 'Air_penDrive_images/5f78485250a8c77739a9cf08a850951dhp_13.jpg', '1999', 'White', '128', '3.0', 'Plastic', '75', '8.8', '2');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `image`) VALUES
(3, 'Lingraj', '143', 'Air_admin_images/da82e2dd5bc4ba144e3305d5f96213dbIMG_1538073098927.jpg'),
(6, 'Prakash', '123', 'Air_admin_images/ae4a599cd46ebbe172b225df3c026430IMG_1537644313308.jpg'),
(7, 'raj', '143', 'Air_admin_images/802a26fe7b76d07eb6bfe3b1a67cd575lenovo_19.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cantact`
--

CREATE TABLE `cantact` (
  `can_id` int(11) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `msg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cantact`
--

INSERT INTO `cantact` (`can_id`, `e_mail`, `msg`) VALUES
(1, '0', 'hello friend'),
(2, '0', 'fhdfhfdnfg'),
(3, 'prakash@gmail.com', 'hi lingraj'),
(4, 'upadhyaya@gmail.com', 'shhsh'),
(5, 'raj@gmail.com', 'hi boss'),
(6, 'fg@fh', 'fhdgjd'),
(7, 'mi@gmail.com', 'miiiiiiii'),
(8, 'fg@fh', 'rgngh'),
(9, 'raj@gmail.com', 'sdfghjkdfg'),
(10, 'vb@fgfh', 'fhdfhfd'),
(11, 'shamal@gmail.com', 'hello dada'),
(12, 'bhagya@gmail.com', '*mobile image displayed is blur.!!!!!!!\r\n*cart is not added automatically.\r\n*tax should be added for the product price above 1000 not below.');

-- --------------------------------------------------------

--
-- Table structure for table `order_info`
--

CREATE TABLE `order_info` (
  `o_id` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `date_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order_info`
--

INSERT INTO `order_info` (`o_id`, `id`, `date_time`) VALUES
(2, 1, '2018-10-17 07:11:32'),
(3, 2, '2018-10-18 16:16:08'),
(4, 5, '2018-10-18 05:28:09'),
(5, 6, '2018-10-19 16:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_cart`
--

CREATE TABLE `user_cart` (
  `cart_id` int(11) NOT NULL,
  `cart_user_id` int(10) NOT NULL,
  `cart_img` varchar(100) NOT NULL,
  `cart_name` varchar(100) NOT NULL,
  `cart_price` varchar(100) NOT NULL,
  `cart_qty` varchar(100) NOT NULL,
  `cart_total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_cart`
--

INSERT INTO `user_cart` (`cart_id`, `cart_user_id`, `cart_img`, `cart_name`, `cart_price`, `cart_qty`, `cart_total`) VALUES
(208, 23, 'Air_penDrive_images/f693d9baa9efeffaf906ae41aa3e54a1sony_2.jpeg', 'sony s5', '400', '1', ''),
(211, 24, 'Air_camera_images/b85c6df7bb1d30005f9444cab486ea03sony_1.jpeg', 'SONY s11', '15999', '1', '499'),
(212, 25, 'Air_penDrive_images/9cafc699e62bc14227ada61c308e352csony_10.jpg', 'sony s2', '499', '1', '499'),
(213, 26, 'Air_penDrive_images/9cafc699e62bc14227ada61c308e352csony_10.jpg', 'sony s2', '499', '1', '499'),
(214, 26, 'Air_camera_images/40e4cbfd7997d8d0b3104b6be64c4886canon_2.jpg', 'Canon c1', '10999', '1', '10999'),
(215, 26, 'Air_laptop_images/05ddcec4c5b42accbc2a7a6c296c9cc2lenovo_18.jpg', 'LENOVO L2', '45999', '1', ''),
(216, 27, 'Air_laptop_images/515572a48d874f650b63bc460fc76963hp_1.jpeg', 'HP H2', '49999', '1', '49999'),
(217, 27, 'Air_mobile_images/12c5ad8ba3238cbed30183e10ac89b71honor_1.jpg', 'mi max 2', '25000', '1', '25000'),
(221, 1, 'Air_camera_images/aa9b0b5d0070cc5cbf3b1e7400bb6e22canon_10.jpeg', 'Canon IXUS 190', '9295', '1', '9295'),
(222, 29, 'Air_penDrive_images/863b721e17e6ec6b407f1c383157b4e6sony_10.jpg', 'Sony USM32MX3', '799', '1', '799');

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `l_name` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `e_mail` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`id`, `username`, `password`, `f_name`, `l_name`, `mobile_no`, `e_mail`, `address`, `city`, `pincode`) VALUES
(1, 'sree', 'sree', 'sree', 's d', '123456789', 'sree@gmail.com', 'RR Nagar', 'Bangaloru', '560074'),
(2, 'bhagaya', 'bhagaya', 'bhagaya', 'y', '987654321', 'bhagaya@gmail.com', 'kengeri', 'Bangaluru', '560066'),
(5, 'Jayashree', 'jaya', 'Jayashree', 'T D \r\n', '5555556655', 'jaya@gmail.com', 'kengeri', 'Bangaluru', '540074'),
(6, 'Prakash', 'Prakash', 'Prakash', 'B L', '659568457', 'Prakash@gmail.com', 'uttarahalli', 'bangaluru', '540072'),
(14, 'raj', 'raj', '', '', '2222222', '', '', '', ''),
(15, 'atul', '1', '', '', '4555', '', '', '', ''),
(18, 'shekh', '111', '', '', '111', '', '', '', ''),
(19, 'ram', 'ram', '', '', '123', '', '', '', ''),
(20, 'shamal', '123', 'shamal', 'naykode', '99999', 'sham@gmail.com', 'kudagi', 'bhijapur', '123456'),
(21, 'akshay', '121', 'akshay', 'bansode', '8787878787', 'akshay@gmail.com', '135,Bharat Ratna Indira Nagar, 70 foot Road', 'solapur', '413006'),
(22, 'ananya', '9090', 'ananya', 'av', '8787875656', 'ananya@gmail.com', 'kengeri', 'bangaloru', '560074'),
(23, 'vrishali', '999', 'vrishali', 'deshpande', '9878765431', 'vrishali@gmail.com', 'icgagiri matha', 'solapur', '413001'),
(24, 'Sagar', '2552', 'sagar', 'battul', '7676767676', 'sagar@gmail.com', 'gar kul', 'latur', '412006'),
(25, 'PoojaGowda', 'poo', 'Pooja', 'Gowda', '7338236948', 'ppoojapoo1209@gmail.com', 'A.D Halli Banglore', 'Bangalore', '560079'),
(26, 'pooja', '123', 'Pooja', 'Gowda', '6767676543', 'ppoojapoo1209@gmail.com', 'kengiri', 'Bangalore', '560079'),
(27, 'jaymah', '8147', 'jay', 'mah', '9874561230', 'jay@gmail.com', 'aaa', 'nellore', '560058'),
(28, 'kgkgkgk', '24242', '', '', '3434343434', '', '', '', ''),
(29, 'shetty', '123', 'bhagya', 'shree', '7019211747', 'bhagya@gmail.com', 'malagala,banglore-91', 'mysore', '560098');

-- --------------------------------------------------------

--
-- Table structure for table `user_wishlist`
--

CREATE TABLE `user_wishlist` (
  `wish_id` int(11) NOT NULL,
  `wish_img` varchar(100) NOT NULL,
  `wish_name` varchar(100) NOT NULL,
  `wish_price` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_wishlist`
--

INSERT INTO `user_wishlist` (`wish_id`, `wish_img`, `wish_name`, `wish_price`) VALUES
(12, 'awse', 'def', ''),
(13, 'mnl', 'asdf', '234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_camera`
--
ALTER TABLE `add_camera`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `add_headphone`
--
ALTER TABLE `add_headphone`
  ADD PRIMARY KEY (`h_id`);

--
-- Indexes for table `add_laptop`
--
ALTER TABLE `add_laptop`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `add_mobile`
--
ALTER TABLE `add_mobile`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `add_pendrive`
--
ALTER TABLE `add_pendrive`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cantact`
--
ALTER TABLE `cantact`
  ADD PRIMARY KEY (`can_id`);

--
-- Indexes for table `order_info`
--
ALTER TABLE `order_info`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `user_cart`
--
ALTER TABLE `user_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  ADD PRIMARY KEY (`wish_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_camera`
--
ALTER TABLE `add_camera`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `add_headphone`
--
ALTER TABLE `add_headphone`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `add_laptop`
--
ALTER TABLE `add_laptop`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `add_mobile`
--
ALTER TABLE `add_mobile`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `add_pendrive`
--
ALTER TABLE `add_pendrive`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `cantact`
--
ALTER TABLE `cantact`
  MODIFY `can_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `order_info`
--
ALTER TABLE `order_info`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user_cart`
--
ALTER TABLE `user_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `user_wishlist`
--
ALTER TABLE `user_wishlist`
  MODIFY `wish_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
