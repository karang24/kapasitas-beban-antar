-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2016 at 06:39 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbsiskba`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_kantor`
--

CREATE TABLE IF NOT EXISTS `tb_kantor` (
  `id_kantor` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kantor` varchar(25) NOT NULL,
  `id_regional` int(11) NOT NULL,
  PRIMARY KEY (`id_kantor`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=59401 ;

--
-- Dumping data for table `tb_kantor`
--

INSERT INTO `tb_kantor` (`id_kantor`, `nama_kantor`, `id_regional`) VALUES
(59200, 'REMBANG', 5),
(59300, 'KUDUS', 5),
(59400, 'JEPARA', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kba`
--

CREATE TABLE IF NOT EXISTS `tb_kba` (
  `id_kba` int(11) NOT NULL AUTO_INCREMENT,
  `t_pengiriman` date NOT NULL,
  `jumlah` int(5) NOT NULL,
  `terkirim` int(11) NOT NULL,
  `nippos` int(11) NOT NULL,
  `id_kantor` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_kba`),
  KEY `id_user` (`nippos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=234790 ;

--
-- Dumping data for table `tb_kba`
--

INSERT INTO `tb_kba` (`id_kba`, `t_pengiriman`, `jumlah`, `terkirim`, `nippos`, `id_kantor`) VALUES
(12367, '2016-09-15', 100, 95, 1113, 59400),
(13456, '2016-07-08', 40, 35, 1112, 59400),
(13457, '2016-07-07', 90, 90, 1112, 59400),
(13567, '2016-07-01', 150, 145, 12345, 59400),
(14567, '2016-09-01', 100, 96, 123456789, 59400),
(23456, '2016-07-06', 80, 78, 1111, 59400),
(23467, '2016-09-03', 200, 100, 12345, 59400),
(23567, '2016-08-01', 90, 45, 1112, 59400),
(125791, '2016-08-19', 20, 19, 1133094, 59400),
(125792, '2016-08-20', 30, 28, 1133094, 59400),
(125793, '2016-08-21', 30, 28, 1133094, 59400),
(234567, '0000-00-00', 80, 75, 1112, 59400),
(234789, '0000-00-00', 90, 90, 1118, 59400);

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE IF NOT EXISTS `tb_petugas` (
  `nippos` int(11) NOT NULL,
  `Nama_petugas` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `id_kantor` int(20) DEFAULT NULL,
  PRIMARY KEY (`nippos`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`nippos`, `Nama_petugas`, `alamat`, `jabatan`, `no_hp`, `id_kantor`) VALUES
(1111, 'Emen', 'Kedung', 'Pengantar Pos', '095269518566', 59400),
(1112, 'Udin', 'Ngabul', 'Pengantar Pos', '085472615141', 59400),
(1113, 'Sule', 'Pecangaan', 'Pengantar Pos', '088961514132', 59400),
(1114, 'Ponjco', 'Jepara Kota', 'Pengantar Pos', '085213413123', 59400),
(1115, 'Feri', 'Batealit', 'Pengantar Pos', '085231456541', 59400),
(1116, 'Klinting', 'Blablakan', 'Pengantar Pos', '085431234356', 59400),
(1117, 'Wahib', 'Kembang', 'Pengantar Pos', '085214545656', 59400),
(1118, 'agus', 'ngabul', 'pengantar pos', '02827272728', 59400),
(12345, 'andi juliansyah', 'bandung', 'Pengantar POS', '0857443234', 59400),
(1133094, 'Aziz', 'Jepara', 'SPV', '08576680543', 59400),
(123456789, 'penguji pengantar 1', 'bandung', 'Pengantar POS', '2922929292929', 59400);

-- --------------------------------------------------------

--
-- Table structure for table `tb_regional`
--

CREATE TABLE IF NOT EXISTS `tb_regional` (
  `id_regional` int(10) NOT NULL AUTO_INCREMENT,
  `nama_regional` varchar(25) NOT NULL,
  PRIMARY KEY (`id_regional`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_regional`
--

INSERT INTO `tb_regional` (`id_regional`, `nama_regional`) VALUES
(5, 'jawa tengah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_rekap`
--

CREATE TABLE IF NOT EXISTS `tb_rekap` (
  `id_rekap` int(11) NOT NULL AUTO_INCREMENT,
  `tgl_rekap` date NOT NULL,
  `nippos` int(11) NOT NULL,
  `presentase` varchar(15) NOT NULL,
  `status` varchar(15) NOT NULL,
  `id_kantor` int(20) DEFAULT NULL,
  PRIMARY KEY (`id_rekap`),
  KEY `nippos` (`nippos`),
  KEY `nippos_2` (`nippos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_rekap`
--

INSERT INTO `tb_rekap` (`id_rekap`, `tgl_rekap`, `nippos`, `presentase`, `status`, `id_kantor`) VALUES
(1, '2016-08-25', 1112, '50', '', 59400),
(2, '2016-08-26', 1111, '97.5', 'Bonnus 46800', 59400),
(3, '2016-08-26', 1111, '97.5', 'Bonnus 46800', 59400),
(4, '2016-08-26', 0, '0', '', 59400),
(5, '2016-08-30', 1113, '95', '38000', 59400),
(6, '2016-08-30', 123456789, '96', '38400', 59400),
(7, '2016-08-31', 12345, '96.666666666667', 'Bonnus 87000', 59400),
(8, '2016-09-02', 12345, '50', '', 59400);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_kantor` int(20) DEFAULT NULL,
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL,
  `nippos` int(11) NOT NULL,
  PRIMARY KEY (`id_user`),
  KEY `nippos` (`nippos`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4132233 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_kantor`, `id_user`, `username`, `password`, `level`, `nippos`) VALUES
(59400, 16, 'mandor', 'mandor', '2', 1133094),
(59400, 17, 'admin', 'admin', '3', 1133094),
(59400, 18, 'kkp', 'kkp', '1', 1133094),
(59300, 19, 'mandorkudus', 'mandorkudus', '4', 1133094),
(59300, 20, 'spvkudus', 'spvkudus', '5', 1133094),
(59300, 21, 'kkpkudus', 'kkpkudus', '6', 1133094),
(59200, 22, 'spvrembang', 'spvrembang', '8', 1133094),
(59200, 23, 'mandorrembang', 'mandorrembang', '7', 1133094),
(59200, 24, 'kkprembang', 'kkprembang', '9', 1133094),
(5, 123, 'regional', 'regional', '10', 1133094),
(59400, 4132232, 'kudus', 'kudus', '5', 123456789);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_kba`
--
ALTER TABLE `tb_kba`
  ADD CONSTRAINT `tb_kba_ibfk_1` FOREIGN KEY (`nippos`) REFERENCES `tb_petugas` (`nippos`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD CONSTRAINT `tb_user_ibfk_1` FOREIGN KEY (`nippos`) REFERENCES `tb_petugas` (`nippos`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
