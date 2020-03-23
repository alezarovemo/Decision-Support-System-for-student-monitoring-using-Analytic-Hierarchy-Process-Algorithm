-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 14 Mei 2017 pada 17.30
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `nyoba`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `cob`
--

CREATE TABLE IF NOT EXISTS `cob` (
  `a` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_absensi`
--

CREATE TABLE IF NOT EXISTS `t_absensi` (
  `id_absensi` float NOT NULL AUTO_INCREMENT,
  `ab2` float NOT NULL,
  `ab3` float NOT NULL,
  `ab4` float NOT NULL,
  `ab7` float NOT NULL,
  `ab8` float NOT NULL,
  `ab12` float NOT NULL,
  PRIMARY KEY (`id_absensi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_absensi`
--

INSERT INTO `t_absensi` (`id_absensi`, `ab2`, `ab3`, `ab4`, `ab7`, `ab8`, `ab12`) VALUES
(1, 2, 5, 7, 3, 5, 3),
(2, 6, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_alternatif`
--

CREATE TABLE IF NOT EXISTS `t_alternatif` (
  `nis` varchar(10) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  KEY `nis` (`nis`),
  KEY `nis_2` (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_alternatif`
--

INSERT INTO `t_alternatif` (`nis`, `nama`, `tempat`, `tanggal`, `jurusan`, `tlp`) VALUES
('4223', 'Asep', 'Tasikmalaya', '2017-04-10', 'IPS', '081234123000'),
('54664', 'Fajar', 'Ciamis', '2017-05-09', 'IPA', '098765432123'),
('1434', 'Dadan', 'Tasikmalaya', '2016-10-19', 'IPA', '78585969'),
('1234', 'Dede', 'Tasikmalaya', '2017-05-16', 'IPA', '087564321345'),
('98765', 'Yoga', 'Ciamis', '2017-05-01', 'IPS', '987654321345'),
('4223', 'nono sudarsono', 'Tasikmalaya', '2017-05-08', 'IPA', '0987654');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_alternatif2`
--

CREATE TABLE IF NOT EXISTS `t_alternatif2` (
  `nis` varchar(12) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tempat` varchar(25) NOT NULL,
  `tanggal` date NOT NULL,
  `jurusan` varchar(10) NOT NULL,
  `tlp` varchar(12) NOT NULL,
  PRIMARY KEY (`nis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_alternatif2`
--

INSERT INTO `t_alternatif2` (`nis`, `nama`, `tempat`, `tanggal`, `jurusan`, `tlp`) VALUES
('4112', 'Asep', 'Tasikmalaya', '2017-04-10', 'IPS', '081234123000'),
('4113', 'Fajar', 'Ciamis', '2017-05-09', 'IPA', '098765432123'),
('4114', 'Dadan', 'Tasikmalaya', '2016-10-19', 'IPA', '78585969'),
('4115', 'Dede', 'Tasikmalaya', '2017-05-16', 'IPA', '087564321345'),
('4116', 'Yoga', 'Ciamis', '2017-05-01', 'IPS', '987654321345'),
('546546273', 'asdbnbdnadsn', 'vdasdvavdbad', '0000-00-00', 'IPA', 'hgxhxj');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_b_ab`
--

CREATE TABLE IF NOT EXISTS `t_b_ab` (
  `id_b_ab` float NOT NULL AUTO_INCREMENT,
  `b_ab1` float NOT NULL,
  `b_ab2` float NOT NULL,
  `b_ab3` float NOT NULL,
  `b_ab4` float NOT NULL,
  PRIMARY KEY (`id_b_ab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_b_ab`
--

INSERT INTO `t_b_ab` (`id_b_ab`, `b_ab1`, `b_ab2`, `b_ab3`, `b_ab4`) VALUES
(1, 0.520472, 0.297066, 0.124377, 0.0580844);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_b_kriteria`
--

CREATE TABLE IF NOT EXISTS `t_b_kriteria` (
  `id_b_kriteria` float NOT NULL AUTO_INCREMENT,
  `b_ab` float NOT NULL,
  `b_sk` float NOT NULL,
  `b_pl` float NOT NULL,
  `b_ptt` float NOT NULL,
  `b_na` float NOT NULL,
  PRIMARY KEY (`id_b_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data untuk tabel `t_b_kriteria`
--

INSERT INTO `t_b_kriteria` (`id_b_kriteria`, `b_ab`, `b_sk`, `b_pl`, `b_ptt`, `b_na`) VALUES
(3, 0.474689, 0.25811, 0.145863, 0.0792884, 0.0420499);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_b_na`
--

CREATE TABLE IF NOT EXISTS `t_b_na` (
  `id_b_na` float NOT NULL AUTO_INCREMENT,
  `bn1` float NOT NULL,
  `bn2` float NOT NULL,
  `bn3` float NOT NULL,
  `bn4` float NOT NULL,
  PRIMARY KEY (`id_b_na`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `t_b_na`
--

INSERT INTO `t_b_na` (`id_b_na`, `bn1`, `bn2`, `bn3`, `bn4`) VALUES
(2, 0.490928, 0.291348, 0.150688, 0.0670359);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_b_pl`
--

CREATE TABLE IF NOT EXISTS `t_b_pl` (
  `id_b_pl` float NOT NULL AUTO_INCREMENT,
  `b_pl1` float NOT NULL,
  `b_pl2` float NOT NULL,
  `b_pl3` float NOT NULL,
  PRIMARY KEY (`id_b_pl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_b_pl`
--

INSERT INTO `t_b_pl` (`id_b_pl`, `b_pl1`, `b_pl2`, `b_pl3`) VALUES
(1, 0.633346, 0.260498, 0.106156);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_b_ptt`
--

CREATE TABLE IF NOT EXISTS `t_b_ptt` (
  `id_b_ptt` int(5) NOT NULL AUTO_INCREMENT,
  `b_p1` float NOT NULL,
  `b_p2` float NOT NULL,
  `b_p3` float NOT NULL,
  PRIMARY KEY (`id_b_ptt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_b_ptt`
--

INSERT INTO `t_b_ptt` (`id_b_ptt`, `b_p1`, `b_p2`, `b_p3`) VALUES
(1, 0.633346, 0.260498, 0.106156);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_b_sk`
--

CREATE TABLE IF NOT EXISTS `t_b_sk` (
  `id_b_sk` float NOT NULL AUTO_INCREMENT,
  `b_sk1` float NOT NULL,
  `b_sk2` float NOT NULL,
  `b_sk3` float NOT NULL,
  PRIMARY KEY (`id_b_sk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_b_sk`
--

INSERT INTO `t_b_sk` (`id_b_sk`, `b_sk1`, `b_sk2`, `b_sk3`) VALUES
(1, 0.633346, 0.260498, 0.106156);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_h_analisa`
--

CREATE TABLE IF NOT EXISTS `t_h_analisa` (
  `id_h_analisa` float NOT NULL AUTO_INCREMENT,
  `nama` varchar(25) NOT NULL,
  `ab` float NOT NULL,
  `sk` float NOT NULL,
  `pl` float NOT NULL,
  `ptt` float NOT NULL,
  `na` float NOT NULL,
  `hasil_a` float NOT NULL,
  `Keterangan` varchar(25) NOT NULL,
  PRIMARY KEY (`id_h_analisa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data untuk tabel `t_h_analisa`
--

INSERT INTO `t_h_analisa` (`id_h_analisa`, `nama`, `ab`, `sk`, `pl`, `ptt`, `na`, `hasil_a`, `Keterangan`) VALUES
(6, 'Asep', 0.0590404, 0.0273999, 0.0154842, 0.00841694, 0.0122512, 0.122593, 'Perlu'),
(7, 'Fajar', 0.0590404, 0.0273999, 0.0154842, 0.0206545, 0.00633642, 0.128915, 'Perlu'),
(8, 'Dadan', 0.0590404, 0.0672371, 0.037997, 0.0206545, 0.00633642, 0.191265, 'Tidak'),
(9, 'Yoga', 0.141014, 0.0672371, 0.0154842, 0.0206545, 0.00633642, 0.250726, 'Tidak'),
(10, 'Dede', 0.141014, 0.0672371, 0.0154842, 0.0206545, 0.0122512, 0.256641, 'Tidak');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_kriteria`
--

CREATE TABLE IF NOT EXISTS `t_kriteria` (
  `id_kriteria` float NOT NULL AUTO_INCREMENT,
  `k2` float NOT NULL,
  `k3` float NOT NULL,
  `k4` float NOT NULL,
  `k5` float NOT NULL,
  `k8` float NOT NULL,
  `k9` float NOT NULL,
  `k10` float NOT NULL,
  `k14` float NOT NULL,
  `k15` float NOT NULL,
  `k20` float NOT NULL,
  PRIMARY KEY (`id_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data untuk tabel `t_kriteria`
--

INSERT INTO `t_kriteria` (`id_kriteria`, `k2`, `k3`, `k4`, `k5`, `k8`, `k9`, `k10`, `k14`, `k15`, `k20`) VALUES
(2, 3, 5, 5, 7, 3, 5, 5, 3, 5, 3),
(3, 9, 9, 9, 9, 9, 9, 9, 9, 9, 9),
(4, 1, 2, 3, 1, 4, 2, 3, 1, 5, 1),
(5, 7, 3, 6, 5, 6, 6, 6, 3, 2, 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_nilai`
--

CREATE TABLE IF NOT EXISTS `t_nilai` (
  `id_nilai` float NOT NULL AUTO_INCREMENT,
  `n2` float NOT NULL,
  `n3` float NOT NULL,
  `n4` float NOT NULL,
  `n7` float NOT NULL,
  `n8` float NOT NULL,
  `n12` float NOT NULL,
  PRIMARY KEY (`id_nilai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_nilai`
--

INSERT INTO `t_nilai` (`id_nilai`, `n2`, `n3`, `n4`, `n7`, `n8`, `n12`) VALUES
(1, 3, 3, 5, 3, 5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pb_ab`
--

CREATE TABLE IF NOT EXISTS `t_pb_ab` (
  `id_pb_ab` float NOT NULL AUTO_INCREMENT,
  `ab1` float NOT NULL,
  `ab2` float NOT NULL,
  `ab3` float NOT NULL,
  `ab4` float NOT NULL,
  `ab5` float NOT NULL,
  `ab6` float NOT NULL,
  `ab7` float NOT NULL,
  `ab8` float NOT NULL,
  `ab9` float NOT NULL,
  `ab10` float NOT NULL,
  `ab11` float NOT NULL,
  `ab12` float NOT NULL,
  `ab13` float NOT NULL,
  `ab14` float NOT NULL,
  `ab15` float NOT NULL,
  `ab16` float NOT NULL,
  `ab17` float NOT NULL,
  `ab18` float NOT NULL,
  `ab19` float NOT NULL,
  `ab20` float NOT NULL,
  PRIMARY KEY (`id_pb_ab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_pb_ab`
--

INSERT INTO `t_pb_ab` (`id_pb_ab`, `ab1`, `ab2`, `ab3`, `ab4`, `ab5`, `ab6`, `ab7`, `ab8`, `ab9`, `ab10`, `ab11`, `ab12`, `ab13`, `ab14`, `ab15`, `ab16`, `ab17`, `ab18`, `ab19`, `ab20`) VALUES
(1, 1, 2, 5, 7, 0.5, 1, 3, 5, 0.2, 0.333333, 1, 3, 0.142857, 0.2, 0.333333, 1, 1.84286, 3.53333, 9.33333, 16);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pb_na`
--

CREATE TABLE IF NOT EXISTS `t_pb_na` (
  `id_pb_na` float NOT NULL AUTO_INCREMENT,
  `n1` float NOT NULL,
  `n2` float NOT NULL,
  `n3` float NOT NULL,
  `n4` float NOT NULL,
  `n5` float NOT NULL,
  `n6` float NOT NULL,
  `n7` float NOT NULL,
  `n8` float NOT NULL,
  `n9` float NOT NULL,
  `n10` float NOT NULL,
  `n11` float NOT NULL,
  `n12` float NOT NULL,
  `n13` float NOT NULL,
  `n14` float NOT NULL,
  `n15` float NOT NULL,
  `n16` float NOT NULL,
  `n17` float NOT NULL,
  `n18` float NOT NULL,
  `n19` float NOT NULL,
  `n20` float NOT NULL,
  PRIMARY KEY (`id_pb_na`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `t_pb_na`
--

INSERT INTO `t_pb_na` (`id_pb_na`, `n1`, `n2`, `n3`, `n4`, `n5`, `n6`, `n7`, `n8`, `n9`, `n10`, `n11`, `n12`, `n13`, `n14`, `n15`, `n16`, `n17`, `n18`, `n19`, `n20`) VALUES
(8, 1, 3, 3, 5, 0.333333, 1, 3, 5, 0.333333, 0.333333, 1, 3, 0.2, 0.2, 0.333333, 1, 1.86667, 4.53333, 7.33333, 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pb_pl`
--

CREATE TABLE IF NOT EXISTS `t_pb_pl` (
  `id_pb_pl` float NOT NULL AUTO_INCREMENT,
  `pl1` float NOT NULL,
  `pl2` float NOT NULL,
  `pl3` float NOT NULL,
  `pl4` float NOT NULL,
  `pl5` float NOT NULL,
  `pl6` float NOT NULL,
  `pl7` float NOT NULL,
  `pl8` float NOT NULL,
  `pl9` float NOT NULL,
  `pl10` float NOT NULL,
  `pl11` float NOT NULL,
  `pl12` float NOT NULL,
  PRIMARY KEY (`id_pb_pl`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_pb_pl`
--

INSERT INTO `t_pb_pl` (`id_pb_pl`, `pl1`, `pl2`, `pl3`, `pl4`, `pl5`, `pl6`, `pl7`, `pl8`, `pl9`, `pl10`, `pl11`, `pl12`) VALUES
(1, 1, 3, 5, 0.333333, 1, 3, 0.2, 0.333333, 1, 1.53333, 4.33333, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pb_ptt`
--

CREATE TABLE IF NOT EXISTS `t_pb_ptt` (
  `id_pb_ptt` int(5) NOT NULL AUTO_INCREMENT,
  `p1` float NOT NULL,
  `p2` float NOT NULL,
  `p3` float NOT NULL,
  `p4` float NOT NULL,
  `p5` float NOT NULL,
  `p6` float NOT NULL,
  `p7` float NOT NULL,
  `p8` float NOT NULL,
  `p9` float NOT NULL,
  `p10` float NOT NULL,
  `p11` float NOT NULL,
  `p12` float NOT NULL,
  PRIMARY KEY (`id_pb_ptt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_pb_ptt`
--

INSERT INTO `t_pb_ptt` (`id_pb_ptt`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`) VALUES
(1, 1, 3, 5, 0.333333, 1, 3, 0.2, 0.333333, 1, 1.53333, 4.33333, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pb_sk`
--

CREATE TABLE IF NOT EXISTS `t_pb_sk` (
  `id_pb_sk` float NOT NULL AUTO_INCREMENT,
  `sk1` float NOT NULL,
  `sk2` float NOT NULL,
  `sk3` float NOT NULL,
  `sk4` float NOT NULL,
  `sk5` float NOT NULL,
  `sk6` float NOT NULL,
  `sk7` float NOT NULL,
  `sk8` float NOT NULL,
  `sk9` float NOT NULL,
  `sk10` float NOT NULL,
  `sk11` float NOT NULL,
  `sk12` float NOT NULL,
  PRIMARY KEY (`id_pb_sk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_pb_sk`
--

INSERT INTO `t_pb_sk` (`id_pb_sk`, `sk1`, `sk2`, `sk3`, `sk4`, `sk5`, `sk6`, `sk7`, `sk8`, `sk9`, `sk10`, `sk11`, `sk12`) VALUES
(1, 1, 3, 5, 0.333333, 1, 3, 0.2, 0.333333, 1, 1.53333, 4.33333, 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_pengguna`
--

CREATE TABLE IF NOT EXISTS `t_pengguna` (
  `username` varchar(34) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama_lengkap` varchar(45) NOT NULL,
  `level` enum('admin','user') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `t_pengguna`
--

INSERT INTO `t_pengguna` (`username`, `password`, `nama_lengkap`, `level`) VALUES
('admin', '202cb962ac59075b964b07152d234b70', 'Saiful Bahri Irfanto', 'admin'),
('argame', '123', 'Irfanio Argame', 'admin'),
('ramdan', 'd41d8cd98f00b204e9800998ecf8427e', 'Muhamad Ramdan', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_perilaku`
--

CREATE TABLE IF NOT EXISTS `t_perilaku` (
  `id_perilaku` float NOT NULL AUTO_INCREMENT,
  `p2` float NOT NULL,
  `p3` float NOT NULL,
  `p6` float NOT NULL,
  PRIMARY KEY (`id_perilaku`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_perilaku`
--

INSERT INTO `t_perilaku` (`id_perilaku`, `p2`, `p3`, `p6`) VALUES
(1, 3, 5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_per_kriteria`
--

CREATE TABLE IF NOT EXISTS `t_per_kriteria` (
  `id_per_kriteria` float NOT NULL AUTO_INCREMENT,
  `k1` float NOT NULL,
  `k2` float NOT NULL,
  `k3` float NOT NULL,
  `k4` float NOT NULL,
  `k5` float NOT NULL,
  `k6` float NOT NULL,
  `k7` float NOT NULL,
  `k8` float NOT NULL,
  `k9` float NOT NULL,
  `k10` float NOT NULL,
  `k11` float NOT NULL,
  `k12` float NOT NULL,
  `k13` float NOT NULL,
  `k14` float NOT NULL,
  `k15` float NOT NULL,
  `k16` float NOT NULL,
  `k17` float NOT NULL,
  `k18` float NOT NULL,
  `k19` float NOT NULL,
  `k20` float NOT NULL,
  `k21` float NOT NULL,
  `k22` float NOT NULL,
  `k23` float NOT NULL,
  `k24` float NOT NULL,
  `k25` float NOT NULL,
  `k26` float NOT NULL,
  `k27` float NOT NULL,
  `k28` float NOT NULL,
  `k29` float NOT NULL,
  `k30` float NOT NULL,
  PRIMARY KEY (`id_per_kriteria`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `t_per_kriteria`
--

INSERT INTO `t_per_kriteria` (`id_per_kriteria`, `k1`, `k2`, `k3`, `k4`, `k5`, `k6`, `k7`, `k8`, `k9`, `k10`, `k11`, `k12`, `k13`, `k14`, `k15`, `k16`, `k17`, `k18`, `k19`, `k20`, `k21`, `k22`, `k23`, `k24`, `k25`, `k26`, `k27`, `k28`, `k29`, `k30`) VALUES
(4, 1, 3, 5, 5, 7, 0.333333, 1, 3, 5, 5, 0.2, 0.333333, 1, 3, 5, 0.2, 0.2, 0.333333, 1, 3, 0.142857, 0.2, 0.2, 0.333333, 1, 1.87619, 4.73333, 9.53333, 14.3333, 21);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_ptt`
--

CREATE TABLE IF NOT EXISTS `t_ptt` (
  `id_ptt` float NOT NULL AUTO_INCREMENT,
  `t2` float NOT NULL,
  `t3` float NOT NULL,
  `t6` float NOT NULL,
  PRIMARY KEY (`id_ptt`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_ptt`
--

INSERT INTO `t_ptt` (`id_ptt`, `t2`, `t3`, `t6`) VALUES
(1, 3, 5, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_sikap`
--

CREATE TABLE IF NOT EXISTS `t_sikap` (
  `id_sikap` float NOT NULL AUTO_INCREMENT,
  `s2` float NOT NULL,
  `s3` float NOT NULL,
  `s6` float NOT NULL,
  PRIMARY KEY (`id_sikap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `t_sikap`
--

INSERT INTO `t_sikap` (`id_sikap`, `s2`, `s3`, `s6`) VALUES
(1, 3, 5, 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
