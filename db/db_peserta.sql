-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2024 at 05:01 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_peserta`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_penilaian`
--

CREATE TABLE `data_penilaian` (
  `id_alternative` varchar(300) NOT NULL,
  `hiragana` float DEFAULT NULL,
  `katakana` float DEFAULT NULL,
  `kata_benda` float DEFAULT NULL,
  `kata_kerja` float DEFAULT NULL,
  `kata_sifat` float DEFAULT NULL,
  `kesemaptaan_tubuh` varchar(326) DEFAULT NULL,
  `kesehatan` varchar(300) DEFAULT NULL,
  `lari` float DEFAULT NULL,
  `push_up` float DEFAULT NULL,
  `sit_up` float DEFAULT NULL,
  `wawancara` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_penilaian`
--

INSERT INTO `data_penilaian` (`id_alternative`, `hiragana`, `katakana`, `kata_benda`, `kata_kerja`, `kata_sifat`, `kesemaptaan_tubuh`, `kesehatan`, `lari`, `push_up`, `sit_up`, `wawancara`) VALUES
('007e27ed13ab57b2c4031ff71c0b5770', 104, 82, 20, 22, 9, 'Baik', 'Baik', 950, 22, 20, 'Buruk'),
('0624e750e963f73276b98667d5598655', 104, 102, 30, 55, 60, 'Baik', 'Baik', 1.3, 25, 20, 'Baik'),
('07440fd3c88af9529b1f6b514c537bc7', 90, 102, 30, 44, 60, 'Baik', 'Baik', 3, 25, 20, 'Cukup'),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 104, 102, 30, 59, 60, 'Baik', 'Baik', 3, 30, 22, 'Baik'),
('0cfc031d5ceb54f294b65394ded42301', 104, 102, 28, 57, 59, 'Baik', 'Sangat Baik', 2, 18, 25, 'Baik'),
('137a3b5bc8238f754deb4ca515564f48', 102, 89, 28, 47, 58, 'Cukup', 'Baik', 1.5, 20, 19, 'Cukup'),
('18cd3e22a084851785ff94eedd0ab73d', 100, 102, 29, 50, 31, 'Cukup', 'Baik', 1.5, 28, 25, 'Cukup'),
('191d905848a31e2569a9c708182c6b39', 104, 102, 26, 35, 55, 'Cukup', 'Sangat Cukup', 800, 11, 9, 'Baik'),
('1a08236523b7acc094c48f75e45dfb52', 104, 102, 27, 42, 58, 'Baik', 'Sangat Cukup', 1.5, 15, 18, 'Baik'),
('2212930fd73c5421302aa5df1a73b5d3', 99, 81, 19, 13, 38, 'Baik', 'Baik', 2, 30, 21, 'Baik'),
('24980692f5ad78cc6213a440c92bc8c3', 101, 90, 8, 16, 22, 'Baik', 'Baik', 2, 20, 24, 'Cukup'),
('27470c4b91df063ff1218fb742cb52a7', 104, 102, 23, 24, 37, 'Baik', 'Baik', 1.8, 20, 20, 'Cukup'),
('34cedee243a674106ab38ee50280a045', 79, 70, 20, 12, 53, 'Baik', 'Baik', 1.5, 12, 15, 'Cukup'),
('374820e0cd4b34bfe70a4e0ae4b3a943', 104, 99, 13, 20, 60, 'Baik', 'Baik', 2.7, 29, 25, 'Baik'),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 102, 102, 30, 60, 55, 'Baik', 'Baik', 1, 20, 8, 'Baik'),
('4dad55457f37046991adf79ad00bc9e4', 99, 87, 30, 13, 50, 'Baik', 'Baik', 2, 20, 21, 'Cukup'),
('4e5abeb7a424ab8a1e34a9d252b52e98', 99, 102, 24, 42, 46, 'Baik', 'Baik', 2.4, 30, 22, 'Baik'),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 103, 85, 10, 12, 25, 'Cukup', 'Cukup', 1, 12, 10, 'Cukup'),
('50a8be203cca886a6ea9988ad4c40f45', 99, 102, 24, 51, 13, 'Baik', 'Baik', 2, 30, 20, 'Cukup'),
('525630fdcf05edf22881f5ef6e27fb61', 90, 95, 10, 40, 55, 'Cukup', 'Cukup', 1.1, 10, 10, 'Sangat Cukup'),
('57cbfbd7546f61403fab58186cf11c94', 90, 102, 23, 14, 27, 'Baik', 'Baik', 1.1, 15, 9, 'Baik'),
('581dabeb5724331be0a2492b7c2d74cd', 104, 102, 30, 30, 42, 'Baik', 'Sangat Baik', 2.5, 20, 20, 'Sangat Baik'),
('593e0b3b575b5ce62e435e02795da886', 103, 94, 23, 24, 41, 'Cukup', 'Sangat Baik', 1.1, 25, 30, 'Baik'),
('5a842342235e8019ca8aeeb6e83ed5f0', 104, 102, 30, 34, 42, 'Baik', 'Baik', 1.1, 15, 12, 'Sangat Baik'),
('5a9fcba443001dfdd815eee1804a7ef5', 104, 96, 24, 16, 26, 'Cukup', 'Baik', 900, 15, 15, 'Baik'),
('5ef96f57a8e734e9c1205034b5204630', 74, 80, 25, 14, 37, 'Cukup', 'Cukup', 3, 25, 20, 'Cukup'),
('61b06fec60e39646e414c7cec098efad', 99, 98, 29, 29, 39, 'Baik', 'Baik', 2, 29, 15, 'Cukup'),
('632319ad88cd2d97a0f58cc873c75a0e', 100, 101, 15, 27, 20, 'Baik', 'Baik', 2, 20, 12, 'Sangat Cukup'),
('63289dd5074c88827653b5d2b8244c45', 104, 102, 25, 51, 53, 'Cukup', 'Baik', 1, 20, 22, 'Baik'),
('650db6aaf2558b95cb61a880a72cbdf1', 95, 89, 25, 60, 58, 'Baik', 'Baik', 2.7, 28, 20, 'Cukup'),
('653d92edcf5991407e4c8ee77888392c', 102, 100, 30, 46, 50, 'Cukup', 'Baik', 2, 31, 22, 'Baik'),
('66b2a5c4fa7b1fa76840a6b381c4989e', 104, 95, 28, 45, 53, 'Baik', 'Cukup', 990, 10, 12, 'Baik'),
('70eb3f08939bd33f3f84ace544569c35', 91, 80, 11, 29, 22, 'Baik', 'Sangat Cukup', 900, 15, 10, 'Cukup'),
('712eb89b67a162c4abc3f3e7b91a29c5', 85, 102, 6, 10, 3, 'Cukup', 'Baik', 1, 9, 15, 'Cukup'),
('72a30390edc8cfc45fbbdb83b45233f4', 96, 88, 22, 26, 55, 'Cukup', 'Baik', 2, 26, 18, 'Cukup'),
('73137686cc779dda77f25efeb87d66c3', 102, 100, 7, 4, 28, 'Baik', 'Baik', 2.1, 26, 22, 'Buruk'),
('7bb3a7f46d0d58c4aac322f4dd032d09', 104, 94, 28, 56, 46, 'Baik', 'Baik', 1.5, 26, 15, 'Baik'),
('829c57255fd785c25da9e37e031098ab', 104, 94, 28, 56, 21, 'Cukup', 'Baik', 1, 20, 10, 'Cukup'),
('8a8fc375742f585842254ba0539e273d', 97, 90, 30, 30, 21, 'Baik', 'Cukup', 1, 17, 15, 'Cukup'),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 100, 80, 8, 10, 33, 'Baik', 'Baik', 1, 10, 15, 'Cukup'),
('8ce9d3b0a20498ea8b849b4879160720', 100, 102, 30, 60, 40, 'Cukup', 'Baik', 1, 17, 15, 'Sangat Baik'),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 100, 102, 22, 57, 15, 'Baik', 'Sangat Baik', 2, 30, 11, 'Baik'),
('958f6df27e5b0c4afa56585d9a30c75d', 100, 92, 22, 44, 44, 'Baik', 'Baik', 2, 20, 20, 'Cukup'),
('97e078f64920b784e2faf7cc3ff07bd7', 92, 102, 25, 44, 36, 'Cukup', 'Cukup', 1.3, 18, 10, 'Baik'),
('9c89641d488b4b6d4319bf944283a131', 100, 100, 21, 41, 16, 'Baik', 'Sangat Baik', 2.5, 31, 25, 'Cukup'),
('a7df1b179073bd345aa0ea96cfbb1968', 100, 81, 30, 20, 58, 'Baik', 'Baik', 2.4, 30, 25, 'Cukup'),
('b05e59a215c5a8c05588682e6513ee3b', 100, 102, 27, 54, 35, 'Baik', 'Cukup', 900, 9, 15, 'Cukup'),
('b7b7d9123f3e7194c9eb6da442f88c4b', 95, 77, 9, 16, 41, 'Cukup', 'Cukup', 2, 26, 20, 'Cukup'),
('bbbad11a8f3c2e396d03ca84dc758590', 96, 100, 29, 14, 26, 'Baik', 'Cukup', 1.1, 19, 21, 'Sangat Cukup'),
('bce1f024dd8cf31bfd41caac7b680e61', 92, 98, 30, 28, 30, 'Baik', 'Cukup', 1, 9, 12, 'Baik'),
('c3649a94da07c44186fe52011678338c', 104, 92, 12, 55, 36, 'Cukup', 'Baik', 900, 12, 10, 'Cukup'),
('c39992be9a99df410e3439dec15611e2', 104, 85, 28, 44, 16, 'Cukup', 'Cukup', 1, 9, 11, 'Baik'),
('c617b1cbe46db8e7277b06aaa8568df9', 99, 71, 23, 5, 21, 'Baik', 'Cukup', 1, 12, 15, 'Cukup'),
('c93411fc21f0367413df6cd691dcb5d1', 104, 99, 30, 24, 30, 'Baik', 'Baik', 1.1, 17, 10, 'Cukup'),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 104, 100, 28, 57, 59, 'Baik', 'Baik', 2.1, 22, 28, 'Sangat Baik'),
('ca79ae039941586b658122b0021a7746', 100, 90, 22, 13, 20, 'Baik', 'Sangat Cukup', 1, 15, 15, 'Baik'),
('d2e3e3573b51e6e735aada60780bf304', 104, 89, 26, 28, 40, 'Baik', 'Baik', 2, 33, 25, 'Baik'),
('d570633b73890ebb7783b63a4fa34c82', 101, 90, 10, 25, 12, 'Baik', 'Baik', 1, 15, 10, 'Cukup'),
('da6014ab639140658890a27c0a34cf5f', 73, 100, 22, 56, 60, 'Cukup', 'Baik', 900, 15, 10, 'Baik'),
('e115d8748b84cec3a6fdaa964f65b6dc', 77, 88, 24, 9, 18, 'Baik', 'Baik', 3, 24, 18, 'Cukup'),
('e21e25fac0087246e61256cc4fb1b92c', 102, 100, 19, 29, 55, 'Baik', 'Sangat Baik', 2.6, 28, 19, 'Baik'),
('e2b42bd03a61c84f0544a37d60edc1fb', 88, 93, 25, 46, 59, 'Cukup', 'Sangat Cukup', 2, 20, 20, 'Cukup'),
('e3d87d58ba3286896f6b88b7b36dd80f', 102, 96, 27, 17, 57, 'Cukup', 'Baik', 1.8, 21, 19, 'Sangat Cukup'),
('e75a9e574b71efa70dc0945a6ad900e0', 95, 90, 26, 10, 57, 'Baik', 'Baik', 1.8, 21, 17, 'Baik'),
('e9b760e5f1ae7e72ea1a4190994f97b2', 100, 100, 18, 11, 43, 'Baik', 'Baik', 2.5, 26, 20, 'Cukup'),
('f350eb95f8b4176c45018ed56bd926d4', 99, 100, 26, 30, 35, 'Baik', 'Cukup', 800, 12, 14, 'Cukup'),
('f7d86252a7165188b6e608b5250e067d', 88, 90, 26, 10, 18, 'Baik', 'Baik', 2.1, 30, 18, 'Baik'),
('f85913121001e40e6d05f3481f6aaa2c', 104, 101, 11, 35, 43, 'Cukup', 'Sangat Cukup', 1, 18, 20, 'Cukup'),
('f8b2fa8912a4941a7c9b9f78648588a1', 98, 100, 19, 29, 45, 'Cukup', 'Baik', 1.5, 10, 5, 'Cukup'),
('fe34ce7140c46130c5d43a0b27aa1adb', 85, 95, 11, 17, 16, 'Baik', 'Sangat Cukup', 1.1, 23, 15, 'Baik');

-- --------------------------------------------------------

--
-- Table structure for table `data_peserta`
--

CREATE TABLE `data_peserta` (
  `user_id` varchar(256) NOT NULL,
  `nama` varchar(256) NOT NULL,
  `usia` varchar(50) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `tinggi_badan` float NOT NULL,
  `berat_badan` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_peserta`
--

INSERT INTO `data_peserta` (`user_id`, `nama`, `usia`, `pendidikan`, `alamat`, `tinggi_badan`, `berat_badan`) VALUES
('007e27ed13ab57b2c4031ff71c0b5770', 'Ade Eliasyah Darma', '21', 'SMA', 'Medan', 166, 52),
('0624e750e963f73276b98667d5598655', 'Govinda Sirait', '20', 'SMK', 'Batu Bara', 173, 66),
('07440fd3c88af9529b1f6b514c537bc7', 'Muhammad Ardiansyah ', '22', 'SMA', 'Medan', 174, 64),
('08858cb37f45ed279cbdb6228924baaa', 'Rionaldi Sebayang', '22', 'SMA', 'Medan', 174, 68),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 'Bagas Himawan Gutama', '20', 'SMA', 'Asahan', 175, 65),
('0cfc031d5ceb54f294b65394ded42301', 'Patar Parulian Nainggolan', '19', 'SMA', 'Simalungun', 167, 58),
('11cfba0f04950f3a098b33a8171a2e4a', 'Valentino Sagala', '21', 'SMK', 'Medan', 166, 55),
('137a3b5bc8238f754deb4ca515564f48', 'Anggi Wijaya', '19', 'SMK', 'Medan', 159, 61),
('18cd3e22a084851785ff94eedd0ab73d', 'Handoko Putra', '20', 'SMA', 'Labuhanbatu', 168, 58),
('191d905848a31e2569a9c708182c6b39', 'Adeliasyah Putri', '18', 'SMA', 'Medan', 159, 55),
('1a08236523b7acc094c48f75e45dfb52', 'Jepriando Simanungkalit', '22', 'SMA', 'Samosir', 167, 75),
('2212930fd73c5421302aa5df1a73b5d3', 'Kevin Andreanus Hutauruk', '19', 'SMA', 'Pekanbaru', 172, 71),
('2396bed1da7c5a4ce45e1f6ff52230d5', 'Rina Sagita', '23', 'SMK', 'Samosir', 164, 50),
('24980692f5ad78cc6213a440c92bc8c3', 'Muhammad Kevin Haris', '20', 'SMA', 'Karo', 173, 67),
('27470c4b91df063ff1218fb742cb52a7', 'Kiranta Erlangga Sembiring', '18', 'SMA', 'Batu Bara', 169, 58),
('3391c1361171ff21e68a6ea21d21bf64', 'Zidane Albuchori', '19', 'SMA', 'Batu Bara', 164, 72),
('34cedee243a674106ab38ee50280a045', 'Delypiska Br Sinaga', '20', 'SMA', 'Medan', 160, 56),
('374820e0cd4b34bfe70a4e0ae4b3a943', 'Arian Akbar Sitompul', '19', 'SMK', 'Medan', 175, 67),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 'Natalia Lumbanraja', '19', 'SMA', 'Toba Samosir', 166, 75),
('4dad55457f37046991adf79ad00bc9e4', 'Anri Fernando', '23', 'SMK', 'Medan', 177, 75),
('4e5abeb7a424ab8a1e34a9d252b52e98', 'Arjun Alung Milala', '20', 'SMA', 'Kampung Baru', 173, 73),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 'Anggreni Damanik', '19', 'SMA', 'Kisaran', 158, 58),
('4fe0d5b2980078b4048b65fd9cb5afe9', 'Yehezkiel Deardo Sianipar', '19', 'SMA', 'Lubuk Pakam', 175, 71),
('50a8be203cca886a6ea9988ad4c40f45', 'Muhammad Azwar Albi', '23', 'SMA', 'Langkat', 162, 73),
('525630fdcf05edf22881f5ef6e27fb61', 'Mona Sari Mutiara', '20', 'SMA', 'Medan', 157, 45),
('54f58ec85081c8f890a9a7b4aaf72226', 'Yohanna Br Sianturi', '22', 'SMK', 'Medan', 158, 58),
('57cbfbd7546f61403fab58186cf11c94', 'Hana Manullang', '20', 'SMK', 'Medan', 167, 56),
('581dabeb5724331be0a2492b7c2d74cd', 'Frans Nainggolan', '22', 'SMK', 'Jambi', 175, 68),
('593e0b3b575b5ce62e435e02795da886', 'Gabriel Siburian ', '19', 'SMK', 'Simalungun', 165, 66),
('599de161fc1fbbd0ffc797804bb92716', 'Rico Yoga Sinamo', '18', 'SMA', 'Simalungun', 173, 68),
('5a842342235e8019ca8aeeb6e83ed5f0', 'Novenjels Elisabeth Diana', '21', 'SMK', 'Medan', 158, 55),
('5a9fcba443001dfdd815eee1804a7ef5', 'Nurzannah Harepa', '20', 'SMA', 'Medan', 150, 45),
('5ef96f57a8e734e9c1205034b5204630', 'Aditia Siburian', '18', 'SMA', 'Batu Bara', 176, 66),
('608fab1ac5522354391c14eafaf47d1b', 'Ririn Rifka Juniati', '22', 'SMK', 'Batangkuis', 166, 50),
('617a2afc6e89bd6c342479ce785a2410', 'Tri Intan', '23', 'SMA', 'Medan', 164, 53),
('61a9bd83761f5a77aa41d094d77c3892', 'Tinanda Friska ', '19', 'SMA', 'Medan', 162, 55),
('61b06fec60e39646e414c7cec098efad', 'Herkingto Boang Manalu', '22', 'SMA', 'Dairi', 166, 72),
('632319ad88cd2d97a0f58cc873c75a0e', 'Kleo Adeliyani Siregar', '24', 'SMK', 'Batu Bara', 166, 59),
('63289dd5074c88827653b5d2b8244c45', 'Dimas Manalu', '18', 'SMA', 'Medan', 166, 72),
('650db6aaf2558b95cb61a880a72cbdf1', 'Kevin Oktavianus Siagian', '19', 'SMA', 'Medan', 170, 58),
('653d92edcf5991407e4c8ee77888392c', 'Nanda Aditya Maulana', '22', 'SMA', 'Berastagi', 166, 53),
('66b2a5c4fa7b1fa76840a6b381c4989e', 'Gabriella Alysin Sihotang', '22', 'SMA', 'Sidamanik', 162, 49),
('6ee5efeb00f7ad1c676952dfd6c19714', 'Suci Ramadhani', '18', 'SMK', 'Binjai', 167, 48),
('70eb3f08939bd33f3f84ace544569c35', 'Dina Olivia', '19', 'SMK', 'Simalungun', 162, 66),
('712eb89b67a162c4abc3f3e7b91a29c5', 'Chronika Mendrofa', '19', 'SMK', 'Medan', 164, 60),
('72a30390edc8cfc45fbbdb83b45233f4', 'Bangun Hotdiasi Sitorus', '23', 'SMK', 'Karo', 164, 59),
('73137686cc779dda77f25efeb87d66c3', 'Pardamean Sihombing', '21', 'SMA', 'Toba Samosir', 173, 68),
('7bb3a7f46d0d58c4aac322f4dd032d09', 'Amar Ridho', '19', 'SMA', 'Medan', 169, 66),
('7bedae22d55803d35ea62dcb14e7daec', 'Winda Harianti Sinurait', '18', 'SMA', 'Sibolga', 166, 48),
('7ea86051d7674614f903957a1d4edf86', 'Sinto Manik', '19', 'SMA', 'Medan', 168, 57),
('829c57255fd785c25da9e37e031098ab', 'Hariaty Sianipar', '22', 'SMA', 'Batangkuis', 165, 60),
('8a8fc375742f585842254ba0539e273d', 'Lena Haro', '20', 'SMA', 'Asahan', 156, 59),
('8b7d0236370983a0b81ce97bb961c726', 'Sri Dewi Cantika', '19', 'SMK', 'Perbaungan', 166, 53),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 'Miranda Ginting', '18', 'SMA', 'Samosir', 155, 45),
('8ce9d3b0a20498ea8b849b4879160720', 'Kristina Sibuea', '20', 'SMA', 'Karo', 160, 63),
('8e12a918e173ac4bc46edd9ad1f5c507', 'Radot Jelianto', '22', 'SMK', 'Dairi', 168, 65),
('94a0abf93f8185975b459869cd505ece', 'Sion Maurid Simanjuntak', '21', 'SMA', 'Tapanuli Tengah', 159, 51),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 'Leonardo Simatupang', '19', 'SMK', 'Tapanuli Utara', 171, 72),
('958f6df27e5b0c4afa56585d9a30c75d', 'Abdi Sianturi', '19', 'SMA', 'Simalungun', 175, 66),
('97e078f64920b784e2faf7cc3ff07bd7', 'Liana Putri', '22', 'SMK', 'Medan', 155, 50),
('9c89641d488b4b6d4319bf944283a131', 'Aldi Pradipta Sinulingga', '22', 'SMA', 'Seribu Dolok', 168, 55),
('a1397e4dd715314e82fff30a5a1a698a', 'Venti Cindika', '22', 'SMK', 'Binjai', 159, 63),
('a184d62efeffb5272995077189951603', 'Rosayu', '20', 'SMA', 'Medan', 161, 52),
('a18d8e9d8dfe1c7a910b7b3832b65397', 'Yossi Br Sijabat', '19', 'SMA', 'Pakpak Barat', 158, 59),
('a598c22f220debafd0b5b5ea49512a98', 'Simonta Bangun', '20', 'SMK', 'Talang Lakat', 155, 50),
('a7df1b179073bd345aa0ea96cfbb1968', 'Andre Febrian', '20', 'SMA', 'Langkat', 166, 74),
('b05e59a215c5a8c05588682e6513ee3b', 'Hera Br Ginting', '21', 'SMK', 'Berastagi', 156, 45),
('b7b7d9123f3e7194c9eb6da442f88c4b', 'Angga Pranata Tambunan', '22', 'SMA', 'Serdang Bedagai', 172, 54),
('bbbad11a8f3c2e396d03ca84dc758590', 'Nadya Barus', '18', 'SMA', 'Samosir', 158, 48),
('bce1f024dd8cf31bfd41caac7b680e61', 'Agustini', '19', 'SMA', 'Deli Serdang', 155, 45),
('c3649a94da07c44186fe52011678338c', 'Amanda Ariyanti', '20', 'SMA', 'Medan', 160, 68),
('c39992be9a99df410e3439dec15611e2', 'Nina Febriani', '21', 'SMK', 'Langkat', 158, 49),
('c5af3f8e60a93e7faa74d2bb780a34d0', 'Risal Fernando', '18', 'SMA', 'Serdang Bedagai', 175, 60),
('c617b1cbe46db8e7277b06aaa8568df9', 'Elisa Pratiwi Marpaung', '19', 'SMA', 'Sukaraja', 164, 57),
('c8bd5586bc59b893072c7020c8689006', 'Vrischa Manungkalit', '20', 'SMA', 'Dolok Masihul', 161, 45),
('c93411fc21f0367413df6cd691dcb5d1', 'Cyntya Butar Butar', '19', 'SMK', 'Medan', 162, 57),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 'Edwin Siallagan', '20', 'SMA', 'Pakpak Barat', 174, 59),
('ca79ae039941586b658122b0021a7746', 'Intan Sari Ginting', '19', 'SMA', 'Medan', 160, 74),
('cf2e6cb2d309ed043fa46bf54e4a2571', 'Rangga Risky Fahlevi', '18', 'SMA', 'Batu Bara', 172, 65),
('d2e3e3573b51e6e735aada60780bf304', 'Isya Mahendra', '22', 'SMK', 'Bah Jambi', 168, 57),
('d570633b73890ebb7783b63a4fa34c82', 'Lentina Sinaga', '20', 'SMA', 'Batu Bara', 168, 49),
('da6014ab639140658890a27c0a34cf5f', 'Adelina Dwiyanti', '19', 'SMA', 'Binjai', 162, 55),
('dd47f5da2f124c95421839b3818da1b3', 'Putri Pasaribu', '19', 'SMA', 'Simalungun', 162, 50),
('e115d8748b84cec3a6fdaa964f65b6dc', 'Putra Fransboy Lubis', '23', 'SMA', 'Medan', 168, 64),
('e21e25fac0087246e61256cc4fb1b92c', 'Muhammad Akbar Efrizki', '20', 'SMA', 'Medan', 171, 59),
('e2b42bd03a61c84f0544a37d60edc1fb', 'Dimas Harry Satrio', '19', 'SMK', 'Medan', 174, 65),
('e35aec7b2b5ca749ba6fadc45c8f5346', 'Putri Aprilia', '19', 'SMA', 'Binjai', 157, 54),
('e3d87d58ba3286896f6b88b7b36dd80f', 'Mhd. Aripin Manik', '18', 'SMA', 'Batu Bara', 167, 58),
('e75a9e574b71efa70dc0945a6ad900e0', 'Hailkal Zulfarkhan', '20', 'SMA', 'Perbaungan', 168, 60),
('e9b760e5f1ae7e72ea1a4190994f97b2', 'Dio Elfandi Zai', '23', 'SMK', 'Deli Serdang', 177, 75),
('ecefd0c34c666ac34d7bfa39600429ff', 'Winda Manalu', '19', 'SMA', 'Medan', 153, 52),
('f350eb95f8b4176c45018ed56bd926d4', 'Chrisna Mrtyn', '19', 'SMK', 'Pematang Siantar', 150, 54),
('f7d86252a7165188b6e608b5250e067d', 'Ibrahimi Abdillah', '20', 'SMK', 'Dairi', 166, 54),
('f85913121001e40e6d05f3481f6aaa2c', 'Felix Gabriel Tampubolon', '18', 'SMA', 'Batu Bara', 159, 60),
('f8b2fa8912a4941a7c9b9f78648588a1', 'Novi Manik', '19', 'SMA', 'Simalungun', 162, 55),
('fb750dcc9677de0e7bd0de57afe2f310', 'Reza Tarigan', '21', 'SMK', 'Berastagi', 172, 66),
('fc8d76484c6639c7001509fe4491e385', 'Sri Wahyuni', '22', 'SMA', 'Deli Serdang', 164, 47),
('fce5c5df8fee964d906a6f64c83cb588', 'Yohana Sitinjak', '19', 'SMA', 'Tarutung', 155, 65),
('fe34ce7140c46130c5d43a0b27aa1adb', 'Aulia Nur Ismi Aras', '19', 'SMA', 'Medan', 168, 50);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `saw_criterias`
--

