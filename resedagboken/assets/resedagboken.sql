-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 20 apr 2018 kl 12:17
-- Serverversion: 10.1.13-MariaDB
-- PHP-version: 7.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

---------------------------------------

--
-- Tabellstruktur `anvandare`
--

CREATE TABLE `anvandare` (
  `id` int(5) NOT NULL,
  `fnamn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `enamn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `adress` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `epost` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `mobil` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `kon` int(1) NOT NULL,
  `anamn` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `hash` varchar(60) COLLATE utf8_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

-- --------------------------------------------------------

--
-- Tabellstruktur `resa`
--

CREATE TABLE `resa` (
  `id` int(11) NOT NULL,
  `namn` varchar(50) COLLATE utf8_swedish_ci NOT NULL,
  `beskrivning` varchar(1000) COLLATE utf8_swedish_ci NOT NULL,
  `privat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Dumpning av Data i tabell `resa`
--
--
-- Index för tabell `anvandare`
--
ALTER TABLE `anvandare`
  ADD PRIMARY KEY (`id`);

--
-- Index för tabell `resa`
--
ALTER TABLE `resa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `anvandare`
--
ALTER TABLE `anvandare`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT för tabell `resa`
--
ALTER TABLE `resa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
