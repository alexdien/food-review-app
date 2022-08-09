-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jul 12, 2022 at 02:08 PM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food-review-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `name`, `email`, `message`) VALUES
(1, 'fda', 'fda', 'fda'),
(2, 'truong', 'truong@gmail.com', 'hello'),
(3, 'truong', 'truong@gmail.com', 'hello'),
(4, 'truong', 'truong@gmail.com', 'hello'),
(5, 'truong', 'truong@gmail.com', 'hello'),
(6, 'alex', 'alex@test.com', 'testing message'),
(7, '123', '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `food_reviews`
--

CREATE TABLE `food_reviews` (
  `review_id` int(11) NOT NULL,
  `food_name` varchar(200) NOT NULL,
  `food_review` varchar(200) NOT NULL,
  `food_rating` varchar(200) NOT NULL,
  `food_img` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_reviews`
--

INSERT INTO `food_reviews` (`review_id`, `food_name`, `food_review`, `food_rating`, `food_img`) VALUES
(1, 'Gatorade - Fruit Punch', 'Universal empowering productivity', '2', 'http://dummyimage.com/225x100.png/dddddd/000000'),
(2, 'Sage Ground Wiberg', 'Upgradable holistic secured line', '5', 'http://dummyimage.com/136x100.png/cc0000/ffffff'),
(3, 'Dry Ice', 'Triple-buffered 3rd generation data-warehouse', '2', 'http://dummyimage.com/138x100.png/dddddd/000000'),
(4, 'Soup Campbells Beef With Veg', 'Reduced upward-trending conglomeration', '5', 'http://dummyimage.com/107x100.png/dddddd/000000'),
(5, 'Beer - Pilsner Urquell', 'Secured demand-driven paradigm', '3', 'http://dummyimage.com/236x100.png/ff4444/ffffff'),
(6, 'Cheese - Mozzarella, Buffalo', 'Operative multimedia structure', '3', 'http://dummyimage.com/190x100.png/5fa2dd/ffffff'),
(7, 'Dawn Professionl Pot And Pan', 'Profound interactive hierarchy', '3', 'http://dummyimage.com/165x100.png/5fa2dd/ffffff'),
(8, 'Apple - Delicious, Golden', 'Enterprise-wide heuristic focus group', '1', 'http://dummyimage.com/183x100.png/cc0000/ffffff'),
(9, 'Wine - White, Riesling, Semi - Dry', 'Vision-oriented even-keeled knowledge base', '5', 'http://dummyimage.com/243x100.png/cc0000/ffffff'),
(10, 'Apron', 'Re-engineered discrete secured line', '1', 'http://dummyimage.com/170x100.png/5fa2dd/ffffff'),
(11, 'Potatoes - Idaho 80 Count', 'Realigned eco-centric forecast', '2', 'http://dummyimage.com/155x100.png/dddddd/000000'),
(12, 'Jam - Raspberry', 'Organic neutral analyzer', '1', 'http://dummyimage.com/220x100.png/5fa2dd/ffffff'),
(13, 'Southern Comfort', 'Front-line high-level instruction set', '4', 'http://dummyimage.com/230x100.png/cc0000/ffffff'),
(14, 'Chocolate - Feathers', 'Diverse object-oriented info-mediaries', '2', 'http://dummyimage.com/150x100.png/dddddd/000000'),
(15, 'Aspic - Clear', 'Upgradable holistic hub', '3', 'http://dummyimage.com/231x100.png/dddddd/000000'),
(16, 'Pastry - Trippleberry Muffin - Mini', 'Front-line bandwidth-monitored adapter', '5', 'http://dummyimage.com/216x100.png/cc0000/ffffff'),
(17, 'Cup - 4oz Translucent', 'Networked intermediate strategy', '5', 'http://dummyimage.com/109x100.png/ff4444/ffffff'),
(18, 'Onions - Red', 'Self-enabling responsive parallelism', '3', 'http://dummyimage.com/138x100.png/ff4444/ffffff'),
(19, 'Cod - Black Whole Fillet', 'Robust leading edge algorithm', '3', 'http://dummyimage.com/243x100.png/5fa2dd/ffffff'),
(20, 'Mushroom - Porcini, Dry', 'Right-sized non-volatile functionalities', '5', 'http://dummyimage.com/232x100.png/dddddd/000000'),
(21, 'soup', 'good soup', '5', '../images/default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `restaurants`
--

CREATE TABLE `restaurants` (
  `r_id` varchar(128) NOT NULL,
  `r_name` varchar(128) NOT NULL,
  `r_password` varchar(250) DEFAULT NULL,
  `r_description` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `phone` varchar(128) NOT NULL,
  `r_email` varchar(250) DEFAULT NULL,
  `r_type` varchar(128) NOT NULL,
  `r_rating` varchar(128) NOT NULL,
  `r_follower_count` int(11) NOT NULL,
  `r_img` varchar(128) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `restaurants`
--

INSERT INTO `restaurants` (`r_id`, `r_name`, `r_password`, `r_description`, `address`, `phone`, `r_email`, `r_type`, `r_rating`, `r_follower_count`, `r_img`) VALUES
('1', 'burger Bell', 'test123', 'yummy', '123 way', '1237895678', 'test@gmail.com', 'fast food', '5', 5, '../images/tacobell.jpg'),
('3', 'Flowdesk', 'IlhyxwpKUKoj', 'Displaced fracture of third metatarsal bone, left foot, subsequent encounter for fracture with nonunion', '11 Rigney Circle', '919-334-5795', 'malgate0@live.com', 'diners-club-international', '3', 586059, '../images/default.jpg'),
('4', 'Lotstring', 'z6PHzcBEp2m', 'Malignant neoplasm of hepatic flexure', '7 Pennsylvania Park', '864-813-0816', 'nzorzini1@craigslist.org', 'jcb', '5', 658140, '../images/default.jpg'),
('5', 'Hatity', '8LCnyv6Y62u', 'Unspecified occupant of heavy transport vehicle injured in noncollision transport accident in traffic accident, initial encounter', '43 Crownhardt Alley', '990-222-0054', 'hmoorcroft2@meetup.com', 'maestro', '1', 875991, '../images/default.jpg'),
('6', 'Zontrax', 'FKCA7ZvrH', 'Tuberculosis of genitourinary system, unspecified', '19586 Valley Edge Crossing', '553-408-2354', 'tsprigings3@addtoany.com', 'maestro', '2', 321074, '../images/default.jpg'),
('7', 'Flexidy', 'Nmhfkj7cR', 'Puncture wound without foreign body, unspecified hip', '6483 Di Loreto Hill', '729-884-5115', 'vyu4@creativecommons.org', 'jcb', '3', 292881, '../images/default.jpg'),
('8', 'Tampflex', '7sj4kNHKlAvB', 'Disorders of carnitine metabolism', '4 Rowland Parkway', '102-490-2908', 'aadamik5@shareasale.com', 'mastercard', '4', 709921, '../images/default.jpg'),
('9', 'Regrant', 'FOdN1E7bQK', 'Nondisplaced spiral fracture of shaft of ulna, left arm', '91577 Morrow Pass', '176-999-8658', 'osate6@vinaora.com', 'mastercard', '3', 96758, '../images/default.jpg'),
('10', 'Opela', 'tUopdNE4i', 'Chronic embolism and thrombosis of deep veins of upper extremity, bilateral', '3701 Morrow Circle', '213-951-4683', 'acurnnokk7@mozilla.com', 'jcb', '5', 260635, '../images/default.jpg'),
('11', 'Rank', 'Oso8Bt', 'Other specified diabetes mellitus with diabetic macular edema, resolved following treatment, left eye', '321 Dexter Trail', '628-942-7845', 'egiametti8@amazonaws.com', 'diners-club-enroute', '1', 114153, '../images/default.jpg'),
('12', 'Zathin', 'jRHJkQOj', 'Other deletions from the autosomes', '56 Moose Center', '806-559-9018', 'ppinney9@scientificamerican.com', 'laser', '1', 421082, '../images/default.jpg'),
('13', 'Greenlam', 'XkxBgep', 'Toxic effect of tobacco cigarettes, undetermined, subsequent encounter', '05867 Hayes Avenue', '110-352-9543', 'thenzea@sakura.ne.jp', 'mastercard', '1', 593885, '../images/default.jpg'),
('14', 'Alphazap', '9WnhSV756iD0', 'Other injury of abdominal aorta, initial encounter', '8 Commercial Crossing', '398-315-9341', 'mneavesb@spotify.com', 'bankcard', '4', 462271, '../images/default.jpg'),
('15', 'Stronghold', '6aA0lN8', 'Person injured in collision between other specified motor vehicles (traffic), initial encounter', '55440 Michigan Circle', '294-695-8493', 'xathowec@virginia.edu', 'visa-electron', '2', 120091, '../images/default.jpg'),
('16', 'Overhold', 'BlR4QYBk3V', 'Displaced segmental fracture of shaft of right tibia, subsequent encounter for open fracture type IIIA, IIIB, or IIIC with delayed healing', '17115 Rusk Junction', '171-424-6536', 'bfilipyevd@paypal.com', 'switch', '2', 513300, '../images/default.jpg'),
('17', 'Home Ing', 'qn6GSRwGvQIZ', 'Nondisplaced spiral fracture of shaft of radius, right arm, subsequent encounter for open fracture type IIIA, IIIB, or IIIC with malunion', '2 Manley Junction', '875-631-0283', 'hleechmane@sina.com.cn', 'mastercard', '3', 394159, '../images/default.jpg'),
('18', 'Alpha', 'Q6FYgsAy2Xq', 'Explosion on board fishing boat, sequela', '37282 Golf Street', '884-626-2316', 'bwhissellf@i2i.jp', 'jcb', '3', 504459, '../images/default.jpg'),
('19', 'Stim', 'vSiGWQ8', 'Other specified injuries of larynx, subsequent encounter', '933 Oak Place', '578-644-7485', 'mhendrikseng@barnesandnoble.com', 'diners-club-us-ca', '2', 610697, '../images/default.jpg'),
('20', 'Fix San', 'zUTuMfvrB', 'Acute hematogenous osteomyelitis, multiple sites', '2109 Dennis Way', '806-515-4811', 'tolivah@theatlantic.com', 'bankcard', '2', 769359, '../images/default.jpg'),
('23', 'Otcom', 'KTYVzI', 'Unspecified injury of unspecified carotid artery, subsequent encounter', '4392 Goodland Circle', '622-611-4129', 'ascotchmore0@fc2.com', 'jcb', '5', 963609, 'http://dummyimage.com/166x100.png/dddddd/000000'),
('30', 'Daltfresh', 'GBqMxm', 'Corrosion of second degree of right lower leg, sequela', '020 Crescent Oaks Drive', '297-651-6079', 'grobardley1@smh.com.au', 'jcb', '5', 709288, 'http://dummyimage.com/130x100.png/dddddd/000000');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `username`, `role`) VALUES
(1, 'bsmith', 'admin'),
(2, 'pjones', 'member'),
(5, 'mday', 'admin'),
(7, 'hello', 'admin'),
(8, 'liam', 'admin'),
(9, 'ryan1', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `forename` varchar(128) NOT NULL,
  `surname` varchar(128) NOT NULL,
  `username` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`forename`, `surname`, `username`, `password`) VALUES
('', '', '', ''),
('Bill', 'Smith', 'bsmith', '$2y$10$Wmjk8g9imieMR7vxNY7RLu1QGFFtynp8LMudlzQuuOQzTyDKkdUn.'),
('hello', 'hello', 'hello', '$2y$10$mI0.tnJIUaIUMJoOYs8YROVpw2FltSX1EWDbV6PWgO6UKUJ3jaQ1.'),
('liam', 'liam', 'liam', '$2y$10$UyjmseRt1hD8/9X7FG6.cu0moE4YJDooId/wfA2eOLhkCdxeF0FL.'),
('mday', 'mday', 'mday', '$2y$10$jfmg4XedHruDnlekdtw9guF9I7zHR/o0h1sXNf7jMDPYGLRK8QTty'),
('Pauline', 'Jones', 'pjones', '$2y$10$MGPkFQCFvCMklxoquzn9he4yR1.Hh5yPlJyDg2NYO7dZPJhmPIer.'),
('ryan', 'ry', 'ryan1', '$2y$10$2erDDwYDjyzFhATgfqkFsuK6ZLzZNrrCwBkYLOFd3Hw1OT/Eh9bZe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `food_reviews`
--
ALTER TABLE `food_reviews`
  ADD PRIMARY KEY (`review_id`);

--
-- Indexes for table `restaurants`
--
ALTER TABLE `restaurants`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `food_reviews`
--
ALTER TABLE `food_reviews`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
