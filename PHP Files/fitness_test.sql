-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 04:29 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fitness_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `meal`
--

CREATE TABLE `meal` (
  `id` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `calories` int(255) NOT NULL,
  `size` varchar(100) DEFAULT NULL,
  `restuarant` varchar(200) NOT NULL,
  `prize` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meal`
--

INSERT INTO `meal` (`id`, `name`, `calories`, `size`, `restuarant`, `prize`) VALUES
(1, 'Chick-fil-A Chicken Sandwich Meal', 600, 'small', 'Chick-fil-A', 6.39),
(2, 'Chick-fil-A Chicken Sanwich Meal', 800, 'medium', 'Chick-fil-A', 7.39),
(3, 'Chick-fil-A Chicken Sanwich Meal', 1000, 'large', 'Chick-fil-A', 7.39),
(4, 'Spicy Chicken Sandwich Meal', 890, 'small', 'Chick-fil-A', 6.65),
(5, 'Spicy Chicken Sandwich Meal', 920, 'medium', 'Chick-fil-A', 7.65),
(6, 'Spicy Chicken Sandwich Meal', 1080, 'large', 'Chick-fil-A', 8.65),
(7, 'Classic Chick-fil-A Nuggets Meal', 600, 'small', 'Chick-fil-A', 6.39),
(8, 'Classic Chick-fil-A Nuggets Meal', 750, 'medium', 'Chick-fil-A', 7.39),
(9, 'Classic Chick-fil-A Nuggets Meal', 900, 'large', 'Chick-fil-A', 8.39),
(10, 'Chick-fil-A Chick-n Strips Meal', 600, 'small', 'Chick-fil-A', 6.79),
(11, 'Chick-fil-A Chick-n Strips Meal', 800, 'medium', 'Chick-fil-A', 7.79),
(12, 'Chick-fil-A Chick-n Strips Meal', 1000, 'large', 'Chick-fil-A', 8.79),
(13, 'Chick-fil-A Grilled Chicken Sanwich Meal', 720, 'small', 'Chick-fil-A', 7.79),
(14, 'Chick-fil-A Grilled Chicken Sanwich Meal', 820, 'medium', 'Chick-fil-A', 8.79),
(15, 'Chick-fil-A Grilled Chicken Sanwich Meal', 920, 'large', 'Chick-fil-A', 9.79),
(16, 'Chick-fil-A Chicken Sandwich', 440, NULL, 'Chick-fil-A', 3.45),
(17, 'Spicy-Chicken Sandwich', 450, NULL, 'Chick-fil-A', 3.69),
(18, 'Chick-fil-A Grilled Chicken Sandwich', 310, NULL, 'Chick-fil-A', 4.85),
(19, 'Cobb Salad', 430, NULL, 'Chick-fil-A', 7.89),
(20, 'Grilled Market Salad', 450, NULL, 'Chick-fil-A', 7.89),
(21, 'Grilled Chiken Cool Wrap', 350, NULL, 'Chick-fil-A', 5.69),
(22, 'Waffle Potato Fries', 400, NULL, 'Chick-fil-A', 1.79),
(23, 'Fruit Cup', 45, NULL, 'Chick-fil-A', 2.99),
(24, 'Side Salad', 80, NULL, 'Chick-fil-A', 3.15),
(25, 'Chocolate Chunk Cookie', 350, NULL, 'Chick-fil-A', 1.29),
(26, 'Bagel', 290, NULL, 'Einstein Bros Bagels', 3.35),
(27, 'Applewood Bacon & Cheddar Egg Sandwich', 520, NULL, 'Einstein Bros Bagels', 6.69),
(28, 'Turkey-Sausage & Cheddar Egg Sandwich', 540, NULL, 'Einstein Bros Bagels', 6.67),
(29, 'Ham & Swiss Egg Sandwich', 490, NULL, 'Einstein Bros Bagels', 7.25),
(30, 'Egg & Cheddar Sandwich', 470, NULL, 'Einstein Bros Bagels', 6.65),
(32, 'Ham & Swiss Deli Sandwich', 660, NULL, 'Einstein Bros Bagels', 6.64),
(33, 'Albacore Tuna Salad Deli Sandwich', 590, NULL, 'Einstein Bros Bagels', 4.25),
(34, 'Harvest Chicken Salad Deli Sandwich', 620, NULL, 'Einstein Bros Bagels', 4.35),
(35, 'Turkey & Cheddar Deli Sandwich', 660, NULL, 'Einstein Bros Bagels', 4.15),
(36, 'Club Mex Wrap', 720, NULL, 'Einstein Bros Bagels', 3.36),
(37, 'Nova Lox & Bagel', 480, NULL, 'Einstein Bros Bagels', 5.59),
(38, 'Buffalo Chiken & Bacon Tostini', 660, NULL, 'Einstein Bros Bagels', 6.97),
(39, 'Turkey Club Tostini', 750, NULL, 'Einstein Bros Bagels', 6.65),
(40, 'Roasted Veggie Tostini', 510, NULL, 'Einstein Bros Bagels', 6.76),
(41, 'Italian Chicken Tostini', 740, NULL, 'Einstein Bros Bagels', 6.76),
(42, 'Thintastic Buffalo Chicken', 600, NULL, 'Einstein Bros Bagels', 6.26),
(43, 'Thintastic Club', 750, NULL, 'Einstein Bros Bagels', 5.43),
(44, 'Strawberry Banana Smoothie', 400, NULL, 'Einstein Bros Bagels', 3.25),
(45, 'Mixed Berry Smoothie', 390, NULL, 'Einstein Bros Bagels', 3.25),
(46, 'South Turkey-Sausage Thintastic Egg White', 540, NULL, 'Einstein Bros Bagels', 4.57),
(47, 'Southwest Turkey-Sausage Thintastic Egg White', 600, NULL, 'Einstein Bros Bagels', 4.59),
(48, 'Greek Yogurt Parfait', 270, NULL, 'Einstein Bros Bagels', 4.29),
(49, 'Eintein Jalapeno Chips', 180, NULL, 'Einstein Bros Bagels', 3.39),
(50, 'Einstein Bros BBQ Chips', 180, NULL, 'Einstein Bros Bagels', 3.39),
(51, 'Eintein Original Kettle Chips', 180, NULL, 'Einstein Bros Bagels', 3.59),
(52, 'Cinnamon Twist', 360, NULL, 'Einstein Bros Bagels', 3.57),
(53, 'Wild Strawberry', 340, NULL, 'Freshens', 4.09),
(54, 'Maui Mango', 330, NULL, 'Freshens', 4.09),
(55, 'Tropical Therapy', 480, NULL, 'Freshens', 4.09),
(56, 'Super Red', 300, NULL, 'Freshens', 4.49),
(57, 'Caribbean Craze', 330, NULL, 'Freshens', 4.09),
(58, 'Mango Me Crazy', 290, NULL, 'Freshens', 4.09),
(59, 'Jamaican Jammer', 320, NULL, 'Freshens', 4.09),
(60, 'Orange Sunrise', 320, NULL, 'Freshens', 4.09),
(61, 'Purple Reign', 320, NULL, 'Freshens', 4.09),
(62, 'Cookie Dough Smoothie', 630, NULL, 'Freshens', 4.09),
(63, 'Peach on the Beach', 280, NULL, 'Freshens', 4.09),
(64, 'Bangin Berry', 510, NULL, 'Freshens', 4.09),
(65, 'Oh Kale!', 320, NULL, 'Freshens', 4.49),
(66, 'Peanut Butter Protein', 500, NULL, 'Freshens', 4.49),
(67, 'Caribbean Passion', 270, 'small', 'Jamba Juice', 4.49),
(68, 'Caribbean Passion', 330, 'medium', 'Jamba Juice', 5.49),
(69, 'Caribbean Passion', 440, 'large', 'Jamba Juice', 6.49),
(70, 'Razzmatazz', 290, 'small', 'Jamba Juice', 3.25),
(71, 'Razzmatazz', 395, 'medium', 'Jamba Juice', 4.25),
(72, 'Razzmatazz', 500, 'large', 'Jamba Juice', 5.25),
(73, 'Mango-a-Go-Go', 300, 'small', 'Jamba Juice', 3.25),
(74, 'Mango-a-Go-Go', 400, 'medium', 'Jamba Juice', 4.25),
(75, 'Mango-Go-Go', 500, 'large', 'Jamba Juice', 5.25),
(76, 'Strawberries Wild', 260, 'small', 'Jamba Juice', 3.25),
(77, 'Strawberries Wild', 370, 'medium', 'Jamba Juice', 4.25),
(78, 'Strawberries Wild', 460, 'large', 'Jamba Juice', 5.25),
(79, 'Strawberries Sufrider', 320, 'small', 'Jamba Juice', 3.23),
(80, 'Strawberries Sufrider', 455, 'medium', 'Jamba Juice', 4.23),
(81, 'Strawberries Sufrider', 590, 'large', 'Jamba Juice', 5.23),
(82, 'Orange Dream Machine', 350, 'small', 'Jamba Juice', 3.45),
(83, 'Orange Dream Machine', 455, 'medium', 'Jamba Juice', 4.45),
(84, 'Orange Dream Machine', 590, 'large', 'Jamba Juice', 5.45),
(85, 'Peanut Butter Mood', 480, 'small', 'Jamba Juice', 3.46),
(86, 'Peanut Butter Mood', 730, 'medium', 'Jamba Juice', 4.36),
(87, 'Peanut Butter Mood', 980, 'large', 'Jamba Juice', 5.36),
(88, 'Matcha Green Tea Blast', 300, 'small', 'Jamba Juice', 3.49),
(89, 'Matcha Green Tea Blast', 420, 'medium', 'Jamba Juice', 4.39),
(90, 'Matcha Green Tea Blast', 540, 'large', 'Jamba Juice', 5.49),
(91, 'Apple n Greens', 250, 'small', 'Jamba Juice', 3.59),
(92, 'Apple n Greens', 335, 'medium', 'Jamba Juice', 4.59),
(93, 'Apple n Greens', 420, 'large', 'Jamba Juice', 5.49),
(94, 'Strawberry Whril', 210, 'small', 'Jamba Juice', 3.27),
(95, 'Strawberry Whril', 295, 'medium', 'Jamba Juice', 4.27),
(96, 'Strawberry Whril', 380, 'large', 'Jamba Juice', 5.27),
(97, 'Peach Perfection', 210, 'small', 'Jamba Juice', 3.43),
(98, 'Peach Perfection', 285, 'medium', 'Jamba Juice', 4.43),
(99, 'Peach Perfection', 360, 'large', 'Jamba Juice', 5.43),
(100, 'Cranberry Orange Scone', 420, NULL, 'Starbucks', 2.45),
(101, 'Petie Vanilla Bean Scone', 120, NULL, 'Starbucks', 0.95),
(102, 'Toffeedoodle Cookie', 300, NULL, 'Starbucks', 1.95),
(103, 'Chocolate Chip Cookie', 310, NULL, 'Starbucks', 1.95),
(104, 'Outrageous Oatmeal Cookie', 310, NULL, 'Starbucks', 1.95),
(105, 'Birthday Cake Pop', 170, NULL, 'Starbucks', 1.95),
(106, 'Chocolate Cake Pop', 140, NULL, 'Starbucks', 1.95),
(107, 'Latte Macchiato', 170, NULL, 'Starbucks', 3.95),
(108, 'Freshly Brewed Coffe', 0, NULL, 'Starbucks', 1.95),
(109, 'Teavana Brewed Tea', 0, NULL, 'Starbucks', 2.25),
(110, 'Chocolate Chunk Cookie', 370, NULL, 'Starbucks', 1.95),
(111, 'Double Chocolate Chunk Brownie', 380, NULL, 'Starbucks', 2.25),
(112, 'Marshmallow Dream Bar', 240, NULL, 'Starbucks', 2.45),
(113, 'Old Fashioned Doughnut', 480, NULL, 'Starbucks', 1.75),
(114, 'Cascara Latte', 240, NULL, 'Starbucks', 4.25),
(115, '6 in.Meatball Marinara Meal Deal', 480, NULL, 'Subway', 6.25),
(116, '6 in.Black Forest Ham Meal Deal', 290, NULL, 'Subway', 6.25),
(117, '6 in.Cold Cut Combo Meal Deal', 360, NULL, 'Subway', 6.25),
(118, '6 in.Spicy Italian Meal Deal', 480, NULL, 'Subway', 6.25),
(119, '6 in.Veggie Delite Meal Deal', 230, NULL, 'Subway', 6.15),
(120, '6 in.Turkey Italiano Melt Meal Deal', 490, NULL, 'Subway', 6.75),
(121, '6 in.Tuna Meal Deal', 480, NULL, 'Subway', 6.75),
(122, '6 in.Italian B.M.T Meal Deal', 410, NULL, 'Subway', 6.75),
(123, '6 in.Turkey Breast Meal Deal', 280, NULL, 'Subway', 6.75),
(124, '6 in.Turkey Breast & Black Forest Ham Meal Deal', 280, NULL, 'Subway', 6.75),
(125, '6 in.Oven Roasted Chicken Meal Deal', 320, NULL, 'Subway', 6.75),
(126, '6 in.B.L.T Meal Deal', 380, NULL, 'Subway', 380),
(127, '6 in.Buffalo Chicken Meal Deal', 420, NULL, 'Subway', 420),
(128, '6 in.Sweet Onion Teriyaki Chicken Meal Deal', 370, NULL, 'Subway', 7.25),
(129, '6 in.Steak & Cheese Meal Deal', 380, NULL, 'Subway', 7.25),
(130, '6 in.Subway Club Meal Deal', 310, NULL, 'Subway', 7.25),
(131, '6 in.Chicken & Bacon Ranch Melt Meal', 610, NULL, 'Subway', 7.5),
(132, '6 in.Roast Beef Meal Deal', 320, NULL, 'Subway', 7.25),
(133, '6 in.Veggie Patty Meal', 390, NULL, 'Subway', 6.75),
(134, '12 in.Meatball Marinara Meal Deal', 480, NULL, 'Subway', 7.75),
(135, '12 in.Black Forest Ham Meal Deal', 290, NULL, 'Subway', 7.75),
(136, '12 in.Cold Cut Combo Meal Deal', 360, NULL, 'Subway', 7.75),
(137, '12 in.Spicy Italian Meal Deal', 480, NULL, 'Subway', 7.75),
(138, '12 in.Veggie Delite Meal Deal', 230, NULL, 'Subway', 7.9),
(139, '12 in.Turkey Italiano Melt Meal Deal', 490, NULL, 'Subway', 8.5),
(140, '12 in.Tuna Meal Deal', 480, NULL, 'Subway', 8.5),
(141, '12 in.Italian B.M.T Meal Deal', 410, NULL, 'Subway', 8.5),
(142, '12 in.Turkey Breast Meal Deal', 280, NULL, 'Subway', 8.5),
(143, '12 in.Turkey Breast & Black Forest Ham Meal Deal', 280, NULL, 'Subway', 8.5),
(144, '12 in.Oven Roasted Chicken Meal Deal', 320, NULL, 'Subway', 8.5),
(145, '12 in.B.L.T Meal Deal', 380, NULL, 'Subway', 8.5),
(146, '12 in.Buffalo Chicken Meal Deal', 420, NULL, 'Subway', 8.5),
(147, '12 in.Sweet Onion Teriyaki Chicken Meal Deal', 370, NULL, 'Subway', 8.5),
(148, '12 in.Steak & Cheese Meal Deal', 380, NULL, 'Subway', 10.25),
(149, '6 in.Subway Club Meal Deal', 310, NULL, 'Subway', 8.5),
(150, '6 in.Chicken & Bacon Ranch Melt Meal', 610, NULL, 'Subway', 8.5),
(151, '6 in.Roast Beef Meal Deal', 320, NULL, 'Subway', 8.5),
(152, '6 in.Veggie Patty Meal', 390, NULL, 'Subway', 8.5),
(153, 'Cheeseburger & French Fries', 983, NULL, 'Chomp It', 6.99),
(154, 'Chicken Tenders & French Fries', 1135, NULL, 'Chomp It', 6.19),
(155, 'BLT & French Fries', 874, NULL, 'Chomp It', 5.99),
(156, 'Salad Garden Salad', 452, NULL, 'Chomp It', 3.49),
(157, 'Chicken Caesar Salad', 744, NULL, 'Chomp It', 6.99),
(158, 'Spicy Chicken Sandwich & French Fries', 1232, NULL, 'Chomp It', 6.99),
(159, 'Grilled Chicken Sandwich & French Fries', 1051, NULL, 'Chomp It', 6.99),
(160, 'Turkey Club & Home-Made Potato Chips', 1205, NULL, 'Chomp It', 6.79),
(161, 'Cheeseburger', 357, NULL, 'Chomp It', 5.49),
(162, 'Black Bean Burger', 366, NULL, 'Chomp It', 6.99),
(163, 'Chicken Tenders', 509, NULL, 'Chomp It', 4.29),
(164, 'Turkey Club', 579, NULL, 'Chomp It', 5.49),
(165, 'Grilled Chicken', 425, NULL, 'Chomp It', 4.85),
(166, 'Spicy Chicken', 425, NULL, 'Chomp It', 4.25),
(167, 'Three Cheese Grilled Cheese Sandwich', 302, NULL, 'Chomp It', 2.99);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(200) NOT NULL,
  `title` varchar(300) NOT NULL,
  `label` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `label`) VALUES
(1, 'Home', 'Home'),
(2, 'Body Mass Index', 'Body Mass Index'),
(3, 'Basal Metabolic Rate', 'Basal Metabolic Rate'),
(4, 'Total Calories Needed', 'Total Calories Needed'),
(5, 'Total Calories Burned', 'Total Calories Burned'),
(6, 'Exercising', 'Excersising'),
(8, 'Target Heart Rate', 'Target Heart Rate');

-- --------------------------------------------------------

--
-- Table structure for table `restuarant`
--

CREATE TABLE `restuarant` (
  `id` int(255) NOT NULL,
  `name` varchar(250) NOT NULL,
  `location` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `restuarant`
--

INSERT INTO `restuarant` (`id`, `name`, `location`) VALUES
(1, 'Chick-fil-A', 'Broward'),
(2, 'Chick-fil-A', 'HUB'),
(3, 'Chick-fil-A', 'Sun Terrace'),
(4, 'Einstein Bros Bagels', 'HUB'),
(5, 'Einstein Bros Bagels', 'Vet Med'),
(6, 'Freshens', 'Little Hall'),
(7, 'Freshens', 'Reitz'),
(8, 'Freshens', 'SW Rec'),
(9, 'Jamba Juice', 'Turlington'),
(10, 'Risting Roll', 'Heavener Hall'),
(11, 'Starbucks', 'HUB'),
(12, 'Starbucks', 'Library West'),
(13, 'Starbucks', 'Marston'),
(14, 'Starbucks', 'Sun Terrace'),
(15, 'Subwary', 'Reitz'),
(16, 'Subway', 'Turlington'),
(17, 'Chomp It', 'Graham');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(255) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(300) NOT NULL,
  `firstname` longtext NOT NULL,
  `lastname` longtext NOT NULL,
  `gender` varchar(8) NOT NULL,
  `age` int(2) NOT NULL,
  `height` float NOT NULL,
  `weight` int(3) NOT NULL,
  `activity` longtext NOT NULL,
  `allergy` text,
  `dietary_preference` text NOT NULL,
  `setgoal` varchar(500) NOT NULL,
  `dd` int(2) NOT NULL,
  `mm` int(2) NOT NULL,
  `yyyy` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `firstname`, `lastname`, `gender`, `age`, `height`, `weight`, `activity`, `allergy`, `dietary_preference`, `setgoal`, `dd`, `mm`, `yyyy`) VALUES
(1, 'john.doe@email.com', 'password', 'John', 'Doe', 'Male', 16, 185.42, 70, 'moderate', NULL, '', '', 20, 11, 2000),
(2, 'aroushi.sharma', 'rebelt3i', 'Aroushi', 'Sharma', 'Female', 17, 156, 63, 'little', NULL, '', '', 22, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
