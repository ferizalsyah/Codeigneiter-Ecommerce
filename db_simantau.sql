-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Jun 2019 pada 09.33
-- Versi server: 10.1.33-MariaDB
-- Versi PHP: 7.2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simantau`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblagama`
--

CREATE TABLE `a_tblagama` (
  `idagama` int(2) NOT NULL,
  `nmagama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblagama`
--

INSERT INTO `a_tblagama` (`idagama`, `nmagama`) VALUES
(1, 'Islam'),
(2, 'Katolik'),
(3, 'Protestan'),
(4, 'Hindu'),
(5, 'Budha');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tbljenis`
--

CREATE TABLE `a_tbljenis` (
  `idjenis` int(10) NOT NULL,
  `nmjenis` varchar(50) NOT NULL,
  `idkategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tbljenis`
--

INSERT INTO `a_tbljenis` (`idjenis`, `nmjenis`, `idkategori`) VALUES
(2, 'Mesin Ketik Manual Standar (14-16)', 5),
(3, 'Mesin Ketik Manual Longowagen (18..)', 1),
(4, 'Mesin Ketik Listrik Portable', 1),
(5, 'Mesin Listrik Standar', 1),
(6, 'Mesin Ketik Listrik Lowengagen', 1),
(7, 'Mesin Ketik Elektronik', 1),
(8, 'Mesin Ketik Elektronik/Selektif', 1),
(9, 'Mesin Ketik Braile', 1),
(10, 'Mesin Ketik Phromosons', 1),
(11, 'Mesin Ketik Cetak Stereo Pioner (Braile)', 1),
(12, 'Mesin Hitung Manual', 1),
(13, 'Mesin Hitung Listrik', 1),
(14, 'Mesin Hitung Elektronik', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tbljk`
--

CREATE TABLE `a_tbljk` (
  `idjk` int(2) NOT NULL,
  `jk` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tbljk`
--

INSERT INTO `a_tbljk` (`idjk`, `jk`) VALUES
(1, 'L'),
(2, 'P');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblkampus`
--

CREATE TABLE `a_tblkampus` (
  `idkampus` int(11) NOT NULL,
  `kd_kampus` varchar(5) NOT NULL,
  `nmkampus` varchar(30) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblkampus`
--

INSERT INTO `a_tblkampus` (`idkampus`, `kd_kampus`, `nmkampus`, `alamat`) VALUES
(1, 'E', 'Kampus Utama', 'Jl.Jend. A. Yani No.3 Palembang'),
(2, 'A', 'Kampus A', 'Jl.Jend. A. Yani No.12 Palembang'),
(3, 'B', 'Kampus B', 'Jl.Jend. A. Yani No.3 Palembang'),
(4, 'C', 'Kampus C', 'Jl.Jend. A. Yani No.24 Palembang'),
(5, 'D', 'Kampus D', 'Jl.Jend. A. Yani No.3 Palembang'),
(6, 'T', 'G', 'd');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblkategori`
--

CREATE TABLE `a_tblkategori` (
  `idkategori` int(11) NOT NULL,
  `nmkategori` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblkategori`
--

INSERT INTO `a_tblkategori` (`idkategori`, `nmkategori`) VALUES
(1, 'MESIN TIK DAN HITUNG'),
(2, 'ALAT REPRODUKSI (Penggada)'),
(3, 'ALAT PENYIMPANAN PERLENGKAPAN KTR'),
(4, 'ALAT KANTOR LAINNYA'),
(5, 'ALAT RUMAH TANGGA'),
(6, 'Alat Pembersih'),
(7, 'Alat Pendingin'),
(8, 'Alat Dapur'),
(9, 'Alat Rumah Tangga Lainnya (Home Use)'),
(10, 'Alat Pemadam Kebakaran'),
(11, 'KOMPUTER'),
(12, 'Personal Komputer'),
(13, 'Peralatan Komputer Mainframe'),
(14, 'Peralatan Mini Komputer'),
(15, 'Peralatan Personal Komputer'),
(16, 'Peralatan Jaringan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblkondisi`
--

CREATE TABLE `a_tblkondisi` (
  `idkondisi` int(11) NOT NULL,
  `nmkondisi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblkondisi`
--

INSERT INTO `a_tblkondisi` (`idkondisi`, `nmkondisi`) VALUES
(1, 'Baik'),
(2, 'Rusak Ringan'),
(3, 'Rusak Berat'),
(4, 'Hilang'),
(5, 'Dihibahkan'),
(6, 'Lelang');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblmerk`
--

CREATE TABLE `a_tblmerk` (
  `idmerk` int(11) NOT NULL,
  `nmmerk` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblmerk`
--

INSERT INTO `a_tblmerk` (`idmerk`, `nmmerk`) VALUES
(1, 'Samsung'),
(2, 'Apple'),
(3, 'Foxconn'),
(4, 'HP'),
(5, 'Siemens'),
(6, 'Hitachi'),
(7, 'Panasonic'),
(8, 'Sony'),
(9, 'Toshiba'),
(10, 'BSH'),
(11, 'Dell'),
(12, 'Intel'),
(13, 'Fujitsu'),
(14, 'KOC'),
(15, 'LG'),
(16, 'Canon');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblokasi`
--

CREATE TABLE `a_tblokasi` (
  `idruang` int(11) NOT NULL,
  `namaruang` varchar(40) NOT NULL,
  `lantai` int(2) NOT NULL,
  `idkampus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblokasi`
--

INSERT INTO `a_tblokasi` (`idruang`, `namaruang`, `lantai`, `idkampus`) VALUES
(2, 'U302', 3, 1),
(3, 'U301', 3, 1),
(4, 'U302', 3, 1),
(5, 'U303', 3, 1),
(6, 'U304', 3, 1),
(7, 'U305', 3, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblprofesi`
--

CREATE TABLE `a_tblprofesi` (
  `idprofesi` int(11) NOT NULL,
  `nmprofesi` varchar(40) NOT NULL,
  `gaji` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblprofesi`
--

INSERT INTO `a_tblprofesi` (`idprofesi`, `nmprofesi`, `gaji`) VALUES
(1, 'guru', 4000000),
(2, 'dokter', 7000000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblsdm`
--

CREATE TABLE `a_tblsdm` (
  `idsdm` int(11) NOT NULL,
  `idprofesi` int(11) NOT NULL,
  `kdsdm` varchar(20) NOT NULL,
  `nmsdm` varchar(70) NOT NULL,
  `idjk` int(2) NOT NULL,
  `idagama` int(2) NOT NULL,
  `tmp_lahir` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `foto` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblsdm`
--

INSERT INTO `a_tblsdm` (`idsdm`, `idprofesi`, `kdsdm`, `nmsdm`, `idjk`, `idagama`, `tmp_lahir`, `tgl_lahir`, `foto`, `alamat`) VALUES
(18, 1, '1', 'juminten', 0, 0, 'banyuasin', '2018-12-07', 'v_e_s_p_e_r_by_3hil_db5z3wf-pre.jpg', 'plaju');

-- --------------------------------------------------------

--
-- Struktur dari tabel `a_tblsumber`
--

CREATE TABLE `a_tblsumber` (
  `idsumber` int(5) NOT NULL,
  `nmsumber` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `a_tblsumber`
--

INSERT INTO `a_tblsumber` (`idsumber`, `nmsumber`) VALUES
(1, 'Universitas Bina Darma'),
(2, 'Pemprov Sumsel'),
(3, 'Hibah TPSDP'),
(4, 'Hibah PHP-PTS'),
(5, 'Sumbangan Mahasiswa'),
(7, 'huo');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_tblbarang`
--

CREATE TABLE `b_tblbarang` (
  `idbarang` int(11) NOT NULL,
  `idjenis` int(10) NOT NULL,
  `nmbarang` text NOT NULL,
  `spesifikasi` text NOT NULL,
  `idmerk` int(11) NOT NULL,
  `sn` varchar(50) NOT NULL,
  `fotobarang` varchar(100) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `b_tblbarang`
--

INSERT INTO `b_tblbarang` (`idbarang`, `idjenis`, `nmbarang`, `spesifikasi`, `idmerk`, `sn`, `fotobarang`, `tgl_input`) VALUES
(17, 6, 'sdfdsfdsf', 'dsfsdfsf', 10, 'sdfsdfsf', '1545017829_simantau.jpg', '2018-12-17'),
(19, 0, 'kshdfksdfsfddfdf', 'sdkfksdjf', 0, 'skdjfksdf', '1545018406_simantau', '2018-12-17'),
(21, 6, 'laptop', 'ram 8 gb', 2, '1123456', '1545018959_simantau.jpg', '2018-12-17'),
(24, 3, '1234', '4456', 1, '1wsww', '1545025396_simantau.jpg', '0000-00-00'),
(25, 9, 'kipas angin ', 'baling baling bambu', 3, '123', '1545025473_simantau.jpg', '0000-00-00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_tbldetailbarang`
--

CREATE TABLE `b_tbldetailbarang` (
  `iddetail` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `tglbeli` date NOT NULL,
  `idbarang` int(11) NOT NULL,
  `tglgaransi` date NOT NULL,
  `idsumber` int(5) NOT NULL,
  `idruang` int(11) NOT NULL,
  `idsdm` int(11) NOT NULL,
  `idkondisi` int(11) NOT NULL,
  `tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_tblperbaikan`
--

CREATE TABLE `b_tblperbaikan` (
  `idperbaikan` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `tgl_perbaikan` date NOT NULL,
  `namaservice` int(11) NOT NULL,
  `hp` int(11) NOT NULL,
  `beritaacara` text NOT NULL,
  `tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `b_tblpindahbarang`
--

CREATE TABLE `b_tblpindahbarang` (
  `iddetail` int(11) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `idruang` int(11) NOT NULL,
  `idsdm` int(11) NOT NULL,
  `idkondisi` int(11) NOT NULL,
  `tglinput` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_tblpantau`
--

CREATE TABLE `c_tblpantau` (
  `idpantau` int(1) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `tglpantau` date NOT NULL,
  `hasilpantau` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `tindakan` text NOT NULL,
  `biayaperbaikan` int(11) NOT NULL,
  `buktibiaya` varchar(100) NOT NULL,
  `tgllapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `c_tblpantauglobal`
--

CREATE TABLE `c_tblpantauglobal` (
  `idglobal` int(11) NOT NULL,
  `nmobjek` varchar(50) NOT NULL,
  `uraianobjek` text NOT NULL,
  `tglpantau` date NOT NULL,
  `hasilpantau` text NOT NULL,
  `rekomendasi` text NOT NULL,
  `gbr1` varchar(100) NOT NULL,
  `gbr2` varchar(100) NOT NULL,
  `gbr3` varchar(100) NOT NULL,
  `gbr4` varchar(100) NOT NULL,
  `tindakan` text NOT NULL,
  `biayaperbaikan` int(11) NOT NULL,
  `buktibiaya` varchar(100) NOT NULL,
  `tgllapor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(10) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level_user` int(5) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `status` int(5) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level_user`, `email`, `nama_lengkap`, `status`, `photo`) VALUES
(1, 'jawo', '123', 1, 'jawo', 'jawokuy', 0, ''),
(2, 'mahmud', 'mahmudph', 1, 'mahmudph8@gmail.com', 'mahmud-', 1, ''),
(3, 'rejak', 'kacangtanah', 2, 'rejak@gmail.com', 'rejakk ae', 1, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_tblberita`
--

CREATE TABLE `u_tblberita` (
  `idberita` int(11) NOT NULL,
  `judul` text NOT NULL,
  `idkategori` int(3) NOT NULL,
  `isiberita` text NOT NULL,
  `tglberita` date NOT NULL,
  `fotoberita` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_tblberita`
--

INSERT INTO `u_tblberita` (`idberita`, `judul`, `idkategori`, `isiberita`, `tglberita`, `fotoberita`) VALUES
(3, 'manajemen', 2, 'foaoi', '2019-01-04', '68479906_p0_master12006.jpg'),
(4, 'manajemen', 1, 'foaoi', '2019-01-04', '68479906_p0_master120010.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `u_tblkategori`
--

CREATE TABLE `u_tblkategori` (
  `idkategori` int(3) NOT NULL,
  `kategori` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `u_tblkategori`
--

INSERT INTO `u_tblkategori` (`idkategori`, `kategori`) VALUES
(1, 'Ekonomi'),
(2, 'Saint dan Teknologi'),
(3, 'Hukum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `a_tblagama`
--
ALTER TABLE `a_tblagama`
  ADD PRIMARY KEY (`idagama`);

--
-- Indeks untuk tabel `a_tbljenis`
--
ALTER TABLE `a_tbljenis`
  ADD PRIMARY KEY (`idjenis`);

--
-- Indeks untuk tabel `a_tbljk`
--
ALTER TABLE `a_tbljk`
  ADD PRIMARY KEY (`idjk`);

--
-- Indeks untuk tabel `a_tblkampus`
--
ALTER TABLE `a_tblkampus`
  ADD PRIMARY KEY (`idkampus`);

--
-- Indeks untuk tabel `a_tblkategori`
--
ALTER TABLE `a_tblkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indeks untuk tabel `a_tblkondisi`
--
ALTER TABLE `a_tblkondisi`
  ADD PRIMARY KEY (`idkondisi`);

--
-- Indeks untuk tabel `a_tblmerk`
--
ALTER TABLE `a_tblmerk`
  ADD PRIMARY KEY (`idmerk`);

--
-- Indeks untuk tabel `a_tblokasi`
--
ALTER TABLE `a_tblokasi`
  ADD PRIMARY KEY (`idruang`);

--
-- Indeks untuk tabel `a_tblprofesi`
--
ALTER TABLE `a_tblprofesi`
  ADD PRIMARY KEY (`idprofesi`);

--
-- Indeks untuk tabel `a_tblsdm`
--
ALTER TABLE `a_tblsdm`
  ADD PRIMARY KEY (`idsdm`);

--
-- Indeks untuk tabel `a_tblsumber`
--
ALTER TABLE `a_tblsumber`
  ADD PRIMARY KEY (`idsumber`);

--
-- Indeks untuk tabel `b_tblbarang`
--
ALTER TABLE `b_tblbarang`
  ADD PRIMARY KEY (`idbarang`);

--
-- Indeks untuk tabel `b_tbldetailbarang`
--
ALTER TABLE `b_tbldetailbarang`
  ADD PRIMARY KEY (`iddetail`);

--
-- Indeks untuk tabel `b_tblperbaikan`
--
ALTER TABLE `b_tblperbaikan`
  ADD PRIMARY KEY (`idperbaikan`);

--
-- Indeks untuk tabel `b_tblpindahbarang`
--
ALTER TABLE `b_tblpindahbarang`
  ADD PRIMARY KEY (`iddetail`);

--
-- Indeks untuk tabel `c_tblpantau`
--
ALTER TABLE `c_tblpantau`
  ADD PRIMARY KEY (`idpantau`);

--
-- Indeks untuk tabel `c_tblpantauglobal`
--
ALTER TABLE `c_tblpantauglobal`
  ADD PRIMARY KEY (`idglobal`);

--
-- Indeks untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indeks untuk tabel `u_tblberita`
--
ALTER TABLE `u_tblberita`
  ADD PRIMARY KEY (`idberita`);

--
-- Indeks untuk tabel `u_tblkategori`
--
ALTER TABLE `u_tblkategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `a_tblagama`
--
ALTER TABLE `a_tblagama`
  MODIFY `idagama` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `a_tbljenis`
--
ALTER TABLE `a_tbljenis`
  MODIFY `idjenis` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `a_tbljk`
--
ALTER TABLE `a_tbljk`
  MODIFY `idjk` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `a_tblkampus`
--
ALTER TABLE `a_tblkampus`
  MODIFY `idkampus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `a_tblkategori`
--
ALTER TABLE `a_tblkategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `a_tblkondisi`
--
ALTER TABLE `a_tblkondisi`
  MODIFY `idkondisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `a_tblmerk`
--
ALTER TABLE `a_tblmerk`
  MODIFY `idmerk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `a_tblokasi`
--
ALTER TABLE `a_tblokasi`
  MODIFY `idruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `a_tblprofesi`
--
ALTER TABLE `a_tblprofesi`
  MODIFY `idprofesi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `a_tblsdm`
--
ALTER TABLE `a_tblsdm`
  MODIFY `idsdm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT untuk tabel `a_tblsumber`
--
ALTER TABLE `a_tblsumber`
  MODIFY `idsumber` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `b_tblbarang`
--
ALTER TABLE `b_tblbarang`
  MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `b_tbldetailbarang`
--
ALTER TABLE `b_tbldetailbarang`
  MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `b_tblperbaikan`
--
ALTER TABLE `b_tblperbaikan`
  MODIFY `idperbaikan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `b_tblpindahbarang`
--
ALTER TABLE `b_tblpindahbarang`
  MODIFY `iddetail` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `c_tblpantau`
--
ALTER TABLE `c_tblpantau`
  MODIFY `idpantau` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `c_tblpantauglobal`
--
ALTER TABLE `c_tblpantauglobal`
  MODIFY `idglobal` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `u_tblberita`
--
ALTER TABLE `u_tblberita`
  MODIFY `idberita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `u_tblkategori`
--
ALTER TABLE `u_tblkategori`
  MODIFY `idkategori` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
