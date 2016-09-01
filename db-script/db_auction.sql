-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2016 at 02:19 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_auction`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_auctions`
--

CREATE TABLE `tbl_auctions` (
  `id` int(10) NOT NULL,
  `bid` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `pdetails` tinytext NOT NULL,
  `paddress` tinytext NOT NULL,
  `res_price` int(10) NOT NULL,
  `auction_date` varchar(40) NOT NULL,
  `auc_time` varchar(20) NOT NULL,
  `p_image` varchar(255) NOT NULL,
  `p_image_thumb` varchar(250) NOT NULL,
  `status` varchar(10) NOT NULL,
  `uid` int(10) NOT NULL,
  `bdate` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_auctions`
--

INSERT INTO `tbl_auctions` (`id`, `bid`, `cid`, `cat_id`, `pdetails`, `paddress`, `res_price`, `auction_date`, `auc_time`, `p_image`, `p_image_thumb`, `status`, `uid`, `bdate`) VALUES
(27, 15, 15, 5, 'Old and antique chair set available. Get history to your house now on a reasonable price.', 'egserhbrdjngmrtgerdgvdbsdfsb ngdfbn.', 13000, '15-8-2016', '3:56 pm', 'f929a2993611e255dc715fd61deac9b7.jpg', 'a98bb2856e462811c7f9d1a687d62a20.jpg', 'open', 5, '2016-08-23 18:37:12'),
(28, 13, 13, 7, 'Raw paper bundle and stuff for sale.', 'sevdbgnhgrdgsvdbdfgnytrfgegvfdbdgthrsgsb.', 2300, '12-9-2016', '12:30pm', 'a01b840d00f5afcca42bc1096e4c2fa0.png', 'cd6651133302afa1ec1f2febca0c00aa.png', 'open', 5, '2016-08-23 18:44:57'),
(25, 14, 14, 4, 'Chemistry lab apparatus ready to be sold to the willing buyer. Get it now on a very reasonable price.', 'asefdfbshcbsjkhvksdhvcksvcywev road, near dgcjavdjuh.', 1500, '25-8-2016', '6:00 pm', 'b086156a971b67dc12091887bd470821.jpg', '567de6da8e289c830d77b0ca1f695c70.jpg', 'open', 5, '2016-08-23 18:33:59'),
(22, 13, 13, 1, 'Very old and interactive computer system is for sale. Has some cool features and buttons.', 'abcdefghijklmnopqrstuvwxyz, road.', 23000, '12-9-2016', '12:00 pm', '82dc6ec9826ec56ac095a28c41366b50.png', '55f53a0679b80e4679a743826ed39954.png', 'open', 1, '2016-08-23 11:57:18'),
(23, 14, 14, 2, 'VGA with audio to HDMI available for sale. Really cool stuff.', 'nxsuhaucnbauchbuvbauhcvbauibcuhbudhva, road.', 1000, '23-8-2016', '12:00am', '859cccb63637d3febf9e6830157ce634.png', '07b53a26758c7d41386df68d6b0c085c.png', 'open', 1, '2016-08-23 11:58:51'),
(24, 15, 15, 3, 'The cool bus with interactive cool seats and look is ready to be sold. It''s a school bus.', 'sdawfawfergrthvafcbchwbuwegucvw, near cnwjcbwj, road.', 65000, '21-9-2016', '4:50 pm', '880e470066ef1b3545af345c49673ece.jpg', '5b258025509cd5809cb028533c6af0b3.jpg', 'open', 1, '2016-08-23 12:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_banks`
--

CREATE TABLE `tbl_banks` (
  `id` int(10) NOT NULL,
  `bname` varchar(255) NOT NULL,
  `address` tinytext NOT NULL,
  `pn_no` varchar(100) NOT NULL,
  `city` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_banks`
--

INSERT INTO `tbl_banks` (`id`, `bname`, `address`, `pn_no`, `city`) VALUES
(15, 'Zarai Tariqyati bank', 'sdcavsfvsfdvbfbbd, branch', '1234-5678901', 15),
(14, 'Habib bank ltd', 'sdasfcdergvergrg, Branch', '1234-5678901', 14),
(9, 'Corporation Bank of India', 'Plot no 120/A, \r\nNavi peth,\r\nSanath Nagar', '022-65232562', 10),
(13, 'The Bank of punjab', 'hskhagxuyhscu Brnach,', '1234-5678901', 13),
(11, 'State Bank of India', 'Plot no 120/A, \r\nNavi peth,\r\nSanath Nagar', '2584-254521', 7),
(12, 'Corporation Bank of India', 'Plot no 120/A, \r\nNavi peth,\r\nSanath Nagar', '0257-5588258', 12);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bids`
--

CREATE TABLE `tbl_bids` (
  `id` int(255) NOT NULL,
  `auction_id` int(255) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `phone` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `price` int(255) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_bids`
--

INSERT INTO `tbl_bids` (`id`, `auction_id`, `name`, `phone`, `email`, `price`, `date_created`) VALUES
(1, 25, 'Mani', '03039511806', 'abdul.rehman@purelogics.net', 6, '2016-08-29 10:34:37');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_categories`
--

CREATE TABLE `tbl_categories` (
  `id` int(10) NOT NULL,
  `cname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_categories`
--

INSERT INTO `tbl_categories` (`id`, `cname`) VALUES
(1, 'Computer systems'),
(2, 'Electronics accessories '),
(3, 'Automotives'),
(4, 'Apparatus'),
(5, 'Furniture(USED)'),
(6, 'Services'),
(7, 'Raw Material');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cities`
--

CREATE TABLE `tbl_cities` (
  `id` int(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_cities`
--

INSERT INTO `tbl_cities` (`id`, `city`, `state`) VALUES
(15, 'Bahawalpur', 'Balochistan'),
(14, 'Karachi', 'Sindh'),
(13, 'Lahore', 'Punjab');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `is_admin` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `pwd`, `bdate`, `is_admin`) VALUES
(5, 'localhost', 'localhost', '2016-08-23 11:44:08', 'Admin'),
(4, 'arfa', 'arfa123', '2016-08-23 11:43:50', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_auctions`
--
ALTER TABLE `tbl_auctions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_bids`
--
ALTER TABLE `tbl_bids`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_auctions`
--
ALTER TABLE `tbl_auctions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `tbl_banks`
--
ALTER TABLE `tbl_banks`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_bids`
--
ALTER TABLE `tbl_bids`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_categories`
--
ALTER TABLE `tbl_categories`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tbl_cities`
--
ALTER TABLE `tbl_cities`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
