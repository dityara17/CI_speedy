-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Bulan Mei 2020 pada 09.26
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci_speady`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id_category` int(11) NOT NULL,
  `c_name` varchar(255) NOT NULL,
  `parent` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id_category`, `c_name`, `parent`) VALUES
(1, 'Teach', 0),
(2, 'PC PARTS', 1),
(3, 'GAMING', 1),
(4, 'MOBILE', 1),
(6, 'GAME', 0),
(7, 'APPAREL', 0),
(8, 'GENERAL', 0),
(9, 'COD', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `desc` text NOT NULL,
  `html` text NOT NULL,
  `p_price` varchar(255) NOT NULL,
  `s_price` varchar(255) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `html`, `p_price`, `s_price`, `category_id`) VALUES
(2, 'J 78 ', 'mobile smartphone hehehe', '<a target=\"_blank\" href=\"https://www.amazon.com/gp/product/B086KMYNSS/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B086KMYNSS&linkCode=as2&tag=xtified-20&linkId=57328c06e9507e1399b9adb6fc480f31\"><img border=\"0\" src=\"//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B086KMYNSS&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=xtified-20\" ></a><img src=\"//ir-na.amazon-adsystem.com/e/ir?t=xtified-20&l=am2&o=1&a=B086KMYNSS\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />', '400', '300', 2),
(3, 'Maskeh', 'ad', '<a target=\"_blank\" href=\"https://www.amazon.com/gp/product/B086KMYNSS/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B086KMYNSS&linkCode=as2&tag=xtified-20&linkId=57328c06e9507e1399b9adb6fc480f31\"><img border=\"0\" src=\"//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&MarketPlace=US&ASIN=B086KMYNSS&ServiceVersion=20070822&ID=AsinImage&WS=1&Format=_SL160_&tag=xtified-20\" ></a><img src=\"//ir-na.amazon-adsystem.com/e/ir?t=xtified-20&l=am2&o=1&a=B086KMYNSS\" width=\"1\" height=\"1\" border=\"0\" alt=\"\" style=\"border:none !important; margin:0px !important;\" />', '90', '44', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id_category`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id_category` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
