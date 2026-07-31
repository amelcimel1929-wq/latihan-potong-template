-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 31, 2026 at 02:20 AM
-- Server version: 8.4.3
-- PHP Version: 8.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `profile-cv`
--

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id_education` int NOT NULL,
  `nama_jurusan` varchar(100) NOT NULL,
  `tahun_belajar` varchar(40) NOT NULL,
  `tempat_belajar` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id_education`, `nama_jurusan`, `tahun_belajar`, `tempat_belajar`, `deskripsi`) VALUES
(4, 'pplg', '2024', 'smk negeri 3 banjar', 'web dasar, ui/ux, basis data');

-- --------------------------------------------------------

--
-- Table structure for table `familiar`
--

CREATE TABLE `familiar` (
  `id_familiar` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `familiar`
--

INSERT INTO `familiar` (`id_familiar`, `nama`, `icon`) VALUES
(2, 'Laravel', 'devicon-laravel-plain'),
(3, 'JavaScript', 'devicon-javascript-plain'),
(4, 'HTML', 'devicon-html5-plain'),
(5, 'CSS', 'devicon-css3-plain'),
(8, 'php', 'devicon-php-plain');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `id_job` int NOT NULL,
  `nama_pekerjaan` varchar(200) NOT NULL,
  `tahun_bekerja` varchar(100) NOT NULL,
  `tempat_bekerja` varchar(100) NOT NULL,
  `deskripsi` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`id_job`, `nama_pekerjaan`, `tahun_bekerja`, `tempat_bekerja`, `deskripsi`) VALUES
(4, 'programer kaya raya', '2027-selamanya', 'adalah', 0x63696e74612063616e74696b),
(8, 'ceo kaya raya', '2024-2025', 'pt aku jaya', 0x6261696b);

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id_language` int NOT NULL,
  `bahasa` varchar(100) NOT NULL,
  `flag` varchar(200) NOT NULL,
  `level` enum('Pemula','Menengah','Mahir','Sangat lancar') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id_language`, `bahasa`, `flag`, `level`) VALUES
(4, 'indonesia', '1784793387.jpg', 'Sangat lancar');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int NOT NULL,
  `email` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `email`, `password`) VALUES
(1, 'cinta@gmail.com', 'password');

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE `mobile` (
  `id_mobile` int NOT NULL,
  `nama` varchar(256) NOT NULL,
  `icon` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`id_mobile`, `nama`, `icon`) VALUES
(1, 'android', 'devicon-android-plain'),
(2, 'Kotlin', 'devicon-kotlin-plain'),
(3, 'Java', 'devicon-java-plain'),
(4, 'Android', 'devicon-android-plain'),
(5, 'Kotlin', 'devicon-kotlin-plain'),
(6, 'php', 'devicon-bootstrap-plain'),
(8, 'jktyt', 'yut');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id_portfolio` int NOT NULL,
  `judul_portfolio` varchar(100) NOT NULL,
  `img` varchar(250) NOT NULL,
  `link` varchar(250) NOT NULL,
  `deskripsi` text NOT NULL,
  `jenis` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id_portfolio`, `judul_portfolio`, `img`, `link`, `deskripsi`, `jenis`) VALUES
(3, 'osis smk', '1784865650_6a62e372c5100.jpg', 'https:/berdua', '1234567890', 'luutyhr'),
(6, 'pantia pelantikan', '1785038686.jpeg', 'www.jpg', '12345678', 'apaaja'),
(8, 'praktek nari', '1785117503.jpeg', 'www.jpgg', 'praktek nari pelajaran ppkn kelas 11', 'web'),
(9, 'panitia pelantikan', '1785117593.jpeg', 'www.osis', 'peserta sedang makan bersama', 'web'),
(10, 'peserta lddk', '1785117661.jpeg', 'www.lddk', 'lddk keras banget gasuka tiarap di lapang utama', 'web'),
(11, 'panitia mpls', '1785117877.jpeg', 'https://www.instagram.com', 'menjadi panitia mpls ketika tahun pelajaran baru', 'jrfudig'),
(13, 'special', '1785209915.png', 'https://www.instagram.com/_secretcaaa?igsh=MTdxbG9qcTZzcmh6eg==', 'uyutt', 'hyuy');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id_profile` int NOT NULL,
  `nama` varchar(200) NOT NULL,
  `about` text NOT NULL,
  `website` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `linkeid` varchar(250) NOT NULL,
  `nationality` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id_profile`, `nama`, `about`, `website`, `phone`, `email`, `address`, `linkeid`, `nationality`) VALUES
