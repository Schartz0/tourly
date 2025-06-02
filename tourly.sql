-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2025 at 03:59 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tourly`
--

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `caption` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `image`, `caption`, `created_at`) VALUES
(1, '1748773312_Gallery 1.png', '🔥🔥', '2025-06-01 10:21:52'),
(2, '1748805064_Gallery 3.png', 'My Trip My Adventureeee', '2025-06-01 19:11:04'),
(4, '1748819794_3292f82a405893e381faedce9165143e.jpg', 'Catch The Moment :)', '2025-06-01 23:16:34'),
(5, '1748820054_ffb5dab0d70f2704e5788f004b5a714a.jpg', '“Di bawah langit biru dan sinar matahari, kami mengikat janji suci. Pantai jadi saksi cinta kami.” ☀️❤️ #WeddingByTheSea', '2025-06-01 23:20:54'),
(6, '1748820186_849acf65083f57065b681ec26fc88ba2.jpg', 'Umur 30 baru jumpa penyu, telat ga sii?🤣', '2025-06-01 23:23:06');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `title`, `description`, `image`, `price`, `created_at`) VALUES
(2, 'Banana Boat Adventure', 'Banana Boat adalah perahu karet berbentuk pisang yang ditarik oleh speedboat dengan kecepatan tinggi. Aktivitas ini menawarkan sensasi seru dan menantang, cocok untuk keluarga, teman, atau pasangan yang ingin menikmati keseruan bersama di laut.', '1748818358_fbec5c716477e9ede5fb155f5c952ff2.jpg', 130000, '2025-06-01 22:52:38'),
(4, 'Beach Wedding Party', 'Acara pernikahan yang diadakan di tepi pantai dengan latar pemandangan laut, pasir putih, dan suasana tropis yang romantis. Konsep ini sangat populer karena memberikan suasana santai sekaligus elegan.', '1748818897_cebb01f397740a3d14fd97327abd71d4.jpg', 60000000, '2025-06-01 23:01:37'),
(5, 'Mangrove Discovery Tour', 'Jelajahi hutan bakau yang rimbun, saksikan satwa liar seperti monyet, burung raja udang, ular bakau, dan biawak, serta pelajari peran penting sungai dan hutan bakau bagi kehidupan masyarakat dan perlindungan pesisir Bintan.', '1748819139_Gambar 7.png', 380000, '2025-06-01 23:05:39'),
(6, 'Bintan East Coast Ride', 'Memanggil semua pesepeda yang berdedikasi untuk mencari petualangan yang mendebarkan! Bintan East Coast Ride menggabungkan pemandangan pedesaan,serta medan yang beragam.', '1748819193_Gambar 6.png', 190000, '2025-06-01 23:06:33'),
(7, 'Lagoi Bay Snorkeling Tour', 'Rasakan serunya snorkeling di Lagoi Bay bersama Bintan Watersports! Nikmati panorama bawah laut yang memukau dengan beragam biota laut eksotis seperti penyu dan pari, serta pemandangan pantai yang indah.', '1748819235_46651e8fa2cf81ff373ad937397e85fc.jpg', 600000, '2025-06-01 23:07:15'),
(8, 'All-Terrain Vehicle (ATV) Trip', 'ATV Trip adalah aktivitas petualangan menggunakan All-Terrain Vehicle (ATV) atau kendaraan roda empat yang dirancang khusus untuk melewati berbagai medan, seperti tanah berlumpur, pasir, bukit, dan jalur off-road lainnya.', '1748819739_c8e8052e37a6e936f2a5e37834d13ca8.jpg', 400000, '2025-06-01 23:15:39');

-- --------------------------------------------------------

--
-- Table structure for table `staycation`
--

CREATE TABLE `staycation` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `duration` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staycation`
--

INSERT INTO `staycation` (`id`, `title`, `location`, `description`, `image`, `price`, `duration`, `created_at`) VALUES
(9, 'Banyan Tree Bintan', 'Bintan', 'Banyan Tree Bintan adalah resor mewah yang terletak di pesisir utara Pulau Bintan, Kepulauan Riau, Indonesia. Dikelilingi oleh hutan hujan tropis yang rimbun dan menghadap langsung ke Laut Cina Selatan, resor ini menawarkan pengalaman menginap yang tenang dan eksklusif, hanya sekitar satu jam perjalanan feri dari Singapura', '1748817516_5e8e078aa2b1828438eb80672d7995d8.jpg', 0, NULL, '2025-06-01 22:38:36'),
(10, 'Mayang Sari Beach Resort', 'Lagoi', 'Mayang Sari Beach Resort adalah resor pantai yang menawan di pesisir utara Pulau Bintan, Indonesia, dan merupakan bagian dari kompleks Nirwana Gardens. Dengan suasana tropis yang tenang dan arsitektur tradisional, resor ini menawarkan pengalaman menginap yang nyaman dan autentik, cocok untuk liburan romantis maupun keluarga.', '1748817682_5356607ab1c0a80de2f207a9fb844f11.jpg', 0, NULL, '2025-06-01 22:41:22'),
(11, 'Natra Bintan, a Tribute Portfolio Resort', 'Bintan', 'Natra Bintan, a Tribute Portfolio Resort adalah resor glamping mewah yang terletak di kawasan wisata Lagoi, Pulau Bintan, Indonesia. Resor ini menawarkan pengalaman menginap unik dengan tenda bergaya safari yang menghadap langsung ke Crystal Lagoon, laguna air asin buatan terbesar di Asia Tenggara .', '1748817915_leonardo-880792-171047289-729768 (1).jpg', 0, NULL, '2025-06-01 22:45:15'),
(12, 'Cassia Bintan', 'Bintan', 'Cassia Bintan adalah resor apartemen modern yang terletak di kawasan Laguna Bintan, Lagoi, Pulau Bintan, Indonesia. Sebagai bagian dari Banyan Group, resor ini menawarkan pengalaman menginap yang santai dan penuh gaya, cocok untuk pasangan muda, keluarga, maupun wisatawan yang mencari suasana liburan yang fleksibel dan menyenangkan.', '1748818036_expedia_group-3091765-e115e5-646957.jpg', 0, NULL, '2025-06-01 22:47:16'),
(13, 'The Anmon Resort Bintan', 'Bintan', 'The ANMON Resort Bintan adalah destinasi glamping mewah yang unik di kawasan wisata Lagoi, Bintan, Kepulauan Riau. Dengan konsep tenda bergaya gurun pasir ala Timur Tengah, resor ini menawarkan pengalaman menginap yang memadukan kenyamanan modern dan nuansa alam tropis, cocok untuk liburan romantis, keluarga, maupun staycation eksklusif', '1748818139_expedia_group-4967794-552b6aad-289650.jpg', 0, NULL, '2025-06-01 22:48:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('admin') NOT NULL DEFAULT 'admin',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `created_at`) VALUES
(2, 'admin', '0192023a7bbd73250516f069df18b500', 'admin', '2025-06-01 09:26:34');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staycation`
--
ALTER TABLE `staycation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `staycation`
--
ALTER TABLE `staycation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
