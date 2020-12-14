-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2020 at 01:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wpu_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `lomba`
--

CREATE TABLE `lomba` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `penyelenggara` varchar(128) NOT NULL,
  `tingkat` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lomba`
--

INSERT INTO `lomba` (`id`, `nama`, `penyelenggara`, `tingkat`) VALUES
(6, 'PKM ELEKTRO', 'HMJ ELEKTRO', 'JURUSAN');

-- --------------------------------------------------------

--
-- Table structure for table `registered_team`
--

CREATE TABLE `registered_team` (
  `id` int(11) NOT NULL,
  `namatim` varchar(128) NOT NULL,
  `judul` varchar(128) NOT NULL,
  `dosen` varchar(128) NOT NULL,
  `nip` text NOT NULL,
  `nama_ketua` varchar(128) NOT NULL,
  `nim0` varchar(128) NOT NULL,
  `jurusan0` varchar(128) NOT NULL,
  `nama1` varchar(128) NOT NULL,
  `nim1` varchar(128) NOT NULL,
  `jurusan1` varchar(128) NOT NULL,
  `nama2` varchar(128) NOT NULL,
  `nim2` varchar(128) NOT NULL,
  `jurusan2` varchar(128) NOT NULL,
  `id_lomba` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registered_team`
--

INSERT INTO `registered_team` (`id`, `namatim`, `judul`, `dosen`, `nip`, `nama_ketua`, `nim0`, `jurusan0`, `nama1`, `nim1`, `jurusan1`, `nama2`, `nim2`, `jurusan2`, `id_lomba`, `id_user`) VALUES
(1, 'aczdsads', '', 'zasczxc', '123125', '', '', '', 'asczxd', '123125', 'asczxd', 'aczdsads', '123125', 'zxcsad', 0, 0),
(2, 'hehehe', '', 'hehehe', '12345', '', '', '', 'hehehe', '12345', 'heheheh', 'hehehe', '12345', 'hehehehe', 0, 0),
(3, '12312e', '', 'zxczdsa', 'zxcsqad', '', '', '', 'zxcsad', 'zxcawdwe', 'zxcwaqaw', '12312e', 'zxcqaqwe', 'zxcwar', 1, 6),
(4, 'asdasd', 'asdasda', 'sdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdasd', 'asdads', 'asdasd', 'asdasd', 'asdasd', 1, 8),
(5, 'asdad', 'sadasd', 'ads', 'asd', 'dasd', 'asd', 'asd', 'asd', 'asd', 'asdas', 'asdad', 'asd', 'asd', 1, 9),
(6, 'asdad', 'asdasda', '123', '123123', '12312', '312312', '3123123', '132', 'asdsad', 'asdsada', 'asdad', 'asd', 'adsas', 4, 9),
(7, 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaa', 'aaaaaaaaaaaa', 5, 9),
(8, 'asdad', 'asdasda', 'asdas', 'asd', 'asdasd', 'aaaaaaaaaaaa', '3123123', 'asdasda', 'asdasdasd', 'asdads', 'asdad', 'aaaaaaaaaaaa', 'asd', 5, 10),
(9, 'nama tim', 'asdad', 'asdas', 'asd', 'asd', 'sadasd', 'asdsda', 'sadsd', 'adsasd', 'asdad', 'nama tim', 'asdasd', 'asdsa', 6, 9);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(5, 'hehehe', 'wadidaw@gmail.com', 'default.jpg', '$2y$10$9hu5HD1J0zyr2LhhjVDyUevAmov47wgkuK45ra4PeKc8mpZ2ttI0O', 2, 1, 1605346325),
(6, 'kursi', 'kursigeming123@gmail.com', 'default.jpg', '$2y$10$6HiR.IYxKIKXKwtUJNGJrOz1ydSUFA2whDGI0C/9RQHGXUjngeyyG', 2, 1, 1605360853),
(7, 'meja geminggg', 'mejageming123@gmail.com', 'Screenshot_2.png', '$2y$10$sg4XXIvsB0jnMSjo4Or9S.OrTU.O2nHRfnEPCcKMEElxVM6.IBgXe', 1, 1, 1605363564),
(8, 'Nur Syahrial Ma', 'nsmaulidi@gmail.com', 'PP.jpg', '$2y$10$g1ABZrm0ZxF6XjcEKkfsSeBE2Q0wzWTR.R0h0lArQIP8MMyu0mEz6', 1, 1, 1605706284),
(9, 'Nur Syahrial maulidi', 'naruto@gmail.com', 'a.png', '$2y$10$BJfHZ.n.IffUtb1BtSZK0.Q1DHnUdAHOOg74U3VGTOVcpCQZHtjES', 2, 1, 1606486669),
(10, 'sakura', 'sakura@gmail.com', '83785926_617110519079139_2973190503168243327_n.jpg', '$2y$10$7Jz2rUAQO5Vlx3k8DT9H1OC2NX53nC6QnqRgGrwTkXz1tvRfkdbwi', 2, 1, 1606563646),
(11, 'aldi', 'ald12@gmail.com', 'default.jpg', '$2y$10$DQD8wbjr5QE.oI6cFJmhder2wP00hN.2txCwlGf1NPDP4NfYaA9qy', 2, 1, 1607755178),
(12, 'asa', 'asa@gmail.com', 'default.jpg', '$2y$10$NyG0Lcmx8Gu1avP7wRNJn.fqtOzBvjM7Hc3TIYTSDMBXTciy.RjXq', 2, 1, 1607755318);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(10, 1, 4),
(12, 2, 5);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(4, 'Lomba - Admin'),
(5, 'Lomba');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(6, 0, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(7, 5, 'Daftar Lomba', 'user/daftarLomba', 'fas fa-fw fa-pen', 1),
(9, 4, 'Daftar Lomba - Admin', 'admin/daftarlomba', 'fas fa-fw fa-folder-plus', 1),
(10, 4, 'Daftar Team', 'admin/daftarTeam', 'fas fa-fw fa-users', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `lomba`
--
ALTER TABLE `lomba`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registered_team`
--
ALTER TABLE `registered_team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `lomba`
--
ALTER TABLE `lomba`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registered_team`
--
ALTER TABLE `registered_team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
