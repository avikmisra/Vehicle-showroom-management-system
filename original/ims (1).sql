-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 08:33 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ims`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `bid` int(3) NOT NULL,
  `bitem` varchar(255) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `baddress` varchar(255) NOT NULL,
  `bdate` date NOT NULL,
  `bmop` varchar(255) NOT NULL,
  `bprice` varchar(255) NOT NULL,
  `bstatus` varchar(255) NOT NULL,
  `billby` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`bid`, `bitem`, `bname`, `baddress`, `bdate`, `bmop`, `bprice`, `bstatus`, `billby`) VALUES
(11, 'Lenovo K4 note', 'kuamr Shaanu', 'ho.56 Patuli ,kolkata west Bengal(700078)', '2018-11-01', 'credit card', '11000', 'approved', ''),
(12, 'Tata SaLT', 'kuamr Piyush', 'Ho. 67,garia ,kolkata west Bengal(700078)', '2018-11-01', 'debit card', '18', 'approved', ''),
(13, 'Tata Puless', 'Gourav Ranjan', 'Ho. 67,Science City ,kolkata west Bengal(700078)', '2018-11-01', 'paytm', '100', 'approved', '');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(3) NOT NULL,
  `cat_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, ' Mobiles'),
(2, ' Food'),
(3, ' Stationary'),
(7, 'Fruites And  Vegitables'),
(8, '  gourav');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(3) NOT NULL,
  `item_category_id` int(3) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_company` varchar(255) NOT NULL,
  `item_date` date NOT NULL,
  `item_image` text NOT NULL,
  `item_status` varchar(255) NOT NULL,
  `item_price` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `item_category_id`, `item_name`, `item_company`, `item_date`, `item_image`, `item_status`, `item_price`) VALUES
(13, 1, 'Sumsung J2', 'Sumsung Pvt. Ltd. India', '2018-11-01', '', 'instock', 7000),
(14, 1, 'Redmi Note 5', 'Xiomi Pvt. Ltd. India', '2018-11-01', '', 'instock', 11000),
(15, 1, 'Nokia  K27', 'Nokia Pvt. Ltd. India', '2018-11-01', '', 'instock', 15000),
(16, 1, 'Lenovo K4 Note', 'Lenovo Pvt. Ltd. India', '2018-11-01', '', 'instock', 10500),
(17, 2, 'Dawaat Rice', 'Dawaat Pvt. Ltd. India', '2018-11-01', '', 'instock', 500),
(18, 2, 'India gate BriyaniRice', 'India gate Pvt. Ltd. India', '2018-11-01', '', 'outstock', 700),
(19, 2, 'Tata Pules', 'Tata Pvt. Ltd. India', '2018-11-01', '', 'outstock', 120),
(20, 2, 'Tata Salt', 'Tata Pvt. Ltd. India', '2018-11-01', '', 'outstock', 18),
(21, 3, 'Apsara Pencil', 'Apsara Pvt. Ltd. India', '2018-11-01', '', 'outstock', 15),
(22, 3, 'Natraaj Pencil', 'Natraaj Pvt. Ltd. India', '2018-11-01', '', 'outstock', 12),
(23, 7, 'Kashmiri Apple', 'Manish fruits company ltd.', '2018-11-01', '', 'instock', 100),
(25, 7, 'Kashmiri Apple', 'Manish fruits company ltd.', '2018-11-02', '', 'instock', 100);

-- --------------------------------------------------------

--
-- Table structure for table `susers`
--

CREATE TABLE `susers` (
  `suser_id` int(3) NOT NULL,
  `suser_name` varchar(255) NOT NULL,
  `suser_password` varchar(255) NOT NULL,
  `suser_firstname` varchar(255) NOT NULL,
  `suser_lastname` varchar(255) NOT NULL,
  `suser_email` varchar(255) NOT NULL,
  `suser_image` text NOT NULL,
  `suser_role` varchar(255) NOT NULL,
  `srandSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `susers`
--

