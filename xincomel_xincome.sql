-- phpMyAdmin SQL Dump
-- version 4.9.11
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 08, 2023 at 12:50 PM
-- Server version: 5.7.41
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `xincomel_xincome`
--

-- --------------------------------------------------------

--
-- Table structure for table `affiliate_views`
--

CREATE TABLE `affiliate_views` (
  `id` int(11) NOT NULL,
  `affiliate_code_user` int(11) NOT NULL,
  `affiliate_code` int(255) NOT NULL,
  `views` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `affiliate_views`
--

INSERT INTO `affiliate_views` (`id`, `affiliate_code_user`, `affiliate_code`, `views`, `ip`, `created_at`, `updated_at`) VALUES
(1, 8, 24956335, 1, '197.210.55.148', '2022-05-20 11:35:54', '2022-05-20 11:35:54'),
(2, 8, 24956335, 1, '197.210.79.248', '2022-05-20 11:38:10', '2022-05-20 11:38:10');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orderdetails`
--

CREATE TABLE `orderdetails` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orderdetails`
--

INSERT INTO `orderdetails` (`id`, `order_id`, `productname`, `quantity`, `image`, `price`, `created_at`, `updated_at`) VALUES
(1, 5, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-20 20:27:09', '2022-04-20 20:27:09'),
(2, 6, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-20 20:28:14', '2022-04-20 20:28:14'),
(3, 7, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-20 20:37:50', '2022-04-20 20:37:50'),
(4, 8, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-22 16:09:48', '2022-04-22 16:09:48'),
(5, 9, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-22 16:13:20', '2022-04-22 16:13:20'),
(6, 10, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-22 16:13:54', '2022-04-22 16:13:54'),
(7, 11, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-22 16:16:26', '2022-04-22 16:16:26'),
(8, 12, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-22 16:17:37', '2022-04-22 16:17:37'),
(9, 13, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-22 18:21:00', '2022-04-22 18:21:00'),
(10, 14, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-28 18:43:34', '2022-04-28 18:43:34'),
(11, 15, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-28 18:46:26', '2022-04-28 18:46:26'),
(12, 16, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-29 17:52:52', '2022-04-29 17:52:52'),
(13, 17, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-29 17:54:13', '2022-04-29 17:54:13'),
(14, 18, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-29 17:56:39', '2022-04-29 17:56:39'),
(15, 19, 'How To Become A Millionaire', 1, NULL, '1000', '2022-04-29 17:54:41', '2022-04-29 17:54:41'),
(16, 20, 'How To Become A Millionaire', 1, NULL, '1000', '2022-05-24 10:20:56', '2022-05-24 10:20:56'),
(17, 21, 'How To Become A Millionaire', 1, NULL, '1000', '2022-05-24 10:36:06', '2022-05-24 10:36:06'),
(18, 22, 'How To Become A Millionaire', 1, NULL, '1000', '2022-05-24 10:37:14', '2022-05-24 10:37:14'),
(19, 23, 'How To Become A Millionaire', 1, NULL, '1000', '2022-05-24 10:39:36', '2022-05-24 10:39:36'),
(20, 24, 'How To Become A Millionaire', 1, NULL, '1000', '2022-05-24 10:42:02', '2022-05-24 10:42:02'),
(21, 25, 'How To Become A Millionaire', 1, NULL, '1000', '2022-05-24 11:06:18', '2022-05-24 11:06:18'),
(22, 26, 'How To Become A Millionaire', 1, NULL, '1000', '2022-06-02 13:50:50', '2022-06-02 13:50:50'),
(23, 27, 'How To Become A Millionaire', 1, NULL, '1000', '2022-06-07 09:17:03', '2022-06-07 09:17:03');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(255) DEFAULT NULL,
  `refferalcode` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `payment_method`, `status`, `amount`, `transaction_id`, `created_at`, `updated_at`, `image`, `refferalcode`) VALUES
(14, 1, 'Card', 'PENDING', '1000', 'l1rytb7dk0', '2022-04-28 18:43:34', '2022-04-28 18:43:34', NULL, NULL),
(15, 1, 'Card', 'PENDING', '1000', 'l1rytb7dk0', '2022-04-28 18:46:26', '2022-04-28 18:46:26', NULL, NULL),
(16, 7, 'Card', 'PENDING', '1000', '70pujv8qam', '2022-04-29 17:52:52', '2022-04-29 17:52:52', NULL, NULL),
(17, 7, 'Card', 'PENDING', '1000', '70pujv8qam', '2022-04-29 17:54:13', '2022-04-29 17:54:13', NULL, NULL),
(18, 7, 'Card', 'PENDING', '1000', 'omvenlek1s', '2022-04-29 17:56:39', '2022-04-29 17:56:39', NULL, NULL),
(19, 6, 'Card', 'PENDING', '1000', 'rnqsf2s539', '2022-04-29 17:54:41', '2022-04-29 17:54:41', NULL, NULL),
(20, 8, 'Card', 'PENDING', '1000', '9g37lsa7yv', '2022-05-24 10:20:56', '2022-05-24 10:20:56', NULL, NULL),
(21, 9, 'Card', 'PENDING', '1000', '4httyc3vbn', '2022-05-24 10:36:06', '2022-05-24 10:36:06', NULL, NULL),
(22, 9, 'Card', 'PENDING', '1000', '1uyro30l1n', '2022-05-24 10:37:14', '2022-05-24 10:37:14', NULL, NULL),
(23, 9, 'Card', 'PENDING', '1000', '05qdyvps23', '2022-05-24 10:39:36', '2022-05-24 10:39:36', NULL, 24956335),
(24, 9, 'Card', 'PENDING', '1000', 'r0hyahoy2i', '2022-05-24 10:42:02', '2022-05-24 10:42:02', NULL, 24956335),
(25, 10, 'Card', 'PENDING', '1000', 'sbbdvdsthz', '2022-05-24 11:06:18', '2022-05-24 11:06:18', NULL, 24956335),
(26, 8, 'Card', 'PENDING', '1000', 'skdqdnutz2', '2022-06-02 13:50:50', '2022-06-02 13:50:50', NULL, NULL),
(27, 8, 'Card', 'PENDING', '1000', 'hyjjqfm6jm', '2022-06-07 09:17:03', '2022-06-07 09:17:03', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `productname` varchar(255) NOT NULL,
  `productprice` int(11) NOT NULL,
  `productdescription` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `quantity` int(11) NOT NULL,
  `views` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `productprice`, `productdescription`, `created_at`, `updated_at`, `quantity`, `views`) VALUES
(1, 'How To Become A Millionaire', 1000, 'Just do this and you will become a millionaire', '2022-04-20 12:02:34', '2023-03-06 04:33:10', 1, 154);

-- --------------------------------------------------------

--
-- Table structure for table `refferals`
--

CREATE TABLE `refferals` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `refferal_percentage` decimal(10,0) NOT NULL,
  `refferal_profit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `refferals`
--

INSERT INTO `refferals` (`id`, `user_id`, `order_id`, `refferal_percentage`, `refferal_profit`, `created_at`, `updated_at`) VALUES
(1, 6, 17, '10', '100', '2022-04-29 17:54:13', '2022-04-29 17:54:13'),
(2, 6, 18, '50', '500', '2022-04-29 17:56:39', '2022-04-29 17:56:39'),
(3, 8, 22, '50', '500', '2022-05-24 10:37:14', '2022-05-24 10:37:14'),
(4, 8, 23, '50', '500', '2022-05-24 10:39:36', '2022-05-24 10:39:36'),
(5, 8, 24, '50', '500', '2022-05-24 10:42:02', '2022-05-24 10:42:02'),
(6, 8, 25, '50', '500', '2022-05-24 11:06:18', '2022-05-24 11:06:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `affiliate_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `refferral_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `affiliate_code`, `refferral_code`) VALUES
(1, 'Onutochukwu Uche', 'uchetochukwu@gmail.com', NULL, '$2y$10$HdQWSoyqCiBK84pgqMtwBu.E.vvLa3K0p41yhisPKWLJEnfHY6F0C', NULL, '2022-04-18 17:08:29', '2022-04-18 17:08:29', '12345678', ''),
(2, 'pastra arinze', 'pastra@thebemsgroup.com', NULL, '$2y$10$omgL7F/qTW/4KgqFxHLDsut9UV2LaVaa3VFgdS/juOFHmPMKuItXS', NULL, '2022-04-18 17:17:13', '2022-04-18 17:17:13', '', ''),
(3, 'Joel', 'igworld.biz@gmail.com', NULL, '$2y$10$ZIRL48yL5HRQ6P/6kMziNe8vPwHexM8UQV6fjS./hEiaNS0GqccoO', NULL, '2022-04-19 19:17:00', '2022-04-19 19:17:00', '16856177', ''),
(4, 'David', 'igworld.biz1111@gmail.com', NULL, '$2y$10$AdX4FW7w1Gg9C0RCK19I.O.is4CW4eHLSLi5H.lgg4.0URXa1OTkC', NULL, '2022-04-19 19:18:56', '2022-04-19 19:18:56', '64922391', ''),
(5, 'Chike', 'chi@chike.com', NULL, '$2y$10$3L0Rt1eAvJpS3cvZL87rP.wT74W3Q2DdAei3oQVlxTKYAufj75.Gy', NULL, '2022-04-19 19:31:46', '2022-04-19 19:31:46', '47135300', '64922391'),
(6, 'Elon Musk', 'elon@twitter.com', NULL, '$2y$10$pOJzbceQ3ZMbTIRMo9vNlOf6lOiXJ6E205vM5ZdAX8ITAUrVRkA.G', NULL, '2022-04-28 18:41:09', '2022-04-28 18:41:09', '68588002', '12345678'),
(7, 'Gates Bill', 'bill@gates.com', NULL, '$2y$10$5/bP7.Dg5o1ICY/PShnu7O4CzrVL5BbTegHGFb/f.3EAqkska06vu', NULL, '2022-04-29 17:51:18', '2022-04-29 17:51:18', '56796868', '68588002'),
(8, 'Onutochukwu', 'myensiuche@gmail.com', NULL, '$2y$10$cCYXcczbk7XJHVOrJxoqn.a05ssOlAQyUMWtg47vDGRi4CtqwiIgO', NULL, '2022-05-16 17:05:20', '2022-05-16 17:05:20', '24956335', ''),
(10, 'goody', 'good@gmail.com', NULL, '$2y$10$TK3YR160Z2RRAgsv8HPw0OA7Gu3KJBlsvyJgj60OUHijjMEsyhny.', NULL, '2022-05-24 11:05:07', '2022-05-24 11:05:07', '53003851', '24956335'),
(11, 'digipreneur', 'nu444@nuto.com', NULL, '$2y$10$v4KjN5tSPWuFX47q5aEqtOzEfGdeLQLfzojasJFF97G.O6IBYzhSi', NULL, '2022-05-29 16:14:06', '2022-05-29 16:14:06', '23655821', ''),
(12, 'chiwetara igwe', 'donchiwexco@gmail.com', NULL, '$2y$10$OqfTry4xWrcG/MG/SlW6geTHVkSVzjv4jHpo73amPJtPw9jWaPZkq', NULL, '2022-05-30 14:22:38', '2022-05-30 14:22:38', '63334055', ''),
(13, 'Onutochukwu Nkem', 'support@xincome.live', NULL, '$2y$10$cgdStz0ra47If3GQONREkelE2FYb7q8PMYfw4DbE0T7z/RFrSakVa', NULL, '2022-08-15 12:05:39', '2022-08-15 12:05:39', '27145959', ''),
(14, 'Onutochukwu', 'validuniverse@gmail.com', NULL, '$2y$10$fyAth6mDjpprdQKfUAtu0OI10Q/FXuuLcMnUBkYMJ4qcyYajcwmkm', NULL, '2022-10-24 13:12:21', '2022-10-24 13:12:21', '21814722', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `affiliate_views`
--
ALTER TABLE `affiliate_views`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `refferals`
--
ALTER TABLE `refferals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `affiliate_views`
--
ALTER TABLE `affiliate_views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orderdetails`
--
ALTER TABLE `orderdetails`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `refferals`
--
ALTER TABLE `refferals`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
