-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2017 at 10:10 PM
-- Server version: 5.7.17-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pps`
--

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `participant_id` int(10) NOT NULL,
  `team_id` int(10) NOT NULL,
  `first_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `age` int(2) NOT NULL,
  `shturm_try_1` float DEFAULT NULL,
  `shturm_try_2` float DEFAULT NULL,
  `shturm` float DEFAULT NULL,
  `shturm_zabig` int(3) DEFAULT NULL,
  `sto_metriv_try_1` float DEFAULT NULL,
  `sto_metriv_try_2` float DEFAULT NULL,
  `sto_metriv` float DEFAULT NULL,
  `sto_metriv_zabig` int(3) DEFAULT NULL,
  `dvoborstvo` float DEFAULT NULL,
  `doroga_number` int(11) DEFAULT NULL,
  `shturm_result` int(10) DEFAULT NULL,
  `sto_metriv_result` int(11) DEFAULT NULL,
  `dvoborstvo_result` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`participant_id`, `team_id`, `first_name`, `last_name`, `age`, `shturm_try_1`, `shturm_try_2`, `shturm`, `shturm_zabig`, `sto_metriv_try_1`, `sto_metriv_try_2`, `sto_metriv`, `sto_metriv_zabig`, `dvoborstvo`, `doroga_number`, `shturm_result`, `sto_metriv_result`, `dvoborstvo_result`) VALUES