CREATE TABLE `saw_criterias` (
  `id_criteria` tinyint(3) NOT NULL,
  `criteria` varchar(100) NOT NULL,
  `weight` float NOT NULL,
  `attribute` set('benefit','cost') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saw_criterias`
--

INSERT INTO `saw_criterias` (`id_criteria`, `criteria`, `weight`, `attribute`) VALUES
(1, 'Tes Bahasa Jepang', 0.25, 'benefit'),
(2, 'Tes Kesemaptaan Tubuh', 0.15, 'benefit'),
(3, 'Tes Kesehatan', 0.2, 'benefit'),
(4, 'Tes Ketahanan Fisik', 0.1, 'cost'),
(5, 'Wawancara', 0.3, 'cost');

-- --------------------------------------------------------

--
-- Table structure for table `saw_evaluations`
--

CREATE TABLE `saw_evaluations` (
  `id_alternative` varchar(300) NOT NULL,
  `id_criteria` tinyint(3) UNSIGNED NOT NULL,
  `value` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `saw_evaluations`
--

INSERT INTO `saw_evaluations` (`id_alternative`, `id_criteria`, `value`) VALUES
('007e27ed13ab57b2c4031ff71c0b5770', 1, 4),
('007e27ed13ab57b2c4031ff71c0b5770', 2, 4),
('007e27ed13ab57b2c4031ff71c0b5770', 3, 4),
('007e27ed13ab57b2c4031ff71c0b5770', 4, 2),
('007e27ed13ab57b2c4031ff71c0b5770', 5, 1),
('0624e750e963f73276b98667d5598655', 1, 5),
('0624e750e963f73276b98667d5598655', 2, 4),
('0624e750e963f73276b98667d5598655', 3, 4),
('0624e750e963f73276b98667d5598655', 4, 4),
('0624e750e963f73276b98667d5598655', 5, 4),
('07440fd3c88af9529b1f6b514c537bc7', 1, 5),
('07440fd3c88af9529b1f6b514c537bc7', 2, 4),
('07440fd3c88af9529b1f6b514c537bc7', 3, 4),
('07440fd3c88af9529b1f6b514c537bc7', 4, 4),
('07440fd3c88af9529b1f6b514c537bc7', 5, 2),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 1, 5),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 2, 4),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 3, 4),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 4, 4),
('0b8d90b5de0d7e8e9c1ef887de10fdd5', 5, 4),
('0cfc031d5ceb54f294b65394ded42301', 1, 5),
('0cfc031d5ceb54f294b65394ded42301', 2, 4),
('0cfc031d5ceb54f294b65394ded42301', 3, 5),
('0cfc031d5ceb54f294b65394ded42301', 4, 4),
('0cfc031d5ceb54f294b65394ded42301', 5, 4),
('137a3b5bc8238f754deb4ca515564f48', 1, 5),
('137a3b5bc8238f754deb4ca515564f48', 2, 2),
('137a3b5bc8238f754deb4ca515564f48', 3, 4),
('137a3b5bc8238f754deb4ca515564f48', 4, 3),
('137a3b5bc8238f754deb4ca515564f48', 5, 2),
('18cd3e22a084851785ff94eedd0ab73d', 1, 5),
('18cd3e22a084851785ff94eedd0ab73d', 2, 2),
('18cd3e22a084851785ff94eedd0ab73d', 3, 4),
('18cd3e22a084851785ff94eedd0ab73d', 4, 4),
('18cd3e22a084851785ff94eedd0ab73d', 5, 2),
('191d905848a31e2569a9c708182c6b39', 1, 5),
('191d905848a31e2569a9c708182c6b39', 2, 2),
('191d905848a31e2569a9c708182c6b39', 3, 3),
('191d905848a31e2569a9c708182c6b39', 4, 2),
('191d905848a31e2569a9c708182c6b39', 5, 4),
('1a08236523b7acc094c48f75e45dfb52', 1, 5),
('1a08236523b7acc094c48f75e45dfb52', 2, 4),
('1a08236523b7acc094c48f75e45dfb52', 3, 3),
('1a08236523b7acc094c48f75e45dfb52', 4, 3),
('1a08236523b7acc094c48f75e45dfb52', 5, 4),
('2212930fd73c5421302aa5df1a73b5d3', 1, 4),
('2212930fd73c5421302aa5df1a73b5d3', 2, 4),
('2212930fd73c5421302aa5df1a73b5d3', 3, 4),
('2212930fd73c5421302aa5df1a73b5d3', 4, 4),
('2212930fd73c5421302aa5df1a73b5d3', 5, 4),
('24980692f5ad78cc6213a440c92bc8c3', 1, 4),
('24980692f5ad78cc6213a440c92bc8c3', 2, 4),
('24980692f5ad78cc6213a440c92bc8c3', 3, 4),
('24980692f5ad78cc6213a440c92bc8c3', 4, 4),
('24980692f5ad78cc6213a440c92bc8c3', 5, 2),
('27470c4b91df063ff1218fb742cb52a7', 1, 4),
('27470c4b91df063ff1218fb742cb52a7', 2, 4),
('27470c4b91df063ff1218fb742cb52a7', 3, 4),
('27470c4b91df063ff1218fb742cb52a7', 4, 3),
('27470c4b91df063ff1218fb742cb52a7', 5, 2),
('34cedee243a674106ab38ee50280a045', 1, 4),
('34cedee243a674106ab38ee50280a045', 2, 4),
('34cedee243a674106ab38ee50280a045', 3, 4),
('34cedee243a674106ab38ee50280a045', 4, 3),
('34cedee243a674106ab38ee50280a045', 5, 2),
('374820e0cd4b34bfe70a4e0ae4b3a943', 1, 4),
('374820e0cd4b34bfe70a4e0ae4b3a943', 2, 4),
('374820e0cd4b34bfe70a4e0ae4b3a943', 3, 4),
('374820e0cd4b34bfe70a4e0ae4b3a943', 4, 4),
('374820e0cd4b34bfe70a4e0ae4b3a943', 5, 4),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 1, 5),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 2, 4),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 3, 4),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 4, 3),
('3a14f1d4fb6ea1a0e9073dac1d19dcee', 5, 4),
('4dad55457f37046991adf79ad00bc9e4', 1, 4),
('4dad55457f37046991adf79ad00bc9e4', 2, 4),
('4dad55457f37046991adf79ad00bc9e4', 3, 4),
('4dad55457f37046991adf79ad00bc9e4', 4, 4),
('4dad55457f37046991adf79ad00bc9e4', 5, 2),
('4e5abeb7a424ab8a1e34a9d252b52e98', 1, 5),
('4e5abeb7a424ab8a1e34a9d252b52e98', 2, 4),
('4e5abeb7a424ab8a1e34a9d252b52e98', 3, 4),
('4e5abeb7a424ab8a1e34a9d252b52e98', 4, 4),
('4e5abeb7a424ab8a1e34a9d252b52e98', 5, 4),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 1, 4),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 2, 2),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 3, 2),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 4, 3),
('4eae3ffcdb7307e0eb1dda3c733f5e2d', 5, 2),
('50a8be203cca886a6ea9988ad4c40f45', 1, 4),
('50a8be203cca886a6ea9988ad4c40f45', 2, 4),
('50a8be203cca886a6ea9988ad4c40f45', 3, 4),
('50a8be203cca886a6ea9988ad4c40f45', 4, 4),
('50a8be203cca886a6ea9988ad4c40f45', 5, 2),
('525630fdcf05edf22881f5ef6e27fb61', 1, 4),
('525630fdcf05edf22881f5ef6e27fb61', 2, 2),
('525630fdcf05edf22881f5ef6e27fb61', 3, 2),
('525630fdcf05edf22881f5ef6e27fb61', 4, 3),
('525630fdcf05edf22881f5ef6e27fb61', 5, 3),
('57cbfbd7546f61403fab58186cf11c94', 1, 4),
('57cbfbd7546f61403fab58186cf11c94', 2, 4),
('57cbfbd7546f61403fab58186cf11c94', 3, 4),
('57cbfbd7546f61403fab58186cf11c94', 4, 3),
('57cbfbd7546f61403fab58186cf11c94', 5, 4),
('581dabeb5724331be0a2492b7c2d74cd', 1, 5),
('581dabeb5724331be0a2492b7c2d74cd', 2, 4),
('581dabeb5724331be0a2492b7c2d74cd', 3, 5),
('581dabeb5724331be0a2492b7c2d74cd', 4, 4),
('581dabeb5724331be0a2492b7c2d74cd', 5, 5),
('593e0b3b575b5ce62e435e02795da886', 1, 4),
('593e0b3b575b5ce62e435e02795da886', 2, 2),
('593e0b3b575b5ce62e435e02795da886', 3, 5),
('593e0b3b575b5ce62e435e02795da886', 4, 4),
('593e0b3b575b5ce62e435e02795da886', 5, 4),
('5a842342235e8019ca8aeeb6e83ed5f0', 1, 5),
('5a842342235e8019ca8aeeb6e83ed5f0', 2, 4),
('5a842342235e8019ca8aeeb6e83ed5f0', 3, 4),
('5a842342235e8019ca8aeeb6e83ed5f0', 4, 3),
('5a842342235e8019ca8aeeb6e83ed5f0', 5, 5),
('5a9fcba443001dfdd815eee1804a7ef5', 1, 4),
('5a9fcba443001dfdd815eee1804a7ef5', 2, 2),
('5a9fcba443001dfdd815eee1804a7ef5', 3, 4),
('5a9fcba443001dfdd815eee1804a7ef5', 4, 2),
('5a9fcba443001dfdd815eee1804a7ef5', 5, 4),
('5ef96f57a8e734e9c1205034b5204630', 1, 4),
('5ef96f57a8e734e9c1205034b5204630', 2, 2),
('5ef96f57a8e734e9c1205034b5204630', 3, 2),
('5ef96f57a8e734e9c1205034b5204630', 4, 4),
('5ef96f57a8e734e9c1205034b5204630', 5, 2),
('61b06fec60e39646e414c7cec098efad', 1, 4),
('61b06fec60e39646e414c7cec098efad', 2, 4),
('61b06fec60e39646e414c7cec098efad', 3, 4),
('61b06fec60e39646e414c7cec098efad', 4, 4),
('61b06fec60e39646e414c7cec098efad', 5, 2),
('632319ad88cd2d97a0f58cc873c75a0e', 1, 4),
('632319ad88cd2d97a0f58cc873c75a0e', 2, 4),
('632319ad88cd2d97a0f58cc873c75a0e', 3, 4),
('632319ad88cd2d97a0f58cc873c75a0e', 4, 3),
('632319ad88cd2d97a0f58cc873c75a0e', 5, 3),
('63289dd5074c88827653b5d2b8244c45', 1, 5),
('63289dd5074c88827653b5d2b8244c45', 2, 2),
('63289dd5074c88827653b5d2b8244c45', 3, 4),
('63289dd5074c88827653b5d2b8244c45', 4, 3),
('63289dd5074c88827653b5d2b8244c45', 5, 4),
('650db6aaf2558b95cb61a880a72cbdf1', 1, 5),
('650db6aaf2558b95cb61a880a72cbdf1', 2, 4),
('650db6aaf2558b95cb61a880a72cbdf1', 3, 4),
('650db6aaf2558b95cb61a880a72cbdf1', 4, 4),
('650db6aaf2558b95cb61a880a72cbdf1', 5, 2),
('653d92edcf5991407e4c8ee77888392c', 1, 5),
('653d92edcf5991407e4c8ee77888392c', 2, 2),
('653d92edcf5991407e4c8ee77888392c', 3, 4),
('653d92edcf5991407e4c8ee77888392c', 4, 4),
('653d92edcf5991407e4c8ee77888392c', 5, 4),
('66b2a5c4fa7b1fa76840a6b381c4989e', 1, 5),
('66b2a5c4fa7b1fa76840a6b381c4989e', 2, 4),
('66b2a5c4fa7b1fa76840a6b381c4989e', 3, 2),
('66b2a5c4fa7b1fa76840a6b381c4989e', 4, 2),
('66b2a5c4fa7b1fa76840a6b381c4989e', 5, 4),
('70eb3f08939bd33f3f84ace544569c35', 1, 4),
('70eb3f08939bd33f3f84ace544569c35', 2, 4),
('70eb3f08939bd33f3f84ace544569c35', 3, 3),
('70eb3f08939bd33f3f84ace544569c35', 4, 2),
('70eb3f08939bd33f3f84ace544569c35', 5, 2),
('712eb89b67a162c4abc3f3e7b91a29c5', 1, 3),
('712eb89b67a162c4abc3f3e7b91a29c5', 2, 2),
('712eb89b67a162c4abc3f3e7b91a29c5', 3, 4),
('712eb89b67a162c4abc3f3e7b91a29c5', 4, 3),
('712eb89b67a162c4abc3f3e7b91a29c5', 5, 2),
('72a30390edc8cfc45fbbdb83b45233f4', 1, 4),
('72a30390edc8cfc45fbbdb83b45233f4', 2, 2),
('72a30390edc8cfc45fbbdb83b45233f4', 3, 4),
('72a30390edc8cfc45fbbdb83b45233f4', 4, 4),
('72a30390edc8cfc45fbbdb83b45233f4', 5, 2),
('73137686cc779dda77f25efeb87d66c3', 1, 3),
('73137686cc779dda77f25efeb87d66c3', 2, 4),
('73137686cc779dda77f25efeb87d66c3', 3, 4),
('73137686cc779dda77f25efeb87d66c3', 4, 4),
('73137686cc779dda77f25efeb87d66c3', 5, 1),
('7bb3a7f46d0d58c4aac322f4dd032d09', 1, 5),
('7bb3a7f46d0d58c4aac322f4dd032d09', 2, 4),
('7bb3a7f46d0d58c4aac322f4dd032d09', 3, 4),
('7bb3a7f46d0d58c4aac322f4dd032d09', 4, 4),
('7bb3a7f46d0d58c4aac322f4dd032d09', 5, 4),
('829c57255fd785c25da9e37e031098ab', 1, 5),
('829c57255fd785c25da9e37e031098ab', 2, 2),
('829c57255fd785c25da9e37e031098ab', 3, 4),
('829c57255fd785c25da9e37e031098ab', 4, 3),
('829c57255fd785c25da9e37e031098ab', 5, 2),
('8a8fc375742f585842254ba0539e273d', 1, 4),
('8a8fc375742f585842254ba0539e273d', 2, 4),
('8a8fc375742f585842254ba0539e273d', 3, 2),
('8a8fc375742f585842254ba0539e273d', 4, 3),
('8a8fc375742f585842254ba0539e273d', 5, 2),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 1, 4),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 2, 4),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 3, 4),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 4, 3),
('8cb6ad1ee61f0ef4b7caeb5af045eb9c', 5, 2),
('8ce9d3b0a20498ea8b849b4879160720', 1, 5),
('8ce9d3b0a20498ea8b849b4879160720', 2, 2),
('8ce9d3b0a20498ea8b849b4879160720', 3, 4),
('8ce9d3b0a20498ea8b849b4879160720', 4, 3),
('8ce9d3b0a20498ea8b849b4879160720', 5, 5),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 1, 4),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 2, 4),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 3, 5),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 4, 4),
('94a9e0856e338c11bd5bdcb2f3ae6e7f', 5, 4),
('958f6df27e5b0c4afa56585d9a30c75d', 1, 4),
('958f6df27e5b0c4afa56585d9a30c75d', 2, 4),
('958f6df27e5b0c4afa56585d9a30c75d', 3, 4),
('958f6df27e5b0c4afa56585d9a30c75d', 4, 3),
('958f6df27e5b0c4afa56585d9a30c75d', 5, 2),
('97e078f64920b784e2faf7cc3ff07bd7', 1, 5),
('97e078f64920b784e2faf7cc3ff07bd7', 2, 2),
('97e078f64920b784e2faf7cc3ff07bd7', 3, 2),
('97e078f64920b784e2faf7cc3ff07bd7', 4, 3),
('97e078f64920b784e2faf7cc3ff07bd7', 5, 4),
('9c89641d488b4b6d4319bf944283a131', 1, 4),
('9c89641d488b4b6d4319bf944283a131', 2, 4),
('9c89641d488b4b6d4319bf944283a131', 3, 5),
('9c89641d488b4b6d4319bf944283a131', 4, 5),
('9c89641d488b4b6d4319bf944283a131', 5, 2),
('a7df1b179073bd345aa0ea96cfbb1968', 1, 5),
('a7df1b179073bd345aa0ea96cfbb1968', 2, 4),
('a7df1b179073bd345aa0ea96cfbb1968', 3, 4),
('a7df1b179073bd345aa0ea96cfbb1968', 4, 4),
('a7df1b179073bd345aa0ea96cfbb1968', 5, 2),
('b05e59a215c5a8c05588682e6513ee3b', 1, 5),
('b05e59a215c5a8c05588682e6513ee3b', 2, 4),
('b05e59a215c5a8c05588682e6513ee3b', 3, 2),
('b05e59a215c5a8c05588682e6513ee3b', 4, 2),
('b05e59a215c5a8c05588682e6513ee3b', 5, 2),
('b7b7d9123f3e7194c9eb6da442f88c4b', 1, 4),
('b7b7d9123f3e7194c9eb6da442f88c4b', 2, 2),
('b7b7d9123f3e7194c9eb6da442f88c4b', 3, 2),
('b7b7d9123f3e7194c9eb6da442f88c4b', 4, 4),
('b7b7d9123f3e7194c9eb6da442f88c4b', 5, 2),
('bbbad11a8f3c2e396d03ca84dc758590', 1, 4),
('bbbad11a8f3c2e396d03ca84dc758590', 2, 4),
('bbbad11a8f3c2e396d03ca84dc758590', 3, 2),
('bbbad11a8f3c2e396d03ca84dc758590', 4, 4),
('bbbad11a8f3c2e396d03ca84dc758590', 5, 3),
('bce1f024dd8cf31bfd41caac7b680e61', 1, 4),
('bce1f024dd8cf31bfd41caac7b680e61', 2, 4),
('bce1f024dd8cf31bfd41caac7b680e61', 3, 2),
('bce1f024dd8cf31bfd41caac7b680e61', 4, 3),
('bce1f024dd8cf31bfd41caac7b680e61', 5, 4),
('c3649a94da07c44186fe52011678338c', 1, 4),
('c3649a94da07c44186fe52011678338c', 2, 2),
('c3649a94da07c44186fe52011678338c', 3, 4),
('c3649a94da07c44186fe52011678338c', 4, 2),
('c3649a94da07c44186fe52011678338c', 5, 2),
('c39992be9a99df410e3439dec15611e2', 1, 4),
('c39992be9a99df410e3439dec15611e2', 2, 2),
('c39992be9a99df410e3439dec15611e2', 3, 2),
('c39992be9a99df410e3439dec15611e2', 4, 3),
('c39992be9a99df410e3439dec15611e2', 5, 4),
('c617b1cbe46db8e7277b06aaa8568df9', 1, 4),
('c617b1cbe46db8e7277b06aaa8568df9', 2, 4),
('c617b1cbe46db8e7277b06aaa8568df9', 3, 2),
('c617b1cbe46db8e7277b06aaa8568df9', 4, 3),
('c617b1cbe46db8e7277b06aaa8568df9', 5, 2),
('c93411fc21f0367413df6cd691dcb5d1', 1, 4),
('c93411fc21f0367413df6cd691dcb5d1', 2, 4),
('c93411fc21f0367413df6cd691dcb5d1', 3, 4),
('c93411fc21f0367413df6cd691dcb5d1', 4, 3),
('c93411fc21f0367413df6cd691dcb5d1', 5, 2),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 1, 5),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 2, 4),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 3, 4),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 4, 4),
('ca1fc376b8f5220c25b8fcc3cc42d79c', 5, 5),
('ca79ae039941586b658122b0021a7746', 1, 3),
('ca79ae039941586b658122b0021a7746', 2, 4),
('ca79ae039941586b658122b0021a7746', 3, 3),
('ca79ae039941586b658122b0021a7746', 4, 3),
('ca79ae039941586b658122b0021a7746', 5, 4),
('d2e3e3573b51e6e735aada60780bf304', 1, 4),
('d2e3e3573b51e6e735aada60780bf304', 2, 4),
('d2e3e3573b51e6e735aada60780bf304', 3, 4),
('d2e3e3573b51e6e735aada60780bf304', 4, 4),
('d2e3e3573b51e6e735aada60780bf304', 5, 4),
('d570633b73890ebb7783b63a4fa34c82', 1, 4),
('d570633b73890ebb7783b63a4fa34c82', 2, 4),
('d570633b73890ebb7783b63a4fa34c82', 3, 4),
('d570633b73890ebb7783b63a4fa34c82', 4, 3),
('d570633b73890ebb7783b63a4fa34c82', 5, 2),
('da6014ab639140658890a27c0a34cf5f', 1, 4),
('da6014ab639140658890a27c0a34cf5f', 2, 2),
('da6014ab639140658890a27c0a34cf5f', 3, 4),
('da6014ab639140658890a27c0a34cf5f', 4, 2),
('da6014ab639140658890a27c0a34cf5f', 5, 4),
('e115d8748b84cec3a6fdaa964f65b6dc', 1, 4),
('e115d8748b84cec3a6fdaa964f65b6dc', 2, 4),
('e115d8748b84cec3a6fdaa964f65b6dc', 3, 4),
('e115d8748b84cec3a6fdaa964f65b6dc', 4, 4),
('e115d8748b84cec3a6fdaa964f65b6dc', 5, 2),
('e21e25fac0087246e61256cc4fb1b92c', 1, 4),
('e21e25fac0087246e61256cc4fb1b92c', 2, 4),
('e21e25fac0087246e61256cc4fb1b92c', 3, 5),
('e21e25fac0087246e61256cc4fb1b92c', 4, 4),
('e21e25fac0087246e61256cc4fb1b92c', 5, 4),
('e2b42bd03a61c84f0544a37d60edc1fb', 1, 5),
('e2b42bd03a61c84f0544a37d60edc1fb', 2, 2),
('e2b42bd03a61c84f0544a37d60edc1fb', 3, 3),
('e2b42bd03a61c84f0544a37d60edc1fb', 4, 3),
('e2b42bd03a61c84f0544a37d60edc1fb', 5, 2),
('e3d87d58ba3286896f6b88b7b36dd80f', 1, 5),
('e3d87d58ba3286896f6b88b7b36dd80f', 2, 2),
('e3d87d58ba3286896f6b88b7b36dd80f', 3, 4),
('e3d87d58ba3286896f6b88b7b36dd80f', 4, 4),
('e3d87d58ba3286896f6b88b7b36dd80f', 5, 3),
('e75a9e574b71efa70dc0945a6ad900e0', 1, 4),
('e75a9e574b71efa70dc0945a6ad900e0', 2, 4),
('e75a9e574b71efa70dc0945a6ad900e0', 3, 4),
('e75a9e574b71efa70dc0945a6ad900e0', 4, 4),
('e75a9e574b71efa70dc0945a6ad900e0', 5, 4),
('e9b760e5f1ae7e72ea1a4190994f97b2', 1, 4),
('e9b760e5f1ae7e72ea1a4190994f97b2', 2, 4),
('e9b760e5f1ae7e72ea1a4190994f97b2', 3, 4),
('e9b760e5f1ae7e72ea1a4190994f97b2', 4, 4),
('e9b760e5f1ae7e72ea1a4190994f97b2', 5, 2),
('f350eb95f8b4176c45018ed56bd926d4', 1, 5),
('f350eb95f8b4176c45018ed56bd926d4', 2, 4),
('f350eb95f8b4176c45018ed56bd926d4', 3, 2),
('f350eb95f8b4176c45018ed56bd926d4', 4, 2),
('f350eb95f8b4176c45018ed56bd926d4', 5, 2),
('f7d86252a7165188b6e608b5250e067d', 1, 4),
('f7d86252a7165188b6e608b5250e067d', 2, 4),
('f7d86252a7165188b6e608b5250e067d', 3, 4),
('f7d86252a7165188b6e608b5250e067d', 4, 4),
('f7d86252a7165188b6e608b5250e067d', 5, 4),
('f85913121001e40e6d05f3481f6aaa2c', 1, 4),
('f85913121001e40e6d05f3481f6aaa2c', 2, 2),
('f85913121001e40e6d05f3481f6aaa2c', 3, 3),
('f85913121001e40e6d05f3481f6aaa2c', 4, 3),
('f85913121001e40e6d05f3481f6aaa2c', 5, 2),
('f8b2fa8912a4941a7c9b9f78648588a1', 1, 4),
('f8b2fa8912a4941a7c9b9f78648588a1', 2, 2),
('f8b2fa8912a4941a7c9b9f78648588a1', 3, 4),
('f8b2fa8912a4941a7c9b9f78648588a1', 4, 3),
('f8b2fa8912a4941a7c9b9f78648588a1', 5, 2),
('fe34ce7140c46130c5d43a0b27aa1adb', 1, 4),
('fe34ce7140c46130c5d43a0b27aa1adb', 2, 4),
('fe34ce7140c46130c5d43a0b27aa1adb', 3, 3),
('fe34ce7140c46130c5d43a0b27aa1adb', 4, 4),
('fe34ce7140c46130c5d43a0b27aa1adb', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`) VALUES
(5, 'M Raihan Efdin Hasyim', 'rayhanhasyim00@gmail.com', '$2y$10$PcmGiwpIlFjfTCgaddq80eEYuptjML5PVrUj/HpyiDCyQbzPNESzO', 1),
(7, 'Ayu Wulan', 'ayuwulandari@gmail.com', '$2y$10$fpoeSgLc9p8zL8njE.Po..eKZDykrlEfjQWexyxzvE/GgJM/HisW.', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penilaian`
--
ALTER TABLE `data_penilaian`
  ADD PRIMARY KEY (`id_alternative`);

--
-- Indexes for table `data_peserta`
--
ALTER TABLE `data_peserta`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `saw_criterias`
--
ALTER TABLE `saw_criterias`
  ADD PRIMARY KEY (`id_criteria`);

--
-- Indexes for table `saw_evaluations`
--
ALTER TABLE `saw_evaluations`
  ADD PRIMARY KEY (`id_alternative`,`id_criteria`) USING BTREE;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `login_email_unique` (`email`),
  ADD KEY `login_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `login_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
