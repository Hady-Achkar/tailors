-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 03, 2021 at 02:38 PM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tailors_senior`
--
CREATE DATABASE IF NOT EXISTS `tailors_senior` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `tailors_senior`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_email` varchar(255) DEFAULT NULL,
  `admin_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`) VALUES
(1, 'admin@admin.com', '$2y$10$hSiPmt7P5UgujhV.cXiSOeI/5qhKYE1dbxHiJPSz/1kWAU52s9zZ6');

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_items_id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `premade_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `tailor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `contact_id` int(11) NOT NULL,
  `contact_msg` text DEFAULT NULL,
  `contact_phone` int(10) DEFAULT NULL,
  `contact_email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`contact_id`, `contact_msg`, `contact_phone`, `contact_email`) VALUES
(1, 'Nice Work Guys!', 123123, 'hady@gmail.com'),
(2, 'Hello??', 123123123, 'mememem@hotmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contracts`
--

CREATE TABLE `contracts` (
  `id` int(11) NOT NULL,
  `tailor_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'Pending One',
  `price` int(11) NOT NULL DEFAULT 0,
  `delivery` int(11) DEFAULT NULL,
  `example_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contracts`
--

INSERT INTO `contracts` (`id`, `tailor_id`, `customer_id`, `status`, `price`, `delivery`, `example_img`) VALUES
(17, 63, 3, 'Pending One', 0, NULL, '1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_password` varchar(255) DEFAULT NULL,
  `customer_phone` int(10) DEFAULT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `customer_address`, `customer_image`) VALUES
