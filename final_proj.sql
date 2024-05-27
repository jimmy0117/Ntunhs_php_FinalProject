-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2024-05-26 15:27:12
-- 伺服器版本： 10.4.22-MariaDB
-- PHP 版本： 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫: `final_proj`
--

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `ID` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `link` varchar(1000) NOT NULL,
  `date` date NOT NULL,
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `news`
--

INSERT INTO `news` (`ID`, `title`, `link`, `date`, `view`) VALUES
(1, '爬蟲教學1-最原始的方式，學會看html檔', 'https://hackmd.io/@real7660/S1VEnSQd5', '2024-05-26', 0),
(2, '爬蟲教學2-讓電腦讀懂網路的json檔', 'https://hackmd.io/@real7660/rydue8X_c', '2024-05-26', 0),
(3, '爬蟲教學3-對下載的檔案網址做直接處理', 'https://hackmd.io/@real7660/rJDPMIm_5', '2024-05-26', 0),
(4, '爬蟲教學4-下載圖片要用二進位', 'https://hackmd.io/@real7660/BkffUZIac', '2024-05-26', 0),
(5, '寫作訓練', 'https://hackmd.io/@real7660/rJcvMDcmR', '2024-05-26', 0),
(1234, 'google', 'google.com', '2024-05-26', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
