-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 28, 2024 at 12:21 PM
-- Server version: 10.11.8-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u496524825_export_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `name`, `password`) VALUES
(3, 'gungun', '7fce692bdefa027442c145de88a82066');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `buyer_id` int(100) NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `buyer_email` varchar(200) NOT NULL,
  `buyer_phone` int(19) NOT NULL,
  `enquiry_for` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`buyer_id`, `buyer_name`, `buyer_email`, `buyer_phone`, `enquiry_for`) VALUES
(1, 'Rktika', 'abc@gmail.com', 15252525, '');

-- --------------------------------------------------------

--
-- Table structure for table `buyleads`
--

CREATE TABLE `buyleads` (
  `buyleads_id` int(100) NOT NULL,
  `buyer_name` varchar(200) NOT NULL,
  `queiry_for` varchar(255) NOT NULL,
  `number` varchar(200) NOT NULL,
  `accessed_at` date NOT NULL DEFAULT current_timestamp(),
  `user_id` int(100) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `buyer_location` varchar(100) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `state_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buyleads`
--

INSERT INTO `buyleads` (`buyleads_id`, `buyer_name`, `queiry_for`, `number`, `accessed_at`, `user_id`, `buyer_email`, `date`, `buyer_location`, `quantity`, `product_name`, `country_name`, `state_name`) VALUES
(13, 'Patrick Monney', 'Leather Products ', '15145866558', '2024-08-26', 0, 'patrickmonney@yahoo.com', '2024-08-26', 'Phillipines ', '', 'Watch Straps ', 'Philippines', ''),
(16, 'Manoj', 'Spices ', '96567064041', '2024-08-27', 0, 'info@ahliafood.com', '2024-08-27', ' Kuwait', ' 1 Twenty-Foot Container', 'Spices ( Turmeric, Black Pepper ) ', 'Kuwait', ''),
(17, 'Gian Chand Gupta', 'Spices', '919999846551', '2024-08-27', 0, 'giangupta@gmail.com', '2024-08-27', 'India ', '1 Forty-Foot Container', ' Dried Cloves And Black Pepper ', 'India', 'Maharashtra'),
(18, 'Sampath', 'Incense Sticks', '61401788419', '2024-08-27', 0, 'sms.aussie@gmail.com', '2024-08-27', 'Australia ', '5 Tons ', 'Incense Sticks ', 'Australia', ''),
(19, 'Tirupati', 'Frozen Vegetables ', '96824698162', '2024-08-27', 0, 'pm.afp@assarain.com', '2024-08-27', 'Oman ', '1 Forty-Foot Container', 'Carrots, Peas', 'Oman', ''),
(20, 'Ibrahim', 'Fresh Vegetables ', '9609997200', '2024-08-27', 0, 'ibbeking@hotmail.com', '2024-08-27', 'Maldives', ' 500000 Kilograms', 'Onion, Potatoes And Capsicum', 'Maldives', ''),
(21, 'Frank ', 'Dehydrated Vegetables ', '66807487071', '2024-08-27', 0, 'umibumi39@gmail.com', '2024-08-27', ' Thailand', '1 Ton ', ' Mushrooms', 'Thailand', ''),
(22, 'Prashant', 'Pulses', '97317253215', '2024-08-27', 0, 'pmaghanmal@gmail.com', '2024-08-27', 'Bahrain', ' 1 Twenty-Foot Container', ' Chickpeas And Kidney Beans', 'Bahrain', ''),
(23, ' Mostafa Hamed', 'Pulses ', '96594991200', '2024-08-27', 0, 'mhhm511@yahoo.com', '2024-08-27', ' Kuwait', ' 1 Twenty-Foot Container', 'Kabuli Chickpeas', 'Kuwait', '');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(100) NOT NULL,
  `cat_name` text NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `cat_long_image` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_image`, `cat_long_image`, `cat_slug`) VALUES
(10, 'Agriculture', 'extra_image/Agriculture.jpg', 'extra_image/new.jpg', 'agri'),
(11, 'Apparel & Fashion ', 'extra_image/Apparel & Fashion.jpg', '', 'fasi'),
(12, 'Automobile ', 'extra_image/automobile.jpg', '', 'auto'),
(16, 'Food Products & Beverage ', 'extra_image/foodanddrink.jpg', '', ''),
(18, 'Home Supplies ', 'extra_image/homesuplliess.jpg', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `countries_id` int(100) NOT NULL,
  `country_name` varchar(200) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`countries_id`, `country_name`, `img`) VALUES
(1, 'Afghanistan', ''),
(2, 'Albania', ''),
(3, 'Algeria', ''),
(4, 'Andorra', ''),
(5, 'Angola', ''),
(6, 'Antigua and Barbuda', ''),
(7, 'Argentina', ''),
(8, 'Armenia', ''),
(9, 'Australia', ''),
(10, 'Austria', ''),
(11, 'Azerbaijan', ''),
(12, 'Bahamas', ''),
(13, 'Bahrain', ''),
(14, 'Bangladesh', ''),
(15, 'Barbados', ''),
(16, 'Belarus', ''),
(17, 'Belgium', ''),
(18, 'Belize', ''),
(19, 'Benin', ''),
(20, 'Bhutan', ''),
(21, 'Bolivia', ''),
(22, 'Bosnia and Herzegovina', ''),
(23, 'Botswana', ''),
(24, 'Brazil', ''),
(25, 'Brunei', ''),
(26, 'Bulgaria', ''),
(27, 'Burkina Faso', ''),
(28, 'Burundi', ''),
(29, 'Cabo Verde', ''),
(30, 'Cambodia', ''),
(31, 'Cameroon', ''),
(32, 'Canada', ''),
(33, 'Central African Republic', ''),
(34, 'Chad', ''),
(35, 'Chile', ''),
(36, 'China', ''),
(37, 'Colombia', ''),
(38, 'Comoros', ''),
(39, 'Congo', ''),
(40, 'Costa Rica', ''),
(41, 'Croatia', ''),
(42, 'Cuba', ''),
(43, 'Cyprus', ''),
(44, 'Czech Republic', ''),
(45, 'Denmark', ''),
(46, 'Djibouti', ''),
(47, 'Dominica', ''),
(48, 'Dominican Republic', ''),
(49, 'East Timor', ''),
(50, 'Ecuador', ''),
(51, 'Egypt', ''),
(52, 'El Salvador', ''),
(53, 'Equatorial Guinea', ''),
(54, 'Eritrea', ''),
(55, 'Estonia', ''),
(56, 'Eswatini', ''),
(57, 'Ethiopia', ''),
(58, 'Fiji', ''),
(59, 'Finland', ''),
(60, 'France', ''),
(61, 'Gabon', ''),
(62, 'Gambia', ''),
(63, 'Georgia', ''),
(64, 'Germany', ''),
(65, 'Ghana', ''),
(66, 'Greece', ''),
(67, 'Grenada', ''),
(68, 'Guatemala', ''),
(69, 'Guinea', ''),
(70, 'Guinea-Bissau', ''),
(71, 'Guyana', ''),
(72, 'Haiti', ''),
(73, 'Honduras', ''),
(74, 'Hungary', ''),
(75, 'Iceland', ''),
(76, 'India', ''),
(77, 'Indonesia', ''),
(78, 'Iran', ''),
(79, 'Iraq', ''),
(80, 'Ireland', ''),
(81, 'Israel', ''),
(82, 'Italy', ''),
(83, 'Jamaica', ''),
(84, 'Japan', ''),
(85, 'Jordan', ''),
(86, 'Kazakhstan', ''),
(87, 'Kenya', ''),
(88, 'Kiribati', ''),
(89, 'Korea, North', ''),
(90, 'Korea, South', ''),
(91, 'Kosovo', ''),
(92, 'Kuwait', ''),
(93, 'Kyrgyzstan', ''),
(94, 'Laos', ''),
(95, 'Latvia', ''),
(96, 'Lebanon', ''),
(97, 'Lesotho', ''),
(98, 'Liberia', ''),
(99, 'Libya', ''),
(100, 'Liechtenstein', ''),
(101, 'Lithuania', ''),
(102, 'Luxembourg', ''),
(103, 'Madagascar', ''),
(104, 'Malawi', ''),
(105, 'Malaysia', ''),
(106, 'Maldives', ''),
(107, 'Mali', ''),
(108, 'Malta', ''),
(109, 'Marshall Islands', ''),
(110, 'Mauritania', ''),
(111, 'Mauritius', ''),
(112, 'Mexico', ''),
(113, 'Micronesia', ''),
(114, 'Moldova', ''),
(115, 'Monaco', ''),
(116, 'Mongolia', ''),
(117, 'Montenegro', ''),
(118, 'Morocco', ''),
(119, 'Mozambique', ''),
(120, 'Myanmar', ''),
(121, 'Namibia', ''),
(122, 'Nauru', ''),
(123, 'Nepal', ''),
(124, 'Netherlands', ''),
(125, 'New Zealand', ''),
(126, 'Nicaragua', ''),
(127, 'Niger', ''),
(128, 'Nigeria', ''),
(129, 'North Macedonia', ''),
(130, 'Norway', ''),
(131, 'Oman', ''),
(132, 'Pakistan', ''),
(133, 'Palau', ''),
(134, 'Palestinian Territories', ''),
(135, 'Panama', ''),
(136, 'Papua New Guinea', ''),
(137, 'Paraguay', ''),
(138, 'Peru', ''),
(139, 'Philippines', ''),
(140, 'Poland', ''),
(141, 'Portugal', ''),
(142, 'Qatar', ''),
(143, 'Romania', ''),
(144, 'Russia', ''),
(145, 'Rwanda', ''),
(146, 'Saint Kitts and Nevis', ''),
(147, 'Saint Lucia', ''),
(148, 'Saint Vincent and the Grenadines', ''),
(149, 'Samoa', ''),
(150, 'San Marino', ''),
(151, 'Sao Tome and Principe', ''),
(152, 'Saudi Arabia', ''),
(153, 'Senegal', ''),
(154, 'Serbia', ''),
(155, 'Seychelles', ''),
(156, 'Sierra Leone', ''),
(157, 'Singapore', ''),
(158, 'Slovakia', ''),
(159, 'Slovenia', ''),
(160, 'Solomon Islands', ''),
(161, 'Somalia', ''),
(162, 'South Africa', ''),
(163, 'South Sudan', ''),
(164, 'Spain', ''),
(165, 'Sri Lanka', ''),
(166, 'Sudan', ''),
(167, 'Suriname', ''),
(168, 'Sweden', ''),
(169, 'Switzerland', ''),
(170, 'Syria', ''),
(171, 'Taiwan', ''),
(172, 'Tajikistan', ''),
(173, 'Tanzania', ''),
(174, 'Thailand', ''),
(175, 'Togo', ''),
(176, 'Tonga', ''),
(177, 'Trinidad and Tobago', ''),
(178, 'Tunisia', ''),
(179, 'Turkey', ''),
(180, 'Turkmenistan', ''),
(181, 'Tuvalu', ''),
(182, 'Uganda', ''),
(183, 'Ukraine', ''),
(184, 'United Arab Emirates', ''),
(185, 'United Kingdom', ''),
(186, 'United States', ''),
(187, 'Uruguay', ''),
(188, 'Uzbekistan', ''),
(189, 'Vanuatu', ''),
(190, 'Vatican City', ''),
(191, 'Venezuela', ''),
(192, 'Vietnam', ''),
(193, 'Yemen', ''),
(194, 'Zambia', ''),
(195, 'Zimbabwe', '');

-- --------------------------------------------------------

--
-- Table structure for table `free-listing-product`
--

CREATE TABLE `free-listing-product` (
  `pro_id` int(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `micro_id` int(100) NOT NULL,
  `location` varchar(255) NOT NULL,
  `unit` varchar(200) NOT NULL,
  `price` varchar(200) NOT NULL,
  `countries_name` varchar(200) NOT NULL,
  `state_name` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_id` int(200) NOT NULL,
  `about_company` text NOT NULL,
  `moq` varchar(200) NOT NULL,
  `packaging_type` varchar(200) NOT NULL,
  `product_life` varchar(200) NOT NULL,
  `feature` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `free-listing-product`
--

INSERT INTO `free-listing-product` (`pro_id`, `product_name`, `img1`, `img2`, `img3`, `company_name`, `company_logo`, `product_description`, `cat_id`, `sub_id`, `inner_cat_id`, `micro_id`, `location`, `unit`, `price`, `countries_name`, `state_name`, `user_email`, `user_id`, `about_company`, `moq`, `packaging_type`, `product_life`, `feature`) VALUES
(14, '', 'logo/logo.jpg', '', '', '', '', '', 0, 0, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', ''),
(15, 'cap', 'logo/logo.jpg', '', '', 'web2export', '', 'this is cap', 5, 6, 8, 4, '', '', '', '', '', '', 0, '', '', '', '', ''),
(16, 'bts bags', 'logo/download.jfif', '', '', 'web2export', '', 'this is party bags', 5, 6, 6, 1, '', '', '', '', '', '', 0, '', '', '', '', ''),
(17, 'LED Lamp', 'extra_image/led_lamp.jpg', '', '', 'Tech Innovations', '', 'Energy-efficient LED lamp for home decor', 12, 15, 17, 22, 'New York', '', '', '', '', '', 0, '', '', '', '', ''),
(18, 'Smart Thermostat', 'extra_image/smart_thermostat.jpg', '', '', 'Smart Living Solutions', '', 'WiFi-enabled smart thermostat for home automation', 12, 15, 18, 23, 'San Francisco', '', '', '', '', '', 0, '', '', '', '', ''),
(19, 'Home Security Camera', 'extra_image/security_camera.jpg', '', '', 'Secure Home Solutions', '', 'HD security camera for indoor surveillance', 12, 15, 19, 24, 'Chicago', '', '', '', '', '', 0, '', '', '', '', ''),
(20, 'Water Bottle ', 'logo/mbgwnyy18q3lb0wi22ie083fgghiq3bp.jpg', '', '', 'https://vistaraenterprise.com/', '', 'Water Bottle ', 16, 17, 0, 0, '', '', '', '', '', '', 0, '', '', '', '', ''),
(21, 'PULSES', 'logo/Blue Modern Fashion Shop Logo.png', '', '', 'Tohfa', '', 'FGEWYIEGYIEWGIRGRUI', 12, 14, 35, 12, '', '', '', '', '', '', 0, '', '', '', '', ''),
(22, 'rice', 'logo/pol.PNG', '', '', 'asif traders', '', '\r\nRice is a commonly-eaten food around the world. The varieties of rice are typically classified as short-, medium-, and long-grained. Oryza sativa indica varieties are usually long-grained; Oryza sativa japonica varieties are usually short- or medium-gra', 10, 11, 43, 59, '', '', '', '', '', '', 0, '', '', '', '', ''),
(23, 'rice', 'logo/istockphoto-153737841-612x612.jpg', '', '', 'harsh pri ltd', '', '->my rice iis best', 16, 19, 43, 59, '', '', '', '', '', '', 0, '', '', '', '', ''),
(24, 'cap', 'logo/aerial-view-container-cargo-ship-sea.jpg', '', '', 'sit', '', 'adasd', 11, 0, 0, 0, '', 'km', '12000000000000000', 'India', 'Goa', 'ashu@gmail.com', 0, '', '', '', '', ''),
(25, 'mango', 'logo/aerial-view-container-cargo-ship-sea.jpg', '', '', 'web2export', '', 'ghfghfgh', 10, 0, 0, 0, 'D-vihar new delhi kartik nagar', 'km', '1200', 'Barbados', 'Goa', 'ashu@gmail.com', 0, '', '', '', '', ''),
(26, 'mango', 'user-product-image/christmas-tree-with-gifts.jpg', '', '', 'sithub.com', '', 'asdasd', 12, 0, 0, 0, 'asdasdads', 'km', '1200', 'Albania', 'Goa', 'ashu@gmail.com', 0, '', '', '', '', ''),
(27, 'cap', 'logo/1.jpg', '', '', 'yoyo', '', 'ryrty', 10, 0, 0, 0, 'zszdaad', 'km', '1200', 'Australia', 'Haryana', 'sridevi@gmail.com', 0, 'ryrtyrty', '12 pice', '', 'Long  Life', 'plastic'),
(28, 'cap', 'logo/spring-floral-watercolor-background-vector-green-with-leaf-illustration_53876-126350.avif', '', '', 'sit', '', 'dghfgh', 11, 0, 0, 0, 'zszdaad', '10', '1200', 'Angola', 'Jharkhand', 'sridevi@gmail.com', 0, 'fghfghfgh', '12 pice', '', '2years', 'other, Fresh'),
(29, 'cap', 'logo/logo.png', '', '', 'sit', '', 'r', 11, 0, 0, 0, 'zszdaad', '10', '1200', 'Armenia', 'Bihar', 'shalini@gmail.com', 0, 'etert', '12 pice', '', '2years', 'plastic');

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE `inbox` (
  `id` int(100) NOT NULL,
  `phone_number` varchar(200) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `inbox`
--

INSERT INTO `inbox` (`id`, `phone_number`, `message`) VALUES
(3, '0', 'demo mail '),
(4, '0', 'demo mail '),
(5, '', 'afsdfsdf'),
(6, '8287042772', 'sdfsdf');

-- --------------------------------------------------------

--
-- Table structure for table `inner_cat`
--

CREATE TABLE `inner_cat` (
  `inner_cat_id` int(100) NOT NULL,
  `inner_cat_name` varchar(256) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `inner_cat_image` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inner_cat`
--

INSERT INTO `inner_cat` (`inner_cat_id`, `inner_cat_name`, `sub_id`, `inner_cat_image`, `cat_id`) VALUES
(11, 'Fruit Plants', 10, 'extra_image/1f8f6315e8581bbb5a2e117788b75ada.jpg', 0),
(12, 'Outdoor Plants', 10, 'extra_image/nearly-natural-artificial-trees-5590-64_1000.jpg', 0),
(13, 'Natural Flowers', 10, 'extra_image/garden-roses-pictures-w7cxk84w7qx9e47t.jpg', 0),
(17, 'Bedroom Decor', 15, 'extra_image/bedroom_decor.jpg', 0),
(18, 'Living Room Decor', 15, 'extra_image/living_room_decor.jpg', 0),
(19, 'Kitchen Decor', 15, 'extra_image/kitchen_decor.jpg', 0),
(20, 'Garden Plant', 10, 'extra_image/0263103d0c05490fd8b72f855dd83162.jpg', 0),
(25, 'Harvesters', 11, 'extra_image/3-Row-Model-4YZ-3C-Corn-Harvester6.jpg', 0),
(26, 'Agricultural Irrigation Systems', 11, 'extra_image/', 0),
(27, 'Cultivators', 11, 'extra_image/', 0),
(28, 'Sprinkler Irrigation System', 11, 'extra_image/', 0),
(29, 'Leather Shoes', 13, 'extra_image/Leather Shoes.jpg', 0),
(30, 'Flat Slippers', 13, 'extra_image/Flat Slippers.jpg', 0),
(31, 'Ladies Shoes', 13, 'extra_image/Ladies Shoes.jpg', 0),
(32, 'Shoe Care Products', 13, 'extra_image/image-asset.jpg', 0),
(33, 'Whole Spices', 20, 'extra_image/vostochnie_pryanosti.jpg', 0),
(34, 'Flours', 19, 'extra_image/9872810c18d734006892108ce476d420.jpg', 0),
(35, 'Fresh Fruits', 18, 'extra_image/346356536.jpg', 0),
(36, 'Flavored Tea', 17, 'extra_image/asafdfs.jpg', 0),
(37, 'Coffee Powder', 17, 'extra_image/3517814.jpg', 0),
(38, 'Herbal Tea', 17, 'extra_image/teaafdf.jpg', 0),
(39, 'Black Tea', 17, 'extra_image/63aa535d15927_lg.jpg', 0),
(40, 'Coffee', 17, 'extra_image/kofe-napitok-sahar-chashka.jpg', 0),
(41, 'Green Tea', 17, 'extra_image/green-tea-e1429210531847.jpeg', 0),
(42, 'Tea Premix', 17, 'extra_image/fewerwr.jpg', 0),
(43, 'rice', 19, 'extra_image/144400_andorwin_b5d06327-547b-4649-8027-55ec53fca461.jpg', 0),
(44, 'Pulses', 19, 'extra_image/Tech-Profile_Opportunities-with-high-value-Pulses_Adobe-Stock_117825265_E.jpg', 0),
(45, 'Coconut', 21, 'extra_image/2e70bd72_1b58_11e7_af8b_002191ef9e86_b7e359f3_21c3_11e8_aae7_38d547b42ba9_resize1.jpg', 0),
(46, 'Fresh Vegetables', 22, 'extra_image/gsdg.jpg', 0),
(47, 'Exotic Vegetables', 22, 'extra_image/news_photo-20221027-205111.jpg', 0),
(48, 'Masala Mix', 20, 'extra_image/', 0),
(49, 'Saree', 16, 'extra_image/77613527ea7236ccbaa7d2bf18e2658d.jpg', 0),
(50, 'Ladies Suits', 16, 'extra_image/5decd8b4-1d2f-40bc-8a0f-fca33243f224.png', 0),
(51, 'Auto Electrical Products', 23, 'extra_image/shutterstock.jpg', 0),
(52, 'Casual Shoes ', 13, 'extra_image/fretdd.jpg', 0),
(53, 'Industrial Gloves', 24, 'extra_image/60bdafd8dba98.jpg', 0),
(54, 'Safety Helmets', 24, 'extra_image/Personal-Protective-Equipment.jpg', 0),
(56, 'Organic Fertilizer', 25, 'extra_image/homemade-organic-fertilizer.jpg', 0),
(58, 'Goat', 12, 'extra_image/Goats.jpg', 0),
(59, 'Plant Growth Promoters', 25, 'extra_image/plantttttttttt.jpg', 0),
(60, 'Housekeeping & Cleaning Services', 26, 'extra_image/house-cleaning.jpg', 0),
(61, 'Kitchen Baskets', 27, 'extra_image/vegetable-storage-bin-wood.jpg', 0),
(62, 'Dustbin', 27, 'extra_image/dustbinnn.jpg', 0),
(63, 'Artificial Flower', 28, 'extra_image/Artificialflowers.jpg', 0),
(64, 'Leather Handbag', 29, 'extra_image/handbag.jpg', 0),
(65, 'Leather Cases', 29, 'extra_image/cases.jpg', 0),
(66, 'Dried Fruits ', 18, 'extra_image/driedfruits.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `limit_buylead`
--

CREATE TABLE `limit_buylead` (
  `limit_id` int(100) NOT NULL,
  `user_id` int(200) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `buyleads_id` int(100) NOT NULL,
  `buyer_email` varchar(100) NOT NULL,
  `queiry_for` varchar(255) NOT NULL,
  `number` int(100) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `buyer_name` varchar(100) NOT NULL,
  `buyer_location` varchar(100) NOT NULL,
  `plan` text NOT NULL,
  `quantity` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `limit_buylead`
--

INSERT INTO `limit_buylead` (`limit_id`, `user_id`, `user_email`, `buyleads_id`, `buyer_email`, `queiry_for`, `number`, `date`, `buyer_name`, `buyer_location`, `plan`, `quantity`) VALUES
(65, 53, 'ritika@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-06-15', 'varun kumar', '', '0', ''),
(66, 53, 'ritika@gmail.com', 5, 'shanu@gmail.com', 'singing products', 45345345, '2024-06-15', 'shanu kumar', 'US', '0', ''),
(67, 55, 'shyam@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-06-17', 'varun kumar', 'delhi', '0', ''),
(68, 65, 'webritika555@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-07-06', 'varun kumar', 'delhi', '0', ''),
(69, 61, 'githublive123@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-07-12', 'varun kumar', 'delhi', '0', ''),
(70, 61, 'githublive123@gmail.com', 4, 'varun@gmail.com', 'mango products', 2147483647, '2024-07-12', 'varun kumar', 'delhi', '0', ''),
(71, 68, 'anish@gmail.com', 8, 'abc@gmail.com', 'toy car', 2147483647, '2024-07-12', 'deepak', 'delhi , shyan kund 110031', '0', ''),
(72, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-12', 'khan ', 'delhi , shyan kund 110031', '0', ''),
(73, 61, 'githublive123@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-07-12', 'varun kumar', 'delhi', '0', ''),
(74, 61, 'githublive123@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-07-13', 'varun kumar', 'delhi', '0', ''),
(75, 68, 'anish@gmail.com', 0, '', '', 0, '2024-07-13', '', '', '0', ''),
(76, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-13', 'Varun', 'delhi , shyan kund 110031', '0', ''),
(77, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-13', 'Varun', 'delhi , shyan kund 110031', '0', ''),
(78, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-17', 'Varun', 'delhi , shyan kund 110031', '0', ''),
(79, 69, 'ritika@web2export.com', 0, '', '', 0, '2024-07-17', '', '', '0', ''),
(80, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-18', 'Varun', 'delhi , shyan kund 110031', '0', ''),
(81, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-18', 'Varun', 'delhi , shyan kund 110031', '0', ''),
(82, 68, 'anish@gmail.com', 0, '', '', 0, '2024-07-18', '', '', '0', ''),
(83, 68, 'anish@gmail.com', 0, '', '', 0, '2024-07-18', '', '', '0', ''),
(84, 68, 'anish@gmail.com', 0, '', '', 0, '2024-07-18', '', '', '0', ''),
(85, 68, 'anish@gmail.com', 0, '', '', 0, '2024-07-18', '', '', '0', ''),
(86, 68, 'anish@gmail.com', 9, 'abc@gmail.com', 'Car Cleaning Cloth ', 2147483647, '2024-07-18', 'Varun', 'delhi , shyan kund 110031', '0', ''),
(87, 68, 'anish@gmail.com', 8, 'abc@gmail.com', 'toy car', 2147483647, '2024-07-18', 'deepak', 'delhi , shyan kund 110031', '0', ''),
(88, 90, 'ashu@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-14', 'varun kumar', 'delhi', '0', ''),
(89, 91, 'kavita@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-16', 'varun kumar', 'delhi', '', ''),
(90, 91, 'kavita@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-16', 'varun kumar', 'delhi', '', ''),
(91, 91, 'kavita@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-16', 'varun kumar', 'delhi', '', ''),
(92, 91, 'kavita@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-16', 'varun kumar', 'delhi', '', ''),
(93, 92, 'shyam@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-23', 'varun kumar', 'delhi', 'prime-pro', ''),
(94, 92, 'shyam@gmail.com', 7, 'arn@gmail.com', 'mango juice', 53534443, '2024-08-23', 'Arun', 'delhi , shyan kund 110031', 'prime-pro', ''),
(95, 92, 'shyam@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-23', 'varun kumar', 'delhi', 'prime-pro', ''),
(96, 92, 'shyam@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-23', 'varun kumar', 'delhi', 'prime-pro', ''),
(97, 92, 'shyam@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-23', 'varun kumar', 'delhi', '', ''),
(98, 92, 'shyam@gmail.com', 7, 'arn@gmail.com', 'mango juice', 53534443, '2024-08-23', 'Arun', 'delhi , shyan kund 110031', 'prime-pro', ''),
(99, 93, 'sridevi@gmail.com', 4, 'varun@gmail.com', 'car', 2147483647, '2024-08-23', 'varun kumar', 'delhi', '', ''),
(100, 93, 'sridevi@gmail.com', 7, 'arn@gmail.com', 'mango juice', 53534443, '2024-08-23', 'Arun', 'delhi , shyan kund 110031', 'prime', ''),
(101, 93, 'sridevi@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-23', 'varun kumar', 'delhi', 'prime', ''),
(102, 93, 'sridevi@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-23', 'varun kumar', 'delhi', 'prime', ''),
(103, 93, 'sridevi@gmail.com', 12, 'vinod@gmail.com', 'iPhone-15', 2147483647, '2024-08-23', 'vinod', 'd-34 vihar', '', ''),
(104, 93, 'sridevi@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-23', 'varun kumar', 'delhi', 'prime', ''),
(105, 94, 'sagun1921@gmail.com', 13, 'patrickmonney@yahoo.com', 'Leather Products ', 2147483647, '2024-08-26', 'Patrick Monney', 'Phillipines ', '', ''),
(106, 93, 'sridevi@gmail.com', 11, 'anil@gmail.com', 'Computer Products', 2147483647, '2024-08-26', 'Anil', 'delhi, 376 vihar', '', ''),
(107, 93, 'sridevi@gmail.com', 15, 'abc@gmail.com', 'computer', 2147483647, '2024-08-26', 'ritika', 'delhi', '', '6KG'),
(108, 93, 'sridevi@gmail.com', 6, 'abc@gmail.com', 'apple  mango juse', 2147483647, '2024-08-26', 'varun kumar', 'delhi', 'prime', ''),
(109, 95, 'riya089@gmail.com', 13, 'patrickmonney@yahoo.com', 'Leather Products ', 2147483647, '2024-08-27', 'Patrick Monney', 'Phillipines ', '', ''),
(110, 96, 'shalini@gmail.com', 16, 'info@ahliafood.com', 'Spices ', 2147483647, '2024-08-27', 'Manoj', ' Kuwait', 'prime', ''),
(111, 96, 'shalini@gmail.com', 16, 'info@ahliafood.com', 'Spices ', 2147483647, '2024-08-27', 'Manoj', ' Kuwait', 'prime', ''),
(112, 96, 'shalini@gmail.com', 16, 'info@ahliafood.com', 'Spices ', 2147483647, '2024-08-27', 'Manoj', ' Kuwait', 'prime', ''),
(113, 96, 'shalini@gmail.com', 16, 'info@ahliafood.com', 'Spices ', 2147483647, '2024-08-27', 'Manoj', ' Kuwait', 'prime', ''),
(114, 96, 'shalini@gmail.com', 16, 'info@ahliafood.com', 'Spices ', 2147483647, '2024-08-27', 'Manoj', ' Kuwait', 'prime', ''),
(115, 96, 'shalini@gmail.com', 17, 'giangupta@gmail.com', 'Spices', 2147483647, '2024-08-27', 'Gian Chand Gupta', 'India ', 'prime', '1 Forty-Foot Container');

-- --------------------------------------------------------

--
-- Table structure for table `micro`
--

CREATE TABLE `micro` (
  `micro_id` int(100) NOT NULL,
  `micro_name` varchar(255) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `micro_cat_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `micro`
--

INSERT INTO `micro` (`micro_id`, `micro_name`, `cat_id`, `sub_id`, `inner_cat_id`, `micro_cat_image`) VALUES
(6, 'Mango Plants', 10, 10, 11, 'extra_image/1f8f6315e8581bbb5a2e117788b75ada.jpg'),
(7, 'Neem Tree', 10, 10, 12, 'extra_image/2.jpg'),
(8, 'Palm Trees', 10, 10, 12, 'extra_image/76806-1-home.jpg'),
(9, 'Banana Plants', 10, 10, 11, 'extra_image/Banana-tree-with-ripe-yellow-banana-bearing.jpg'),
(10, 'Casual Shoes', 11, 13, 0, 'extra_image/57068d4452bcd0210c8bb4f9.jpg'),
(12, 'Modern Lamps', 12, 15, 17, 'extra_image/modern_lamps.jpg'),
(13, 'Smart Home Devices', 12, 15, 18, 'extra_image/smart_home_devices.jpg'),
(14, 'Home Security Systems', 12, 15, 19, 'extra_image/home_security_systems.jpg'),
(15, 'Rose Flower', 10, 10, 13, 'extra_image/0263103d0c05490fd8b72f855dd83162.jpg'),
(16, 'Jasmine Flowers', 10, 10, 13, 'extra_image/vgdgfg.jpg'),
(17, 'Herbal Plant', 10, 10, 20, 'extra_image/348709-1-home.jpg'),
(18, 'Dragon Fruit Plant', 10, 10, 11, 'extra_image/1_1625393564.jpg'),
(19, 'Harvesters', 10, 11, 0, 'extra_image/3-Row-Model-4YZ-3C-Corn-Harvester6.jpg'),
(20, 'Combine Harvester', 10, 11, 25, 'extra_image/3-Row-Model-4YZ-3C-Corn-Harvester6.jpg'),
(21, 'Power Reaper', 10, 11, 25, 'extra_image/rVlibgmartpowerriper-min.jpeg'),
(22, 'Sprinkler Irrigation System', 10, 11, 26, 'extra_image/'),
(23, 'Men Leather Shoes', 11, 13, 29, 'extra_image/Leather Shoes.jpg'),
(24, 'Ladies Leather Shoes', 11, 13, 29, 'extra_image/'),
(25, 'Ladies Slippers', 11, 13, 30, 'extra_image/Ladies Slippers.jpg'),
(26, 'Turmeric ', 16, 20, 33, 'extra_image/pjimage-3-1592015169.jpg'),
(27, 'Wheat Flour', 16, 19, 34, 'extra_image/AARiRS9.jpg'),
(28, 'Gram Flour', 16, 19, 34, 'extra_image/healthy-besan-recipes-Main_g.jpg'),
(29, 'Organic Flour', 16, 19, 34, 'extra_image/white-quinoa-flour-1kg-660003.jpg'),
(30, 'Mango', 16, 21, 35, 'extra_image/23424.jpg'),
(35, 'Flower Tea', 16, 17, 36, 'extra_image/asafdfs.jpg'),
(36, 'Lemon Tea', 16, 17, 36, 'extra_image/fewerwr.jpg'),
(37, 'Masala Tea', 16, 17, 36, 'extra_image/teaafdf.jpg'),
(38, 'Ginger Tea', 16, 17, 36, 'extra_image/5d88f5cd-f1b7-4aa3-b8f4-c48bc423361e_ab336c36.jpg'),
(39, 'Cardamom Tea', 16, 17, 36, 'extra_image/86fbd84ed15bffbffec7b89153a9b799.jpg'),
(40, 'Fruit Tea', 16, 17, 36, 'extra_image/Fruit-Tea-Wallpaper.jpg'),
(41, 'Lemongrass Tea', 16, 17, 36, 'extra_image/Lemon_Grass_656434609.jpg'),
(42, 'Mint Tea', 16, 17, 36, 'extra_image/screen-5.jpg'),
(43, 'Cinnamon Tea', 16, 17, 36, 'extra_image/bc04d9e68fdb950a18c53eef5699e7e1.jpg'),
(44, 'Chocolate Tea', 16, 17, 36, 'extra_image/72102cb381b23df887861859ad6240d7.jpg'),
(45, 'Kesar Tea', 16, 17, 36, 'extra_image/maxresdefault.jpg'),
(46, 'Tea Powder', 16, 17, 36, 'extra_image/green-tea-powder-1517903920-3629964.jpeg'),
(47, 'Honey Tea', 16, 17, 36, 'extra_image/5dcd097b3a193c6d49de81cdb0e6fbda.jpg'),
(48, 'Earl Grey Tea', 16, 17, 36, 'extra_image/Hetties-Earl-Grey-1024x683.jpg'),
(49, 'Peppermint Tea', 16, 17, 36, 'extra_image/the-health-benefits-of-peppermint-and-green-tea-main.jpeg'),
(50, 'Amla Tea', 16, 17, 36, 'extra_image/maxresdefault (1).jpg'),
(51, 'Vanilla Tea', 16, 17, 36, 'extra_image/77b455a33f66274d4bbef4aff08dc8c7.jpg'),
(52, 'Decaffeinated Tea', 16, 17, 36, 'extra_image/decaf_orange_pekoe_1024x1024.jpg'),
(53, 'Pearl Milk Tea', 16, 17, 36, 'extra_image/3b1416395036ab205e3b926c594a42e5.jpg'),
(54, ' Plain Coffee', 16, 17, 37, 'extra_image/kofe-napitok-sahar-chashka.jpg'),
(55, 'Instant Coffee', 16, 17, 37, 'extra_image/qwewe.jpg'),
(56, 'Chicory Powder', 16, 17, 37, 'extra_image/blue-chicory-flower-pile-instant-powder-old-wooden-table-concept-healthy-eating-drink-coffee-substitute-158241589.jpg'),
(57, 'Filter Coffee Powder', 16, 17, 37, 'extra_image/maxresdefault (2).jpg'),
(58, 'Banana Flour', 16, 19, 34, 'extra_image/Green-plantain-flour-as-a-substitute-for-almond-flour.jpg'),
(59, 'Basmati Rice', 16, 19, 43, 'extra_image/arroz_basmati.jpg'),
(60, 'Non Basmati Rice', 16, 19, 43, 'extra_image/riso-basmati-1.jpg'),
(61, 'Brown Rice', 16, 19, 43, 'extra_image/fd836c9b3870755aaf68113ab4870864.jpg'),
(62, 'Ponni Rice', 16, 19, 43, 'extra_image/sfsdf.jpg'),
(63, 'Golden Sella Rice', 16, 19, 43, 'extra_image/234.jpg'),
(64, 'Idli Rice', 16, 19, 43, 'extra_image/687632.jpeg'),
(65, 'Chane', 16, 19, 44, 'extra_image/Kala_Chana.jpg'),
(66, 'Husked Coconut', 16, 21, 45, 'extra_image/2e70bd72_1b58_11e7_af8b_002191ef9e86_b7e359f3_21c3_11e8_aae7_38d547b42ba9_resize1.jpg'),
(67, 'Tender Coconut', 16, 21, 45, 'extra_image/2342342342344.jpg'),
(68, 'Dry Red Chilli', 16, 20, 33, 'extra_image/adsdasd.jpg'),
(69, 'Onions', 16, 22, 46, 'extra_image/afafd.jpg'),
(70, 'Potato', 16, 22, 46, 'extra_image/adadf.jpg'),
(71, 'Broccoli', 16, 22, 47, 'extra_image/broccoli-1.jpg'),
(72, 'Garam Masala', 16, 20, 48, 'extra_image/'),
(73, 'Chicken Masala', 16, 20, 48, 'extra_image/'),
(74, 'Ladies Bellies', 11, 13, 31, 'extra_image/'),
(75, 'Silk Saree', 11, 16, 49, 'extra_image/58df0134275111.56cb09e545c0d.jpg'),
(76, 'Ladies Salwar Suits', 11, 16, 50, 'extra_image/5decd8b4-1d2f-40bc-8a0f-fca33243f224.png'),
(77, 'Car Electric Parts', 12, 23, 51, 'extra_image/distrobution+parts.jpg'),
(78, 'Men Shoes ', 11, 13, 52, 'extra_image/fgfdccc.jpg'),
(79, 'Safety Gloves', 11, 24, 53, 'extra_image/s-l500.jpg'),
(80, 'Poly Gloves ', 11, 24, 53, 'extra_image/61eFGJWJMBL._AC_UL960_QL65_.jpg'),
(81, 'PVC Helmets', 11, 24, 54, 'extra_image/Breathable-Kids-Bicycle-Helmet-PVC-EPS-Ultralight-Children-Cycling-Helmet-Safety-Kids-Bike-Helmet.jpg'),
(82, 'Ultra Helmets', 11, 24, 54, 'extra_image/gggggggggjjjjj.jpg'),
(83, 'Vermicompost', 10, 25, 56, 'extra_image/vermicomposting.jpg'),
(84, 'Humic Acid', 10, 25, 56, 'extra_image/bbbbfffffkkkkk.jpg'),
(85, 'Cow Dung', 10, 25, 56, 'extra_image/cccccccccccccc.jpg'),
(87, 'Saanen Goat', 10, 12, 58, 'extra_image/skynews-goat-smile.jpg'),
(88, 'Kota Goat', 10, 12, 58, 'extra_image/kotagoat.jpg'),
(89, 'Plant Nutrient', 10, 25, 59, 'extra_image/nutrients-in-plants-feature-image.jpg'),
(90, 'Sodium Humate', 10, 25, 59, 'extra_image/sudiummmmmm.jpg'),
(91, 'White Phenyl Compound', 18, 26, 60, 'extra_image/White-Phenyl.jpg'),
(92, 'Washing Brushes', 18, 26, 60, 'extra_image/brudhess.jpg'),
(93, 'Kitchen Corner Basket', 18, 27, 61, 'extra_image/cornerbaskest.jpg'),
(94, 'Cutlery Drawer Basket', 18, 27, 61, 'extra_image/7-compartment-organiser-extendable-wooden-knife-and-utensils-cutlery-tray.jpg'),
(95, 'Recycle Bin', 18, 27, 62, 'extra_image/recyclebin.jpg'),
(96, 'Swing Dustbin', 18, 27, 62, 'extra_image/swingbeans.jpg'),
(97, 'Dust Pans', 18, 27, 62, 'extra_image/dustpan_steel_top.jpg'),
(98, 'Artificial Flower Bushes', 18, 28, 63, 'extra_image/bushes.jpg'),
(99, 'Artificial Roses', 18, 28, 63, 'extra_image/roses.jpg'),
(100, 'Fashion Leather Handbag', 11, 29, 64, 'extra_image/gggggghfjdjfbdgyugeyu.jpg'),
(101, 'Leather Hobo Handbag', 11, 29, 64, 'extra_image/hoboooo.jpg'),
(102, 'Leather Phone Case', 11, 29, 65, 'extra_image/iPhone-11-Leather-Case.jpg'),
(103, 'Apple', 16, 21, 35, 'extra_image/fresh apple'),
(105, ' Bananas', 16, 21, 35, 'extra_image/banana-bunches.jpg'),
(106, 'Mangosteen', 16, 21, 35, 'extra_image/mangosteen.jpg'),
(107, 'Cashew Nuts', 16, 18, 66, 'extra_image/Cashewnuts.jpg'),
(108, 'Raisin', 16, 18, 66, 'extra_image/raisins.jpg'),
(109, 'Almonds ', 16, 18, 66, 'extra_image/almonds.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(100) NOT NULL,
  `slug` text NOT NULL,
  `image` text NOT NULL,
  `heading` text NOT NULL,
  `short_para` text NOT NULL,
  `long_para` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `about_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `slug`, `image`, `heading`, `short_para`, `long_para`, `date`, `about_image`) VALUES
(1, '', '', 'India-Africa Business Conclave\r\n ', 'In recent years, India and several African nations have been exploring the potential of ...', '<h4>India and Africa Explore Rupee Trade</h4>\r\n<h6>1. Economic Context: </h6>\r\n<ul>\r\n<li>Trade Imbalance: India has historically had a trade deficit with many African countries. Utilizing the rupee for trade settlements aims to address this imbalance by providing a more stable and predictable trading environment.</li>\r\n<li>Currency Fluctuations: Trading in rupees could mitigate the risks associated with currency fluctuations of major global currencies, making trade terms more favorable and stable for both parties.</li>\r\n</ul>\r\n\r\n<h6>1. Strategic Benefits: </h6>\r\n<ul>\r\n<li>Reduced Transaction Costs: By settling transactions in rupees, both Indian and African businesses could potentially lower the costs associated with currency exchange and international banking fees.</li>\r\n<li>Strengthening Bilateral Ties: This approach fosters closer economic ties between India and African nations, promoting deeper economic integration and cooperation.</li>\r\n</ul>', '2024-08-28', ''),
(2, '', '', '1', '1', '1', '2024-08-28', '1');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(50) NOT NULL,
  `user` int(100) NOT NULL,
  `user_id` int(100) NOT NULL,
  `plan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `long_dec` varchar(255) NOT NULL,
  `product_image1` varchar(255) NOT NULL,
  `product_image2` varchar(255) NOT NULL,
  `product_image3` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `company_experience` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `product_description` text NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `number` int(20) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `business_type` varchar(255) NOT NULL,
  `moq` varchar(255) NOT NULL,
  `packaging_type` varchar(255) NOT NULL,
  `product_life` varchar(255) NOT NULL,
  `feature` varchar(255) NOT NULL,
  `company_description` text NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `cat_id` int(100) NOT NULL,
  `sub_id` int(100) NOT NULL,
  `micro_id` int(100) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `iec` varchar(200) NOT NULL,
  `gst` varchar(100) NOT NULL,
  `exp` varchar(100) NOT NULL,
  `website` varchar(255) NOT NULL,
  `state_name` varchar(200) NOT NULL,
  `company_address` varchar(200) NOT NULL,
  `about_company` text NOT NULL,
  `country_name` varchar(200) NOT NULL,
  `unit` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `product_name`, `long_dec`, `product_image1`, `product_image2`, `product_image3`, `title`, `price`, `company_experience`, `company_name`, `company_logo`, `product_description`, `city`, `state`, `country`, `number`, `client_name`, `business_type`, `moq`, `packaging_type`, `product_life`, `feature`, `company_description`, `date`, `cat_id`, `sub_id`, `micro_id`, `inner_cat_id`, `name`, `iec`, `gst`, `exp`, `website`, `state_name`, `company_address`, `about_company`, `country_name`, `unit`) VALUES
(18, '  Dasheri Mango, 1 kg', ' <tr><th>Price</th>  <td>MRP:₹142.47</td></tr>\r\n<tr><th>Country of origin</th><td> India</td></tr>\r\n<tr><th>Life</th><td> 2 months</td></tr>                                     \r\n<tr><th>packaging</th><td> Box</td></tr>\r\n ', 'extra_image/23424.jpg', '', '', 'Fresh Mango', '142.47', '12 years', 'Vistara', 'extra_image/logo_green.jpg', '<tr><th>Price</th>  <td>MRP:₹142.47</td></tr>\r\n<tr><th>Country of origin</th><td> India</td></tr>\r\n<tr><th>Life</th><td> 2 months</td></tr>                                     \r\n ', 'delhi', '', '', 0, 'Kartik Arun', '', '12   ', '', '', 'fresho! Dasheri Mango, 1 kg', '', '2024-07-17', 16, 21, 30, 35, '', 'IEC654654654', 'GST654654GF', '', 'https://vistaraenterprise.com/', 'Delhi', 'Vistara enterprise 7/3 Ayyanar kovil Road, Opposite to Thadco colony, Rajapalayam, Virudhunagar District, Tamilnadu -626117', 'ALALALALALA', '', ''),
(20, 'Common Fresh Basmati Rice', '<tr><th>Cultivation Type</th>  <td>Common</td></tr>\r\n<tr><th>Payment Terms</th>  <td>Common</td></tr>\r\n<tr><th>Product Unit</th>  <td>100 Piece/Pieces</td></tr>', 'extra_image/food3049731605514801095360.jpg', '', '', '', '', '2 Years', 'YEDHANT INTERNATIONAL', 'extra_image/', '<tr><th>Cultivation Type</th>  <td>Common</td></tr>\r\n<tr><th>Payment Terms</th>  <td>Common</td></tr>\r\n<tr><th>Product Unit</th>  <td>100 Piece/Pieces</td></tr>', '', '', '', 0, 'Mr. Siddhant', '', '', '', '', 'Common Fresh Basmati Rice', '', '2024-08-11', 16, 19, 59, 43, '', 'NO', '06GUNPP0275H1Z9', '', 'NO', 'Delhi', '', '', '', ''),
(21, 'Ir 64 Parboiled Rice (Broken 5 %)', '<tr><th>Minimum Order Quantity </th>  <td>: 25 MT Metric Ton</td></tr>\r\n<tr><th>Price Trend </th>  <td>: 340.00 - 355.00 USD / Metric Ton</td></tr>\r\n<tr><th>Delivery Time </th>  <td>10 Days</td></tr>\r\n<tr><th>Sample Policy</th>  <td>Free samples are avail', 'extra_image/GettyImages-519309790-2048x1341.jpg', '', '', '', '', '5 Years', 'CMS Industries', 'extra_image/', '<tr><th>Minimum Order Quantity </th>  <td>: 25 MT Metric Ton</td></tr>\r\n<tr><th>Price Trend </th>  <td>: 340.00 - 355.00 USD / Metric Ton</td></tr>\r\n<tr><th>Delivery Time </th>  <td>10 Days</td></tr>', '', '', '', 0, 'Mr Chintan Sejpal', '', '', '', '', 'Ir 64 Parboiled Rice (Broken 5 %)', '', '2024-08-11', 16, 19, 59, 43, '', '', '24BDKPS7263P1ZO', '', '', 'Gujarat', '', '', '', ''),
(22, 'Brown  And Fresh Organic Coconut', '', 'extra_image/5387d9fd-7538-4278-b566-bacc53fd77c6.jpg', '', '', '', 'Get Latest Price', '3 Years', 'Mr Guru Traders', 'extra_image/', '', '', '', '', 0, 'Mr Guru Samy', 'exporter', '5 Ton/Tons', 'Whole', '3 weeks', 'Fresh', '', '2024-08-19', 16, 21, 66, 45, '', 'NO', '33AHQPG6144E1ZH', '', 'NO', 'Tamil Nadu', 'No. 309, Thittuparai, Kangeyam, Tirupur, Tamil Nadu, 638701, India', '', 'India', ''),
(23, 'Fresh Coconuts By Arul Jothi Exports', '', 'extra_image/2019_Jan_15_-_Kumbh_Mela_-_Coconuts_For_Sale.jpg', '', '', '', 'Get Latest Price', '13 Years', 'ARUL JOTHI EXPORTS', 'extra_image/', '', '', '', '', 0, 'Mr Jagadish N', 'exporter', '5 Ton/Tons', 'Whole', '3 weeks', 'Fresh', '', '2024-08-19', 16, 21, 66, 45, '', 'NO', '33ARMPJ5838Q1Z1', '', 'NO', 'Tamil Nadu', '5, Mariamman Koil Street, Kallapalayam, Ichipatti Post, Somanur, Tirupur, Tamil Nadu, 641668, India', '', 'India', ''),
(24, 'Full Husked Fresh Coconut', '', 'extra_image/2342342342344.jpg', '', '', '', 'Get Latest Price', '2015', 'RVS Farms', 'extra_image/', '', '', '', '', 0, 'Mr Easwaramurthi KS', 'supplier', '5 Ton/Tons', 'Whole', '3 weeks', 'Fresh', '', '2024-08-19', 16, 21, 66, 45, '', 'NO', 'NO', '', 'NO', 'Tamil Nadu', '549, Merkupathi Post, Kunnathur, Tirupur, Tamil Nadu, 638103, India', '', 'India', ''),
(25, 'Green And Fresh Tender Coconut', '', 'extra_image/SDFSDFS.jpg', '', '', '', 'Price: 25', '2021', 'Krishna Food Cart', 'extra_image/', '', '', '', '', 0, 'Mr Sumit Bose', 'exporter', '3000 Unit', 'Whole', '3 weeks', 'Fresh Coconut', '', '2024-08-19', 16, 21, 67, 45, '', 'NO', '06ACFPB6865M2ZA', '', 'NO', 'Haryana', ' House No. - B-757, First Floor, Greenfield Colony, Faridabad, Haryana, 121010, India', 'rice\r\nPayment Mode\r\n\r\nOnline Payments (NEFT/RTGS/IMPS)\r\n', 'India', ' INR / Unit'),
(26, 'Dry Red Chilli  A Grade', '', 'product-image/adsdasd.jpg', '', '', '', '76', '1961 ', 'RATNARAJ FOODS', 'extra_image/', 'Minimum Order Quantity : 100 Bottle', '', '', '', 0, 'Mr Deep Girishbhai Shah', 'exporter', '100 Bottle', 'Bottle/Flex', 'Long Shelf Life', 'Hygienic Processing', '', '2024-08-20', 16, 20, 68, 33, '', 'NO', '24ENJPS1690Q1Z4', '', 'NO', 'Chandigarh', 'Survey No. 258, Block No. 515, G/F, Near Silver Estate, Rakanpur- Santej Road, Gandhinagar, Ahmedabad, Gujarat, 382721, India', '', 'India', ' INR / Bottle'),
(27, 'Dry Reshampatti Red Chilli  ', '', 'extra_image/Dried-Paprika.jpg', '', '', '', 'Get Latest Price', '2024', 'Chandeep Global Exports', 'extra_image/', 'Minimum Order Quantity : 100 Kilograms', '', '', '', 0, 'mr. Chandeep singh', 'exporter', '100 Kilograms', 'Solid', 'Long Shelf Life', 'Hygienic Processing', '', '2024-08-20', 16, 20, 68, 33, '', 'NO', ' 07BROPA1272N1ZK', '', 'NO', 'Delhi', 'J-3/50, 3rd Floor, Rajouri Garden New Delhi, Delhi, 110027, India', '', 'India', ''),
(28, 'Yellow Turmeric Powder', '', 'extra_image/dfgdfg.jpg', '', '', '', 'Get Latest Price', '2022', 'Kapadiya Expo Company', 'extra_image/', 'Accepts only Foreign inquiries\r\nMinimum Order Quantity : 20\r\nLetter of Credit at Sight (Sight L/C)', '', '', '', 0, 'Mr. Vishal', 'exporter', '20', 'Dried / Box', 'Long Shelf Life', 'Dried', '', '2024-08-20', 16, 20, 26, 33, '', 'NO', '24IQFPK3436M1ZI', '', 'NO', 'Gujarat', '14, Sahyog Complex, Near Gandhi Bag, Mahuva, Mahuva, Gujarat, 364290, India', '', 'India', ''),
(29, 'Fresh Red Onion', '', 'extra_image/afafd.jpg', '', '', '', 'Price: 125 INR / Kilograms', '2017 ', 'BEAUTI ENTERPRISES', 'extra_image/', 'Minimum Order Quantity : 28000 Kilograms\r\nPrice: 125 INR / Kilograms', '', '', '', 0, 'Mr Ajgar Shaikh', 'exporter', '28000 Kilograms', 'Raw', 'Long Shelf Life', 'other, Fresh', '', '2024-08-20', 16, 22, 69, 46, '', 'NO', '19BMGPS2883A1ZV', '', 'NO', 'West Bengal', 'B No H No-2647, Plot No-412, Kh No-1125, J.L-076, Simla, P.o-Mertala, P.S-Purbasthali, Burdwan, West Bengal, 713513, India', '', 'India', ''),
(30, 'Fresh Potato Moisture', '', 'extra_image/adadf.jpg', '', '', '', ' 125 ', '2021', 'Globus Global Trade Import and Export ', 'extra_image/', '*Price: 125 INR / Kilograms\r\n(125 INR + GST)\r\n*Accepts only Foreign inquiries', '', '', '', 0, 'Mr. Syed Basheer Uddin', 'exporter', '125 INR / Kilograms', 'Raw', 'Long Shelf Life', 'other, Fresh', '', '2024-08-20', 16, 22, 70, 46, '', 'NO', '36AFGPU2815L2Z1', '', 'NO', 'Telangana', 'H No 8-2-701, Third Floor 301, Emperado, Road No 12, Banjarahills, Hyderabad, Telangana, 500034 , India', '', 'India', 'INR / Kilograms'),
(31, 'Broccoli  ', '', 'extra_image/broccoli-1.jpg', '', '', '', ' 100.00 - 300.00 ', '2006', 'YESRAJ AGRO EXPORTS PVT LTD', 'extra_image/', '*Price Trend: 100.00 - 300.00 INR / Kilograms\r\n*Minimum Order Quantity : 5 Kilograms', '', '', '', 0, 'Mr Raj Bhagat', 'exporter', '5 Kilograms', 'Raw', '3-5 Days', 'other, Fresh', '', '2024-08-20', 16, 22, 71, 47, '', 'NO', '27AJMPB0208L1ZE', '', 'NO', 'Maharashtra', 'Market Yard, Pune, Maharashtra, 411037, India', '', 'India', 'INR / Kilograms'),
(32, 'Mango Plant', '', 'extra_image/1f8f6315e8581bbb5a2e117788b75ada.jpg', '', '', '', ' 90', '2012', 'Shreem Biotech PVT LTD', 'extra_image/', '*Soil Specific :Acidic, Alkaline, Well Drained\r\n*Is It Organic: Organic\r\n*Preferred Buyer Location : All over the world', '', '', '', 0, 'Mr. Gajanand Chouriya', 'Manufacturer', ' 50000 Plant', 'Raw', 'Long Shelf Life', 'Langra Mango', '', '2024-08-20', 10, 10, 6, 11, '', 'NO', 'NO', '', 'NO', 'Chandigarh', ' Chandangaon, Chhindwara, Madhya Pradesh', '', 'India', ' / Plant'),
(34, 'All Time Mango Plant', '', 'extra_image/ae56abdce3ab3beb5d6e2b51f3563a90.jpg', '', '', '', 'Get Latest Price', '2010', 'Utsab Nursery', 'extra_image/', '*Minimum Order Quantity : 100 Piece', '', '', '', 0, ' Mr Kartik', 'exporter', '100 Piece', 'Plant', 'Long Shelf Life', 'Different Breed Available', '', '2024-08-20', 10, 22, 6, 11, '', 'NO', 'NO', '', 'NO', 'West Bengal', 'Kastodanga, Dist- Nadia, Haringhata, West Bengal, 741257, India', '', 'India', ''),
(35, 'Banana  Plant', '', 'extra_image/Banana-tree-with-ripe-yellow-banana-bearing.jpg', '', '', '', '60.00 - 600.00', '1990', ' New Deshpran Nursery & Agricultural Farm', 'extra_image/', '*Different Available : YES\n*Part  : Leaves\n*Main Domestic Market  : All India\n', '', '', '', 0, 'Mr Abhijit', 'supplier', '100 Piece', 'Customized', 'Long Shelf Life', 'Different Breed  Available', '', '2024-08-20', 10, 10, 9, 11, '', 'NO', '19AGAPK4385Q1ZP', '', 'NO', 'West Bengal', 'Post+P.O.- Sukhdevpur, Gotalahat Road, P.s.- Bishnupur (Amtala) Dist- South 24 PGS, Kolkata, West Bengal, 743503, India', '', 'India', 'INR / Piece'),
(36, 'Dragon Fruit Plant', '', 'extra_image/1_1625393564.jpg', '', '', '', '45 ', '2018', 'Indo Essence Agro Herbs', 'extra_image/', '*Certification  :   ISO 9001:2015', '', '', '', 0, 'Mrs. Neelam', 'exporter', ' 500', 'Raw', 'Long Shelf Life', 'Certification  :   ISO 9001:2015', '', '2024-08-20', 10, 10, 18, 11, '', 'NO', '23ANCPB2099K1Z5', '', 'NO', 'Madhya Pradesh', 'Near New Anaj Mandi, Umri Road, Guna, Guna, Madhya Pradesh, 473001, India', '', 'India', 'INR'),
(37, 'Neem Plant Grade', '', 'extra_image/neem-tree.JPG', '', '', '', 'Get Latest Price', '2016', ' Maatitatva Agro Industries Private Limited', 'extra_image/', '*Usage :  Commercial\r\n*Payment Terms : Cash on Delivery (COD)', '', '', '', 0, 'Mr. Ayush Khatod', 'supplier', '100 Unit', 'Raw', 'Long Shelf Life', 'Herbs', '', '2024-08-20', 10, 10, 7, 12, '', 'NO', '23AANCM8802G1ZF', '', 'NO', 'Madhya Pradesh', '304, Third Floor, Manav Trade Centre, Near Madhumilan Square, Indore, Madhya Pradesh, 452001, India', '', 'India', ''),
(39, 'Green Palm Tree Plant', '', 'extra_image/nearly-natural-artificial-trees-5590-64_1000.jpg', '', '', '', 'Get Latest Price', '2020', 'The Bagichawala', 'extra_image/', '*Payment Terms  :  Cash Advance (CA)', '', '', '', 0, 'Mr. Amit Kamble', 'supplier', ' 2000 Piece', 'Raw', 'Long Shelf Life', 'Cash Advance (CA)', '', '2024-08-20', 10, 10, 8, 12, '', 'NO', 'NO', '', 'NO', 'Maharashtra', 'Sujata Elegance, Plot No. - I20, Survey No. - 23/A, Samarth Nagari, Sidhivinayak Nagari Road, Nigdi, Pune, Maharashtra, 411044, India', '', 'India', ''),
(40, 'Fresh Rose Flowers', '', 'extra_image/0263103d0c05490fd8b72f855dd83162.jpg', '', '', '', 'Get Latest Price', '2006', 'YESRAJ AGRO EXPORTS PVT LTD', 'extra_image/', '*Main Export Market(s) : 	<b>South America, Western Europe, Australia, North America, Eastern Europe, Middle East, Central America, Asia, Africa</b>', '', '', '', 0, 'Mr Raj Bhagat', 'exporter', '100 Piece', 'Raw', 'Long Shelf Life', 'Fresh Flowers', '', '2024-08-20', 10, 10, 15, 13, '', 'NO', '27AJMPB0208L1ZE', '', 'NO', 'Maharashtra', 'Market Yard, Pune, Maharashtra, 411037, India', '', 'India', ''),
(41, 'Artificial Velvet Rose Plant With Pot', '', 'extra_image/garden-roses-pictures-w7cxk84w7qx9e47t.jpg', '', '', '', 'Get Latest Price', '1998', 'Evergreen Bamboo India Private Limited', 'extra_image/', '*Payment Terms :  Cash in Advance (CID)\r\n*Main Domestic Market :  All India\r\n', '', '', '', 0, 'Ms Elen', 'supplier', '100 Unit', 'Raw', 'Long Shelf Life', 'Durable', '', '2024-08-20', 10, 10, 15, 13, '', 'NO', '07AACCE3617J1ZQ', '', '', 'Delhi', 'A 35, Link Road, Lajpat Nagar III, Near BDR, New Delhi, Delhi, 110024, India', '', 'India', ''),
(42, 'Maize Combine Harvester', '', 'extra_image/3-Row-Model-4YZ-3C-Corn-Harvester6.jpg', '', '', '', 'Get Latest Price', '1965', 'Dasmesh Mechanical Works', 'extra_image/', '*Power Source : Diesel\r\n*General Use   : Agriculture\r\n*Type   : 	Garden Cultivator, Agricultural Tools\r\n*Supply Ability   : 20 Per Month', '', '', '', 0, 'Mr Jagveer Singh', 'Manufacturer', ' 1 Unit', '--', 'Long  Life', 'Agriculture', '', '2024-08-20', 10, 11, 20, 25, '', 'NO', '03AEHPS0925H1ZO', '', 'NO', 'Punjab', 'Main Road, Amargarh, Malerkotla, Sangrur, Punjab, 148022, India', '', 'India', ''),
(44, 'Fresh Rose', '', 'extra_image/rose-1.jpg', '', '', '', '60', '18 years', 'YESRAJ AGRO EXPORTS PVT LTD', 'extra_image/', 'This is a Seasonal Fresh Flowers .', '', '', '', 0, 'Mr Raj Bhagat', 'exporter', '130', 'RAW', '2 Weeks', 'Seasonal Fresh Flowers', '', '2024-08-20', 10, 10, 15, 11, '', 'NO', ' 27AJMPB0208L1ZE', '', 'NO', 'Maharashtra', 'Market Yard, Pune, Maharashtra, 411037, India', '', 'India', 'INR'),
(45, 'Fresh Rose Flower', '', 'extra_image/rose-2.webp', '', '', '', '120', '4 years ', 'Velvet Beauty Products India', 'extra_image/', 'This rose is high quality product flowers.', '', '', '', 0, 'Ms. Neha', 'exporter', '110', 'RAW', '2 Weeks', 'High Quality', '', '2024-08-20', 10, 10, 15, 13, '', 'NO', '36APVPT8294F2ZU', '', 'No', 'Telangana', 'G-9, Eeco Valley West Block, Road No 12, Pjr Enclaves, Madhavpuri Hills, Chanda Nagar, Hyderabad, Telangana, 500050, India', '', 'India', 'INR'),
(46, 'Fancy Leather Shoes', '', 'extra_image/57068d4452bcd0210c8bb4f9.jpg', '', '', '', 'Get Latest Price', '2023', 'Ridesh International Private Limited', 'extra_image/', 'Accepts only Foreign inquiries\r\n*Product Type   :   Formal Shoes\r\n*Payment Terms  : Cash in Advance (CID)', '', '', '', 0, 'Mr. Parag Saraf', 'exporter', '12 pice', 'box', 'Long Shelf Life', 'Various Sizes Available', '', '2024-08-20', 11, 13, 23, 29, '', 'NO', '27AAMCR7366R1Z7', '', 'NO', 'Maharashtra', 'Bhondve Empire B-10, MIDC Water Pipeline Road, Ravet, Pune, Maharashtra, 412101, India', '', 'India', ''),
(48, 'Rose Bud Cap', '', 'extra_image/rose-3.png', '', '', '', '166', '28 years', 'VIRGO PRODUCTIONS LLP  ', 'extra_image/', 'This flower is fresh and natural flowers.', '', '', '', 0, 'Mrs Sushma Jithesh Kumar', 'exporter', '112', 'RAW', '2 Weeks', 'Floating candle', '', '2024-08-20', 10, 10, 15, 13, '', 'NO', '29AASFV8414B1ZT', '', 'NO', 'Gujarat', 'CYTO Compound, Aanad Sojitra Road, Vitthal Udyognagar, Anand, Gujarat, 388121, India', '', 'India', 'INR'),
(49, 'Jasmine Flower', '', 'extra_image/jasmeen-1.webp', '', '', '', '505', '18 years', 'YESRAJ AGRO EXPORTS PVT LTD', 'extra_image/', 'This fresh is jasmine flowers.', '', '', '', 0, 'Mr Raj Bhagat', 'exporter', '115', 'RAW', '2 Weeks', 'High Quality', '', '2024-08-20', 10, 10, 16, 13, '', 'NO', '27AJMPB0208L1ZE', '', 'NO', 'Maharashtra', 'Market Yard, Pune, Maharashtra, 411037, India', '', 'India', 'INR'),
(50, 'Black Patent Leather Shoes ', '', 'extra_image/blackshoe.jpg', '', '', '', '220 INR / Pair', '1985', 'M/S R.S. International ', 'extra_image/', 'Feature : No Fade\r\nSeasons : Spring, Winter, Summer, Rainy', '', '', '', 0, 'Mr. Upkar', 'exporter', '100 Pair', 'Box', 'Long Shelf Life ', 'No Fade', '', '2024-08-20', 11, 13, 23, 29, '', 'NO', '09AJZPR7321P1ZZ', '', 'NO', 'Uttar Pradesh', '43/120/1A, Kailash Temple Road, Near Axis bank ATM, Sikandra Agra, Uttar Pradesh, 282007, India', '', 'India', ''),
(51, 'Fresh Jasmine Flower', '', 'extra_image/jasmeen-2.webp', '', '', '', '120', '6 years', 'DYNAMIC GLOBAL IMPEX', 'extra_image/', 'This is white Jasmine flowers .', '', '', '', 0, 'Mr. Swapnil Devidas', 'exporter', '135', 'RAW', '2 Weeks', 'Seasonal Fresh Flowers', '', '2024-08-20', 10, 10, 16, 13, '', 'NO', 'No', '', 'NO', 'Maharashtra', 'Milkat No. - 450, A/P Nighoje, Tal - Khed, Pune, Maharashtra, 410501, India', '', 'India', 'INR'),
(52, 'White Jasmine flower', '', 'extra_image/jasmeen-3.jpeg', '', '', '', '100', '2 years', 'NAND AGRO PRODUCT PRIVATE LIMITED', 'extra_image/', 'This is fresh jasmine flowers .', '', '', '', 0, 'Mr. Nishant Chotalia', 'supplier', '112', 'RAW', '2 Weeks', 'High Quality', '', '2024-08-20', 10, 10, 16, 13, '', '', '27AAECN8038J1Z4', '', 'NO', 'Maharashtra', '11/B, The Angelina Co Operative Housing Society Corner Of Sarojini Road, Vile Prie West, Juhu, Mumbai, Maharashtra, 400056, India', '', 'India', 'INR'),
(53, ' Leather Safety Shoes', '', 'extra_image/safetyshoes.jpg', '', '', '', '1399 ', '1996', 'MANGLA PLASTIC INDUSTRIES', 'extra_image/', 'Material : Leather \r\nToe Style : Steel Toe\r\nProduct Type : High Ankle\r\nCertificate : BIS, ISO, CE, TEST CERTIFICATE\r\n', '', '', '', 0, 'Mr Anil Kumar Mangla', 'exporter', '50', 'Box', 'Long Shelf Life ', 'Steel Toe', '', '2024-08-20', 11, 13, 23, 29, '', 'NO', '06AAKPM6216C1ZZ', '', 'NO', 'Haryana', '1732-33, MIE, Part-B, Bank Road, Bahadurgarh, Haryana, 124507, India', '', 'India', 'INR / Pair'),
(54, 'Power Reaper Digging Hole', '', 'extra_image/rVlibgmartpowerriper-min.jpeg', '', '', '', '120000.00 INR / Piece', '2017', 'VINSPIRE AGROTECH (I) PRIVATE LIMITED', 'extra_image/', '*Price: 120000.00 INR / Piece\r\n*(120000.00 INR + 0% GST)\r\n*1 Pack Contains 1\r\n*Minimum Pack Size 1\r\n*Certification  :  ISO 14001:2015, ISO 001:2015\r\n*Brand Name  : VINSPIRE AGROTECH (I) PRIVATE LIMITED\r\n*Weight (kg) :  12 Kilograms (kg)\r\n', '', '', '', 0, 'Mr MANAN DIPAKBHAI PATEL', 'Manufacturer', '2', 'Solid', 'Long  Life', 'our Supply Ability  is 100 Per Month', '', '2024-08-20', 10, 11, 21, 25, '', 'NO', '24AABCZ1147P1Z1', '', 'NO', 'Gujarat', '3, Swaminarayan Indstrial Estate, Opp Sharanam Estate, Kathwada Gam Road, Ahmedabad, Gujarat, 382440, India', '', 'India', ''),
(55, ' Round Toe Slip-on Leather Women Safety Shoes', '', 'extra_image/womenshoes2.jpg', '', '', '', '250', '2012', 'Manya Enterprises', 'extra_image/', '*Heel Size : Low \r\n*Product Type : Safety shoes\r\n*Color : Black  \r\n', '', '', '', 0, 'Mrs. Alpa', 'supplier', '20 Pieces', 'Box ', 'Long Shelf Life ', 'Low Heel ', '', '2024-08-20', 11, 13, 24, 29, '', 'NO', 'NO ', '', 'NO ', 'Karnataka', 'Express New City Complex, Shop No.203, 2nd Floor, NR Road, Bengaluru, Karnataka, 560002, India', '', 'India', ' INR / Piece'),
(56, 'Wheat Flour ', '', 'extra_image/Wheatflour.jpg', '', '', '', '30', '2023', 'H S Impex ', 'extra_image/', '*Minimum Order Quantity : 5000 Kilograms\r\n', '', '', '', 0, 'Mr Mohammed H. C.', 'supplier', '5000 Kilograms', 'Raw', 'Long Life ', 'Whole Wheat Flour ', '', '2024-08-20', 16, 19, 27, 34, '', 'NO', '23AANPH9090E1ZN', '', 'NO ', 'Madhya Pradesh', 'Office No-6, 4th Floor, Rathor Chambers, 2- Jawahar Marg, Indore, Madhya Pradesh, 452001, India', '', 'India', 'INR / Kilograms'),
(57, 'Garam Masala Powder', '', 'extra_image/garam-masala-1.webp', '', '', '', '17.50', '2 years', 'Shri Raj Shyamaji Food And Spices (Opc) Private Limited', 'extra_image/', 'This is fresh and flavour garam masala .', '', '', '', 0, 'Mrs. Savita', '', '115', 'RAW', 'Long', 'High Quality', '', '2024-08-20', 16, 20, 72, 48, '', 'NO', '09ABHCS6531K1ZW', '', 'NO', 'Uttarakhand', 'Khatima, PO- Khalimahuwat, Udham Singh Nagar, Uttarakhand, 262308, India', '', 'India', 'INR'),
(58, 'Brown Garam Masala', '', 'extra_image/garam-masala-2.webp', '', '', '', '350 ', '9 years', 'K SHEETAL', 'extra_image/', 'This is garam masala and good for cooking .', '', '', '', 0, ' Mr AKASH KAPADIYA', 'exporter', '130', 'RAW', 'Long', 'High Quality', '', '2024-08-20', 16, 20, 72, 48, '', 'NO', '24CQNPK3814K1ZM', '', 'NO', 'Gujarat', 'Plot No. 25, Gate No. 5, Muktidham Estate, Jiwan Wadi Road, Nikol, Ahmedabad Ahmedabad, Gujarat, 382350, India', '', 'India', 'INR'),
(59, 'Chicken Masala', '', 'extra_image/chicken-masala-1.jpg', '', '', '', '50', '11 years', 'BERACHAH FOOD INDUSTRIES', 'extra_image/', 'This is Chicken Masala .', '', '', '', 0, 'Mr Francis R', 'exporter', '115', 'ROW', 'Long', 'High Quality', '', '2024-08-20', 16, 20, 72, 48, '', 'NO', '29AANFB1205H1ZN', '', 'NO', 'Karnataka', 'B No. 05-T-64/07, Industrial Estate, Yeyyadi, Mangaluru, Karnataka, 575008, India', '', 'India', 'INR'),
(60, 'Powder Chicken Masala', '', 'extra_image/chicken-masala-2.webp', '', '', '', '205', '13 years', 'NAVNATH SPICES PRIVATE LIMITED', 'extra_image/', 'This is chicken masala For good cooking .', '', '', '', 0, 'Mr Gaurav Jagtap', 'exporter', '110', 'ROW', 'Long', 'High Quality', '', '2024-08-20', 16, 20, 73, 48, '', 'NO', '27AAVCS3758B1ZY', '', 'NO', 'Maharashtra', 'Plot No. M-1, Dhule Midc, Dhule Industrial Area, Laling, Dhule, Maharashtra, 424001, India', '', 'India', 'INR'),
(61, 'Genuine Leather Women Shoes', '', 'extra_image/brownshoe.jpg', '', '', '', '14.00 - 17.00', '2019', 'ARMANCHARM GOSTARAN SHARGH CO.', 'extra_image/', '*Minimum Order Quantity : 1-200 Pair\r\n*Brand Name : armancharm', '', '', '', 0, 'Mr Mohamadreza Gholami', 'exporter', ' 1-200 Pair', 'Box', 'Long Life ', 'Cow Leather', '', '2024-08-21', 11, 13, 24, 31, '', 'NO', 'NO ', '', 'NO', '', '242, Daneshgah St., Mashhad, Khorasan, 00985, Iran', '', 'Iran', 'USD / Pair'),
(62, 'Ladies Slippers', '', 'extra_image/Slipper.jpg', '', '', '', 'Get Latest Price ', '2011', '', 'extra_image/', '*Accepts only Domestic inquiries\r\n*Season : Summer, Winter, Spring, Rainy\r\n*Material : Rubber \r\n', '', '', '', 0, 'Mr Vimal Kumar', 'Manufacturer', '100 Pairs', 'Box', 'Long Shelf Life ', 'Accepts only Domestic inquiries', '', '2024-08-21', 11, 13, 25, 30, '', 'NO', '07AADCT2670F1ZG', '', 'NO', 'Delhi', 'C-183, Mayapuri Industrial Area, Phase-II, New Delhi, Delhi, 110064, India', '', 'India', ''),
(63, 'Upper Design Ladies Slipper', '', 'extra_image/flatslippers.jpg', '', '', '', '1.50 - 7.00 ', '1996', ' Aerowalk International (India) Pvt Ltd.', 'extra_image/', 'Upper Design Ladies Slipper\r\n*Feature : Comfortable to wear', '', '', '', 0, 'Mr Rakesh B. Adnani', 'exporter', '1500 Pair', 'Box', 'Long Life ', 'Flat slippers', '', '2024-08-21', 11, 13, 25, 30, '', 'NO', '24AAJCS8036Q1ZO', '', 'NO', 'Gujarat', 'B-19/7, Hojiwala Industrial Estate, Road No 14, Main Gate 3, SUSM, At Vanz, Sachin, Surat, Gujarat, 394230, India', '', 'India', 'USD / Pair'),
(65, '', '', 'extra_image/', '', '', '', '', '', '', 'extra_image/', '', '', '', '', 0, '', '', '', '', '', '', '', '2024-08-21', 11, 16, 75, 49, '', '', '', '', '', '', '', '', '', ''),
(66, 'Party Wear Silk Saree', '', 'extra_image/silksaree.jpg', '', '', '', 'Get Latest Price ', '1961', 'B.T.V. Silk International', 'extra_image/', '*Fabric Type : Art Silk\r\n*Style : Banarasi\r\n*Occasion : Partywear', '', '', '', 0, 'Mr Bhaskar Balachandra', 'exporter', '100 Pieces', 'Plastic Bag ', 'Long Life ', 'Banarasi Silk', '', '2024-08-21', 11, 16, 75, 49, '', 'NO', '29AAAFB9148A1ZO', '', 'NO', 'Karnataka', 'Plot No.13, 1st B MAIN, Sudama Nagar, Bengaluru, Karnataka, 560027, India', '', 'India', ''),
(67, 'Pure Silk Plain Saree', '', 'extra_image/', '', '', '', '1800', '13', '', 'extra_image/', '*Occasion : Casual\r\n*Feature : Plain Silk Saree\r\n*Season : Spring, Summer, Winter, Rainy ', '', '', '', 0, '', '', '', '', '', '', '', '2024-08-21', 11, 16, 75, 49, '', '', '19AADHR2206N1ZY', '', '', '', 'B No. 12, Ground Floor, Noormal Lohia Lane, Kolkata, West Bengal, 700007, India', '', '', 'INR / Piece'),
(68, 'Pure Silk Plain Saree', '', 'extra_image/RedCheapSaree.jpg', '', '', '', '1800', '1985', ' Anup Fabrics', 'extra_image/', '*Season : Spring, Summer, Winter, Rainy\r\n*Occasion : Casual\r\n*Feature : Pure Silk \r\n', '', '', '', 0, 'Mr Ishaan Agarwal', 'exporter', '50 Pieces ', 'Plastic Bag ', 'Long Life ', 'Pure Silk ', '', '2024-08-21', 11, 16, 75, 49, '', 'NO', '19AADHR2206N1ZY', '', 'NO', 'West Bengal', 'B No. 12, Ground Floor, Noormal Lohia Lane, Kolkata, West Bengal, 700007, India', '', 'India', 'INR / Piece'),
(69, ' Ladies Suit Salwar', '', 'product-image/gdhbsftfe.jpg', '', '', '', '129', '2017 ', 'SADABAHAR FASHION', 'extra_image/', '<p>*Minimum Order Quantity : 25 Piece</p>\r\n<p>*Brand Name : SADABAHAR FASHION</p>\r\n<p>*Payment Terms : Paypal, Others, Cash in </p><p>Advance (CID), Cash Advance (CA)</p>\r\n', '', '', '', 0, 'Mr Sangit Makhijani', 'supplier', '25 Piece', '', 'Long Shelf Life', 'Washable , Salwar Kameez , Cotton', '', '2024-08-21', 11, 16, 76, 50, '', 'NO', 'Raw,BOX', '', 'NO', 'Gujarat', 'Shop No 13-14, Patra Ni Chal, Near Vijay Garments, Ramnagar, Rander Road, Surat, Gujarat, 395005, India', 'Tripura, Chandigarh, Himachal Pradesh, Meghalaya, Andaman and Nicobar Islands, Uttarakhand, Daman and Diu, Dadra and Nagar Haveli, Lakshadweep, South India, North India, East India, West India, Andhra Pradesh, Assam, Arunachal Pradesh, Bihar, Chhattisgarh, Goa, Haryana, Jammu and Kashmir, Karnataka, Kerala, Maharashtra, Mizoram, Manipur, Nagaland, Odisha, Pondicherry, Rajasthan, Sikkim, Tamil Nadu, Telangana, West Bengal, Delhi, Gujarat, Madhya Pradesh, Punjab, Central India, Jharkhand, Uttar Pradesh, All India\r\n', 'India', 'INR / Piece'),
(70, 'Multicolor Women Silk Saree', '', 'extra_image/dhjfk.jpg', '', '', '', '745', '1984', 'PARVATI FABRICS LTD.', 'extra_image/', '<p>Pattern : <b>Embroidered</b> </p>\n<p>Occasion : <b> Party Wear </b></p>\n<p> Color : <b> Multicolor </b> </p>', '', '', '', 0, 'Mr. Vikash Pacheriwal', 'Manufacturer', '45 Pieces', 'Plastic Bag ', 'Long Life ', 'Banarasi', '', '2024-08-21', 11, 16, 75, 49, '', 'NO', '24AABCP4170E1ZT', '', 'NO', 'Gujarat', '\"Parvati House\", F- Tower, Shree Kuberji Textile Park, Delhi Gate, Surat, Gujarat, 395003, India', '', 'India', 'INR / Number'),
(71, 'Designer Salwar Suit With Dupatta', '', 'extra_image/hfybjuu.jpg', '', '', '', '295.00', '1984', 'PARVATI FABRICS LTD.', 'extra_image/', '<p> Product Type : <b> Salwar Suit With Dupatta</b> </p>\r\n<p> Pattern : <b> Printed </b> </p>\r\n<p> Dress Type : <b> Casual </b> </p>', '', '', '', 0, 'Mr. Vikash Pacheriwal', 'Manufacturer', '100 Pieces', 'Plastic Bag ', 'Long Shelf Life ', 'Printed ', '', '2024-08-21', 11, 16, 76, 50, '', 'NO', '24AABCP4170E1ZT', '', 'NO', 'Gujarat', '\"Parvati House\", F- Tower, Shree Kuberji Textile Park, Delhi Gate, Surat, Gujarat, 395003, India', '', 'India', 'INR / Piece'),
(72, 'Partywear Ladies Anarkali Salwar Suits', '', 'extra_image/Anarkali-and-Punjabi-Suits.jpg', '', '', '', '1000-5000 ', '2013', 'Dstyle Icon Fashion', 'extra_image/', '<p>Minimum Order Quantity : <b>Any Order</b> </p>\r\n<p> Feature : <b>Dry Cleaning, Washable</b> </p>\r\n<p>Product Type : <b>Anarkali Suit </b> </p>\r\n<p>Pattern : <b>Embroidered</b> </p>', '', '', '', 0, 'Mr Nilesh Patel', 'Manufacturer', 'Any Order', 'Plastic Bag ', 'Long Shelf Life ', 'Dry Cleaning, Washable', '', '2024-08-21', 11, 16, 76, 50, '', 'NO', '24ALBPP1291N1ZW', '', 'NO', 'Gujarat', '523-524,GOLDEN PLAZA MARKET,NR. KINNARI CINEMA,RING ROAD Surat, Gujarat, 395002, India', '', 'India', ' INR'),
(73, 'Sprinkler System', '', 'extra_image/Sprinkler of automatic watering.jpg', '', '', '', '250.00 - 890.00', '1985', 'ELEGANT POLYMERS', 'extra_image/', '<p>Minimum Order Quantity : <b>200</b> </p>\r\n<p>Brand Name : <b>VARUN & WATERMAN</b> </p>\r\n<p>Payment Terms : <b>Cash Against Delivery (CAD), Letter of Credit (L/C), Letter of Credit at Sight (Sight L/C), Telegraphic Transfer (T/T), Cash in Advance (CID), Cheque</b></p>\r\n<p>Certifications : <b>IS: 14151 (Pt-1) & (Pt-2)</b></p>\r\n', '', '', '', 0, 'Mr Naimishbhai Patel', 'exporter', '200 Pieces ', '', 'Long Shelf Life ', 'Sprinkler Irrigation System', '', '2024-08-21', 10, 11, 22, 26, '', 'NO', 'Machin', '', 'NO', 'Gujarat', '6, Rajputpara, Lohana Boarding, Rajkot, Gujarat, 360001, India', '', 'India', 'INR'),
(74, 'Rain Gun Irrigation Sprinkler', '', 'extra_image/Farm-Irrigation-Equipment.jpg', '', '', '', '2891.00', '2016', 'GREENSHIFT TECHNOLOGIES', 'product-image/icons8-no-image-100.png', '<p>(2450.00 INR + 18% GST)</p>\r\n<p>Brand Name : <b>GREENSHIFT</b><p>\r\n<p>Certification : <b>ISO:9001:2015</b></p>\r\n<p>Weight : <b>2.00 Kilogram</b></p>\r\n<p><b>1 Pack Contains 1</b></b>\r\n<p><b>Minimum Pack Size 1</b></b>\r\n<p>Payment Terms : <b>Cash on Delivery (COD), Cash Advance (CA)</b></p>\r\n<p>Rotation Angle : <b>360/180</b></p> <p>AdjustableApplication : <b>WateringArea	40000 Square Foot (ft2)</b></p>\r\n', '', '', '', 0, 'Mr Arup Chakraborty', 'Manufacturer', '1 Pack ', '', 'Long Shelf Life ', 'Rain Gun Irrigation Sprinkler', '', '2024-08-21', 10, 11, 22, 26, '', 'NO', '', '', 'NO', 'West Bengal', 'I 27, Block- J, Baishnab Ghata, Patuli, Kolkata, West Bengal, 700094, India', '', 'India', 'INR / Number'),
(75, 'Plastic Sprinkler Irrigation System', '', 'extra_image/vhuhjnm.jpg', '', '', '', '60', '2013', 'WELLDRIP IRRIGATION INDUSTRIES', 'extra_image/', '<p>Product Type : <b>Agriculture Sprinkler</b></p>\r\n<p>Material : <b>Plastic</b></p>\r\n<p>Rotation Angle : <b>360</b></p>\r\n<p>Payment Terms	: <b>Cash in Advance (CID)</b></p>\r\n', '', '', '', 0, 'Mr HITESH GELOT', 'exporter', '100', 'Pieces', 'Long Shelf Life ', 'Agriculture Sprinkler', '', '2024-08-21', 10, 11, 22, 26, '', 'NO', '24AADFW2232M1Z6', '', 'NO', 'Gujarat', 'Survey No. 1104, Plot No. 3, Kubadthal Village, Opp. Shree B C Patel Swaminarayan School, TA- Daskroi, Ahmedabad, Gujarat, 382430, India', '', 'India', 'INR / Piece'),
(76, 'Green Garden Plant', '', 'extra_image/gyhsjhj.jpg', '', '', '', '22', '2006', 'Yesraj Enterprises', 'extra_image/', '<p>Product Type : <b>Fresh Flowers</b></p>\r\n<p>Shelf Life : <b>1-2 Years</b></p>\r\n<p>Payment Terms : <b>Cash Advance (CA), Cash in Advance (CID)</b></p>\r\n<p>Variety : <b>Lily</b></p>\r\n<p>Color : <b>Green</b></p>\r\n<p>Variety : <b>Lily</b></p>\r\n\r\n', '', '', '', 0, 'Mr Raj Bhagat', 'exporter', '5 Kilograms', 'Raw', '1-2 Years ', 'Fresh Flowers', '', '2024-08-21', 10, 10, 17, 20, '', 'NO', '27AJMPB0208L1ZE', '', 'NO', 'Maharashtra', 'Market Yard, Pune, Maharashtra, 411037, India', '', 'India', 'INR / Kilograms'),
(77, 'Automotive Electrical Parts For Automobile Industry', '', 'extra_image/gthkdri.jpg', '', '', '', '1000', '2022', 'Idan Motors Pvt Ltd', 'extra_image/', '<p>Technics : <b>Machine Made</b></p>\r\n<p>Physical Form : <b>Solid</b></p>\r\n<p>Performance : <b>Optimum Performance</b></p>\r\n<p>Quality : <b>Supreme Quality</b></p>\r\n<p>Power Source : <b>Electrical</b></p>\r\n<p>Efficiency : <b>High-Efficiency</b></p>\r\n<p>Payment Terms : <b>Cash in Advance (CID), Cheque, Telegraphic Transfer (T/T), Others</b></p>\r\n', '', '', '', 0, 'MR. Sachin Nigadi', 'Manufacturer', '500 Number ', 'Machin', 'Long Life ', 'Easy to Install, Lightweight', '', '2024-08-21', 12, 23, 77, 51, '', 'NO', 'NO ', '', 'NO', 'Maharashtra', 'Plot no 54, Lane, no 8, FP 120, Ramtekdi Industrial Area, Hadapsar Pune, Maharashtra, 411028, India', '', 'India', 'INR / Number'),
(78, 'Decorative Modern Wall Lamp', '', 'extra_image/hjjkghjgh.jpg', '', '', '', '145.00', '2017', 'HIMARTH PRODUCTS', 'extra_image/', '<p>Material : <b>Glass</b></p>\r\n<p>Light Source : <b>Energy Saving</b></p>\r\n<p>Power Consumption	: <b>40 Watt (W)</b></p>\r\n<p>Color	: <b>MULTICOLOR</b></p>\r\n', '', '', '', 0, 'Mr Pradhuman Gupta', 'Manufacturer', '5 Pieces', 'Box', 'Long Shelf Life ', 'Energy Saving', '', '2024-08-22', 11, 15, 12, 18, '', 'NO', '09DFBPP5283R1ZI', '', 'NO', 'Uttar Pradesh', 'B No. 94, Gali No. 16, Smk School, Adarsh Nagar Firozabad, Uttar Pradesh, 283203, India', '', 'India', ' INR / Piece'),
(79, 'Wooden Modern Floor Lamp With Tripod Stand', '', 'extra_image/jfhfgrytrw.jpg', '', '', '', 'Get Latest Price ', '2023', 'YEDHANT INTERNATIONAL', 'extra_image/', '<p><b>Accepts only Foreign inquiries</b></p>\r\n<p>Type : <b>Indoor, Outdoor</b></p>\r\n<P>Design Type : <b>Factory Made</b></p>\r\n<p>Size	: <b>Customized</b></p>\r\n<p>Shape : <b>Different Available</b></p>\r\n<p>Color : <b>Different Available</b></p>', '', '', '', 0, 'Mr Siddhant Pushkarna', 'exporter', '100 Pieces', 'Box', 'Long Shelf Life ', 'Customized', '', '2024-08-22', 11, 15, 12, 18, '', 'NO', '06GUNPP0275H1Z9', '', 'NO', 'Haryana', 'First Floor, Shop No. 302, Property No. 570-574, Kalka, Post Office, Lower Bazar, Panchkula, Haryana, 133302, India', '', 'India', ''),
(80, 'Wooden Hanging Lamp', '', 'extra_image/ftrgb.jpg', '', '', '', '2830.00', '2012', 'NEPTUNE ENTERPRISES', 'extra_image/', '<p>(2830.00 INR + 0% GST)</p>\r\n<p>Material : <b>Pine Wood</b></p>\r\n<p>Style : <b>Antique Imitation, Religious</b></p>\r\n<p>Technics : <b>Polished, Carved</b></p>\r\n<p>Use : <b>Arts And Crafts, Home Decoration, Art & Collectible, Birthday Gift</b></p>', '', '', '', 0, 'Ms Seema', 'exporter', '100 Pieces', 'Box', 'Long Shelf Life ', 'Antique Imitation, Religious', '', '2024-08-22', 11, 15, 12, 18, '', 'NO', '27AGMPK4555C1ZD', '', 'NO', 'Maharashtra', 'Plot No.-A/1, Maqbool Manzil, Malad East, Near Holy Prophet Eng. School, Mumbai, Maharashtra, 400097, India', '', 'India', 'INR / Piece'),
(81, 'Round Lamp Post', '', 'extra_image/fdftfcfsc.jpg', '', '', '', '10000.00', '1998', 'SHRI GEE ENTERPRISES', 'extra_image/', '<p>Brand Name : <b>SHRI GEE ENTERPRISES</b></p>\r\n<p>Material : <b>Metal</b></p>\r\n<p>Shape : <b>Round</b></p>\r\n<p>Size : <b>Different Size</b></p>', '', '', '', 0, 'Mr A. K. Sharma', 'Manufacturer', '20 Pieces', 'Box', 'Long Shelf Life ', 'Metal ', '', '2024-08-22', 11, 15, 12, 18, '', 'NO', '09AUSPS2096L1ZL', '', 'NO', 'Uttar Pradesh', 'Plot No. 194-A, Prakash Industrial Area, G.T. Road, Sahibabad, Uttar Pradesh, 201005, India', '', 'India', 'INR / Unit'),
(82, 'Casual Shoes', '', 'extra_image/rtetty.jpg', '', '', '', '385', '2012', 'BAXXICO', 'extra_image/', '<p>Toe Style : <b>Round</b></p>\r\n<p>Logo : <b>Bxxy</b></p>\r\n<p>Lining Material : <b>Cotton Fabric</b></p>\r\n<p>Payment Terms : <b>Cheque, Letter of Credit (L/C), Telegraphic Transfer (T/T), Paypal, Others, Cash Advance (CA), Cash in Advance (CID)</b></p>', '', '', '', 0, 'Mr Rajan Bakshi', 'exporter', '8 Pairs ', '', 'Long Life ', 'Casual Shoes', '', '2024-08-23', 11, 13, 78, 52, '', 'NO', 'Box', '', 'NO', 'Uttar Pradesh', 'C-29, Site-A, UPSIDC Industrial Area, Sikandra, Agra, Uttar Pradesh, 282007, India', '', 'India', 'INR / Pair'),
(83, 'Leather Hand Gloves', '', 'extra_image/fhdgdf4eww.jpg', '', '', '', '80', '2005', 'Sumangalam Distributor Private Limited', 'extra_image/', '<p>Usage : <b>Industrial & Commercial</b></p>\r\n<p>Product Type : <b>Gloves</b></p>\r\n<p>Fabric Type : <b>Leather</b></p>\r\n<p>Glove Type : <b>Other, All Purpose</b></p>\r\n<p>Style : <b>Full Finger</b></p>', '', '', '', 0, 'Mr. Sandeep Mitra', 'supplier', '50 Pairs ', 'Plastic Bag ', 'Long Shelf Life ', 'Leather', '', '2024-08-23', 11, 24, 79, 53, '', 'NO', '19AAKCS4545D1Z7', '', 'NO', 'West Bengal', 'Ground Floor, 16, Rupchand Roy Street, Burra Bazar, Barabazar Market, Kolkata, West Bengal, 700007, India', '', 'India', 'INR / Pair'),
(84, 'Household Hand Gloves', '', 'product-image/ggfgjjjjdddd.jpg', '', '', '', '70', '2015', 'VICTOR IMPORTS', 'extra_image/', '<p>Minimum Order Quantity : <b>300 Pair</b></p>\r\n<p>Brand Name : <b>Victor House Hold</b></p>\r\n<p>Usage : <b>House Hold, House fitting</b></p>\r\n<p>Material : <b>Latex</b></p>', '', '', '', 0, 'Mr Kaushik Shah', 'exporter', '300 Pairs ', 'Plastic Bag ', 'Long Life ', 'Latex', '', '2024-08-23', 11, 24, 79, 53, '', 'NO', '27AAMFV3839L1ZF ', '', 'NO', 'Maharashtra', 'No.-3, Krishna Niwas, Khetwadi, 9th Lane, Mumbai, Maharashtra, 400004, India', '', 'India', 'INR / Pair'),
(85, 'Transparent Poly Gloves', '', 'extra_image/ggfyygghh.jpg', '', '', '', '110', '2001', 'ARAMBANS EXPORTERS PVT. LTD.', 'extra_image/', '<p>Material : <b>PU</b></p>\r\n<p>Style : <b>Non Woven</b></p>\r\n<p>Sterilized : <b>Yes</b></p>\r\n<p>Shape : <b>Rectangle</b></p>\r\n<p>Color : <b>Transparent</b></p>', '', '', '', 0, 'Mr. Stefhy John', 'exporter', '10 Pairs', 'Plastic Bag ', 'Long Life ', 'PU', '', '2024-08-23', 11, 24, 80, 53, '', 'NO', '32AAECA3603J1Z5', '', 'NO', 'Kerala', 'Attokaran, Thiruthur Temple Road, Kuriachira P.O., Thrissur, Kerala, 680006, India', '', 'India', 'INR / Pair'),
(86, 'Ultra Type Helmet', '', 'product-image/71235_bmw-equipacion-2008-1.jpg', '', '', '', 'Get Latest Price ', '1996', 'PARAS INDUSTRIES (INDIA)', 'extra_image/', '<p>Feature : <b>Provide complete protection</b></p>\r\n<p>Certification : <b>ISO 9001:2008</b></p>\r\n', '', '', '', 0, 'Mr Rajesh Kumar Aggarwal', 'exporter', '50 Pieces ', 'Plastic Bag ', 'Long Shelf Life ', 'Customized', '', '2024-08-23', 11, 24, 82, 54, '', 'NO', '07AIIPA7567L1ZV', '', 'NO', 'Delhi', 'Plot No. J-154, Sec-2, Bawana Industrial State, Delhi, Delhi, 110039, India', '', 'India', ''),
(89, 'PVC Safety Helmet ', '', 'extra_image/SteelWireMeshFaceShieldYMD-536-1.jpg', '', '', '', 'Get Latest Price ', '2002', 'Safeline Enterprises', 'extra_image/', '<p>Reusable : <b>Yes</b></p>\r\n<p>Usage :  <b>Commercial / Personal</b></p>\r\n<p>Gender :  <b>Unisex</b></p>\r\n<p>Material :  <b>Plastic</b></p>\r\n<p>Warranty :  <b>Yes</b></p>\r\n', '', '', '', 0, 'Mr Sanraj S Rangmale', 'supplier', '100 Pieces', 'Plastic Bag ', 'Long Shelf Life ', 'Commercial / Personal', '', '2024-08-23', 11, 24, 81, 54, '', 'NO', '27AMIPP9080B1ZV', '', 'NO', 'Maharashtra', 'B 4 , Manish Park, Phase 3, Nidm Road, Kondhwa Pune, Maharashtra, 411048, India', '', 'India', ''),
(90, 'PVC Safety Helmet ', '', 'extra_image/large_casca-endurace-ps55ps551799ps55yer.jpg', '', '', '', '110', '2016', 'Shri Harihar LR', 'extra_image/', '<p>Material : <b>PVC</b></p>\r\n<p>Warranty : <b>Yes</b></p>\r\n<p>Usage : <b>Industrial</b></p>\r\n<p>Helmet Type : <b>Workplace Safety Helmet</b></p>\r\n<p>Helmet Style : <b>Open Face Helmet</b></p>', '', '', '', 0, 'Mr. Neeraj Mittal', 'exporter', '50 Piece', 'Plastic Bag ', 'Long Shelf Life ', 'Open Face Helmet', '', '2024-08-23', 11, 24, 81, 54, '', 'NO', '06ARYPM9322L1ZY', '', 'NO', 'Haryana', 'Plot No. 517, Huda, Sector 2, Palwal, Haryana, 121102, India', '', 'India', 'INR / Piece'),
(91, 'Safety Helmet Ultra', '', 'extra_image/3M_SecureFit_Safety_Helmet_.jpg', '', '', '', '110', '2014', 'SHREE RADHE RADHE', 'extra_image/', '<p>Product Type :<b> HDPE Ultra Pro 3000 Series Safety Helmet</b></p>\r\n<p>Material : <b>Plastic</b></p>\r\n<p>Helmet Style : <b>Open Face Helmet</b></p>\r\n<p>Size : <b>Standard</b></p>\r\n<p>Payment Terms : <b>Cash in Advance (CID)</b></p>', '', '', '', 0, 'Mr. Bharat Goyal', 'exporter', '75 Box', 'Box ', 'Long Shelf Life ', 'Safety Helmet ', '', '2024-08-23', 11, 24, 82, 54, '', 'NO', '24AGDPG3270B1Z4', '', 'NO ', 'Gujarat', 'Plot No. 63, North D.B.Z., North, Gandhidham Khanna Market, Near Railway Colony Main Gate, Gandhidham, Gujarat, 370201, India', '', 'India', 'INR / Box'),
(92, 'Gram Flour', '', 'extra_image/gramflour.jpg', '', '', '', '35.00 - 80.00', '2016', 'Yesraj Enterprises', 'extra_image/', '<p>Style : <b>Processed Food</b></p>\r\n<p>Product Type : <b>Flour, Other</b></p>\r\n<p>Type : <b>Gram, Other</b></p>\r\n<p>Shape : <b>Powder</b></p>\r\n<p>Packaging : <b>Vacuum Pack</b></p>', '', '', '', 0, 'Mr Raj Bhagat', 'exporter', '5 Kilograms', 'Raw', '1-2 Years ', 'Processed Food', '', '2024-08-23', 16, 19, 28, 34, '', 'NO', '27AJMPB0208L1ZE', '', 'NO', 'Maharashtra', 'Market Yard, Pune, Maharashtra, 411037, India', '', 'India', 'INR / Kilograms'),
(93, 'Finely Grounded Pure Besan', '', 'extra_image/finhghrdcc.jpg', '', '', '', '44.00', '2017', 'Gpc Natural Food Products', 'extra_image/', '<p>(44.00 INR + 0% GST)</p>\r\n<p>MRP: 68.00 INR / Kilograms</p>\r\n<p>Weight: 500.00 Gram</p>\r\n<p>1 Pack Contains 1</p>\r\n<p>Type : <b>Besan</b></p>\r\n<p>Usage : <b>Food Product</b></p>\r\n<p>Made From : <b>Gram or chickpea</b></p>\r\n<p>Color : <b>Light Yellow</b></p>', '', '', '', 0, 'Mr ADITYA KUMAR SINGH', 'exporter', '20 Pack', 'Packets ', '1-2 Years ', 'Finely Grounded', '', '2024-08-23', 16, 19, 28, 34, '', 'NO', '10AZYPK2858H1Z1', '', 'NO ', 'Bihar', 'ASHOPUR, DANAPUR, KHAGAUL ROAD, Patna, Bihar, 801503, India', '', 'India', 'INR / Kilograms'),
(94, 'Agricultural Fertilizer Granular', '', 'extra_image/aaaaaaaaaaaaa.jpg', '', '', '', 'Get Latest Price ', '2022', 'SHUDHYATI', 'extra_image/', '<p>Physical State : <b>Granular</b></p>\r\n<p>Release Type : <b>Controlled</b></p>\r\n<p>Purity(%)	: <b>100%</b></p>\r\n<p>Application : <b>Organic Fertilizer</b></p>\r\n<p>Storage : <b>Room Temperature</b></p>', '', '', '', 0, 'Mr Mr. Abhishek', 'Manufacturer', '100 Kg ', 'Plastic Bag ', '1-5 Years ', 'Organic Fertilizer', '', '2024-08-23', 10, 25, 83, 56, '', 'NO', '07ANJPD7922J1ZU', '', 'NO ', 'Delhi', 'Dichaon Enclave, Sainik Niketan, Dichaon Kalan, 110072 Delhi, Delhi, 110043, India', '', 'India', ''),
(95, 'Humic Acid For Plant Growth', '', 'extra_image/bbbbbbbbbbb.jpg', '', '', '', '65.00 - 70.00', '2012', 'STAR CHEMICALS', 'extra_image/', '<p>Application : <b>Organic Fertilizer</b></p>\r\n<p>Storage : <p>Room Temperature</b></p>\r\n<p>Sample Available : <p>Yes</b></p>\r\n<p>Payment Terms : <p>Cheque</b></p>', '', '', '', 0, 'Mr Rahul Sureshkumar Dayal', 'exporter', '50-100 Kilograms', 'Plastic Bag ', '1-5 Years ', 'Plant Growth Regulator', '', '2024-08-23', 10, 25, 84, 56, '', 'NO', '24ALCPD5093R1ZR', '', 'NO', 'Gujarat', '307, 3rd Floor, University Plaza, Above Chocolate Room, Vijay Cross Road, Navrangpura, Ahmedabad, Gujarat, 380009, India', '', 'India', 'INR / Kilograms'),
(97, 'Brown Cow Dung Cake', '', 'extra_image/sssssssssssssss.jpg', '', '', '', 'Get Latest Price ', '1993', 'VIJAI POLYMERS', 'product-image/ffffffffffff.jpg', '<p>Type : <b>Other, Cow Dung Cake</b></p>\r\n<p>Application : <b>Other, Religious</b></p>\r\n<p>Color : <b>Brown</b></p>\r\n<p>Payment Terms : <b>Cash in Advance (CID)</b></p>', '', '', '', 0, 'Mr Shailendra Mehta', '', '100 Piece', 'Plastic Bag ', 'Long Life ', 'Cow Dung Cake', '', '2024-08-23', 10, 25, 85, 56, '', 'NO', '24ACLPM5240R1Z3', '', 'NO', 'Gujarat', '3, Govind Estate, Survey No 193/3, Ranipur Patia, Behind Tarachand Mill, Narol. Ahmedabad, Gujarat, 382405, India', '', 'India', ''),
(98, 'Pure White Saanen Goat', '', 'extra_image/Hora-25sannen.jpg', '', '', '', ' 50 ', '1998', 'ETL Framework Ltd', 'extra_image/', '<p>Weight : <b>110 to 135 Kilograms (kg)</b></p>\r\n<p>Color :<b>100% Pure White</b></p>\r\n<p>Age : <b>3 to 6 Months Old</b></p>\r\n<p>Breed : <b>Pure White Saanen</b></p>\r\n<p>Gender : <b>Male, Female, Both</b></p>\r\n<p>Certification : <b>ISO 9001</b></p>\r\n', '', '', '', 0, 'Mr Qureshi Irshad', 'exporter', '10 Unit', 'Unpacked ', '10-12 Years', 'Pure White Saanen', '', '2024-08-24', 10, 12, 87, 58, '', 'NO', 'NO ', '', 'NO ', '', '42 Lakeside, Registration number : 07221409 Oxford, Oxford, OX28JH , United Kingdom', '', 'United Kingdom', 'USD / Unit'),
(99, 'Kota Goat', '', 'extra_image/yryyyhfhhfhfh.jpg', '', '', '', '40000.00', '2018', 'Gratize Venture Consulting Services Pvt. Ltd.', 'extra_image/', '<p>(40000.00 INR + 0% GST)</p>\r\n<p><b>1 Pack Contains 1</b></p>\r\n<p>Color : <b>White , Brown</b></p>\r\n<p>Product Type : <b>Kota Goat</b></p>\r\n<p>Age : <b>01 Year</b></p>\r\n<p>Gender : <b>Female</b></p>\r\n<p>Payment Terms : <b>Cash in Advance (CID)</b></p>', '', '', '', 0, 'Pashushala Pashushala.Com', 'supplier', '2 Piece', 'Unpacked ', '12-15 Years', 'White , Brown', '', '2024-08-24', 10, 12, 88, 58, '', 'NO', 'NO ', '', 'NO', 'Karnataka', 'Mythri Mithila, Gunjur, Varthur, Bengaluru, Karnataka, 560087, India', '', 'India', 'INR / Piece'),
(100, 'Good Fragrance And Make Germs Free White Phenyl ', '', 'extra_image/gdagygdyegfhebfhf.jpg', '', '', '', ' 50', '2005', 'SUSUN INDUSTRIES', 'product-image/susun-industrieslogo.jpg', '<p>Accepts only Domestic inquiries</p>\r\n<p><b>Minimum Order Quantity : Order should be above 25000 /- INR</b></p>\r\n<p>Usage : <b>Other, Housekeeping, Hospital</b></p>\r\n<p>Feature : <b>Good fragrance and make germs Free</b></p>\r\n<p>Payment Terms : <b>Others, Cash Advance (CA)</b></p>\r\n', '', '', '', 0, 'Mr Senthamarai Kannan', 'Manufacturer', ' Above 25000 Bottles ', 'Plastic Bottles ', '1-2 Years ', 'Good Fragrance    ', '', '2024-08-26', 18, 26, 91, 60, '', 'NO', '33ALSPS4497G1ZE', '', 'NO', 'Tamil Nadu', 'No. 7, Betheal Nagar, Main Road, Perungudi, Chennai, Tamil Nadu, 600096, India', '<p>SUSUN Industries White Phenyl is your go-to solution for effective and efficient cleaning. This versatile cleaner is designed to tackle tough stains and odors while leaving behind a fresh, pleasant fragrance. Ideal for use in homes, offices, and industrial settings, it provides superior cleanliness and hygiene.<p>\r\n\r\n<p><b>Benefits:</b></p>\r\nPowerful Cleaning: Removes stubborn stains and grime effortlessly.\r\nOdor Neutralization: Eliminates unpleasant odors and leaves a fresh scent.\r\nVersatile Use: Suitable for a variety of surfaces including floors, tiles, and countertops.\r\nSafe and Effective: Gentle on surfaces yet tough on dirt.\r\n \r\nWe Provide : High-quality 100 gm Ant Killing Powder, 1000 Gm Bleaching Powder, 1000 ML Cleaning Acid, etc. \r\n', 'India', 'INR'),
(101, 'Milky Bulldog Cloth Washing Brush', '', 'extra_image/Cleaning-Brushes-Household-Clothes-Shoes-Scrubbing.jpg', '', '', '', ' 60-260', '2018', 'SUMIT ENTERPRISES', 'product-image/sumit-enterpriseslogo.jpg', '<p>Usage : <b>Other</b></p>\r\n<p>Material : <b>Plastic</b></p>\r\n<p>Feature : <b>Long Working Life</b></p>', '', '', '', 0, 'Mr Sumit', 'exporter', ' 2000 Piece', 'Plastic Bag ', 'Long Life ', 'Long Working Life', '', '2024-08-26', 18, 26, 92, 60, '', 'NO', '09GMUPK8236E1ZE', '', 'NO', 'Uttar Pradesh', 'Nagla Rambal, Mohan Nagar, Near Galla Mandi Samiti, Agra, Uttar Pradesh, 282006, India', '<p>The SUMIT Enterprises Toilet Brush is designed for thorough and efficient cleaning of toilet bowls. Featuring durable bristles and a sturdy handle, this brush ensures that you can reach every corner and remove tough stains with ease. Its ergonomic design and easy-to-clean properties make it a practical addition to any bathroom.</p>\r\n\r\n<b>Benefits:</b>\r\n\r\nEffective Cleaning: Rigid bristles scrub away stains and grime.\r\nErgonomic Handle: Comfortable grip for effortless use.\r\nDurable Construction: Built to withstand regular use.\r\nHygienic Design: Easy to clean and maintain.', 'India', ' INR / Piece'),
(102, 'Basket Magic Corner', '', 'extra_image/kitchencornerbasket.jpg', '', '', '', '300 - 3500', '2009', 'CRYSTAL STEEL DECOR (INDIA) PRIVATE LIMITED', 'extra_image/crystal-steel-decor-india-private-limitedlogo.jpg', '<p>Accepts only Domestic inquiries</p>\r\n<p>Certification : <b>ISO 9001:2015</b></p>\r\n<p>Material : <b>Stainless steel</b></p> ', '', '', '', 0, 'Mr Teerth Patel', 'exporter', '50 Piece', 'Box', 'Long Shelf Life ', 'Stainless Steal ', '', '2024-08-26', 18, 27, 93, 61, '', 'NO', '29AADCC7153L1ZA', '', 'NO', 'Karnataka', 'B No. 161/A, 5th Main, Near ESI Hospital, Industrial Suburb, 2nd Stage, Bengaluru, Karnataka, 560022, India', '<p>At Crystal Steel Decor (India) Private Limited, we are committed to elevating your space with our premium range of railing solutions. With a focus on innovation, durability, and aesthetics, our products are designed to meet the highest standards of quality and style.</p>\r\n<p>Our Product Range</p>\r\n<p>Stainless steel Mid Railings, Stainless steel Glass Railing, Low height Baluster Railing, Aluminium Channel railing and many others.</p>', 'India', ' INR / Piece'),
(103, 'Washable Cutlery Drawer Basket', '', 'extra_image/Washable Cutlery Drawer Basket.jpg', '', '', '', '2000.00', '2006', 'VAVINA ENTERPRISES', 'extra_image/vavina-enterpriseslogo.jpg', '<p>Appearance : <b>Modern</b></p>\r\n<p>Product Type : <b>Kitchen Accessories</b></p>\r\n<p>Material : <b>Stain less steel</b></p>\r\n<p>Metals Type : <b>Steel</b></p>\r\n<p>Accessories : <b>Kitchen Rack</b></p>', '', '', '', 0, 'Mr Pravin', 'exporter', '100 Pieces', 'Box', 'Long Shelf Life ', 'Stainless Steel ', '', '2024-08-26', 18, 27, 94, 61, '', 'NO', '27BKVPP4424P1Z6', '', 'NO', 'Maharashtra', '05, And 15 Manish Ind. Estate No. 3 & 2 Resp. Navghar, Vasai Road Stn East, Vasai, Maharashtra, 401210, India', '<p>At Vavina Enterprises, we are passionate about enhancing your home and workspace with our innovative and high-quality products. From modular kitchens to designer furniture, our offerings are designed to blend functionality with style, making everyday living and working more efficient and enjoyable.</p>\r\n<p><b> Our Product Range,/b></p>\r\n<p>Modular Kitchens, Kitchen Wire Baskets, Cylinder Trolleys, Bin Holders, Kitchen Trays, Drawer Basket, Kitchen Basket, Designer Furniture, Quadro Baskets and Corner Carousel Tray.</p>', 'India', 'INR / Piece'),
(105, 'Recycle Dust Bins', '', 'extra_image/iStock-477463858.jpg', '', '', '', '650', '2019', 'CLEAN & GREEN EQUIPMENTS PRIVATE LIMITED', 'extra_image/dustbinlogo.jpg', '<p>Size : <b>10-100 Ltr</b></p>\r\n<p>Color : Blue</b></p>\r\n<p>Product : Type	Recycle Dust Bins</b></p>\r\n<p>Material : Plastic</b></p>\r\n<p>Application : Garbage Collection</b></p>', '', '', '', 0, 'Mr Sachendra Srivastava', 'exporter', '15 Pieces', 'Box ', 'Long Shelf Life ', 'Recyclable ', '', '2024-08-26', 18, 27, 95, 62, '', 'NO', '09AAICC1115F1Z2', '', 'NO', 'Uttar Pradesh', 'Kh. No - 63, Punchsheel Enclave, Bhopra, Ghaziabad, Uttar Pradesh, 201102, India', '<p>At Clean & Green Equipments Private Limited, we are dedicated to providing top-tier solutions for effective waste management and site operations. Our extensive product range is designed to enhance efficiency, safety, and sustainability, ensuring that your environment remains clean and well-maintained.<p/>\r\n<p>We Provide</p> \r\n <p>Hydraulic Scissor Sky Lift, 1100 Ltr MS Compactor Bin, Eco Friendly Mobile Toilet, Hydraulic Tractor Trolley, Close Body Twin Garbage Tipper, Portable Thermal Fogging Machine, Cart Trolley, Single Bin Dumper Placer, etc.</p>', 'India', 'INR / Piece');
INSERT INTO `product` (`pro_id`, `product_name`, `long_dec`, `product_image1`, `product_image2`, `product_image3`, `title`, `price`, `company_experience`, `company_name`, `company_logo`, `product_description`, `city`, `state`, `country`, `number`, `client_name`, `business_type`, `moq`, `packaging_type`, `product_life`, `feature`, `company_description`, `date`, `cat_id`, `sub_id`, `micro_id`, `inner_cat_id`, `name`, `iec`, `gst`, `exp`, `website`, `state_name`, `company_address`, `about_company`, `country_name`, `unit`) VALUES
(106, 'Organic Fresh Apple', '', 'extra_image/applesss.jpg', '', '', '', 'Get Latest Price ', '2023', ' V CARE AGRO INDUSTRIES', 'product-image/Nologo.jpg', '<p><b>Accepts only Foreign inquiries</b></p>\r\n<p>Type : <b>Apple</b></p>\r\n<p>Cultivation Type : <b>Organic</b></p>\r\n<p>Part : <b>Non-Peeled</b></p>\r\n<p>Taste : <b>Normal</b></p>\r\n<p>Glutinous : <b>Non Glutinous</b></p>', '', '', '', 0, 'Mr Raju', 'exporter', '100 Kilograms', 'Box ', '4-8 Months ', 'Organic', '', '2024-08-27', 16, 21, 103, 35, '', 'NO', '27AAFPZ5903Q1ZU', '', 'NO', 'Maharashtra', 'Sai Chamber B/63, Ground Floor, Plot No. 44, Sector 11, CBD Belapur, Navi Mumbai, Maharashtra, 400614, India', '<p>At V CARE AGRO INDUSTRIES, we are dedicated to bringing you the finest, freshest, and most flavorful agro products. Our passion for quality and excellence drives us to offer a diverse range of products that cater to all your culinary needs.</p>\r\n<p><b>Explore our range:</b></p>\r\n<p>fresh and nutritious green bananas, green chilli, amla pickles, mirchi thecha, solapuri shengadana chutney, etc.</p>', 'India', ''),
(108, 'Fresh Organic Banana', '', 'extra_image/caZ0pmCqY4nrODORXiOSwBKrYkM8g8qM0DfcFQzD-hbVL6rOKIrcNHPDA00VBobY8psX8_g1.jpg', '', '', '', 'Get Latest Price ', '2023', 'Ananta Exports', 'product-image/Nologo.jpg', '<p>Type : <b>Bananas</b></p>\r\n<p>Cultivation Type :  <b>Organic</b></p>\r\n<p>Glutinous :  <b>Glutinous</b></p>\r\n<p>Payment Terms :  <b>Cash in Advance (CID)</b></p>', '', '', '', 0, 'Mr Abhishek Hiralal Bicchal', 'exporter', '1 Ton', 'Box ', 'Upto 7 Days ', 'Organic', '', '2024-08-27', 16, 21, 105, 35, '', 'NO', '27AYAPB1789K1ZA', '', 'NO', 'Maharashtra', '188, B, Sakhar Peth, Solapur, Maharashtra, 413005, India', '<p>At Ananta Exports, we are committed to providing you with the finest quality produce and spices, meticulously sourced and expertly handled to ensure optimal freshness and flavor. Our diverse range of premium products is designed to meet the highest standards and cater to your culinary needs.</p>\r\n<p><b>Explore what we offer:</b></p>\r\n<p> Devgad Mango, Fresh Grapes, Black Pepper, Fresh Ginger, Red Onion, and more.</p>', 'India', ''),
(109, ' A Grade Fresh Mangosteen', '', 'extra_image/Mangosteen fruit_2.jpg', '', '', '', '400', '1985', 'East West Agro', 'extra_image/Nologo.jpg', '<p>Cultivation Type : <b>Organic</b></p>\r\n<p>Variety : <b>Fresh</b></p>\r\n<p>Part : <b>Whole</b></p>\r\n<p>Size : <b>Natural</b></p>\r\n<p>Shape : <b>Natural</b></p>', '', '', '', 0, 'Mr. Helan Pon Pandian', 'exporter', '100 Kilograms', 'Box', 'Upto 3 Weeks ', 'Fresh & Organic ', '', '2024-08-27', 16, 21, 106, 35, '', 'NO', '27AJQPP4956M2Z6', '', 'NO', 'Maharashtra', 'Bomanji Dhunji Bhoy Building, 22B, Nawab Tank Road, Mazgaon, Mumbai, Maharashtra, 400010, India', '<p>At East West Agro, we are dedicated to bridging the gap between the finest global agricultural produce and your discerning palate. Our carefully curated selection of premium products is designed to bring exceptional quality and unique flavors to your kitchen.</p>\r\n<p><b>We Provide</b></p>\r\n<p>Fresh Rosemary Leaves, Frozen Avocado Pulp, Avocado Seeds, Hass Avocado Plant From New Zealand, and more.</p>', 'India', 'INR / Kilograms'),
(112, 'Cashew Nuts', '', 'extra_image/cashews.jpg', '', '', '', '900.00', '2019', 'PUGAZHINI FOOD PRODUCTS', 'extra_image/Nologo.jpg', '<p>Accepts only Domestic inquiries</p>\r\n<p>(900.00 INR + 0% GST)</p>\r\n<p>1 Pack Contains 1</p>\r\n<p>Brand Name : <b>PUGAZHINI FOOD PRODUCTS</b></p>\r\n', '', '', '', 0, 'Mr Sundaravarman', 'Manufacturer', '100 Pieces', 'Plastic Bag ', '2-3 Years', 'Organic', '', '2024-08-28', 16, 18, 107, 66, '', 'NO', '33JHDPS2520G1ZH', '', 'NO', 'Tamil Nadu', 'BNo 399 1st Floor,Mela street,Vadathalaikulam, Bhuvanagiri Taluk,Tamil Nadu Cuddalore, Tamil Nadu, 608704, India', '<p>At PUGAZHINI FOOD PRODUCTS, we specialize in offering an exceptional range of processed nuts and dried fruits, crafted to meet the highest standards of quality and flavor. Our selection is perfect for snacking, cooking, and enhancing your favorite recipes.</p>\r\n<p>Discover our premium offerings:</p>\r\n<p>Processed Cashew Nuts, Pure Almond Nuts, Dried Cashew Nuts, Black Dates, W180 Cashew Nuts, Dry Almonds Nuts, etc.</p>', 'India', 'INR / Ton'),
(113, 'Natural Dried Raisin', '', 'extra_image/gfgygfbeggevgvgvgvvvvvv.jpg', '', '', '', '300', '2021', 'SAHIK PRIVATE LIMITED', 'extra_image/Nologo.jpg', '<p>Cultivation Type : <b>Greenhouse</b></p>\r\n<p>Color : <b>light brown</b></p>\r\n<p>Payment Terms : <b>Cash Against Delivery (CAD), Cash on Delivery (COD), Cash Advance (CA), Cash in Advance (CID)</b></p>', '', '', '', 0, 'Mr. Parwez', 'exporter', '100 Kilograms', 'Plastic Bag ', '1-2 Years ', 'Light brown', '', '2024-08-28', 16, 18, 108, 66, '', 'NO', '10ABGCS8570F1ZE', '', 'NO', 'Bihar', 'C/O Sameer Nath, Flat No-1/B-1, Gola Road, Danapur, Patna, Bihar, 801505, India', '<p>Welcome to SAHIK PRIVATE LIMITED – Your Premier Choice for Frozen and Dried Fruits in India!</p>\r\n\r\n<p>At SAHIK PRIVATE LIMITED, we are dedicated to delivering the highest quality frozen and dried fruits to meet all your culinary and snacking needs. Our products are carefully processed to retain their natural flavors and nutrients, offering you convenience without compromising on quality.</p>\r\n', 'India', 'INR / Kilograms'),
(114, 'Pure And Natural Organic Almond', '', 'extra_image/Almond-HD-Wallpaper.jpg', '', '', '', '780', '2021', 'SAHIK PRIVATE LIMITED', 'extra_image/Nologo.jpg', '<p>Product Type : <b>Almond</b></p>\r\n<p>Color : <b>Brown</b></p>\r\n<p>Payment Terms : <b>Cash Against Delivery (CAD), Cash on Delivery (COD), Cash Advance (CA), Cash in Advance (CID)</b></p>', '', '', '', 0, 'Mr. Parwez', 'exporter', '100 Kilograms', 'Plastic Bag ', '2-3 Years', 'Brown', '', '2024-08-28', 16, 18, 109, 66, '', 'NO', '10ABGCS8570F1ZE', '', 'NO', 'Bihar', 'C/O Sameer Nath, Flat No-1/B-1, Gola Road, Danapur, Patna, Bihar, 801505, India', '<p>At SAHIK PRIVATE LIMITED, we are dedicated to bringing you the finest in organic nuts, with a special focus on our premium Pure and Natural Organic Almonds. Sourced from the best orchards and processed with care, our almonds offer unparalleled quality and taste.</p>\r\n<p>We Provide </p>\r\n<p>Pure and Natural: Our almonds are grown without synthetic pesticides or fertilizers, ensuring that you enjoy the purest and most natural nut available.</p>\r\n<p>Nutrient-Rich: Packed with essential vitamins, minerals, and healthy fats, our organic almonds are a nutritious choice for snacking or incorporating into your meals.</p>\r\n<p>Uncompromising Quality: We carefully select and process our almonds to retain their natural flavor and texture, delivering a product that is as fresh as it is wholesome.</p>', 'India', ' INR / Kilograms'),
(115, 'Hibiscus Black Tea', '', 'extra_image/hibicustea.jpg', '', '', '', '900', '2012', 'UGP Ventures', 'extra_image/ugp-ventureslogo.jpg', '<p>Type : <b>Flavor Tea</b></p>\r\n<p>Physical Form : <b>Dried</b></p>\r\n<p>Style : <b>Loose Tea</b></p>\r\n<p>Color : <b>Black</b></p>\r\n<p>Feature : <b>Health Tea</b></p>', '', '', '', 0, 'Mr. Parvez Gupta', 'exporter', '10 Kilograms', 'Plastic Bag ', '1-2 Years ', 'Delightful And Soothing Aroma', '', '2024-08-28', 16, 17, 35, 36, '', 'NO', 'NO ', '', 'NO', 'West Bengal', '31, Sevoke Road, Binda Jayanti Building, Siliguri, West Bengal, 734001, India', '<p>At UGP Ventures, we take pride in offering a diverse collection of premium teas, each crafted to deliver unparalleled flavor and quality. Our commitment to excellence ensures that every cup is a delightful experience, perfect for every moment of your day.</p>\r\n<p>Explore Our Exquisite Range:</p>\r\n<p>Hibiscus Black Tea With Delightful And Soothing Aroma, UGP Ventures has made a reputed name for itself in the market with high-quality 100% Unadulterated Ginseng Oolong Tea, 100% Unadulterated Herbal Bone Health Tea, 100% Unadulterated Mango Iced Tea, etc.</p>', 'India', 'INR / Kilograms'),
(116, 'Lemon Flavoured Green Tea', '', 'extra_image/lemontea.jpg', '', '', '', '400-1500', '2005', 'R.S. BAJAJ TEA COMPANY', 'extra_image/Nologo.jpg', '<p>Type : <b>Other</b></p>\r\n<p>Physical Form : <b>Dried</b></p>\r\n<p>Health Benefits : <b>Antioxidants</b></p>\r\n<p>Feature : <b>Flavored Tea</b></p>\r\n<p>Aroma : <b>other</b></p>\r\n<p>Taste : <b>Smooth</b></p>', '', '', '', 0, 'Mr. Vikram Bajaj', 'Manufacturer', '50 Box', 'Box ', '2-3 Years', 'Flavored Tea', '', '2024-08-28', 16, 17, 36, 36, '', 'NO', '08AEFPB2300D1ZG', '', 'NO', 'Rajasthan', '318, 3rd Floor, Plot no : D468, North Avenue, 3rd Floor, Road No. 9A, Sikar Rd, Vishwakarma Industrial Area, Jaipur, Rajasthan, 302001, India', '<p>At R.S. BAJAJ TEA COMPANY, we are dedicated to offering a range of premium products that elevate your culinary and tea-drinking experiences. From aromatic spices to exceptional teas, our products are crafted to meet the highest standards of quality and flavor.</p>\r\n<p>Explore Our Product Range:</p>\r\n<p>KVR Ajwain Seed, KVR Spices Chilly Powder, Litchi Tea, CTC Tea, etc.<p>\r\n', 'India', ' INR / Box'),
(117, 'Masala Tea', '', 'extra_image/masalachai.jpg', '', '', '', '1500.00', '2013', 'SURAJMUKHI TEA PVT. LTD.', 'extra_image/surajmukhi-tea-pvt-ltdlogo.jpg', '<p>Color : <b>Other</b></p>\r\n<p>Type : <b>Black Tea</b></p>\r\n<p>Variety : <b>Masala</b></p>\r\n<p>Physical Form : <b>Dried</b></p>\r\n<p>Extract Type : <b>Solid Extract</b></p>\r\n<p>Taste : <b>Strong</b></p>\r\n<p>Health Benefits : <b>Antioxidants</b></p>\r\n', '', '', '', 0, 'Mr Ankit Lochan', 'exporter', '200 Kilograms', 'Plastic Bag ', '1-2 Years', 'Antioxidants', '', '2024-08-28', 16, 17, 37, 36, '', 'NO', '19AATCS2094J1ZL', '', 'NO', 'West Bengal', 'Madhuban Complex, Jyoti Nagar, Opp- Amrapali Residency, Near- Don Bosco School, Siliguri, West Bengal, 734001, India', '<p>At Surajmukhi Tea Pvt. Ltd., we take pride in offering a diverse range of premium teas, each meticulously crafted to deliver exceptional flavor and quality. Our commitment to excellence is reflected in every blend we offer, ensuring that each cup of tea brings joy and satisfaction.</p>\r\n<p>Our Product Range</p>\r\n<p>50 GM Shourya Premium Assam Tea, 500 GM Surajmukhi CTC Tea Packet, Shourya Premium Assam Tea, 1 KG Surajmukhi CTC Tea Packet, 250 gm Assam Tea, etc.</p>', 'India', 'INR / Kilograms'),
(118, 'Herbal Ginger Tea', '', 'extra_image/gingertea.jpg', '', '', '', '2000.00 - 3000.00 ', '2014', 'ARIZONE INTERNATIONAL LLP', 'extra_image/ginertalogo.jpg', '<p><b>Accepts only Foreign inquiries</b></p>\r\n<p>Brand Name : <b>STAY ALIVE</b></p>\r\n<p>Product Type : <b>Herbal Product</b></p>\r\n<p>Category : <b>Herbs & Herbs Extract</b></p>\r\n<p>Usage : <b>Dietary Supplement</b></p>\r\n<p>Ingredients : <b>Herbs</b></p>\r\n<p>Form : <b>Powder</b></p>\r\n<p>Certification : <b>ISO 9001 & 22001, GMP, HACCP, KOSHER, HALAL</b></p>\r\n', '', '', '', 0, 'Mr Amit Dhirajlal Shah', 'exporter', ' 2 Metric Ton', 'Plastic Bag ', '2-3 Years', 'Dietary Supplement', '', '2024-08-28', 16, 17, 38, 36, '', 'NO', '26ABBFA2120R1ZJ', '', 'NO', 'Dadra and Nagar Haveli and Daman and Diu', 'S No - 653/1, Plot No - 16, Somnath Co-op Indl Soc Ltd, Daman, Dadra and Nagar Haveli and Daman and Diu, 396210, India', '<p>At ARIZONE INTERNATIONAL LLP, we are dedicated to delivering excellence through our diverse range of high-quality products. Our reputation is built on a foundation of integrity and reliability, with a commitment to satisfying the needs of our valued customers.</p>\r\n<p>Our Product Range</p>\r\n<p> Papad, ARIZONE INTERNATIONAL LLP has made a reputed name for itself in the market with satisfactory Acacia Catechu Heartwood Extract, Acacia Concinna Extract, Adhatoda Vasica Extract, etc.</p>', 'India', 'USD / Metric Ton'),
(119, 'Cardamom Instant Tea', '', 'extra_image/cardamomtea.jpg', '', '', '', '300.00', '2009', 'B & R MARKETING SOLUTIONS', 'extra_image/Nologo.jpg', '<p>Physical Form : <b>Fresh</b></p>\r\n<p>Extract Type : <b>Solvent Extraction</b></p>\r\n<p>Sugar Content  : <b>No Sugar</b></p>\r\n<p>Health Benefits : <b>Antioxidants</b></p>\r\n<p>Feature : <b>Health Tea</b></p>', '', '', '', 0, 'Mr.Rajat Kumar', 'Manufacturer', '100 Pieces', 'Plastic Bag ', '1-2 Years ', 'Health Tea', '', '2024-08-28', 16, 17, 39, 36, '', 'NO', '21BBIPM7030G1Z0', '', 'NO', 'Odisha', 'Plot No. 170-P, Unit Ix Flat, Sahid Nagar, Bayababa Road, Bhubaneswar, Odisha, 751001, India', '<p>At B & R MARKETING SOLUTIONS, we are committed to enhancing your beverage experience with our top-of-the-line vending solutions. Our innovative products are designed to meet diverse needs, providing convenience and quality in every cup. With a focus on excellence, we are here to support your business with reliable and efficient vending solutions.</p>\r\n<p>Our Product Range</p>\r\n<p>Multipurpose Vending Machines, Tea Vending Machines, Coffee Machines and Premix Powder.</p>', 'India', 'INR / Pack'),
(120, 'Organic Wheat Flour', '', 'extra_image/organic flour.jpg', '', '', '', 'Get Latest Price ', '2019', 'MS LUXURY HAIR DISTRIBUTION LLC', 'extra_image/ms-luxury-hair-distribution-llclogo.jpg', '<p><b>Accepts only Foreign inquiries</b></p>\r\n<p>Color : <b>White</b></p>\r\n<p>Grade : <b>Food</b></p>\r\n<p>Type : <b>Organic Wheat Flour</b></p>\r\n<p>Usage : <b>Industrial</b></p>\r\n<p>Processing Type : <b>Blended</b></p>', '', '', '', 0, 'Mr. Jame Moore', 'exporter', '50 Kilograms', 'Plastic Bag ', '12 Months ', 'Organic', '', '2024-08-28', 16, 19, 29, 34, '', 'NO', 'NO ', '', 'NO', '', 'B No. 3100, Sweetwater Rd, Apt 2504, Lawrenceville, Ga, Lawrenceville, Georgia, 30044, United States', '<p>Established in 2019, MS LUXURY HAIR DISTRIBUTION LLC has built a reputation for excellence by providing premium products that enhance both beauty and daily living. Our commitment to quality and customer satisfaction extends beyond our renowned hair care products to include a range of exceptional offerings, including our Organic White Wheat Flour.</p>\r\n<p><b>Our Product</b></p>\r\n<p>Organic White Wheat Flour Discover the pure and wholesome goodness of our Organic White Wheat Flour. Made from carefully selected, organically grown wheat, this flour is perfect for creating a variety of delicious and nutritious baked goods. Our flour is finely milled to ensure a smooth texture and superior quality, making it ideal for everything from bread and pastries to cakes and cookies.</p>', 'United States', ''),
(121, 'Pure Banana Flour', '', 'extra_image/bananaflour.jpg', '', '', '', '220', '2017', 'Honda Enterprises', 'extra_image/Nologo.jpg', '<p><b>Long shelf life.</b></p>\r\n<p><b>Easy to digest.</b></p>\r\n.<p><b>Rich in taste.</b></p>\r\n<p><b>Tested on various quality standard.</b></p>\r\n<p>Usage : <b>To make food item</b></p>\r\n<p>Type  : <b>Banana Flour</b></p>\r\n<p>Grade  : <b>A</b></p>\r\n<p>Color : <b>white</b></p>', '', '', '', 0, 'Mr. Panchu', 'Manufacturer', '200 Kilograms', 'Plastic Bag ', 'Long Shelf Life ', 'Pure Banana Flour ', '', '2024-08-28', 16, 19, 58, 34, '', 'NO', 'NO ', '', 'NO', 'Bihar', 'Kajwalichak, Tatarpur Rd, Bhagalpur, Bhagalpur, Bihar, 812002, India', '<p>At Honda Enterprises, we are committed to providing high-quality, natural products that enhance your lifestyle and health. Our dedication to purity and excellence drives us to source and deliver the finest ingredients, including our exceptional Pure Organic Natural Banana Flour.</p>\r\n<p>Our Product</p>\r\n<p>Pure Organic Natural Banana Flour Experience the natural goodness and versatility of our Pure Organic Natural Banana Flour. Made from organically grown bananas, this flour is an excellent choice for those seeking a healthier alternative to traditional flours. Our banana flour is carefully processed to preserve its rich nutritional profile and vibrant flavor, making it a perfect addition to a variety of culinary creations.</p>', 'India', 'INR / Kilograms'),
(122, 'Plastic Swing Dustbin ', '', 'extra_image/50-litre.jpg', '', '', '', '550', '2019', 'CLEAN & GREEN EQUIPMENTS PRIVATE LIMITED', 'extra_image/logo.jpg', '<p>Size : <b>50-240 Ltr</b></p>\r\n<p>Color : <b>Blue-White</b></p>\r\n<p>Product Type : <b>Swing Dustbin</b></p>\r\n<p>Material : <b>Plastic</b></p>\r\n<p>Application : <b>Garbage Collection</b></p>', '', '', '', 0, 'Mr Sachendra Srivastava', 'exporter', '10 Pieces', 'Unpacked ', 'Long Shelf Life ', 'Swing Dustbin', '', '2024-08-28', 18, 27, 96, 62, '', 'NO', '09AAICC1115F1Z2', '', 'NO', 'Uttar Pradesh', 'Kh. No - 63, Punchsheel Enclave, Bhopra, Ghaziabad, Uttar Pradesh, 201102, India', '<p>At CLEAN & GREEN EQUIPMENTS PRIVATE LIMITED, we are dedicated to providing innovative and eco-friendly solutions to meet your waste management and equipment needs. Since our establishment, we have been committed to enhancing efficiency and promoting sustainability through our diverse range of high-quality products.</p>\r\n<p>Our Product Range</p>\r\n<p> Hydraulic Scissor Sky Lift, 1100 Ltr MS Compactor Bin, Eco Friendly Mobile Toilet, Hydraulic Tractor Trolley, Close Body Twin Garbage Tipper, Portable Thermal Fogging Machine, Cart Trolley, Single Bin Dumper Placer, etc.</p>', 'India', 'INR / Piece');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `id` int(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `number` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `qty` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `pin_code` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`id`, `name`, `number`, `email`, `pro_name`, `qty`, `unit`, `city`, `state`, `country`, `pin_code`, `product_type`, `date`) VALUES
(25, 'ritika', '23245345345', 'ritikamaheshonly@gmail.com', 'car', '40gm', '10', 'delhi', 'delhi', 'india', '234234', 're-selling', '2024-08-27'),
(26, 'preeti', '23245345345', 'preeti@gmail.com', 'computer', '1', '-', 'delhi', 'delhi', 'india', '110043', 'self use', '2024-08-27'),
(27, 'shalini', '9959834343', 'shalini123@gmail.com', 'Granite', '1 ', '20 ft container', 'delhi', 'Delhi', 'India', 'I', '', '2024-08-27'),
(28, '', '', '', '', '', '', '', '', '', '', '', '2024-08-27'),
(29, 'shalini', '9967534324', 'shalini123@gmail.com', 'Mango', '1', '20 ft container', 'delhi', 'Delhi', 'India', '110007', 're-selling', '2024-08-27'),
(30, 'ritika', '23245345345', 'abc@gmail.com', 'car', '40gm', '10', '1', 'delhi', 'india', '234234', 're-selling', '2024-08-27');

-- --------------------------------------------------------

--
-- Table structure for table `states`
--

CREATE TABLE `states` (
  `id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `state_name`) VALUES
(1, 'Andaman and Nicobar Islands'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chhattisgarh'),
(8, 'Dadra and Nagar Haveli and Daman and Diu'),
(9, 'Delhi'),
(10, 'Goa'),
(11, 'Gujarat'),
(12, 'Haryana'),
(13, 'Himachal Pradesh'),
(14, 'Jammu and Kashmir'),
(15, 'Jharkhand'),
(16, 'Karnataka'),
(17, 'Kerala'),
(18, 'Ladakh'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Punjab'),
(29, 'Rajasthan'),
(30, 'Sikkim'),
(31, 'Tamil Nadu'),
(32, 'Telangana'),
(33, 'Tripura'),
(34, 'Uttar Pradesh'),
(35, 'Uttarakhand'),
(36, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `sub_id` int(100) NOT NULL,
  `sub_cat_name` varchar(256) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `sub_cat_image` varchar(255) NOT NULL,
  `inner_cat_id` int(100) NOT NULL,
  `cat_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`sub_id`, `sub_cat_name`, `cat_id`, `sub_cat_image`, `inner_cat_id`, `cat_slug`) VALUES
(10, 'Fresh Flowers and Plants', 10, 'extra_image/72bec92edf693df3d9cdcf4033e71edd.jpg', 0, ''),
(11, 'Irrigation Equipment & Systems', 10, 'extra_image/368206-984.jpg', 0, ''),
(12, 'PET and Farming Animals', 10, 'extra_image/bce845c46e920f036f4043c41e8c6b39.jpg', 0, ''),
(13, 'Men, Women & Kids Footwear', 11, 'extra_image/frgghjhugfd.jpg', 0, ''),
(16, 'Womens Clothing', 11, 'extra_image/GettyImages-615595706-scaled.jpg', 0, ''),
(17, 'Tea & Coffee', 16, 'extra_image/image-1623852241.jpg', 0, ''),
(18, 'Dry Fruits & Nuts', 16, 'extra_image/Dry Fruits & Nuts.jpg', 0, ''),
(19, 'Food Grains, Cereals & Flour', 16, 'extra_image/Bags-of-grains.jpg', 0, ''),
(20, 'Cooking Spices and Masala', 16, 'extra_image/Dry Fruits & Nuts.jpg', 0, ''),
(21, 'Fresh, Preserved & Dried Fruits', 16, 'extra_image/erwer.jpg', 0, ''),
(22, 'Fresh, Dried & Preserved Vegetables', 16, 'extra_image/news_photo-20221027-205111.jpg', 0, ''),
(23, 'Auto Electrical Parts & Components', 12, 'extra_image/distrobution+parts.jpg', 0, ''),
(24, 'Industrial Clothing & Safety Wear', 11, 'extra_image/hgvdbn.jpg', 0, ''),
(25, 'Soil Additives & Fertilizers', 10, 'extra_image/grass-fert.jpg', 0, ''),
(26, 'Home Cleaning Products', 18, 'extra_image/GreenCleaningSupplies-5270.jpg', 0, ''),
(27, 'Buckets, Mugs & Storage Bins', 18, 'extra_image/buckets.jpg', 0, ''),
(28, 'Artificial Plants & Flowers', 18, 'extra_image/flowerpot.jpg', 0, ''),
(29, 'Leather Bags & Handbags', 11, 'extra_image/leatherbags.jpg', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_email` varchar(150) NOT NULL,
  `user_phone` varchar(19) NOT NULL,
  `company_name` varchar(256) NOT NULL,
  `plan` varchar(256) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `password` varchar(256) NOT NULL,
  `otp` int(100) NOT NULL,
  `expire` date NOT NULL DEFAULT current_timestamp(),
  `user_role` int(100) NOT NULL,
  `company_address` varchar(256) NOT NULL,
  `image` varchar(256) NOT NULL,
  `user_website` varchar(256) NOT NULL,
  `state` varchar(256) NOT NULL,
  `city` varchar(256) NOT NULL,
  `pincode` int(100) NOT NULL,
  `product_name` varchar(256) NOT NULL,
  `product_image` varchar(256) NOT NULL,
  `gst` varchar(255) NOT NULL,
  `start_date` date NOT NULL DEFAULT current_timestamp(),
  `iec_code` varchar(100) NOT NULL,
  `type` varchar(255) NOT NULL,
  `country_name` varchar(255) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_phone`, `company_name`, `plan`, `date`, `password`, `otp`, `expire`, `user_role`, `company_address`, `image`, `user_website`, `state`, `city`, `pincode`, `product_name`, `product_image`, `gst`, `start_date`, `iec_code`, `type`, `country_name`, `status`) VALUES
(96, 'shalini', 'shalini@gmail.com', '45345345', 'growindiaexport.com', 'prime', '2024-08-27', '123', 0, '2024-08-27', 0, 'nawada', 'logo/logo.png', 'https://growindiaexport.com/', 'Bihar', '', 110041, 'spices', '', '', '2024-08-27', '', 'exporter', 'India', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`buyer_id`);

--
-- Indexes for table `buyleads`
--
ALTER TABLE `buyleads`
  ADD PRIMARY KEY (`buyleads_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`countries_id`);

--
-- Indexes for table `free-listing-product`
--
ALTER TABLE `free-listing-product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inner_cat`
--
ALTER TABLE `inner_cat`
  ADD PRIMARY KEY (`inner_cat_id`);

--
-- Indexes for table `limit_buylead`
--
ALTER TABLE `limit_buylead`
  ADD PRIMARY KEY (`limit_id`);

--
-- Indexes for table `micro`
--
ALTER TABLE `micro`
  ADD PRIMARY KEY (`micro_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `requirement`
--
ALTER TABLE `requirement`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `states`
--
ALTER TABLE `states`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `buyer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `buyleads`
--
ALTER TABLE `buyleads`
  MODIFY `buyleads_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `countries_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=196;

--
-- AUTO_INCREMENT for table `free-listing-product`
--
ALTER TABLE `free-listing-product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inner_cat`
--
ALTER TABLE `inner_cat`
  MODIFY `inner_cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `limit_buylead`
--
ALTER TABLE `limit_buylead`
  MODIFY `limit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `micro`
--
ALTER TABLE `micro`
  MODIFY `micro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=110;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=123;

--
-- AUTO_INCREMENT for table `requirement`
--
ALTER TABLE `requirement`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `states`
--
ALTER TABLE `states`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
