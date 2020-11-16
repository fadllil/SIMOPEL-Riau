-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2020 at 03:57 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simopel_riau`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(26, '2020_10_25_105936_tb_op_pel', 1),
(27, '2020_10_26_081358_tb_bm_pel', 1),
(28, '2020_10_26_132717_tb_op_pny', 1),
(29, '2020_10_26_141108_tb_op_tukstersus', 1),
(30, '2020_10_26_142533_tb_bm_tukstersus', 1),
(31, '2020_10_27_074350_tb_bm_pny', 1),
(32, '2020_11_05_083042_tb_fasilitas_pel_pny', 1),
(33, '2020_11_09_233305_tb_sewa_perairan', 2),
(34, '2020_11_10_192958_tb_pajak', 3),
(35, '2020_11_10_202455_tb_pajak', 4),
(36, '2020_11_10_203634_tb_pajak', 5),
(37, '2020_11_10_205312_tb_pajak', 6),
(38, '2020_11_11_204523_tb_fasilitas_pel_pny', 7),
(39, '2020_11_11_210211_tb_fasilitas', 8),
(40, '2020_11_11_210431_tb_fasilitas_darat_pelpny', 8),
(41, '2020_11_11_211204_tb_fasilitas', 9),
(42, '2020_11_11_211526_tb_fasilitas_perairan_pelpny', 9),
(43, '2020_11_11_212207_tb_fasilitas_peralatan_pelpny', 10),
(44, '2020_11_11_212840_tb_fasilitas_sarana_pelpny', 11),
(45, '2020_11_11_213435_tb_fasilitas_perairan_pelpny', 12),
(46, '2020_11_11_213552_tb_fasilitas_sarana_pelpny', 13),
(47, '2020_11_12_165035_tb_fasilitas_darat_tukstersus', 14),
(48, '2020_11_12_170853_tb_fasilitas_perairan_tukstersus', 15),
(49, '2020_11_12_194045_tb_sewa_perairan', 16),
(50, '2020_11_12_195330_tb_sewa_perairan', 17),
(51, '2020_11_12_200206_tb_op_pel', 18),
(52, '2020_11_12_201237_tb_bm_pel', 19),
(53, '2020_11_12_201731_tb_op_pny', 20),
(54, '2020_11_12_202458_tb_bm_pny', 21),
(55, '2020_11_12_203838_tb_op_tukstersus', 22),
(56, '2020_11_12_204430_tb_bm_tukstersus', 23),
(57, '2020_11_12_204913_tb_penjualan_pas_masuk', 24),
(58, '2020_11_13_201633_tb_kp_perla', 25),
(59, '2020_11_13_233326_tb_kp_bongkarmuat', 26),
(60, '2020_11_14_005013_tb_kp_pengurusantransportasi', 27),
(61, '2020_11_16_114134_tb_kp_pengurusantransportasi', 28),
(62, '2020_11_16_172315_tb_admin', 29),
(63, '2020_11_16_175925_tb_surat', 30),
(64, '2020_11_16_180257_tb_surat', 31),
(65, '2020_11_16_181030_tb_surat', 32);

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id`, `id_user`, `nama`, `jabatan`) VALUES
(1, 1, 'Admin', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bm_pel`
--

CREATE TABLE `tb_bm_pel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelabuhan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_b_tgl` date NOT NULL,
  `adn_b_lb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_b_pt` int(11) NOT NULL,
  `adn_b_hewan` int(11) NOT NULL,
  `adn_b_peti` int(11) NOT NULL,
  `adn_b_jumlah` int(11) NOT NULL,
  `adn_b_barang` int(11) NOT NULL,
  `adn_b_volume` double NOT NULL,
  `adn_m_tgl` date NOT NULL,
  `adn_m_lm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_m_pn` int(11) NOT NULL,
  `adn_m_hewan` int(11) NOT NULL,
  `adn_m_peti` int(11) NOT NULL,
  `adn_m_jumlah` int(11) NOT NULL,
  `adn_m_barang` int(11) NOT NULL,
  `adn_m_volume` double NOT NULL,
  `aln_b_tgl` date NOT NULL,
  `aln_b_lb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aln_b_pt` int(11) NOT NULL,
  `aln_b_hewan` int(11) NOT NULL,
  `aln_b_peti` int(11) NOT NULL,
  `aln_b_jumlah` int(11) NOT NULL,
  `aln_b_barang` int(11) NOT NULL,
  `aln_b_volume` double NOT NULL,
  `aln_m_tgl` date NOT NULL,
  `aln_m_lm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aln_m_pn` int(11) NOT NULL,
  `aln_m_hewan` int(11) NOT NULL,
  `aln_m_peti` int(11) NOT NULL,
  `aln_m_jumlah` int(11) NOT NULL,
  `aln_m_barang` int(11) NOT NULL,
  `aln_m_volume` double NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bm_pel`
--

INSERT INTO `tb_bm_pel` (`id`, `id_pelabuhan`, `nama_perusahaan`, `nama_kapal`, `adn_b_tgl`, `adn_b_lb`, `adn_b_pt`, `adn_b_hewan`, `adn_b_peti`, `adn_b_jumlah`, `adn_b_barang`, `adn_b_volume`, `adn_m_tgl`, `adn_m_lm`, `adn_m_pn`, `adn_m_hewan`, `adn_m_peti`, `adn_m_jumlah`, `adn_m_barang`, `adn_m_volume`, `aln_b_tgl`, `aln_b_lb`, `aln_b_pt`, `aln_b_hewan`, `aln_b_peti`, `aln_b_jumlah`, `aln_b_barang`, `aln_b_volume`, `aln_m_tgl`, `aln_m_lm`, `aln_m_pn`, `aln_m_hewan`, `aln_m_peti`, `aln_m_jumlah`, `aln_m_barang`, `aln_m_volume`, `ket`) VALUES
(1, 10, 'PT. Surya Sumber Jasa', 'bg', '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '1s');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bm_pny`
--

CREATE TABLE `tb_bm_pny` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyeberangan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_b_tgl` date NOT NULL,
  `adn_b_lb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_b_pt` int(11) NOT NULL,
  `adn_b_gol1` int(11) NOT NULL,
  `adn_b_gol2` int(11) NOT NULL,
  `adn_b_gol3` int(11) NOT NULL,
  `adn_b_gol4` int(11) NOT NULL,
  `adn_b_gol5` int(11) NOT NULL,
  `adn_b_gol6` int(11) NOT NULL,
  `adn_b_gol7` int(11) NOT NULL,
  `adn_m_tgl` date NOT NULL,
  `adn_m_lm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_m_pn` int(11) NOT NULL,
  `adn_m_gol1` int(11) NOT NULL,
  `adn_m_gol2` int(11) NOT NULL,
  `adn_m_gol3` int(11) NOT NULL,
  `adn_m_gol4` int(11) NOT NULL,
  `adn_m_gol5` int(11) NOT NULL,
  `adn_m_gol6` int(11) NOT NULL,
  `adn_m_gol7` int(11) NOT NULL,
  `aln_b_tgl` date NOT NULL,
  `aln_b_lb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aln_b_pt` int(11) NOT NULL,
  `aln_b_gol1` int(11) NOT NULL,
  `aln_b_gol2` int(11) NOT NULL,
  `aln_b_gol3` int(11) NOT NULL,
  `aln_b_gol4` int(11) NOT NULL,
  `aln_b_gol5` int(11) NOT NULL,
  `aln_b_gol6` int(11) NOT NULL,
  `aln_b_gol7` int(11) NOT NULL,
  `aln_m_tgl` date NOT NULL,
  `aln_m_lm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aln_m_pn` int(11) NOT NULL,
  `aln_m_gol1` int(11) NOT NULL,
  `aln_m_gol2` int(11) NOT NULL,
  `aln_m_gol3` int(11) NOT NULL,
  `aln_m_gol4` int(11) NOT NULL,
  `aln_m_gol5` int(11) NOT NULL,
  `aln_m_gol6` int(11) NOT NULL,
  `aln_m_gol7` int(11) NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bm_pny`
--

INSERT INTO `tb_bm_pny` (`id`, `id_penyeberangan`, `nama_perusahaan`, `nama_kapal`, `adn_b_tgl`, `adn_b_lb`, `adn_b_pt`, `adn_b_gol1`, `adn_b_gol2`, `adn_b_gol3`, `adn_b_gol4`, `adn_b_gol5`, `adn_b_gol6`, `adn_b_gol7`, `adn_m_tgl`, `adn_m_lm`, `adn_m_pn`, `adn_m_gol1`, `adn_m_gol2`, `adn_m_gol3`, `adn_m_gol4`, `adn_m_gol5`, `adn_m_gol6`, `adn_m_gol7`, `aln_b_tgl`, `aln_b_lb`, `aln_b_pt`, `aln_b_gol1`, `aln_b_gol2`, `aln_b_gol3`, `aln_b_gol4`, `aln_b_gol5`, `aln_b_gol6`, `aln_b_gol7`, `aln_m_tgl`, `aln_m_lm`, `aln_m_pn`, `aln_m_gol1`, `aln_m_gol2`, `aln_m_gol3`, `aln_m_gol4`, `aln_m_gol5`, `aln_m_gol6`, `aln_m_gol7`, `ket`) VALUES
(1, '6', 'PT. Surya Sumber Jasa', 'bg', '2020-11-12', '1', 1, 1, 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, 1, 1, '12');

-- --------------------------------------------------------

--
-- Table structure for table `tb_bm_tukstersus`
--

CREATE TABLE `tb_bm_tukstersus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tukstersus` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_b_tgl` date NOT NULL,
  `adn_b_lb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_b_pt` int(11) NOT NULL,
  `adn_b_hewan` int(11) NOT NULL,
  `adn_b_peti` int(11) NOT NULL,
  `adn_b_jumlah` int(11) NOT NULL,
  `adn_b_barang` int(11) NOT NULL,
  `adn_b_volume` double NOT NULL,
  `adn_m_tgl` date NOT NULL,
  `adn_m_lm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adn_m_pn` int(11) NOT NULL,
  `adn_m_hewan` int(11) NOT NULL,
  `adn_m_peti` int(11) NOT NULL,
  `adn_m_jumlah` int(11) NOT NULL,
  `adn_m_barang` int(11) NOT NULL,
  `adn_m_volume` double NOT NULL,
  `aln_b_tgl` date NOT NULL,
  `aln_b_lb` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aln_b_pt` int(11) NOT NULL,
  `aln_b_hewan` int(11) NOT NULL,
  `aln_b_peti` int(11) NOT NULL,
  `aln_b_jumlah` int(11) NOT NULL,
  `aln_b_barang` int(11) NOT NULL,
  `aln_b_volume` double NOT NULL,
  `aln_m_tgl` date NOT NULL,
  `aln_m_lm` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aln_m_pn` int(11) NOT NULL,
  `aln_m_hewan` int(11) NOT NULL,
  `aln_m_peti` int(11) NOT NULL,
  `aln_m_jumlah` int(11) NOT NULL,
  `aln_m_barang` int(11) NOT NULL,
  `aln_m_volume` double NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_bm_tukstersus`
--

INSERT INTO `tb_bm_tukstersus` (`id`, `id_tukstersus`, `nama_perusahaan`, `nama_kapal`, `adn_b_tgl`, `adn_b_lb`, `adn_b_pt`, `adn_b_hewan`, `adn_b_peti`, `adn_b_jumlah`, `adn_b_barang`, `adn_b_volume`, `adn_m_tgl`, `adn_m_lm`, `adn_m_pn`, `adn_m_hewan`, `adn_m_peti`, `adn_m_jumlah`, `adn_m_barang`, `adn_m_volume`, `aln_b_tgl`, `aln_b_lb`, `aln_b_pt`, `aln_b_hewan`, `aln_b_peti`, `aln_b_jumlah`, `aln_b_barang`, `aln_b_volume`, `aln_m_tgl`, `aln_m_lm`, `aln_m_pn`, `aln_m_hewan`, `aln_m_peti`, `aln_m_jumlah`, `aln_m_barang`, `aln_m_volume`, `ket`) VALUES
(1, 5, 'PTDumai', 'bg', '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '2020-11-12', '1', 1, 1, 1, 1, 1, 1, '2020-11-13', '1', 1, 1, 1, 1, 1, 1, '1s');

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas`
--

CREATE TABLE `tb_fasilitas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas`
--

INSERT INTO `tb_fasilitas` (`id`, `id_user`) VALUES
(5, 35),
(7, 37),
(9, 39),
(10, 40);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_darat_pelpny`
--

CREATE TABLE `tb_fasilitas_darat_pelpny` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `luas_darat` double DEFAULT NULL,
  `perkantoran` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timbangan` int(11) DEFAULT NULL,
  `bengkel` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uplc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tplb3` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `power_plan` int(11) DEFAULT NULL,
  `tanki_bbm` int(11) DEFAULT NULL,
  `tanki_air` int(11) DEFAULT NULL,
  `bangunan_utility` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gardu_listrik_pln` int(11) DEFAULT NULL,
  `tempat_penimbunan` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kantor_d_pos` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `musholla_d_kantin` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gudang_tertutup` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gudang_terbuka` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mess` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kbkki` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas_darat_pelpny`
--

INSERT INTO `tb_fasilitas_darat_pelpny` (`id`, `id_fasilitas`, `luas_darat`, `perkantoran`, `timbangan`, `bengkel`, `uplc`, `tplb3`, `power_plan`, `tanki_bbm`, `tanki_air`, `bangunan_utility`, `gardu_listrik_pln`, `tempat_penimbunan`, `kantor_d_pos`, `musholla_d_kantin`, `gudang_tertutup`, `gudang_terbuka`, `mess`, `kbkki`) VALUES
(5, 5, 1, '2', 1, '1', '1', '1', 1, 1, 1, '1', 1, '1', '2', '12', '2', '1', '1', '1'),
(7, 7, 1, '1', 1, '1', '1', '1', 1, 1, 1, '1', 1, '1', '1', '1', '1', '1', '1', '1'),
(8, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_darat_tukstersus`
--

CREATE TABLE `tb_fasilitas_darat_tukstersus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `luas_darat` double DEFAULT NULL,
  `perkantoran` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timbangan` int(11) DEFAULT NULL,
  `tanki_timbu_cpo` int(11) DEFAULT NULL,
  `bengkel` double DEFAULT NULL,
  `uplc` int(11) DEFAULT NULL,
  `tplb3` int(11) DEFAULT NULL,
  `power_plan` int(11) DEFAULT NULL,
  `tanki_bbm` int(11) DEFAULT NULL,
  `tanki_air` int(11) DEFAULT NULL,
  `refeneri` int(11) DEFAULT NULL,
  `tanki_mfo` int(11) DEFAULT NULL,
  `bangunan_reserve` int(11) DEFAULT NULL,
  `cooling_tower` int(11) DEFAULT NULL,
  `bangunan_utility` int(11) DEFAULT NULL,
  `gardu_listrik_pln` int(11) DEFAULT NULL,
  `tempat_penimbunan` int(11) DEFAULT NULL,
  `kantor_d_pos` int(11) DEFAULT NULL,
  `musholla_d_kantin` int(11) DEFAULT NULL,
  `gudang_tertutup` int(11) DEFAULT NULL,
  `gudang_terbuka` int(11) DEFAULT NULL,
  `mess` int(11) DEFAULT NULL,
  `kbkki` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas_darat_tukstersus`
--

INSERT INTO `tb_fasilitas_darat_tukstersus` (`id`, `id_fasilitas`, `luas_darat`, `perkantoran`, `timbangan`, `tanki_timbu_cpo`, `bengkel`, `uplc`, `tplb3`, `power_plan`, `tanki_bbm`, `tanki_air`, `refeneri`, `tanki_mfo`, `bangunan_reserve`, `cooling_tower`, `bangunan_utility`, `gardu_listrik_pln`, `tempat_penimbunan`, `kantor_d_pos`, `musholla_d_kantin`, `gudang_tertutup`, `gudang_terbuka`, `mess`, `kbkki`) VALUES
(1, 9, 1, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_perairan_pelpny`
--

CREATE TABLE `tb_fasilitas_perairan_pelpny` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `breasting_dolphin` int(11) DEFAULT NULL,
  `mooring_dolphin` int(11) DEFAULT NULL,
  `trestle` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cause_way` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `catwalk` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `peruntukan` int(11) DEFAULT NULL,
  `kedalaman` double DEFAULT NULL,
  `koordinat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fender` int(11) DEFAULT NULL,
  `bollar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas_perairan_pelpny`
--

INSERT INTO `tb_fasilitas_perairan_pelpny` (`id`, `id_fasilitas`, `type`, `ukuran`, `breasting_dolphin`, `mooring_dolphin`, `trestle`, `cause_way`, `catwalk`, `peruntukan`, `kedalaman`, `koordinat`, `fender`, `bollar`) VALUES
(5, 5, '1', '1', 1, 1, '1', '1', '1', 1, 1, '1', 1, 1),
(7, 7, '1', '1', 1, 1, '1', '1', '1', 1, 1, '1', 1, 1),
(8, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_perairan_tukstersus`
--

CREATE TABLE `tb_fasilitas_perairan_tukstersus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `type` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ukuran` double DEFAULT NULL,
  `breasting_dolphin` int(11) DEFAULT NULL,
  `mooring_dolphin` int(11) DEFAULT NULL,
  `trestle` double DEFAULT NULL,
  `cause_way` double DEFAULT NULL,
  `catwalk` double DEFAULT NULL,
  `kontruksi` int(11) DEFAULT NULL,
  `peruntukan` int(11) DEFAULT NULL,
  `kedalaman` double DEFAULT NULL,
  `koordinat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fender` int(11) DEFAULT NULL,
  `bollar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas_perairan_tukstersus`
--

INSERT INTO `tb_fasilitas_perairan_tukstersus` (`id`, `id_fasilitas`, `type`, `ukuran`, `breasting_dolphin`, `mooring_dolphin`, `trestle`, `cause_way`, `catwalk`, `kontruksi`, `peruntukan`, `kedalaman`, `koordinat`, `fender`, `bollar`) VALUES
(1, 9, '1', 1, 1, 1, 1, 1, 1, 1, 1, 1, '1', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_peralatan`
--

CREATE TABLE `tb_fasilitas_peralatan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `hmc` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terminal_tractor` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `st40` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `primer_movers` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flattop_trailer` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trailer20` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flexible_hose` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pipe_line` int(11) DEFAULT NULL,
  `loader` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shore_crane` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `excavator` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dump_truck` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forklift` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas_peralatan`
--

INSERT INTO `tb_fasilitas_peralatan` (`id`, `id_fasilitas`, `hmc`, `terminal_tractor`, `st40`, `primer_movers`, `flattop_trailer`, `trailer20`, `flexible_hose`, `pipe_line`, `loader`, `shore_crane`, `excavator`, `dump_truck`, `forklift`) VALUES
(5, 5, '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1'),
(7, 7, '1', '1', '1', '1', '1', NULL, '1', 1, '1', '1', '1', '1', '1'),
(8, 9, '1', '1', '1', '1', '1', '1', '1', 1, '1', '1', '1', '1', '1'),
(9, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_fasilitas_sarana`
--

CREATE TABLE `tb_fasilitas_sarana` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_fasilitas` int(11) NOT NULL,
  `dlkr` text COLLATE utf8mb4_unicode_ci,
  `dlkp` text COLLATE utf8mb4_unicode_ci,
  `lampu_suar` int(11) DEFAULT NULL,
  `handy_talky` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_fasilitas_sarana`
--

INSERT INTO `tb_fasilitas_sarana` (`id`, `id_fasilitas`, `dlkr`, `dlkp`, `lampu_suar`, `handy_talky`) VALUES
(2, 5, '1, 122, 12, 1', '1, 12, 12, 1', 1, 1),
(4, 7, '1, 1, 1, 1', '1, 1, 1, 1', 1, 1),
(5, 9, '1, 1, 1, 1', '1, 1, 1, 1', 1, 1),
(6, 10, ', , , ', ', , , ', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatanpenunjang`
--

CREATE TABLE `tb_kegiatanpenunjang` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `alamat_pj` text NOT NULL,
  `nomor_izin_usaha` varchar(20) NOT NULL,
  `tgl_izin_usaha` date NOT NULL,
  `npwp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kegiatanpenunjang`
--

INSERT INTO `tb_kegiatanpenunjang` (`id`, `id_user`, `nama_perusahaan`, `alamat_perusahaan`, `bidang_usaha`, `nama_pj`, `alamat_pj`, `nomor_izin_usaha`, `tgl_izin_usaha`, `npwp`) VALUES
(3, 28, 'PT. Surya Sumber Jasa', 'Jl. Jend. Gatot Subroto No.5 Pekabaru', 'Bongkar Muat', 'Martias', 'Jl. Samatulangi No.39 Pekanbaru', 'AL.003/KKW/Phb/Riau', '1989-10-24', '1.496.235.1-211'),
(4, 29, 'PT. Ellung Mangenre', 'Jl. jend. Sudirman Lt.II No.365 Tembilahan', 'Pelayaran Rakyat', 'M. Yusuf Aziz', 'Jl. M. Boyak No.07 Tembilahan', 'AL.003/KKW/Phb-Riau', '1989-07-05', '1.268.851.1-06'),
(5, 30, 'PT. Tamban Pratama Sukses', 'Jl. Kampar Gg.Kampar I No. Pekanbaru', 'Pengurusan Transportasi', 'Lamhot Saragia', 'Jl. Kampar Gg.Kampar I No.1 Pekanbaru', 'AL.003/B.51/DPHB', '2008-05-07', '02.459.432.1-211.000');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp_bongkarmuat`
--

CREATE TABLE `tb_kp_bongkarmuat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendera` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ukuran` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_agen` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_bm` int(11) NOT NULL,
  `mulai` datetime NOT NULL,
  `selesai` datetime NOT NULL,
  `jumlah_buruh` int(11) NOT NULL,
  `asal_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tujuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `penunjukan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kp_bongkarmuat`
--

INSERT INTO `tb_kp_bongkarmuat` (`id`, `id_perusahaan`, `nama_kapal`, `bendera`, `ukuran`, `nama_agen`, `jumlah_bm`, `mulai`, `selesai`, `jumlah_buruh`, `asal_barang`, `tujuan`, `jenis`, `penunjukan`, `ket`) VALUES
(2, 3, 'bg', 'Indonesia', 'dwt', 'asd', 1, '2020-11-14 12:00:00', '2020-11-14 15:00:00', 24, 'Indonesia', 'Dumai', 'asd', 'asd', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp_pengurusantransportasi`
--

CREATE TABLE `tb_kp_pengurusantransportasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `import_tonase` double NOT NULL,
  `import_pib` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `in_ap_tonase` double NOT NULL,
  `in_ap_pmb` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ekspor_tonase` double NOT NULL,
  `ekspor_peb` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uit_ap_tonase` double NOT NULL,
  `uit_ap_pmb` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jumlah_tonase` double NOT NULL,
  `jumlah_in_uit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kp_pengurusantransportasi`
--

INSERT INTO `tb_kp_pengurusantransportasi` (`id`, `id_perusahaan`, `tanggal`, `nama_barang`, `nama_kapal`, `jenis`, `import_tonase`, `import_pib`, `in_ap_tonase`, `in_ap_pmb`, `ekspor_tonase`, `ekspor_peb`, `uit_ap_tonase`, `uit_ap_pmb`, `jumlah_tonase`, `jumlah_in_uit`) VALUES
(1, 5, '2020-11-16', 'asd', '2020-11-16', 'asd', 12, '32', 32, '12', 43, '23', 234, '23', 453, 34535);

-- --------------------------------------------------------

--
-- Table structure for table `tb_kp_perla`
--

CREATE TABLE `tb_kp_perla` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_perusahaan` int(11) NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bendera` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kec_ekonomis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_trayek` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pelabuhan_asal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tb_tgl` date NOT NULL,
  `tb_jam` time NOT NULL,
  `bk_tgl` date NOT NULL,
  `bk_jam` time NOT NULL,
  `jarak` int(11) NOT NULL,
  `berlayar_hari` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berlayar_jam` time NOT NULL,
  `berlabuh_hari` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berlabuh_jam` time NOT NULL,
  `bm_mulai` time NOT NULL,
  `bm_selesai` time NOT NULL,
  `pelabuhan_tujuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `b_m` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `berat` double NOT NULL,
  `ukuran` double NOT NULL,
  `penumpang` int(11) NOT NULL,
  `hewan` int(11) NOT NULL,
  `jenis_barang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kemasan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_kp_perla`
--

INSERT INTO `tb_kp_perla` (`id`, `id_perusahaan`, `nama_kapal`, `bendera`, `type`, `kec_ekonomis`, `status_trayek`, `pelabuhan_asal`, `tb_tgl`, `tb_jam`, `bk_tgl`, `bk_jam`, `jarak`, `berlayar_hari`, `berlayar_jam`, `berlabuh_hari`, `berlabuh_jam`, `bm_mulai`, `bm_selesai`, `pelabuhan_tujuan`, `b_m`, `berat`, `ukuran`, `penumpang`, `hewan`, `jenis_barang`, `kemasan`) VALUES
(1, 4, 'bg', 'Indonesia', '1', 'asd', 'Liner', 'asd', '2020-11-16', '12:00:00', '2020-11-16', '23:00:00', 345, 'Senin', '04:55:00', 'Selasa', '03:45:00', '04:05:00', '03:45:00', 'sadasd', 'asd', 34, 45, 54, 45, 'Peti', 'Peti');

-- --------------------------------------------------------

--
-- Table structure for table `tb_op_pel`
--

CREATE TABLE `tb_op_pel` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_pelabuhan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gt` int(11) NOT NULL,
  `panjang` double NOT NULL,
  `lebar` double NOT NULL,
  `draft` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pel_asal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jarak` int(11) NOT NULL,
  `kd_wkt_berlayar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_tb_tgl` date NOT NULL,
  `kd_tb_jam` time NOT NULL,
  `kd_tambat` time NOT NULL,
  `kd_jam_labuh` time NOT NULL,
  `kb_pel_tujuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kb_jarak` int(11) NOT NULL,
  `kb_tgl` date NOT NULL,
  `kb_jam` time NOT NULL,
  `nomor_sp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sp` date NOT NULL,
  `kon_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jen_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_op_pel`
--

INSERT INTO `tb_op_pel` (`id`, `id_pelabuhan`, `nama_perusahaan`, `nama_kapal`, `type_kapal`, `gt`, `panjang`, `lebar`, `draft`, `kd_pel_asal`, `kd_jarak`, `kd_wkt_berlayar`, `kd_tb_tgl`, `kd_tb_jam`, `kd_tambat`, `kd_jam_labuh`, `kb_pel_tujuan`, `kb_jarak`, `kb_tgl`, `kb_jam`, `nomor_sp`, `tgl_sp`, `kon_bahan_bakar`, `jen_bahan_bakar`, `ket`) VALUES
(1, 10, 'PT. Surya Sumber Jasa', 'bg', 'dff', 30, 1, 1, 'asd', 'asda', 1, '1', '2020-11-12', '11:11:00', '11:11:00', '11:11:00', 'asd', 1, '2020-11-12', '11:11:00', 'asdq123', '2020-11-12', '123', 'we', '123'),
(2, 10, 'PTDumai', 'bg', 'dff', 20, 1, 1, '1', 'asda', 1, '1', '2020-11-02', '00:01:00', '00:00:00', '21:00:00', 'asd', 1, '2020-11-05', '00:00:00', 'asdq123', '2020-11-06', '123', 'we', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_op_pny`
--

CREATE TABLE `tb_op_pny` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyeberangan` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gt` int(11) NOT NULL,
  `panjang` double NOT NULL,
  `lebar` double NOT NULL,
  `draft` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pel_asal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jarak` int(11) NOT NULL,
  `kd_wkt_berlayar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_tb_tgl` date NOT NULL,
  `kd_tb_jam` time NOT NULL,
  `kd_tambat` time NOT NULL,
  `kd_jam_labuh` time NOT NULL,
  `kb_pel_tujuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kb_jarak` int(11) NOT NULL,
  `kb_tgl` date NOT NULL,
  `kb_jam` time NOT NULL,
  `nomor_sp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sp` date NOT NULL,
  `kon_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jen_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_op_pny`
--

INSERT INTO `tb_op_pny` (`id`, `id_penyeberangan`, `nama_perusahaan`, `nama_kapal`, `type_kapal`, `gt`, `panjang`, `lebar`, `draft`, `kd_pel_asal`, `kd_jarak`, `kd_wkt_berlayar`, `kd_tb_tgl`, `kd_tb_jam`, `kd_tambat`, `kd_jam_labuh`, `kb_pel_tujuan`, `kb_jarak`, `kb_tgl`, `kb_jam`, `nomor_sp`, `tgl_sp`, `kon_bahan_bakar`, `jen_bahan_bakar`, `ket`) VALUES
(1, 6, 'PT. Surya Sumber Jasa', 'bg', 'dff', 1, 1, 1, '1', 'asda', 1, '1', '2020-11-12', '11:11:00', '11:11:00', '11:01:00', '1', 1, '2020-11-12', '11:11:00', 'asdq123', '2020-11-12', '123', 'we', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_op_tukstersus`
--

CREATE TABLE `tb_op_tukstersus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tukstersus` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_kapal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gt` int(11) NOT NULL,
  `panjang` double NOT NULL,
  `lebar` double NOT NULL,
  `draft` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_pel_asal` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_jarak` int(11) NOT NULL,
  `kd_wkt_berlayar` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kd_tb_tgl` date NOT NULL,
  `kd_tb_jam` time NOT NULL,
  `kd_tambat` time NOT NULL,
  `kd_jam_labuh` time NOT NULL,
  `kb_pel_tujuan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kb_jarak` int(11) NOT NULL,
  `kb_tgl` date NOT NULL,
  `kb_jam` time NOT NULL,
  `nomor_sp` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tgl_sp` date NOT NULL,
  `kon_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jen_bahan_bakar` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_op_tukstersus`
--

INSERT INTO `tb_op_tukstersus` (`id`, `id_tukstersus`, `nama_perusahaan`, `nama_kapal`, `type_kapal`, `gt`, `panjang`, `lebar`, `draft`, `kd_pel_asal`, `kd_jarak`, `kd_wkt_berlayar`, `kd_tb_tgl`, `kd_tb_jam`, `kd_tambat`, `kd_jam_labuh`, `kb_pel_tujuan`, `kb_jarak`, `kb_tgl`, `kb_jam`, `nomor_sp`, `tgl_sp`, `kon_bahan_bakar`, `jen_bahan_bakar`, `ket`) VALUES
(1, 5, 'PT. Surya Sumber Jasa', 'bg', 'dff', 1, 1, 1, 'asd', 'asda', 1, '1', '2020-11-12', '11:11:00', '11:11:00', '11:01:00', 'asd', 1, '2020-11-12', '11:01:00', 'asdq123', '2020-11-12', '123', 'we', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pajak_retribusidaerah`
--

CREATE TABLE `tb_pajak_retribusidaerah` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `labuh_kapal` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tambat` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `barang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hewan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gudang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lapangan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `penyimpanan` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pas_penumpang` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_1` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_2` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_3` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_4` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_5` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_6` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_7` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gol_8` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `papan_reklame` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_pajak_retribusidaerah`
--

INSERT INTO `tb_pajak_retribusidaerah` (`id`, `id_user`, `tgl`, `labuh_kapal`, `tambat`, `barang`, `hewan`, `gudang`, `lapangan`, `penyimpanan`, `pas_penumpang`, `gol_1`, `gol_2`, `gol_3`, `gol_4`, `gol_5`, `gol_6`, `gol_7`, `gol_8`, `papan_reklame`) VALUES
(1, 40, '2020-11-14', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , '),
(2, 37, '2020-11-14', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , ', ', , '),
(3, 35, '2020-11-15', '20, 200, ', '20, 200, ', '20, 200, ', '20202, 200, ', '202, 200, ', '202, 200, ', '3, 200, ', '4, 200, ', '23, 200, ', '34, 200, ', '5, 200, ', '4, 200, ', '76, 200, ', '78, 200, ', '67, 200, ', '56, 200, ', '45, 200, ');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pelabuhan`
--

CREATE TABLE `tb_pelabuhan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_pelabuhan` varchar(50) NOT NULL,
  `alamat_pelabuhan` text NOT NULL,
  `posisi_pelabuhan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pelabuhan`
--

INSERT INTO `tb_pelabuhan` (`id`, `id_user`, `nama_pelabuhan`, `alamat_pelabuhan`, `posisi_pelabuhan`) VALUES
(10, 35, 'Dumai', 'Dumai', 'Dumai'),
(11, 40, 'siak', 'siak', 'siak');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan_pas_masuk`
--

CREATE TABLE `tb_penjualan_pas_masuk` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyeberangan` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `penumpang` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol4` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol5` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol6` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol7` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gol8` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_penjualan_pas_masuk`
--

INSERT INTO `tb_penjualan_pas_masuk` (`id`, `id_penyeberangan`, `tanggal`, `penumpang`, `gol1`, `gol2`, `gol3`, `gol4`, `gol5`, `gol6`, `gol7`, `gol8`) VALUES
(2, 6, '2020-11-12', 'Merah, 1, 100, 2', 'Biru, 1, 100, 2', 'Kuning, 1, 100, 2', 'Hijau, 1, 100, 2', 'Hitam, 1, 100, 2', 'Orange, 1, 100, 2', 'Abu Abu, 1, 100, 2', 'Coklat, 1, 100, 2', 'Jingga, 1, 100, 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penyeberangan`
--

CREATE TABLE `tb_penyeberangan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_penyeberangan` varchar(50) NOT NULL,
  `alamat_penyeberangan` text NOT NULL,
  `posisi_penyeberangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penyeberangan`
--

INSERT INTO `tb_penyeberangan` (`id`, `id_user`, `nama_penyeberangan`, `alamat_penyeberangan`, `posisi_penyeberangan`) VALUES
(6, 37, 'Penyeberangan', 'Dumai', 'Dumai');

-- --------------------------------------------------------

--
-- Table structure for table `tb_perencanaan`
--

CREATE TABLE `tb_perencanaan` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `prov` varchar(50) DEFAULT NULL,
  `no_prov` varchar(50) DEFAULT NULL,
  `tgl_prov` date DEFAULT NULL,
  `perihal_prov` varchar(50) DEFAULT NULL,
  `instansi_prov` varchar(50) DEFAULT NULL,
  `kab_kota` varchar(50) DEFAULT NULL,
  `no_kab_kota` varchar(50) DEFAULT NULL,
  `tgl_kab_kota` date DEFAULT NULL,
  `perihal_kab_kota` varchar(50) DEFAULT NULL,
  `instansi_kab_kota` varchar(50) DEFAULT NULL,
  `no_sklh` varchar(50) DEFAULT NULL,
  `tgl_sklh` date DEFAULT NULL,
  `perihal_sklh` varchar(50) DEFAULT NULL,
  `instansi_sklh` varchar(50) DEFAULT NULL,
  `no_ipl` varchar(50) DEFAULT NULL,
  `tgl_ipl` date DEFAULT NULL,
  `perihal_ipl` varchar(50) DEFAULT NULL,
  `instansi_ipl` varchar(50) DEFAULT NULL,
  `no_ipp` varchar(50) DEFAULT NULL,
  `tgl_ipp` date DEFAULT NULL,
  `perihal_ipp` varchar(50) DEFAULT NULL,
  `instansi_ipp` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_perencanaan`
--

INSERT INTO `tb_perencanaan` (`id`, `id_user`, `prov`, `no_prov`, `tgl_prov`, `perihal_prov`, `instansi_prov`, `kab_kota`, `no_kab_kota`, `tgl_kab_kota`, `perihal_kab_kota`, `instansi_kab_kota`, `no_sklh`, `tgl_sklh`, `perihal_sklh`, `instansi_sklh`, `no_ipl`, `tgl_ipl`, `perihal_ipl`, `instansi_ipl`, `no_ipp`, `tgl_ipp`, `perihal_ipp`, `instansi_ipp`) VALUES
(11, 35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 37, '1', '1', '2020-11-12', '1', '1', '1', '1', '1111-01-01', '1', '1', '1', '2020-11-12', '1', '1', '1', '2020-11-12', '1', '1', '1', '2020-11-12', '1', '1'),
(15, 39, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 40, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_sewa_perairan`
--

CREATE TABLE `tb_sewa_perairan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_tukstersus` int(11) NOT NULL,
  `tuks_tersus` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_perjanjian` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `awal` date NOT NULL,
  `akhir` date NOT NULL,
  `luas_perairan` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tarif` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pungutan` double(8,2) NOT NULL,
  `denda` double(8,2) NOT NULL,
  `total` double(8,2) NOT NULL,
  `ket` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tb_sewa_perairan`
--

INSERT INTO `tb_sewa_perairan` (`id`, `id_tukstersus`, `tuks_tersus`, `no_perjanjian`, `awal`, `akhir`, `luas_perairan`, `tarif`, `pungutan`, `denda`, `total`, `ket`) VALUES
(2, 5, 'TUKS', 'asd', '2020-11-16', '2020-11-19', '45', '45', 12.00, 2000.00, 23123.00, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb_surat`
--

CREATE TABLE `tb_surat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_tujuan` int(11) NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tukstersus`
--

CREATE TABLE `tb_tukstersus` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `alamat_perusahaan` text NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `npwp` varchar(20) NOT NULL,
  `nib` varchar(20) NOT NULL,
  `nama_pj` varchar(50) NOT NULL,
  `posisi_perusahaan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tukstersus`
--

INSERT INTO `tb_tukstersus` (`id`, `id_user`, `nama_perusahaan`, `alamat_perusahaan`, `bidang_usaha`, `npwp`, `nib`, `nama_pj`, `posisi_perusahaan`) VALUES
(5, 39, 'PTDumai', 'Dumai', 'Penyeberangan', '1.496.235.1-211', 'asd', 'anto', 'dumai');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level_akses` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `level_akses`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin'),
(28, 'suryasumberjasa', '0720808bc80a80cf52a19b11a651b886', 'Kegiatan Penunjang'),
(29, 'ellungmangenre', 'e981de72c8a048d5aa9c6a16a2046daa', 'Kegiatan Penunjang'),
(30, 'tambanpratamasukses', '784f197a75454cbbb4db868b9ca29cf9', 'Kegiatan Penunjang'),
(35, 'dumai', '40f2363fb65fb27204f4dc11aacd9b04', 'Pelabuhan'),
(37, 'penyeberangan', '6a2c7dd2a707e4d4a5ae43f675a96c3e', 'Penyeberangan'),
(39, 'ptdumai', 'a0ca817f0bb759f622e2997a96dbe0a4', 'Tuks/Tersus'),
(40, 'siak', 'b6a3af5714976a802ff3c837c26f07b2', 'Pelabuhan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bm_pel`
--
ALTER TABLE `tb_bm_pel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bm_pny`
--
ALTER TABLE `tb_bm_pny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_bm_tukstersus`
--
ALTER TABLE `tb_bm_tukstersus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_darat_pelpny`
--
ALTER TABLE `tb_fasilitas_darat_pelpny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_darat_tukstersus`
--
ALTER TABLE `tb_fasilitas_darat_tukstersus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_perairan_pelpny`
--
ALTER TABLE `tb_fasilitas_perairan_pelpny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_perairan_tukstersus`
--
ALTER TABLE `tb_fasilitas_perairan_tukstersus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_peralatan`
--
ALTER TABLE `tb_fasilitas_peralatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_fasilitas_sarana`
--
ALTER TABLE `tb_fasilitas_sarana`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatanpenunjang`
--
ALTER TABLE `tb_kegiatanpenunjang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kp_bongkarmuat`
--
ALTER TABLE `tb_kp_bongkarmuat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kp_pengurusantransportasi`
--
ALTER TABLE `tb_kp_pengurusantransportasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kp_perla`
--
ALTER TABLE `tb_kp_perla`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_op_pel`
--
ALTER TABLE `tb_op_pel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_op_pny`
--
ALTER TABLE `tb_op_pny`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_op_tukstersus`
--
ALTER TABLE `tb_op_tukstersus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pajak_retribusidaerah`
--
ALTER TABLE `tb_pajak_retribusidaerah`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pelabuhan`
--
ALTER TABLE `tb_pelabuhan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penjualan_pas_masuk`
--
ALTER TABLE `tb_penjualan_pas_masuk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_penyeberangan`
--
ALTER TABLE `tb_penyeberangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_perencanaan`
--
ALTER TABLE `tb_perencanaan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_sewa_perairan`
--
ALTER TABLE `tb_sewa_perairan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_surat`
--
ALTER TABLE `tb_surat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_tukstersus`
--
ALTER TABLE `tb_tukstersus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bm_pel`
--
ALTER TABLE `tb_bm_pel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bm_pny`
--
ALTER TABLE `tb_bm_pny`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_bm_tukstersus`
--
ALTER TABLE `tb_bm_tukstersus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_fasilitas`
--
ALTER TABLE `tb_fasilitas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tb_fasilitas_darat_pelpny`
--
ALTER TABLE `tb_fasilitas_darat_pelpny`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_fasilitas_darat_tukstersus`
--
ALTER TABLE `tb_fasilitas_darat_tukstersus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_fasilitas_perairan_pelpny`
--
ALTER TABLE `tb_fasilitas_perairan_pelpny`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_fasilitas_perairan_tukstersus`
--
ALTER TABLE `tb_fasilitas_perairan_tukstersus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_fasilitas_peralatan`
--
ALTER TABLE `tb_fasilitas_peralatan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tb_fasilitas_sarana`
--
ALTER TABLE `tb_fasilitas_sarana`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kegiatanpenunjang`
--
ALTER TABLE `tb_kegiatanpenunjang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tb_kp_bongkarmuat`
--
ALTER TABLE `tb_kp_bongkarmuat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_kp_pengurusantransportasi`
--
ALTER TABLE `tb_kp_pengurusantransportasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_kp_perla`
--
ALTER TABLE `tb_kp_perla`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_op_pel`
--
ALTER TABLE `tb_op_pel`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_op_pny`
--
ALTER TABLE `tb_op_pny`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_op_tukstersus`
--
ALTER TABLE `tb_op_tukstersus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_pajak_retribusidaerah`
--
ALTER TABLE `tb_pajak_retribusidaerah`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tb_pelabuhan`
--
ALTER TABLE `tb_pelabuhan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tb_penjualan_pas_masuk`
--
ALTER TABLE `tb_penjualan_pas_masuk`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_penyeberangan`
--
ALTER TABLE `tb_penyeberangan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_perencanaan`
--
ALTER TABLE `tb_perencanaan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tb_sewa_perairan`
--
ALTER TABLE `tb_sewa_perairan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_surat`
--
ALTER TABLE `tb_surat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_tukstersus`
--
ALTER TABLE `tb_tukstersus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
