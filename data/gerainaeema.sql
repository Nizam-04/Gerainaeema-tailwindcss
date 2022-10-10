-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 10:20 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gerainaeema`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) DEFAULT NULL,
  `harga` varchar(50) NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `kategori`, `nama`, `deskripsi`, `harga`, `gambar`) VALUES
(1, 'Set', 'Haura Series Set', 'Set Syar\'i anggun yang modis dengan design layer yang elegan banget, yang selalu bikin ukhmin kebanjiran testimony dari temen2 yang MasyaAllah positif banget, bikin ukhmin selalu semangat.', 'Rp350.000', 'haura.jpeg'),
(2, 'Set', 'Khadijah Series Set', NULL, 'Rp245.000', 'khadijah.jpeg'),
(3, 'Set', 'Azalea Series Set', 'Set Syar\'i anggun yang modis dengan design layer yang elegan banget, yang selalu bikin ukhmin kebanjiran testimony dari temen2 yang MasyaAllah positif banget, bikin ukhmin selalu semangat.', 'Rp295.000', 'azalea.jpeg'),
(4, 'Set', 'Raisa Series Set', NULL, 'Rp325.000', 'raisa.jpeg'),
(5, 'Set', 'Syafa Series Set', NULL, 'Rp245.000', 'syafa.jpeg'),
(6, 'Set', 'Hayya Series Set', 'Ied Series Set dengan design modis tetap mengusung kesan simple elegan, nyaman dikenakan seharian dalam berbagai aktifitas kamu. Bahan? Jangan ditanya, sudah pasti kami pilihkan premium quality, jahitan rapi kualitas butik dengan aksen remple yang cantik hadir dalam beberapa warna anggun, dan sudah pasti kami siapkan pasmina dengan ukuran syar\'i yang bisa dipakai dengan berbagai model hijab daaaaaan FREE CADAR', 'Rp300.000', 'hayya.jpeg'),
(7, 'Set', 'Ameera Series Set', 'Dress dengan cuting umbrella, dilengkapi dengan kantong saku disebelah kanan. Juga dipermanis dengan tali terpisah di bagian pinggang yang bisa dilepas yang dilengkapi dengan slot untuk tali agar tetap rapi saat dipakai, untuk mengatur ukuran pinggang dan dijadikan pita yang semakin mempermanis dress ini.', 'Rp245.000', 'ameera.jpeg'),
(8, 'Dress Muslim', 'Shahia Series', 'Shahia dress hadir dengan design simple elegan, cocok dipakai buat semua usia, cocok dipakai untuk acara apapun, kali ini hadir dalam 2 warna brown series,,,special buat kamu pecinta brown yang sudah pasti bakal akan selalu anggun buat kamu pakai kemanapun dong. Dress ini super duper ringan, super duper adem saat dipakai, simple tapi anggun, cocok banget buat kamu-kamu yang ga suka keribetan hihihi', 'Rp345.000', 'shahia.jpeg'),
(9, 'Dress Muslim', 'Rania Series', NULL, 'Rp325.000', 'rania.jpeg'),
(10, 'Dress Muslim', 'Ameera Series - Dress Only', NULL, 'Rp100.000', 'ameera-dressonly.jpeg'),
(11, 'Hijab', 'Cadar Haura', 'Cadar Tali', 'Rp15.000', 'cadar-haura.jpeg'),
(12, 'Hijab', 'Pasmina Haura', NULL, 'Rp15.000', 'pasmina-haura.jpeg'),
(13, 'Hijab', 'Khimar Arafah', NULL, 'Rp50.000', 'khimar-arafah.jpeg'),
(14, 'Pakaian Muslim Anak', 'Mukena Bordir Aasiyah', 'Mukena ini adalah mukena yang lagi trend saat ini. Dengan bahan Katun Mikro yang halus , adem, jatuh dan tidak menerawang serta warna yang lembut membuat mukena ini nyaman untuk dipakai ibadah Sholat.', 'Rp150.000', 'mukena-bordir-aasiyah.jpeg'),
(15, 'Pakaian Muslim Anak', 'Khimar Khadijah', NULL, 'Rp50.000', 'khimar-khadijah.jpeg'),
(16, 'Mukena Dan Perlengkapan Sholat', 'Rumaysha Pray Set', 'Koleksi mukena cantik dari @gerainaeema yang siap menemani ibadah ukhties dengan nyaman', 'Rp450.000', 'rumaysha-pray-set.jpeg'),
(17, 'Mukena Dan Perlengkapan Sholat', 'Mukena Bordir Fatimah', 'Mukena ini adalah mukena yang lagi trend saat ini. Dengan bahan Katun Mikro yang halus , adem, jatuh dan tidak menerawang serta warna yang lembut membuat mukena ini nyaman untuk dipakai ibadah Sholat.', 'Rp210.000', 'mukena-bordir-fatimah.jpeg'),
(18, 'Fashion Muslim Lainnya', 'Digital Tasbih', NULL, 'Rp15.000', 'digital-tasbih.jpeg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
