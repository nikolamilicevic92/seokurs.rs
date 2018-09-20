-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 20, 2018 at 05:25 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seocours`
--
CREATE DATABASE IF NOT EXISTS `seocours` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `seocours`;

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

DROP TABLE IF EXISTS `answer`;
CREATE TABLE IF NOT EXISTS `answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `answer` varchar(255) NOT NULL,
  `correct` tinyint(1) NOT NULL DEFAULT '0',
  `id_question` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `url_title` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `url_title`, `description`, `category`, `thumbnail`, `content`, `meta_keywords`, `meta_description`) VALUES
(2, 'Opis', 'Opis', 'nema', 'seo_kurs_opis', 'storage/uploads/public/5015b858eec8627786b78b1bc6404089.jpeg', '<div style=\"text-align: justify;\"><span style=\"color: rgb(70, 70, 70); font-family: Verdana;\">SEO kurs online predstavlja najprodavaniji kurs u regionu. Kurs sadrzi prakticne obuke uz interaktivan pristup kao i potpunu podrsku tokom SEO kursa. Uz nas kurs isto tako dobijate pristup video materijalu koji mozete gledati sa bilo kog uredjaja.</span></div>', 'nema', 'nema');

-- --------------------------------------------------------

--
-- Table structure for table `custom_field`
--

DROP TABLE IF EXISTS `custom_field`;
CREATE TABLE IF NOT EXISTS `custom_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_page` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `custom_field`
--

