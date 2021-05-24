-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 24. Mai 2021 um 13:18
-- Server-Version: 10.4.18-MariaDB
-- PHP-Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `adressebuch`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `vorname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nachname` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `strasse` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hausnummer` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ort` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plz` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `contacts`
--

INSERT INTO `contacts` (`id`, `vorname`, `nachname`, `email`, `phone`, `strasse`, `hausnummer`, `ort`, `plz`) VALUES
(29, 'devierte', 'neovic', 'neovic@gmail.com', '87945612', 'silay', '45', 'Manheim', 45679),
(30, 'tolentino', 'dee', 'dee@gmail.com', '1345648', 'bacolod', '232', 'City', 45678),
(32, 'Hadie', 'Walied', 'hadie@web.de', '015167479737', 'Altener-str', '122', 'Wupertal', 56788),
(53, 'Ahmad', 'Alhamad', 'alhamad.ahmad@web.de', '015167479737', 'Kurt-Schumacher-str', '144', 'Gelsenkirchen', 45213),
(54, 'jaber', 'alhamad', 'jaboury@gmail.com', '02098976', 'Flurastr', '23', 'Oberhausen', 34561),
(55, 'Mustafa', 'Jaboury', 'Mustafa@yahoo.com', '09826762', 'Summerstr', '67', 'Gladbeck', 34562),
(58, 'jhghj', 'gjhgj', 'g@h.com', '015167479737', 'iziuz iziuz', '656g', '566', 45645);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
