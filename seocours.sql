-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 22, 2018 at 05:56 PM
-- Server version: 5.7.21
-- PHP Version: 7.2.4

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `answer`
--

INSERT INTO `answer` (`id`, `answer`, `correct`, `id_question`) VALUES
(1, '1', 1, 1),
(2, '2', 0, 1),
(3, '5', 0, 1);

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `url_title`, `description`, `category`, `thumbnail`, `content`, `meta_keywords`, `meta_description`) VALUES
(2, 'Opis', 'Opis', 'nema', 'seo_kurs_opis', 'storage/uploads/public/5015b858eec8627786b78b1bc6404089.jpeg', '<div style=\"text-align: justify;\"><font color=\"#464646\" face=\"Verdana\">SEO kurs predstavlja najprodavaniji kurs u regionu. Naš način rada se razlikuje od drugih škola i akademija. Mi radimo na pravim primerima od naših klijenata kroz čitav kurs.</font></div>', 'nema', 'nema'),
(3, 'SEO Optimizacija Sajtova u Srbiji', 'SEO-Optimizacija-Sajtova-u-Srbiji', 'Zanima Vas kako da uradite pravilnu SEO optimizaciju? Pročitajte naše detaljno uputstvo i saznajte sve trikove do mesta broj jedan u pretraživačima.', 'SEO', 'storage/uploads/public/669bddd98f7b6a56eda629200590c73d.png', '<h1 style=\"text-align: center;\"><font color=\"#f40006\" size=\"6\" face=\"Trebuchet MS\">SEO Optimizacija Sajtova u Srbiji</font></h1><div><font face=\"Trebuchet MS\">Da li ste se uvek pitali kako pojedini sajtovi tako lako dospeju do prvog mesta i dobijaju izuzetno veliki broj organskih poseta? Ne troše novac na plaćene reklame već dobijaju profit čisto putem organskih poseta ne plaćajući apsolutno ništa? To je zapravo moguće uz pravilnu SEO optimizaciju sajta. U našem clanku ćemo videti šta je sve potrebno kako bismo pravilno optimizovali određeni sajt od nule do savršenstva.</font></div>', 'SEO optimizacija sajta', 'SEO optimizacija sajtova u Srbiji. Pravilan nacin optimizacije za sve pretrazivace. Saznajte trikove do mesta broj jedan.');

-- --------------------------------------------------------

--
-- Table structure for table `custom_field`
--

