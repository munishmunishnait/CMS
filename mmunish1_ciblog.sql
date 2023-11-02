-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 27, 2023 at 06:44 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mmunish1_ciblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `user_id`, `name`, `created_at`) VALUES
(1, 1, 'Multigrain', '2023-04-27 12:15:37'),
(2, 1, 'Italian', '2023-04-27 12:15:46'),
(3, 1, 'Cheese Bread', '2023-04-27 12:15:58'),
(4, 1, 'Cheese Cakes', '2023-04-27 12:16:16'),
(5, 1, 'Baked Fresh Daily', '2023-04-27 12:19:33');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `post_image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `title`, `slug`, `body`, `post_image`, `created_at`) VALUES
(1, 2, 1, 'Pita Bread', 'Pita-Bread', 'Munchers have a lot of options are available when it comes to how they consume pita bread. This involves stuffing the pita with various portions of meat for a pleasant and delectable sandwich or dipping it in sauces after being split into wedges. The Middle East is where pita bread is from, and it is cooked at extremely high temperatures, which causes the water in the dough to evaporate quickly. It makes it easier to make the bread\'s \"pocket,\" or enormous air bubble in the center, which is ideal for stuffing with meat and other ingredients. Wheat flour is mainly used to make pita bread.', 'pita-bread.jpg', '2023-04-27 12:18:00'),
(2, 1, 1, 'Higher Fibre Loaf', 'Higher-Fibre-Loaf', 'Our Higher Fibre Loaf has a lot of good fiber! Although it offers four times as much fiber, the bread tastes just as good as our standard White Loaf. Make sure you save yourself a slice of this bread because it tends to disappear quickly.It can be grilled cheese-styled and dipped into creamy tomato soup to evoke childhood memories, or it can be toasted for the ideal BLT. Family Faves is a selection of desserts, loaves of bread, and snacks that customers have chosen as their favorites. ', 'multigrain.jpg', '2023-04-27 12:18:52'),
(4, 5, 1, 'Fresh-baked recipes', 'Fresh-baked-recipes', 'We have some tested and tried recipes for you from the Bakers Fresh kitchen! If you would like more updates like recipes, tips, and more. Please fill up the recipe form to reach us.', 'new-2.jpg', '2023-04-27 12:21:17'),
(7, 5, 1, 'Focaccia Bread', 'Focaccia-Bread', 'It was Italy that gave rise to this kind of bread. Typically, focaccia is baked in a baking pan, forming a flat loaf. Like pizza dough, focaccia dough is brushed with olive oil before baking. The crust is thin, delicate, and crunchy when it is finished. Sea salt is another often used additive, and many bakers also add herbs and garlic as desired. You can eat focaccia by itself, dip it in soup, or use it to wipe a plate clean of sauce residue.', 'italian_herb_garlic.jpg', '2023-04-27 12:23:14'),
(8, 1, 1, 'Baguette', 'Baguette', 'The yeast bread known as a baguette is French in origin. The bread is a long, rectangular shape with slits that is distinctive. As the bread bakes, the gas can expand via these slits.\r\n\r\nBaguettes, also known as French bread or French sticks, are usually manufactured from flour, water, yeast, and salt, and bread enthusiasts worldwide are familiar with their appearance.', 'Focaccia-Bread-5.jpg', '2023-04-27 12:24:09'),
(11, 1, 1, 'Multigrain Bread', 'Multigrain-Bread', 'Multigrain bread typically contains grains such as oats, barley, flax, and millet, in addition to others, giving it a substantial, rich flavor. Multigrain bread is a tasty and nutritious option for bread, thanks to its many ingredients. Multigrain bread is ideal for sandwiches, toast in the morning, and dipping in herb-infused vegetable oil or sauces.', 'multigrain.jpg', '2023-04-27 12:27:51'),
(13, 4, 1, 'Cheese Cakes', 'Cheese-Cakes', 'Cheesecake is a sweet dessert consisting of one or more layers. The main, and thickest, layer consists of a mixture of a soft, fresh cheese, eggs, and sugar. If there is a bottom layer, it most often consists of a crust or base made from crushed cookies, graham crackers, pastry, or sometimes sponge cake. ', 'cheesecake.jpg', '2023-04-27 12:30:54'),
(14, 5, 1, 'New Harvest Grain', 'New-Harvest-Grain', 'We have some tested and tried recipes for you from the Bakers Fresh kitchen! If you would like more updates like recipes, tips, and more. Please fill up the recipe form to reach us.', 'high-fibre.jpg', '2023-04-27 12:32:47'),
(15, 5, 1, 'Celebrate Fresh', 'Celebrate-Fresh', 'In our shop, we strive to create the most beautiful, delicious breads by hand, without sacrificing quality or creativity.\r\n\r\nWe live, eat, and breathe baking. Since we are actual bakers at heart, we enjoy interacting with other enthusiastic bakers so that we may encourage one another and share our enthusiasm for baking. We think that the best ingredients should be used when baking.\r\nOur mission is simple: to provide you with fresh, handmade breads that you can taste the difference in. We hope you\'ll find something here for everyone on your list!', 'serve-fresh.jpg', '2023-04-27 12:34:35'),
(16, 5, 1, '9-Grain or Whole Wheat', '9-Grain-or-Whole-Wheat', 'Make sure you save yourself a slice of this bread because it tends to disappear quickly.It can be grilled cheese-styled and dipped into creamy tomato soup to evoke childhood memories, or it can be toasted for the ideal BLT.\r\n\r\nFamily Faves is a selection of desserts, loaves of bread, and snacks that customers have chosen as their favorites. People have spoken, and their tastebuds have concurred: YUM! Please find out more about our recently baked bestsellers right now.', 'picture2.jpg', '2023-04-27 12:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `zipcode`, `email`, `username`, `password`, `register_date`) VALUES
(1, 'Paras', 'T6J 4L8', 'mmunish1@nait.ca', 'Paras Bhagat', '1031150600c50a2234fafdd898ba881e', '2023-04-27 11:48:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
