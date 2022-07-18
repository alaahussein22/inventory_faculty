-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 15, 2022 at 12:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `faculty_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `status` varchar(25) CHARACTER SET utf8mb4 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `product_id`, `quantity`, `status`) VALUES
(9, 13, 1, 6, NULL),
(10, 13, 9, 5, 'cancel'),
(11, 15, 9, 1, NULL),
(12, 15, 7, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `cat_slug` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `cat_slug`) VALUES
(1, 'COMPUTER DEVICES', 'computer'),
(2, 'PRINTER', 'printer'),
(3, 'VOLTAGE GENERATOR', 'voltage'),
(4, 'ELECTRICAL WIRES', 'wires');

-- --------------------------------------------------------

--
-- Table structure for table `details`
--

DROP TABLE IF EXISTS `details`;
CREATE TABLE IF NOT EXISTS `details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sales_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `details`
--

INSERT INTO `details` (`id`, `sales_id`, `product_id`, `quantity`) VALUES
(14, 9, 11, 2),
(15, 9, 13, 5),
(16, 9, 3, 2),
(17, 9, 1, 3),
(18, 10, 13, 3),
(19, 10, 2, 4),
(20, 10, 19, 5);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firs` varchar(50) NOT NULL,
  `last` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` text NOT NULL,
  `created_at` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `firs`, `last`, `email`, `message`, `created_at`) VALUES
(1, 'Ahmed', 'Maher', 'ahmedmaher0110@gmail.com', 'asdasd asd asdasdasd as das dasd as da sdasdad asdasda asdasdad asd as f asdfdfd ', '2022-07-13'),
(2, 'Mercado', 'Ewing', 'zevuguniw@mailinator.com', 'Nostrud expedita com', '2022-07-13'),
(3, 'Becker', 'Pace', 'cydecis@mailinator.com', 'Quam eos atque porr', '2022-07-13'),
(4, 'Becker', 'Pace', 'cydecis@mailinator.com', 'Quam eos atque porr', '2022-07-13'),
(5, 'Lancaster', 'Summers', 'nyvykyresy@mailinator.com', 'Pariatur Quia quo a', '2022-07-13'),
(6, 'Lancaster', 'Summers', 'nyvykyresy@mailinator.com', 'Pariatur Quia quo a', '2022-07-13'),
(7, 'Roth', 'Hampton', 'hidyvykyr@mailinator.com', 'Reprehenderit et ali', '2022-07-13'),
(8, 'Roth', 'Hampton', 'hidyvykyr@mailinator.com', 'Reprehenderit et ali', '2022-07-13'),
(9, 'Roth', 'Hampton', 'hidyvykyr@mailinator.com', 'Reprehenderit et ali', '2022-07-13'),
(10, 'Roth', 'Hampton', 'hidyvykyr@mailinator.com', 'Reprehenderit et ali', '2022-07-13');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `slug` varchar(200) NOT NULL,
  `price` double NOT NULL,
  `photo` varchar(200) NOT NULL,
  `date_view` date NOT NULL,
  `counter` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `description`, `slug`, `price`, `photo`, `date_view`, `counter`) VALUES
