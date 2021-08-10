-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 05 Agu 2021 pada 16.13
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_personal`
--

CREATE TABLE `tb_personal` (
  `no_animo` int(11) NOT NULL,
  `no_daftar` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tinggi` int(11) NOT NULL,
  `berat_badan` int(11) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `suku` varchar(100) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `asal_sekolah` text NOT NULL,
  `tahun_lulus` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ortu` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `pangkat` varchar(100) NOT NULL,
  `satuan` varchar(100) NOT NULL,
  `alamat_ortu` text NOT NULL,
  `nama_wali` varchar(100) NOT NULL,
  `prestasi` varchar(100) NOT NULL,
  `no_KTP` varchar(100) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `no_ortu` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `x_1_bind_p` int(11) NOT NULL,
  `x_1_bind_k` int(11) NOT NULL,
  `x_2_bind_p` int(11) NOT NULL,
  `x_2_bind_k` int(11) NOT NULL,
  `xi_1_bind_p` int(11) NOT NULL,
  `xi_1_bind_k` int(11) NOT NULL,
  `xi_2_bind_p` int(11) NOT NULL,
  `xi_2_bind_k` int(11) NOT NULL,
  `xii_1_bind_p` int(11) NOT NULL,
  `xii_1_bind_k` int(11) NOT NULL,
  `xii_2_bind_p` int(11) NOT NULL,
  `xii_2_bind_k` int(11) NOT NULL,
  `x_1_mat_p` int(11) NOT NULL,
  `x_1_mat_k` int(11) NOT NULL,
  `x_2_mat_p` int(11) NOT NULL,
  `x_2_mat_k` int(11) NOT NULL,
  `xi_1_mat_p` int(11) NOT NULL,
  `xi_1_mat_k` int(11) NOT NULL,
  `xi_2_mat_p` int(11) NOT NULL,
  `xi_2_mat_k` int(11) NOT NULL,
  `xii_1_mat_p` int(11) NOT NULL,
  `xii_1_mat_k` int(11) NOT NULL,
  `xii_2_mat_p` int(11) NOT NULL,
  `xii_2_mat_k` int(11) NOT NULL,
  `x_1_bing_p` int(11) NOT NULL,
  `x_1_bing_k` int(11) NOT NULL,
  `x_2_bing_p` int(11) NOT NULL,
  `x_2_bing_k` int(11) NOT NULL,
  `xi_1_bing_p` int(11) NOT NULL,
  `xi_1_bing_k` int(11) NOT NULL,
  `xi_2_bing_p` int(11) NOT NULL,
  `xi_2_bing_k` int(11) NOT NULL,
  `xii_1_bing_p` int(11) NOT NULL,
  `xii_1_bing_k` int(11) NOT NULL,
  `xii_2_bing_p` int(11) NOT NULL,
  `xii_2_bing_k` int(11) NOT NULL,
  `x_1_bio_p` int(11) NOT NULL,
  `x_1_bio_k` int(11) NOT NULL,
  `x_2_bio_p` int(11) NOT NULL,
  `x_2_bio_k` int(11) NOT NULL,
  `xi_1_bio_p` int(11) NOT NULL,
  `xi_1_bio_k` int(11) NOT NULL,
  `xi_2_bio_p` int(11) NOT NULL,
  `xi_2_bio_k` int(11) NOT NULL,
  `xii_1_bio_p` int(11) NOT NULL,
  `xii_1_bio_k` int(11) NOT NULL,
  `xii_2_bio_p` int(11) NOT NULL,
  `xii_2_bio_k` int(11) NOT NULL,
  `x_1_kimia_p` int(11) NOT NULL,
  `x_1_kimia_k` int(11) NOT NULL,
  `x_2_kimia_p` int(11) NOT NULL,
  `x_2_kimia_k` int(11) NOT NULL,
  `xi_1_kimia_p` int(11) NOT NULL,
  `xi_1_kimia_k` int(11) NOT NULL,
  `xi_2_kimia_p` int(11) NOT NULL,
  `xi_2_kimia_k` int(11) NOT NULL,
  `xii_1_kimia_p` int(11) NOT NULL,
  `xii_1_kimia_k` int(11) NOT NULL,
  `xii_2_kimia_p` int(11) NOT NULL,
  `xii_2_kimia_k` int(11) NOT NULL,
  `x_1_fisika_p` int(11) NOT NULL,
  `x_1_fisika_k` int(11) NOT NULL,
  `x_2_fisika_p` int(11) NOT NULL,
  `x_2_fisika_k` int(11) NOT NULL,
  `xi_1_fisika_p` int(11) NOT NULL,
  `xi_1_fisika_k` int(11) NOT NULL,
  `xi_2_fisika_p` int(11) NOT NULL,
  `xi_2_fisika_k` int(11) NOT NULL,
  `xii_1_fisika_p` int(11) NOT NULL,
  `xii_1_fisika_k` int(11) NOT NULL,
  `xii_2_fisika_p` int(11) NOT NULL,
  `xii_2_fisika_k` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_personal`
--

