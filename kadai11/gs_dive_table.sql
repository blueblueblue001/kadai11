-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- ホスト: localhost
-- 生成日時: 2023 年 7 月 17 日 12:53
-- サーバのバージョン： 10.4.28-MariaDB
-- PHP のバージョン: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `gs_db`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `gs_dive_table`
--

CREATE TABLE `gs_dive_table` (
  `id` int(12) NOT NULL,
  `divingNumber` int(12) NOT NULL,
  `date` date NOT NULL,
  `location` text NOT NULL,
  `diveSite` text NOT NULL,
  `rating` text NOT NULL,
  `comment` text NOT NULL,
  `photo` varchar(255) NOT NULL,
  `latitude` float(16,14) NOT NULL,
  `longitude` float(16,14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `gs_dive_table`
--

INSERT INTO `gs_dive_table` (`id`, `divingNumber`, `date`, `location`, `diveSite`, `rating`, `comment`, `photo`, `latitude`, `longitude`) VALUES
(123, 5, '2023-07-15', 'Namibia, Omaheke', '', '⭐️⭐️⭐️⭐️', '', 'coral_2.png', -23.38890075683594, 19.32769775390625),
(124, 6, '2023-07-15', 'Uruguay, Salto Department', '', '⭐️⭐️⭐️', '', 'coral_3.jpg', -31.23394012451172, -57.83203125000000);

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `gs_dive_table`
--
ALTER TABLE `gs_dive_table`
  ADD PRIMARY KEY (`id`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `gs_dive_table`
--
ALTER TABLE `gs_dive_table`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=134;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
