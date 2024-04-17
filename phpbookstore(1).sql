-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Nov 2021 pada 15.59
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpbookstore`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(2, 'Minceu Cantip', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `id_ketegori` int(11) NOT NULL,
  `judul` varchar(120) NOT NULL,
  `gambar` text NOT NULL,
  `penerbit` varchar(100) NOT NULL,
  `pengarang` varchar(100) NOT NULL,
  `halaman` varchar(5) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `stok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `buku`
--

INSERT INTO `buku` (`id_buku`, `id_ketegori`, `judul`, `gambar`, `penerbit`, `pengarang`, `halaman`, `harga`, `stok`) VALUES
(24, 15, 'PHP', '20170217164739.jpg', 'PT. Asik', 'Annisa S.Kom, M.Kom', '100', '5000000', '16'),
(36, 15, '      The Pragmatic Programmer', '20211126142507.jpg', '             the Pragmatic Programmers and founders of the Pragmatic Bookshelf', '             David Thomas, Andrew Hunt', ' ', '', '   5751'),
(38, 15, 'Interpretation of Computer Programs', '20211126153842.jpg', '  	Pers MIT', '  	Harold Abelson , Gerald Jay Sussman', ' ', '', '  30'),
(39, 15, 'Introduction to Algorithms', '20211126154118.jpeg', '	MIT Press', '	Thomas H. Cormen Charles E. Leiserson Ronald L. Rivest Clifford Stein', '1312', '-', '11'),
(40, 15, 'Dasar-Dasar Pemrograman Dengan Python', '20211126154628.jpg', 'Deepublish', 'Wenty Dwi Yuniarti', '179', '-', '39'),
(41, 15, 'Pemrograman C: Soal dan Penyelesaian', '20211126154820.jpg', 'Penerbit ANDI', 'Rismon Hasiholan Sianipar', '282', '-', '94'),
(42, 15, '7 in 1 Pemrograman Web untuk Pemula', '20211126155042.jpg', 'Elex Media Komputindo', 'Pengarang:Rohi Abdulloh', '334', '-', '3'),
(43, 15, 'Pemrograman Dasar', '20211126155216.jpg', 'Deepublish', 'Mardi Turnip, Abdi Dharma', '15', '-', '11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `chekout`
--

CREATE TABLE `chekout` (
  `id_chekout` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nomor_tlp` varchar(20) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status_terima` enum('belum di terima','sudah diterima') NOT NULL,
  `active` enum('T','F','N') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `chekout`
--

INSERT INTO `chekout` (`id_chekout`, `id_pembeli`, `nama`, `alamat`, `nomor_tlp`, `tanggal`, `status_terima`, `active`) VALUES
(23, 8, '222', '232323', '232323', '21-05-2021', 'sudah diterima', 'F'),
(29, 26, 'dillah', 'kulon progo', '12345678', '24-05-2021', 'sudah diterima', 'F'),
(30, 27, 'xxx', 'solo', '12345678', '27-05-2021', 'sudah diterima', 'F'),
(31, 26, 'abdillah', 'kulpro', '12345678', '28-05-2021', 'sudah diterima', 'F'),
(32, 26, 'Abdilllah', 'kulon progo', '12345678', '28-05-2021', 'belum di terima', 'F'),
(33, 26, 'q', 'kulon progo', '123456', '28-05-2021', 'sudah diterima', 'F'),
(34, 26, 'Abdilllah', 'kulon progo', '12345678', '28-05-2021', 'belum di terima', 'F'),
(35, 26, 'abb', 'kulon progo', '12345678', '28-05-2021', 'sudah diterima', 'F'),
(36, 26, 'Abdilllah', 'kulon progo', '12345678', '28-05-2021', 'sudah diterima', 'F'),
(37, 26, 'Abdilllah', 'kulon progo', '12345678', '30-05-2021', 'sudah diterima', 'F'),
(38, 28, 'akakaka', 'zzzz', 'qewr', '24-11-2021', 'sudah diterima', 'F'),
(39, 28, '', '', '', '24-11-2021', 'sudah diterima', 'F');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `id_pembeli` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`id_pembeli`, `nama`, `username`, `password`) VALUES
(28, 'xabiru', 'xabiru', 'xabiru');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kategori`
--

CREATE TABLE `kategori` (
  `id_ketegori` int(11) NOT NULL,
  `kategori` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kategori`
--

INSERT INTO `kategori` (`id_ketegori`, `kategori`) VALUES
(14, 'Pendidikan'),
(15, 'Tehnologi Informatika'),
(16, 'Kewirausahaan'),
(18, 'Romance'),
(32, 'Horor');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keranjang`
--

CREATE TABLE `keranjang` (
  `id_keranjang` int(11) NOT NULL,
  `id_pembeli` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL,
  `id_chekout` int(11) NOT NULL,
  `qty` varchar(50) NOT NULL,
  `harga` varchar(50) NOT NULL,
  `total_harga` varchar(50) NOT NULL,
  `total_bayar` varchar(50) NOT NULL,
  `status` enum('new','old') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `keranjang`
--

INSERT INTO `keranjang` (`id_keranjang`, `id_pembeli`, `id_buku`, `id_chekout`, `qty`, `harga`, `total_harga`, `total_bayar`, `status`) VALUES
(16, 13, 26, 23, '1', ' 99000000', '99000000', '', 'old'),
(52, 8, 21, 28, '1', ' 1000000', '1000000', '', 'old'),
(55, 27, 21, 30, '1', '  300000', '300000', '', 'old');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indeks untuk tabel `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`);

--
-- Indeks untuk tabel `chekout`
--
ALTER TABLE `chekout`
  ADD PRIMARY KEY (`id_chekout`);

--
-- Indeks untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_pembeli`);

--
-- Indeks untuk tabel `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_ketegori`);

--
-- Indeks untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  ADD PRIMARY KEY (`id_keranjang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT untuk tabel `chekout`
--
ALTER TABLE `chekout`
  MODIFY `id_chekout` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT untuk tabel `customer`
--
ALTER TABLE `customer`
  MODIFY `id_pembeli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT untuk tabel `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_ketegori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT untuk tabel `keranjang`
--
ALTER TABLE `keranjang`
  MODIFY `id_keranjang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
