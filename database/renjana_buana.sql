-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Bulan Mei 2024 pada 23.12
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `renjana_buana`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `merchandise`
--

CREATE TABLE `merchandise` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(50) NOT NULL,
  `desc` text NOT NULL,
  `img` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `merchandise`
--

INSERT INTO `merchandise` (`id`, `name`, `price`, `desc`, `img`) VALUES
(1, 'Baju', '2000000', 'Baju Untuk Sehari hari', 'baju.jpg'),
(2, 'Bucket', '10000', 'Bucket Untuk Naik Gunung', 'bucket.jpg'),
(3, 'Tas Gunung', '50000', 'Tas Untuk Naik Gunung', 'tas.jpg'),
(4, 'Sepatu', '100000', 'Sepatu Untuk Naik Gunung', 'sepatu.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(11) NOT NULL,
  `transaction_number` varchar(255) NOT NULL,
  `merch_id` int(11) NOT NULL,
  `nama_pembeli` varchar(100) NOT NULL,
  `alamat_pembeli` text NOT NULL,
  `nama_penerima` varchar(100) NOT NULL,
  `alamat_penerima` text NOT NULL,
  `nohp_penerima` varchar(20) NOT NULL,
  `price` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `transaction_number`, `merch_id`, `nama_pembeli`, `alamat_pembeli`, `nama_penerima`, `alamat_penerima`, `nohp_penerima`, `price`, `created_at`) VALUES
(1, '20240520001', 2, 'Bayu ', 'Pamulang Barat', 'Rio ', 'Bekasi', '08569752345142', '10000', '2024-05-20 05:20:41'),
(2, '20240522002', 1, 'dakhdjsa', 'dakjusdhasnduahs', 'dabsjdbajks', 'adsnjasd', '12830912830912', '15000', '2024-05-22 13:26:34'),
(3, '20240522003', 3, 'test', 'test', 'test', 'test', '085697951582', '50000', '2024-05-22 13:30:07'),
(4, '20240522004', 1, 'wwe', 'dqwad', 'daafa', 'cbgcn', '4564654', '15000', '2024-05-22 15:59:04');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `merchandise`
--
ALTER TABLE `merchandise`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
