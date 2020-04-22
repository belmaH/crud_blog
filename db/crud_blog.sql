-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2020 at 09:37 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `date_created` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `category`, `date_created`, `image`, `content`) VALUES
(1, 'Tri posleratna druga', '3', '1997-03-01', 'https://www.knjiga.ba/media/catalog/product/cache/1/image/160x/040ec09b1e35df139433887a97daa66f/slike/tri_posleratna_druga.jpg', 'Tri posleratna druga je šesti studijski album novosadskog kantautora Đorđa Balaševića. Objavljen je 1989. godine. Mnogi ovaj roman čuvaju kao najveću dragocjenost i zalog za budućnost. Nešto, poput svjedočanstva o prošlosti... Da nas uvijek sjeća... Roman koji nam Đorđa Balaševića predstavlja kao pisca. Možemo reći da mu je prva knjiga uspješna koliko su uspješne i njegove pjesme.\r\nIsti jezik, britki humor, sarkazam bez patetičnosti i pesimizma - upravo onako kako smo navikli....'),
(2, 'Jedan od onih života', '3', '1997-01-06', 'https://www.knjiga.ba/media/catalog/product/cache/1/image/160x/040ec09b1e35df139433887a97daa66f/slike/jedan_od_onih_zivota.jpg', 'Jedan od onih života roman je koji obuhvaća jesen 1991. godine – period mobilizacije, ratno okruženje, inflaciju, šverc, sumornu stvarnost raspada SFRJ. Glavni junak, Petraš, rastrgnut između neuzvraćene ljubavi i permanentnog izbjegavanja odlaska na front, evocira uspomene svoje najbolje role mladalačkog života kada je bio centarfor školskog tima. Kroz priču se provlači i brat njegove djevojke, po nacionalnosti Mađar, koji u trenutku raspada SFRJ u strahu od mobilizacije odlučuje zauvijek napusti domovinu, a Petraš mu treba omogućiti taj odlazak.\r\n'),
(6, 'Uspjeh', '2', '2020-03-03', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSc8S1OZWEsmMgFaGcdWPeOgXJOBNiRPs-sQlq25OaekayqiQut&usqp=CAU', '\r\n Uvek tražim feedback\r\n\r\nJako cenim iskreni feedback, konstruktivne kritike i kada neko izdvoji vreme da mi kaže šta ne radim kako treba, u čemu sam loša, a u čemu mogu biti dosta bolja. Nekada ne primenim sve što mi neko kaže, ali uvek uzmem u obzir pri donošenju odluke. Jako mi znači to što je neko uzeo u obzir da promisli o tome šta ja radim i neizmerno sam zahvalna na tome. Pravim sisteme koji skaliraju. Neprestano radim na sebi'),
(8, 'Život je čaroban', '2', '2020-03-02', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcS06hkjuwyg7bsf1GlPSF_kJAH9xS0GF37s8Pb1NezqbsfKnI0-&usqp=CAU', 'Jel’ da da bi bilo super da postoji način da izbegnemo razočaranje?\r\nImam dobru vest- postoji način da se zauvek izbegne razočaravanje.\r\nI reći ću vam koji je to način.\r\n\r\n\r\n    Prestanite da se očaravate drugim ljudima i svojim očekivanjima od njih, od sebe i od života uopšte.\r\n\r\n\r\nĆiribućiriba, nema više razočaravanja!\r\nKada smo „očarani“ mi ne vidimo druge kakvi jesu nego vidimo ono što želimo da vidimo. Isto važi i za život.\r\nMožda će život bez očaravanja nekom zvučati dosadno, ali nije tako.\r\n\r\n    Život je čaroban kad nismo očarani \r\n'),
(10, 'Naučnici uspjeli moždane valove prevesti u rečenice', '1', '2020-02-04', 'https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQch_qGZZWs2BrhAbDbfDXhP_hF2ybJzgg_fZJTQdF2pvUYOwZN&usqp=CAU', 'Naučnici su učinili korak naprijed u dešifrovanju onoga što osoba govori samo gledajući njene moždane valove dok govori. Uspjeli su osposobiti algoritme za prebacivanje obrazaca iz mozga u stvarnom vremenu, i to sa stopom grešaka ispod tri posto.\r\nČetiri volontera naglas su čitala rečenice, dok su elektrode snimale njihovu moždanu aktivnost. Potom je njihova moždana aktivnost unesena u računarski sistem koji je stvorio reprezentaciju karakteristika koje se redovno pojavljuju u tim podacima. Ti obrasci se povezuju s ponavljanim značajkama govora, poput samoglasnika, suglasnika ili naredbi dijelovima usta.\r\n\r\nDrugi dio sistema dešifruje ovu reprezentaciju, riječ po riječ, kako bi stvorio rečenice.'),
(11, 'Otkriven novi \"mini Mjesec\" koji trenutno kruži oko Zemlje', '1', '2020-04-01', 'https://www.danas.rs/wp-content/uploads/2020/01/galaxy-3608029_1920-e1578395022875-300x169.jpg?x29644', 'Astronomi su otkrili kosmički upad asteroida u orbitu naše planete.\r\nAstronomi iz Tucsona u Arizoni otkrili su novi asteroid koji kruži oko naše planete, a koji je nazvan CD3 2020.\r\n\r\nOtkriće je na Twitteru objavio Kacper Wierzchos, istraživač Catalina Sky Survey programa iz lunarnog i planetarnog laboratorija Univerziteta u Arizoni.\r\n\r\n\"Zemlja ima novi privremeni objekt, mogući \'mini Mjesec\' pod nazivom 2020 CD3. Moj kolega Teddy Pruyne i ja pronašli smo objekt 20. februara\" kaže Kacper.'),
(15, 'test', 'tests', '1997-01-06', 'tess', 'Četiri volontera naglas su čitala rečenice, dok su elektrode snimale njihovu moždanu aktivnost. Potom je njihova moždana aktivnost unesena u računarski sistem koji je stvorio reprezentaciju karakteristika koje se redovno pojavljuju u tim podacima. Ti obrasci se povezuju s ponavljanim značajkama govora, poput samoglasnika, suglasnika ili naredbi dijelovima usta.\r\n\r\nDrugi dio sistema dešifruje ovu reprezentaciju, riječ po riječ, kako bi stvorio rečenice.\r\n\r\nMeđutim, autori slobodno priznaju slabosti istraživanja. Naprimjer, govor koji su dešifrovali bio je ograničen na 30-50 rečenica. Istraživači dodaju da mašinska veza idetifikuje pojedinačne riječi, a ne samo rečenice.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `username`, `password`) VALUES
(1, 'Admin', 'Super', 'admin@admin.com', 'admin', '$2a$04$aJku3wYoIFJlZWS4VlT4rOCZZk1WmaQJh9BY396/bO66q2vCwmQf.'),
(17, 'Belma', 'Hadrovic', 'hadrovic.belma@gmail.com', 'belmaH', '$2y$10$bH88JQCxkUkUe0nrTNIgL.GzvScuBNZHRwxnk7XAkeQa5QZcaFwtC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
