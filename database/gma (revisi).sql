-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2024 at 08:42 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gma`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `nama`, `email`, `password`) VALUES
(1, 'Administrator', 'admin@gmail.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `brand`
--

CREATE TABLE `brand` (
  `idbrand` int(10) NOT NULL,
  `namabrand` varchar(255) NOT NULL,
  `idkategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `brand`
--

INSERT INTO `brand` (`idbrand`, `namabrand`, `idkategori`) VALUES
(10, 'Suzuki', NULL),
(11, 'Honda', NULL),
(12, 'Kawasaki', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `careerbox`
--

CREATE TABLE `careerbox` (
  `idcareerbox` int(10) NOT NULL,
  `judulcareerbox` varchar(255) NOT NULL,
  `textcareerbox` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careerbox`
--

INSERT INTO `careerbox` (`idcareerbox`, `judulcareerbox`, `textcareerbox`) VALUES
(1, 'INNOVATIVE ENVIRONMENT', 'Join a team that values creativity and innovation, constantly pushing the boundaries of motorcycle accessory design and&nbsp;technology.'),
(2, 'CAREER GROWTH', 'We offer ample opportunities for professional development and career advancement, helping you achieve your personal and professional goals.'),
(3, 'PASSIONATE COMMUNITY', 'Work alongside fellow motorcycle enthusiasts who share your passion for riding and excellence, fostering a collaborative and engaging workplace.'),
(4, 'GLOBAL IMPACT', 'Be part of a company with a global reach, serving customers in six countries and making a significant impact in the motorcycle accessories industry.'),
(5, 'COMMITMENT TO QUALITY', 'Contribute to a brand known for its dedication to quality and customer satisfaction, ensuring that every product we create enhances the riding experience for our customers.');

-- --------------------------------------------------------

--
-- Table structure for table `careerdesign`
--

CREATE TABLE `careerdesign` (
  `idcareerdesign` int(10) NOT NULL,
  `judul1cd` varchar(255) NOT NULL,
  `desc1cd` varchar(255) NOT NULL,
  `judul2cd` varchar(255) NOT NULL,
  `desc2cd` varchar(255) NOT NULL,
  `judul3cd` varchar(255) NOT NULL,
  `desc3cd` varchar(255) NOT NULL,
  `judul4cd` varchar(255) NOT NULL,
  `desc4cd` varchar(255) NOT NULL,
  `gambarcd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `careerdesign`
--

INSERT INTO `careerdesign` (`idcareerdesign`, `judul1cd`, `desc1cd`, `judul2cd`, `desc2cd`, `judul3cd`, `desc3cd`, `judul4cd`, `desc4cd`, `gambarcd`) VALUES
(1, 'COME BUILD THE FUTURE WITH US', 'We&#39;re looking for passionate individuals to help us shape the future. Check out our open positions and apply today to be a part of our journey.', '5 REASONS TO JOIN US', 'You&#39;ll work with passionate motorcycle enthusiasts dedicated to excellence, contribute to a global impact, and be part of a team committed to delivering top-quality products that enhance the riding experience.', 'OPEN JOB OPPORTUNITY', 'Explore our available job openings and join our team.', 'JOIN OUR INNOVATIVE AND DYNAMIC TEAM!', '-unused-', '897072.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `carouselindex`
--

CREATE TABLE `carouselindex` (
  `idcarouselindex` int(10) NOT NULL,
  `fotocarouselindex` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carouselindex`
--

INSERT INTO `carouselindex` (`idcarouselindex`, `fotocarouselindex`) VALUES
(2, '20240722165438Carousel 1.png'),
(3, '20240722165446Carousel 2.png'),
(4, '20240722165430Carousel 3.png');

-- --------------------------------------------------------

--
-- Table structure for table `dealer`
--

CREATE TABLE `dealer` (
  `iddealer` int(11) NOT NULL,
  `namadealer` varchar(255) NOT NULL,
  `deskripsidealer` varchar(255) NOT NULL,
  `lokasidealer` varchar(255) NOT NULL,
  `haribukadealer` varchar(255) NOT NULL,
  `jambukadealer` varchar(255) NOT NULL,
  `nomordealer` varchar(255) NOT NULL,
  `fotodealer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dealer`
--

INSERT INTO `dealer` (`iddealer`, `namadealer`, `deskripsidealer`, `lokasidealer`, `haribukadealer`, `jambukadealer`, `nomordealer`, `fotodealer`) VALUES
(1, 'Dealer 2', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Ngentak, Caturtunggal, Depok, Sleman Regency, Special Region of Yogyakarta 55281', 'Senin - Sabtu', '08-00 : 17:00', '08888888888888', 'Dealer 2.png'),
(2, 'Dealer 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Bandung', 'Senin - Sabtu', '08-00 : 18:00', '08888888888888', 'Dealer 1.png'),
(3, 'Dealer 3', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Cirebon', 'Senin - Sabtu', '08-00 : 19:00', '081912921999', 'Dealer 3.png'),
(4, 'Dealer 4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Jakarta', 'Senin - Sabtu', '08-00 : 17:00', '08888888888888', 'Dealer 4.png'),
(5, 'Dealer 5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Menara Indomaret', 'Senin - Sabtu', '08-00 : 17:00', '08888888888888', 'Dealer 5.png');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `idevent` int(10) NOT NULL,
  `namaevent` varchar(255) NOT NULL,
  `fotoevent` varchar(255) NOT NULL,
  `deskripsievent` varchar(255) NOT NULL,
  `lokasievent` varchar(255) NOT NULL,
  `tanggalevent` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`idevent`, `namaevent`, `fotoevent`, `deskripsievent`, `lokasievent`, `tanggalevent`) VALUES
(9, 'Event 1', 'Event 1.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Bandung', '2024-07-18'),
(10, 'Event 2', 'Event 2.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Bandung', '2024-07-19'),
(11, 'Event 3', 'Event 3.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Kemanggisan', '2024-07-20'),
(12, 'Event 4', 'Event 4.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Alam Sutera', '2024-08-30'),
(13, 'Event 5', 'Event 5.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Kebayoran', '2024-08-31'),
(14, 'Event 6', 'Event 6.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Kebaor', '2024-07-15'),
(15, 'Event 7', 'Event 7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Kebayoran', '2024-07-14'),
(16, 'Event 8', 'Event 8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Kemayoran', '2024-07-13'),
(17, 'Event 9', 'Event 8.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'Semarang', '2024-12-25'),
(18, 'Event 10', 'Event 7.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.', 'PIK', '2024-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `historydesign`
--

CREATE TABLE `historydesign` (
  `idhistory` int(11) NOT NULL,
  `bghistory` varchar(255) NOT NULL,
  `titlehistory1` varchar(255) NOT NULL,
  `imagehistory1` varchar(255) NOT NULL,
  `titlehistory2` varchar(255) NOT NULL,
  `deschistory2` text NOT NULL,
  `yearhistory2` varchar(255) NOT NULL,
  `titlehistory3` varchar(255) NOT NULL,
  `deschistory3` text NOT NULL,
  `yearhistory3` varchar(255) NOT NULL,
  `buttonhistory3` varchar(255) NOT NULL,
  `imagehistory4` varchar(255) NOT NULL,
  `titlehistory4` varchar(255) NOT NULL,
  `deschistory4` text NOT NULL,
  `yearhistory4` varchar(255) NOT NULL,
  `titlehistory5` varchar(255) NOT NULL,
  `deschistory5` text NOT NULL,
  `buttonhistory5` varchar(255) NOT NULL,
  `yearhistory5` varchar(255) NOT NULL,
  `imagehistory6` varchar(255) NOT NULL,
  `titlehistory6` varchar(255) NOT NULL,
  `deschistory6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `historydesign`
--

INSERT INTO `historydesign` (`idhistory`, `bghistory`, `titlehistory1`, `imagehistory1`, `titlehistory2`, `deschistory2`, `yearhistory2`, `titlehistory3`, `deschistory3`, `yearhistory3`, `buttonhistory3`, `imagehistory4`, `titlehistory4`, `deschistory4`, `yearhistory4`, `titlehistory5`, `deschistory5`, `buttonhistory5`, `yearhistory5`, `imagehistory6`, `titlehistory6`, `deschistory6`) VALUES
(1, 'Background.png', 'OUR JOURNEY THROUGHOUT THE YEAR', 'diluc.jpg', 'FOUNDED IN 2002,', 'GMA Product Series began with a simple mission: to provide motorcycle enthusiasts with high-quality, innovative accessories that enhance both performance and style. Our passion for motorcycles and dedication to excellence quickly set us apart in the industry, earning the trust and loyalty of riders around the world.', '2002', 'EARLY DAYS', 'We started as a small team of motorcycle enthusiasts driven by a shared vision. Our first products, meticulously designed body kits and windshields, were met with overwhelming approval. The positive feedback fueled our ambition to expand our product line and reach more riders.', '2005', 'Check Out Our Products', 'FotoSquareHistory.png', 'GROWTH AND INNOVATION', 'Over the years, GMA Product Series has grown significantly. We continually invested in research and development, leveraging cutting-edge technology and innovative design to introduce new products that meet the evolving needs of our customers. From stylish visors and high-performance headlights to durable rearlights and a wide range of accessories, our catalog has expanded to over 1000 unique items.', '2010', 'GLOBAL REACH', 'As our reputation for quality and reliability grew, so did our reach. Today, GMA Product Series proudly serves motorcycle enthusiasts in six countries. Our commitment to excellence and customer satisfaction remains unwavering, ensuring that every product we offer meets the highest standards.', 'Check Out Our Products', '2013', 'lookingahead.png', 'LOOKING AHEAD', 'Our journey is far from over. As we look to the future, GMA Product Series remains committed to innovation, quality, and customer satisfaction. We continue to explore new technologies and designs to bring you the best motorcycle accessories on the market. Thank you for being a part of our story. Together, we will continue to ride towards new horizons.<br />\r\n<br />\r\nJoin us as we celebrate our history and look forward to many more years of excellence in motorcycle accessories.');

-- --------------------------------------------------------

--
-- Table structure for table `indexbox`
--

CREATE TABLE `indexbox` (
  `idindexbox` int(10) NOT NULL,
  `titleindexbox` varchar(255) NOT NULL,
  `descindexbox` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `indexbox`
--

INSERT INTO `indexbox` (`idindexbox`, `titleindexbox`, `descindexbox`) VALUES
(1, 'PREMIUM QUALITY MATERIALS', 'Our products are made from the finest materials to ensure durability and performance.'),
(2, 'INNOVATIVE DESIGN', 'We combine cutting-edge technology with creative engineering to deliver motorcycle accessories that are both functional and stylish.'),
(3, 'AFFORDABLE', 'Our commitment to affordability ensures that you can enhance and customize your ride with high-quality accessories that fit within your budget.'),
(4, 'CUSTOMER SUPPORT', 'We stand by the quality of our products, offering a comprehensive warranty to give you peace of mind and confidence in your investment.');

-- --------------------------------------------------------

--
-- Table structure for table `joblist`
--

CREATE TABLE `joblist` (
  `idjoblist` int(10) NOT NULL,
  `jobtitle` varchar(255) NOT NULL,
  `jobdesc` varchar(255) NOT NULL,
  `joblink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `joblist`
--

INSERT INTO `joblist` (`idjoblist`, `jobtitle`, `jobdesc`, `joblink`) VALUES
(1, 'Graphic Design', 'We&#39;re looking for a graphic design with a minimum degree in Bachelorite', '#'),
(2, 'Marketing & Sales', 'We&#39;re looking for an experienced Marketing &amp; Sales', '#'),
(3, 'Accounting', 'Do you feel qualified? Apply now for an interview appointment!', '#');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `idkategori` int(11) NOT NULL,
  `namakategori` varchar(255) NOT NULL,
  `fotokategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`idkategori`, `namakategori`, `fotokategori`) VALUES
(25, 'Headlights', '20240723104600Headlights.png'),
(26, 'Rearlights', '20240723104610Rearlights.png'),
(27, 'Helmet Visor', '20240723104621Helmet Visor.png'),
(28, 'Windshield', '20240723104635Windshield.png'),
(29, 'Body Cover', '20240723104647Body Cover.png'),
(30, 'Rear Mirror', '20240723104657Rear Mirror.png'),
(31, 'CNC Metal', '20240723104705CNC Metal.png'),
(32, 'Miscellaneous', '20240723104711Miscellaneous.png');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_brand`
--

CREATE TABLE `kategori_brand` (
  `idkategori` int(11) NOT NULL,
  `idbrand` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `landing`
--

CREATE TABLE `landing` (
  `idlanding` int(10) NOT NULL,
  `titlesection1` varchar(255) NOT NULL,
  `descsection1` varchar(255) NOT NULL,
  `videosection1` varchar(255) NOT NULL,
  `titlesection2` varchar(255) NOT NULL,
  `imagesection2` varchar(255) NOT NULL,
  `ourproductstitle` varchar(255) NOT NULL,
  `imagesection3` varchar(255) NOT NULL,
  `titlesection4` varchar(255) NOT NULL,
  `descsection4` varchar(255) NOT NULL,
  `titlecarousel4` varchar(255) NOT NULL,
  `desccarousel4` varchar(255) NOT NULL,
  `imagesection4` varchar(255) NOT NULL,
  `imagedescsection4` varchar(255) NOT NULL,
  `titlesection5` varchar(255) NOT NULL,
  `descsection5` varchar(255) NOT NULL,
  `titlesection6` varchar(255) NOT NULL,
  `descsection6` varchar(255) NOT NULL,
  `imagesection6` varchar(255) NOT NULL,
  `buttontextsection6` varchar(255) NOT NULL,
  `whychooseustitle` varchar(255) NOT NULL,
  `whychooseusdesc` varchar(255) NOT NULL,
  `whychooseusbuttontext` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `landing`
--

INSERT INTO `landing` (`idlanding`, `titlesection1`, `descsection1`, `videosection1`, `titlesection2`, `imagesection2`, `ourproductstitle`, `imagesection3`, `titlesection4`, `descsection4`, `titlecarousel4`, `desccarousel4`, `imagesection4`, `imagedescsection4`, `titlesection5`, `descsection5`, `titlesection6`, `descsection6`, `imagesection6`, `buttontextsection6`, `whychooseustitle`, `whychooseusdesc`, `whychooseusbuttontext`) VALUES
(1, 'UPGRADE YOUR RIDE TODAY!', 'Our products help you customize your ride to stand out on the road. Discover the difference quality makes and elevate your riding experience with GMA Product Series.', 'Videobg.mp4', 'NEWS AND UPDATES', 'Fazio.png', 'OUR PRODUCTS', 'nmaxx.png', 'A brief introduction', 'At GMA Product Series, we are passionate about motorcycles and dedicated to providing top-notch accessories to enhance your riding experience. Whether you&rsquo;re looking to upgrade your bike&rsquo;s performance or style, we&rsquo;ve got you covered.', 'ONLY THE BEST', 'ILLUMINATE YOUR RIDE SHINE BRIGHT!', 'rearlight.png', '\"We are proud to have served motorcycle enthusiasts since 2002, offering over 1000+ products across 6 countries, and capturing the hearts of riders everywhere.\"', 'BECAUSE EVERY DETAIL MATTERS, WE DEDICATE OURSELVES TO PROVIDING THE HIGHEST QUALITY MOTORCYCLE ACCESSORIES TO ENSURE YOUR RIDE STANDS OUT.', 'Each product is meticulously designed and built with the highest quality materials, ensuring not only enhanced performance but also a unique, stylish look. We believe that every rider deserves to make a statement, and our accessories are here to help you', 'COMPLETE THE LOOK!', '-unused-', 'nmax.png', 'Shop Our Collection', 'WHY CHOOSE US', 'Quality, Innovation, and Customer Satisfaction are at the core of everything we do. Discover why riders trust GMA for their motorcycle accessory needs.', 'Discover More About Us');

-- --------------------------------------------------------

--
-- Table structure for table `motor`
--

CREATE TABLE `motor` (
  `idmotor` int(11) NOT NULL,
  `idbrand` int(11) DEFAULT NULL,
  `namamotor` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `motor`
--

INSERT INTO `motor` (`idmotor`, `idbrand`, `namamotor`) VALUES
(12, 11, 'Vario'),
(13, 11, 'PCX'),
(14, 11, 'Scoopy');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `idproduk` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `idbrand` int(11) DEFAULT NULL,
  `idmotor` int(11) DEFAULT NULL,
  `namaproduk` text NOT NULL,
  `hargaproduk` text NOT NULL,
  `fotoproduk` text NOT NULL,
  `deskripsiproduk` text NOT NULL,
  `kesediaanproduk` varchar(30) NOT NULL,
  `foto_perubahan` varchar(255) DEFAULT NULL,
  `videoproduk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `idkategori`, `idbrand`, `idmotor`, `namaproduk`, `hargaproduk`, `fotoproduk`, `deskripsiproduk`, `kesediaanproduk`, `foto_perubahan`, `videoproduk`) VALUES
(51, 25, 11, 12, 'Philips', '10000', '20240725164615Produk 1.png', 'hahahha', 'Tersedia', '20240725164615Produk 2.png', '20240725164615Videobg.mp4'),
(52, 25, 11, 13, 'Maspion', '16000', '20240725232502Produk 2.png', 'Lorem Ipsum ', 'Tersedia', '20240725232502Produk 1.png', '20240725232502Videobg.mp4'),
(53, 25, 11, 13, 'Produk 3', '20000', '20240725232702Produk 3.png', 'Lorem Ipsum brooooooooooo', 'TERSEDIA', '20240725232702Produk 2.png', '20240725232702Videobg.mp4'),
(54, 25, 11, 14, 'Produk 4', '25000', '20240725232809Produk 4.png', 'Lorem Ipsummmmmmm', 'Tersedia', '20240725232809Produk 2.png', '20240725232809Videobg.mp4'),
(55, 25, 11, 12, 'Produk 5', '27000', '20240725235309Produk 5.png', 'Lorem Ipsum', 'TERSEDIA', '20240725235309Produk 2.png', ''),
(60, 25, 10, 12, 'Product Testing', '14500', '20240805101617Carousel 1.png', 'ha', 'TERSEDIA', '20240805101617Carousel 2.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `produk_images`
--

CREATE TABLE `produk_images` (
  `id_image` int(11) NOT NULL,
  `idproduk` int(11) DEFAULT NULL,
  `fotoproduk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `produk_images`
--

INSERT INTO `produk_images` (`id_image`, `idproduk`, `fotoproduk`) VALUES
(12, 60, '20240805101617Produk 1.png'),
(14, 60, '20240805111958Produk 2.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `brand`
--
ALTER TABLE `brand`
  ADD PRIMARY KEY (`idbrand`),
  ADD KEY `idkategori` (`idkategori`);

--
-- Indexes for table `careerbox`
--
ALTER TABLE `careerbox`
  ADD PRIMARY KEY (`idcareerbox`);

--
-- Indexes for table `careerdesign`
--
ALTER TABLE `careerdesign`
  ADD PRIMARY KEY (`idcareerdesign`);

--
-- Indexes for table `carouselindex`
--
ALTER TABLE `carouselindex`
  ADD PRIMARY KEY (`idcarouselindex`);

--
-- Indexes for table `dealer`
--
ALTER TABLE `dealer`
  ADD PRIMARY KEY (`iddealer`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`idevent`);

--
-- Indexes for table `historydesign`
--
ALTER TABLE `historydesign`
  ADD PRIMARY KEY (`idhistory`);

--
-- Indexes for table `indexbox`
--
ALTER TABLE `indexbox`
  ADD PRIMARY KEY (`idindexbox`);

--
-- Indexes for table `joblist`
--
ALTER TABLE `joblist`
  ADD PRIMARY KEY (`idjoblist`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`idkategori`);

--
-- Indexes for table `kategori_brand`
--
ALTER TABLE `kategori_brand`
  ADD PRIMARY KEY (`idkategori`,`idbrand`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `landing`
--
ALTER TABLE `landing`
  ADD PRIMARY KEY (`idlanding`);

--
-- Indexes for table `motor`
--
ALTER TABLE `motor`
  ADD PRIMARY KEY (`idmotor`),
  ADD KEY `idbrand` (`idbrand`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`idproduk`),
  ADD KEY `id_kategori` (`idkategori`),
  ADD KEY `FK_idbrand` (`idbrand`),
  ADD KEY `FK_idmotor` (`idmotor`);

--
-- Indexes for table `produk_images`
--
ALTER TABLE `produk_images`
  ADD PRIMARY KEY (`id_image`),
  ADD KEY `idproduk` (`idproduk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `brand`
--
ALTER TABLE `brand`
  MODIFY `idbrand` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `careerbox`
--
ALTER TABLE `careerbox`
  MODIFY `idcareerbox` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `careerdesign`
--
ALTER TABLE `careerdesign`
  MODIFY `idcareerdesign` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `carouselindex`
--
ALTER TABLE `carouselindex`
  MODIFY `idcarouselindex` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dealer`
--
ALTER TABLE `dealer`
  MODIFY `iddealer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `idevent` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `historydesign`
--
ALTER TABLE `historydesign`
  MODIFY `idhistory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `indexbox`
--
ALTER TABLE `indexbox`
  MODIFY `idindexbox` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `joblist`
--
ALTER TABLE `joblist`
  MODIFY `idjoblist` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `idkategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `landing`
--
ALTER TABLE `landing`
  MODIFY `idlanding` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `motor`
--
ALTER TABLE `motor`
  MODIFY `idmotor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `idproduk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `produk_images`
--
ALTER TABLE `produk_images`
  MODIFY `id_image` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `brand`
--
ALTER TABLE `brand`
  ADD CONSTRAINT `brand_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`);

--
-- Constraints for table `kategori_brand`
--
ALTER TABLE `kategori_brand`
  ADD CONSTRAINT `kategori_brand_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`),
  ADD CONSTRAINT `kategori_brand_ibfk_2` FOREIGN KEY (`idbrand`) REFERENCES `brand` (`idbrand`);

--
-- Constraints for table `motor`
--
ALTER TABLE `motor`
  ADD CONSTRAINT `motor_ibfk_1` FOREIGN KEY (`idbrand`) REFERENCES `brand` (`idbrand`);

--
-- Constraints for table `produk`
--
ALTER TABLE `produk`
  ADD CONSTRAINT `FK_idbrand` FOREIGN KEY (`idbrand`) REFERENCES `brand` (`idbrand`),
  ADD CONSTRAINT `FK_idmotor` FOREIGN KEY (`idmotor`) REFERENCES `motor` (`idmotor`),
  ADD CONSTRAINT `produk_ibfk_1` FOREIGN KEY (`idkategori`) REFERENCES `kategori` (`idkategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `produk_images`
--
ALTER TABLE `produk_images`
  ADD CONSTRAINT `produk_images_ibfk_1` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