DROP TABLE IF EXISTS `custom_field`;
CREATE TABLE IF NOT EXISTS `custom_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `value` text COLLATE utf8_unicode_ci NOT NULL,
  `id_page` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

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
(34, 't1_p', 'Započeo sam sa snimanje kurseva o digitalnom marketingu, SEO optimizaciji, dropshipping-u i sponzorisanim reklamama početkom 2017. godine. Trenutno imam više od 10 kurseva na Udemy. Kroz celu 2018. godinu bio imao sam kurseve koji su spadali u \"Best Selling\" kurseve na Udemy u svojoj kategoriji.', 8),
(35, 't2_p', 'SEO optimizacijom i digitalnim marketingom se bavim od 2013. godine. Iza mene stoje brojni uspešni projekti koje možete videti u SEO kursu koji predajem online. Nakon više od 5 godina u marketing industriji mogu reći da sam se susreo sa svim mogućim izazovima kada je SEO u pitanju i njihovim rešavanjem.', 8),
(36, 't3_p', 'U slobodno vreme razvijam Instagram naloge od nule i pravim brendove koje kasnije koristim ili za promocije ili za povezivanje sa svojim novim sajtom koji kasnije preprodam kada razvijem biznis. Često volim da testiram različite industrije da vidim kako reaguju na Instagram platformi. Dobar deo naloga su Influenceri u svojoj oblasti.', 8),
(37, 't4_p', 'Tokom proteklih 5 godina pohađao sam razne online kurseve i  pratio uspešne dropshipping mentore koji su razvili biznise samo uz pomoć plaćenih reklama. U SEO kursu ćemo se susresti sa ovom oblasti u određenom trenutku kako bismo dobili širu sliku marketinga koji nije samo SEO optimizacija.', 8),
(38, 't5_p', 'Moj omiljeni način zarade preko interneta jeste dropshipping odnosno posredovanje između potražnje i prodaje. Stvar koja mene odvaja od drugih dropshipping biznisa jeste što ne radim preprodavanje proizvoda, već usluga gde je mnogo veća zarada i manji rizici. ', 8),
(39, 't6_p', 'Oduvek sam hteo da imam biznis koji donosi zaradu dok ne radim nista. Nakon 5 godina u marketing industriji napravio sam brojne biznise koji mi omogućavaju da zarađujem i kada ne radim apsolutno ništa. Većina biznisa koje imam su u potpunosti automatizovani i ne zahtevaju previše vremena. Kroz SEO kurs prolazimo detaljno kroz ovu oblast ukoliko tražite isto.', 8),
(40, 't5', 'Drop Shipping Model', 8),
(41, 't6', 'Pasivna Zarada', 8),
(42, 'aside_title', 'SEO KURS AKADEMIJA ', 1),
(43, 'aside_description', 'Postanite sertifikovani SEO stručnjak uz online kurs dostupan na svim uređajima.', 1),
(44, 'aside_l1', 'Više od 100 sati praktične obuke.', 1),
(45, 'aside_l2', 'Doživotni pristup novim lekcijama.', 1),
(46, 'aside_l3', 'Radite sa bilo koje lokacije.', 1),
(47, 'aside_l4', 'Napravite online biznis uz našu pomoć.', 1),
(48, 'aside_l5', 'Pronađite dobro plaćen posao.', 1),
(49, 'header_description', 'SEO kurs koji ce Vas dovesti na prvu poziciju u pretrazivacima. Najprodavaniji kurs 2018 godine u Srbiji. Ukoliko se upisete do kraja meseca ostvarujete popust od 50%. Cena SEO kursa iznosi 9.999 dinara, u cenu nije uracunat PDV.', 3),
(50, 'description', 'SEO kurs online predstavlja najprodavaniji kurs u regionu. Kurs sadrzi prakticne obuke uz interaktivan pristup kao i potpunu podrsku tokom SEO kursa. Uz nas kurs isto tako dobijate pristup video materijalu koji mozete gledati sa bilo kog uredjaja. ', 3),
(51, 'what_will_I_learn', 'SEO Optimizacija Sajta', 3),
(53, 'what_will_I_learn', 'Lokalni SEO', 3),
(54, 'what_will_I_learn', 'Tehnicki SEO', 3),
(55, 'what_will_I_learn', 'Copywriting', 3),
(56, 'what_will_I_learn', 'Outreach', 3),
(57, 'what_will_I_learn', 'Dizajn stranica', 3),
(58, 'what_will_I_learn', 'Analitika', 3),
(59, 'what_will_I_learn', 'Iskustvo korisnika', 3),
(60, 'what_will_I_learn', 'Pretrazivaci', 3),
(62, 'what_will_I_learn', 'Algoritmi', 3),
(63, 'card_1_title', 'SEO OPTIMIZACIJA SAJTA', 1),
(64, 'card_2_title', 'LOKALNI SEO', 1),
(65, 'card_3_title', 'SEO ANALIZA', 1),
(66, 'card_4_title', 'IZRADA LINKOVA', 1),
(67, 'card_5_title', 'BRENDIRANJE', 1),
(68, 'card_6_title', 'ANALITIKA', 1),
(69, 'card_1_content', 'Želite da naučite kako da dovedete bilo koji sajt na prvo mesto u pretrazi? Naš SEO Kurs online je pravo rešenje. Praktična obuka SEO optimizacije sa primerima i vidljivim rezultatima uživo tokom same obuke. Sve što Vas zanima se nalazi u našem online kursu, uz dodatne bonus lekcije o marketingu, brendiranju, sponzorisanim reklamama, kao i drop shipping biznis modelu. Rezervišite mesto još danas, pridužite nam se!', 1),
(70, 'card_2_content', 'Zanima Vas kako da zauzmete prvo mesto u lokalnom paketu na mapama? Vašem biznisu je potrebno prvo mesto u gradu? Bavite se isključivo prodajom usluga ili proizvoda na određenoj lokaciji? Naš SEO kurs će Vas naučiti kako da budete broj #1.', 1),
(71, 'card_3_content', 'SEO analiza predstavlja detaljan pregled Vašeg sajta, kako bi se kreirala najbolja moguća strategija za Vaš sajt. Uz pravilnu SEO strategiju rezultati dolaze mnogo brže i lakše. Troškovi se u velikoj meri smanjuju dok konverzije rastu.', 1),
(72, 'card_4_content', 'Nema više gubljenja vremena na izradu loših linkova koji često budu obrisani ili ne donesu očekivani rezultat. Kod nas je sve automatizovano. Pokazaćemo Vam najbolju strategiju kako da dobijate linkove i posete sa drugih sajtova uz pomoć nekoliko alata koje koristimo dug niz godina.', 1),
(73, 'card_5_content', 'Znate li da dobro formirani brendovi imaju veliku prednost u pretrazi u odnosu na druge rezultate? Uz naš SEO kurs saznaćete sve o brendiranju Vašeg biznisa online. Saznajte kako da izaberete prave ključne reči i napravite sadržaj koji će Vas dovesti na ovu poziciju.', 1),
(74, 'card_6_content', 'Imali ste prvo mesto u pretrazi ali ste nestali? Sada je pravo vreme da detaljno analizirate Vaše stranice. Uz naš kurs utvrdićemo sve razloge zašto stranice gube svoje pozicije. Uz pomoć analitike saznaćemo kako da povećamo posete i prodaje na sajtu.', 1),
(75, 'asside_l6', 'Saznajte kako da preprodajete sajtove.', 1),
(76, 'asside_l7', 'Razmišljajte korak ispred Google-a.', 1),
(77, 'asside_l8', 'Kreirajte najbolje SEO strategije.', 1),
(78, 'asside_l9', 'Naučite pravilnu SEO optimizaciju.', 1),
(79, 'asside_l10', 'Učite od mentora sa više od 5 godina iskustva.', 1);

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
(1, 'pocetna', 'SEO Kurs | UPIS U TOKU', 'SEO Kurs, ', 'Zanima Vas šta je potrebno da budete broj 1 u pretraživaču? Naš SEO kurs Vas vodi kroz čitavu SEO Optimizaciju.'),
(3, 'seo-kurs', 'SEO Kurs Online', 'SEO Kurs,', 'SEO Kurs se sastoji od preko 100 sati video materijala, teoretskog dela, prakticne obuke kao i online testova koji ce Vas uvesti u digitalni svet.'),
(4, 'seo-optmizacija', 'SEO Optimizacija Sajta', 'SEO Optimizacija', 'Tražite SEO agenciju koja će Vas dovesti na prvo mesto? Na pravom ste mestu. Posetite nas i pogledajte našu široku SEO ponudu po konkurentnim cenama.'),
(5, 'konsultacije', 'SEO Konsultacije ', 'SEO Konsultacije', 'Potrebne su Vam konsultacije za SEO? Planirate da napravite sopstvenu agenciju, naucite SEO ili druga vrsta konsultovanja? Kontaktirajte nas odmah.'),
(6, 'portfolio', 'SEO Projekti ', 'SEO projekti,', 'Zanima Vas zašto smo broj jedan u regionu? Proverite naše projekte i vidite gde su naši klijenti bili ranije a gde su sada. Zanima Vas? Kontaktirajte nas.'),
(7, 'nasi-partneri', 'SEO Partneri ', 'SEO Partneri, SEO agencija,', 'Bacite pogled na partnere sa kojima blisko saradjujemo duži niz godina. Saznajte najbolje rešenje za Vaše probleme, izabrani godinama testiranja.'),
(8, 'o-nama', 'Mentor ', 'Nebojša Milićević', 'Ekspert za digitalni marketing i SEO optimizaciju. Više od 5 godina iskustva u marketing industriji, brojni uspešni projekti i biznisi napravljeni od početka.'),
(9, 'kontakt', 'Kontakt', 'Kontakt', 'Želite da stupite u kontakt sa nama? Potrebna Vam je SEO optimizacija sajta, ili Vas dodatno zanima SEO Kurs? Kontaktirajte nas.'),
(10, 'blog', 'SEO Novosti', 'SEO Novosti', 'Ostanite uvek u trendu i poslednjim promenama Google pretrazivaca. Saznajte kako da budete ispred svih i razmisljajte unapred uz nas.'),
(12, 'login', 'Login', 'Login', 'Postani naš SEO korisnik još danas. Registruj se i pristupi našem online SEO kursu sa bilo koje lokacije u bilo koje vreme sa bilo kog uređaja.'),
(13, 'register', 'Registracija', 'Registracija', 'Registruj se i postani sertifikovani SEO ekspert ili poruči SEO optimizaciju za sopstveni sajt i unapredi svoje znanje ili biznis još danas.'),
(14, 'password-reset', 'Resetovanje lozinke', 'Resetuj Lozinku', 'Zaboravili ste Vašu lozinku? Dešava se. Ovde možete da je resetujete ponovo nazad. Ukoliko imate daljih problema kontaktirajte nas.');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `logo`, `name`) VALUES
(8, 'storage/uploads/public/8dc4587083384b7d2508fdadebff3ec5.png', 'Udemy for Business'),
(9, 'storage/uploads/public/efdc43dd80fd4f84afd0fd348b6c0650.gif', 'Shopify Partner'),
(10, 'storage/uploads/public/b8b67894385bfd8620a6ef9f3395325b.jpg', 'SEMRush'),
(11, 'storage/uploads/public/db0080456d2757dcaa43ea8f5893d132.png', 'Yoast'),
(12, 'storage/uploads/public/5b542cb67edae7a8880f07ab66517160.png', 'Weglot'),
(13, 'storage/uploads/public/e78152376c1510621d4c67221722cafe.jpg', 'Google Analytics Partner');

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
(4, 10403, 4700, 23, 34, 'storage/uploads/public/138c39360b7c61d2d024d0363d778fab.jpg', 'Aqua Granite projekat - New Jersey', 'Aqua Granite', 'storage/uploads/public/734361c9620d312333c644f0d5403469.png', 'Aqua Granite projekat iz New Jersey-a. Prodaja gotovih i rucno radjenih kuhinja. Lokalna SEO optimizacija na WordPress platformi.Sa 2.000 poseta dostignuto 10.000 poseta kroz 4 meseca.', 'wordpress', 'Aqua-Granite', 'Projekat Aqua Granite i rezultati optmizacije nakon 6 meseci. ', 'Aqua Granite Projekat');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `question`, `id_test`) VALUES
(1, 'Šta predstavlja SEO optimizacija?', 1);

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

DROP TABLE IF EXISTS `section`;
CREATE TABLE IF NOT EXISTS `section` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`id`, `title`) VALUES
(1, 'Šta je SEO?');

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
(15, 'Kljucne reci', 'Postoje različite vrste ključnih reči. Često odaberemo pogrešne što nas na kraju košta vremena i novca. Uz naš SEO kurs saznaćete koliko je zapravo potrebno vremena da dođete na prvo mesto za bilo koju ključnu reč.', 'on_page_seo'),
(16, 'Interni linkovi', 'Veliki broj sajtova zanemaruje povezivanje stranica putem unutrašnjih linkova. Unutrašnje  povezivanje stranica govori robotima koji pročešljavaju Vaš sajt koje stranice su najbitnije. Na osnovu toga Google određene stranice Vašeg sajta vrednuje više u odnosu na druge. Uz pravilno  povezivanje  linkova na sajtu možete dovesti Vaš sajt na bolju poziciju u pretraživačima, dok isto tako možete olakšati Vašim posetiocima pretragu sajta.', 'on_page_seo'),
(17, 'Dizajn', 'Koliko česte ste se susreli sa sajtom koji nije optimizovan za mobilne uređaje ili jednostavno čudno izgleda preko manjih ekrana? Da li znate da više od 55% posetilaca trenutno u proseku posećuje sajtove putem mobilnog uređaja? Ukoliko Vaš sajt nije optimizovan za sve uređaje to šteti Vašoj reputaciji, gubite posetioce, profit, samim tim i pozicije u pretraživačima.', 'on_page_seo'),
(18, 'AMP stranice', 'AMP stranice su dizajnirane kako bi  prikazale samo najbitnije informacije određene stranice. Koriste se za mobilne telefone i brzina učitavanja je gotovo trenutna. Svaka sekunda koju Vaš sajt izgubi dok učitava stranice smanjuje konverzije za 7%. AMP stranice pomažu u velikoj meri svakom sajtu. Mogu da se podese na više načina, na različitim  platformama bez poteškoća.', 'on_page_seo'),
(19, 'Skeniranje sajta', 'Vremenom menjamo sadržaj na sajtu, brišemo stranice, povezujemo se sa drugim sajtovima putem linkova, ubacimo nove stranice za koje zaboravimo da ubacimo meta opis ili naslov. Poželjno je svaki mesec raditi analizu celokupnog sajta ( SEO Audit ) kako bi se otklonile sve greške koje mogu nepoželjno da utiču na Vaš sajt.', 'on_page_seo'),
(20, '404 linkovi', 'Stranice sa kojima ne želimo da se naši posetioci susreću. Nekada su neizbežne nakon brisanja velikog broja stranica sa proizvodima. Ono što zaboravljamo jeste da te stranice i dalje ostaju u pretraživačima nekoliko meseci. Za to vreme stranice i dalje mogu dovoditi posetioce putem pretraživača, zato je veoma bitno odraditi 301 preusmerenje.', 'on_page_seo'),
(21, '301 preusmeravanja', '301 preusmeravanje se koristi kada želite da preusmerite staru stranicu na novu verziju koja ima drugačiji link. Kada posetilac pokuša da pristupi stranici putem starog linka on će biti preusmeren na novu stranicu. Isto tako 301 preusmeravanje se koristi kada želite da se rešite nepotrebnih 404 stranica. Ono što je bitno za 301 preusmerenje jeste da prenosi postojeći autoritet stranice na novi URL tako da ne gubite rank koji ste prethodno imali. Previše preusmeravanja na istu stranicu može dovesti do neželjenih efekata. ', 'on_page_seo'),
(23, 'Označavanje bitnog sadržaja', 'Data Highlighter se koristi kada želite dodatno da pokažete pretraživačima o čemu Vaše stranice zapravo govore. Što ih bolje pretraživači razumeju samim tim imaće bolje pozicije u pretraživačima za određene pretrage. Da biste podesili ovo potrebno je da imate verifikovan nalog na Google Search Console ( Webmasters ) i minimum 10ak stranica koje su optimizovane i imaju sadržaj.', 'on_page_seo'),
(24, 'CTR optmizacija', 'CTR  ( Click Through Rate ) odnosno broj posetilaca koji klikne na Vaše stranice predstavlja bitan faktor za pozicioniranje u pretraživačima. Što je veći CTR na Vaše stranice Google ih vrednuje više i vidi ih kao najbolji mogući rezultat. Najveća borba za CTR se vodi između prvih pozicija u pretraživačima. Stranica koja ima bolji meta opis i naslov kao i sadržaj unutar stranice i optimizaciju za sve uređaje ima prednost.', 'on_page_seo'),
(25, 'Bounce rate optimizacija', 'Bounce rate predstavlja procenat ljudi koji su posetili stranicu na sajtu i napustili je bez otvaranja drugih stranica na sajtu. Cilj svakog sajta treba da bude da vodi posetioce kroz sam sajt i da oni otvaraju što više stranica i da se dugo zadrže na njima. To šalje pozitivan signal pretraživačima da se posetiocima sadržaj sajta sviđa i on dobija bolju poziciju. Ukoliko je bounce rate preko 75% trebalo bi da se zapitate šta je problem i da detaljno analizirate stranice i uvrdite problem. Bounce rate treba uvek da bude ispod 25%-30%. To pokazuje nekoliko stvari, da sajt ima pozicije za prave ključne reči i da nudi baš to što posetioci koji koriste te ključne reči traže. Često odabir pogrešnih ključnih reči povećava bounce rate i dovodi posete koje nisu kvalitetne.', 'on_page_seo'),
(26, 'Pravljenje GMB profila', 'Description...', 'off_page_seo'),
(27, 'Optimizacija GMB profila', 'Description...', 'off_page_seo'),
(28, 'Prikupljanje recenzija', 'Description...', 'off_page_seo'),
(29, 'Lokalna SEO optimizacija', 'Kad je neko konj...', 'off_page_seo'),
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
(49, 'Analiza kompletnog sajta', 'Pre nego što se pokrene bilo kakva optimizacija sajta za SEO mora da se odradi odgovarajuća analiza kompletnog sajta. Analiziranjem sajta utvrđujemo glavne nedostatke i greške sajta koje nam mogu reći mnogo o sajtu i doneti rezultate mnogo brže. Analizom sajta možemo početi odmah sa ispravljanjem grešaka, analizom trenutnih ključnih reči i njihovih pozicija. Možemo se fokusirati na relevantne ključne reči sa druge stranice za koje treba malo vremena da se dovedu na prvu kako bismo videli rezultate mnogo brže. To je jedna od glavnih stvari koje SEO agencije rade svojim klijentima da bi im dostavili željene rezultate kroz relativno kratko vreme.', 'tehnicki_seo'),
(50, 'Provera hostinga', 'Često odaberemo pogrešan hosting, izaberemo jeftinu opciju ili skupu a ne obratimo pažnju na sitne detalje koji su veoma bitni. Ukoliko biramo shared ( deljeni ) hosting to znači da postoji još nekoliko sajtova sa druge strane koji koriste isti hosting kao i mi. Ukoliko neki sajt od tih zakačenih na naš ima problema sa Google pretraživačem, dobio je kaznu ili je bio ukloljen, ili je jednostavno SPAM, to može isto tako i Vama otežati dobijanje rank-a. Lokacija hostinga je isto tako veoma bitna za brzinu sajta. Ukoliko imate sajt sa kojim želite da prodajete u Srbiji a uzmete hosting koji ima server u Australiji svi koji posete sajt iz Srbije čekaće u proseku 5-10 sekundi duže. Hosting se uvek bira uz lokaciju koja je blizu oblasti u kojoj želite da vodite biznis. Ukoliko je to globalni nivo onda je pravo rešenje Cloud hosting.', 'tehnicki_seo'),
(51, 'Optimizacija brzine', 'Svaka sekunda koju sajt izgubi učitavanjem stranica smanjuje konverzije za 7% i dovodi do napuštanja posetilaca do 40% ukoliko je učitavanje duže od 3 sekunde. Idealno vreme učitavanja stranica treba da bude između 0,5s/2s. Kako bi se dostigla ova brzina potrebna je odgovarajuća optimizacija sajta. Potrebno je kompresovati JS i CSS fajlove, omogućiti keš, ukloniti nepotrebne ekstenzije i pluginove, kompresovati slike, svesti video snimke na minimum itd.', 'tehnicki_seo'),
(52, 'Optimizacija slika', 'Stranice na sajtu ne bi trebalo da imaju više od nekoliko megabajta, ukoliko sajt ima veliki broj slika koje imaju i po nekoliko megabajta to može znatno da uspori sajt. Veoma je bitno kompresovati slike na što manju veličinu kako bi se brzina sajta unapredila.', 'tehnicki_seo'),
(53, 'Kompresovanje JS i CSS fajlova', 'Ukoliko fajlovi na sajtu kao što su Java Script ili CSS nisu optmizovani, u velikoj meri utiče na brzinu sajta. Optimizovanjem samo ovih fajlova možete ubrzati sajt i do nekoliko sekundi, što dovodi do više prodaja i poverenja.', 'tehnicki_seo'),
(54, 'Optimizacija za mobilne uredjaje', 'Da li ste ikada proveravali da li je Vaš sajt optimizovan za mobilne uređaje? Ako niste, da li znate da preko 55% posetilaca dolazi na Vaš sajt putem mobilnih uređaja? Ukoliko sajt nije optimizovan za mobilne uređaje gubite više od polovine posetilaca i prodaja. Takođe šteti reputaciji sajta i brendu.', 'tehnicki_seo'),
(55, 'Optimizacija za zeljene pretrazivace', 'Ne posećuju svi putem pretraživača kao što su Chrome. Iako je Chrome najpopularnijii browser današnjice i dalje veliki broj pretražuje koristeći Safari, Operu, Mozilla FireFox, Internet Explorer, Tor, Edge. U zavisnosti od lokacija na svetu neki posetioci više koriste Safari u odnosu na druge, dok u drugom delu sveta pojedini korite samo Mozillu. Sajtovi se različito ponašaju na različitim browserima. Potrebno je isto optimizovati sajt za pretraživače.', 'tehnicki_seo'),
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
(66, 'Kanonični linkovi ( Canonical )', 'Description...', 'tehnicki_seo');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `title`, `duration`, `id_section`) VALUES
(1, 'Šta je SEO?', 600, 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