INSERT INTO `custom_field` (`id`, `name`, `value`, `id_page`) VALUES
(2, 'p1', 'UVOD U SEO', 1),
(3, 'p2', 'SEO OPTIMIZACIJA', 1),
(4, 'p3', 'LOKALNI SEO', 1),
(5, 'p4', 'Lokalni SEO', 1),
(6, 'p1_l1', 'SEO Kurs', 1),
(7, 'p1_l2', 'SEO u praksi', 1),
(8, 'p1_l3', 'Posao buducnosti', 1),
(9, 'p1_l4', 'SEO pozicije', 1),
(10, 'p1_l5', 'Prosecna SEO plata', 1),
(11, 'p1_l6', 'Zasto SEO optimizacija', 1),
(12, 'p2_l1', 'Tehnicki SEO', 1),
(13, 'p2_l2', 'Analiza konkurencije', 1),
(14, 'p2_l3', 'SEO na sajtu', 1),
(15, 'p2_l4', 'SEO izvan sajta', 1),
(16, 'p2_l5', 'SEO optimizacija', 1),
(17, 'p2_l6', 'Faktori za dobru poziciju', 1),
(18, 'p3_l1', 'Analiza lokalne oblasti', 1),
(19, 'p3_l2', 'Link outreach', 1),
(20, 'p3_l3', 'Oglasavanje', 1),
(21, 'p3_l4', 'Lokalni SEO ', 1),
(22, 'p3_l5', 'Istrazivanje kljucnih reci', 1),
(23, 'p3_l6', 'Google My Business upotreba', 1),
(24, 'p4_l1', 'Pisanje sadrzaja', 1),
(25, 'p4_l2', 'Automatizovanje linkova', 1),
(26, 'p4_l3', 'Napredni alati', 1),
(27, 'p4_l4', 'Funkcionisanje platforma', 1),
(28, 'p4_l5', 'Search konzola i analitika', 1),
(29, 'p4_l6', 'Optimizacija za glasovnu pretragu', 1),
(30, 't1', 'Udemy Instruktor', 8),
(31, 't2', 'Senior SEO Specialist', 8),
(32, 't3', 'Instagram Branding', 8),
(33, 't4', 'Facebook Marketing - PPC', 8),
(34, 't1_p', 'Preko 200 snimljenih kurseva o digitalnom marketingu, i preko 30.000 studenata. Best Seller znacka za instruktora vise od godinu dana.', 8),
(35, 't2_p', 'Vise od 5 godina iskustva u SEO industriji. Preko 20 uspesnih projekata realizovanih kroz 5 godina. SEO sertifikati, Google Analytics sertifikati, PPC sertifikati.', 8),
(36, 't3_p', 'Razvijanje brenda, povećavanje publike, povezivanje sa B2C. Preko 200.000 pratilaca kroz 5 godina uspesno dovedeno klijentima.', 8),
(37, 't4_p', 'Preko 1.000 pokrenutih kampanja kroz 5 godina. Dropshipping, B2C reklame. Marketing strategije, rad sa influencerima.', 8),
(38, 't5_p', 'Nakon 5 godina u digitalnom marketingu i rada u razli?itim industrijama znam sta je potrebno da bi Vas biznis uspeo.Znam sta zapravo funkcionise a sta ne funkcionise.', 8),
(39, 't6_p', 'Rad na 5 biznisa koji su se bavili dropshipping biznis modelom. Zanima Vas kako da pokrenete svoj? Kontaktirajte me.', 8),
(40, 't5', 'Biznis & Inovacije', 8),
(41, 't6', 'DropShipping Biznis', 8),
(42, 'aside_title', 'SEO KURS - Akademija', 1),
(43, 'aside_description', 'Zelite da postanete sertifikovani SEO ekspert? Zanima Vas kako da dominirate u Google pretragama? Planirate da pokrenete sopstveni online biznis? SEO kurs je pravo resenje za Vas. Naucite kroz samo par dana kako se radi pravilna SEO optimizacija sajta.', 1),
(44, 'aside_l1', 'Preko 100 sati video materijala sa prakticnim radom. Svaka oblast sastoji se od teoretskog dela i prakticne obuke, zato je nas SEO kurs najbolji.', 1),
(45, 'aside_l2', 'Naucicete najbolje SEO tehnike i SEO optimizaciju za bilo koji sajt. Kako da napravite pravilnu SEO strategiju i donesete zeljene rezultate u najkracem mogucem roku.', 1),
(46, 'aside_l3', 'Uz pomoc naseg SEO kursa bicete u mogucnosti da konkurisete za dobro placene poslove koje mozete raditi cak i od kuce, ili zapoceti sopstvenu SEO agenciju.', 1),
(47, 'aside_l4', 'Ukoliko imate svoj lokalni biznis ili sajt koji dugo nema rezultate, naucicete sta je potrebno da dominirate u odredjenom gradu ili drzavi, kao i kako da pobedite konkurenciju uz pomoc lokalne SEO optimizacije.', 1),
(48, 'aside_l5', 'Kurs je napravljen kao rezultat 5 uspesnih godina u SEO industriji i mnogobrojnim uspesnim projektima kroz koje cemo proci u SEO kursu. Ne propustite vase mesto, upisite danas SEO kurs!', 1),
(49, 'header_description', 'SEO kurs koji ce Vas dovesti na prvu poziciju u pretrazivacima. Najprodavaniji kurs 2018 godine u Srbiji. Ukoliko se upisete do kraja meseca ostvarujete popust od 50%. Cena SEO kursa iznosi 9.999 dinara, u cenu nije uracunat PDV.', 3),
(50, 'description', 'SEO kurs online predstavlja najprodavaniji kurs u regionu. Kurs sadrzi prakticne obuke uz interaktivan pristup kao i potpunu podrsku tokom SEO kursa. Uz nas kurs isto tako dobijate pristup video materijalu koji mozete gledati sa bilo kog uredjaja. ', 3),
(51, 'what_will_I_learn', 'SEO Optimizacija Sajta', 3),
(53, 'what_will_I_learn', 'Lokalni SEO', 3),
(54, 'what_will_I_learn', 'Tehnicki SEO', 3),
(55, 'what_will_I_learn', 'Copywriting', 3),
(56, 'what_will_I_learn', 'Outreach', 3),
(57, 'what_will_I_learn', 'Programi za SEO', 3),
(58, 'what_will_I_learn', 'Analitika', 3),
(59, 'what_will_I_learn', 'Iskustvo korisnika', 3),
(60, 'what_will_I_learn', 'Pretrazivaci', 3),
(62, 'what_will_I_learn', 'Algoritmi', 3),
(63, 'card_1_title', 'Neki naslov', 1),
(64, 'card_2_title', 'Neki naslov', 1),
(65, 'card_3_title', 'Neki naslov', 1),
(66, 'card_4_title', 'Neki naslov', 1),
(67, 'card_5_title', 'Neki naslov', 1),
(68, 'card_6_title', 'Neki naslov', 1),
(69, 'card_1_content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laborum quos sunt optio officiis corporis quod, inventore odit minima, sed placeat rerum tenetur labore amet molestias at quidem possimus impedit!', 1),
(70, 'card_2_content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laborum quos sunt optio officiis corporis quod, inventore odit minima, sed placeat rerum tenetur labore amet molestias at quidem possimus impedit!', 1),
(71, 'card_3_content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laborum quos sunt optio officiis corporis quod, inventore odit minima, sed placeat rerum tenetur labore amet molestias at quidem possimus impedit!', 1),
(72, 'card_4_content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laborum quos sunt optio officiis corporis quod, inventore odit minima, sed placeat rerum tenetur labore amet molestias at quidem possimus impedit!', 1),
(73, 'card_5_content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laborum quos sunt optio officiis corporis quod, inventore odit minima, sed placeat rerum tenetur labore amet molestias at quidem possimus impedit!', 1),
(74, 'card_6_content', 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis laborum quos sunt optio officiis corporis quod, inventore odit minima, sed placeat rerum tenetur labore amet molestias at quidem possimus impedit!', 1);

-- --------------------------------------------------------

--
-- Table structure for table `page`
--

DROP TABLE IF EXISTS `page`;
CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `page_name` varchar(20) COLLATE utf8_croatian_ci NOT NULL,
  `title` varchar(70) COLLATE utf8_croatian_ci NOT NULL,
  `keywords` varchar(255) COLLATE utf8_croatian_ci NOT NULL,
  `description` varchar(160) COLLATE utf8_croatian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_croatian_ci;

--
-- Dumping data for table `page`
--

INSERT INTO `page` (`id`, `page_name`, `title`, `keywords`, `description`) VALUES
(1, 'pocetna', 'SEO Kurs Online - Optimizacija Sajta', 'SEO Kurs, Optimizacija Sajta,', 'SEO Kurs online dizajniran da naucite kako da dominirate u pretrazivacima. Rezervisite svoje mesto i naucite pravilnu optimizaciju sajta.'),
(3, 'seo-kurs', 'SEO Kurs - Budite #1', 'SEO Kurs,', 'SEO Kurs se sastoji od preko 100 sati video materijala, teoretskog dela, prakticne obuke kao i online testova koji ce Vas uvesti u digitalni svet.'),
(4, 'seo-optmizacija', 'SEO Optimizacija Sajta', 'SEO Optimizacija Sajta', 'SEO Optimizacija Sajta predstavlja sektor nase agencije koja je specjalizovana za optimizaciju i povecanje ciljane publike kao i prodaja. Kontaktirajte nas.'),
(5, 'konsultacije', 'SEO Konsultacije - Kontaktirajte Nas', 'SEO Konsultacije', 'Potrebne su Vam konsultacije za SEO? Planirate da napravite sopstvenu agenciju, naucite SEO ili druga vrsta konsultovanja? Kontaktirajte nas odmah.'),
(6, 'portfolio', 'SEO Projekti', 'SEO projekti,', 'Zanima Vas zasto smo broj jedan u regionu? Proverite nase projekte i vidite gde su nasi klijenti bili ranije a gde su sada. Zanima Vas? Kontaktirajte nas.'),
(7, 'nasi-partneri', 'SEO Partneri', 'SEO Partneri, SEO agencija,', 'Bacite pogled na partnere sa kojima blisko saradjujemo duzi niz godina. Saznajte najbolje resenje za Vase probleme, mi smo ih prethodno testirali i odabrali naj'),
(8, 'o-nama', 'Misija', 'SEO strategija,', 'Svesni smo da nas region nema dovoljno kadrova za SEO. Iz toga smo se odlucili da probudimo svest, snimimo SEO Kurs i pokazemo ljudima iz okruzenja kako da stvo'),
(9, 'kontakt', 'Kontakt', 'Kontakt', 'Zelite da stupite u kontakt sa nama? Potrebna Vam je SEO optimizacija sajta, ili Vas dodatno zanima SEO Kurs? Kontaktirajte nas.'),
(10, 'blog', 'SEO Vesti', 'SEO Vesti', 'Ostanite uvek u trendu i poslednjim promenama Google pretrazivaca. Saznajte kako da budete ispred svih i razmisljajte unapred uz nas.'),
(12, 'login', 'Uloguj se', 'SEO Korisnik', 'Postani nas SEO korisnik jos danas. Uloguj se na svoj nalog, nauci SEO optimizaciju ili nas kontaktiraj za usluge SEO optimizacije.'),
(13, 'register', 'Registracija', 'Registracija', 'Registruj se i postani sertifikovani SEO specijalista ili poruci SEO optimizaciju za sopstveni sajt i unapredi svoje znanje ili biznis jos danas.'),
(14, 'password-reset', 'Resetovanje lozinke', 'Resetuj Lozinku', 'Zaboravili ste Vasu lozinku? Desava se. Ovde mozete da je resetujete ponovo nazad. Ukoliko imate daljih problema kontaktirajte nas.');

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

DROP TABLE IF EXISTS `partner`;
CREATE TABLE IF NOT EXISTS `partner` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `logo`, `name`) VALUES
(4, 'http://via.placeholder.com/350x150', 'Partner 2');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