INSERT INTO `susers` (`suser_id`, `suser_name`, `suser_password`, `suser_firstname`, `suser_lastname`, `suser_email`, `suser_image`, `suser_role`, `srandSalt`) VALUES
(1, 'mani', '$2y$10$.GHH45hCmiHkrmSFHUBrretVJur80KJ4yELE5Swhup5Vv5OLUJUjy', 'manish', 'yadav', 'manis@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(5, 'pooja', '$2y$10$EI264PYJtrlYg8MTGfwPpe4nbdvtWar8AhZQj9GUtomRjCT/sa4Aa', 'p', 'u', 'mani@gmail.com', '', 'user', '$2y$10$iusesomecrazystrings22'),
(8, 'astha', '$2y$10$D01L2dzSD2.eqeuTjt2c6.4WQzAeMpz7mht52Uz3eRQDwbQxj7z8.', 'astha', 'singh', 'sijisj@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(9, 'prosoon', '$2y$10$9mILYU07V8h9EdbFEPueTuMQMoV.uhf8KQ6PEKKss2wmKVje9OREG', 'Prasson ', 'Goswami', 'prosoon@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(10, 'rahul', '$2y$10$PuFlUz86KFcbI9DF5BlJWujM6Jlkx0gno6sY9KGF9EdKU3FKaoU3q', 'Rahul', 'Krishan', 'rahul@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(11, 'ujjwal', '$2y$10$OqbhD2M9t6qDCe7C9FAvUuuS7klv3FpaO2kmdn65HNl9jG91SuKxq', 'Ujjwal', 'Nagmani', 'ujjwal@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22'),
(12, 'chacha', '$2y$10$mjPEqJvYUlVipDzCSG3KRuh6zjZ/gtraFQWgMFaJqkU.Z50gGN0cO', 'Ritesh', 'singh', 'chacha@gmail.com', '', 'admin', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `susers_online`
--

CREATE TABLE `susers_online` (
  `sid` int(3) NOT NULL,
  `ssession` varchar(255) NOT NULL,
  `stime` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(3) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_firstname` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_role` varchar(255) NOT NULL,
  `user_image` text NOT NULL,
  `randSalt` varchar(255) NOT NULL DEFAULT '$2y$10$iusesomecrazystrings22'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_password`, `user_firstname`, `user_lastname`, `user_email`, `user_role`, `user_image`, `randSalt`) VALUES
(1, 'ayush22', '$2y$10$PDllBLGt6rvcbPndudHt/.cVuRjOnOc72vRh.QwloIxVkEoUPsWWG', 'rahul', 'yadav', 'aass@gmail.com', 'admin', '', '$2y$10$iusesomecrazystrings22'),
(3, 'gourav', '$2y$10$A7fMCSoseOzg9NJuKcV54.oxhiv/84IwEGOSuN0Tql9FwkkXHebR6', 'Gourav', 'Ranjan', 'gaurav@gmail.com', 'admin', '', '$2y$10$iusesomecrazystrings22'),
(4, 'shaanu', '$2y$10$7aOXTBmotX/qqrsb9spkDergUTQpn221A09/fXcjW3xBzz9XtkR8K', 'Kumar', 'Shaanu', 'shaanu@gmail.com', 'admin', '', '$2y$10$iusesomecrazystrings22'),
(5, 'manish', '$2y$10$vFhPhLv9ZWUxGasImBeD5uX0hR.2dJIz4W3X0RVA3eaPY9aAn5Wuq', 'Manish', 'Yadav', 'manish@gmail.com', 'admin', '', '$2y$10$iusesomecrazystrings22');

-- --------------------------------------------------------

--
-- Table structure for table `users_online`
--

CREATE TABLE `users_online` (
  `id` int(3) NOT NULL,
  `session` varchar(255) NOT NULL,
  `time` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_online`
--

INSERT INTO `users_online` (`id`, `session`, `time`) VALUES
(1, '91md9096f8gkp8cefhtdo5ije5', 1540159699),
(2, 'prqic4rulh7j6erh95ovdpunb5', 1540160746),
(3, 'q7aa9ggfe6fl0v4trhhhuhgeb6', 1540233552),
(4, '1qqvb3v6vbido6vv899ul7ure0', 1540233664),
(5, 'regr1j4o9ajj0h6od8go03j933', 1540238717),
(6, 'd43npojc61albl1m0hd8eqrki2', 1540238907),
(7, 'gd98kqn48qc2tavi5f2dsvj344', 1540241095),
(8, '57q5gjmi7b5ij1gl7e2h7vbr50', 1540243847),
(9, '8rv6hip4tb3arde3jjoud36ku4', 1540245365),
(10, '0cl0d43ubi1gh9la3op60h3ul6', 1540285923),
(11, 'jimvt1r3avircfh24mgjbael83', 1540289958),
(12, '4emsc5506i3tffk5rtsa95sdh1', 1540290045),
(13, '5d1fn6tvbcaj9pgd4a8c76p7v4', 1540290267),
(14, 'rudrb18ugh0i57sl36ed4d1kq4', 1540290828),
(15, 'evk8n5g52o26v4r1vctthrke85', 1540302718),
(16, 'nr532vc68r4e79jq08d69qed50', 1540435410),
(17, 'ungahi0jlna1kmo0av943dugu1', 1540477568),
(18, '2jumh1qmvuatd6fi3kji6eoso2', 1540489065),
(19, 'a4r9ls2a7v2bgshu2757119vs3', 1540493098),
(20, 'gprkshmloc61b075js310eerh6', 1540493616),
(21, 'f981no1sjjpi475cngnjj08h50', 1540495641),
(22, 'jhv8ksccac39gigbkaa0scglk3', 1540496465),
(23, '3b09hvpet1dm8iej46en4sd9g4', 1540496562),
(24, 'jv4rtnqd4g38iu6s7voh0fb0e0', 1540496582),
(25, 'itfbm17ii7gvsd6qgqtsi7pcm0', 1540497802),
(26, 'coa3ujr6u5r3sp3qlk3csgr037', 1540497973),
(27, 'bmeq20sei4afg7fabjch6ibg06', 1540501270),
(28, 'd205kah7qfhsfismnm1s7as1j5', 1540647352),
(29, 'rvpem198c4700mom4e4oofeq13', 1540652564),
(30, 'e4dceldini53664aojt2n2uu63', 1540660866),
(31, 's7j7vbuq75m9266e428r0ecek0', 1540671349),
(32, '5b3seio8nll7bd78f4s694gku2', 1540672241),
(33, '1boe36c9qgvrvhgd963ga7r1c3', 1540672365),
(34, 'sr0khdvlnv8g4io699l7epjev2', 1540729310),
(35, '9ll6lbruoo9ecks9jerdhpg2a1', 1540824269),
(36, '3hco2ccu1t0b1kj1o57756e3h2', 1540919402),
(37, '433i6msda6td9r62efnc3opb87', 1541143990);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `susers`
--
ALTER TABLE `susers`
  ADD PRIMARY KEY (`suser_id`);

--
-- Indexes for table `susers_online`
--
ALTER TABLE `susers_online`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users_online`
--
ALTER TABLE `users_online`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `bid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `susers`
--
ALTER TABLE `susers`
  MODIFY `suser_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `susers_online`
--
ALTER TABLE `susers_online`
  MODIFY `sid` int(3) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users_online`
--
ALTER TABLE `users_online`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
