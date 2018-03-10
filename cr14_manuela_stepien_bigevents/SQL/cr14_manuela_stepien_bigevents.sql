-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 10. Mrz 2018 um 16:28
-- Server-Version: 10.1.30-MariaDB
-- PHP-Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `cr14_manuela_stepien_bigevents`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `alle`
--

CREATE TABLE `alle` (
  `id` int(11) NOT NULL,
  `name` varchar(555) NOT NULL,
  `categorie` varchar(111) NOT NULL,
  `eTime` datetime NOT NULL,
  `description` varchar(1255) NOT NULL,
  `capacity` int(150) DEFAULT NULL,
  `cost` int(11) NOT NULL,
  `adress` varchar(500) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `phone` int(50) DEFAULT NULL,
  `url` varchar(250) DEFAULT NULL,
  `sImg` varchar(500) NOT NULL,
  `bImg` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `alle`
--

INSERT INTO `alle` (`id`, `name`, `categorie`, `eTime`, `description`, `capacity`, `cost`, `adress`, `email`, `phone`, `url`, `sImg`, `bImg`) VALUES
(1, 'The Magic Flute', 'opera', '2018-03-17 16:00:00', 'Opera in two acts by Wolfgang Amadé Mozart \r\nText by Emanuel Schikaneder \r\nFirst performed in Vienna on the 30th of September 1791 \r\nDirected by: Prof. Gerhard Toetschinger', 40, 26, 'Schloss Schönbrunn\r\nHofratstrakt \r\n1130 Wien', 'office@marionettentheater.at', 18173247, 'www.marionettentheater.at', 'https://events.wien.info/media/full/kinderzauberfl%C3%B6te_1_1.jpg', 'https://www.pragueticketoffice.com/Repository/image/akce/1110808_ext_2014_03_24_4847_orez%20(2)_bg.jpg'),
(5, 'Paul Sommersguter', 'carbaret', '2018-03-17 16:00:00', 'Paul Sommersguter decided to pursue an honest profession after completing his law studies and eventually became a magician. He is national and international winner of the magic art.\r\n\r\nPaul Sommersguter - The magical cabaret\r\nPhoto: Paul Sommersguter\r\nSince then, he loves to make the impossible possible and brings his audience regularly to laugh, to wonder and many to despair.\r\n\r\nHis guests are part of the illusion and will be enchanted - at the latest when we learn what really distracts a magician!\r\n\r\nYou should not miss that!\r\nLet yourself be seduced into a world of magic!', 25, 20, 'Liliengasse 2\r\n1010 Wien', 'office@edenbar.at', 15127450, 'http://www.edenbar.at/', 'https://cdn.kurier.at/img/100/191/389/sommersguter-0-290x500.jpg', 'http://s1.wohintipp.at/uploads/events/transformed/367292-322751-7.jpg?v=4'),
(6, 'Raymonda', 'balett', '2018-03-16 18:00:00', 'The love story of the young Raymonda and the knight Jean de Brienne is full of drama, but despite the interim abduction of Raymonda by the heroic action of her beloved knight takes a happy ending.', 150, 25, 'Opernring2 1010Wien', ' information@wiener-staatsoper.at', 1514442250, 'www.wiener-staatsoper.at', 'https://cdn.kurier.at/img/100/206/463/raymonda-dato-konovalova-8ca0bcfc0d-290x500.jpg', 'https://www.mariinsky-theatre.com/pic_perfomance_big/1481800035_raymonda.jpg'),
(7, 'Rachel Whiteread', 'art', '2018-03-10 09:00:00', 'In Vienna, Rachel Whiteread is best known for her Holocaust memorial.  Rachel Whiteread Photo: Courtesy the artist; Photo: Courtesy the artist Rachel Whiteread has been working for a number of years on a series of huts and cottages that are usually located in remote, hard-to-reach places. One of these cast concrete works entitled Chicken Shed was created specifically for the exhibition. Chicken Shed is the casting of a small henhouse that was originally in Norfolk, England. The details of hand-sawed wood used in the construction of the shed are discernible on the surface. The sculpture was first installed in 2017 on the site of the Tate Britain in London and is now the harbinger of the exhibition at Belvedere 21 in the garden of the Upper Belvedere.', 200, 9, 'Gumpendorfer Strasse 67\r\n1060 Wien', 'mail@dasTAG.at', 43, ' www.dastag.at', 'https://cdn.kurier.at/img/100/205/809/rachelwhiteread-290x500.jpg', 'https://i.pinimg.com/originals/68/4e/ce/684ece3c3b5f33d1ea9cedc0fcc5c788.jpg'),
(8, 'La Rumba Congolaise', 'music', '2018-03-23 20:00:00', 'La Rumba Congolaise has always been a cherished and beloved music in Africa, and well known in Europe and America. But over time, this music loses its vibration, as the icons of this style of music, such as Grand Kalle Kabasele, Wendo Kolosoy, Franco Luambo, Tabu Ley Rochereau u. a. are no longer with us.  Prince Zeka wants to bring the Rumba Congolaise back to life and brings him to the stage live with his extraordinary presence. His project \"Heritage Rumba Congolaise\" mixes his own current compositions with interpretations of the hits of the Rumba Congolaise from the 1960s to the 1990s.  Prince Zeka, born in Dem. Rep. Congo, has been a fixture in the domestic world music scene for decades. He is best known for his own style creation of the \"Makoul\", an interesting mix of Afro-Beat and La Rumba Congolaise. Anyone who has experienced it once, always comes back: not only his talent as a singer and musician, but also his enormous stage presence captivate the audience wherever he performs.', 35, 12, 'Florianigasse 39 \r\n1080Wien', 'events@tunnel-vienna-live.at', 43, 'www.tunnel-vienna-live.at', 'https://cdn.kurier.at/img/100/203/701/princezeka.jpg', 'https://cdn.kurier.at/img/100/203/700/rumba-congolaise-ev.jpg'),
(9, 'the chancellor', 'comedy', '2018-03-24 20:00:00', '\r\nDawn over the rooftops of the city. The birds welcome the new day, but this morning the sun goes down. The Chancellor, once the party\'s bearer of hope, will turn his back on the evening after losing his election. The enemy in their own ranks, a high-paid but unfortunate brand positioning and a three-legged bitch - nothing more needed for a landslide victory. And the chancellor was right there, at the bottom of the landslide, where the debris and foul-smelling mud came to rest. Politics is just a hard-core, a dirty business. Perhaps he should have joined a \"hunting party\" more often to make crisis-proof cliques. How he would have liked to have shaped and set the course for a better future, but the topics always gave the hyenas in the media companies and the current mood in the population. Politics would be so easy if only this annoying population did not exist. Instead of acting, the chancellor always had only to react. Govern and respond. Sounds similar, but is something completely different.\r\n\r\nAnd as the Chancellor prepares his last speech over the rooftops of the city in the early morning, he once again hears his mother\'s admonishing words: \"To do justice to all men is an art that no one can do!\"', 80, 19, 'Mariahilferstrasse 81\r\n1060 Wien', '--', 19092244, 'www.stadtsaal.com', 'https://cdn.kurier.at/img/100/191/300/lukasbeck-0-290x500.jpg', 'http://static2.nachrichten.at/storage/image/1/3/0/2/1942031_cms2image-fixed-561x315_1qECa4_OlNyxE.jpg'),
(11, 'the chancellor', 'comedy', '2018-03-24 20:00:00', '\r\nDawn over the rooftops of the city. The birds welcome the new day, but this morning the sun goes down. The Chancellor, once the party\'s bearer of hope, will turn his back on the evening after losing his election. The enemy in their own ranks, a high-paid but unfortunate brand positioning and a three-legged bitch - nothing more needed for a landslide victory. And the chancellor was right there, at the bottom of the landslide, where the debris and foul-smelling mud came to rest. Politics is just a hard-core, a dirty business. Perhaps he should have joined a \"hunting party\" more often to make crisis-proof cliques. How he would have liked to have shaped and set the course for a better future, but the topics always gave the hyenas in the media companies and the current mood in the population. Politics would be so easy if only this annoying population did not exist. Instead of acting, the chancellor always had only to react. Govern and respond. Sounds similar, but is something completely different.\r\n\r\nAnd as the Chancellor prepares his last speech over the rooftops of the city in the early morning, he once again hears his mother\'s admonishing words: \"To do justice to all men is an art that no one can do!\"', 80, 19, 'Mariahilferstrasse 81\r\n1060 Wien', '--', 19092244, 'www.stadtsaal.com', 'https://cdn.kurier.at/img/100/191/300/lukasbeck-0-290x500.jpg', 'http://static2.nachrichten.at/storage/image/1/3/0/2/1942031_cms2image-fixed-561x315_1qECa4_OlNyxE.jpg'),
(12, 'the chancellor', 'comedy', '2018-03-24 20:00:00', '\r\nDawn over the rooftops of the city. The birds welcome the new day, but this morning the sun goes down. The Chancellor, once the party\'s bearer of hope, will turn his back on the evening after losing his election. The enemy in their own ranks, a high-paid but unfortunate brand positioning and a three-legged bitch - nothing more needed for a landslide victory. And the chancellor was right there, at the bottom of the landslide, where the debris and foul-smelling mud came to rest. Politics is just a hard-core, a dirty business. Perhaps he should have joined a \"hunting party\" more often to make crisis-proof cliques. How he would have liked to have shaped and set the course for a better future, but the topics always gave the hyenas in the media companies and the current mood in the population. Politics would be so easy if only this annoying population did not exist. Instead of acting, the chancellor always had only to react. Govern and respond. Sounds similar, but is something completely different.\r\n\r\nAnd as the Chancellor prepares his last speech over the rooftops of the city in the early morning, he once again hears his mother\'s admonishing words: \"To do justice to all men is an art that no one can do!\"', 80, 19, 'Mariahilferstrasse 81\r\n1060 Wien', '--', 19092244, 'www.stadtsaal.com', 'https://cdn.kurier.at/img/100/191/300/lukasbeck-0-290x500.jpg', 'http://static2.nachrichten.at/storage/image/1/3/0/2/1942031_cms2image-fixed-561x315_1qECa4_OlNyxE.jpg'),
(13, 'the chancellor', 'comedy', '2018-03-24 20:00:00', '\r\nDawn over the rooftops of the city. The birds welcome the new day, but this morning the sun goes down. The Chancellor, once the party\'s bearer of hope, will turn his back on the evening after losing his election. The enemy in their own ranks, a high-paid but unfortunate brand positioning and a three-legged bitch - nothing more needed for a landslide victory. And the chancellor was right there, at the bottom of the landslide, where the debris and foul-smelling mud came to rest. Politics is just a hard-core, a dirty business. Perhaps he should have joined a \"hunting party\" more often to make crisis-proof cliques. How he would have liked to have shaped and set the course for a better future, but the topics always gave the hyenas in the media companies and the current mood in the population. Politics would be so easy if only this annoying population did not exist. Instead of acting, the chancellor always had only to react. Govern and respond. Sounds similar, but is something completely different.\r\n\r\nAnd as the Chancellor prepares his last speech over the rooftops of the city in the early morning, he once again hears his mother\'s admonishing words: \"To do justice to all men is an art that no one can do!\"', 80, 19, 'Mariahilferstrasse 81\r\n1060 Wien', '--', 19092244, 'www.stadtsaal.com', 'https://cdn.kurier.at/img/100/191/300/lukasbeck-0-290x500.jpg', 'http://static2.nachrichten.at/storage/image/1/3/0/2/1942031_cms2image-fixed-561x315_1qECa4_OlNyxE.jpg');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `userName` varchar(30) NOT NULL,
  `userEmail` varchar(60) NOT NULL,
  `userPass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`userId`, `userName`, `userEmail`, `userPass`) VALUES
(3, 'manuela', 'stepien_manuela@hotmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5'),
(4, 'admin', 'admin@hotmail.com', '5994471abb01112afcc18159f6cc74b4f511b99806da59b3caf5a9c173cacfc5');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `alle`
--
ALTER TABLE `alle`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `alle`
--
ALTER TABLE `alle`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
