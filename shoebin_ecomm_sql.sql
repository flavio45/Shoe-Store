-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.14-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             11.1.0.6116
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for shoebin_ecomm
CREATE DATABASE IF NOT EXISTS `shoebin_ecomm` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;
USE `shoebin_ecomm`;

-- Dumping structure for table shoebin_ecomm.cart
CREATE TABLE IF NOT EXISTS `cart` (
  `cartID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `productID` int(11) NOT NULL,
  `size` int(11) NOT NULL,
  PRIMARY KEY (`cartID`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table shoebin_ecomm.cart: ~0 rows (approximately)
/*!40000 ALTER TABLE `cart` DISABLE KEYS */;
/*!40000 ALTER TABLE `cart` ENABLE KEYS */;

-- Dumping structure for table shoebin_ecomm.categories
CREATE TABLE IF NOT EXISTS `categories` (
  `categoryID` int(11) NOT NULL AUTO_INCREMENT,
  `categoryName` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`categoryID`),
  UNIQUE KEY `categoryName` (`categoryName`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table shoebin_ecomm.categories: ~5 rows (approximately)
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`categoryID`, `categoryName`) VALUES
	(1, 'Athletic'),
	(2, 'Boots'),
	(3, 'Comfort'),
	(4, 'Sandals'),
	(5, 'Sneakers');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Dumping structure for table shoebin_ecomm.currentuser
CREATE TABLE IF NOT EXISTS `currentuser` (
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Dumping data for table shoebin_ecomm.currentuser: ~0 rows (approximately)
/*!40000 ALTER TABLE `currentuser` DISABLE KEYS */;
INSERT INTO `currentuser` (`userID`) VALUES
	(2);
/*!40000 ALTER TABLE `currentuser` ENABLE KEYS */;

-- Dumping structure for table shoebin_ecomm.orders
CREATE TABLE IF NOT EXISTS `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) DEFAULT NULL,
  `productID` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table shoebin_ecomm.orders: ~0 rows (approximately)
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;

