-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2020-04-30 02:03:15
-- 伺服器版本： 10.4.11-MariaDB
-- PHP 版本： 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `school`
--

-- --------------------------------------------------------

--
-- 資料表結構 `student`
--

CREATE TABLE `student` (
  `id` int(10) UNSIGNED NOT NULL COMMENT 'id',
  `acc` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '帳號',
  `pw` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '密碼',
  `name` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '名字',
  `email` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電子信箱',
  `tel` varchar(16) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '電話',
  `create_time` datetime NOT NULL COMMENT '建立時間',
  `update_time` datetime NOT NULL COMMENT '更新時間',
  `birthday` date DEFAULT NULL COMMENT '生日'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- 傾印資料表的資料 `student`
--

INSERT INTO `student` (`id`, `acc`, `pw`, `name`, `email`, `tel`, `create_time`, `update_time`, `birthday`) VALUES
(13, 'mem001', '12345', '王大dsafdsafsadf', 'mem@gmail.com', '0800000666', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '2020-04-13'),
(17, 'mem002', 'test002', '趙', 'zhou1@yahoo.com', '0930300311', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '1990-06-01'),
(18, 'mem002', 'test002', '錢二', 'cheng@hotmail.com', '0933666999', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '1933-05-07'),
(23, 'adsf', 'adsf', 'adsf', 'adfs', 'adf', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '2020-04-13'),
(24, 'guest1', 'adslf;kjasd', 'guest1', 'dsafdsaf@dsafasdf', '32406540', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '2020-04-01'),
(25, 'adsfdasf', 'sadfasf', 'adsfadsf', 'adsfsa@dsafadsf', '65406540', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '2020-04-02'),
(26, 'adsfasd', 'asdfadsf', '123213', 'adsfadsf@sadfadsf', '65409840', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '2020-04-06'),
(27, 'dsafsd', 'dsafdsaf', '123123', 'adsfdsaf@dsafdsaf', '75607856', '2020-04-29 00:00:00', '2020-04-29 00:00:00', '2020-04-07');

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `student`
--
ALTER TABLE `student`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'id', AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
