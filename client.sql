-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2020 at 08:31 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `client`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_client`
--

CREATE TABLE `all_client` (
  `id` int(11) NOT NULL,
  `website` varchar(100) NOT NULL,
  `hosting` varchar(50) NOT NULL,
  `hostingsize` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `upazila` varchar(10) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `all_client`
--

INSERT INTO `all_client` (`id`, `website`, `hosting`, `hostingsize`, `name`, `phone`, `email`, `country`, `district`, `upazila`, `photo`) VALUES
(1, 'qaominews.com', 'linkon', 2, 'A.K.M. Ashraful Hoque', '1911824618', 'faroque.computer@gmail.com', 'bangladesh', 'dhaka', 'paltan', 'upload/5e53c4f14612a_a k m ashraful islam.jpg'),
(2, 'nabinagar24.com', 'linkon', 3, 's a rubel', '1912392439', 'rubel.nabinagar24@gmail.com', 'bangladesh', 'brahmanbaria', 'nabinagar', 'upload/5e53ca2fe0034_9. rubel .jpg'),
(3, 'eurobarta24.com', 'linkon', 5, 'Farook Nawaz Khan', '2147483647', 'sumon_dhaka@yahoo.com', 'france', 'Paris', 'Paris, Fra', 'upload/5e53cb3a472bf_sumon.jpg'),
(4, 'brahmanbaria24.net', 'linkon', 2, 'Shamim Un Bashir', '1711324436', 'subashir71@gmail.com', ' bangladesh ', 'brahmanbaria', 'brahmanbar', 'upload/5e54f99870a09_shamim un basir.jpg'),
(5, 'hellobrahmanbaria.com', 'linkon', 1, 'Masuk ', '1713823276', 'hridoypress@gmail.com', 'bangladesh', 'brahmanbaria', 'brahmanbar', 'upload/5e552606579ab_masuk hridoy.jpg'),
(6, 'prajabandhu.com', 'linkon', 5, 'Liton mea', '1711104420', 'prajabandhu1997@yahoo.com', 'bangladesh', 'brahmanbaria', 'brahmanbar', ''),
(7, 'manchitronews.com', 'adil', 1, 'A H Russell', '(+1) 770-912-1772,  01795-706014', 'deshtravels7@gmail.com', 'USA', 'Georgia', '5095 Bufor', 'upload/5e55043eaf03a_5_Mohammad Khan.jpg'),
(11, 'americanewsagency.net', 'adil', 2, 'Tuhin Ahmed Payel', '(+3476537971), (+ 88-02-9665090), 01711-238078', 'americanewsagency@gmail.com', 'bangladesh', 'sylhet', 'sylhet', 'upload/5e55164f26baf_payel.jpg'),
(12, 'aarizinternational.com', 'linkon', 4, 'Mohammad Enamul', '9661591, 01772-102120, 01921-503777', 'aarizinternationalbd@gmail.com', 'bangladesh', 'dhaka', 'dhaka', 'upload/5e55414220da2_Mohammad Enamul.jpg'),
(13, 'nabinagar71.com', 'linkon', 2, 'Md Dipu Ahmed', '01766-315365', 'dipuahmed20081@gmail.com', 'bangladesh', 'brahmanbaria', 'nabinagar', 'upload/5e56b4f508cfb_24. dirp.jpg'),
(14, 'probash.tv', 'adil', 5, 'subir', '01752-969696', 'subir@gmail.com', 'bangladesh', 'brahmanbaria', 'brahmanbar', 'upload/5e5967b5e9dfa_demo_image_4.jpg'),
(15, 'nnews.com', 'linkon', 7, 'sumon khan', '01542-989898', 'sumon@gmail.com', 'bangladesh', 'dhaka', 'dhaka', 'upload/5e59695a0b4db_demo_image_3.jpg'),
(16, 'alnews.com', 'linkon', 7, 'kiron haider', '01258744485', 'kiron@gmail.com', 'bangladesh', 'dhaka', 'dhaka', ''),
(17, 'surenews.com', 'adil', 15, 'kamrul hasan', '01254788582', 'kamrul@gmail.com', 'bangladesh', 'dhaka', 'dhaka', 'upload/5e596a36e5bdd_passport_size_image.jpg'),
(18, 'robinews.com', 'linkon', 20, 'robi mea', '01254789635', 'robi@gmail.com', 'bangladesh', 'dhaka', 'dhaka', '');

-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `income` (
  `id` int(11) NOT NULL,
  `web` varchar(50) NOT NULL,
  `source` varchar(100) NOT NULL,
  `payment` varchar(11) NOT NULL,
  `pdate` varchar(110) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `income`
--

INSERT INTO `income` (`id`, `web`, `source`, `payment`, `pdate`) VALUES
(1, 'qaominews.com', '', '29', '2020-02-24'),
(4, 'eurobarta24.com', '', '21', '2020-02-14'),
(5, 'qaominews.com', '', '500', '2020-02-04'),
(6, 'qaominews.com', '', '5000', '2020-02-28'),
(7, 'nabinagar24.com', '', '65', '2020-02-24'),
(8, 'qaominews.com', '', '850', '2020-02-17'),
(9, 'eurobarta24.com', '', '250', '2020-02-16'),
(10, 'qaominews.com', '', '650', '2020-02-15'),
(11, 'nabinagar24.com', '', '650', '2020-02-11'),
(12, 'qaominews.com', '', '6500', '2020-02-07'),
(13, 'qaominews.com', '', '4500', '2020-02-15'),
(14, 'eurobarta24.com', '', '650', '2020-02-01'),
(15, 'nabinagar24.com', '', '650', '2020-02-19'),
(16, 'qaominews.com', '', '540', '2020-02-12'),
(17, 'nabinagar24.com', 'domain', '200', '2020-02-24'),
(18, 'aarizinternational.com', 'domain', '5200', '2020-02-27'),
(19, 'hellobrahmanbaria.com', 'support', '500', '2020-02-29'),
(20, 'eurobarta24.com', 'website', '500', '2020-02-29');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `useremail` text NOT NULL,
  `password` varchar(100) NOT NULL,
  `yourname` varchar(100) NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `useremail`, `password`, `yourname`, `photo`) VALUES
(12, 'nusrat@gmail.com', 'nusrat', 'nusrat jahan', 'images/5e56a6de534f9__nusrat.webp');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_client`
--
ALTER TABLE `all_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `income`
--
ALTER TABLE `income`
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
-- AUTO_INCREMENT for table `all_client`
--
ALTER TABLE `all_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `income`
--
ALTER TABLE `income`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
