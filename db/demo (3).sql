-- Adminer 4.8.1 MySQL 8.0.16 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `detail_product`;
CREATE TABLE `detail_product` (
  `id_detail` int(11) NOT NULL,
  `name_product` varchar(259) NOT NULL,
  `qty_product` int(11) NOT NULL,
  `price_product` int(11) NOT NULL,
  KEY `id_detail` (`id_detail`),
  CONSTRAINT `detail_product_ibfk_1` FOREIGN KEY (`id_detail`) REFERENCES `order_product` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `detail_product` (`id_detail`, `name_product`, `qty_product`, `price_product`) VALUES
(4,	'Điện Thoại 3',	1,	1000000),
(5,	'Sạc Không Dây',	4,	2500000),
(4,	'Điện Thoại 3',	1,	1000000),
(5,	'Sạc Không Dây',	4,	2500000);

DROP TABLE IF EXISTS `manufactures`;
CREATE TABLE `manufactures` (
  `manu_id` int(11) NOT NULL AUTO_INCREMENT,
  `manu_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`manu_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `manufactures` (`manu_id`, `manu_name`) VALUES
(4,	'TOSHIBA  '),
(1,	'Samsung'),
(2,	'Sony '),
(3,	'Xiaomi Mi');

DROP TABLE IF EXISTS `order`;
CREATE TABLE `order` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(9) NOT NULL,
  `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `order_detail`;
CREATE TABLE `order_detail` (
  `product_id` int(11) NOT NULL,
  `order_id` mediumint(9) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  KEY `order_id` (`order_id`),
  KEY `product_id` (`product_id`),
  CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `order_product`;
CREATE TABLE `order_product` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_user` varchar(250) NOT NULL,
  `tel_user` varchar(250) NOT NULL,
  `email_user` varchar(250) NOT NULL,
  `address_user` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `order_product` (`id`, `name_user`, `tel_user`, `email_user`, `address_user`) VALUES
(2,	'Do Nguyen Toan113',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak'),
(3,	'Do Nguyen Toan113',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak'),
(4,	'Do Nguyen Toan',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak'),
(5,	'Do Nguyen Toan',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak'),
(6,	'Do Nguyen Toan',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak'),
(7,	'Do Nguyen Toan',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak'),
(8,	'Do Nguyen Toan teo anh em',	'0344842232',	'donguyentoan2003@gmail.com',	'xom 1 thon 13 dak lak');

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `manu_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `description` text NOT NULL,
  `feature` tinytext NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `products` (`id`, `name`, `manu_id`, `type_id`, `price`, `image`, `description`, `feature`, `created_at`) VALUES
(4,	'Điện Thoại 3',	1,	1,	1000000,	'OpLung.jpg',	'Chống Vỡ Và Sướt Màng Hình Của Bạn',	'1',	'2022-10-25 22:54:31'),
(5,	'Sạc Không Dây',	1,	2,	2500000,	'CucSac.jpg',	'Giúp Bạn Sạc Pin Lúc Cần Thiết',	'1',	'2022-10-25 22:55:21'),
(6,	'Bút Cảm Ứng',	2,	2,	5000000,	'But.jpg',	'Giúp Bạn Viết Chữ Và Nhanh Hơn ',	'1',	'2022-10-25 23:29:48'),
(7,	'TiVi',	2,	2,	30000,	'TiVi.jpg',	'Giúp Bạn Coi WordCup Trong Tháng 11 Sắp Tới Nhanh Tay Mua Về Còn Kịp',	'1',	'2022-10-25 23:30:18'),
(8,	'Đồng Hồ',	2,	2,	30000000,	'images (2).jpeg',	'Coi Giờ GB',	'1',	'2022-10-25 23:31:41'),
(9,	'Tai Nghe Không Giây',	2,	3,	7000000,	'tainghe.jpg',	'Giúp Bạn Nghe Âm Thanh Rõ Hơn',	'1',	'2022-10-25 23:32:52'),
(10,	'Type-C',	2,	3,	600000,	'TySe-C.jpg',	'Dùng Để Sạc Pin',	'1',	'2022-10-25 23:33:48'),
(11,	'Tủ Lạnh',	3,	3,	1000000,	'tulang.png',	'Làm Mát Thức Ăn',	'1',	'2022-11-10 16:59:38'),
(12,	'Máy Giặt',	3,	3,	2000000,	'Maygiat.jpg',	'Giặt Quần áo',	'1',	'2022-11-10 17:00:24'),
(13,	'Bếp Từ',	3,	4,	100000,	'BepTu.jpg',	'Làm Nóng Đồ Ăn',	'1',	'2022-11-10 16:58:35'),
(14,	'Lò Vi Sóng',	3,	4,	200000,	'visong1.jpeg',	'Nướng Đồ Ăn',	'1',	'2022-11-10 17:02:54'),
(15,	'Nồi Cơm Điện',	3,	4,	400000,	'NoiCom.jpg',	'Nấu Gạo Thành Cơm',	'1',	'2022-11-10 17:03:59'),
(16,	'Bình Gar',	4,	4,	5000000,	'BinhGar.jpg',	'Làm Có Lửa Bếp Gar',	'1',	'2022-11-10 17:18:19'),
(17,	'Bếp Gar',	4,	5,	1000000,	'bepga.jpeg',	'Chiên Nấu Đồ Ăn',	'1',	'2022-11-10 17:20:13'),
(18,	'Máy Đánh Răng',	4,	5,	7000000,	'MayDanh.jpg',	'Đánh Răng Bạn Sạch Hơn',	'1',	'2022-11-10 17:22:07'),
(19,	'Máy Đánh Trứng',	4,	5,	1000000,	'danhtrung.jpeg',	'Dùng Để Đánh Trứng',	'1',	'2022-11-10 16:58:35'),
(20,	'Máy Chơi Game',	4,	5,	2000000,	'maychoigame.jpg',	'Chơi Game Giải Trí',	'1',	'2022-11-10 17:25:11'),
(42,	'Điện Thoại 3',	1,	1,	50000000,	'iphone14.jpeg',	'Thiết Bị Cần Thiết',	'1',	'2022-10-25 22:31:45');

DROP TABLE IF EXISTS `protypes`;
CREATE TABLE `protypes` (
  `type_id` int(11) NOT NULL AUTO_INCREMENT,
  `type_name` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`type_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `protypes` (`type_id`, `type_name`) VALUES
(1,	'Điện Thoại '),
(2,	'MacBook Air'),
(3,	'Máy Tính Bảng'),
(4,	'TiVi'),
(5,	'Máy Giặt');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` mediumint(9) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` varchar(250) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `user`, `password`) VALUES
(1,	'admin',	'827ccb0eea8a706c4c34a16891f84e7b'),
(2,	'admin1',	'827ccb0eea8a706c4c34a16891f84e7b'),
(11,	'thao',	'dc513ea4fbdaa7a14786ffdebc4ef64e');

-- 2022-11-24 14:47:43
