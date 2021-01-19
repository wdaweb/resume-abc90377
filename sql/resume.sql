-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- 主機： 127.0.0.1
-- 產生時間： 2021-01-19 16:01:29
-- 伺服器版本： 10.4.14-MariaDB
-- PHP 版本： 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `resume`
--

-- --------------------------------------------------------

--
-- 資料表結構 `ab`
--

CREATE TABLE `ab` (
  `id` int(11) UNSIGNED NOT NULL,
  `txt` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `ab`
--

INSERT INTO `ab` (`id`, `txt`, `sh`) VALUES
(6, '您好！我是歐陽欣宜。\r\n今年畢業於國立東華大學華文文學系，並於九月開始在泰山職訓局「PHP資料庫網頁設計班」進修。\r\n喜歡思考、創作與學習新事物，以成為後端／全端工程師為目標努力中。', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `contact`
--

INSERT INTO `contact` (`id`, `title`, `sh`) VALUES
(1, 'abc870710@gmail.com', 1),
(2, '0933-654-273', 1);

-- --------------------------------------------------------

--
-- 資料表結構 `edu`
--

CREATE TABLE `edu` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `txt` text NOT NULL,
  `time` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `edu`
--

INSERT INTO `edu` (`id`, `title`, `txt`, `time`, `sh`, `rank`) VALUES
(1, '泰山職業訓練場－PHP資料庫網頁設計班', '畢業後有幸錄取泰山職業訓練場，展開為期六個月的學習旅程。除了學習後端技術如PHP及MySQL等資料庫應用， 也學會了前端技術，及串接API等程式技能，能從無到有完成功能齊全的網站。\r\n透過半年的學習，確定自己喜歡寫程式時的抽象思考，也喜歡發現問題並解決問題的過程， 目前正持續精進程式技術，希望能在程式設計領域發揮所學。', '2020 / 9 ~ 2020 / 3', 1, 1),
(2, '國立東華大學－華文文學系', '因高中對寫作與文學充滿興趣，選擇就讀以現代文學和創作為主的華文文學系。 在學期間積極參與校內外活動，如為系刊撰寫採訪稿，並獨自完成畢業作品的企劃、撰寫與印刷等。 畢業後雖然決定轉換跑道，但在華文文學系的四年裡養成了我對自身與周遭敏銳的觀察力，學習將體驗到的事物消化理解後，轉化成有趣又使人愉悅的作品。', '2016 / 9 ~ 2020 / 6', 1, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `img`
--

CREATE TABLE `img` (
  `id` int(11) NOT NULL,
  `img` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `img`
--

INSERT INTO `img` (`id`, `img`, `sh`) VALUES
(4, 'profile.jpeg', 1),
(6, '螢幕擷取畫面 (1).png', 0);

-- --------------------------------------------------------

--
-- 資料表結構 `job`
--

CREATE TABLE `job` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `txt` text NOT NULL,
  `time` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `rank` int(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `job`
--

INSERT INTO `job` (`id`, `title`, `txt`, `time`, `sh`, `rank`) VALUES
(1, '台北二二八紀念館－實習生', '歷史文物建檔及史料文件管理\r\n館內展覽接待與活動導覽\r\n協助主管處理行政文書作業', '2019 / 7 ~ 2019 / 8', 1, 1),
(2, '編輯採訪社－社團編輯', '雜誌題材發想與企劃\r\n根據雜誌主題進行採訪並撰寫文章\r\n規劃及執行社團活動', '2017 / 9 ~ 2018 / 9', 1, 2);

-- --------------------------------------------------------

--
-- 資料表結構 `pf`
--

CREATE TABLE `pf` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `txt` text NOT NULL,
  `href` text NOT NULL,
  `sh` int(1) UNSIGNED NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `pf`
--

INSERT INTO `pf` (`id`, `title`, `txt`, `href`, `sh`, `img`) VALUES
(2, 'PHP萬年曆', '可透過選單傳值，任意切換月份與年份', 'http://220.128.133.15/s1090411/calendar/', 1, 'a1.png'),
(3, 'PHP發票兌獎系統', '對獎功能(一鍵對多張發票)\r\n計算中獎總金額與張數', 'http://220.128.133.15/s1090411/invoice/', 1, 'a0.png'),
(4, 'Javascript選色器', '切換圖形顏色與形狀', 'http://220.128.133.15/s1090411/colorshape/', 0, 'a2.png');

-- --------------------------------------------------------

--
-- 資料表結構 `skill`
--

CREATE TABLE `skill` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `sh` int(11) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `skill`
--

INSERT INTO `skill` (`id`, `title`, `sh`, `rank`) VALUES
(8, '後端技能', 1, 1),
(9, '前端技能', 1, 2),
(10, '語言技能', 1, 3);

-- --------------------------------------------------------

--
-- 資料表結構 `skillchild`
--

CREATE TABLE `skillchild` (
  `id` int(11) NOT NULL,
  `skillChild` text NOT NULL,
  `parent` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `skillchild`
--

INSERT INTO `skillchild` (`id`, `skillChild`, `parent`) VALUES
(10, 'PHP', 8),
(11, 'MySQL', 8),
(12, 'Html/CSS', 9),
(13, 'Bootstrap', 9),
(14, 'JavaScript', 9),
(15, 'Photoshop', 9),
(16, 'Illustrator', 9),
(23, 'TOEIC  730分', 10);

-- --------------------------------------------------------

--
-- 資料表結構 `want`
--

CREATE TABLE `want` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `sh` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- 傾印資料表的資料 `want`
--

INSERT INTO `want` (`id`, `title`, `sh`) VALUES
(1, '全職', 1),
(6, '後端工程師', 1),
(7, '全端工程師', 1),
(8, '暑期實習生', 0);

--
-- 已傾印資料表的索引
--

--
-- 資料表索引 `ab`
--
ALTER TABLE `ab`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `edu`
--
ALTER TABLE `edu`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `img`
--
ALTER TABLE `img`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `pf`
--
ALTER TABLE `pf`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `skillchild`
--
ALTER TABLE `skillchild`
  ADD PRIMARY KEY (`id`);

--
-- 資料表索引 `want`
--
ALTER TABLE `want`
  ADD PRIMARY KEY (`id`);

--
-- 在傾印的資料表使用自動遞增(AUTO_INCREMENT)
--

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `ab`
--
ALTER TABLE `ab`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `edu`
--
ALTER TABLE `edu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `img`
--
ALTER TABLE `img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `job`
--
ALTER TABLE `job`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `pf`
--
ALTER TABLE `pf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skill`
--
ALTER TABLE `skill`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `skillchild`
--
ALTER TABLE `skillchild`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- 使用資料表自動遞增(AUTO_INCREMENT) `want`
--
ALTER TABLE `want`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
