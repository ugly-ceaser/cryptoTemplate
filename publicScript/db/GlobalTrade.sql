-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 02, 2022 at 09:45 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `GlobalTrade`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminAccount`
--

CREATE TABLE `adminAccount` (
  `id` varchar(200) NOT NULL,
  `BtcAddrress` varchar(200) NOT NULL,
  `UsdtAddress` varchar(200) NOT NULL,
  `EthAddress` varchar(200) NOT NULL,
  `btcBalance` int(20) NOT NULL,
  `UsdtBalance` int(20) NOT NULL,
  `EthBalance` int(20) NOT NULL,
  `totalBalance` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `adminDetails`
--

CREATE TABLE `adminDetails` (
  `id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminDetails`
--

INSERT INTO `adminDetails` (`id`, `fname`, `lname`, `email`, `username`, `password`) VALUES
('adm-0001', 'Jace', 'Alexander', 'jacealex151@gmail.com', 'raph', '0000');

-- --------------------------------------------------------

--
-- Table structure for table `GeneralAccount`
--

CREATE TABLE `GeneralAccount` (
  `id` varchar(200) NOT NULL,
  `trxId` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `trxType` varchar(200) NOT NULL,
  `trxStatus` varchar(200) NOT NULL,
  `walletName` varchar(200) NOT NULL,
  `coin` varchar(200) NOT NULL,
  `coinNetwork` varchar(200) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `GeneralAccount`
--

INSERT INTO `GeneralAccount` (`id`, `trxId`, `amount`, `trxType`, `trxStatus`, `walletName`, `coin`, `coinNetwork`, `datee`) VALUES
('470129503', '1', 87678, 'withdraw', 'pending', '', 'btc', '20', '2022-03-30'),
('470129503', '97865767byr6i75u6i78076o8iu6gfgfd', 30000, 'deposit', 'pending', 'admin', 'usdt', 'TRC20', '2022-03-30'),
('470129503', 'retre44534e5tdgrefrr', 30000, 'deposit', 'pending', 'admin', 'btc', 'Bitcoin Network', '2022-03-30'),
('470129503', 'wfdgfwrsefsrerfrevfd', 30000, 'deposit', 'pending', 'admin', 'btc', '', '2022-03-30');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `messageId` int(200) NOT NULL,
  `senderId` varchar(200) NOT NULL,
  `recieverId` varchar(200) NOT NULL,
  `msgSubject` text NOT NULL,
  `message` text NOT NULL,
  `messageStatus` varchar(200) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`messageId`, `senderId`, `recieverId`, `msgSubject`, `message`, `messageStatus`, `datee`) VALUES
(1, '23455343', 'admin', 'failed deposit', 'wdffvcx xdsdsxfd', 'sent', '2022-03-29'),
(2, '470129503', 'admin', 'another one', 'jhgjcooucjxigfvciofdhvicoedfi0tdofotri', 'sent', '2022-03-29'),
(3, '470129503', 'admin', 'xfvhgnvb', 'zsddfsdbhgfbvttgh', 'sent', '2022-03-29'),
(4, '470129503', 'admin', 'aaxfgdfbhgnbh', 'dxfscryvtbchtg', 'sent', '2022-03-29'),
(5, '470129503', 'admin', 'chioma', 'xswfcbvtjyghbmnujhnbg', 'sent', '2022-03-29'),
(6, '470129503', 'admin', 'sdavfhgdfd', 'retwrcegrytrergf', 'sent', '2022-03-29'),
(7, '470129503', 'admin', 'lklllmlmm', 'bjkm;nbijbn', 'sent', '2022-03-30'),
(8, '470129503', 'admin', 'compose', 'werstrtcvf', 'sent', '2022-03-30'),
(9, '470129503', 'admin', '534534567634', 'fgdfgvkbhjfjghbkj', 'sent', '2022-03-30'),
(10, '', '', '', '', '', '2022-03-30'),
(11, '', '', '', '', '', '2022-03-30'),
(12, '', '', '', '', '', '2022-03-30'),
(13, '', '', '', '', '', '2022-04-01'),
(14, '470129503', 'admin', 'nhftdghfgjhj', 'vdgfsgdfhghjl', 'sent', '2022-04-01'),
(15, '470129503', 'admin', 'new one', 'one one', 'sent', '2022-04-01');

-- --------------------------------------------------------

--
-- Table structure for table `newUser`
--

CREATE TABLE `newUser` (
  `id` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `datee` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newUser`