DROP TABLE IF EXISTS `portfolio`;
CREATE TABLE IF NOT EXISTS `portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `visitors` int(11) NOT NULL,
  `keywords` int(2) NOT NULL,
  `profit` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `analytics` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `thumbnail` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `platform` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `url_title` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `meta_keywords` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `visitors`, `keywords`, `profit`, `orders`, `analytics`, `content`, `title`, `thumbnail`, `description`, `platform`, `url_title`, `meta_description`, `meta_keywords`) VALUES
(4, 34432, 1700, 23, 34, 'assets/media/analytics-placeholder.png', 'aco vucic vucic acooo', 'Aqua Granite', 'http://via.placeholder.com/350x150', 'Aqua Granite projekat iz New Jersey-a. Prodaja gotovih i rucno radjenih kuhinja. Lokalna SEO optimizacija na WordPress platformi.Sa 2.000 poseta dostignuto 15.000 poseta kroz par meseci.', 'wordpress', 'aqua-granite', 'Meta description nema ukrao vucic', 'vucic aco');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

DROP TABLE IF EXISTS `question`;
CREATE TABLE IF NOT EXISTS `question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question` varchar(255) NOT NULL,
  `id_test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `seo_optimizacija`
--

DROP TABLE IF EXISTS `seo_optimizacija`;
CREATE TABLE IF NOT EXISTS `seo_optimizacija` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=67 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `seo_optimizacija`
--