-- Dumping structure for table shoebin_ecomm.shoes
CREATE TABLE IF NOT EXISTS `shoes` (
  `productID` int(11) NOT NULL AUTO_INCREMENT,
  `productName` varchar(50) DEFAULT NULL,
  `categoryID` int(11) DEFAULT NULL,
  `categoryName` varchar(50) DEFAULT NULL,
  `productBrand` varchar(50) DEFAULT NULL,
  `listPrice` float DEFAULT NULL,
  `refImage` varchar(100) DEFAULT NULL,
  `productQuantity` int(11) NOT NULL,
  `productDesc` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`productID`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COMMENT='Main database for 4300 ecommerce website project, The Shoe Bin';

-- Dumping data for table shoebin_ecomm.shoes: ~39 rows (approximately)
/*!40000 ALTER TABLE `shoes` DISABLE KEYS */;
INSERT INTO `shoes` (`productID`, `productName`, `categoryID`, `categoryName`, `productBrand`, `listPrice`, `refImage`, `productQuantity`, `productDesc`) VALUES
	(2, 'Kaptir Sneaker', 5, 'Sneakers', 'adidas', 79.99, 'shoes/sneakers/kaptir.png', 8, 'With a sock-like profile and some serious style, the Adidas Kaptir shoe can turn heads. Knit upper of this running-inspired shoe is backed by pillow-soft cushioning for improved comfort.'),
	(3, 'SenseBOUNCE+ Street Running Shoe', 1, 'Athletic', 'adidas', 79.99, 'shoes/athletic/sensebounce_street.png', 97, 'Your go-to pair for long city runs, the adidas SenseBOUNCE+ Street sneaker features a knit upper that provides a supportive, flexible fit. Energized cushioning delivers a springy ride, and deep grooves in the outsole offer reliable traction on uneven surf'),
	(4, 'Adilette Cloudfoam Slide Sandal', 4, 'Sandals', 'adidas', 34.99, 'shoes/sandals/adilette_slide.png', 9, 'Slip on the adidas Adilette Cloudfoam slide sandals for a comfy, casual style! These sporty flat sandals are quick and easy for the guy on the go!'),
	(5, 'Adidas Cloudfoam Pure Sneaker', 5, 'Sneakers', 'adidas', 69.99, 'shoes/sneakers/cloadfoam_pure.png', 5, 'From a day at the gym to shopping with the squad, the Cloudfoam Pure sneaker from adidas will have you mastering the athleisure look. A cloudfoam midsole and memory foam footbed keep this sneaker lightweight and comfortable.'),
	(6, 'Edge Lux 3 Lightweight Running Shoe', 1, 'Athletic', 'adidas', 79.99, 'shoes/athletic/edge_lux_lightweight.png', 14, 'The Edge Lux 3 running shoe from adidas has everything you need to stay comfortable during your whole workout. A BOUNCE footbed and EVA midsole keeps this lightweight sneaker extra cushioned.'),
	(7, 'Puremotion Adapt Sneaker', 5, 'Sneakers', 'adidas', 59.99, 'shoes/sneakers/puremotion_adapt.png', 16, 'Experience the next gen level of style and comfort donning the Adidas Puremotion Adapt sneaker. Designed with crisscross straps on the forefoot, this slip-on sneaker has cozy footbed and supportive sole.'),
	(8, 'Mayari Sandal', 4, 'Sandals', 'Birkenstock', 99.99, 'shoes/sandals/mayari.png', 2, 'Birkenstock delivers comfort and style with the Mayari flat sandals. Pair these trendy slides with jean shorts and a knotted tee for a weekend-ready look.'),
	(9, 'Arizona Slide Sandal', 4, 'Sandals', 'Birkenstock', 99.99, 'shoes/sandals/arizona_slide.png', 13, 'The classic footbed sandal look from Birkenstock never goes out of style! Comfy and versatile, the Arizona flat sandal will become your new go-to slide!'),
	(10, 'Della Combat Boot', 2, 'Boots', 'Madden Girl', 49.99, 'shoes/boots/della_combat.png', 6, 'Channel your edgy side in the Della combat boots from Madden Girl. These booties feature a chunky block heel, moto strap feature, and distressed finish that will go great with skinny jeans or long skirts.'),
	(11, 'Tivoli IV Snow Boot', 2, 'Boots', 'Sorel', 129.99, 'shoes/boots/tivoli_snow.png', 15, 'Designed to withstand heavy rain or light snow, the Tivoli IV lace-up boots from Sorel pack serious treads and insulation to outlast winter conditions. A fully waterproof upper and rubberized shell defy cold weather in sporty-chic style.'),
	(12, 'Breakwater Duck Boot', 2, 'Boots', 'Sperry', 89.99, 'shoes/boots/breakwater.png', 12, 'Commute or travel with ease in the Breakwater boots from Sperry. Soft lining and a plush footbed create comfort from the inside out, while a traction sole prevents slips during icy seasons.'),
	(13, '1460 Boot', 2, 'Boots', 'Dr. Martens', 149.99, 'shoes/boots/1460_doc.png', 11, 'The iconic 1460 8-eye combat boot from Dr. Martens will allow you to embrace your inner rebel. This ankle boot features an AiWai sole to disperse underfoot pressure and resist slips.'),
	(14, 'Combs Boot', 2, 'Boots', 'Dr. Martens', 99.99, 'shoes/boots/combs_doc.png', 9, 'Nothing beats the cool styling and well-loved quality of a pair of Dr. Martens. With a durable leather upper and the brand\'s signature rubber gum lug sole, the Combs boot is a lasting style icon that mixes combat accents with contrast yellow stitching and'),
	(15, 'Vivaldi Chukka Boot', 2, 'Boots', 'Aiden & Mason', 59.99, 'shoes/boots/vivaldi_chukka.png', 6, 'Upgrade cool weather looks with classic appeal in the Vivaldi chukka boot from Aiden & Mason. This desert boot features a tailored leather design that you can easily dress up or down with any outfit.'),
	(16, 'Cora Riding Boot', 2, 'Boots', 'Cole Haan', 169.99, 'shoes/boots/cora_riding.png', 17, 'The Cora boot from Cole Haan offers timeless appeal. The smooth leather flaunts a subtle sheen and side goring gives your strut a little extra stretch!'),
	(17, 'Zion Hiking Shoe', 1, 'Athletic', 'Merrell', 149.99, 'shoes/athletic/zion_hike.png', 12, 'Conquer off-road adventures confidently with the Zion trail-ready boot from Merrell. Built with a M Start DRY waterproof membrane, this sneaker features a secure rubber toe cap, dual-density EVA inserts, and FleggsPlaid technology.'),
	(18, 'Kahuna Sandal', 4, 'Sandals', 'Merrell', 59.99, 'shoes/sandals/kahuna.png', 7, 'Go anywhere in comfortable style with the Kahuna sandal from Merrell. A Merrell air cushion in the heel absorbs shock and adds stability while the M Start FRESH lining reduces odor.'),
	(19, 'Ivo Trail Breeze Hiking Shoe', 1, 'Athletic', 'Columbia', 79.99, 'shoes/athletic/trail_breeze.png', 3, 'The Ivo Trail Breeze hiking shoe from Columbia is designed for adventure seekers. It features moisture-wicking sockliner, Techheavy cushioned midsole for superior comfort and rugged traction outsole.'),
	(20, 'Gel-Pulse 11 Running Shoe', 1, 'Athletic', 'ASICS', 89.99, 'shoes/athletic/gel_pulse.png', 11, 'The GEL-Pulse 11 running shoe from ASICS has all the technology to support your new personal record. With rearfoot GEL cushioning, an AmpliFoam midsole, and Guidance Line in the sole, this sneaker will become an instant favorite.'),
	(21, 'Cloud 2.0 Lightweight Running Shoe', 1, 'Athletic', 'On', 129.99, 'shoes/athletic/cloud_lightweight.png', 12, 'Brought to you by innovative Swiss engineering, the On Cloud 2.0 men\'s running shoe offers a minimalist design with maximum return. This sneaker is as lightweight as it is comfortable, and strides atop a flexible sole that\'s separated by a central channel'),
	(22, 'Stretch Go Glide Running Shoe', 1, 'Athletic', 'Saucony', 69.99, 'shoes/athletic/stretch_glide.png', 16, 'Give it your all when sporting the Stretch Go Glide running shoe from Saucony. This men\'s performance shoe features EVERUN technology and a removable contoured insole for steady comfort.'),
	(23, 'Trevor Slipper', 3, 'Comfort', 'Minnetonka', 39.99, 'shoes/comfort/trevor_slip.png', 10, 'Slide your foot into ultimate comfort! The Trevor moccasin slipper from Minnetonka will leave you feet feeling warm and pampered all day long.'),
	(24, 'Top Flip Flop', 4, 'Sandals', 'Havaianas', 14.98, 'shoes/sandals/top_flop.png', 13, 'The Top flip flop from Havaianas will complete your warm-weather shoe collection. This thong sandal features a fresh camo print and will be perfect for the pool or beach.'),
	(25, 'Pete Loafer', 3, 'Comfort', 'Xray', 39.99, 'shoes/comfort/pete_loaf.png', 9, 'Your little guy looks handsome when wearing the Peter loafer from Max + Jake. This slip-on features a penny keeper accent and cushioned footbed for daylong wear.'),
	(26, 'No Bad Days Platform Slip-On Sneaker', 3, 'Comfort', 'Dr. Scholl\'s', 49.99, 'shoes/comfort/no_bad_days.png', 8, 'Make every step more comfortable and trendy when wearing the No Bad Days slip-on sneaker. This silhouette features a thick platform and an embossed texture that will add extra allure!'),
	(27, 'Bobs Keepsakes Ice Angel Slipper', 3, 'Comfort', 'Sketchers', 39.99, 'shoes/comfort/bobs_keepsakes.png', 5, 'Stay cozy and comfortable in classic style with the BOBS from Skechers Keepsakes Ice Storm. Soft sweater knit fabric upper in a casual comfortable slipper with faux fur lining and Plush Foam footbed.'),
	(28, 'Revolution 5 Running Shoe', 1, 'Athletic', 'Nike', 64.99, 'shoes/athletic/revolution_5.png', 9, 'Go for classic comfort during your next workout with the men\'s Revolution 5 running shoe from Nike. This sneaker rocks a cushioned footbed, thick foam midsole, and padded collar work together to keep every stride supported.'),
	(29, 'Zoom Winflo 7 Running Shoe', 1, 'Athletic', 'Nike', 89.99, 'shoes/athletic/zoom_winflo.png', 10, 'Pick up your speed in the Zoom Winflo 7 running shoe from Nike. This runner features a breathable lining and a foam midsole for the right amount of shock absorption.'),
	(30, 'Air Max VG-R Sneaker', 5, 'Sneakers', 'Nike', 89.99, 'shoes/sneakers/air_max_vgr.png', 5, 'Show off athleisure vibes with the men\'s Air Max VG-R sneaker from Nike. A chunky foam midsole is upgraded with the classic comfort of the Air Max unit for added bounce to your step.'),
	(31, 'Asher Deluxe Slip-On Sneaker', 5, 'Sneakers', 'Vans', 59.99, 'shoes/sneakers/asher_deluxe.png', 2, 'The Asher Deluxe slip-on sneaker from Vans rocks a classic design that is easy to pair with any outfit. Finished with a padded collar and Ortholite® footbed, this low-top will become your new go-to.'),
	(32, 'Ward Lo Sneaker, Basic', 5, 'Sneakers', 'Vans', 59.99, 'shoes/sneakers/ward_lo.png', 9, 'Sleek street style gets a memorable update in the Ward Lo sneaker from Vans. With a trendy color palette and casual styling, this low-top will pair with anything from distressed jeans or midi skirts.'),
	(33, 'Ward Lo Sneaker, Checkered', 5, 'Sneakers', 'Vans', 59.99, 'shoes/sneakers/ward_checkered.png', 4, 'Update your classic collection with the Ward Lo sneaker from Vans. With a canvas construction and checkered midsole, this low-top rocks the perfect amount of eye-catching appeal. '),
	(34, 'Atwood Deluxe Sneaker', 5, 'Sneakers', 'Vans', 64.99, 'shoes/sneakers/atwood_deluxe.png', 7, 'Upgrade your Vans collection with the Atwood Deluxe sneaker! A thick Orthoheavy footbed makes these low-tops so comfortable you\'ll never want to take them off.'),
	(35, 'Axelion Ultra Sneaker', 5, 'Sneakers', 'Puma', 69.99, 'shoes/sneakers/axelion_ultra.png', 10, 'Upgrade your sporty style with the Axelion Ultra sneaker from Puma. With a futuristic lace-up design and supportive ArchTec technology, this low-top will have you feeling modern and sleek.'),
	(36, 'Dominion Walking Shoe', 1, 'Athletic', 'Ryka', 84.99, 'shoes/athletic/dominion_walking.png', 9, 'Take your daily workout to the next level in the Dominion walking shoe from Ryka. These lace-ups feature a responsive RE-ZORB midsole and rubber sole to keep you feeling on top.'),
	(37, 'Tour Knit Sneaker', 5, 'Sneakers', 'Propet', 74.99, 'shoes/sneakers/tour_knit.png', 15, 'The Tour Knit sneaker from Propet rocks sporty style in a comfortable way. With a X69 Open Cell foam footbed with Orthoheavy, this lace-up supports every step.'),
	(38, 'Debbie Loafer', 3, 'Comfort', 'Vionic', 49.99, 'shoes/comfort/debbie_loafer.png', 4, 'Experience effortless support in the podiatrist-designed Debbie slip-ons from Vionic. The contoured footbed with massaging nubs conforms to your arches like a natural footprint, while a durable outsole keeps you moving with ease.'),
	(39, 'Nebi Sandal', 4, 'Sandals', 'Dolce Vita', 49.99, 'shoes/sandals/nebi_sandal.png', 7, 'Covering a variety of color mashups and pattern options, the Nebi sandals from Dolce Vita are a sweet summer staple that slide on effortlessly!'),
	(40, 'Classic Lined Clog', 3, 'Comfort', 'Crocs', 49.99, 'shoes/comfort/lined_clog.png', 5, 'The Classic clog from Crocs combines timeless comfort and eye-catching style. Designed with leopard prints, it showcases pivoting heel strap for a snug fit and a cozy liner that provides cushioned comfort.');
/*!40000 ALTER TABLE `shoes` ENABLE KEYS */;

-- Dumping structure for table shoebin_ecomm.users
CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `userFirstName` text NOT NULL,
  `userLastName` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `email` (`email`) USING HASH
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

-- Dumping data for table shoebin_ecomm.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`userID`, `userFirstName`, `userLastName`, `email`, `password`) VALUES
	(1, 'Jonathan', 'Test', 'jtest77@gmail.com', 'dog'),
	(2, 'Graham', 'Kidd', 'graham.kidd98@gmail.com', 'pass');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
