-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 26 apr 2022 om 10:12
-- Serverversie: 10.4.22-MariaDB
-- PHP-versie: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vrijwilligershuis`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `donaties`
--

CREATE TABLE `donaties` (
  `id` int(100) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `category` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Gegevens worden geëxporteerd voor tabel `donaties`
--

INSERT INTO `donaties` (`id`, `name`, `phone`, `email`, `notes`, `category`) VALUES
(1, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', '', '0'),
(2, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', '', '0'),
(3, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', '', '0'),
(4, 'cas meijer', 0, 'robbertcasmeijer@gmail.com', '', '0'),
(5, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', '', '0'),
(6, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', '', '0'),
(7, 'cas meijer', 627137925, 'robbertcasmeijer@gmail.com', '', '0'),
(8, 'cas meijer', 6271379, 'robbertcasmeijer@gmail.com', '', '0'),
(9, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', '', 'meubels'),
(10, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', 'test', 'meubels'),
(11, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', 'test', 'meubels'),
(12, 'cas meijer', 627137924, 'robbertcasmeijer@gmail.com', 'test', 'meubels');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `donaties`
--
ALTER TABLE `donaties`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `donaties`
--
ALTER TABLE `donaties`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
