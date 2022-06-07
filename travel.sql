-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Des 2020 pada 14.17
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.2.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_destinasi`
--

CREATE TABLE `daftar_destinasi` (
  `destinasi` varchar(100) NOT NULL,
  `no_destinasi` varchar(11) NOT NULL,
  `harga_destinasi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_destinasi`
--

INSERT INTO `daftar_destinasi` (`destinasi`, `no_destinasi`, `harga_destinasi`, `gambar`, `deskripsi`) VALUES
('Jakarta', '11', '10000000', 'jakarta.jpg', 'Mantep pokok e, Monggo di order and get discount!!'),
('Jawa Barat', '22', '9000000', 'jabar.jpg', 'Mantep pokok e, Monggo di order and get discount!!'),
('Jawa Tengah', '33', '8000000', 'jateng.jpg', 'Mantep pokok e, Monggo di order and get discount!!'),
('Jawa Timur', '44', '9000000', 'jatim.jpg', 'Mantep pokok e, Monggo di order and get discount!!'),
('Bali', '55', '1000000', 'bali.jpg', 'Mantep pokok e, Monggo di order and get discount!!');

-- --------------------------------------------------------

--
-- Struktur dari tabel `daftar_travel`
--

CREATE TABLE `daftar_travel` (
  `nama_travel` varchar(100) NOT NULL,
  `no_travel` varchar(8) NOT NULL,
  `kapasitas` varchar(100) NOT NULL,
  `harga_travel` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `deskripsi` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `daftar_travel`
--

INSERT INTO `daftar_travel` (`nama_travel`, `no_travel`, `kapasitas`, `harga_travel`, `gambar`, `deskripsi`) VALUES
('Bus Sangar', '11', '60', '10000000', 'bus1.jpg', 'Bus Termewah Sedunia, AC nya dingin kayak di kutub, Full musik, Supirnya Santuy'),
('aaaa', '123', '44', '200000000', '3.jpg', 'Deskripsi'),
('Bus Sontoloyoo', '22', '70', '15000000', 'bus2.jpg', 'Bus Termewah Sedunia, AC nya dingin kayak di kutub, Full musik, Supirnya Santuy'),
('Bus Anjay', '33', '75', '14000000', 'bus3.jpg', 'Bus Termewah Sedunia, AC nya dingin kayak di kutub, Full musik, Supirnya Santuy'),
('Bus Josh', '44', '80', '18000000', 'bus4.jpg', 'Bus Termewah Sedunia, AC nya dingin kayak di kutub, Full musik, Supirnya Santuy'),
('Bus Misqueen', '55', '55', '8000000', 'bus5.jpg', 'Bus Termewah Sedunia, AC nya dingin kayak di kutub, Full musik, Supirnya Santuy'),
('Bus Mantaps', '69', '69', '6900000', 'bus6.jpg', 'Bus Termewah Sedunia, AC nya dingin kayak di kutub, Full musik, Supirnya Santuy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telp` varchar(100) NOT NULL,
  `travel` varchar(100) NOT NULL,
  `destinasi` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`nama`, `email`, `telp`, `travel`, `destinasi`, `gambar`) VALUES
('Wangcai', 'irfnprtm@sutdent.uns.ac.id', '089765566', 'Bus Ngentuy', 'Bali', 'cat.jpg'),
('Fucexxx', 'fucek@gmail.com', '08xxxxxx', 'Bus Sontoloyoo', 'Jawa Tengah', '2.jpg'),
('Anjin9', 'njing.com', '0999999', 'Bus Anjay', 'Jawa Timur', '3.jpg'),
('Babi ', 'baabi@gmail.com', '69696969', 'Bus Misqueen', 'Jawa Tengah', '1.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('aaa', '111'),
('anjay', '123'),
('berak', '321'),
('fucex', 'asd'),
('irfan', 'asas');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `daftar_destinasi`
--
ALTER TABLE `daftar_destinasi`
  ADD PRIMARY KEY (`no_destinasi`);

--
-- Indeks untuk tabel `daftar_travel`
--
ALTER TABLE `daftar_travel`
  ADD PRIMARY KEY (`no_travel`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`telp`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
