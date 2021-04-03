-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2021 at 06:54 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chama`
--

-- --------------------------------------------------------

--
-- Table structure for table `the_groups`
--

CREATE TABLE `the_groups` (
  `the_group_id` int(11) NOT NULL,
  `the_group_name` text NOT NULL,
  `the_group_goal` varchar(1000) NOT NULL,
  `the_group_purpose` varchar(10000) NOT NULL,
  `the_group_currency` text NOT NULL,
  `the_group_creator` int(11) NOT NULL,
  `the_group_date` int(11) NOT NULL,
  `the_group_s1` int(11) NOT NULL,
  `the_group_s2` int(11) NOT NULL,
  `the_group_s3` int(11) NOT NULL,
  `the_group_s4` int(11) NOT NULL,
  `the_group_type` int(11) NOT NULL,
  `the_group_photo` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `the_logins`
--

CREATE TABLE `the_logins` (
  `the_login_attempt` int(11) NOT NULL,
  `the_login_user` int(11) NOT NULL,
  `the_login_time` int(11) NOT NULL,
  `the_login_ip` varchar(100) NOT NULL,
  `the_login_success` text NOT NULL,
  `the_login_password_attempt` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_logins`
--

INSERT INTO `the_logins` (`the_login_attempt`, `the_login_user`, `the_login_time`, `the_login_ip`, `the_login_success`, `the_login_password_attempt`) VALUES
(1, 1, 1617449065, '::1', 'no', 'optirex'),
(2, 1, 1617449096, '::1', 'no', 'bokouru'),
(3, 1, 1617449214, '::1', 'no', 'bokouru'),
(4, 1, 1617449472, '::1', 'no', 'optirex'),
(5, 1, 1617449505, '::1', 'yes', 'user_1_correct_password'),
(6, 1, 1617451842, '::1', 'no', '123Death!@#'),
(7, 1, 1617451850, '::1', 'no', '123Death!@#'),
(8, 1, 1617451855, '::1', 'no', '890Berjis*()'),
(9, 1, 1617451877, '::1', 'no', '123death!@#'),
(10, 1, 1617451878, '::1', 'no', '123death!@#'),
(11, 1, 1617451878, '::1', 'no', '123death!@#'),
(12, 1, 1617451879, '::1', 'no', '123death!@#'),
(13, 1, 1617451879, '::1', 'no', '123death!@#'),
(14, 1, 1617451879, '::1', 'no', '123death!@#'),
(15, 1, 1617451879, '::1', 'no', '123death!@#'),
(16, 1, 1617451879, '::1', 'no', '123death!@#'),
(17, 1, 1617451918, '::1', 'no', '123death!@#'),
(18, 1, 1617451918, '::1', 'no', '123death!@#'),
(19, 1, 1617451919, '::1', 'no', '123death!@#'),
(20, 1, 1617451919, '::1', 'no', '123death!@#'),
(21, 1, 1617451919, '::1', 'no', '123death!@#'),
(22, 1, 1617451920, '::1', 'no', '123death!@#'),
(23, 1, 1617451920, '::1', 'no', '123death!@#'),
(24, 1, 1617451921, '::1', 'no', '123death!@#'),
(25, 1, 1617452023, '::1', 'no', '123death!@#'),
(26, 1, 1617452066, '::1', 'no', '123Death!@#'),
(27, 1, 1617452088, '::1', 'no', '890Berjis*()'),
(28, 1, 1617452094, '::1', 'no', '123Death*()'),
(29, 1, 1617452101, '::1', 'no', '123death!@#'),
(30, 1, 1617452124, '::1', 'no', '123Death'),
(31, 1, 1617452199, '::1', 'no', '890Berjis*()'),
(32, 1, 1617452207, '::1', 'no', '890Berjis*()'),
(33, 1, 1617452208, '::1', 'no', '890Berjis*()'),
(34, 1, 1617452209, '::1', 'no', '890Berjis*()'),
(35, 1, 1617452210, '::1', 'no', '890Berjis*()'),
(36, 1, 1617452388, '::1', 'yes', 'user_1_correct_password');

-- --------------------------------------------------------

--
-- Table structure for table `the_people`
--

