-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2024 at 04:09 AM
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
-- Database: `efood`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_order`
--

CREATE TABLE `detail_order` (
  `id_detail_order` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `id_masakan` int(11) NOT NULL,
  `status_detail_order` varchar(64) NOT NULL,
  `jlh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `detail_order`
--

INSERT INTO `detail_order` (`id_detail_order`, `id_order`, `id_masakan`, `status_detail_order`, `jlh`) VALUES
(13, 1247, 1, 'status', 7),
(14, 1247, 2, 'status', 5),
(15, 15348, 1, 'status', 4),
(16, 87421, 3, 'status', 4),
(17, 87421, 2, 'status', 4),
(18, 87421, 1, 'status', 6),
(19, 90346, 1, 'status', 1),
(20, 82695, 1, 'status', 1),
(21, 51978, 1, 'status', 1),
(22, 51978, 2, 'status', 1),
(23, 70498, 8, 'status', 1),
(24, 30246, 9, 'status', 1),
(25, 30246, 4, 'status', 1),
(26, 50379, 14, 'status', 1),
(27, 50379, 3, 'status', 1),
(28, 40215, 2, 'status', 1),
(29, 82654, 2, 'status', 1),
(30, 82654, 16, 'status', 1),
(31, 7945, 3, 'status', 1),
(32, 95374, 11, 'status', 2),
(33, 73851, 10, 'status', 1),
(34, 73851, 16, 'status', 1),
(35, 12360, 17, 'status', 1);

-- --------------------------------------------------------

--
-- Table structure for table `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_menu` int(11) NOT NULL,
  `jlh` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'admin'),
(2, 'waiter'),
(3, 'kasir'),
(4, 'pelanggan');

-- --------------------------------------------------------

--
-- Table structure for table `masakan`
--

CREATE TABLE `masakan` (
  `id_masakan` int(11) NOT NULL,
  `nama_masakan` varchar(64) NOT NULL,
  `harga` varchar(64) NOT NULL,
  `status_masakan` varchar(64) NOT NULL,
  `foto` varchar(128) NOT NULL,
  `kategori` varchar(42) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `masakan`
--

INSERT INTO `masakan` (`id_masakan`, `nama_masakan`, `harga`, `status_masakan`, `foto`, `kategori`) VALUES
(2, 'Nasi Goreng Rendang', '29000', '1', 'nasi goreng spesial-62d95ed36e228.jpg', '-- Pilih Kategori --'),
(3, 'Pisang Bakar Keju Coklat', '15000', '1', 'soto medan ayam-soto.jpg', ''),
(10, 'Soup Buntut Rebus', '65000', '1', 'soup buntut rebus-soup.jpg', 'Starters'),
(11, 'Chicken Nugget', '15000', '1', 'chicken nugget-nuggetayam.jpg', 'Snacks'),
(12, 'Mie Kangkung Terasi', '19000', '1', 'mie kangkung terasi-miekangkung.jpg', 'Main Menu'),
(13, 'Nasi Black Paper', '25000', '1', 'nasi black paper-nasiblack.jpg', 'Main Menu'),
(14, 'Gado-gado Sayur', '20000', '1', 'gado-gado sayur-gadogado.jpg', 'Starters'),
(15, 'Soto Medan Ayam', '23000', '1', 'soto medan ayam-soto.jpg', 'Specialty'),
(16, 'Coffe Latte', '20000', '1', 'coffe latte-whatsapp image 2024-07-01 at 01.07.44.jpeg', 'Coffee'),
(17, 'Ice Cappucino Jelly', '20000', '1', 'ice cappucino jelly-whatsapp image 2024-07-01 at 01.09.10.jpeg', 'Coffee'),
(18, 'Ice Moca Cincau', '25000', '1', 'ice moca cincau-whatsapp image 2024-07-01 at 01.10.04.jpeg', 'Coffee'),
(19, 'Americano Ice', '25000', '1', 'americano ice-whatsapp image 2024-07-01 at 01.10.55.jpeg', 'Coffee'),
(20, 'Hasturi Special Coffe', '20000', '1', 'hasturi special coffe-whatsapp image 2024-07-01 at 01.11.36.jpeg', 'Coffee'),
(21, 'Espresso', '15000', '1', 'espresso-whatsapp image 2024-07-01 at 01.12.21.jpeg', 'Coffee'),
(22, 'Sour Aloe Vera', '22000', '1', 'sour aloe vera-whatsapp image 2024-07-01 at 01.41.14.jpeg', 'Healthy Drink'),
(23, 'Honet Ginger Spash', '20000', '1', 'honet ginger spash-whatsapp image 2024-07-01 at 01.42.09.jpeg', 'Healthy Drink'),
(24, 'Honey Lemong Gras', '20000', '1', 'honey lemong gras-whatsapp image 2024-07-01 at 01.42.52.jpeg', 'Healthy Drink'),
(25, 'Strawberry Milkshake', '23000', '1', 'strawberry milkshake-whatsapp image 2024-07-01 at 01.43.25.jpeg', 'Healthy Drink'),
(26, 'Vanilla Milkshake', '22000', '1', 'vanilla milkshake-whatsapp image 2024-07-01 at 01.43.58.jpeg', 'Healthy Drink'),
(27, 'Jus Alpukat', '15000', '1', 'jus alpukat-whatsapp image 2024-07-01 at 01.45.17.jpeg', 'Fresh Juice'),
(28, 'Jus Kedondong', '17000', '1', 'jus kedondong-whatsapp image 2024-07-01 at 01.46.11.jpeg', 'Fresh Juice');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id_order` int(11) NOT NULL,
  `no_meja` int(11) NOT NULL,
  `tanggal` varchar(64) NOT NULL,
  `id_user` int(11) NOT NULL,
  `keterangan` varchar(64) NOT NULL,
  `totalbayar` int(11) NOT NULL,
  `status_order` varchar(64) NOT NULL COMMENT 'diproses/selesai'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id_order`, `no_meja`, `tanggal`, `id_user`, `keterangan`, `totalbayar`, `status_order`) VALUES