(1, 'cinta amelia putriiia', 'Saya adalah seorang pelajar SMK jurusan Rekayasa Perangkat Lunak (RPL) yang memiliki ketertarikan dalam bidang teknologi informasi dan pengembangan aplikasi berbasis web. Saya memiliki semangat belajar yang tinggi dan terus mengembangkan kemampuan dalam pemrograman, khususnya menggunakan PHP, Laravel, MySQL, HTML, CSS, dan Bootstrap. Saya juga senang mempelajari hal-hal baru, memecahkan masalah, serta mengembangkan keterampilan untuk mempersiapkan diri menghadapi dunia kerja di bidang teknologi,\r\n', 'okk', '089520037861', 'cintaku@gmail.com', 'gg jambu,patukan, ambarketawang, kec.gamping, kabupaten sleman, daerah istimewa yogyakarta 55294', 'https://www.instagram.com/_secretcaaa', 'kebangsaan indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `reference`
--

CREATE TABLE `reference` (
  `id_reference` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `perusahaan` varchar(100) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reference`
--

INSERT INTO `reference` (`id_reference`, `nama`, `jabatan`, `perusahaan`, `phone`, `email`) VALUES
(1, 'cinta amelia putri', 'orang kaya banget', 'pt abadi', '089378612003', 'gmail.com'),
(2, 'ggjhg', 'jguytyu', 'uy', 'iuy7i67', '');

-- --------------------------------------------------------

--
-- Table structure for table `sidebar_photo`
--

CREATE TABLE `sidebar_photo` (
  `id_sidebar_foto` int NOT NULL,
  `sidebar_photo` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sidebar_photo`
--

INSERT INTO `sidebar_photo` (`id_sidebar_foto`, `sidebar_photo`) VALUES
(3, '1785036204.jpeg'),
(4, '1784797477.jpg'),
(6, '1785036264.jpg'),
(7, '1785065146.jpg'),
(8, '1785117717.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id_skill` int NOT NULL,
  `nama_skill` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id_skill`, `nama_skill`) VALUES
(1, 'okei');

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE `tools` (
  `id_tools` int NOT NULL,
  `nama` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tools`
--

INSERT INTO `tools` (`id_tools`, `nama`, `icon`) VALUES
(1, 'VSCode', 'devicon-vscode-plain'),
(2, 'MySQL', 'devicon-mysql-plain'),
(3, 'Firebase', 'devicon-firebase-plain'),
(4, 'Canva', 'devicon-canva-plain'),
(6, 'Composer', 'devicon-composer-plain'),
(7, 'canva', 'devicon-canva-plain');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE `training` (
  `id_training` int NOT NULL,
  `nama_training` varchar(200) NOT NULL,
  `tahun_training` varchar(100) NOT NULL,
  `tempat_training` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`id_training`, `nama_training`, `tahun_training`, `tempat_training`, `deskripsi`) VALUES
(2, 'osis', '2024', 'smkn 3 banjar', 'sebelum masuk osis terlebih dahulu di test lalu di seleksi sebelum jadi anggota osis');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id_education`);

--
-- Indexes for table `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`id_familiar`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id_language`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `mobile`
--
ALTER TABLE `mobile`
  ADD PRIMARY KEY (`id_mobile`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id_portfolio`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- Indexes for table `reference`
--
ALTER TABLE `reference`
  ADD PRIMARY KEY (`id_reference`);

--
-- Indexes for table `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  ADD PRIMARY KEY (`id_sidebar_foto`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `tools`
--
ALTER TABLE `tools`
  ADD PRIMARY KEY (`id_tools`);

--
-- Indexes for table `training`
--
ALTER TABLE `training`
  ADD PRIMARY KEY (`id_training`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id_education` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `familiar`
--
ALTER TABLE `familiar`
  MODIFY `id_familiar` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `id_job` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id_language` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `mobile`
--
ALTER TABLE `mobile`
  MODIFY `id_mobile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id_portfolio` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id_profile` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reference`
--
ALTER TABLE `reference`
  MODIFY `id_reference` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sidebar_photo`
--
ALTER TABLE `sidebar_photo`
  MODIFY `id_sidebar_foto` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `skill`
--
ALTER TABLE `skill`
  MODIFY `id_skill` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tools`
--
ALTER TABLE `tools`
  MODIFY `id_tools` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `training`
--
ALTER TABLE `training`
  MODIFY `id_training` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
