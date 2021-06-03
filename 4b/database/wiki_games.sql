-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 03 Jun 2021 pada 16.21
-- Versi server: 10.4.6-MariaDB
-- Versi PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wiki_games`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `heroes_tb`
--

CREATE TABLE `heroes_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `content` text NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `photo` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `heroes_tb`
--

INSERT INTO `heroes_tb` (`id`, `name`, `content`, `type_id`, `photo`) VALUES
(1, 'Alucard', 'Lorem ipsum is simple dummy text of the printing and type setting industri. lorem ipsum has been standart dummy text ever since sksdakskaoskksjdkoaskaodkoadakoakdoa\r\ndjkdoasdcksnmajcicamk\r\ncdmkcnsdnivbmlcndsjnasc. \r\nasjamacnzcnalcmaskcnacnddasdfajnakldnakndjcdc\r\nacajcbahcbajbdhjcvasjcnajcvahcbjcbchjavcjac\r\ncahcbjkcascjgacuacjvchkcdsjcvdjcabcjabclas\r\nscdajcbdjkbsjkcbasklbasjkcbakdavhajcnsak.csajcasv\r\ncbjakcbjacnkcbjkckdcnklcndklcc. jkhcjkacjabcj,abcacac\r\ncjajcajcbashcgacjbdyufckjewbyufaewbjkce. \r\nhuhekhcbjkdncewckjnelnlxnme;newil\r\ndnjnlwnclasnjasncackaskclnsachahcbdscv', 1, '../assets/img/heroes/alucard.png'),
(2, 'Kagura', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 2, '../assets/img/heroes/kagura.png'),
(3, 'Layla', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 3, '../assets/img/heroes/layla.png'),
(4, 'Akai', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 4, '../assets/img/heroes/akai.png'),
(12, 'Kufra', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 12, '../assets/img/heroes/kufra.png'),
(13, 'Lancelot', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,', 13, '../assets/img/heroes/lancelot.png'),
(14, 'Gusion', 'It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,', 14, '../assets/img/heroes/gusion.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `type_tb`
--

CREATE TABLE `type_tb` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `type_tb`
--

INSERT INTO `type_tb` (`id`, `name`) VALUES
(1, 'Fighters'),
(2, 'Mage'),
(3, 'Marksman'),
(4, 'Tank'),
(5, 'Support'),
(7, 'Assasin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `heroes_tb`
--
ALTER TABLE `heroes_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `type_tb`
--
ALTER TABLE `type_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `heroes_tb`
--
ALTER TABLE `heroes_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT untuk tabel `type_tb`
--
ALTER TABLE `type_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
