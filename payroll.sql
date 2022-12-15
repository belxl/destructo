-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2022 at 11:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `payroll`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_absensi`
--

CREATE TABLE `data_absensi` (
  `id_absensi` int(11) NOT NULL,
  `bulan` varchar(15) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `jumlah_hadir` int(11) NOT NULL,
  `sakit` int(11) NOT NULL,
  `alfa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_absensi`
--

INSERT INTO `data_absensi` (`id_absensi`, `bulan`, `nik`, `nama_karyawan`, `jenis_kelamin`, `nama_jabatan`, `jumlah_hadir`, `sakit`, `alfa`) VALUES
(45, '082022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 27, 0, 1),
(46, '082022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 28, 0, 0),
(47, '082022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 28, 0, 1),
(48, '082022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 26, 0, 2),
(49, '082022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 26, 1, 1),
(50, '082022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 26, 0, 0),
(51, '082022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 26, 0, 0),
(52, '082022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 26, 0, 0),
(53, '082022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 26, 0, 0),
(54, '092022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 25, 1, 0),
(55, '092022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 26, 0, 0),
(56, '092022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 26, 0, 0),
(57, '092022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 26, 0, 0),
(58, '092022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 25, 1, 0),
(59, '082022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 24, 0, 2),
(60, '082022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 25, 0, 0),
(61, '082022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 25, 0, 0),
(62, '082022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 25, 0, 0),
(63, '082022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 25, 0, 0),
(64, '082022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 1, 1, 1),
(65, '082022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 1, 1, 1),
(66, '082022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 1, 1, 1),
(67, '082022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 1, 1, 1),
(68, '082022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 1, 1, 1),
(69, '082022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 1, 0, 1),
(70, '082022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 1, 0, 1),
(71, '082022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 0, 0, 0),
(72, '082022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 0, 0, 0),
(73, '082022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 0, 0, 0),
(74, '082022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 1, 0, 1),
(75, '082022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 1, 1, 0),
(76, '082022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 1, 0, 1),
(77, '082022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 1, 0, 1),
(78, '082022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 1, 1, 0),
(79, '012023', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 1, 0, 1),
(80, '012023', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 1, 0, 1),
(81, '012023', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 1, 0, 1),
(82, '012023', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 0, 0, 0),
(83, '012023', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 0, 0, 0),
(84, '102022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 1, 0, 1),
(85, '102022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 0, 0, 0),
(86, '102022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 0, 0, 0),
(87, '102022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 0, 0, 0),
(88, '102022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 0, 0, 0),
(89, '122022', '16180001', 'Chill', 'Laki-laki', 'PIC Supervisor', 1, 1, 1),
(90, '122022', '161800012', 'Delux', 'Laki-laki', 'Staff Payroll', 0, 0, 0),
(91, '122022', '16180008', 'firda', 'Perempuan', 'Staff Payroll', 0, 0, 0),
(92, '122022', '16180006', 'iqbal', 'Laki-laki', 'System Engineer', 0, 0, 0),
(93, '122022', '16180003', 'rambo', 'Laki-laki', 'PIC Supervisor', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `data_jabatan`
--

CREATE TABLE `data_jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `gaji_pokok` varchar(50) NOT NULL,
  `transport` varchar(50) NOT NULL,
  `uang_makan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_jabatan`
--

INSERT INTO `data_jabatan` (`id_jabatan`, `nama_jabatan`, `gaji_pokok`, `transport`, `uang_makan`) VALUES
(17, 'Staff Payroll', '3000000', '800000', '750000'),
(19, 'PIC Supervisor', '4500000', '752000', '800000'),
(20, 'System Engineer', '4500000', '750000', '500000'),
(21, 'security', '3000000', '150000', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `data_karyawan`
--

CREATE TABLE `data_karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `nama_karyawan` varchar(50) NOT NULL,
  `username` varchar(120) NOT NULL,
  `password` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `jabatan` varchar(225) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `status` varchar(30) NOT NULL,
  `kontak` varchar(20) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_karyawan`
--

INSERT INTO `data_karyawan` (`id_karyawan`, `nik`, `nama_karyawan`, `username`, `password`, `alamat`, `jenis_kelamin`, `jabatan`, `tgl_masuk`, `status`, `kontak`, `foto`, `hak_akses`) VALUES
(20, '16180006', 'iqbal', 'iqbal', 'caf1a3dfb505ffed0d024130f58c5cfa', 'bandung, melong asih No.3', 'Laki-laki', 'System Engineer', '2022-07-31', 'Karyawan Tidak Tetap', '082319880477', '_MG_26715.JPG', 1),
(21, '16180008', 'firda', 'firda', '202cb962ac59075b964b07152d234b70', 'bandung, perkutut No.111', 'Perempuan', 'Staff Payroll', '2022-07-31', 'Karyawan Tidak Tetap', '082319237218365', '_MG_26771.JPG', 1),
(25, '16180003', 'rambo', 'rambo', '202cb962ac59075b964b07152d234b70', 'bandung 05', 'Laki-laki', 'PIC Supervisor', '2022-08-02', 'Karyawan Tetap', '091238136134', '_MG_26741.JPG', 2),
(26, '16180001', 'Chill', 'chill', '827ccb0eea8a706c4c34a16891f84e7b', 'melong asih 01', 'Laki-laki', 'PIC Supervisor', '2022-08-02', 'Karyawan Tidak Tetap', '082319773421', '_MG_2678.JPG', 2),
(27, '161800012', 'Delux', 'delux', '202cb962ac59075b964b07152d234b70', 'bandung', 'Laki-laki', 'Staff Payroll', '2022-08-30', 'Karyawan Tetap', '0832429877721', 'Screenshot_(13)1.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `hak_akses` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'admin', 1),
(2, 'karyawan', 2);

-- --------------------------------------------------------

--
-- Table structure for table `potongan_gaji`
--

CREATE TABLE `potongan_gaji` (
  `id` int(11) NOT NULL,
  `potongan` varchar(120) NOT NULL,
  `jumlah_potongan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `potongan_gaji`
--

INSERT INTO `potongan_gaji` (`id`, `potongan`, `jumlah_potongan`) VALUES
(10, 'Alpha', 150000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_absensi`
--
ALTER TABLE `data_absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indexes for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_absensi`
--
ALTER TABLE `data_absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `data_jabatan`
--
ALTER TABLE `data_jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `data_karyawan`
--
ALTER TABLE `data_karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `potongan_gaji`
--
ALTER TABLE `potongan_gaji`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
