-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 11:00 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `m`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `rrp` decimal(10,0) NOT NULL DEFAULT 0,
  `quantity` int(11) NOT NULL,
  `img` text NOT NULL,
  `date_added` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`,`title`, `description`, `price`, `rrp`, `quantity`, `img`, `date_added`) VALUES
('Apple iPhone 14 Pro', 'The iPhone 14 Pro features a 6.1-inch Super Retina XDR display. A16 Bionic chip and a triple camera system with 12MP Ultra Wide and Telephoto lenses. It offers exceptional performance camera capabilities and a refined iOS experience.', 15000, 20000, 100, 'https://imgs.search.brave.com/t1ygAlw3pKWc1MUDj5wL3qwvWNFbu0hNGS-TAwXDzdk/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tLm1l/ZGlhLWFtYXpvbi5j/b20vaW1hZ2VzL0kv/MzFjVjFEbm84cEwu/anBn', '2024-05-12 00:00:00'),
('Samsung Galaxy S23 Ultra', 'The Samsung Galaxy S23 Ultra boasts a 6.8-inch Dynamic AMOLED 2X display with a 120Hz refresh rate Snapdragon 8 Gen 2 processor and a quad camera setup including a 200MP main sensor. It also supports the S Pen and delivers top-tier performance and versatility.', 30000, 40000, 150,'https://imgs.search.brave.com/mjCQQzBNgf4efZ6YeveHxkb5EOPQgjCI-rAT2BTQcUA/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/bW9zLmNtcy5mdXR1/cmVjZG4ubmV0L2d4/NTVic3p4V0dHM0FI/Wk1XRGJTU1gtMzIw/LTgwLmpwZw', '2024-05-12 00:00:00'),
('Google Pixel 7 Pro', 'The Google Pixel 7 Pro features a 6.7-inch LTPO OLED display the Google Tensor G2 processor and a triple camera setup with 50MP main 12MP ultra-wide and 48MP telephoto lenses. Known for its superior camera capabilities and clean Android experience.',10000 , 30000, 200, 'https://imgs.search.brave.com/2o9Hqj9FQQUvSeTdgvzmr1eLYZV0CTU7I3efchqWU3M/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jbGVh/cmJ1eS1jbG91ZC5u/eWMzLmRpZ2l0YWxv/Y2VhbnNwYWNlcy5j/b20vbWVkaWEvNTgy/OS9Hb29nbGUtUGl4/ZWwtNy1Qcm8uanBn', '2024-05-12 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
