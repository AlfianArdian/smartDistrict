-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Bulan Mei 2019 pada 10.30
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smartdistrict`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `kegiatan_tb`
--

CREATE TABLE `kegiatan_tb` (
  `id_kegiatan` int(11) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `tgl_hiburan` varchar(20) NOT NULL,
  `waktu_hiburan` varchar(10) NOT NULL,
  `nama_hiburan` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kelahiran_tb`
--

CREATE TABLE `kelahiran_tb` (
  `id_kelahiran` int(11) NOT NULL,
  `nama_anak` varchar(50) NOT NULL,
  `jk` varchar(10) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `anak_ke` int(11) NOT NULL,
  `hari_lahir` varchar(10) NOT NULL,
  `jam_lahir` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kematian_tb`
--

CREATE TABLE `kematian_tb` (
  `id_kematian` int(11) NOT NULL,
  `nama_meninggal` int(50) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `hari_meninggal` varchar(15) NOT NULL,
  `tgl_meninggal` varchar(20) NOT NULL,
  `pelapor` varchar(30) NOT NULL,
  `hubungan` varchar(20) NOT NULL,
  `keperluan` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kk_tb`
--

CREATE TABLE `kk_tb` (
  `NIK` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `rtrw` varchar(30) NOT NULL,
  `nama` varchar(60) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `pendidikan` varchar(50) NOT NULL,
  `pekerjaan` varchar(40) NOT NULL,
  `status_perkawinan` varchar(20) NOT NULL,
  `status_keluarga` varchar(20) NOT NULL,
  `kewarganegaraan` varchar(5) NOT NULL,
  `no_paspor` varchar(30) NOT NULL,
  `nama_ayah` varchar(50) NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `keterangan` enum('Aktif','Tidak Aktif','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pindah_tb`
--

CREATE TABLE `pindah_tb` (
  `id_pindah` int(11) NOT NULL,
  `NIK` varchar(30) NOT NULL,
  `alamat_pindah` varchar(35) NOT NULL,
  `rtrw_pindah` varchar(10) NOT NULL,
  `kel_pindah` varchar(20) NOT NULL,
  `kecamatan` varchar(20) NOT NULL,
  `kota` varchar(20) NOT NULL,
  `prov` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `rt_tb`
--

CREATE TABLE `rt_tb` (
  `rtrw` varchar(30) NOT NULL,
  `nama_rt` varchar(50) NOT NULL,
  `kml` varchar(100) NOT NULL,
  `NIK` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tanah_tb`
--

CREATE TABLE `tanah_tb` (
  `persil` int(11) NOT NULL,
  `blok` varchar(20) NOT NULL,
  `lokasi` varchar(60) NOT NULL,
  `keterangan_tanah` varchar(20) NOT NULL,
  `rtrw` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_tb`
--

CREATE TABLE `user_tb` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `nama_admin` varchar(50) NOT NULL,
  `NIK` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `wisata`
--

CREATE TABLE `wisata` (
  `id_wisata` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `info` text NOT NULL,
  `gambar` text NOT NULL,
  `lat` decimal(10,8) NOT NULL,
  `lon` decimal(11,8) DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `wisata`
--

INSERT INTO `wisata` (`id_wisata`, `judul`, `info`, `gambar`, `lat`, `lon`, `kategori`) VALUES
(1, 'Jodipan', 'Kampung warna-warni ini terkenal dengan rumah yang diwarnai dengan banyak warna dan hiasan tembok dengan gambaran 3D. Cocok sekali untuk berfoto bersama teman dan keluarga.', 'image/wisata_malang_murah.jpg', '-7.98418200', '112.63913800', 'remaja'),
(2, 'Brawijaya Museum', 'Museum Brawijaya adalah sebuah museum militer yang berada di Malang, Jawa Timur.  Artefak & pameran tentang perjuangan rakyat Indonesia menggapai kemerdekaan, termasuk senjata & tank militer. Tempatnya Jl. Ijen No.25 A, Gading Kasri, Klojen, Kota Malang, Jawa Timur 65115. Buka Pukul 08.00', 'image/musium.jpg', '-7.97203500', '112.62119200', 'anak'),
(3, 'BataPuti Coffeehouse', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'image/Bataputi.jpg', '-7.94022500', '112.66416600', 'dewasa'),
(4, 'Bukit Delight cafe', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'image/bukit-delight.jpg', '-7.93886700', '112.59029200', 'dewasa'),
(5, 'Matos', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pharetra nonummy pede. Mauris et orci. Aenean nec lorem. In porttitor. Donec laoreet nonummy augue. Suspendisse dui purus, scelerisque at, vulputate vitae, pretium mattis, nunc. Mauris eget neque at sem venenatis eleifend. Ut nonummy.\r\n\r\nLorem ipsum dolor sit amet, consectetuer adipiscing elit. Maecenas porttitor congue massa. Fusce posuere, magna sed pulvinar ultricies, purus lectus malesuada libero, sit amet commodo magna eros quis urna. Nunc viverra imperdiet enim. Fusce est. Vivamus a tellus.', 'image/matos1.jpg', '-7.95692500', '112.61863500', 'dewasa'),
(6, 'Malang square', 'Alun-alun populer di pusat kota yang memiliki pohon rindang, jalan setapak, & air mancur di tengahnya.', 'image/alun2malang.jpg', '-7.98258800', '112.63082300', 'anak'),
(7, 'Taman Rekreasi Tlogomas', 'Taman ini cocok untuk bermain anak-anak dengan adanya fasilitas kolam dll.', 'image/tlogomas.jpg', '-7.93029800', '112.60452500', 'anak'),
(8, 'Monumen Juang', 'Patung yang memiliki sejarah sebagai perjuangan pahlawan di masa lampau. Ini terletak di tengah jalan. Buka 24 jam.', 'image/Monumen Juang.jpg', '-7.97725600', '112.63634000', 'anak'),
(9, 'Malang Night Paradise', 'Tempat wisata penuh lampu lampion dan lampu-lampu unik. Rekomendasi untuk yang ingin berfoto disana. Tempat ini buka pukul 18.00', 'image/Malang Night Paradise.jpg', '-7.92375800', '112.65650100', 'remaja'),
(10, 'Hawai Water Park', 'Taman bernuansa Hawaii dengan seluncuran dan wisata air, tempat makan, bar kolam renang dan arena bermain. Cocok untuk anak-anak', 'image/hawai.jpg', '-7.92313300', '112.65822100', 'anak'),
(11, 'Hutan Kota Malabar', 'Hutan seperti taman yang tersusun rapi dengan banyak jenis pohon-pohon yang membuat udara menjadi sejuk. Buka 24 jam.', 'image/Hutan Kota Malabar.jpg', '-7.96822400', '112.62654600', 'dewasa'),
(12, 'Taman Kunang-kunang', 'Taman yang menghiasi tengah jalan raya dengan lampu seperti kunang-kunang. Buka 24 jam', 'image/Taman Kunang-kunang.jpg', '-7.96299000', '112.62363600', 'dewasa'),
(13, 'Taman Trunojoyo', 'Tempat yang cocok untuk bermain bersama dengan keluarga dengan fasilitas untuk permainan anak-anak. Cocok untuk anak-anak.', 'image/Taman Trunojoyo.jpg', '-7.97605000', '112.63654100', 'anak'),
(14, 'Taman Merbabu', 'Tempat yang cocok untuk bermain bersama dengan keluarga dengan fasilitas untuk permainan anak-anak. Cocok untuk anak-anak.', 'image/Taman Merbabu.jpg', '-7.96765000', '112.62582200', 'anak'),
(15, 'Taman Slamet', 'Tempat untuk berkumpul dengan keluarga dan bisa sebagai tempat spot foto atau selfie.', 'image/Taman Slamet.jpg', '-7.97341000', '112.62247100', 'dewasa');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `kegiatan_tb`
--
ALTER TABLE `kegiatan_tb`
  ADD PRIMARY KEY (`id_kegiatan`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `kelahiran_tb`
--
ALTER TABLE `kelahiran_tb`
  ADD PRIMARY KEY (`id_kelahiran`),
  ADD KEY `nik` (`NIK`),
  ADD KEY `NIK_2` (`NIK`);

--
-- Indeks untuk tabel `kematian_tb`
--
ALTER TABLE `kematian_tb`
  ADD PRIMARY KEY (`id_kematian`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `kk_tb`
--
ALTER TABLE `kk_tb`
  ADD PRIMARY KEY (`NIK`);

--
-- Indeks untuk tabel `pindah_tb`
--
ALTER TABLE `pindah_tb`
  ADD PRIMARY KEY (`id_pindah`),
  ADD UNIQUE KEY `NIK` (`NIK`),
  ADD KEY `NIK_2` (`NIK`);

--
-- Indeks untuk tabel `rt_tb`
--
ALTER TABLE `rt_tb`
  ADD PRIMARY KEY (`rtrw`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `tanah_tb`
--
ALTER TABLE `tanah_tb`
  ADD PRIMARY KEY (`persil`),
  ADD KEY `rtrw` (`rtrw`);

--
-- Indeks untuk tabel `user_tb`
--
ALTER TABLE `user_tb`
  ADD PRIMARY KEY (`username`),
  ADD KEY `NIK` (`NIK`);

--
-- Indeks untuk tabel `wisata`
--
ALTER TABLE `wisata`
  ADD PRIMARY KEY (`id_wisata`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `kegiatan_tb`
--
ALTER TABLE `kegiatan_tb`
  MODIFY `id_kegiatan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kelahiran_tb`
--
ALTER TABLE `kelahiran_tb`
  MODIFY `id_kelahiran` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kematian_tb`
--
ALTER TABLE `kematian_tb`
  MODIFY `id_kematian` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `pindah_tb`
--
ALTER TABLE `pindah_tb`
  MODIFY `id_pindah` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tanah_tb`
--
ALTER TABLE `tanah_tb`
  MODIFY `persil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `wisata`
--
ALTER TABLE `wisata`
  MODIFY `id_wisata` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `kegiatan_tb`
--
ALTER TABLE `kegiatan_tb`
  ADD CONSTRAINT `kegiatan_tb_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `kk_tb` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `kelahiran_tb`
--
ALTER TABLE `kelahiran_tb`
  ADD CONSTRAINT `kelahiran_tb_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `kk_tb` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `kematian_tb`
--
ALTER TABLE `kematian_tb`
  ADD CONSTRAINT `kematian_tb_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `kk_tb` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `pindah_tb`
--
ALTER TABLE `pindah_tb`
  ADD CONSTRAINT `pindah_tb_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `kk_tb` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `rt_tb`
--
ALTER TABLE `rt_tb`
  ADD CONSTRAINT `rt_tb_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `kk_tb` (`NIK`);

--
-- Ketidakleluasaan untuk tabel `tanah_tb`
--
ALTER TABLE `tanah_tb`
  ADD CONSTRAINT `tanah_tb_ibfk_1` FOREIGN KEY (`rtrw`) REFERENCES `rt_tb` (`rtrw`);

--
-- Ketidakleluasaan untuk tabel `user_tb`
--
ALTER TABLE `user_tb`
  ADD CONSTRAINT `user_tb_ibfk_1` FOREIGN KEY (`NIK`) REFERENCES `kk_tb` (`NIK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
