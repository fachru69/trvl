-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2019 at 03:44 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `nama`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Kunto'),
(2, 'user', 'ee11cbb19052e40b07aac0ca060c23ee', 'Aji');

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id_artikel` int(10) NOT NULL,
  `judul_artikel` varchar(225) NOT NULL,
  `konten_artikel` varchar(200) NOT NULL,
  `full_artikel` text NOT NULL,
  `tgl_artikel` date NOT NULL,
  `id_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id_artikel`, `judul_artikel`, `konten_artikel`, `full_artikel`, `tgl_artikel`, `id_img`) VALUES
(1, 'Gunung Rinjani', 'Gunung Rinjani merupakan gunung yang berada di Nusa Tenggara', 'Gunung Rinjani adalah gunung yang berlokasi di Pulau Lombok, Nusa Tenggara Barat. Gunung yang merupakan gunung berapi kedua tertinggi di Indonesia dengan ketinggian 3.726 m dpl serta terletak pada lintang 8º25\' LS dan 116º28\' BT ini merupakan gunung favorit bagi pendaki Indonesia karena keindahan pemandangannya. Gunung ini merupakan bagian dari Taman Nasional Gunung Rinjani yang memiliki luas sekitar 41.330 ha dan ini akan diusulkan penambahannya sehingga menjadi 76.000 ha ke arah barat dan timur.', '2018-10-05', '1'),
(2, 'Gili Trawangan', 'Gili Trawangan adalah yang terbesar dari ketiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok.', 'Pantai Gili Trawangan\r\nGili Trawangan adalah yang terbesar dari ketiga pulau kecil atau gili yang terdapat di sebelah barat laut Lombok. Trawangan juga satu-satunya gili yang ketinggiannya di atas permukaan laut cukup signifikan. Dengan panjang 3 km dan lebar 2 km, Trawangan berpopulasi sekitar 800 jiwa. Di antara ketiga gili tersebut, Trawangan memiliki fasilitas untuk wisatawan yang paling beragam; kedai \"Tîr na Nôg\" mengklaim bahwa Trawangan adalah pulau terkecil di dunia yang ada bar Irlandia-nya. Bagian paling padat penduduk adalah sebelah timur pulau ini.', '2018-10-05', '2'),
(3, 'Lembah Balieum', 'Lembah Baliem merupakan lembah di pegunungan Jayawijaya', 'Lembah ini dikenal juga sebagai grand baliem valley merupakan tempat tinggal suku Dani yang terletak di Desa Wosilimo, 27 km dari Wamena, Papua. Selain Suku Dani beberapa suku lainnya hidup bertetangga di lembah ini yakni Suku Yali dan suku Lani.', '2018-10-05', '');

-- --------------------------------------------------------

--
-- Table structure for table `destinasi`
--

CREATE TABLE `destinasi` (
  `id_destinasi` int(10) NOT NULL,
  `judul_destinasi` varchar(225) NOT NULL,
  `isi_destinasi` varchar(200) NOT NULL,
  `tgl_destinasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destinasi`
--

INSERT INTO `destinasi` (`id_destinasi`, `judul_destinasi`, `isi_destinasi`, `tgl_destinasi`) VALUES
(1, 'Danau Sentani', 'Danau Sentani berada di bawah lereng Pegunungan Cagar Alam Cyclops yang memiliki luas sekitar 245.000 hektar.', '2018-10-05'),
(2, 'Lembah Balieum', 'Lembah Baliem berada di ketinggian 1600 meter dari permukaan laut yang dikelilingi pegunungan', '2018-10-05'),
(3, 'Wae Rebo', 'Wae Rebo adalah sebuah desa adat terpencil dan misterius di Kabupaten Manggarai, Nusa Tenggara Timur.', '2019-02-01'),
(4, 'Pantai Bokori', 'Pulau yang dulu tidak terawat sekarang menjadi pulau yang cantik dengan berbagai fasilitas yang mewah seperti villa, lapangan volley pantai, gazebo, toilet umum, dll', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `feat_artikel`
--

CREATE TABLE `feat_artikel` (
  `id_feat` int(10) NOT NULL,
  `judul_feat` varchar(225) NOT NULL,
  `isi_feat` varchar(200) NOT NULL,
  `tgl_feat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feat_artikel`
--

INSERT INTO `feat_artikel` (`id_feat`, `judul_feat`, `isi_feat`, `tgl_feat`) VALUES
(1, 'Air Terjun Sipiso Piso', 'Air Terjun Sipiso-piso merupakan salah satu tempat wisata di Pulau Sumatera. Berada di Kabupaten Karo, Sumatera .....', '2018-10-05'),
(2, 'Candi Prambanan', 'Candi Prambanan atau Candi Roro Jonggrang adalah kompleks candi Hindu terbesar di Indonesia yang dibangun pada abad ke-9 masehi.', '2018-10-05'),
(3, 'Kampung Naga', 'Kampung Naga terletak di Tasikmalaya, Jawa Barat, merupakan suatu perkampungan yang dihuni oleh sekelompok.....', '2019-02-01'),
(4, 'Grand Canyon', 'Cukang Taneuh atau Green Canyon adalah salah satu objek wisata di Jawa Barat yang terletak di Desa Kertayasa....', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `img_article`
--

CREATE TABLE `img_article` (
  `id_img` int(10) NOT NULL,
  `id_article` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_article`
