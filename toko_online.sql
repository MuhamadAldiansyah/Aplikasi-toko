-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2023 at 01:19 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id`, `username`, `email`, `password`) VALUES
(1, 'test', 'test@gmail.com', '0139a3c5cf42394be982e766c93f5ed0'),
(2, 'user', 'user@gmail.com', '6ad14ba9986e3615423dfca256d04e3f'),
(3, 'nabil', 'nabil@gmail.com', '070aa66550916626673f492bdbdb655f'),
(4, 'dimas', 'dimas@gmail.com', '7d49e40f4b3d8f68c19406a58303f826'),
(5, 'reen', 'reen@gmail.com', '62dc2ce3595786d81a642e43cc26c439'),
(6, 'andri', 'andri@gmail.com', '6bd3108684ccc9dfd40b126877f850b0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'baju pria'),
(2, 'baju wanita'),
(3, 'hoodie'),
(4, 'jam tangan'),
(5, 'Tas'),
(6, 'Sepatu'),
(23, 'kemeja pria'),
(24, 'celana pria'),
(25, 'celana perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kategori_id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` double NOT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `detail` text DEFAULT NULL,
  `ketersediaan_stok` enum('habis','tersedia') DEFAULT 'tersedia'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kategori_id`, `nama`, `harga`, `foto`, `detail`, `ketersediaan_stok`) VALUES
(1, 1, 'kaos pria logo smile bercak Hitam baju pria', 110000, '47856013425a919924a1.jpg', 'Baju pria logo smile bercak Hitam', 'tersedia'),
(2, 1, 'Baju Pria Sepasang Putih Coklat kaos pria', 100000, '0322a6031a423945a433.jpg', '                        Baju Pria Sepasang Putih Coklat                                                                                                         ', 'tersedia'),
(3, 1, 'Baju Pria Cream coklat kaos pria', 100000, '1110806882436a392a70.jpg', '                        Kaos Pria warna Cream kecoklatan                      ', 'tersedia'),
(4, 1, 'Baju pria Desain Api merah  biru kaos pria', 150000, '36883271088980529a81.jpg', 'Baju pria Desain Api merah biru', 'tersedia'),
(13, 3, 'Hoodie wanita nezuko', 56000, '42226418192a66899101.jpg', 'Hoodie wanita Nezuko warna ungu', 'tersedia'),
(14, 1, 'baju bergaris hitam putih', 139000, '7199a4713124375a3633.jpg', 'baju bergaris hitam putih ', 'tersedia'),
(15, 3, 'Hoodie pink Kimetsu no Yaiba Nezuko ', 60000, '98249185706aa0198a94.jpg', 'Hoodie Kimetsu no Yaiba Nezuko', 'tersedia'),
(16, 6, 'Sepatu Nike Hitam ', 200000, '7066a5459691344418a3.png', 'Sepatu Nike Hitam ', 'tersedia'),
(17, 6, 'Sepatu putih ', 350000, '1186212917a56871758a.jpg', 'Sepatu putih', 'tersedia'),
(18, 1, 'Baju Pria Sepasang Putih  Orange kaos pria', 150000, '4665974a072209086130.jpg', '                        Baju Pria Sepasang Putih Orange                    ', 'tersedia'),
(19, 3, 'Hoodie putih hitam', 90000, '787394166aa746193432.jpg', 'Hoodie putih hitam', 'tersedia'),
(20, 1, 'Baju Pria Hitam Merah kaos pria', 160000, '48175687843884a92279.jpg', 'Baju Pria Hitam Merah', 'tersedia'),
(21, 1, 'Baju Hitam Sepasang kaos pria', 78000, '54572588196138865675.png', '                        Baju Hitam Sepasang                    ', 'tersedia'),
(22, 3, 'Hoodie ANIME JIBAKU SHOUNEN HANAKO', 120000, '49596134404356870aa2.jpg', 'Hoodie ANIME JIBAKU SHOUNEN HANAKO', 'tersedia'),
(23, 5, 'Tas wanita En-ji Haejin Handbag- khaki', 284250, '1739942023373a365432.jpg', 'Tas branded ', 'tersedia'),
(24, 5, 'Tas branded ', 283000, '1664551402753274981a.jpg', 'Tas Branded Amazing wowww', 'tersedia'),
(25, 5, 'Tas branded wanita warna putih', 320300, '91718359856405870024.jpg', 'Tas branded wanita warna putih', 'tersedia'),
(26, 6, 'Sepatu sport putih', 134500, '5a624272a61846675981.jpg', 'Sepatu sport putih', 'tersedia'),
(27, 6, 'sepatu sneaker warna putih', 320000, '177315a93240a0768152.jpg', 'sepatu sneaker warna putih', 'tersedia'),
(28, 6, 'Sepatu Sport putih', 235000, 'a2746965319554108a33.jpg', 'Sepatu Sport putih', 'tersedia'),
(29, 2, 'baju wanita warna maroon', 150000, 'a6243979404331565455.jpg', 'baju wanita warna maroon', 'tersedia'),
(30, 2, 'baju wanita lucu SET putih Jeans', 100000, '9a36a9a1649728a0a953.jpg', 'baju wanita lucu SET putih Jeans', 'tersedia'),
(31, 2, 'Baju wanita panjang', 150000, '41679243745878414a26.jpg', 'Baju wanita panjang', 'tersedia'),
(32, 2, 'baju wanita lengan panjang warna coklat', 78000, 'a5905344733522502138.jpg', 'baju wanita lengan panjang warna coklat', 'tersedia'),
(33, 2, 'baju wanita vest Coklat ', 12000, 'a9a8326a9351a86a0709.jpg', 'baju wanita vest Coklat ', 'tersedia'),
(34, 23, 'Kemeja pria warna hitam', 230000, '711664a906890a043262.jpg', 'Kemeja pria warna hitam', 'tersedia'),
(35, 23, 'Kemeja pria warna abu abu', 235000, '5433860309412287a938.png', 'Kemeja pria panjang warna abu abu', 'tersedia'),
(36, 4, 'TAG Heuer Carrera Date Callibre Automatic JAM', 110678500, '36663777a65705a90976.jpg', '                        TAG Heuer Carrera Date Callibre Automatic JAM tangan                    ', 'tersedia'),
(37, 4, 'TAG Heuer Aquaracer Quartz 32 mm Jam tangan', 68764500, '42364a72068320746a83.jpg', 'TAG Heuer Aquaracer Quartz 32 mm Jam tangan', 'tersedia'),
(38, 4, 'Jam tangan wanita pria unisex Aigner', 7980000, '11451a40232568269297.jpg', 'Jam tangan wanita pria unisex Aigner', 'tersedia'),
(39, 4, 'jam tangan Branded Es3918 VIRGINIA GRAY', 1200000, '468010255a2596125184.jpg', 'jam tangan Branded Es3918 VIRGINIA GRAY', 'tersedia'),
(40, 5, 'tas wanita hedon abiezzz', 2300000, '27453aa1069811863510.jpg', 'tas wanita hedon abiezzz', 'tersedia'),
(41, 24, 'Celana panjang pria', 89000, '069a6432989931447a81.jpg', 'Celana panjang keren pria', 'tersedia'),
(42, 24, 'Celana panjang pria korean style', 120000, '526aa910542a734a6163.jpg', 'Celana panjang Korean style', 'tersedia'),
(43, 25, 'Celana wanita 1 prempuan', 12000, '4781132096a444577a05.jpg', 'Celana cewe ', 'tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$1QaJqJWMGLLE/g1.gdYBreFWtBzRKRnW0wvDhxQj0hGH.puMEUIg.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama` (`nama`),
  ADD KEY `kategori_produk` (`kategori_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kategori_produk` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
