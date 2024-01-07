-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-01-07 11:38:13
-- 伺服器版本： 10.4.28-MariaDB
-- PHP 版本： 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `finalproject`
--

-- --------------------------------------------------------

--
-- 資料表結構 `depstore`
--

CREATE TABLE `depstore` (
  `UserID` bigint(15) NOT NULL,
  `StoreCode` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `ServiceHours` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `depstore`
--

INSERT INTO `depstore` (`UserID`, `StoreCode`, `Description`, `ServiceHours`) VALUES
(1, 'AngelLin', '專賣各種東西的賣家', '早上11點到晚上7點'),
(4, 'Vivian', '明星周邊', '12:00~22:00');

-- --------------------------------------------------------

--
-- 資料表結構 `item`
--

CREATE TABLE `item` (
  `ItemID` bigint(15) NOT NULL,
  `StoreCode` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Suppliername` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `item`
--

INSERT INTO `item` (`ItemID`, `StoreCode`, `Name`, `Price`, `Description`, `Suppliername`) VALUES
(2, 'AngelLin', '白雪公主', '300', '童話書', 'A'),
(7, 'AngelLin', 'aaa', '100', 'aaa', 'A'),
(9, 'AngelLin', 'bbb', '200', 'bbb', 'B'),
(10, 'Vivian', '睡美人', '200', '童話書', 'A');

-- --------------------------------------------------------

--
-- 資料表結構 `itemsupplier`
--

CREATE TABLE `itemsupplier` (
  `Name` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `itemsupplier`
--

INSERT INTO `itemsupplier` (`Name`, `Address`, `Phone`) VALUES
('A', '台北市信義區松仁路97號1樓', '(02)2758-3868'),
('B', 'bbb', '01234567');

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `UserID` bigint(15) NOT NULL,
  `Identity` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `StoreCode` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- 傾印資料表的資料 `user`
--

INSERT INTO `user` (`UserID`, `Identity`, `Name`, `Password`, `StoreCode`) VALUES
(1, '商家', 'test', 'test', 'AngelLin'),
(2, '顧客', 'test1', 'test1', NULL),
(4, '商家', 'test2', 'test2', 'aaa'),
(6, '顧客', 'test3', 'test3', NULL);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `depstore`
--
ALTER TABLE `depstore`
  ADD PRIMARY KEY (`StoreCode`),
  ADD KEY `user` (`UserID`);

--
-- 資料表索引 `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `StoreCode` (`StoreCode`),
  ADD KEY `Suppliername` (`Suppliername`);

--
-- 資料表索引 `itemsupplier`
--
ALTER TABLE `itemsupplier`
  ADD PRIMARY KEY (`Name`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `item`
--
ALTER TABLE `item`
  MODIFY `ItemID` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `user`
--
ALTER TABLE `user`
  MODIFY `UserID` bigint(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 已傾印資料表的限制式
--

--
-- 資料表的限制式 `depstore`
--
ALTER TABLE `depstore`
  ADD CONSTRAINT `depstore_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的限制式 `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`StoreCode`) REFERENCES `depstore` (`StoreCode`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`Suppliername`) REFERENCES `itemsupplier` (`Name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