--

INSERT INTO `img_article` (`id_img`, `id_article`, `img_name`) VALUES
(1, 1, '01-750x350.jpg'),
(2, 2, '02-750x350.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `img_artikel`
--

CREATE TABLE `img_artikel` (
  `id_img_artikel` int(10) NOT NULL,
  `id_artikel` int(10) NOT NULL,
  `img_artikel_name` varchar(225) NOT NULL,
  `tgl_img_artikel` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_artikel`
--

INSERT INTO `img_artikel` (`id_img_artikel`, `id_artikel`, `img_artikel_name`, `tgl_img_artikel`) VALUES
(1, 1, '01-750x350.jpg', '2018-10-05'),
(2, 2, '02-750x350.jpg', '2018-10-05'),
(3, 3, '03.jpg', '2018-10-05'),
(4, 4, 'Prambanan-Temple-Yogyakarta.jog', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `img_destinasi`
--

CREATE TABLE `img_destinasi` (
  `id_img_destinasi` int(10) NOT NULL,
  `id_destinasi` int(10) NOT NULL,
  `img_dest_name` varchar(200) NOT NULL,
  `tgl_img_destinasi` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_destinasi`
--

INSERT INTO `img_destinasi` (`id_img_destinasi`, `id_destinasi`, `img_dest_name`, `tgl_img_destinasi`) VALUES
(1, 1, '-01.jpg', '2018-10-05'),
(2, 2, '-02.jpg', '2018-10-05'),
(3, 3, '-03.jpg', '2019-02-01'),
(4, 4, '-04.jpg', '2019-02-01'),
(5, 5, '-05.jpg', '2019-02-01'),
(6, 6, '-06.jpg', '2019-02-01'),
(7, 7, '-07.jpg', '2019-02-01'),
(8, 8, '-08.jpg', '2019-02-01');

-- --------------------------------------------------------

--
-- Table structure for table `img_feat`
--

CREATE TABLE `img_feat` (
  `id_img_feat` int(10) NOT NULL,
  `id_feat` int(10) NOT NULL,
  `img_feat_name` varchar(200) NOT NULL,
  `tgl_img_feat` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `img_feat`
--

INSERT INTO `img_feat` (`id_img_feat`, `id_feat`, `img_feat_name`, `tgl_img_feat`) VALUES
(1, 1, '1.jpg', '2018-10-05'),
(2, 2, '2.jpg', '2018-10-05'),
(3, 3, '3.jpg', '2018-10-05'),
(4, 4, '4.jpg', '2018-10-05');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komen` int(10) NOT NULL,
  `id_artikel` int(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `komentar` text NOT NULL,
  `tgl` date NOT NULL,
  `email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komen`, `id_artikel`, `nama`, `komentar`, `tgl`, `email`) VALUES
(1, 1, 'Fahmi', 'Naha sih', '2018-11-05', 'fahmi@gmail.com'),
(2, 1, 'Aji', 'kenapa atuh ieu teh', '2018-11-05', 'aji@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `destinasi`
--
ALTER TABLE `destinasi`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- Indexes for table `feat_artikel`
--
ALTER TABLE `feat_artikel`
  ADD PRIMARY KEY (`id_feat`);

--
-- Indexes for table `img_article`
--
ALTER TABLE `img_article`
  ADD PRIMARY KEY (`id_img`);

--
-- Indexes for table `img_artikel`
--
ALTER TABLE `img_artikel`
  ADD PRIMARY KEY (`id_img_artikel`);

--
-- Indexes for table `img_destinasi`
--
ALTER TABLE `img_destinasi`
  ADD PRIMARY KEY (`id_img_destinasi`);

--
-- Indexes for table `img_feat`
--
ALTER TABLE `img_feat`
  ADD PRIMARY KEY (`id_img_feat`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komen`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `destinasi`
--
ALTER TABLE `destinasi`
  MODIFY `id_destinasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feat_artikel`
--
ALTER TABLE `feat_artikel`
  MODIFY `id_feat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `img_article`
--
ALTER TABLE `img_article`
  MODIFY `id_img` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `img_artikel`
--
ALTER TABLE `img_artikel`
  MODIFY `id_img_artikel` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `img_destinasi`
--
ALTER TABLE `img_destinasi`
  MODIFY `id_img_destinasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `img_feat`
--
ALTER TABLE `img_feat`
  MODIFY `id_img_feat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komen` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