INSERT INTO `tb_personal` (`no_animo`, `no_daftar`, `nama`, `tempat_lahir`, `tanggal_lahir`, `tinggi`, `berat_badan`, `agama`, `suku`, `pendidikan`, `jurusan`, `asal_sekolah`, `tahun_lulus`, `alamat`, `nama_ortu`, `pekerjaan`, `pangkat`, `satuan`, `alamat_ortu`, `nama_wali`, `prestasi`, `no_KTP`, `no_hp`, `no_ortu`, `asal`, `x_1_bind_p`, `x_1_bind_k`, `x_2_bind_p`, `x_2_bind_k`, `xi_1_bind_p`, `xi_1_bind_k`, `xi_2_bind_p`, `xi_2_bind_k`, `xii_1_bind_p`, `xii_1_bind_k`, `xii_2_bind_p`, `xii_2_bind_k`, `x_1_mat_p`, `x_1_mat_k`, `x_2_mat_p`, `x_2_mat_k`, `xi_1_mat_p`, `xi_1_mat_k`, `xi_2_mat_p`, `xi_2_mat_k`, `xii_1_mat_p`, `xii_1_mat_k`, `xii_2_mat_p`, `xii_2_mat_k`, `x_1_bing_p`, `x_1_bing_k`, `x_2_bing_p`, `x_2_bing_k`, `xi_1_bing_p`, `xi_1_bing_k`, `xi_2_bing_p`, `xi_2_bing_k`, `xii_1_bing_p`, `xii_1_bing_k`, `xii_2_bing_p`, `xii_2_bing_k`, `x_1_bio_p`, `x_1_bio_k`, `x_2_bio_p`, `x_2_bio_k`, `xi_1_bio_p`, `xi_1_bio_k`, `xi_2_bio_p`, `xi_2_bio_k`, `xii_1_bio_p`, `xii_1_bio_k`, `xii_2_bio_p`, `xii_2_bio_k`, `x_1_kimia_p`, `x_1_kimia_k`, `x_2_kimia_p`, `x_2_kimia_k`, `xi_1_kimia_p`, `xi_1_kimia_k`, `xi_2_kimia_p`, `xi_2_kimia_k`, `xii_1_kimia_p`, `xii_1_kimia_k`, `xii_2_kimia_p`, `xii_2_kimia_k`, `x_1_fisika_p`, `x_1_fisika_k`, `x_2_fisika_p`, `x_2_fisika_k`, `xi_1_fisika_p`, `xi_1_fisika_k`, `xi_2_fisika_p`, `xi_2_fisika_k`, `xii_1_fisika_p`, `xii_1_fisika_k`, `xii_2_fisika_p`, `xii_2_fisika_k`) VALUES
(0, 0, '', '', '0000-00-00', 0, 0, '', '', '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(1, 1, 'desi k', 'west', '2001-06-28', 160, 60, 'non', 'west', 'sma', 'ipa', 'sma 1 west', 2019, 'west', 'bapak', 'pns', '-', '-', 'west', 'ibu', '-', '1234567890', '123321123', '1234432123', 'west', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(2, 2, 'sekar', 'east', '2000-07-25', 170, 60, 'non', 'east', 'smk', 'kimia', 'smk kimia east', 2018, 'east', 'pak a', 'swasta', 'tidak ada', 'tidak ada', 'east', 'bu a', 'tidak ada', '12341234', '879765478', '0', 'east', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(3, 3, 'frey', 'kediri', '2001-11-14', 178, 68, 'non', 'jawa', 'sma', 'ipa', 'sma 3 kediri', 2019, 'kediri', 'andre', 'buruh', '-', '-', 'kediri', 'andre', '-', '2147483647', '2147483647', '2147483647', 'kediri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(4, 4, 'Rey Muhammad', 'Madiun', '2001-06-19', 178, 65, 'Kristen', 'Sunda', 'SMK', 'Teknik Mesin', 'SMK 10 Madiun', 2020, 'Jl. Terate No. 14 Kota Madiun', 'Itok', 'PNS', 'Guru', '-', 'Jl. Terate No. 14 Kota Madiun', 'Itok', 'Juara 1 Lari 100m Nasional', '2147483647', '2147483647', '2147483647', 'Madiun', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(5, 5, 'edwars', 'jakarta', '2002-01-14', 180, 70, 'non', 'jawa', 'sma', 'ipa', 'sma 3 kediri', 2020, 'kediri', 'erwin', 'guru', '-', '-', 'kediri', 'erwin', '-', '34521347', '876542', '8976553', 'kediri', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(6, 6, 'Diana Eka', 'Palembang', '2003-09-22', 175, 65, 'Katolik', 'Minang', 'SMA', 'IPA', 'SMA 13 Magetan', 2020, 'Jl. Kemuning No 35 Magetan', 'Hariyanto Edi', 'Swasta', 'Manajer', '-', 'Jl. Kemuning No 35 Magetan', 'Hariyanto Edi', 'Juara 2 Cabor Lempar Lembing Tingkat Provinsi', '3521123092003002', '089089089089', '087087087087', 'Magetan', 90, 80, 90, 80, 70, 75, 80, 85, 80, 85, 80, 75, 95, 85, 88, 90, 80, 88, 85, 80, 90, 87, 77, 88, 70, 80, 80, 80, 90, 80, 90, 85, 88, 77, 80, 85, 88, 78, 77, 78, 75, 80, 88, 88, 80, 80, 80, 75, 75, 70, 80, 85, 76, 77, 80, 76, 80, 85, 78, 75, 77, 75, 75, 80, 80, 75, 80, 80, 75, 75, 80, 80),
(7, 7, 'Alifah', 'Malang', '2002-09-30', 175, 65, 'Islam', 'Jawa', 'SMA', 'IPA', 'SMA 31 Malang', 2020, 'Jl. Mawar No. 34 Malang', 'Hidayat', 'Wiraswasta', '-', '-', 'Jl. Mawar No. 34 Malang', 'Hidayat', '-', '3520016042001003', '089980089980', '088880088880', 'Malang', 85, 75, 90, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 90, 75, 80, 75, 80, 75, 80, 75, 75, 75, 80, 75, 75, 75, 80, 75, 80, 75, 80, 75, 80, 75, 88, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75, 85, 75, 80, 75, 80, 75, 80, 75, 80, 75, 80, 75);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_personal`
--
ALTER TABLE `tb_personal`
  ADD PRIMARY KEY (`no_animo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
