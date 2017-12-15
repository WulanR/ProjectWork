-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2017 at 05:51 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `web_malang`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID_ADMIN` int(11) NOT NULL AUTO_INCREMENT,
  `USERNAME` varchar(50) DEFAULT NULL,
  `PASSWORD` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID_ADMIN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID_ADMIN`, `USERNAME`, `PASSWORD`) VALUES
(1, 'wulan', 'aae79912250d18756900f742270de7e1'),
(7, 'rohmadani', '22c276a05aa7c90566ae2175bcc2a9b0'),
(8, 'sheila', '66dcaf1b4f523b9cc54d3aeba25c1fc1'),
(9, 'sheila', '7d4ef62de50874a4db33e6da3ff79f75'),
(10, 'sheila', '83b9954b0e2748eba569e34b1df7927f'),
(11, 'faris', 'fe47191d92ec591808e3ac57de6293d8');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE IF NOT EXISTS `budget` (
  `ID_BUDGET` int(11) NOT NULL AUTO_INCREMENT,
  `ID_TEMPAT` int(11) DEFAULT NULL,
  `ID_KULINER` int(11) DEFAULT NULL,
  `KATEGORI` varchar(1024) DEFAULT NULL,
  `JUMLAH` varchar(1024) DEFAULT NULL,
  PRIMARY KEY (`ID_BUDGET`),
  KEY `FK_MEMILIKI` (`ID_KULINER`),
  KEY `FK_MEMPUNYAI` (`ID_TEMPAT`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tempat_kuliner`
--

CREATE TABLE IF NOT EXISTS `tempat_kuliner` (
  `ID_KULINER` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NAMA_KULINER` varchar(1024) DEFAULT NULL,
  `HARGA_KULINER` varchar(1024) DEFAULT NULL,
  `KETERANGAN` varchar(1024) DEFAULT NULL,
  `ALAMAT_KULINER` varchar(1024) NOT NULL,
  `FOTO` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_KULINER`),
  KEY `FK_MENAMBAH` (`ID_ADMIN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `tempat_kuliner`
--

INSERT INTO `tempat_kuliner` (`ID_KULINER`, `ID_ADMIN`, `NAMA_KULINER`, `HARGA_KULINER`, `KETERANGAN`, `ALAMAT_KULINER`, `FOTO`) VALUES
(2, 10, 'we', '233', 'rt', 'rf', ''),
(3, 10, 'q', '32', 'qwww', 'edji', ''),
(6, 1, 'tyu', '682436', 'nasdkljdlsajdl;a;dla\r\nasndkjdlks\r\nadnklsjsl', 'kdal', '');

-- --------------------------------------------------------

--
-- Table structure for table `tempat_wisata`
--

CREATE TABLE IF NOT EXISTS `tempat_wisata` (
  `ID_TEMPAT` int(11) NOT NULL AUTO_INCREMENT,
  `ID_ADMIN` int(11) DEFAULT NULL,
  `NAMA_TEMPAT` varchar(1024) DEFAULT NULL,
  `ALAMAT_WISATA` varchar(1024) DEFAULT NULL,
  `KETERANGAN` varchar(1024) DEFAULT NULL,
  `HARGA_WISATA` varchar(1024) DEFAULT NULL,
  `FOTO` varchar(100) NOT NULL,
  PRIMARY KEY (`ID_TEMPAT`),
  KEY `FK_MENAMBAHKAN` (`ID_ADMIN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `tempat_wisata`
--

INSERT INTO `tempat_wisata` (`ID_TEMPAT`, `ID_ADMIN`, `NAMA_TEMPAT`, `ALAMAT_WISATA`, `KETERANGAN`, `HARGA_WISATA`, `FOTO`) VALUES
(8, 1, 'smk telkom', 'd', 'd', '30', ''),
(12, 10, 'w', 'iuh', 'bc', '324', ''),
(13, 10, 're', '5t', '5t', '229', ''),
(14, 1, 'nb', 'nn', 'hj', '890', '');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `budget`
--
ALTER TABLE `budget`
  ADD CONSTRAINT `FK_MEMILIKI` FOREIGN KEY (`ID_KULINER`) REFERENCES `tempat_kuliner` (`ID_KULINER`),
  ADD CONSTRAINT `FK_MEMPUNYAI` FOREIGN KEY (`ID_TEMPAT`) REFERENCES `tempat_wisata` (`ID_TEMPAT`);

--
-- Constraints for table `tempat_kuliner`
--
ALTER TABLE `tempat_kuliner`
  ADD CONSTRAINT `FK_MENAMBAH` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

--
-- Constraints for table `tempat_wisata`
--
ALTER TABLE `tempat_wisata`
  ADD CONSTRAINT `FK_MENAMBAHKAN` FOREIGN KEY (`ID_ADMIN`) REFERENCES `admin` (`ID_ADMIN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