INSERT INTO `seo_optimizacija` (`id`, `title`, `description`, `category`) VALUES
(5, 'Alt imena', 'Alt imena podrazumevaju imenovanje slika unutar sajta. Ukoliko uzimate slike sa pojedine vrste sajtova cesto morate da linkujete nazad ka navedenom sajtu. Alt imena se koriste da bolje objasne sliku kako bi Google mogao da je rangira na vecu poziciju u pretragama za slike. Dobar deo poseta mozete dobiti ako vase slike imaju prvo mesto u pretragama za slike. Zato je bitna optimizacija i davanje Alt imena slikama. Isto tako treba da opisete vase slike odmah ispod slike, kao sto je lokacija slike, kljucne reci, kako biste poboljsali iskustvo posetioca na vasem sajtu.', 'on_page_seo'),
(8, 'Tagovi', 'Tagovi predstavljaju interno povezivanje slicnih stranica unutar vaseg sajta radi lakse navigacije. Najcesce se koriste kada sajtovi imaju puno proizvoda, objava ili slicnih stranica. Ukoliko Vas sajt koristi tagove velika je verovatnoca da imate duple meta opise, naslove i stranice koje ne zelite da budu indeksirane. Kada sajt ima iste stranice na razlicitim linkovima Google ne zna koji zelite da bude na prvoj poziciji i zbog toga obe stranice gube rank. Ove greske se popravljaju uz pomoc Google Search Console i robots.txt fajla kao i analize detaljnog sajta i unutrasnjih linkova. Pojedini slucajevi zahtevaju i ozbiljnu izmenu koda.', 'on_page_seo'),
(9, 'URL optmizacija', 'Ukoliko koristite Yoast plugin za WordPress verovatno znate da duzi URL linkovi imaju losiju poziciju na pretrazivacima. URL linkovi moraju da budu kratki i jasni. U samo par reci morate objasniti sadrzaj vase stranice. Isto tako URL linkovi moraju biti privlacni za korisnike jer su oni isto tako jedan od 4 faktora koji povecavaju CTR na vasu stranicu.', 'on_page_seo'),
(10, 'Meta naslov i opis', 'Google vise ne vrednuje naslov i meta opis kao ranije. Ukoliko ubacite kljucnu rec u meta naslov i opis imacete bolju poziciju ali ne kao ranije. Google sada ima drugaciju sliku na Vas meta naslov i opis. Ukoliko Vas meta naslov i opis dovode mnogo vise klikova u odnosu na druge rezultate bez obzira na Vasu trenutnu poziciju Google Vas gleda kao najbolji rezultat i samim tim dobijate bolju poziciju. Ukoliko pravilno optimizujete meta naslov i opis posetioci ce samo gledati Vas rezultat na pretrazivacima i samo njega otvarati. Ovde postoji par trikova sa kojima mozete poboljsati CTR i napraviti `mamac` koji ce ulivati mnogo vise poverenja da Vas posete. Medjutim pravljenje samo odlicnog meta opisa naslova i snipeta Vam ne znaci apsolutno nista ako je sadrzaj stranice koji posetioci pogledaju drugaciji od onoga sto ste predstavili u meta opisu i naslovu. Takva manipulacija se zove Cloaking ( prikrivanje ) i mozete ocekivati da odmah izgubite rank jer posetioci nece ostati na Vasem sajtu vec ce ga odmah zatvoriti. To salje negativan faktor za pozicioniranje ka Google i odmah nestajete i gubite trenutnu poziciju. Iza stranice koju promovisete na pretrazivacima morate imati najbolji sadrzaj koji je bolji od sadrzaja sa prvih par  rezultata.', 'on_page_seo'),
(11, 'Schema.org', 'Sema Vam omogucava da u header tag Vaseg sajta ubacite odredjene delove koda koji ce omoguciti da Vas sajt mnogo uverljivije izgleda u pretrazivacima. Najcesce to je ubacivanje profila drustvenih mreza, radno vreme, logo, adresu, kontakt telefon, ubacivanje slika, ocena, tagova i slicno. Kada neko odluci da Vas pretrazi kao brend i upise ime Vaseg domena dobice takozvane bogate kartice ( rich snippets ) koje ulivaju mnogo vise poverenja u odnosu na rezultate koje ih nemaju. Da vidite kako to izgleda najbolje upisite recepti za pa neku hranu. Videcete odmah ocene i slike i mnoge druge kartice. Nakon toga upisite Microsoft i videcete kako brend izgleda uz pomoc tih bogatih kartica. Sa ovim karticama znatno poboljsavate to da posetioci bas Vas izaberu i da dovucete vise poseta na svoj sajt.', 'on_page_seo'),
(12, 'Analitika', 'Analitika predstavlja jedan od najvaznijih alata za SEO koji mnoge agencije ne koriste toliko vec samo da Vam pokazu rast i prikaz poseta. Uz pomoc Google analitike mozete videti koje stranice imaju najvise poseta, na koje stranice posetioci idu sa Vasih drugih stranica tako da znate na koje stranice da se fokusirate najvise. Analitika Vam je glavni prijatelj ukoliko zelite da povecate prodaje na sajtu. Isto tako mozete videti ukoliko radite promocije na vise drustvenih mreza koje mreze donose najbolje rezultate kako biste iskljucili upotrebu losih mreza i fokusirali se samo na one koje zapravo donose rezultate. Cesto Vas agencije reklamiraju na x10 mreza ali od toga samo 1 radi i donosi rezultate. Uz pomoc analitike i pravilnu upotrebu mozete da ustedite vreme i izbacite stvari koje ne rade i prebacite se na one koje rade za maksimalne rezultate.', 'on_page_seo'),
(13, 'Sitemap', 'Sitemap ili mapa sajta predstavlja jedan fajl koji kreirate kako bi Google lakse mogao da procita Vas sajt i sve njegove stranice kako biste imali bolje pozicioniranje na pretrazivacima. Cesto pojedine stranice sajta imaju blokiran pristup pa  pretrazivaci ne mogu da ih indeksiraju uopste pa Vas uopste nema u pretrazi. Ukoliko koristite platforme kao Shopify ili WordPress ta mapa se najcesce sama napravi ali ako imate rucno pravljen sajt onda morate da napravite jednu. Isto tako ako imate sajt na Shopify ili WordPress platformi mnoge stranice koje ne zelite ce biti opet indeksirane u pretrazivacu ovde mozete da ih sakrijete. Desava se da Google indeksira stranice od wp-admin ili autora sajta pa hakeri vec tako mogu da dobiju Vasu login stranicu za administratora i Vase korisnicko ime ostaje im samo da odrade brute-force i provale Vasu sifru da upadnu na sajt.', 'on_page_seo'),
(14, 'Robots.txt', 'Roboti predstavljaju fajl koji je slican mapi sajta koji kreirate ili vec imate napravljen ako koristite pojedine platforme. Ukoliko imate otvorene forme na Vasem sajtu u velikom ste problemo. Recimo da neko moze da Vam pravi i postavlja sadrzaj na Vas sajt bez prethodne registracije ili verifikacije, cesto se moze desiti da Vas sajt bude napadnu od spam virusa. Tako Vas sajt dobija nenormalan broj spam stranica koji se meri u hiljadama. Kada Google vidi toliko stranica koje su drugacijeg sadrzaja od Vaseg sajta vi zapravo gubite poverenje od Google pretrazivaca i nestajete. Uz pomoc robots.txt fajla mozete da blokirate bilo koju stranicu na Vasem sajtu kako ona ne bi bila indeksirana. Ukoliko Google ne moze da odradi crawl na njoj ona ne moze biti indeksirana.', 'on_page_seo'),
(15, 'Kljucne reci', 'Description...', 'on_page_seo'),
(16, 'Interni linkovi', 'Description...', 'on_page_seo'),
(17, 'Dizajn', 'Description...', 'on_page_seo'),
(18, 'AMP stranice', 'Description...', 'on_page_seo'),
(19, 'Skeniranje sajta', 'Description...', 'on_page_seo'),
(20, '404 linkovi', 'Description...', 'on_page_seo'),
(21, '301 preusmeravanja', 'Description...', 'on_page_seo'),
(22, '500 linkovi', 'Description...', 'on_page_seo'),
(23, 'Data highlighter', 'Description...', 'on_page_seo'),
(24, 'CTR optmizacija', 'Description...', 'on_page_seo'),
(25, 'Bounce rate optimizacija', 'Description...', 'on_page_seo'),
(26, 'Pravljenje GMB profila', 'Description...', 'off_page_seo'),
(27, 'Optimizacija GMB profila', 'Description...', 'off_page_seo'),
(28, 'Prikupljanje recenzija', 'Description...', 'off_page_seo'),
(29, 'Lokalna SEO optimizacija', 'Description...', 'off_page_seo'),
(30, 'SEO outreach', 'Description...', 'off_page_seo'),
(31, 'e-Mail outreach', 'Description...', 'off_page_seo'),
(32, 'Istrazivanje konkurenata', 'Description...', 'off_page_seo'),
(33, 'Link Building strategija', 'Description...', 'off_page_seo'),
(34, 'Link Building kampanja', 'Description...', 'off_page_seo'),
(35, 'Drustveni signali', 'Description...', 'off_page_seo'),
(36, 'Optimizacija profila na drustvenim mrezama', 'Description...', 'off_page_seo'),
(37, 'Forum linkovi', 'Description...', 'off_page_seo'),
(38, 'Blog linkovi', 'Description...', 'off_page_seo'),
(39, 'Industrijski linkovi', 'Description...', 'off_page_seo'),
(40, 'Placeni linkovi', 'Description...', 'off_page_seo'),
(41, 'Preuzimanje 404 linkova', 'Description...', 'off_page_seo'),
(42, 'Povezivanje sa influencerima', 'Description...', 'off_page_seo'),
(43, 'Razvijanje profila na drustvenim mrezama', 'Description...', 'off_page_seo'),
(44, 'Promovisanje sadrzaja sajta na drustvenim mrezama', 'Description...', 'off_page_seo'),
(45, 'YouTube promocije', 'Description...', 'off_page_seo'),
(46, 'Facebook promocije', 'Description...', 'off_page_seo'),
(47, 'Instagram promocije', 'Description...', 'off_page_seo'),
(48, 'LinkedIn promocije', 'Description...', 'off_page_seo'),
(49, 'Analiza kompletnog sajta', 'Description...', 'tehnicki_seo'),
(50, 'Provera hostinga', 'Description...', 'tehnicki_seo'),
(51, 'Optimizacija brzine', 'Description...', 'tehnicki_seo'),
(52, 'Optimizacija slika', 'Description...', 'tehnicki_seo'),
(53, 'Kompresovanje JS i CSS fajlova', 'Description...', 'tehnicki_seo'),
(54, 'Optimizacija za mobilne uredjaje', 'Description...', 'tehnicki_seo'),
(55, 'Optimizacija za zeljene pretrazivace', 'Description...', 'tehnicki_seo'),
(56, 'Prilagodljiv dizajn', 'Description...', 'tehnicki_seo'),
(57, 'Instalacija SSL sertifikata', 'Description...', 'tehnicki_seo'),
(58, 'Optimizacija admin panela ( WordPress- Shopify )', 'Description...', 'tehnicki_seo'),
(59, 'Zastita sajta i podizanje bezbednosti', 'Description...', 'tehnicki_seo'),
(60, 'Popravljanje gresaka na sajtu', 'Description...', 'tehnicki_seo'),
(61, 'GZIP kompresija', 'Description...', 'tehnicki_seo'),
(62, 'Analiza indeksiranih stranica', 'Description...', 'tehnicki_seo'),
(63, 'Uklanjanje dupliranog sadrzaja', 'Description...', 'tehnicki_seo'),
(64, 'Uklanjanje nepozeljnih stranica', 'Description...', 'tehnicki_seo'),
(65, 'Pisanje SEO optimizovanog sadrzaja', 'Description...', 'tehnicki_seo'),
(66, 'Kanonicni linkovi ( Canonical )', 'Description...', 'tehnicki_seo');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
CREATE TABLE IF NOT EXISTS `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `id_section` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `test_user`
--

DROP TABLE IF EXISTS `test_user`;
CREATE TABLE IF NOT EXISTS `test_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_user` int(11) NOT NULL,
  `id_test` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'user',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nikola Milicevic', 'nikolamilicevic92@gmail.com', '$2y$10$CbLnNE7LcAtOcnEwI1QqA.0HiREtfidpRevX0nbGubUHK45J9tPsa', 'd69e32606931099f652f52ea8456353a648530285f0383eb5058cf8884a1da3e', 'admin', '2018-09-20 17:13:24', '2018-09-20 17:13:24'),
(2, 'Nebojsa Milicevic', 'shocksnm@gmail.com', '$2y$10$toKawXvFCZ.n4TYwXYjfheg4wnIDkVJeZb1L0sfURwoQct0oILa5K', 'd1fc0d70d81fd9812160c7978a9f3203a5c42d20cd81ffa93b4ba875c5cad04c', 'admin', '2018-09-20 17:17:06', '2018-09-20 17:17:06');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

DROP TABLE IF EXISTS `video`;
CREATE TABLE IF NOT EXISTS `video` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `source` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `id_section` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `video_user`
--

DROP TABLE IF EXISTS `video_user`;
CREATE TABLE IF NOT EXISTS `video_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_video` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
