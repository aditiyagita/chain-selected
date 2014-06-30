-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 30 Jun 2014 pada 19.31
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_latihan`
--
CREATE DATABASE IF NOT EXISTS `db_latihan` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `db_latihan`;


-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE IF NOT EXISTS `kabupaten` (
  `idkabupaten` int(11) NOT NULL AUTO_INCREMENT,
  `idprovinsi` int(11) NOT NULL,
  `kabupaten` varchar(50) NOT NULL,
  PRIMARY KEY (`idkabupaten`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`idkabupaten`, `idprovinsi`, `kabupaten`) VALUES
(1, 2, 'Tangerang Selatan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `idprovinsi` int(11) NOT NULL AUTO_INCREMENT,
  `provinsi` varchar(50) NOT NULL,
  PRIMARY KEY (`idprovinsi`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`idprovinsi`, `provinsi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Banten');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
