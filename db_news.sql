-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Jul 2024 pada 06.41
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_news`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `news`
--

CREATE TABLE `news` (
  `id` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `title` varchar(100) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `creator` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `news`
--

INSERT INTO `news` (`id`, `id_user`, `title`, `picture`, `description`, `creator`, `date`) VALUES
(26, 8, 'Syekh Sudais Ditunjuk Jadi Imam Salat Idul Adha di Masjidil Haram ', 'ddc8c2c97934f8a6b579014d2b7f804esyeikh-abdurrahman-as-sudais-antara-foto.webp', 'Jakarta - Kepala Imam Masjidil Haram Syekh Dr. Abdulrahman Al-Sudais ditunjuk sebagai imam yang memimpin salat Idul Adha dan khatib di Masjidil Haram. Hal ini diumumkan Kepresidenan Urusan Agama Dua Masjid Suci melalui kantor berita Saudi, Saudi Press Agency (SPA).\r\n\"Kepresidenan Urusan Agama Dua Masjid Suci mengumumkan Syekh Dr Abdulrahman Al-Sudais akan menjadi imam yang memimpin salat Idul Adha dan menyampaikan khutbah Id di Masjidil Haram, Makkah,\" lapor SPA, Minggu (9/6/2024).\r\n\r\nSalat Idul Adha di Masjidil Haram bakal digelar pada Minggu, 16 Juni 2024. Informasi ini merujuk pada hasil pantauan hilal di Arab Saudi yang menetapkan awal bulan Zulhijah atau 1 Zulhijah 1445 H jatuh pada 7 Juni 2024, satu hari lebih dulu dibandingkan di Indonesia yang ditetapkan pemerintah jatuh pada Senin, 17 Juni 2024.\r\n\r\nUntuk itu, Idul Adha yang diperingati tiap 10 Zulhijah bertepatan dengan 16 Juni. Hari Arafah jatuh pada sehari sebelumnya yakni, 15 Juni. Keputusan ini disampaikan Mahkamah Agung Kerajaan usai menerima laporan pengamatan hilal yang dilakukan pada 6 Juni waktu petang.\r\n\r\nSementara itu, imam terpilih dan khatib yang menyampaikan khutbah dalam salat Idul Adha di Masjid Nabawi adalah Syekh Dr Khalid Al-Muhanna.', 'Ginmothra', '2024-06-09'),
(27, 9, 'Gempa Bumi Mengguncang Jawa Barat, Ribuan Bangunan Rusak', '158b751c19f8e6c1efc09e181c96c745download (2).jpg', 'Gempa bumi berkekuatan 6,2 skala Richter mengguncang Jawa Barat pada Senin (10 Juni 2024) pagi, menewaskan sedikitnya 20 orang dan melukai ratusan lainnya. Gempa ini terjadi sekitar pukul 07:30 WIB dan berpusat di sekitar 50 kilometer selatan kota Bandung.\r\n\r\nGempa dahsyat ini menyebabkan kerusakan parah pada ribuan bangunan di beberapa kabupaten di Jawa Barat, termasuk Bandung, Cianjur, dan Garut. Banyak rumah, sekolah, dan gedung-gedung lainnya runtuh atau mengalami kerusakan serius.\r\n\r\nTim SAR masih terus melakukan pencarian dan penyelamatan korban di lokasi-lokasi yang terkena dampak gempa. Pemerintah Indonesia telah mengerahkan bantuan kemanusiaan untuk membantu para korban dan evakuasi mereka ke tempat yang aman.\r\n\r\nPresiden Republik Indonesia telah menyampaikan duka cita mendalam kepada para korban dan keluarga mereka. Beliau juga memerintahkan semua pihak terkait untuk segera menangani dampak gempa dan membantu para korban.\r\n\r\nGempa bumi ini adalah salah satu gempa bumi paling dahsyat yang pernah terjadi di Jawa Barat dalam beberapa tahun terakhir. Gempa ini telah menyebabkan kerusakan yang signifikan dan menimbulkan kesedihan bagi banyak orang.\r\n\r\nBerikut beberapa informasi tambahan tentang gempa bumi:\r\n\r\nKekuatan gempa: 6,2 skala Richter\r\nLokasi gempa: sekitar 50 kilometer selatan kota Bandung, Jawa Barat\r\nWaktu gempa: Senin (10 Juni 2024), pukul 07:30 WIB\r\nKorban: 20 orang tewas, ratusan lainnya luka-luka\r\nKerusakan: Ribuan bangunan rusak di beberapa kabupaten di Jawa Barat', 'Rafli', '2024-06-10'),
(28, 10, 'adammmm', '4cc911a56a7fea4799c60ed7a5d71c0cWhatsApp Image 2024-06-14 at 07.43.37.jpeg', 'xcvbnm,.,mnbvcxzxcvbn', 'miranda', '2024-06-14'),
(29, 11, 'giji', 'fc94a1aefba984fe201394baa0fd5d02image.png', 'agggggggggg', 'affan', '2024-06-14');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(255) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `news`
--
ALTER TABLE `news`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
