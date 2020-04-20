-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 04, 2019 at 09:51 PM
-- Server version: 5.7.23-0ubuntu0.18.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admintokokopi', '$2y$10$0A.GcBhfPP8PRASKlhh7seIK6fFD9KYDAaflrGe1NYAelAgxozWw6');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id_cart` int(11) NOT NULL,
  `id_produk_cart` int(11) NOT NULL,
  `id_user_cart` int(11) NOT NULL,
  `qty_cart` int(11) NOT NULL,
  `waktu_cart` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_cart` int(11) NOT NULL DEFAULT '0',
  `id_trx` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id_cart`, `id_produk_cart`, `id_user_cart`, `qty_cart`, `waktu_cart`, `status_cart`, `id_trx`) VALUES
(33, 9, 14, 2, '2018-06-30 07:32:26', 1, 'trx1420180630689645221'),
(34, 10, 14, 1, '2018-06-30 07:32:39', 1, 'trx1420180630689645221'),
(35, 14, 14, 9, '2018-06-30 07:52:57', 1, 'trx14201806301243897424'),
(36, 2, 14, 2, '2018-06-30 07:54:33', 1, 'trx1420180630103846751'),
(37, 14, 13, 1, '2018-06-30 08:50:44', 1, 'trx13201806302107013228'),
(38, 10, 14, 9, '2018-06-30 12:29:55', 1, 'trx14201806301052097416'),
(43, 11, 14, 2, '2018-07-01 04:54:26', 1, 'trx14201807011238145018'),
(49, 14, 16, 1, '2018-07-01 12:26:28', 1, 'trx16201807011922278636'),
(50, 12, 16, 2, '2018-07-01 12:26:39', 1, 'trx16201807011922278636'),
(51, 15, 16, 0, '2018-07-01 12:31:12', 0, '0'),
(52, 14, 20, 2, '2018-07-01 12:33:11', 1, 'trx20201807011339259608'),
(54, 9, 20, 8, '2018-07-01 15:02:37', 1, 'trx2020180701823672014'),
(57, 14, 14, 4, '2018-07-02 05:14:05', 1, 'trx14201807021905796830'),
(60, 9, 14, 2, '2018-07-02 05:19:15', 1, 'trx1420180702467671753'),
(61, 8, 14, 2, '2018-07-02 05:19:31', 1, 'trx1420180702467671753'),
(62, 9, 14, 4, '2018-07-02 05:20:56', 1, 'trx1420180702467671753'),
(63, 2, 14, 1, '2018-07-02 05:21:52', 1, 'trx1420180702467671753'),
(64, 14, 15, 5, '2018-07-02 05:46:50', 1, 'trx1520180702536899438'),
(65, 9, 14, 1, '2018-07-02 05:52:34', 1, 'trx14201807021962710397'),
(66, 14, 14, 2, '2018-07-02 05:52:41', 1, 'trx14201807021962710397'),
(67, 14, 15, 0, '2018-07-02 07:29:23', 0, '0'),
(68, 16, 15, 0, '2018-07-02 07:29:31', 0, '0'),
(70, 16, 21, 1, '2018-07-02 08:43:59', 1, 'trx212018070243700464'),
(71, 16, 21, 2, '2018-07-02 08:45:01', 1, 'trx2120180702853806121'),
(72, 14, 14, 8, '2018-07-03 07:51:06', 1, 'trx14201807032142984855'),
(73, 14, 14, 0, '2018-07-03 07:56:24', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Kopi Arabica'),
(2, 'Kopi Robusta');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi`
--

CREATE TABLE `konfirmasi` (
  `id_konfirmasi` int(11) NOT NULL,
  `upload_konfirmasi` varchar(255) NOT NULL,
  `rek_konfirmasi` varchar(50) NOT NULL,
  `bank_konfirmasi` varchar(50) NOT NULL,
  `an_konfirmasi` varchar(50) NOT NULL,
  `id_kon_trx` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi`
--

INSERT INTO `konfirmasi` (`id_konfirmasi`, `upload_konfirmasi`, `rek_konfirmasi`, `bank_konfirmasi`, `an_konfirmasi`, `id_kon_trx`) VALUES
(2, 'file_15283086641.jpg', '12345', 'Bank BNI', 'Ramadhan', 'trx1420180630689645221'),
(3, 'as.jpeg', '1234567', 'Bank BNI', 'Ayyubi', 'trx14201806301052097416'),
(4, 'as1.jpeg', '123', 'Bank BNI', 'Ramadhan', 'trx14201807021905796830'),
(5, 'as2.jpeg', 'Ari', 'Bank BNI', 'Ari', 'trx14201807021962710397'),
(6, 'as3.jpeg', '24234234', 'Bank BNI', 'oscar', 'trx2120180702853806121'),
(7, 'as4.jpeg', '1234567', 'Bank BNI', 'Ayyub', 'trx14201807032142984855');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(100) NOT NULL,
  `stok_produk` varchar(50) NOT NULL,
  `tanggal_upload` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto_produk` varchar(200) NOT NULL,
  `harga_produk` varchar(50) NOT NULL,
  `kategori_produk` int(11) NOT NULL,
  `keterangan_produk` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `stok_produk`, `tanggal_upload`, `foto_produk`, `harga_produk`, `kategori_produk`, `keterangan_produk`) VALUES
(1, 'Kopi Aceh', '3', '2018-06-24 08:49:39', 'g11.jpg', '100.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(2, 'Bubuk Kopi Sulawesi', '26', '2018-06-24 09:02:00', 'b11.jpg', '380.000', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(4, 'Kopi Lampung', '30', '2018-06-24 11:16:09', 'video-bg1.jpg', '29.000', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(6, 'Kopi Arabica Arab', '4', '2018-06-24 11:18:15', 'b23.jpg', '20.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(7, 'Bubuk Kopi Luwak', '1', '2018-06-25 07:14:07', 'ff6.jpg', '300', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(8, 'Bubuk Kopi Brazil', '8', '2018-06-26 04:44:50', 'g32.jpg', '21.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(9, 'Kopi Lampung', '85', '2018-06-26 04:45:23', 'g52.jpg', '50.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(10, 'Kopi Makassar', '80', '2018-06-26 04:45:56', 'g4.jpg', '120.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(11, 'Kopi Luwak', '8', '2018-06-26 04:46:38', 'g23.jpg', '1.000.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(12, 'Kopi Jogja', '1', '2018-06-26 04:47:30', 'g53.jpg', '10.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(13, 'Kopi Arab', '12', '2018-06-26 04:48:07', 'g24.jpg', '120.000', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravida'),
(14, 'Kopi China', '10', '2018-06-26 05:22:38', 'video-bg4.jpg', '12.300', 1, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravidas'),
(15, 'Kopi Jepang', '0', '2018-06-26 15:24:10', 'ff7.jpg', '23.000', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravid'),
(16, 'Bubuk Kopi Jamur', '2', '2018-07-01 05:14:16', 'g12.jpg', '1.234', 2, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec arcu ante, tincidunt non sapien posuere, lacinia dignissim tellus. Donec vitae finibus magna. Nam commodo ullamcorper lacus non sagittis. Suspendisse tincidunt hendrerit ligula eget pretium. Quisque aliquet, ipsum et ultricies convallis, dui ex pellentesque nunc, vel volutpat ipsum dolor vel erat. Phasellus eleifend at massa quis gravid');

-- --------------------------------------------------------

--
-- Table structure for table `tentang`
--

CREATE TABLE `tentang` (
  `id_tentang` int(11) NOT NULL,
  `judul_tentang` varchar(100) NOT NULL,
  `alamat_tentang` varchar(255) NOT NULL,
  `hp_tentang` varchar(20) NOT NULL,
  `email_tentang` varchar(100) NOT NULL,
  `tagline_tentang` varchar(27) NOT NULL,
  `isi_tentang` varchar(550) NOT NULL,
  `foto_tentang` varchar(255) NOT NULL,
  `quote_tentang` varchar(150) NOT NULL,
  `no_rek` varchar(30) NOT NULL,
  `bank` varchar(30) NOT NULL,
  `atas_nama` varchar(60) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tentang`
--

INSERT INTO `tentang` (`id_tentang`, `judul_tentang`, `alamat_tentang`, `hp_tentang`, `email_tentang`, `tagline_tentang`, `isi_tentang`, `foto_tentang`, `quote_tentang`, `no_rek`, `bank`, `atas_nama`, `logo`) VALUES
(1, 'E - Commerce Coffee', 'Jalan Kenangan No. 69, Kotagede, Yogyakarta, Indonesia', '08123456789', 'kopi@gmial.com', 'E - Commerce Coffee Shop', 'Loremi ipsum dolor sit amet, consectetur adipiscing elit. Donec vitae ante et tellus efficitur hendrerit eget vitae odio. Praesent placerat vel velit sit amet aliquam. In hac habitasse platea dictumst. Vestibulum quam nibh, rutrum at accumsan a, molestie ut risus. Praesent congue urna sem, ac porttitor dolor interdum sit amet. Proin euismod elit lacus, pellentesque malesuada dui bibendum pulvinar. Duis tempus purus ut aliquet tempus. Quisque luctus odio quis urna blandit, a egestas purus pharetra. Vivamus eget sagittis lacus.', 'video-bg8.jpg', 'Terkadang kita perlu merasakan pahitnya kopi, untuk mengerti betapa manisnya hidup', '12345678', 'BNI', 'Chelsea Islan', 'logo1.png');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(50) NOT NULL,
  `jumlah_trx` int(11) NOT NULL,
  `waktu_trx` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_trx` int(11) NOT NULL DEFAULT '0',
  `metode_trx` varchar(60) NOT NULL,
  `user_trx` int(11) NOT NULL,
  `resi` varchar(90) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `jumlah_trx`, `waktu_trx`, `status_trx`, `metode_trx`, `user_trx`, `resi`) VALUES
('0', 0, '2018-06-27 12:57:48', 0, '0', 0, NULL),
('trx13201806302107013228', 12395, '2018-06-30 08:51:00', 0, 'Transfer Bank', 13, NULL),
('trx1420180630103846751', 760041, '2018-06-30 07:55:01', 4, 'Transfer Bank', 14, NULL),
('trx14201806301052097416', 1080088, '2018-06-30 12:30:05', 3, 'Transfer Bank', 14, '123456789'),
('trx14201806301243897424', 110721, '2018-06-30 07:53:12', 2, 'COD (Cash On Delivery)', 14, NULL),
('trx1420180630689645221', 220096, '2018-06-30 07:33:00', 4, 'Transfer Bank', 14, NULL),
('trx14201807011238145018', 2000019, '2018-07-01 05:22:09', 0, 'Transfer Bank', 14, NULL),
('trx14201807021905796830', 49240, '2018-07-02 05:14:54', 5, 'Transfer Bank', 14, 'jo8768'),
('trx14201807021962710397', 74692, '2018-07-02 05:52:55', 5, 'Transfer Bank', 14, '213456'),
('trx1420180702467671753', 722042, '2018-07-02 05:22:33', 2, 'COD (Cash On Delivery)', 14, NULL),
('trx14201807032142984855', 98410, '2018-07-03 07:51:21', 5, 'Transfer Bank', 14, '13245'),
('trx1520180702536899438', 61511, '2018-07-02 05:47:04', 0, 'Transfer Bank', 15, NULL),
('trx16201807011922278636', 32340, '2018-07-01 12:27:01', 0, 'Transfer Bank', 16, NULL),
('trx20201807011339259608', 24675, '2018-07-01 12:33:28', 4, 'Transfer Bank', 20, NULL),
('trx2020180701823672014', 400059, '2018-07-01 15:02:52', 4, 'Transfer Bank', 20, NULL),
('trx212018070243700464', 1319, '2018-07-02 08:44:26', 5, 'COD (Cash On Delivery)', 21, NULL),
('trx2120180702853806121', 2536, '2018-07-02 08:45:11', 5, 'Transfer Bank', 21, '12345678');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username_user` varchar(100) NOT NULL,
  `nama_user` varchar(200) NOT NULL,
  `email_user` varchar(200) NOT NULL,
  `hp_user` varchar(30) NOT NULL,
  `password_user` varchar(250) NOT NULL,
  `tgl_user` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `alamat` varchar(850) DEFAULT NULL,
  `status_user` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username_user`, `nama_user`, `email_user`, `hp_user`, `password_user`, `tgl_user`, `alamat`, `status_user`) VALUES
(0, '0', '0', '0', '0', '0', '2018-06-30 07:30:08', '0', 0),
(5, 'ramadhan', 'ramadhan ayyub', 'harun@gmail.com', '091231312', '$2y$10$VDjSPHeKGalvzVqMKpXCm.8ds8.gNBrOhvGJh0RwK1PcrPe3W3A4y', '2018-06-27 06:08:06', NULL, 0),
(6, 'ayyub', 'ayyub yeah', 'harun@gmail.com', '092312321', '$2y$10$i6Xu4YQmq3SNGtAcnQwnC.ROKPhUrZ7cJditWHx4SOxQjf6w3BTva', '2018-06-27 06:10:56', NULL, 0),
(7, 'sekar', 'Sekar Minati', 'sekar@sekar', '0821312', '$2y$10$Y3ZSsBwN277c0VtzNxuvsOg/SmLCtxE6C4Hcen7F55ewEq.1Hav9O', '2018-06-27 06:18:07', NULL, 0),
(8, 'yayang', 'Yayang Tri Wijaya', 'yayang@gmail.com', '08214345', '$2y$10$BC9sEPn.8FvWQ0G.u6BiN.t8chPR395S2FrHiARmMeqIEGuHQsJTW', '2018-06-27 06:19:50', NULL, 0),
(9, 'ulmun', 'Ulfa Mulya', 'harun@gmail.com', '08123123', '$2y$10$29ekbAOTD2TKqMKokRthbeAT8ELJrmJabInEeRQOJcTKRJmiUJTiy', '2018-06-27 06:22:37', NULL, 0),
(10, 'linap', 'Lina Puspitasari', 'linapuspita@gmail.com', '08312312', '$2y$10$bKbkvjaEF85HWmyRqGJCOuSljgR4C8/ve6yJw.rjzXDh0YRw2SOx2', '2018-06-27 06:25:40', NULL, 0),
(11, 'nur', 'nur', 'nu@gmail.com', '08123123', '$2y$10$Cevpo1mx8l8i51S/7nwYjuxaZZjq8u7aLmV7NcMOG24cWCc5sP75W', '2018-06-27 06:26:38', NULL, 0),
(12, 'nadia', 'Nadia Sholihah', 'nadia@gmail.com', '08213123', '$2y$10$217otlrS1pQXazklxpwNteMbAQy98YTiGwUrjKGKwp8GrxC/j8YB.', '2018-06-27 06:27:59', NULL, 0),
(13, 'aat', 'Syafaat Adi', 'aat@gmail.com', '0123012', '$2y$10$qF5.x2rI7tREnS9G3LezqO26h8XektKhEeYUXZ5YnJusMiFuv.SvG', '2018-06-27 07:13:34', 'Temanggung', 0),
(14, 'arilukman', 'Ari Lukman Purnawirawanto', 'ari@gmail.com', '12345678', '$2y$10$Sm4bxOgNDVCaJiHzNMl0sOV7YdlpC7baSixoAX1LRkwtRG5V.OVL.', '2018-06-27 07:15:22', 'Jogjakarta, Indonesia', 0),
(15, 'ardi', 'Ardi', 'ardi@gmail.com', '081234546', '$2y$10$ONEwoSbhR4vZ2Kz0QiqOeOawS6LlbEVthb6/4gHwcTE6VWcEk/JHO', '2018-06-27 07:16:46', 'Jogja', 0),
(16, 'dafa', 'dafa Rahman', 'dafa@gmail.com', '0812435676', '$2y$10$2WNTwVNwAXj37uT52sFExusPlJNd9wkfUVxL.Gaby2tViZEtoSBZ.', '2018-06-27 07:17:52', 'Gunungkidul', 0),
(17, 'Bintang', 'Bintang Panji', 'bintang@gmail.com', '081235467', '$2y$10$NiYpeHVTtGu3lmZPkuu5HOXoryc1TtEDUGAvATveBq10BEuz8TAZG', '2018-06-28 09:30:59', NULL, 0),
(18, 'Adit', 'Aditya Nugroho', 'adi@gmail.com', '08123456', '$2y$10$/R9BeFNKETrRBU2i4BUkpuDw3NePOFkNH9rNlAbMspjKfsNQY7l.W', '2018-06-28 09:38:10', NULL, 0),
(19, 'dea', 'dea nur nafi', 'dea@gmail.com', '0812345', '$2y$10$MG2AmFb.zuneU1p7.UFesOT3vI6Uq5Y9Ygah4BadABM4DUci4MEiy', '2018-06-28 09:39:48', 'Pati', 0),
(20, 'yeni', 'yeni wahyuti', 'yeni@gmail.com', '08123456', '$2y$10$Pfx/Hxwk752tf.7.x8lIiui9A7sfvZvzjgC9xORVDhySaKPRP7iFW', '2018-07-01 12:33:05', 'Klaten', 0),
(21, 'oscar123', 'oscar ln', 'osc@gmail.com', '0812312343', '$2y$10$0eTgPs.vbEH6TJ9WbzleyOQOk0Ts2a1d9YLxE.CX/y15jvCPP2kNy', '2018-07-02 08:43:18', 'yk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id_cart`),
  ADD KEY `trx` (`id_trx`),
  ADD KEY `pro` (`id_produk_cart`),
  ADD KEY `user` (`id_user_cart`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD PRIMARY KEY (`id_konfirmasi`),
  ADD KEY `j` (`id_kon_trx`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`),
  ADD KEY `kat` (`kategori_produk`);

--
-- Indexes for table `tentang`
--
ALTER TABLE `tentang`
  ADD PRIMARY KEY (`id_tentang`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `usr` (`user_trx`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id_cart` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  MODIFY `id_konfirmasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `tentang`
--
ALTER TABLE `tentang`
  MODIFY `id_tentang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `pro` FOREIGN KEY (`id_produk_cart`) REFERENCES `produk` (`id_produk`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `trx` FOREIGN KEY (`id_trx`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user_cart`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `konfirmasi`
--
ALTER TABLE `konfirmasi`
  ADD CONSTRAINT `j` FOREIGN KEY (`id_kon_trx`) REFERENCES `transaksi` (`id_transaksi`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `kat` FOREIGN KEY (`kategori_produk`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `usr` FOREIGN KEY (`user_trx`) REFERENCES `user` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
