-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Počítač: 127.0.0.1
-- Vytvořeno: Stř 25. lis 2020, 16:37
-- Verze serveru: 10.4.14-MariaDB
-- Verze PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáze: `vesnice2`
--

-- --------------------------------------------------------

--
-- Struktura tabulky `nepratele`
--

CREATE TABLE `nepratele` (
  `id_nepritel` int(11) NOT NULL,
  `jmeno` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabulky `postava`
--

CREATE TABLE `postava` (
  `id_postava` int(11) NOT NULL,
  `hlava` int(11) NOT NULL,
  `oci` int(11) NOT NULL,
  `pusa` int(11) NOT NULL,
  `brada` int(11) NOT NULL,
  `zivoty` int(11) NOT NULL DEFAULT 100,
  `xp` int(11) NOT NULL DEFAULT 0,
  `unava` int(11) NOT NULL DEFAULT 0,
  `penize` int(11) NOT NULL DEFAULT 0,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `postava`
--

INSERT INTO `postava` (`id_postava`, `hlava`, `oci`, `pusa`, `brada`, `zivoty`, `xp`, `unava`, `penize`, `id`) VALUES
(1, 7, 8, 3, 3, 80, 11, 30, 40, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `souboje`
--

CREATE TABLE `souboje` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_nepritel` int(11) NOT NULL,
  `stav` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `souboje`
--

INSERT INTO `souboje` (`id`, `id_user`, `id_nepritel`, `stav`) VALUES
(1, 0, 0, 0),
(2, 0, 0, 0),
(3, 0, 0, 0);

-- --------------------------------------------------------

--
-- Struktura tabulky `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `trn_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Vypisuji data pro tabulku `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `trn_date`) VALUES
(1, 'sasa', 'alexistom@seznam.cz', '202cb962ac59075b964b07152d234b70', '2020-11-25');

--
-- Klíče pro exportované tabulky
--

--
-- Klíče pro tabulku `nepratele`
--
ALTER TABLE `nepratele`
  ADD PRIMARY KEY (`id_nepritel`);

--
-- Klíče pro tabulku `postava`
--
ALTER TABLE `postava`
  ADD PRIMARY KEY (`id_postava`),
  ADD KEY `id` (`id`);

--
-- Klíče pro tabulku `souboje`
--
ALTER TABLE `souboje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_nepritel` (`id_nepritel`);

--
-- Klíče pro tabulku `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pro tabulky
--

--
-- AUTO_INCREMENT pro tabulku `nepratele`
--
ALTER TABLE `nepratele`
  MODIFY `id_nepritel` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pro tabulku `postava`
--
ALTER TABLE `postava`
  MODIFY `id_postava` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pro tabulku `souboje`
--
ALTER TABLE `souboje`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pro tabulku `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