--

INSERT INTO `newUser` (`id`, `email`, `datee`) VALUES
('1', 'sdfac@ewd', '2022-03-20'),
('4E1D0CF8A', 'martins.paraclet@gmail.com', '2022-03-23'),
('dDSG', 'segemaneke@gmail.com', '2022-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `trxRequest`
--

CREATE TABLE `trxRequest` (
  `id` varchar(200) NOT NULL,
  `trxType` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `trxStatus` int(200) NOT NULL,
  `requestDate` date NOT NULL,
  `approvalDate` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userAccount`
--

CREATE TABLE `userAccount` (
  `id` varchar(200) NOT NULL,
  `walletName` varchar(200) NOT NULL,
  `walletAddress` varchar(200) NOT NULL,
  `cryptoCurrency` varchar(200) NOT NULL,
  `cryptoNet` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userAccount`
--

INSERT INTO `userAccount` (`id`, `walletName`, `walletAddress`, `cryptoCurrency`, `cryptoNet`) VALUES
('470129503', 'shaza', 'i6rhfgvjchjghkgjh', 'btc', '20');

-- --------------------------------------------------------

--
-- Table structure for table `userDeposit`
--

CREATE TABLE `userDeposit` (
  `id` varchar(200) NOT NULL,
  `walletName` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `status` varchar(200) NOT NULL,
  `coin` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `userWithdrawal`
--

CREATE TABLE `userWithdrawal` (
  `id` varchar(200) NOT NULL,
  `walletName` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `coin` varchar(200) NOT NULL,
  `address` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `verifiedUser`
--

CREATE TABLE `verifiedUser` (
  `id` varchar(200) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `lname` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `phoneNumber` varchar(200) NOT NULL,
  `datee` date NOT NULL,
  `file` varchar(200) NOT NULL,
  `lastlog` date NOT NULL,
  `availableBalance` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `verifiedUser`
--

INSERT INTO `verifiedUser` (`id`, `fname`, `lname`, `email`, `username`, `pass`, `phoneNumber`, `datee`, `file`, `lastlog`, `availableBalance`) VALUES
('470129503', 'hjk', 'gjhjgh', 'stephenieonyia@gmail.com', 'Martins', 'dfS2', '07404316287', '2022-03-28', '', '2022-04-02', 30000),
('906512403', 'martins', 'ugo', 'martins.paraclet@gmail.com', 'uglyceaser', '8d0f', '07067179619', '2022-03-23', '', '2022-03-29', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminAccount`
--
ALTER TABLE `adminAccount`
  ADD UNIQUE KEY `adminIdActAddress` (`id`,`BtcAddrress`,`UsdtAddress`,`EthAddress`) USING HASH;

--
-- Indexes for table `adminDetails`
--
ALTER TABLE `adminDetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`,`username`);

--
-- Indexes for table `GeneralAccount`
--
ALTER TABLE `GeneralAccount`
  ADD UNIQUE KEY `trxId` (`trxId`,`amount`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`messageId`);

--
-- Indexes for table `newUser`
--
ALTER TABLE `newUser`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `userEmail` (`email`);

--
-- Indexes for table `trxRequest`
--
ALTER TABLE `trxRequest`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `trxType` (`trxType`);

--
-- Indexes for table `userAccount`
--
ALTER TABLE `userAccount`
  ADD UNIQUE KEY `userId` (`id`),
  ADD UNIQUE KEY `btcAddress` (`walletName`),
  ADD UNIQUE KEY `usdtAddress` (`walletAddress`),
  ADD UNIQUE KEY `ethAddress` (`cryptoCurrency`);

--
-- Indexes for table `userDeposit`
--
ALTER TABLE `userDeposit`
  ADD UNIQUE KEY `trxIdxId` (`walletName`,`id`);

--
-- Indexes for table `userWithdrawal`
--
ALTER TABLE `userWithdrawal`
  ADD UNIQUE KEY `userIdtrxId` (`id`,`walletName`);

--
-- Indexes for table `verifiedUser`
--
ALTER TABLE `verifiedUser`
  ADD UNIQUE KEY `userId` (`id`),
  ADD UNIQUE KEY `userEmail` (`email`),
  ADD UNIQUE KEY `userName` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `messageId` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