CREATE TABLE `the_people` (
  `the_person_id` int(11) NOT NULL,
  `the_person_email` varchar(1000) NOT NULL,
  `the_person_password` varchar(1000) NOT NULL,
  `the_person_phone` int(11) NOT NULL,
  `the_person_first` text NOT NULL,
  `the_person_last` text NOT NULL,
  `the_person_photo` varchar(1000) NOT NULL,
  `the_person_join` int(11) NOT NULL,
  `the_person_details_date` int(11) DEFAULT NULL,
  `the_person_deactivate_date` int(11) DEFAULT NULL,
  `the_person_verified` tinyint(1) NOT NULL DEFAULT 0,
  `the_person_country` text NOT NULL,
  `the_person_county` text NOT NULL,
  `the_person_city` text NOT NULL,
  `the_person_street` text NOT NULL,
  `the_person_address` text NOT NULL,
  `the_person_postal` text NOT NULL,
  `the_person_type` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `the_people`
--

INSERT INTO `the_people` (`the_person_id`, `the_person_email`, `the_person_password`, `the_person_phone`, `the_person_first`, `the_person_last`, `the_person_photo`, `the_person_join`, `the_person_details_date`, `the_person_deactivate_date`, `the_person_verified`, `the_person_country`, `the_person_county`, `the_person_city`, `the_person_street`, `the_person_address`, `the_person_postal`, `the_person_type`) VALUES
(1, 'bo.kouru@gmail.com', '$2y$10$Lu3NfYlARxwcK7jud2P9a.L2NuG84KV1swQgg/ZT096MpF2ZIb8Oa', 0, '', '', '', 1617443092, NULL, NULL, 1, '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `the_projects`
--

CREATE TABLE `the_projects` (
  `the_project_id` int(11) NOT NULL,
  `the_project_title` text NOT NULL,
  `the_project_description` varchar(10000) NOT NULL,
  `the_project_amount` int(11) NOT NULL,
  `the_project_status` tinyint(1) NOT NULL DEFAULT 0,
  `the_project_start` int(11) NOT NULL,
  `the_project_end` int(11) DEFAULT NULL,
  `the_project_creator` int(11) NOT NULL,
  `the_project_currency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `the_transactions`
--

CREATE TABLE `the_transactions` (
  `the_transaction_id` int(11) NOT NULL,
  `the_transaction_user` int(11) NOT NULL,
  `the_transaction_date` int(11) NOT NULL,
  `the_transaction_start` int(11) NOT NULL,
  `the_transaction_end` int(11) NOT NULL,
  `the_transaction_amount` int(11) NOT NULL,
  `the_transaction_status` tinyint(4) NOT NULL,
  `the_transaction_currency` text NOT NULL,
  `the_transaction_reference` varchar(100) NOT NULL,
  `the_transaction_category` tinyint(4) NOT NULL,
  `the_transaction_level` tinyint(4) NOT NULL,
  `the_transaction_type` tinyint(4) NOT NULL,
  `the_transaction_wallet` int(11) NOT NULL,
  `the_transaction_group` int(11) NOT NULL,
  `the_transaction_purpose` text NOT NULL,
  `the_transaction_comment` text NOT NULL,
  `the_transaction_mode` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `the_wallets`
--

CREATE TABLE `the_wallets` (
  `the_wallet_id` int(11) NOT NULL,
  `the_wallet_user` int(11) NOT NULL,
  `the_wallet_currency` text NOT NULL,
  `the_wallet_balance` int(11) NOT NULL,
  `the_wallet_date` int(11) NOT NULL,
  `the_wallet_status` tinyint(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `the_groups`
--
ALTER TABLE `the_groups`
  ADD PRIMARY KEY (`the_group_id`);

--
-- Indexes for table `the_logins`
--
ALTER TABLE `the_logins`
  ADD PRIMARY KEY (`the_login_attempt`);

--
-- Indexes for table `the_people`
--
ALTER TABLE `the_people`
  ADD PRIMARY KEY (`the_person_id`);

--
-- Indexes for table `the_projects`
--
ALTER TABLE `the_projects`
  ADD PRIMARY KEY (`the_project_id`);

--
-- Indexes for table `the_transactions`
--
ALTER TABLE `the_transactions`
  ADD PRIMARY KEY (`the_transaction_id`);

--
-- Indexes for table `the_wallets`
--
ALTER TABLE `the_wallets`
  ADD PRIMARY KEY (`the_wallet_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `the_groups`
--
ALTER TABLE `the_groups`
  MODIFY `the_group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_logins`
--
ALTER TABLE `the_logins`
  MODIFY `the_login_attempt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `the_people`
--
ALTER TABLE `the_people`
  MODIFY `the_person_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `the_projects`
--
ALTER TABLE `the_projects`
  MODIFY `the_project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_transactions`
--
ALTER TABLE `the_transactions`
  MODIFY `the_transaction_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `the_wallets`
--
ALTER TABLE `the_wallets`
  MODIFY `the_wallet_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
