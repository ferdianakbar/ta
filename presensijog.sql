-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2018 at 05:54 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `presensijog`
--

-- --------------------------------------------------------

--
-- Table structure for table `cuti`
--

CREATE TABLE `cuti` (
  `id_cuti` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jenis_cuti` varchar(500) NOT NULL,
  `keterangan` varchar(500) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `kuota_cuti` int(11) NOT NULL DEFAULT '24'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cuti`
--

INSERT INTO `cuti` (`id_cuti`, `nip`, `tanggal`, `jenis_cuti`, `keterangan`, `status`, `kuota_cuti`) VALUES
(28, '196409101992031005', '2018-08-25', '3', 'putus cinta', 'diterima', 24),
(29, '196409101992031005', '2018-09-11', '1', 'sdsadsda', 'diterima', 24),
(30, '196409101992031005', '2018-09-11', '1', 'sdsadsda', 'diterima', 24),
(31, '196409101992031005', '2018-09-22', '1', 'laper', 'diterima', 24),
(32, '196409101992031005', '2018-09-15', '3', 'gatau', 'diterima', 24),
(59, '1969031519809032009', '2018-10-12', '1', 'mboh', 'ditolak', 24),
(60, '1969031519809032009', '2018-10-01', '1', 'asas', 'ditolak', 24),
(61, '1969031519809032009', '2018-10-05', '1', 'jgjhgfghf', 'ditolak', 24),
(62, '196409101992031005', '2018-10-10', '1', 'kjkjk', 'pending', 24);

-- --------------------------------------------------------

--
-- Table structure for table `cuti_approval`
--

CREATE TABLE `cuti_approval` (
  `id_cuti` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tanggal` varchar(255) NOT NULL,
  `jenis_cuti` varchar(100) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `kuota_cuti` int(11) NOT NULL DEFAULT '24'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hari_libur`
--

CREATE TABLE `hari_libur` (
  `id_libur` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `hari` varchar(20) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari_libur`
--

INSERT INTO `hari_libur` (`id_libur`, `tanggal`, `hari`, `keterangan`) VALUES
(3, '2018-08-17', '', 'hari kemerdekaan');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_ins` int(11) NOT NULL,
  `nama_ins` varchar(100) NOT NULL,
  `kepala_ins` varchar(225) NOT NULL,
  `NIPkepala` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_ins`, `nama_ins`, `kepala_ins`, `NIPkepala`) VALUES
(139, 'Badan Kepegawaian Daerah', 'hao', 'apa ya'),
(140, 'Badan Lingkungan Hidup', '', ''),
(141, 'Badan Narkotika Nasional', '', ''),
(142, 'Badan Penanggulangan Bencana', '', ''),
(143, 'Badan Perencanaan Pembangunan Daerah', '', ''),
(144, 'Badan Hubungan Masyarakat dan Informasi', '', ''),
(145, 'Bagian Hukum', '', ''),
(146, 'Bagian Organisasi', 'embum', '1'),
(147, 'Bagian Perekonomian,Pengembangan Pendapatan Asli Daerah dan Kerjasama', '', ''),
(148, 'Bagian Protokol', '', ''),
(149, 'Bagian Tata Pemerintah', '', ''),
(150, 'Bagian Umum', '', ''),
(151, 'Dinas Bangunan Gedung dan Aset Daerah', '', ''),
(152, 'Dinas Kependudukan dan Catatan Sipil', '', ''),
(153, 'Dinas Kesehatan', '', ''),
(154, 'Dinas Ketertiban', '', ''),
(155, 'Dinas Perpajakan Daerah dan Pengelolaan Keuangan', '', ''),
(156, 'Dinas Pariwisata dan Kebudayaan', '', ''),
(157, 'Dinas Pendidikan', '', ''),
(158, 'Dinas Pengelolaan Pasar', '', ''),
(159, 'Dinas Perhubungan', '', ''),
(160, 'Dinas Perindustrian, Perdangangan,Koperasi, dan Pertanian', '', ''),
(161, 'Dinas Perizinan', '', ''),
(162, 'Dinas Pemukiman dan Prasarana Wilayah', '', ''),
(163, 'Dinas Sosial, Tenaga Kerja dan Transmigrasi', '', ''),
(164, 'Inspektorat', '', ''),
(165, 'Kantor Arsip dan Keuangan', '', ''),
(166, 'Kantor Keluarga Berencana', '', ''),
(167, 'Kantor Kesatuan Bangsa', '', ''),
(168, 'Kantor Pemberdayaan Masyarakat dan Perempuan', '', ''),
(169, 'Kantor Pengeloaan Taman Pintar', '', ''),
(170, 'Kecamatan Danurejan', '', ''),
(171, 'Kecamatan Gedongtengen', '', ''),
(172, 'Kecamatan Gondokusuman', '', ''),
(173, 'Kecamatan Gondomaman', '', ''),
(174, 'Kecamatan Jetis', '', ''),
(175, 'Kecamatan Kotagede', '', ''),
(176, 'Kecamatan Kraton', '', ''),
(177, 'Kecamatan Mantrijeron', '', ''),
(178, 'Kecamatan Mergangsan', '', ''),
(179, 'Kecamatan Ngampilan', '', ''),
(180, 'Kecamatan Pakualaman', '', ''),
(181, 'Kecamatan Tegalrejo', '', ''),
(182, 'Kecamatan Umbulharjo', '', ''),
(183, 'Kecamatan Wirobrajan', '', ''),
(184, 'Kelurahan Bausasran', '', ''),
(185, 'Kelurahan Bener', '', ''),
(186, 'Kelurahan Brontokusuman', '', ''),
(187, 'Kelurahan Bumijo', '', ''),
(188, 'Kelurahan Cokrodiningratan', '', ''),
(189, 'Kelurahan Gedongkiwo', '', ''),
(190, 'Kelurahan Giwangan', '', ''),
(191, 'Kelurahan Gowongan', '', ''),
(192, 'Kelurahan Gunungketur', '', ''),
(193, 'Kelurahan Kadipaten', '', ''),
(194, 'Kelurahan Karangwaru', '', ''),
(195, 'Kelurahan Keparakan', '', ''),
(196, 'Kelurahan Kricak', '', ''),
(197, 'Kelurahan Mantrijeron', '', ''),
(198, 'Kelurahan Mujamuju', '', ''),
(199, 'Kelurahan Ngampilan', '', ''),
(200, 'Kelurahan Ngupasan', '', ''),
(201, 'Kelurahan Notoprajan', '', ''),
(202, 'Kelurahan Penembahan', '', ''),
(203, 'Kelurahan Patangpuluhan', '', ''),
(204, 'Kelurahan Patehan', '', ''),
(205, 'Kelurahan Prawirodirjan', '', ''),
(206, 'Kelurahan Prenggan', '', ''),
(207, 'Kelurahan Pringgokusuman', '', ''),
(208, 'Kelurahan Purbayan', '', ''),
(209, 'Kelurahan Purwokinanti', '', ''),
(210, 'Kelurahan Rejowinangun', '', ''),
(211, 'Kelurahan Semaki', '', ''),
(212, 'Kelurahan Sorosutan', '', ''),
(213, 'Kelurahan Sosoromendutan', '', ''),
(214, 'Kelurahan Suryatmajan', '', ''),
(215, 'Kelurahan Suryodiningratan', '', ''),
(216, 'Kelurahan Tahunan', '', ''),
(217, 'Kelurahan Tegalpanggung', '', ''),
(218, 'Kelurahan Tegalrejo', '', ''),
(219, 'Kelurahan Wirogunan', '', ''),
(220, 'Penampungan', '', ''),
(221, 'Rumah Sakit Umum Daerah', '', ''),
(222, 'Sekretariat Daerah', '', ''),
(223, 'Sekretariat Dewan Perwakilan Rakyat Daerah', '', ''),
(224, 'Sekretariat Komisi Pemilihan Umum', '', ''),
(225, 'UPT Puskesmas Umbulharjo II', '', ''),
(226, 'Dinas komunikasi, informatika dan persandian', 'tri cahya wibawa', '1103134446');

-- --------------------------------------------------------

--
-- Table structure for table `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jab` int(11) NOT NULL,
  `nama_jab` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jabatan`
--

INSERT INTO `jabatan` (`id_jab`, `nama_jab`) VALUES
(1, 'kepala bagian'),
(2, 'kepala sub bagian'),
(3, 'kepala bidang'),
(4, 'Anggota bidang');

-- --------------------------------------------------------

--
-- Table structure for table `jam_kerja`
--

CREATE TABLE `jam_kerja` (
  `id_jamker` int(11) NOT NULL,
  `id_ins` int(11) NOT NULL,
  `jam_msk` time NOT NULL,
  `jam_plg` time NOT NULL,
  `pembagian` varchar(100) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam_kerja`
--

INSERT INTO `jam_kerja` (`id_jamker`, `id_ins`, `jam_msk`, `jam_plg`, `pembagian`, `keterangan`) VALUES
(1, 139, '07:30:00', '16:00:00', 'nonshift', 'nonshift'),
(2, 146, '07:30:00', '16:00:00', 'nonshift', 'nonshift'),
(3, 226, '08:00:00', '16:00:00', 'shift', 'shift1'),
(4, 226, '16:00:00', '23:59:00', 'shift', 'shift2'),
(5, 226, '23:59:00', '08:00:00', 'shift', 'shift3');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_cuti`
--

CREATE TABLE `jenis_cuti` (
  `id_jenis` int(11) NOT NULL,
  `jenis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_cuti`
--

INSERT INTO `jenis_cuti` (`id_jenis`, `jenis`) VALUES
(1, 'Tahunan'),
(2, 'Besar'),
(3, 'Sakit'),
(4, 'Melahirkan'),
(5, 'Alasan Penting'),
(6, 'Cuti Bersama'),
(7, 'Cuti diluar tanggungan negara');

-- --------------------------------------------------------

--
-- Table structure for table `kegiatan`
--

CREATE TABLE `kegiatan` (
  `id_keg` int(11) NOT NULL,
  `id_ins` int(11) NOT NULL,
  `nama_keg` varchar(255) NOT NULL,
  `tahun` varchar(255) NOT NULL,
  `PPTK` varchar(20) NOT NULL,
  `NIP_PPTK` varchar(20) NOT NULL,
  `trg_fisik` int(100) NOT NULL,
  `trg_keu` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kegiatan`
--

INSERT INTO `kegiatan` (`id_keg`, `id_ins`, `nama_keg`, `tahun`, `PPTK`, `NIP_PPTK`, `trg_fisik`, `trg_keu`) VALUES
(1, 226, 'bikin website', '2018', 'cahyo', '123', 11, 1230000),
(2, 226, 'ngurusin router', '2017', '', '', 0, 0),
(3, 226, 'macul sawah', '2018', 'cahyo', '1', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `no_peg` int(11) NOT NULL,
  `nip` varchar(100) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `golongan` varchar(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `id_ins` int(11) NOT NULL,
  `no_enroll` int(11) NOT NULL,
  `no_alat` int(11) NOT NULL,
  `kuota_cuti` int(11) NOT NULL DEFAULT '24',
  `persentase` int(3) NOT NULL DEFAULT '100'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`no_peg`, `nip`, `nama`, `golongan`, `jabatan`, `id_ins`, `no_enroll`, `no_alat`, `kuota_cuti`, `persentase`) VALUES
(0, '1969031519809032009', 'Mardiati Kristiana', 'III/c', 'Pengelola E-Goverment', 139, 9999, 24, 22, 100),
(0, '197210181338032006', 'SUCIATI SAH,ST', 'III/d', 'Kepala Sub Bagian', 226, 4, 24, 24, 100),
(0, '1974020920006041018', 'SURAYA', 'II/b', 'Penatalaksana Telekomunik', 226, 5, 24, 24, 100),
(0, '198704122015032001', 'DIANITA, A.Md.', 'II/c', 'Lurah', 226, 6, 24, 24, 100),
(0, 'NITB-2504', 'BENNY RIZALDI SANTOSO, S.', '', 'NABAN', 226, 7, 24, 24, 100),
(0, '198109042006041006', 'AAN SUPROBO, S.Kom', 'III/b', 'Analis Kegiatan, Evaluasi', 226, 8, 24, 24, 100),
(0, '197802101997031003', 'Mochammad Ismail, SH', 'III/a', 'Penatalaksana Telekomunik', 226, 9, 24, 24, 100),
(0, '197503241999031004', 'JOKO MARWIYANTO, S.Kom', 'III/a', 'Analisis dan Perancang Si', 226, 10, 24, 24, 100),
(0, '197202091998032007', 'SRIANA PANCA RUKMINI, SE', 'III/b', 'Pengurusan Gaji dan Penat', 226, 11, 24, 24, 100),
(0, '19650626199032005', 'SRI SUTITIEK', 'III/b', 'Pembuat Dokumen Pengeluar', 226, 13, 24, 24, 100),
(0, 'NITB-0005', 'SUBARONO, A.Md', '', 'NABAN', 226, 14, 24, 24, 100),
(0, '198201182006041006', 'DIAN DIDIK PURWANTO, A.Md', 'III/a', 'Administrator Jaringan', 226, 15, 24, 24, 100),
(0, '197605182006041009', 'GREGORIUS GEDE WIRANARADA', 'III/c', 'Administrator Server', 226, 16, 24, 24, 100),
(0, '197102201998031006', 'SLAMET RUSTANDI WINATA, S', 'III/d', 'Kepala Sub Bagian', 226, 17, 24, 24, 100),
(0, '197905182000031003', 'MUHAMMAD ARDHI LAZUARDI, ', 'II/d', 'Penatalaksana Perawatan K', 226, 20, 24, 24, 100),
(0, '198309062011011001', 'DICKY ANGGORO WICAKSONO, ', 'III/a', 'Programmer', 226, 21, 24, 24, 100),
(0, '198401302009021001', 'ANDIK DANANG PRASETYO, A.', 'II/d', 'Admin Database', 226, 57, 24, 24, 100),
(0, '197608051997032002', 'TUSIANINGSIH', 'III/b', 'Bendahara Pengeluaran Pem', 226, 91, 24, 24, 100),
(0, '197908122006041012', 'AGUS BUDI HARTONO, S.Kom', 'III/c', 'Kepala Bagian', 226, 213, 24, 24, 100),
(0, '196409101992031005', 'Drs.SUKADARISMAN', 'III/c', 'Pengelola E-Goverment', 139, 9999, 24, 23, 100),
(0, '197405291995031002', 'SUPARMAN, SIP', 'III/c', 'ndaktau', 139, 999, 24, 24, 100),
(0, '0', '0', '0', '0', 0, 1008, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 1009, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 1010, 0, 24, 100),
(0, '198011192009021002', 'Tri Cahya Wibawa', 'III/c', 'Pengelola E-Goverment', 139, 9999, 24, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100),
(0, '0', '0', '0', '0', 0, 0, 0, 24, 100);

-- --------------------------------------------------------

--
-- Table structure for table `penilaian_kinerja`
--

CREATE TABLE `penilaian_kinerja` (
  `id_pkp` int(11) NOT NULL,
  `nip_penilai` varchar(20) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `tingkatan` enum('Atasan','Bawahan','Teman Sejawat') DEFAULT NULL,
  `kepemimpinan` int(5) NOT NULL,
  `ketrampilan` int(5) NOT NULL,
  `prakarsa` int(5) NOT NULL,
  `capaian_kerja` int(5) NOT NULL,
  `kerjasama` int(5) NOT NULL,
  `ketaatan` int(5) NOT NULL,
  `hubungan_masyarakat` int(5) NOT NULL,
  `total_nilai` int(11) NOT NULL,
  `waktu_pengisian` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penilaian_kinerja`
--

INSERT INTO `penilaian_kinerja` (`id_pkp`, `nip_penilai`, `nip`, `tingkatan`, `kepemimpinan`, `ketrampilan`, `prakarsa`, `capaian_kerja`, `kerjasama`, `ketaatan`, `hubungan_masyarakat`, `total_nilai`, `waktu_pengisian`) VALUES
(169, '0', '197210181338032006', 'Teman Sejawat', 0, 0, 0, 0, 50, 70, 0, 120, '2018-10-10 19:20:23'),
(170, '2147483647', '198704122015032001', 'Teman Sejawat', 0, 0, 0, 0, 50, 70, 0, 120, '2018-10-10 20:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `perizinan`
--

CREATE TABLE `perizinan` (
  `id_izin` int(11) NOT NULL,
  `nip` varchar(11) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `id_ins` int(11) NOT NULL,
  `tgl_pergi` varchar(100) NOT NULL,
  `tgl_datang` varchar(100) NOT NULL,
  `jam_pergi` varchar(20) NOT NULL,
  `jam_datang` varchar(11) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `photo` varchar(500) NOT NULL,
  `status` enum('pending','disetujui','ditolak') NOT NULL DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perizinan`
--

INSERT INTO `perizinan` (`id_izin`, `nip`, `nama`, `id_ins`, `tgl_pergi`, `tgl_datang`, `jam_pergi`, `jam_datang`, `keperluan`, `photo`, `status`) VALUES
(1, '19690315198', 'Mardiati Kristiana', 226, '2018-10-27', '2018-10-20', '01:00', '01:01', 'ksllaskls', 'Image_46f94bd.jpg', 'disetujui'),
(2, '19690315198', 'Mardiati Kristiana', 226, '2018-10-27', '2018-10-20', '01:00', '01:01', 'ksllaskls', 'Image_46f94bd.jpg', 'disetujui');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_approval`
--

CREATE TABLE `presensi_approval` (
  `tanggal_approval` int(11) NOT NULL,
  `tanggal_selesai_approval` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `presensi_manual`
--

CREATE TABLE `presensi_manual` (
  `id_pres` int(11) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jamPresensi` time NOT NULL,
  `status` enum('pending','diterima','ditolak') NOT NULL DEFAULT 'pending',
  `tanggal_approval` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_manual`
--

INSERT INTO `presensi_manual` (`id_pres`, `nip`, `tanggal`, `jamPresensi`, `status`, `tanggal_approval`) VALUES
(28, '198011192009021002', '2018-10-13', '08:24:03', 'pending', '0000-00-00'),
(29, '198011192009021002', '2018-10-13', '08:24:29', 'pending', '0000-00-00'),
(30, '198011192009021002', '2018-10-13', '08:49:19', 'pending', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `presensi_record_data`
--

CREATE TABLE `presensi_record_data` (
  `no` int(11) NOT NULL,
  `id_ins` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `nip` varchar(20) NOT NULL,
  `jamMasuk` time NOT NULL,
  `jamPulang` time NOT NULL,
  `toleransi` time NOT NULL,
  `jamPresensiMasuk` time NOT NULL,
  `jamPresensiPulang` time NOT NULL,
  `setLembur` int(11) NOT NULL,
  `lemburSebelum` time NOT NULL,
  `lemburSesudah` time NOT NULL,
  `jumlahLembur` time NOT NULL,
  `dwEnrollNumber` int(11) NOT NULL,
  `dwMachineNumber` int(11) NOT NULL,
  `alpha` int(11) NOT NULL,
  `terlambat` int(11) NOT NULL,
  `mendahului` int(11) NOT NULL,
  `keterangan1` int(11) NOT NULL,
  `keterangan2` int(11) NOT NULL,
  `keterangan3` int(11) NOT NULL,
  `keterangan4` int(11) NOT NULL,
  `keterangan5` int(11) NOT NULL,
  `keterangan6` int(11) NOT NULL,
  `day` varchar(255) NOT NULL,
  `keteranganLembur` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `presensi_record_data`
--

INSERT INTO `presensi_record_data` (`no`, `id_ins`, `tanggal`, `nip`, `jamMasuk`, `jamPulang`, `toleransi`, `jamPresensiMasuk`, `jamPresensiPulang`, `setLembur`, `lemburSebelum`, `lemburSesudah`, `jumlahLembur`, `dwEnrollNumber`, `dwMachineNumber`, `alpha`, `terlambat`, `mendahului`, `keterangan1`, `keterangan2`, `keterangan3`, `keterangan4`, `keterangan5`, `keterangan6`, `day`, `keteranganLembur`) VALUES
(1, '226', '2018-10-01', '197210181338032006', '08:00:00', '16:00:00', '00:00:00', '07:51:00', '16:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(2, '226', '2018-10-02', '197210181338032006', '08:00:00', '16:00:00', '00:00:00', '07:47:00', '16:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(3, '226', '2018-10-03', '197210181338032006', '08:00:00', '16:00:00', '00:00:00', '07:50:00', '16:10:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(4, '226', '2018-10-04', '197210181338032006', '08:00:00', '16:00:00', '00:00:00', '07:47:00', '16:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(5, '226', '2018-10-05', '197210181338032006', '08:00:00', '16:00:00', '00:00:00', '07:56:00', '16:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(6, '226', '2018-10-06', '197210181338032006', '08:00:00', '16:00:00', '00:00:00', '07:47:00', '16:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(9, '0', '0000-00-00', '0', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', ''),
(10, '0', '0000-00-00', '0', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', 0, '00:00:00', '00:00:00', '00:00:00', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sub_kegiatan`
--

CREATE TABLE `sub_kegiatan` (
  `id_keg` int(11) NOT NULL,
  `nama_sub` varchar(255) NOT NULL,
  `target_kinerja` int(11) NOT NULL,
  `realisasi_kinerja` int(11) NOT NULL,
  `target_keuangan` int(11) NOT NULL,
  `realisasi_keuangan` int(11) NOT NULL,
  `lokasi` int(11) NOT NULL,
  `keterangan` int(11) NOT NULL,
  `bobot` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nama` varchar(20) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `id_ins` int(11) NOT NULL,
  `akses` enum('pegawai','Admin','UP') NOT NULL,
  `password` varchar(8) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nama`, `nip`, `id_user`, `id_ins`, `akses`, `password`, `photo`) VALUES
('Drs.SUKADARISMAN', '196409101992031005', 'sukadarisman', 139, 'pegawai', 'sukasuka', 'z14567005608471e7753179ae37fc96a0c520f095d4_s.jpg'),
('Mardiati Kristiana', '1969031519809032009', 'kristan', 139, 'pegawai', '67890', 'Image_46f94bd.jpg'),
('SUPARMAN, SIP', '197405291995031002', 'suparman', 139, 'UP', 'supermen', 'Image_f3c18c4.jpg'),
('Tri Cahya Wibawa', '198011192009021002', 'cahyo', 139, 'Admin', '1234', 'hqdefault.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cuti`
--
ALTER TABLE `cuti`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `cuti_approval`
--
ALTER TABLE `cuti_approval`
  ADD PRIMARY KEY (`id_cuti`);

--
-- Indexes for table `hari_libur`
--
ALTER TABLE `hari_libur`
  ADD PRIMARY KEY (`id_libur`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_ins`);

--
-- Indexes for table `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jab`);

--
-- Indexes for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  ADD PRIMARY KEY (`id_jamker`);

--
-- Indexes for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kegiatan`
--
ALTER TABLE `kegiatan`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indexes for table `perizinan`
--
ALTER TABLE `perizinan`
  ADD PRIMARY KEY (`id_izin`);

--
-- Indexes for table `presensi_manual`
--
ALTER TABLE `presensi_manual`
  ADD PRIMARY KEY (`id_pres`);

--
-- Indexes for table `presensi_record_data`
--
ALTER TABLE `presensi_record_data`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `sub_kegiatan`
--
ALTER TABLE `sub_kegiatan`
  ADD PRIMARY KEY (`id_keg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cuti`
--
ALTER TABLE `cuti`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `cuti_approval`
--
ALTER TABLE `cuti_approval`
  MODIFY `id_cuti` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hari_libur`
--
ALTER TABLE `hari_libur`
  MODIFY `id_libur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_ins` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=227;

--
-- AUTO_INCREMENT for table `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jab` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `jam_kerja`
--
ALTER TABLE `jam_kerja`
  MODIFY `id_jamker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis_cuti`
--
ALTER TABLE `jenis_cuti`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kegiatan`
--
ALTER TABLE `kegiatan`
  MODIFY `id_keg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `perizinan`
--
ALTER TABLE `perizinan`
  MODIFY `id_izin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `presensi_manual`
--
ALTER TABLE `presensi_manual`
  MODIFY `id_pres` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `presensi_record_data`
--
ALTER TABLE `presensi_record_data`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
