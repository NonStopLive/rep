-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 23 Maj 2019, 13:46
-- Wersja serwera: 10.1.38-MariaDB
-- Wersja PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `sklyp`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `dostawa`
--

CREATE TABLE `dostawa` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `koszt` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `dostawa`
--

INSERT INTO `dostawa` (`id`, `nazwa`, `koszt`) VALUES
(12, 'Kurier Tomuś', 2),
(13, 'Paczkomaty', 1),
(14, 'Punkty Żabka, Orlen itp.', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `klient`
--

CREATE TABLE `klient` (
  `id` int(11) NOT NULL,
  `imie` text COLLATE utf8_polish_ci NOT NULL,
  `nazwisko` text COLLATE utf8_polish_ci NOT NULL,
  `adres` text COLLATE utf8_polish_ci NOT NULL,
  `telefon` varchar(32) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `koszyk`
--

CREATE TABLE `koszyk` (
  `id` int(255) NOT NULL,
  `idKlient` int(11) NOT NULL,
  `idProdukt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `platnosci`
--

CREATE TABLE `platnosci` (
  `id` int(11) NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `produkt`
--

CREATE TABLE `produkt` (
  `id` int(11) NOT NULL,
  `referencja` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `nazwa` text COLLATE utf8_polish_ci NOT NULL,
  `cena` float NOT NULL,
  `ilosc` int(11) NOT NULL,
  `obrazek` text COLLATE utf8_polish_ci NOT NULL,
  `opis` text COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `produkt`
--

INSERT INTO `produkt` (`id`, `referencja`, `nazwa`, `cena`, `ilosc`, `obrazek`, `opis`) VALUES
(2, '0001', 'Serce', 10, 10, 'https://vignette.wikia.nocookie.net/elderscrolls/images/0/0b/Ludzkie_serce_%28Skyrim%29.png/revision/latest?cb=20180201185644&path-prefix=pl\r\n', 'Serce ludzkie, smaczne i pożywne.'),
(3, '0002', 'Mózg', 8, 10, 'http://www.kojs.com.pl/images_mce/Produkty/wieprzowina/produkty_poubojowe/mozg_wieprzowy.png', 'Inteligentny umysł młodego posiadacza.\r\nGwarantowane 200 IQ.\r\n'),
(4, '0003', 'Wątróbka ', 6, 10, 'https://www.eurostemcell.org/sites/default/files/inline-images/6077442448_a6e40ce017_o.png', 'Używana tylko w weekendy. \r\nCzyszczona regularnie za pomocą wysokiej jakości napojów alkoholowych.\r\nGwarantujemy niezawodną strawność oraz szybką regeneracje.'),
(5, '0004', 'Płuca', 7, 10, 'http://www.kojs.com.pl/images_mce/Produkty/wolowina/osrodki_wolowe/pluca_wolowe.png', 'Nie palone.\r\nGwarancja głębokiego wdechu.'),
(6, '0005', 'Nerki', 4, 10, 'http://rzeczo.pl/wp-content/uploads/2017/12/kidney-147499_1280.png', 'Odkamienione, sprawne \r\n');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienie`
--

CREATE TABLE `zamowienie` (
  `id` int(11) NOT NULL,
  `idKlient` int(11) NOT NULL,
  `wartosc` float NOT NULL,
  `idKoszyk` int(11) NOT NULL,
  `idDostawa` int(11) NOT NULL,
  `idPlatnosci` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `dostawa`
--
ALTER TABLE `dostawa`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idProdukt` (`idProdukt`),
  ADD KEY `idKlient` (`idKlient`);

--
-- Indeksy dla tabeli `platnosci`
--
ALTER TABLE `platnosci`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `produkt`
--
ALTER TABLE `produkt`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idKlient` (`idKlient`),
  ADD KEY `idKlient_2` (`idKlient`),
  ADD KEY `idKoszyk` (`idKoszyk`),
  ADD KEY `idDostawa` (`idDostawa`),
  ADD KEY `idPlatnosci` (`idPlatnosci`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `dostawa`
--
ALTER TABLE `dostawa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `klient`
--
ALTER TABLE `klient`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `produkt`
--
ALTER TABLE `produkt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `zamowienie`
--
ALTER TABLE `zamowienie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `klient`
--
ALTER TABLE `klient`
  ADD CONSTRAINT `klient_ibfk_1` FOREIGN KEY (`id`) REFERENCES `zamowienie` (`idKlient`);

--
-- Ograniczenia dla tabeli `koszyk`
--
ALTER TABLE `koszyk`
  ADD CONSTRAINT `koszyk_ibfk_1` FOREIGN KEY (`idKlient`) REFERENCES `klient` (`id`),
  ADD CONSTRAINT `koszyk_ibfk_2` FOREIGN KEY (`id`) REFERENCES `zamowienie` (`idKoszyk`);

--
-- Ograniczenia dla tabeli `platnosci`
--
ALTER TABLE `platnosci`
  ADD CONSTRAINT `platnosci_ibfk_1` FOREIGN KEY (`id`) REFERENCES `zamowienie` (`idPlatnosci`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