(1247, 12, '2024-06-30 16:02:38', 3, 'Kakapnya tambah cabe, nasi gorengnya jangan asin', 657000, 'Di Bayar'),
(7945, 2, '2024-07-01 08:24:35', 3, 'keju yang banyak', 15000, 'Di Bayar'),
(12360, 11, '2024-07-01 08:53:43', 13, 'es nya jangan banyak', 20000, 'Di Bayar'),
(15348, 76, '2024-06-30 16:02:38', 3, 'Anu', 304000, 'Di Bayar'),
(30246, 2, '2024-07-01 01:09:34', 10, '', 49000, 'Di Bayar'),
(40215, 1, '2024-07-01 02:04:08', 11, 'jangan pedas pedas', 29000, 'Di Bayar'),
(50379, -3, '2024-07-01 02:00:11', 3, 'gado gado gak pakai sayur', 35000, 'Di Bayar'),
(51978, 5, '2024-07-01 00:49:51', 3, 'nasi goreng gausah pake nasi ', 29028, 'Di Bayar'),
(70498, 2, '2024-07-01 00:53:27', 5, 'gausah pake tahu', 14000, 'Di Bayar'),
(73851, 8, '2024-07-01 08:41:27', 12, 'sop jangan terlalu asin', 85000, 'Di Bayar'),
(82654, 4, '2024-07-01 02:31:57', 3, 'coffe nya tidak pakai gula', 49000, 'Di Bayar'),
(82695, 3, '2024-06-30 19:29:29', 3, 'gak pakai santan', 76000, 'Di Bayar'),
(87421, 15, '2024-06-30 17:42:15', 3, '-', 668000, 'Di Bayar'),
(90346, 9, '2024-06-30 18:14:33', 3, 'ajksd\r\n', 76000, 'Di Bayar'),
(95374, 3, '2024-07-01 08:30:46', 3, 'yang banyak', 30000, 'Di Bayar');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_order` int(11) NOT NULL,
  `tanggal` varchar(64) NOT NULL,
  `total_bayar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `id_user`, `id_order`, `tanggal`, `total_bayar`) VALUES
(4, 3, 1247, '2024-06-30 16:02:38', 657000),
(5, 3, 15348, '2024-06-30 16:02:38', 304000),
(6, 3, 87421, '2024-06-30 17:42:15', 668000),
(7, 3, 90346, '2024-06-30 18:14:33', 76000),
(8, 3, 82695, '2024-06-30 19:29:29', 76000),
(9, 3, 51978, '2024-07-01 00:49:51', 29028),
(10, 5, 70498, '2024-07-01 00:53:27', 14000),
(11, 10, 30246, '2024-07-01 01:09:34', 49000),
(12, 3, 50379, '2024-07-01 02:00:11', 35000),
(13, 11, 40215, '2024-07-01 02:04:08', 29000),
(14, 3, 82654, '2024-07-01 02:31:57', 49000),
(15, 3, 7945, '2024-07-01 08:24:35', 15000),
(16, 3, 95374, '2024-07-01 08:30:46', 30000),
(17, 12, 73851, '2024-07-01 08:41:27', 85000),
(18, 13, 12360, '2024-07-01 08:53:43', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(64) DEFAULT NULL,
  `nama_user` varchar(64) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL,
  `foto` varchar(128) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama_user`, `id_level`, `foto`, `deskripsi`) VALUES
(1, 'admin', 'admin', 'Admin', 1, 'marie.jpg', ''),
(2, 'kasir', 'kasir', 'Sumarsono', 3, 'kasir-marie.jpg', ''),
(3, 'susanti', 'susanti', 'Susanti', 4, NULL, ''),
(5, 'paijo', 'paijo', 'paijo', 4, 'paijo-img-20220215-wa0003.jpg', 'paijo'),
(9, 'fajar', 'fajar', 'fajar', 1, 'fajar-img-20220215-wa0003.jpg', 'b'),
(10, 'painem', 'painem', 'painem', 4, 'painem-whatsapp image 2023-08-14 at 14.32.59.jpg', 'b'),
(11, 'fitri', 'fitri', 'fitri', 4, NULL, NULL),
(12, 'putri', 'putri', 'putri', 4, NULL, NULL),
(13, 'sisi', 'sisi', 'sisi', 4, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_order`
--
ALTER TABLE `detail_order`
  ADD PRIMARY KEY (`id_detail_order`);

--
-- Indexes for table `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `masakan`
--
ALTER TABLE `masakan`
  ADD PRIMARY KEY (`id_masakan`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_order`
--
ALTER TABLE `detail_order`
  MODIFY `id_detail_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `masakan`
--
ALTER TABLE `masakan`
  MODIFY `id_masakan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id_order` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95375;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
