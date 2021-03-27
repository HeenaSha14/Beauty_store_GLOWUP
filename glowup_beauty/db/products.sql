-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 18, 2020 at 10:47 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `beauty_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(50) NOT NULL,
  `ref_id` int(10) NOT NULL,
  `c_name` char(20) NOT NULL,
  `p_name` varchar(100) NOT NULL,
  `p_price` int(10) NOT NULL,
  `p_image` varchar(100) DEFAULT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `ref_id`, `c_name`, `p_name`, `p_price`, `p_image`, `quantity`) VALUES
(1, 1, 'eyeshadow', 'Maybelline New York The Blushed Nudes Eye Shadow Palette', 905, './images/eyeshadow/blush.jpg', 0),
(2, 1, 'eyeshadow', 'Maybelline New York City Mini Palette Eye Shadow - 5th Avenue Sunset', 750, './images/eyeshadow/city.jpg', 0),
(3, 1, 'eyeshadow', 'Maybelline New York The Rock Nudes Eye Shadow Palette', 905, './images/eyeshadow/rock.jpg', 0),
(4, 1, 'eyeshadow', 'Smashbox Cover Shot Eye Palette - Golden Hour', 2950, './images/eyeshadow/cover.jpg', 0),
(5, 1, 'eyeshadow', 'Smashbox Cosmic Celebrations Star Power Face + Eyeshadow Palette', 4350, './images/eyeshadow/cosmic.jpg', 0),
(6, 1, 'eyeshadow', 'Smashbox Full Exposure Palette', 3950, './images/eyeshadow/exp.jpg', 0),
(7, 1, 'eyeshadow', 'Lakme Absolute Infinity Eye Shadow Palette - Midnight Magic', 995, './images/eyeshadow/inf.jpg', 0),
(8, 1, 'eyeshadow', 'Lakme Absolute Spotlight Eye Shadow Palette - Stilettos', 995, './images/eyeshadow/spot.jpg', 0),
(9, 1, 'eyeshadow', 'Lakme Absolute Infinity Eye Shadow Palette - Coral Sunset ', 995, './images/eyeshadow/coral.jpg', 0),
(11, 1, 'eyeshadow', 'M.A.C Palette / Art Library - Flame-Boyant', 4950, './images/eyeshadow/art.jpg', 0),
(12, 1, 'eyeshadow', 'M.A.C Eye Shadow X 9 - Burgundy Times Nine', 3700, './images/eyeshadow/burg.jpg', 0),
(13, 1, 'eyeshadow', 'L\'Oreal Paris La Petite Eyeshadow Palette - Optimist', 799, './images/eyeshadow/peti.jpg', 0),
(14, 1, 'eyeshadow', 'L\'Oreal Paris Eyeshadow Palette - Cherry My Cheri', 1200, './images/eyeshadow/cherry.jpg', 0),
(15, 1, 'eyeshadow', 'L\'Oreal Paris La Petite Eyeshadow Palette', 799, './images/eyeshadow/pet.jpg', 0),
(16, 2, 'eyeliner', 'Maybelline New York Hyper Glossy Liquid Liner - Black', 310, './images/eyeliner/hyp.jpg', 0),
(17, 2, 'eyeliner', 'Maybelline New York Colossal Bold Eyeliner - Black', 249, './images/eyeliner/col.jpg', 0),
(18, 2, 'eyeliner', 'Maybelline New York The Colossal Liner - Black', 420, './images/eyeliner/york.jpg', 0),
(19, 2, 'eyeliner', 'Smashbox Photo Angle Pure Pigment Gel Liner - Jet Black', 2000, './images/eyeliner/angle.jpg', 0),
(20, 2, 'eyeliner', 'Smashbox Jet Set Waterproof Eyeliner - Deep Black', 1700, './images/eyeliner/jet.jpg', 0),
(21, 2, 'eyeliner', 'Smashbox Always On Gel Liner - Fishnet (Jet Black) - Mini', 690, './images/eyeliner/gel.jpg', 0),
(22, 2, 'eyeliner', 'Lakme Absolute Shine Line Eye Liner - Liquid Gold', 450, './images/eyeliner/shine.jpg', 0),
(23, 2, 'eyeliner', 'Lakme Nine to Five Impact Eyeliner', 290, './images/eyeliner/imp.jpg', 0),
(24, 2, 'eyeliner', 'Lakme Insta Eye Liner - Black ', 130, './images/eyeliner/inst.jpg', 0),
(25, 2, 'eyeliner', 'M.A.C Liquid Eye Liner - Boot Black Intense Black (Intense Black)', 2300, 'images/eyeliner/boot.jpg', 0),
(26, 2, 'eyeliner', 'M.A.C Crayon Kajal Eye Liner - Flourish Me Beautiful (Deep Purple)', 2300, 'images/eyeliner/cry.jpg', 0),
(27, 2, 'eyeliner', 'L\'Oreal Paris Matte Signature Eyeliner - Brown', 650, 'images/eyeliner/mat.jpg', 0),
(28, 2, 'eyeliner', ' L\'Oreal Paris Flash Cat Eye Eyeliner - Black', 799, 'images/eyeliner/cat.jpg', 0),
(29, 2, 'eyeliner', 'L\'Oreal Paris x Karl Lagerfeld Eyeliner - Black', 650, 'images/eyeliner/karl.jpg', 0),
(30, 3, 'foundation', 'Maybelline New York Fit Me Matte+Poreless Liquid Foundation ', 500, ' images/found/fit.jpg', 0),
(31, 3, 'foundation', 'Maybelline New York Fit Me Matte+Poreless Liquid Foundation Tube', 299, 'images/found/pore.jpg ', 0),
(32, 3, 'foundation', 'Maybelline New York Super Stay Full Coverage Foundation', 799, 'images/found/full.jpg ', 0),
(33, 3, 'foundation', ' Smashbox Studio Skin 24 Hour Wear Hydra Foundation', 3300, 'images/found/hour.jpg ', 0),
(34, 3, 'foundation', 'Smashbox Photo Filter Powder Foundation  ', 3550, 'images/found/pow.jpg ', 0),
(35, 3, 'foundation', 'Lakme Absolute Skin Natural Mousse ', 825, 'images/found/mou.jpg ', 0),
(36, 3, 'foundation', ' Lakme Face Magic Skin Tint Souffle ', 170, 'images/found/sou.jpg ', 0),
(37, 3, 'foundation', 'Lakme 9 to 5 Weightless Mousse Foundation ', 575, 'images/found/925.jpg ', 0),
(38, 3, 'foundation', 'M.A.C Studio Waterweight SPF 30 Foundation ', 3600, 'images/found/spf.jpg ', 0),
(39, 3, 'foundation', ' M.A.C Pro Longwear Nourishing Waterproof Foundation ', 3600, ' images/found/long.jpg', 0),
(40, 3, 'foundation', 'M.A.C Studio Fix Soft Matte Foundation Stick ', 2900, 'images/found/soft.jpg ', 0),
(41, 3, 'foundation', 'L\'Oreal Paris Infallible 24H Fresh Wear Foundation', 1200, 'images/found/24h.jpg ', 0),
(42, 3, 'foundation', 'L\'Oreal Paris Infallible 24HR Matte Cover Foundation ', 750, 'images/found/24.jpg ', 0),
(43, 3, 'foundation', 'L\'Oreal Paris Infallible Foundation Stick', 599, 'images/found/inf.jpg', 0),
(59, 4, 'lipstick', 'Maybelline New York Color Sensational Creamy Matte Lipstick ', 299, 'images/lip/crem.jpg', 0),
(60, 4, 'lipstick', 'Maybelline New York Super Stay Matte Ink Liquid Lipstick ', 650, 'images/lip/stay.jpg', 0),
(61, 4, 'lipstick', 'Maybelline New York Shine Compulsion Lipstick ', 550, 'images/lip/shine.jpg', 0),
(62, 4, 'lipstick', 'Smashbox Always On Liquid Lipstick', 2100, 'images/lip/gula.jpg', 0),
(63, 4, 'lipstick', 'Smashbox Be Legendary Lipstick Cream Finish ', 2000, 'images/lip/sma.jpg', 0),
(64, 4, 'lipstick', 'Smashbox Holidaze: Be Legendary Liquid Metal ', 1900, 'images/lip/met.jpg', 0),
(65, 4, 'lipstick', 'Lakme Absolute Matte Ultimate Lip Color with Argan Oil ', 450, 'images/lip/oil.jpg', 0),
(66, 4, 'lipstick', ' Lakme Cushion Matte Lipstick', 450, 'images/lip/cus.jpg', 0),
(67, 4, 'lipstick', 'Lakme Absolute Matte Melt Liquid Lip Color ', 800, 'images/lip/melt.jpg', 0),
(68, 4, 'lipstick', ' M.A.C Love Me Lipstick', 1700, 'images/lip/love.jpg', 0),
(69, 4, 'lipstick', ' M.A.C Powder Kiss Lipstick  ', 1700, 'images/lip/kiss.jpg', 0),
(70, 4, 'lipstick', ' M.A.C Powder Kiss Liquid Lipcolour ', 2100, 'images/lip/cry.jpg', 0),
(71, 4, 'lipstick', 'L\'Oreal Paris Rouge Signature Matte Liquid Lipstick ', 650, 'images/lip/rou.jpg', 0),
(72, 4, 'lipstick', 'L\'Oreal Paris Color Riche Free The Nudes Lipsticks ', 750, 'images/lip/riche.jpg', 0),
(73, 4, 'lipstick', 'L\'Oreal Paris Les Chocolats Ultra Matte Liquid Lipstick', 799, 'images/lip/ult.jpg', 0),
(74, 5, 'moisturizer', 'Lakme Absolute Argan Oil Radiance Oil-In Gel Cream ', 425, 'images/moist/oil.jpg', 0),
(75, 5, 'moisturizer', 'Lakme Absolute Perfect Radiance Skin Brightening Day Creme ', 199, 'images/moist/day.jpg', 0),
(76, 5, 'moisturizer', 'Lakme Peach Milk Soft Creme Moisturizer ', 105, 'images/moist/milk.jpg', 0),
(77, 5, 'moisturizer', ' M.A.C Studio Moisture Cream ', 1200, 'images/moist/mac.jpg', 0),
(78, 5, 'moisturizer', 'LOreal Paris Revitalift Anti-Wrinkles + Radiance Moisturizing Cream Day SPF 35 PA++ ', 550, 'images/moist/par.jpg', 0),
(79, 5, 'moisturizer', ' NIVEA Soft Light Moisturizing Cream Berry Blossom Fragrance With Vitamin E & Jojoba Oil', 270, 'images/moist/soft.jpg', 0),
(80, 5, 'moisturizer', 'NIVEA Creme - All Season Multi Purpose Cream ', 310, 'images/moist/cre.jpg', 0),
(81, 5, 'moisturizer', 'NIVEA Sun - Moisturising Lotion SPF 50+ ', 360, 'images/moist/sun.jpg', 0),
(82, 5, 'moisturizer', '  NIVEA Soft - Light Moisturising Cream', 360, 'images/moist/lig.jpg', 0),
(83, 5, 'moisturizer', 'NIVEA Soft Aloe Hydration Cream - All Skin Types ', 270, 'images/moist/alo.jpg', 0),
(98, 6, 'Essentials', 'Livinguard Destroys Corona Virus Ultra Face Mask (L) - Bombay Blue', 250, 'images/others/vir.jpg ', 0),
(99, 6, 'Essentials', 'Enamor W001 Smart Mask - Adult\'s 3 Layer Cotton Jersey Outdoor Mask (Pack Of 3) - Multicolor', 499, 'images/others/ena.jpg ', 0),
(100, 6, 'Essentials', ' BodyGuard Reusable Anti Pollution Face Mask for Men and Women - Large (Pack of 2)', 698, 'images/others/anti.jpg ', 0),
(101, 6, 'Essentials', 'Lifebuoy Total Germ Hand Sanitizer', 25, 'images/others/ger.jpg ', 0),
(102, 6, 'Essentials', 'Bath & Body Works A Thousand Wishes PocketBac Cleansing Hand Gel', 290, 'images/others/bbb.jpg ', 0),
(103, 6, 'Essentials', 'St. D\'vencé Cleanser Hand Rub (Hand Sanitizer with 70% Alcohol)', 25, 'images/others/st.jpg ', 0),
(104, 6, 'Essentials', 'Godrej Protekt Germ Protection Hand Sanitizer', 65, 'images/others/god.jpg ', 0),
(105, 6, 'Essentials', 'Savlon Clear Hand Sanitizer Gel', 50, 'images/others/gel.jpg ', 0),
(106, 6, 'Essentials', 'Savlon Germ Protection Wipes - 10 Wipes', 45, 'images/others/wipe.jpg ', 0),
(107, 6, 'Essentials', 'Ansell MICRO-TOUCH N30 Hand Protection Gloves - 30 Pcs', 360, 'images/others/mmm.jpg ', 0),
(108, 6, 'Essentials', 'GUBB USA Protect Medical Examination Nitrile Gloves (50 Pairs)', 1800, 'images/others/usa.jpg ', 0),
(109, 6, 'Essentials', 'Aicare Non Contact Digital Multi Purpose Infrared Thermometer', 4375, 'images/others/non.jpg ', 0),
(110, 6, 'Essentials', 'PPE Suit Kit', 1700, 'images/others/kit.jpg ', 0),
(111, 6, 'Essentials', 'Suit Kit', 700, 'images/others/ppe.jpg ', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD UNIQUE KEY `p_name` (`p_name`),
  ADD KEY `category_name` (`c_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