(3, 'Renad', 'renad@customer.com', '$2y$10$/mi9vHutUFz.HjH2cDCepOdyHZ3D.3IZNyWY.rRy76G926yXbZtUK', 2147483647, 'Saudi Arabia - Jeddah', 'cop and babe.png');

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE `customer_details` (
  `measurement_id` int(11) NOT NULL,
  `chest` varchar(255) DEFAULT NULL,
  `belly` varchar(255) DEFAULT NULL,
  `shoulders` varchar(255) DEFAULT NULL,
  `neck` varchar(255) DEFAULT NULL,
  `back` varchar(255) DEFAULT NULL,
  `buttocks` varchar(255) DEFAULT NULL,
  `waist` varchar(255) DEFAULT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `arm` varchar(255) NOT NULL,
  `theigh` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_details`
--

INSERT INTO `customer_details` (`measurement_id`, `chest`, `belly`, `shoulders`, `neck`, `back`, `buttocks`, `waist`, `customer_id`, `arm`, `theigh`) VALUES
(2, '1', '2', '3', '4', '5', '6', '8', 3, '12', '9');

-- --------------------------------------------------------

--
-- Table structure for table `fabric`
--

CREATE TABLE `fabric` (
  `fabric_id` int(11) NOT NULL,
  `fabric_title` varchar(255) DEFAULT NULL,
  `fabric_desc` text DEFAULT NULL,
  `fabric_img` text DEFAULT NULL,
  `fabric_link` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fabric`
--

INSERT INTO `fabric` (`fabric_id`, `fabric_title`, `fabric_desc`, `fabric_img`, `fabric_link`) VALUES
(1, 'Chiffon', 'Chiffon a lightweight, plain-woven fabric with a slight shine. Chiffon has small puckers that make the fabric a little rough to the touch. These puckers are created through the use of s-twist and z-twist crepe yarns, which are twisted counter-clockwise and clockwise respectively. Crepe yarns are also twisted much tighter than standard yarns. The yarns are then woven in a plain weave, which means a single weft thread alternates over and under a single warp thread. The sheer fabric can be woven from a variety of textile types, both synthetic and natural, like silk, nylon, rayon, or polyester', './fabric/chiffon.jpg', 'https://www.masterclass.com/articles/what-is-chiffon-fabric-learn-about-the-characteristics-of-this-luxury-fabric-and-how-chiffon-is-made'),
(2, 'Canvas', 'Canvas is a plain-weave fabric typically made out of heavy cotton yarn and, to a lesser extent, linen yarn. Canvas fabric is known for being durable, sturdy, and heavy duty. By blending cotton with synthetic fibers, canvas can become water resistant or even waterproof, making it a great outdoor fabric.', './fabric/canvas fabric.jpg', 'https://www.masterclass.com/articles/what-is-canvas-understanding-how-canvas-is-made-and-the-difference-between-canvas-and-duck#how-is-canvas-made'),
(3, 'Cashmere', 'Cashmere is a type of wool fabric that is made from cashmere goats and pashmina goats. Cashmere is a natural fiber known for its extremely soft feel and great insulation.The fibers are very fine and delicate,feeling almost like a silk fabric to the touch. Cashmere is significantly warmer and lighter than sheep’s wool.Often cashmere is made into a wool blend and mixed with other types of wool, like merino, to give it added weight, since cashmere fibers are very fine and thin', './fabric/Cashmere-wool-pile.jpg', 'https://www.masterclass.com/articles/fabric-guide-what-is-cashmere#what-is-cashmere'),
(4, 'Chenille', 'Chenille is the name for both the type of yarn and the fabric that makes the soft material. The threads are purposefully piled when creating the yarn, which resembles the fuzzy exterior of the caterpillar. Chenille is also a woven fabric that can be made from a variety of different fibers, including cotton, silk, wool, and rayon', './fabric/Chenille fabric.jfif', 'https://www.masterclass.com/articles/what-is-chenille'),
(5, 'Cotton', 'Cotton is a staple fiber, which means it is composed of different, varying lengths of fibers. Cotton is made from the natural fibers of cotton plants. Cotton is primarily composed of cellulose, an insoluble organic compound crucial to plant structure, and is a soft and fluffy material. The term cotton refers to the part of the cotton plant that grows in the boil, the encasing for the fluffy cotton fibers. Cotton is spun into yarn that is then woven to create a soft, durable fabric used for everyday garments, like t-shirts, and home items, such as bed sheets. Cotton prints and cotton solids are both available designs.', './fabric/cooten fabric.jpg', 'https://www.masterclass.com/articles/what-is-cotton'),
(6, 'Crepe', 'Crepe is a silk, wool, or synthetic fabric with a distinctive wrinkled and bumpy appearance. Crêpe is usually a light-to- medium-weight fabric. Crêpe fabric can be used to make clothes, like dresses, suits, blouses, pants, and more. Crêpe is also popular in home decor for items like curtains, window treatments, and pillows', './fabric/Crêpe fabric.jfif', 'https://www.masterclass.com/articles/learn-about-crepe-fabric'),
(7, 'Georgette', 'Georgette is a type of crêpe fabric that is typically made from pure silk but can also be made from synthetic fibers like rayon, viscose, and polyester. Crêpe georgette is woven using tightly twisted yarns, which create a slight crinkle effect on the surface Georgette is sheer and lightweight and has a dull, matte finish.. Silk georgette is very similar to silk chiffon, which is also a type of crêpe fabric, but georgette is not as sheer as chiffon because of the tighter weave. Georgette fabrics are sometimes sold in solid colors but often georgette is printed and boasts colorful, floral prints.', './fabric/Georgette Fabric.jpg', 'https://www.masterclass.com/articles/what-is-georgette-fabric'),
(8, 'Damask', 'Damask is a reversible, jacquard-patterned fabric, meaning that the pattern is woven into the fabric, instead of printed on it. The fabric’s design is created through the weave, which is a combination of two different weaving techniques—the design is woven using a satin weave, while the background is achieved through a plain, twill, or sateen weave. Damask patterns can be either multi-colored or single colored. Damasks can be made from a variety of different textiles, including silk, linen, cotton, wool, or synthetic fibers, like rayon', './fabric/Damask fabric.jfif', 'https://www.masterclass.com/articles/everything-to-know-about-damask-fabric-history-characteristics-uses-and-care-for-damask'),
(9, 'Gingham', 'Gingham is a cotton fabric, or sometimes a cotton blend fabric, made with dyed yarn woven using a plain weave to form a checked pattern. Gingham is usually a two-color pattern, and popular combinations are red and white gingham or blue and white gingham. The checked pattern can come in a variety of sizes. Gingham pattern is reversible and appears the same on both sides. Gingham is a popular fabric due to its low cost and ease of production. Gingham is used frequently for button-down shirts, dresses, and tablecloths.', './fabric/Gingham.jfif', 'https://www.masterclass.com/articles/what-is-gingham'),
(10, 'Lace', 'Lace is a delicate fabric made from yarn or thread, characterised by open-weave designs and patterns created through a variety of different methods. Lace fabric was originally made from silk and linen, but today cotton thread and synthetic fibers are both used. Lace is a decorative fabric used to accent and embellish clothing and home decor items. Lace is traditionally considered a luxury textile, as it takes a lot of time and expertise to make.', './fabric/la.jfif', 'https://www.masterclass.com/articles/learn-about-lace-discover-the-history-of-lace'),
(11, 'Jersey', 'Jersey is a soft stretchy, knit fabric that was originally made from wool. Today, jersey is also made from cotton, cotton blends, and synthetic fibers. The right side of jersey knit fabric is smooth with a slight single rib knit, while the backside of jersey is piled with loops. The fabric is usually light-to-medium weight and is used for a variety of clothing and household items, like sweatshirts or bed sheets.', './fabric/Jersey Fabric.jfif', 'https://www.masterclass.com/articles/what-is-jersey-fabric'),
(12, 'Leather', 'Leather is any fabric that is made from animal hides or skins, and different leathers result from different types of animals and different treatment techniques. While cowhide is the most popular animal skin used for leather, comprising about 65 percent of all leather produced, almost any animal can be made into leather, from crocodiles to pigs to stingrays. Leather is a durable, wrinkle-resistant fabric, and it can take on many different looks and feels based on the type of animal, grade, and treatment.', './fabric/Leather.jpg', 'https://www.masterclass.com/articles/learn-about-leather'),
(13, 'Muslin', 'Muslin is a loosely-woven cotton fabric. It’s made using the plain weave technique, which means that a single weft yarn alternates over and under a single warp yarn. Muslin is known as the material used in fashion prototypes to test patterns before cutting and stitching the final product. Muslin is ideal for testing patterns, as its lightweight and gauzy, therefore it can mimic drape and fit well and is simple to sew with.', './fabric/Musli.jpg', 'https://www.masterclass.com/articles/fabric-101-what-is-muslin-how-to-use-and-care-for-muslin'),
(14, 'Modal', 'Modal fabric is a semi-synthetic fabric made from beech tree pulp that is used primarily for clothing, such as underwear and pajamas, and household items, like bed sheets and towels. Modal is a form of rayon, another plant-based textile, though it is slightly more durable and flexible than rayon. Modal is often blended with other fibers like cotton and spandex for added strength. Modal is considered a luxurious textile thanks to both its soft feel and high cost, as it is more expensive than either cotton or viscose.', './fabric/Modal.jfif', 'https://www.masterclass.com/articles/fabric-guide-what-is-modal-fabric'),
(15, 'Merino Woo', 'Merino wool is a type of wool gathered from the coats of Merino sheep. T While traditional wool is notorious for being itchy, merino wool is one of the softest forms of wool and doesn’t aggravate the skin. This is because of the small diameter of the fine merino fibers, which makes it more flexible and pliable and therefore less itchy. Merino wool is considered a luxurious fiber and is used frequently for socks and outdoor clothing. Merino wool is known for being odor-resistant, moisture-wicking, and breathable.', './fabric/Merino Wool.jpg', './fabric/Merino Wool.jpg'),
(16, 'Linen', 'Linen is an extremely strong, lightweight fabric made from the flax plant. Linen is a common material used for towels, tablecloths, napkins, and bedsheets, and the term “linens,” i.e. bed linens, still refers to these household items, though they are not always made out of linen fabric. The material is also used for the inner layer of jackets, hence the name “lining.” It’s an incredibly absorbent and breathable fabric, which makes it ideal for summer clothing, as the lightweight qualities allow air to pass through and moderate the body temperature.', './fabric/Linen.jfif', 'https://www.masterclass.com/articles/what-is-linen-everything-you-need-to-know-about-using-and-caring-for-linen'),
(17, 'Organza', 'Organza is a lightweight, sheer, plain-woven fabric that was originally made from silk. The material can also be made from synthetic fibers, primarily polyester and nylon. Synthetic fabrics are slightly more durable, but the fabric is very delicate and prone to frays and tears. Organza is also characterized by very small holes throughout the fabric, which are the spaces between the warp and weft thread in the plain-weave pattern. The quality of organza is defined as the number of holes per inch—more holes indicate better quality organza. Organza is extremely popular for wedding gowns and evening wear, as it is shimmery and translucent quality which creates decadent silhouettes.', './fabric/Organza.jpg', 'https://www.masterclass.com/articles/what-is-organza-fabric'),
(18, 'Polyester', 'Polyester is a man-made synthetic fiber created from petrochemicals, like coal and petroleum. Polyester fabric is characterized by its durable nature; however it is not breathable and doesn’t absorb liquids, like sweat, well. Polyester blends are also very popular as the durable fiber can add strength to another fabric, while the other fabric makes polyester more breathable.', './fabric/Polyester.jfif', 'https://sewport.com/fabrics-directory/polyester-fabric'),
(19, 'Satin', 'Satin is one of the three major textile weaves, along plain weave and twill. The satin weave creates an elastic, shiny, soft fabric with a beautiful drape. Satin fabric is characterized by a soft, lustrous surface on one side, with a duller surface on the other side. This is a result of the satin weaving technique, and there are many variations on what defines a satin weave.', './fabric/Satin.jfif', 'https://www.masterclass.com/articles/what-is-satin-fabric-a-guide-to-the-types-characteristics-and-uses-for-satin'),
(20, 'Silk', 'Silk is a natural fiber produced by the silk worm, an insect, as a material for their nests and cocoons. Silk is known for its shine and softness as a material. It is an incredibly durable and strong material with a beautiful drape and sheen. Silk is used for formal attire, accessories, bedding, upholstery, and more.', './fabric/Silk.jfif', 'https://www.masterclass.com/articles/fabric-guide-what-is-silk-how-to-use-and-care-for-silk-fabric'),
(21, 'Tweed', 'Tweed is a rough woven fabric usually made from wool. The fibers can be woven using a plain weave or twill weaves. It is an extremely warm, hard-wearing fabric that is thick and stiff. Wool tweed is often woven using different colored threads to achieve dynamic patterns and colors, frequently with small squares and vertical lines. Tweed is very popular for suiting and jackets, which were originally made out of the material for hunting activities.', './fabric/Tweed.jpg', 'https://www.masterclass.com/articles/what-is-tweed'),
(22, 'Taffeta', 'Taffeta is a crisp, plain-woven fabric made most often from silk, but it can also be woven with polyester, nylon, acetate, or other synthetic fibers. Taffeta fabric typically has a lustrous, shiny appearance. Taffeta can vary in weight from light to medium and in levels of sheerness, depending on the type of fiber used and the tightness of the weave. Taffeta is a popular lining fabric, as the material is decorative and soft, and it is also used for evening wear and home decor.', './fabric/Taffeta Fabric.jfif', 'https://www.masterclass.com/articles/what-is-taffeta-fabric-how-taffeta-is-made-and-the-characteristics-of-taffeta-fabric'),
(23, 'Suede', 'Suede is a type of leather made from the underside of the animal skin, giving it a soft surface. Suede is usually made from lambskin, but it is also made from other types of animals, including goats, pigs, calves, and deer. Suede is softer thinner, and not as strong as full-grain, traditional leather. However, suede is very durable, and due to its thin nature, it’s pliable and can be molded and crafted easily. Suede is used for footwear, jackets, and accessories, like belts and bags.', './fabric/Suede Fabric.jpg', 'https://www.masterclass.com/articles/what-is-taffeta-fabric-how-taffeta-is-made-and-the-characteristics-of-taffeta-fabric'),
(24, 'Spandex', 'Also known as Lycra or elastane, Spandex is a synthetic fiber characterized by its extreme elasticity. Spandex is blended with several types of fibers to add stretch and is used for everything from jeans to athleisure to hosiery.', './fabric/Spandex.jpg', 'https://sewport.com/fabrics-directory/spandex-fabric'),
(25, 'Velvet', 'Velvet is a soft, luxurious fabric that is characterized by a dense pile of evenly cut fibers that have a smooth nap. Velvet has a beautiful drape and a unique soft and shiny appearance due to the characteristics of the short pile fibers. Velvet fabric is popular for evening wear and dresses for special occasions, as the fabric was initially made from silk. Cotton, linen, wool, mohair, and synthetic fibers can also be used to make velvet, making velvet less expensive and incorporated into daily-wear clothes. Velvet is also a fixture of home decor, where it’s used as upholstery fabric, curtains, pillows, and more.', './fabric/Velvet.jfif', 'https://www.masterclass.com/articles/what-is-velvet'),
(26, 'Viscose', 'Viscose is a semi-synthetic type of rayon fabric made from wood pulp that is used as a silk substitute, as it has a similar drape and smooth feel to the luxury material. It is a silk-like fabric and is appealing because it is much cheaper to produce. Viscose is a versatile fabric used for clothing items such as blouses, dresses, and jackets, and around the home in carpets and upholstery.', './fabric/Viscose.jpg', 'https://www.masterclass.com/articles/fabric-guide-what-is-viscose-understanding-viscose-fabric-and-how-viscose-is-made'),
(27, 'Twill', 'Twill is one of the three major types of textile weaves, along with satin and plain weaves. The distinguishing characteristic of the twill weave is a diagonal rib pattern. Twill weaves have a distinct, often darker colored front side (called the wale) with a lighter back. Twill has high thread count, which means that the fabric is opaque, thick, and durable. Twill fabrics are rarely printed on, though multiple colored yarns can be used to achieve designs like tweed and houndstooth. The fabric is durable with a beautiful drape, and it is used for denim, chinos, upholstery, and bed linens.', './fabric/Twill.jfif', 'https://www.masterclass.com/articles/what-is-twill-fabric-definition-and-characteristics-of-the-popular-twill-weave');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `premade` tinyint(1) DEFAULT NULL,
  `premade_id` int(11) DEFAULT 0,
  `measurement_id` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `premades`
--

CREATE TABLE `premades` (
  `premade_id` int(11) NOT NULL,
  `premade_img` text DEFAULT NULL,
  `premade_price` decimal(10,0) DEFAULT NULL,
  `premade_size` varchar(255) NOT NULL,
  `premade_color` varchar(255) NOT NULL,
  `premade_name` varchar(255) NOT NULL,
  `premade_description` text NOT NULL,
  `premade_tailor_name` varchar(255) NOT NULL,
  `tailor_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `premades`
--

INSERT INTO `premades` (`premade_id`, `premade_img`, `premade_price`, `premade_size`, `premade_color`, `premade_name`, `premade_description`, `premade_tailor_name`, `tailor_id`) VALUES
(113, 'Sanchez.png', '200', 'L', '#000000', 'item', 'Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon Whatever Descriptioon ', 'Hanan', 63),
(116, 'cooking with MS.png', '250', 'M', '#000000', 'T-Shirt', 'this is a description', 'Renad', 63);

-- --------------------------------------------------------

--
-- Table structure for table `tailors`
--

CREATE TABLE `tailors` (
  `tailor_id` int(11) NOT NULL,
  `tailor_name` varchar(255) DEFAULT NULL,
  `tailor_email` varchar(255) DEFAULT NULL,
  `tailor_password` varchar(255) DEFAULT NULL,
  `tailor_phone` int(100) DEFAULT NULL,
  `tailor_img` varchar(255) DEFAULT NULL,
  `tailor_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tailors`
--

INSERT INTO `tailors` (`tailor_id`, `tailor_name`, `tailor_email`, `tailor_password`, `tailor_phone`, `tailor_img`, `tailor_address`) VALUES
(63, 'Hanan', 'hanan@taillor.com', '$2y$10$5zHs4vWxyszzRgsiOHeyh.8CXDXnW9fEeAsvu00kldmDMOcAjR.B6', 545309343, 'delish.png', 'Saudi Arabia - Riyadh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_items_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `premade_id` (`premade_id`),
  ADD KEY `tailor_id` (`tailor_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `contracts`
--
ALTER TABLE `contracts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tailor_id` (`tailor_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`),
  ADD UNIQUE KEY `customer_email` (`customer_email`),
  ADD UNIQUE KEY `customer_phone` (`customer_phone`);

--
-- Indexes for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD PRIMARY KEY (`measurement_id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Indexes for table `fabric`
--
ALTER TABLE `fabric`
  ADD PRIMARY KEY (`fabric_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `premade_id` (`premade_id`),
  ADD KEY `measurement_id` (`measurement_id`);

--
-- Indexes for table `premades`
--
ALTER TABLE `premades`
  ADD PRIMARY KEY (`premade_id`),
  ADD KEY `tailor_id` (`tailor_id`);

--
-- Indexes for table `tailors`
--
ALTER TABLE `tailors`
  ADD PRIMARY KEY (`tailor_id`),
  ADD UNIQUE KEY `tailor_email` (`tailor_email`),
  ADD UNIQUE KEY `tailor_phone` (`tailor_phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_items_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contracts`
--
ALTER TABLE `contracts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_details`
--
ALTER TABLE `customer_details`
  MODIFY `measurement_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `fabric`
--
ALTER TABLE `fabric`
  MODIFY `fabric_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `premades`
--
ALTER TABLE `premades`
  MODIFY `premade_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `tailors`
--
ALTER TABLE `tailors`
  MODIFY `tailor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`premade_id`) REFERENCES `premades` (`premade_id`),
  ADD CONSTRAINT `cart_items_ibfk_3` FOREIGN KEY (`tailor_id`) REFERENCES `tailors` (`tailor_id`);

--
-- Constraints for table `contracts`
--
ALTER TABLE `contracts`
  ADD CONSTRAINT `contracts_ibfk_1` FOREIGN KEY (`tailor_id`) REFERENCES `tailors` (`tailor_id`),
  ADD CONSTRAINT `contracts_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `customer_details`
--
ALTER TABLE `customer_details`
  ADD CONSTRAINT `customer_details_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`customer_id`);

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`premade_id`) REFERENCES `premades` (`premade_id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`measurement_id`) REFERENCES `contracts` (`id`);

--
-- Constraints for table `premades`
--
ALTER TABLE `premades`
  ADD CONSTRAINT `premades_ibfk_1` FOREIGN KEY (`tailor_id`) REFERENCES `tailors` (`tailor_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
