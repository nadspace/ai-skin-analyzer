-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2025 at 07:51 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asya_smart_skin`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `skin_type` enum('normal','oily','dry','combination','sensitive') NOT NULL,
  `concern` enum('acne','wrinkles','dryness','oiliness','redness') NOT NULL,
  `image_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `price`, `skin_type`, `concern`, `image_url`) VALUES
(1, 'Hydrating Face Cream', 'A moisturizer that keeps your skin soft and hydrated.', 29.99, 'dry', 'dryness', 'images/hydrating_cream.avif'),
(2, 'Acne Control Serum', 'A serum designed to reduce acne and inflammation.', 39.99, 'oily', 'acne', 'images/acne_serum.avif'),
(3, 'Anti-Wrinkle Night Cream', 'A night cream that reduces the appearance of wrinkles.', 49.99, 'normal', 'wrinkles', 'images/wrinkle_cream.webp'),
(4, 'Oil-Free Moisturizer', 'Lightweight moisturizer for oily and acne-prone skin.', 60.00, 'oily', 'oiliness', 'images/oil_free_moisturizer.webp'),
(5, 'Sensitive Skin Soothing Gel', 'Calms irritation and redness.', 24.99, 'sensitive', 'redness', 'images/soothing_gel.jpg'),
(6, 'Soothing Chamomile Cleanser', 'A gentle cleanser that calms sensitive skin.', 25.00, 'sensitive', 'redness', 'images/chamomile_cleanser.webp'),
(7, 'Hydra Boost Water Gel', 'A water-based moisturizer that provides intense hydration.', 35.00, 'combination', 'dryness', 'images/hydra_boost_gel.png'),
(8, 'Charcoal Detox Mask', 'A deep cleansing mask that removes impurities and excess oil.', 40.00, 'oily', 'oiliness', 'images/charcoal_mask.avif'),
(13, 'Pore-Minimizing Clay Mask', 'A clay mask that tightens pores and controls shine.', 42.00, 'oily', 'oiliness', 'images/clay_mask.webp'),
(14, 'Firming Peptide Moisturizer', 'A moisturizer that improves skin elasticity and firmness.', 65.00, 'normal', 'wrinkles', 'images/peptide_moisturizer.avif'),
(20, 'Blemish Control Spot Treatment', 'A fast-acting treatment for acne breakouts.', 28.00, 'oily', 'acne', 'images/blemish_treatment.avif'),
(22, 'Tea Tree Acne Gel', 'A spot treatment that targets acne with antibacterial properties.', 32.00, 'oily', 'acne', 'images/tea_tree_gel.jpg'),
(23, 'Collagen Infused Sleeping Mask', 'An overnight mask that boosts collagen production.', 70.00, 'normal', 'wrinkles', 'images/collagen_mask.webp'),
(26, 'Aloe Vera Soothing Gel', 'A cooling gel that hydrates and soothes irritated skin.', 22.00, 'sensitive', 'redness', 'images/aloe_vera_gel.webp'),
(28, 'Deep Hydration Sleeping Mask', 'An overnight mask that locks in moisture for plumper skin.', 65.00, 'dry', 'dryness', 'images/hydration_mask.avif'),
(29, 'Salicylic Acid Exfoliating Cleanser', 'A cleanser that unclogs pores and reduces breakouts.', 38.00, 'oily', 'acne', 'images/salicylic_cleanser.avif'),
(32, 'Retinol Anti-Aging Serum', 'A powerful serum that reduces fine lines and improves texture.', 85.00, 'normal', 'wrinkles', 'images/retinol_serum.avif'),
(33, 'Hyaluronic Acid Water Cream', 'A lightweight gel-cream that deeply hydrates the skin.', 50.00, 'combination', 'dryness', 'images/hyaluronic_water_cream.avif'),
(35, 'Centella Calming Toner', 'A soothing toner that reduces redness and irritation.', 34.00, 'sensitive', 'redness', 'images/centella_toner.avif'),
(37, 'Bakuchiol Gentle Retinol Alternative', 'A plant-based retinol alternative for sensitive skin.', 79.00, 'sensitive', 'wrinkles', 'images/bakuchiol_serum.avif'),
(38, 'Squalane Hydrating Oil', 'A lightweight facial oil that locks in moisture.', 55.00, 'dry', 'dryness', 'images/squalane_oil.avif'),
(39, 'Chamomile & Green Tea Toner', 'A calming toner with antioxidant benefits.', 32.00, 'sensitive', 'redness', 'images/chamomile_toner.jpg'),
(45, 'Lavender Night Repair Cream', 'A calming night cream that promotes skin recovery.', 68.00, 'normal', 'wrinkles', 'images/lavender_night_cream.jpeg'),
(47, 'Hydrating Aloe Gel', 'A soothing gel with aloe vera.', 22.00, 'sensitive', 'redness', 'images/aloe_gel.jpg'),
(52, 'Retinol Repair Night Cream', 'A cream to reduce signs of aging.', 55.00, 'normal', 'wrinkles', 'images/retinol_cream.avif'),
(54, 'Hydrating & Repair Night Cream', 'A night cream that deeply hydrates and repairs skin overnight.', 159.00, 'normal', 'wrinkles', 'images/repair_night_cream.webp'),
(55, 'Anti-Blemish Spot Treatment', 'A targeted spot treatment to reduce acne and prevent scars.', 30.00, 'normal', 'acne', 'images/anti_blemish_spot.avif'),
(56, 'Oil-Free Mattifying Gel', 'A gel-based moisturizer that controls excess sebum production.', 38.00, 'oily', 'oiliness', 'images/mattifying_gel.jpg'),
(59, 'Ceramide Barrier Repair Cream', 'A rich moisturizer that strengthens the skin barrier and prevents moisture loss.', 88.00, 'dry', 'dryness', 'images/ceramide_cream.avif'),
(60, 'Hyaluronic Acid Hydration Booster', 'A serum that provides intense hydration and plumps the skin.', 76.00, 'dry', 'wrinkles', 'images/hyaluronic_booster.avif'),
(61, 'Calming & Nourishing Mask', 'A soothing mask that reduces redness and irritation.', 10.00, 'dry', 'redness', 'images/calming_nourishing_mask.avif'),
(62, 'Balancing Face Toner', 'A toner that hydrates dry areas while controlling excess oil.', 32.00, 'combination', 'oiliness', 'images/balancing_toner.avif'),
(63, 'Multi-Tasking Moisturizer', 'A moisturizer that balances hydration for combination skin.', 48.00, 'combination', 'dryness', 'images/multi_tasking_moist.avif'),
(64, 'Bakuchiol Firming Serum', 'A gentle retinol alternative that improves skin elasticity.', 60.00, 'combination', 'wrinkles', 'images/bakuchiol_serum.webp'),
(65, 'Centella Recovery Cream', 'A calming cream that reduces irritation and strengthens skin.', 52.00, 'sensitive', 'redness', 'images/centella_cream.jpg'),
(67, 'Soothing Hydration Mist', 'A facial mist infused with chamomile to calm sensitive skin.', 30.00, 'sensitive', 'dryness', 'images/hydration_mist.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `rating`, `comment`, `created_at`) VALUES
(1, 'anis', 4, 'website ini sangat bagus dan berguna, kini saya tahu jenis kulit saya jenis apa', '2025-02-13 06:45:28'),
(2, 'aqhilah', 4, 'best', '2025-02-25 17:21:04'),
(3, 'princess lili', 5, 'bestnye website ni, saya suke  sangat, pandainya buat website ><', '2025-03-10 16:44:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