(449, 97, 'Богдан Ігорович', 'Демків', 27, NULL, NULL, 65, 26, NULL, NULL, 334, 26, 399, 4, 8, 12, 12),
(448, 97, 'Ігор Володимирович', 'Сосновський', 28, NULL, NULL, 65, 21, NULL, NULL, 334, 21, 399, 4, 8, 12, 12),
(447, 97, 'Василь Євстахович ', 'Максимів', 28, NULL, NULL, 65, 16, NULL, NULL, 334, 16, 399, 4, 8, 12, 12),
(446, 97, 'Андрій Степанович', 'Щасливий', 31, NULL, NULL, 65, 11, NULL, NULL, 334, 11, 399, 4, 8, 12, 12),
(445, 97, 'Михайло Володимирович', 'Мостовий', 26, NULL, NULL, 65, 6, NULL, NULL, 334, 6, 399, 4, 8, 12, 12),
(444, 97, 'Іван Зиновійович', 'Кушнір', 29, 45, NULL, 45, 1, 87, NULL, 87, 1, 132, 4, 6, 10, 10),
(443, 96, 'Ігор Васильович  ', 'Москвин', 34, NULL, NULL, 65, 26, NULL, NULL, 334, 26, 399, 3, 8, 12, 12),
(442, 96, 'Остап Георгійович', 'Вікарчук', 30, NULL, NULL, 65, 21, NULL, NULL, 334, 21, 399, 3, 8, 12, 12),
(441, 96, 'Василь Іванович ', 'Березніцький', 30, NULL, NULL, 65, 16, NULL, NULL, 334, 16, 399, 3, 8, 12, 12),
(440, 96, 'Віталій Богданович  ', 'Пророк', 27, NULL, NULL, 65, 11, NULL, NULL, 334, 11, 399, 3, 8, 12, 12),
(439, 96, 'Олег Васильович  ', 'Стасів', 27, NULL, NULL, 65, 6, NULL, NULL, 334, 6, 399, 3, 8, 12, 12),
(438, 96, 'Володимир Васильович', 'Івасишин ', 27, 9, NULL, 9, 1, 3, NULL, 3, 1, 12, 3, 5, 2, 2),
(437, 95, 'Віталій Романович', 'Пуцентела', 33, NULL, NULL, 65, 26, NULL, NULL, 334, 26, 399, 2, 8, 12, 12),
(436, 95, 'Віталій Вікторович', 'Поважний', 35, NULL, NULL, 65, 21, NULL, NULL, 334, 21, 399, 2, 8, 12, 12),
(435, 95, 'Лев Іванович', 'Левко', 34, NULL, NULL, 65, 16, NULL, NULL, 334, 16, 399, 2, 8, 12, 12),
(434, 95, 'Олег Романович', 'Пуцентела', 28, NULL, NULL, 65, 11, NULL, NULL, 334, 11, 399, 2, 8, 12, 12),
(433, 95, 'Микола Петрович', 'Погорецький', 27, NULL, NULL, 65, 6, NULL, NULL, 334, 6, 399, 2, 8, 12, 12),
(432, 95, 'Іван Іванович ', 'Боднарук', 25, 3, NULL, 3, 1, 84, NULL, 84, 1, 87, 2, 2, 9, 9),
(431, 94, 'Андрій Володимирович', 'Лещишин', 28, NULL, NULL, 65, 26, NULL, NULL, 334, 26, 399, 1, 8, 12, 12),
(430, 94, 'Ярослав Володимирович', 'Гишка', 29, NULL, NULL, 65, 21, NULL, NULL, 334, 21, 399, 1, 8, 12, 12),
(429, 94, 'Андрій Іванович', 'Лещишин', 29, NULL, NULL, 65, 16, NULL, NULL, 334, 16, 399, 1, 8, 12, 12),
(428, 94, 'Степан Васильович', 'Кічман', 24, NULL, NULL, 65, 11, NULL, NULL, 334, 11, 399, 1, 8, 12, 12),
(427, 94, 'Степан Михайлович', 'Вітковський ', 25, NULL, NULL, 65, 6, NULL, NULL, 334, 6, 399, 1, 8, 12, 12),
(426, 94, 'Богдан Іванович', 'Патра', 24, 2, 0.5, 0.5, 1, 60, NULL, 60, 1, 60.5, 1, 1, 6, 5),
(450, 98, 'Адрій Євгенович', 'Павліна', 25, 6, NULL, 6, 2, 56, NULL, 56, 2, 62, 1, 4, 5, 6),
(451, 98, 'Мирослав Романович', 'Паньків', 22, NULL, NULL, 65, 7, NULL, NULL, 334, 7, 399, 1, 8, 12, 12),
(452, 98, 'Петро Петрович', 'Костинюк', 26, NULL, NULL, 65, 12, NULL, NULL, 334, 12, 399, 1, 8, 12, 12),
(453, 98, 'Володимир Іванович', 'Конопада', 26, NULL, NULL, 65, 17, NULL, NULL, 334, 17, 399, 1, 8, 12, 12),
(454, 98, 'Роман Андрійович', 'Фарина', 22, NULL, NULL, 65, 22, NULL, NULL, 334, 22, 399, 1, 8, 12, 12),
(455, 98, 'Олександр Дмитрович', 'Токарчук', 36, NULL, NULL, 65, 27, NULL, NULL, 334, 27, 399, 1, 8, 12, 12),
(456, 99, 'Микола Богданович', 'Іванах', 24, 3, NULL, 3, 2, 84, NULL, 84, 2, 87, 2, 2, 9, 9),
(457, 99, 'Ігор Ярославович', 'Гануля', 36, NULL, NULL, 65, 7, NULL, NULL, 334, 7, 399, 2, 8, 12, 12),
(458, 99, 'Микола Михайлович', 'Фарилюк', 22, NULL, NULL, 65, 12, NULL, NULL, 334, 12, 399, 2, 8, 12, 12),
(459, 99, 'Юрій Богданович', 'Возьний ', 26, NULL, NULL, 65, 17, NULL, NULL, 334, 17, 399, 2, 8, 12, 12),
(460, 99, 'Віталій Юрійович', 'Орлінський', 33, NULL, NULL, 65, 22, NULL, NULL, 334, 22, 399, 2, 8, 12, 12),
(461, 99, 'Степан Петрович', 'Коропацький ', 36, NULL, NULL, 65, 27, NULL, NULL, 334, 27, 399, 2, 8, 12, 12),
(462, 100, 'Володимир Миколайович', 'Кухаришин', 25, 9, NULL, 9, 2, 35, NULL, 35, 2, 44, 3, 5, 4, 4),
(463, 100, 'Андрій Ярославович', 'Теслюк', 22, NULL, NULL, 65, 7, NULL, NULL, 334, 7, 399, 3, 8, 12, 12),
(464, 100, 'Ігор Петрович', 'Франків', 24, NULL, NULL, 65, 12, NULL, NULL, 334, 12, 399, 3, 8, 12, 12),
(465, 100, 'Петро Миколайович', 'Бернацький', 25, NULL, NULL, 65, 17, NULL, NULL, 334, 17, 399, 3, 8, 12, 12),
(466, 100, 'Руслан Володимирович', 'Новосад', 21, NULL, NULL, 65, 22, NULL, NULL, 334, 22, 399, 3, 8, 12, 12),
(467, 100, 'Андрій Русланович', 'Соловій', 27, NULL, NULL, 65, 27, NULL, NULL, 334, 27, 399, 3, 8, 12, 12),
(468, 101, 'Микола Миронович', 'Чорний', 24, 55, NULL, 55, 2, 324, NULL, 324, 2, 379, 4, 7, 11, 11),
(469, 101, 'Юрій Васильович', 'Керничний', 23, NULL, NULL, 65, 7, NULL, NULL, 334, 7, 399, 4, 8, 12, 12),
(470, 101, 'Андрій Анатолійович', 'Яцишин', 33, NULL, NULL, 65, 12, NULL, NULL, 334, 12, 399, 4, 8, 12, 12),
(471, 101, ' Микола Андрійович', 'Кіт', 35, NULL, NULL, 65, 17, NULL, NULL, 334, 17, 399, 4, 8, 12, 12),
(472, 101, 'Володимир Павлович', 'Пасемко', 26, NULL, NULL, 65, 22, NULL, NULL, 334, 22, 399, 4, 8, 12, 12),
(473, 101, 'Андрій Васильович', 'Кусень ', 37, NULL, NULL, 65, 27, NULL, NULL, 334, 27, 399, 4, 8, 12, 12),
(474, 102, 'Андрій Васильович ', 'Медвідь ', 28, 5, NULL, 5, 3, 2, NULL, 2, 3, 7, 1, 3, 1, 1),
(475, 102, 'Олег Ярославович', 'Біляс', 31, NULL, NULL, 65, 8, NULL, NULL, 334, 8, 399, 1, 8, 12, 12),
(476, 102, 'Микола Іванович', 'Хоменко ', 32, NULL, NULL, 65, 13, NULL, NULL, 334, 13, 399, 1, 8, 12, 12),
(477, 102, 'Володимир Богданович', 'Антонюк ', 24, NULL, NULL, 65, 18, NULL, NULL, 334, 18, 399, 1, 8, 12, 12),
(478, 102, 'Віталій Васильович', 'Казмірук', 30, NULL, NULL, 65, 23, NULL, NULL, 334, 23, 399, 1, 8, 12, 12),
(479, 102, 'Андрій Володимирович', 'Богута', 25, NULL, NULL, 65, 28, NULL, NULL, 334, 28, 399, 1, 8, 12, 12),
(480, 103, 'Ігор Іванович', 'Біскуп', 27, 6, NULL, 6, 3, 62, NULL, 62, 3, 68, 2, 4, 7, 7),
(481, 103, 'Дмитро Володимирович ', 'Даньо', 28, NULL, NULL, 65, 8, NULL, NULL, 334, 8, 399, 2, 8, 12, 12),
(482, 103, 'Микола Тимофійович', 'Барна', 34, NULL, NULL, 65, 13, NULL, NULL, 334, 13, 399, 2, 8, 12, 12),
(483, 103, 'Іван Миколайович', 'Бесащук', 31, NULL, NULL, 65, 18, NULL, NULL, 334, 18, 399, 2, 8, 12, 12),
(484, 103, 'Василь Антонович', 'Ніжінський', 23, NULL, NULL, 65, 23, NULL, NULL, 334, 23, 399, 2, 8, 12, 12),
(485, 103, 'Василь Васильович', 'Кравець', 25, NULL, NULL, 65, 28, NULL, NULL, 334, 28, 399, 2, 8, 12, 12),
(486, 104, 'Андрій Петрович', 'Засядко', 35, 9, NULL, 9, 3, 32, NULL, 32, 3, 41, 3, 5, 3, 3),
(487, 104, 'Андрій Олександрович', 'Бідний', 37, NULL, NULL, 65, 8, NULL, NULL, 334, 8, 399, 3, 8, 12, 12),
(488, 104, 'Роман Степанович', 'Бойко', 30, NULL, NULL, 65, 13, NULL, NULL, 334, 13, 399, 3, 8, 12, 12),
(489, 104, 'Роман Андрійович', 'Мізюк', 28, NULL, NULL, 65, 18, NULL, NULL, 334, 18, 399, 3, 8, 12, 12),
(490, 104, 'Сергій Олександрович', 'Стухляк', 30, NULL, NULL, 65, 23, NULL, NULL, 334, 23, 399, 3, 8, 12, 12),
(491, 104, 'Руслан Григорович', 'Табас', 39, NULL, NULL, 65, 28, NULL, NULL, 334, 28, 399, 3, 8, 12, 12),
(492, 105, 'Ігор Романович', 'Лукасевич', 27, 3, NULL, 3, 3, 78, NULL, 78, 3, 81, 4, 2, 8, 8),
(493, 105, 'Василь Іванович', 'Нечепор', 23, NULL, NULL, 65, 8, NULL, NULL, 334, 8, 399, 4, 8, 12, 12),
(494, 105, 'Мирослав Орестович  ', 'Піняга', 27, NULL, NULL, 65, 13, NULL, NULL, 334, 13, 399, 4, 8, 12, 12),
(495, 105, 'Андрій Іванович', 'Маслій', 32, NULL, NULL, 65, 18, NULL, NULL, 334, 18, 399, 4, 8, 12, 12),
(496, 105, 'Петро Михайлович', 'Лободзец', 26, NULL, NULL, 65, 23, NULL, NULL, 334, 23, 399, 4, 8, 12, 12),
(497, 105, 'Мирослав Мирославович', 'Гук', 27, NULL, NULL, 65, 28, NULL, NULL, 334, 28, 399, 4, 8, 12, 12),
(498, 106, 'Дмитро Сергійович ', 'Кріса', 30, NULL, NULL, 65, 4, NULL, NULL, 334, 4, 399, 1, 8, 12, 12),
(499, 106, 'Роман Михайлович', 'Сміх', 25, NULL, NULL, 65, 9, NULL, NULL, 334, 9, 399, 1, 8, 12, 12),
(500, 106, 'Ярослав Романович ', 'Тихий', 28, NULL, NULL, 65, 14, NULL, NULL, 334, 14, 399, 1, 8, 12, 12),
(501, 106, 'Роман Степанович', 'Козловський', 26, NULL, NULL, 65, 19, NULL, NULL, 334, 19, 399, 1, 8, 12, 12),
(502, 106, 'Роман Володимирович ', 'Гнатів', 27, NULL, NULL, 65, 24, NULL, NULL, 334, 24, 399, 1, 8, 12, 12),
(503, 106, 'Іван Юрієвич', 'Мороз', 27, NULL, NULL, 65, 29, NULL, NULL, 334, 29, 399, 1, 8, 12, 12),
(504, 107, 'Олександр Михайлович', 'Федьків', 33, NULL, NULL, 65, 4, NULL, NULL, 334, 4, 399, 2, 8, 12, 12),
(505, 107, 'Анатолій Петрович', 'Ощенков', 45, NULL, NULL, 65, 9, NULL, NULL, 334, 9, 399, 2, 8, 12, 12),
(506, 107, 'Богдан Богданович', 'Борис', 20, NULL, NULL, 65, 14, NULL, NULL, 334, 14, 399, 2, 8, 12, 12),
(507, 107, 'Тарас Михайлович', 'Воробель', 20, NULL, NULL, 65, 19, NULL, NULL, 334, 19, 399, 2, 8, 12, 12),
(508, 107, 'Володимир Анатолієвич', 'Марчак', 26, NULL, NULL, 65, 24, NULL, NULL, 334, 24, 399, 2, 8, 12, 12),
(509, 107, 'Михайло Юрієвич', 'Боровий', 23, NULL, NULL, 65, 29, NULL, NULL, 334, 29, 399, 2, 8, 12, 12),
(510, 108, 'Іля Володимирович', 'Кукочкін', 25, NULL, NULL, 65, 4, NULL, NULL, 334, 4, 399, 3, 8, 12, 12),
(511, 108, 'Василь Ярославович', 'Колісник', 41, NULL, NULL, 65, 9, NULL, NULL, 334, 9, 399, 3, 8, 12, 12),
(512, 108, 'Сергій Василоьович', 'Мороз', 27, NULL, NULL, 65, 14, NULL, NULL, 334, 14, 399, 3, 8, 12, 12),
(513, 108, 'Михайло Степанович', 'Підгірний', 30, NULL, NULL, 65, 19, NULL, NULL, 334, 19, 399, 3, 8, 12, 12),
(514, 108, 'Андрій Петрович', 'Маркович', 44, NULL, NULL, 65, 24, NULL, NULL, 334, 24, 399, 3, 8, 12, 12),
(515, 108, 'Ігор Романович', 'Мінюх', 28, NULL, NULL, 65, 29, NULL, NULL, 334, 29, 399, 3, 8, 12, 12),
(516, 109, 'Юрій Русланович', 'Тофіль', 26, NULL, NULL, 65, 4, NULL, NULL, 334, 4, 399, 4, 8, 12, 12),
(517, 109, 'Дмитро Костянтинович', 'Грищук ', 23, NULL, NULL, 65, 9, NULL, NULL, 334, 9, 399, 4, 8, 12, 12),
(518, 109, 'Тарас Володимирович', 'Олійник', 23, NULL, NULL, 65, 14, NULL, NULL, 334, 14, 399, 4, 8, 12, 12),
(519, 109, 'Сергій Тарасович', 'Схаб', 24, NULL, NULL, 65, 19, NULL, NULL, 334, 19, 399, 4, 8, 12, 12),
(520, 109, 'Ігор Григорович', 'Гуцал', 25, NULL, NULL, 65, 24, NULL, NULL, 334, 24, 399, 4, 8, 12, 12),
(521, 109, 'Роман Васильович', 'Дячун', 25, NULL, NULL, 65, 29, NULL, NULL, 334, 29, 399, 4, 8, 12, 12),
(522, 110, 'Дмитро Андрійович', 'Петрів', 27, NULL, NULL, 65, 5, NULL, NULL, 334, 5, 399, 1, 8, 12, 12),
(523, 110, 'Андрій Олегович', 'Сташків', 27, NULL, NULL, 65, 10, NULL, NULL, 334, 10, 399, 1, 8, 12, 12),
(524, 110, 'Андрій Миколайович', 'Легета', 29, NULL, NULL, 65, 15, NULL, NULL, 334, 15, 399, 1, 8, 12, 12),
(525, 110, 'Ігор Миколайович', 'Сетний', 29, NULL, NULL, 65, 20, NULL, NULL, 334, 20, 399, 1, 8, 12, 12),
(526, 110, 'Руслан Михайлович', 'Шушко', 32, NULL, NULL, 65, 25, NULL, NULL, 334, 25, 399, 1, 8, 12, 12),
(527, 110, 'Нестор Леонідович ', 'Меснянкін', 29, NULL, NULL, 65, 30, NULL, NULL, 334, 30, 399, 1, 8, 12, 12),
(528, 111, 'Михайло Петрович', 'Лешеганич', 26, NULL, NULL, 65, 5, NULL, NULL, 334, 5, 399, 2, 8, 12, 12),
(529, 111, 'Олександр Степанович', 'Шафарчук', 23, NULL, NULL, 65, 10, NULL, NULL, 334, 10, 399, 2, 8, 12, 12),
(530, 111, 'Євстафій Михайлович', 'Козачук', 26, NULL, NULL, 65, 15, NULL, NULL, 334, 15, 399, 2, 8, 12, 12),
(531, 111, 'Марко Анатолієвич', 'Нечепорук', 23, NULL, NULL, 65, 20, NULL, NULL, 334, 20, 399, 2, 8, 12, 12),
(532, 111, 'Андрій Олегович', 'Лісний', 22, NULL, NULL, 65, 25, NULL, NULL, 334, 25, 399, 2, 8, 12, 12),
(533, 111, 'Олексій Семенович', 'Шевчук', 44, NULL, NULL, 65, 30, NULL, NULL, 334, 30, 399, 2, 8, 12, 12),
(534, 112, 'Володимир Васильович', 'Дека', 26, NULL, NULL, 65, 5, NULL, NULL, 334, 5, 399, 3, 8, 12, 12),
(535, 112, 'Вадим Вадимович', 'Петльовий', 25, NULL, NULL, 65, 10, NULL, NULL, 334, 10, 399, 3, 8, 12, 12),
(536, 112, 'Назар Ігорович', 'Яворівський', 26, NULL, NULL, 65, 15, NULL, NULL, 334, 15, 399, 3, 8, 12, 12),
(537, 112, 'Василь Михайлович', 'Гичпан', 24, NULL, NULL, 65, 20, NULL, NULL, 334, 20, 399, 3, 8, 12, 12),
(538, 112, 'Ігор Борисович', 'Макогін', 26, NULL, NULL, 65, 25, NULL, NULL, 334, 25, 399, 3, 8, 12, 12),
(539, 112, 'Віталій Петрович', 'Чабан', 28, NULL, NULL, 65, 30, NULL, NULL, 334, 30, 399, 3, 8, 12, 12),
(540, 114, 'Денис Ярославович', 'Луб\'янецький', 28, NULL, NULL, 65, 5, NULL, NULL, 334, 5, 399, 4, 8, 12, 12),
(541, 114, 'Сергій Вікторович', 'Албанський', 33, NULL, NULL, 65, 10, NULL, NULL, 334, 10, 399, 4, 8, 12, 12),
(542, 114, 'Назар Вікторович', 'Новіцький', 30, NULL, NULL, 65, 15, NULL, NULL, 334, 15, 399, 4, 8, 12, 12),
(543, 114, 'Володимир Павлович', 'Господарик', 27, NULL, NULL, 65, 20, NULL, NULL, 334, 20, 399, 4, 8, 12, 12),
(544, 114, 'Технічний кандидат1', 'Технічний кандидат1', 30, NULL, NULL, 65, 25, NULL, NULL, 334, 25, 399, 4, 8, 12, 12),
(545, 114, 'Технічний кандидат2', 'Технічний кандидат2', 30, NULL, NULL, 65, 30, NULL, NULL, 334, 30, 399, 4, 8, 12, 12);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `team_id` int(11) NOT NULL,
  `team_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `estafeta` float DEFAULT NULL,
  `estafeta_result` int(11) DEFAULT NULL,
  `boyove` float DEFAULT NULL,
  `boyove_result` int(11) DEFAULT NULL,
  `shturm` float DEFAULT NULL,
  `shturm_result` int(11) DEFAULT NULL,
  `sto_metriv` float DEFAULT NULL,
  `sto_metriv_result` int(11) DEFAULT NULL,
  `dvoborstvo` float DEFAULT NULL,
  `dvoborstvo_result` int(11) DEFAULT NULL,
  `tru_kolinna_1` float NOT NULL,
  `tru_kolinna_2` float NOT NULL,
  `tru_kolinna` float DEFAULT NULL,
  `tru_kolinna_result` int(11) DEFAULT NULL,
  `team_zabig` int(11) DEFAULT NULL,
  `doroga_number` int(11) DEFAULT NULL,
  `result` int(10) DEFAULT NULL,
  `result_result` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`team_id`, `team_name`, `estafeta`, `estafeta_result`, `boyove`, `boyove_result`, `shturm`, `shturm_result`, `sto_metriv`, `sto_metriv_result`, `dvoborstvo`, `dvoborstvo_result`, `tru_kolinna_1`, `tru_kolinna_2`, `tru_kolinna`, `tru_kolinna_result`, `team_zabig`, `doroga_number`, `result`, `result_result`) VALUES
(99, 'Збаразький РВ', NULL, NULL, NULL, NULL, 263, 2, 1420, 9, 1284, 9, 2, 4, 2, 3, 3, 2, 23, 11),
(100, 'Зборівський РВ', NULL, NULL, NULL, NULL, 269, 5, 1371, 4, 1241, 4, 0, 1, 1, 2, 4, 1, 15, 6),
(98, 'Заліщицький РВ', NULL, NULL, NULL, NULL, 266, 4, 1392, 5, 1259, 6, 0, 0.5, 0.5, 1, 3, 1, 16, 7),
(97, 'Гусятинський РВ', NULL, NULL, NULL, NULL, 305, 6, 1423, 10, 1329, 10, 0, 1, 1, 2, 2, 2, 28, 12),
(96, 'Бучачцький РВ', NULL, NULL, NULL, NULL, 269, 5, 1339, 2, 1209, 2, 0, 14, 14, 4, 2, 1, 13, 5),
(95, 'Борщівський РВ', NULL, NULL, NULL, NULL, 263, 2, 1420, 9, 1284, 9, 0, 0, NULL, NULL, 1, 2, 20, 10),
(94, 'Бережанський РВ ', NULL, NULL, NULL, NULL, 260.5, 1, 1396, 6, 1257.5, 5, 0, 0, NULL, NULL, 1, 1, 12, 4),
(101, 'Козівський РВ', NULL, NULL, NULL, NULL, 315, 7, 1660, 11, 1576, 11, 0, 0, NULL, NULL, 4, 2, 29, 13),
(102, 'Кременецький РВ', NULL, NULL, NULL, NULL, 265, 3, 1338, 1, 1204, 1, 0, 0, NULL, NULL, 5, 1, 5, 2),
(103, 'Монастириський РВ', NULL, NULL, NULL, NULL, 266, 4, 1398, 7, 1265, 7, 0, 0, NULL, NULL, 5, 2, 18, 8),
(104, 'Лановецький РВ', NULL, NULL, NULL, NULL, 269, 5, 1368, 3, 1238, 3, 0, 0, NULL, NULL, 6, 1, 11, 3),
(105, 'Підволочиський РВ', NULL, NULL, NULL, NULL, 263, 2, 1414, 8, 1278, 8, 0, 0, NULL, NULL, 6, 2, 18, 9),
(106, 'Підгаєцький РВ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 7, 1, 32, 14),
(107, 'Теребовлянський РВ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 7, 2, 32, 15),
(108, 'ТМВ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 8, 1, 32, 16),
(109, 'ТРВ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 8, 2, 32, 17),
(110, 'Чортківський РВ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 9, 1, 32, 18),
(111, 'Шумський РВ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 9, 2, 32, 19),
(112, 'АРЗ', NULL, NULL, NULL, NULL, 325, 8, 1670, 12, 1596, 12, 0, 0, NULL, NULL, 10, 1, 32, 20),
(113, 'Особисто', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, NULL, NULL, 10, 2, 0, 1),
(114, 'Особисті', 1200, 1, 1550, 1, 325, 8, 1670, 12, 1596, 12, 0, 0, 844, 5, 11, 1, 39, 21);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(9, 'admin', 'dIFi6OKfj6xW9byC1ntCBl7Xn_qJi7iF', '$2y$13$zw5Qp0/WEqNf6rvfWJfWXu083s50uWeG8GFMItoLHCCOnUQCuNOSi', NULL, 'admin@mail.com', 10, 1488863173, 1488863173);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `participants`
--
ALTER TABLE `participants`
  ADD PRIMARY KEY (`participant_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`team_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `participants`
--
ALTER TABLE `participants`
  MODIFY `participant_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=546;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `team_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