(1, 1, 'DELL Inspiron 15 7000 15.6', '<p>15-inch laptop ideal for gamers. Featuring the latest Intel&reg; processors for superior gaming performance, and life-like NVIDIA&reg; GeForce&reg; graphics and an advanced thermal cooling design.</p>\r\n', 'computer', 0, 'com.jpg', '2022-07-15', 2),
(2, 1, 'MICROSOFT Surface Pro 4 & Typecover - 128 GB', '<p>compatible Bluetooth 4.0 wireless technology</p>\r\n\r\n<p>Ships in Consumer packaging.</p>\r\n', 'computer', 799, 'commm3.jpg', '2018-05-10', 3),
(3, 1, 'DELL Inspiron 15 5000 15.6', '<p>Dell&#39;s 15.6-inch, midrange notebook is a bland, chunky block. It has collection of island-style keys.</p>\r\n', 'computer', 599, 'commm11.jpg', '2018-05-12', 1),
(4, 1, 'LENOVO Ideapad 320s-14IKB 14\" Laptop - Grey', '<p>- Made for portability with a slim, lightweight chassis design&nbsp;<br />\r\n<br /> business use, editing photos, and anything else you do throughout the day.</p>\r\n', 'computer', 399, 'commm8.jpg', '2018-05-10', 3),
(6, 1, 'DELL Inspiron 15 5000 15', '<p>15-inch laptop delivering an exceptional viewing experience, a head-turning finish and an array of options designed to elevate your entertainment, wherever you go.</p>\r\n', 'computer', 449.99, 'commm12.jpg', '0000-00-00', 10),
(7, 3, 'Ikeo Voltage', '<p>4K video recording at 30 fps</p>\r\n\r\n<p>12-megapixel camera</p>\r\n\r\n<p>Fingerprint resistant coating</p>\r\n\r\n<p>Antireflective coating</p>\r\n\r\n<p>Face Time video calling</p>\r\n', 'voltage', 619, 'volt7.jpg', '2022-07-02', 1),
(8, 1, 'ASUS Transformer Mini T102HA 10.1\" 2 in 1 - Silver', '<p>Versatile Windows 10 device with keyboard and pen included, 2-in-1  so you can use a mobile charger or any power bank with a micro USB connector.</p>\r\n', 'computer', 549.99, 'commm13.jpg', '0000-00-00', 9),
(9, 2, 'Smart Printer', '<p>- Top performance for playing eSports and players.</p>\r\n', 'printer', 599.99, 'laser-printer-149815__340.webp', '2022-07-07', 1),
(10, 2, 'Black Printer', '<p>All-new gaming desktop featuring powerful AMD Ryzen&trade; processors, graphics ready for VR, LED lighting and a meticulous design for optimal cooling.</p>\r\n', 'printer', 599.99, 'print1.jpg', '2018-05-10', 1),
(11, 2, 'New Printer', '<p>What&#39;s inside matters.</p>\r\n\r\n<p>Without proper cooling, top tierperformance never reaches its fullpotential.</p>\r\n\r\n<p>Nine lighting zones accentuate theaggressive lines and smooth blackfinish of this unique galvanized steelcase.</p>\r\n', 'printer', 489.98, 'print2.jpg', '2018-05-12', 11),
(13, 2, 'HP Printer PC', '<p>Features the latest quad core Intel i5 processor and discrete graphics. With this  Pascal to deliver twice the performance of previous-generation graphics cards.</p>\r\n', 'printer', 799.99, 'eco-solvent-printing-machine-4311410__480.webp', '2018-05-12', 1),
(14, 2, 'LENOVO Legion Printer', '<p>- Multi-task with ease thanks to Intel&reg; i5 processor&nbsp;<br />\r\n<br />\r\n- Prepare for battle with NVIDIA GeForce  the Lenovo&nbsp;<strong>Legion Y520 Gaming PC</strong>&nbsp;has superior graphics and processing performance to suit the most demanding gamer.</p>\r\n', 'printer', 899.99, 'printer-1516578__480.jpg', '2018-05-10', 13),
(15, 2, 'Printer SPECIALIST Vortex Minerva XT-R ', '<p>- NVIDIA GeForce GTX graphics for stunning gaming visuals<br />\r\n<br />\r\n high-performance graphics and processing are made to meet the needs of serious gamers.</p>\r\n', 'printer', 999.99, 'print4.jpg', '2018-07-09', 20),
(16, 2, 'Printer Core II PC', '<p>Processor: Intel&reg; CoreTM i3-6100 Processor- Dual-core- 3.7 GHz- 3 MB card  Black- Green highlights, Box contents: PC Specialist Vortex Core- AC power cable</p>\r\n', 'printer', 649.99, 'print8.jpg', '2018-05-10', 2),
(17, 3, 'AMAZON Fire Voltage Generator', '<p>The next generation of our best-selling Fire tablet ever - now thinner, lighter, and with longer battery life and an improved display. More durable than the latest iPad</p>\r\n\r\n<p>Beautiful 7&quot; IPS display with higher contrast and sharper text, a 1.3 GHz quad-core processor, and up to 8 hours of battery life. 8 or 16 GB of internal storage and a microSD slot for up to 256 GB of expandable storage.</p>\r\n', 'amazon-fire-voltage-generator', 100, 'volt1.jpg', '2022-07-07', 1),
(18, 3, 'HD 8 Generator with Alexa (2017) - 16 GB, Black', '<p>Take your personal assistant with you wherever you go with this Amazon Fire HD 8 tablet featuring Alexa voice-activated cloud service. The slim design of the tablet is easy to handle, and the ample 8-inch screen is ideal for work or play. This Amazon Fire HD 8 features super-sharp high-definition graphics for immersive streaming.</p>\r\n', 'voltage', 79.99, 'volt2.jpg', '2018-05-12', 2),
(19, 3, 'Voltage Generator', '<p>The next generation of our best-reviewed Fire tablet, with up to 12 hours of battery life, a vibrant 8&quot; HD display, a 1.3 GHz quad-core processor, 1.5 GB of RAM, and Dolby Audio. More durable than the latest iPad.</p>\r\n\r\n<p>16 or 32 GB of internal storage and a microSD slot for up to 256 GB of expandable storage.</p>\r\n', 'voltage', 99.99, 'volt3.jpg', '2018-05-10', 8),
(20, 3, 'APPLE Generator', '<p>9.7-inch Retina display, wide color and true tone</p>\r\n\r\n<p>A9 third-generation chip with 64-bit architecture</p>\r\n\r\n<p>M9 motion coprocessor</p>\r\n\r\n', 'voltage', 339, 'volt5.jpg', '2018-05-12', 1),
(27, 1, 'Dell XPS 15 9560', '<p>The smallest 15.6-inch performance laptop packs powerhouse \r\nswipe and pinch your way around the screen. The optional touch display lets you interact naturally with your technology.</p>\r\n', 'computer', 1599, 'macbook-459196__340.jpg', '2018-07-09', 9),
(28, 4, 'Note Wires', '<p>See the bigger picture and communicate in a whole new way. With the Galaxy Note8 in your hand, bigger things are just waiting to happen.&nbsp;</p>\r\n Do things that matter with the S Pen.</p>\r\n<p>*Image simulated for illustration purpose only.</p>\r\n', 'wires', 829, 'wires1.jpg', '2022-07-02', 1),
(29, 4, 'Calc Wires', '<h2>The revolutionary camera that adapts like the human eye. Set the video to music or turn it into a looping GIF, and share it with a tap. Then sit back and watch the reactions roll in.</p>\r\n', 'wires', 889.99, 'wires2.jpg', '2018-07-09', 3),
(30, 4, 'Femto Wires', '<h2>The revolutionary camera that adapts like the human eye. Set the video to music or turn it into a looping GIF, and share it with a tap. Then sit back and watch the reactions roll in.</p>\r\n', 'wires', 889.99, 'wires3.jpg', '2018-07-09', 31),
(31, 4, 'Card Wires', '<h2>The revolutionary camera that adapts like the human eye. Set the video to music or turn it into a looping GIF, and share it with a tap. Then sit back and watch the reactions roll in.</p>\r\n', 'wires', 889.99, 'wires4.jpg', '2018-07-09', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `pay_id` varchar(50) NOT NULL,
  `sales_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `user_id`, `pay_id`, `sales_date`) VALUES
(9, 9, 'PAY-1RT494832H294925RLLZ7TZA', '2018-05-10'),
(10, 9, 'PAY-21700797GV667562HLLZ7ZVY', '2018-05-10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(200) NOT NULL,
  `password` varchar(60) NOT NULL,
  `type` int(1) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `contact_info` varchar(100) NOT NULL,
  `photo` varchar(200) NOT NULL,
  `status` int(1) NOT NULL,
  `activate_code` varchar(15) NOT NULL,
  `reset_code` varchar(15) NOT NULL,
  `created_on` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `type`, `firstname`, `lastname`, `address`, `contact_info`, `photo`, `status`, `activate_code`, `reset_code`, `created_on`) VALUES
(1, 'admin@technicalbabaji.com', '$2y$10$4dF7rxcZKvG66VloRvOr9.Dz/d1NxMonLg3bzhQrn6o7Txl2sg72e', 1, 'Shimaa', 'ElBdewy', '', '', 'thanos1.jpg', 1, '', '', '2018-05-01'),
(9, 'tarique.rkl@gmail.com', '$2y$10$limOTqBoSH0qTp4WSvAg7uJZ8sMMhOGlDcK9HnM7XSkUy9qJmLLa6', 0, 'Technical', 'Babaji', 'Bhubaneswar Odisha', '+918270948450', 'male2.png', 1, 'k8FBpynQfqsv', 'wzPGkX5IODlTYHg', '2018-05-09'),
(12, 'christine@gmail.com', '$2y$10$ozW4c8r313YiBsf7HD7m6egZwpvoE983IHfZsPRxrO1hWXfPRpxHO', 0, 'Christine', 'becker', 'demo', '7542214500', 'female3.jpg', 1, '', '', '2018-07-09'),
(13, 'sara11@gmail.com', '$2y$10$4sSHstKsl3.6Ho1ryE5bGevWOPNHoxP1m6HYizsAyxhP2mWCFQ632', 0, 'sara', 'Ali', '...', '01154685577', '', 1, '', '', '2022-05-22'),
(14, 'shimaa12@gmail.com', '$2y$10$ZuAPnMYJevolccNaTV/jPOzrRi5Jpxan6fjViaFCJl1nh9TyT/9gK', 0, 'Shimaa', 'ElBdewy', 'Cairo', '01154685588', '', 1, '', '', '2022-05-23'),
(15, 'esraa123@gmail.com', '$2y$10$sdfKNTFuRxGJNPkEu51g3OWHAsJjH9.PReLoig52ubOvHqhWhHhD2', 0, 'Esraa', 'Azzam', 'El-maady -cairo-egypt', '01154685577', 'images.png', 1, '', '', '2022-07-02');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
