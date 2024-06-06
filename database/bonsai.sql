-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 06, 2024 lúc 02:42 PM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bonsai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `cat_name`, `cat_slug`, `created_at`, `updated_at`) VALUES
(1, 'Cây cảnh để bàn', 'cay-canh-de-ban', NULL, NULL),
(2, 'Cây chậu treo', 'cay-chau-treo', NULL, '2024-06-04 10:58:47'),
(3, 'Cây xương rồng', 'cay-xuong-rong', NULL, NULL),
(4, 'Cây thủy sinh', 'cay-thuy-sinh', NULL, NULL),
(5, 'Cây ăn trái', 'cay-an-trai', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '2024_06_03_000000_create_pro_category_table', 1),
(3, '2024_06_03_000001_create_table_products', 1),
(4, '2024_06_05_025644_create_posts_table', 2),
(5, '2024_06_05_025815_edit_posts_table', 2),
(6, '2024_06_05_025917_create_orders_table', 2),
(7, '2024_06_05_030059_create_order_items_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `total_price` decimal(10,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `total_price`, `created_at`, `updated_at`) VALUES
(1, 'hun', 'hungdm@newwave.vn', 800000.00, '2024-06-04 11:45:08', '2024-06-04 11:45:08'),
(2, 'abc', 'abc@gmail.com', 400000.00, '2024-06-04 11:50:39', '2024-06-04 11:50:39'),
(3, 'Sơn Tùng', 'abc@gmail.com', 550000.00, '2024-06-04 11:54:52', '2024-06-04 11:54:52'),
(4, 'Phan Công Hiệu', 'phanconghieu12@gmail.com', 200000.00, '2024-06-05 08:37:30', '2024-06-05 08:37:30'),
(5, 'Phan Công Hiệu', 'phanconghieu12@gmail.com', 200000.00, '2024-06-05 08:40:23', '2024-06-05 08:40:23'),
(6, 'Phan Công Hiệu', 'phanconghieu12@gmail.com', 600000.00, '2024-06-05 23:24:14', '2024-06-05 23:24:14'),
(7, 'Phan Công Hiệu', 'phanconghieu10@gmail.com', 400000.00, '2024-06-06 00:16:44', '2024-06-06 00:16:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_items`
--

CREATE TABLE `order_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` decimal(10,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_items`
--

INSERT INTO `order_items` (`id`, `order_id`, `product_name`, `product_price`, `quantity`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cây vạn lộc', 200000.00, 4, '2024-06-04 11:45:08', '2024-06-04 11:45:08'),
(2, 2, 'Cây vạn lộc', 200000.00, 1, '2024-06-04 11:50:39', '2024-06-04 11:50:39'),
(3, 2, 'Cây xương rồng tháp', 200000.00, 1, '2024-06-04 11:50:39', '2024-06-04 11:50:39'),
(4, 3, 'Cây vạn lộc', 200000.00, 1, '2024-06-04 11:54:52', '2024-06-04 11:54:52'),
(5, 3, 'Cây xương rồng tháp', 200000.00, 1, '2024-06-04 11:54:52', '2024-06-04 11:54:52'),
(6, 3, 'Cây ổi', 150000.00, 1, '2024-06-04 11:54:52', '2024-06-04 11:54:52'),
(7, 4, 'Cây vạn lộc', 200000.00, 1, '2024-06-05 08:37:30', '2024-06-05 08:37:30'),
(8, 5, 'Cây vạn lộc', 200000.00, 1, '2024-06-05 08:40:23', '2024-06-05 08:40:23'),
(9, 6, 'Cây vạn lộc', 200000.00, 2, '2024-06-05 23:24:14', '2024-06-05 23:24:14'),
(10, 6, 'Cây xương rồng tháp', 200000.00, 1, '2024-06-05 23:24:14', '2024-06-05 23:24:14'),
(11, 7, 'Cây vạn lộc', 200000.00, 1, '2024-06-06 00:16:44', '2024-06-06 00:16:44'),
(12, 7, 'Cây xương rồng tháp', 200000.00, 1, '2024-06-06 00:16:44', '2024-06-06 00:16:44');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `post_slug` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `images` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `posts`
--

INSERT INTO `posts` (`id`, `title`, `description`, `post_slug`, `created_at`, `updated_at`, `images`) VALUES
(6, 'Ý nghĩa của cây Bạch Mã Hoàng Tử và những điều ít người biết', 'Cây Bạch Mã Hoàng Tử được nhiều người trồng làm cảnh trong nhà nhưng không phải ai cũng hiểu rõ về ý nghĩa của cây. Cách trồng cũng như cách chăm sóc cây Bạch Mã Hoàng Tử có đơn giản như mọi người nghĩ? Hãy cùng theo dõi bài viết này và bạn sẽ nhận được câu trả lời.', '12345', '2024-06-04 10:52:42', '2024-06-05 22:54:01', '1717653241.jpg'),
(7, 'Khám phá ý nghĩa phong thủy của cây Phú Quý, cách trồng và cách chăm sóc cây Phú Quý', 'Bạn là người yêu cây cảnh và đang muốn trồng cây Phú Quý? Thế nhưng bạn chưa biết gì về nó ngoài cái tên. Công dụng của cây Phú Quý là gì, ý nghĩa phong thủy của cây Phú Quý như thế nào, cây Phú Quý hợp mệnh gì, cách trồng cây Phú Quý làm sao. Bài viết dưới đây sẽ cung cấp cho bạn đầy đủ các thông tin. Hãy khám phá từng phần để hiểu rõ hơn về loại cây này nhé.', 'abdafdsfsadf', '2024-06-04 10:56:41', '2024-06-05 22:55:01', '1717653301.jpg'),
(8, 'Cách bố trí cây cảnh trên bàn làm việc hợp lý', 'Trên bàn làm việc nếu được trang trí vài chậu cây cảnh thì sẽ cực kỳ thu hút, vừa giải tỏa stress hiệu quả, lại mang đến may mắn cho chủ nhân. Tuy nhiên, bạn phải biết cách bố trí cây cảnh trên bàn làm việc sao cho hợp lý. Hãy tham khảo thử bài viết dưới đây để nắm một vài bí quyết bạn nhé.', 'abdf', '2024-06-04 11:03:32', '2024-06-05 22:55:40', '1717653340.jpg'),
(9, 'Hé lộ các loại cây Trầu Bà độc đáo không phải ai cũng biết', 'Trầu Bà hay còn có tên tiếng Anh là Pothos (Epipremnum Aureum) là loài rất đa dạng về màu sắc, hình thái nhưng chỉ có Trầu Bà xanh hoặc vàng là thông dụng. Bài viết sẽ hé lộ chi tiết về các loại cây Trầu Bà độc đáo không phải ai cũng biết. Hãy cùng theo dõi bạn nhé.', 'bao-bong-da', '2024-06-04 11:48:47', '2024-06-05 22:59:01', '1717653541.jpg'),
(10, 'Cách bố trí cây cảnh trong sân vườn hợp phong thủy', 'Cách bố trí cây cảnh trong sân vườn là phải tuân theo hướng nhà ở. Việc chọn hướng để xây nhà là rất quan trọng theo phong thủy và thực tế cuộc sống. Quan niệm của người xưa cho rằng nhà ở không nên quay mặt (cửa chính) vào hướng Tây, Tây Bắc. Một phần vì đây là hướng “tử” (hướng đặt đầu khi chôn người chết), phần khác do nhà quay về hướng này sẽ hứng lấy ánh nắng gay gắt của mặt trời vào buổi chiều.\r\n\r\nDo đó, nếu vì bất khả kháng, nhà phải ở hướng Tây hoặc Tây Bắc thì nên chọn những loại cây chịu nắng tốt, tán rộng cây to che chắn được cho ngôi nhà, mang khí dương để xua đuổi điều xui xẻo. Ví dụ như: Thiết Mộc Lan,Thiên Thanh, Đinh Lăng, …v.v\r\n\r\nTùy vào từng vùng, nhà ở có thể quay mặt về hướng gió (như gió Lào hướng Tây Nam, gió bấc hướng Đông Bắc, …) thì nên trồng cây lá dày thân lớn để ngăn gió lạnh, gió độc xâm nhập vào nhà. Điển hình là các cây Bàng Singapore, cây Đại Phú Gia, ...\r\n\r\nHướng Nam và Đông Nam thì có gió lành thổi tới (khí tốt) nên trồng cây thấp, nhỏ để đón gió. Có thể trồng một vài cây tùng nhỏ ở hướng Nam, vì đây cũng là hướng tốt và cây trồng vị trí đấy hợp phong thủy.\r\n\r\nHướng Đông có nắng sớm ấm áp, mang sinh khí cho ngôi nhà, nên trồng những cây nhỏ nhắn, màu sắc tươi tắn để đón nắng và phản chiếu cho không gian thêm sinh động. Đây cũng là vị trí cần đặt nhiều cây có ý nghĩa phong thủy tích cực để mang năng lượng cho các thành viên trong gia đình.', 'bao-bong-da', '2024-06-04 11:53:23', '2024-06-05 22:58:20', '1717653500.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `pro_name` varchar(255) NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `describe` varchar(255) NOT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `pro_slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `pro_name`, `price`, `image`, `describe`, `quantity`, `pro_slug`, `created_at`, `updated_at`, `category_id`) VALUES
(2, 'Cây xương rồng tháp', 200000, 'https://vuoncayviet.com/data/items/1136/xuong-rong-thap-1.jpg', 'Đây là mô tả', 10, 'cay-xuong-rong-thap', NULL, NULL, 3),
(3, 'Cây ổi', 150000, 'https://vuoncayviet.com/data/items/969/cay-oi-at001-1.jpg', 'Đây là mô tả', 10, 'cay-oi', NULL, NULL, 5),
(4, 'Cây lan tím', 85000, 'https://vuoncayviet.com/data/items/919/cay-lan-tim.jpg', 'Đây là mô tả', 10, 'cay-lan-tim', NULL, NULL, 2),
(5, 'Cây trường sinh', 190000, 'https://vuoncayviet.com/data/items/941/cay-truong-sinh-de-ban-vuoncayviet.com.jpg', 'Đây là mô tả', 10, 'cay-truong-sinh', NULL, NULL, 1),
(6, 'Cây hải đường', 200000, 'https://vuoncayviet.com/data/items/1218/cay-hoa-hai-duong.jpg', 'Đây là mô tả', 10, 'cay-hai-duong', NULL, NULL, 2),
(7, 'Cây thài lài sọc treo', 200000, 'https://vuoncayviet.com/data/items/1217/thai-lai-soc-treo.png', 'Đây là mô tả', 10, 'cay-thai-lai-soc-treo', NULL, NULL, 2),
(8, 'Cây trạng nguyên', 300000, 'https://vuoncayviet.com/data/items/1096/cay-trang-nguyen-1.png', 'Đây là mô tả', 10, 'cay-trang-nguyen', NULL, NULL, 1),
(9, 'Cây phú quý thủy sinh', 200000, 'https://vuoncayviet.com/data/items/899/cay-phu-quy-de-ban-phong-thuy.jpg', 'Đây là mô tả', 10, 'cay-phu-quy-thuy-sinh', NULL, NULL, 4),
(10, 'Cây phú quý', 200000, 'https://vuoncayviet.com/data/items/963/cay-phu-quy.jpg', 'Đây là mô tả', 10, 'cay-phu-quy', NULL, NULL, 1),
(11, 'Cây vạn lộc', 200000, 'https://vuoncayviet.com/data/items/949/cay-van-loc-vuoncayviet.jpg', 'Đây là mô tả', 10, 'cay-van-loc', NULL, NULL, 1),
(12, 'Cây xương rồng tháp', 200000, 'https://vuoncayviet.com/data/items/1136/xuong-rong-thap-1.jpg', 'Đây là mô tả', 10, 'cay-xuong-rong-thap', NULL, NULL, 3),
(13, 'Cây ổi', 150000, 'https://vuoncayviet.com/data/items/969/cay-oi-at001-1.jpg', 'Đây là mô tả', 10, 'cay-oi', NULL, NULL, 5),
(14, 'Cây lan tím', 85000, 'https://vuoncayviet.com/data/items/919/cay-lan-tim.jpg', 'Đây là mô tả', 10, 'cay-lan-tim', NULL, NULL, 2),
(15, 'Cây trường sinh', 190000, 'https://vuoncayviet.com/data/items/941/cay-truong-sinh-de-ban-vuoncayviet.com.jpg', 'Đây là mô tả', 10, 'cay-truong-sinh', NULL, NULL, 1),
(16, 'Cây hải đường', 200000, 'https://vuoncayviet.com/data/items/1218/cay-hoa-hai-duong.jpg', 'Đây là mô tả', 10, 'cay-hai-duong', NULL, NULL, 2),
(17, 'Cây thài lài sọc treo', 200000, 'https://vuoncayviet.com/data/items/1217/thai-lai-soc-treo.png', 'Đây là mô tả', 10, 'cay-thai-lai-soc-treo', NULL, NULL, 2),
(18, 'Cây trạng nguyên', 300000, 'https://vuoncayviet.com/data/items/1096/cay-trang-nguyen-1.png', 'Đây là mô tả', 10, 'cay-trang-nguyen', NULL, NULL, 1),
(19, 'Cây phú quý thủy sinh', 200000, 'https://vuoncayviet.com/data/items/899/cay-phu-quy-de-ban-phong-thuy.jpg', 'Đây là mô tả', 10, 'cay-phu-quy-thuy-sinh', NULL, NULL, 4),
(20, 'Cây phú quý', 200000, 'https://vuoncayviet.com/data/items/963/cay-phu-quy.jpg', 'Đây là mô tả', 10, 'cay-phu-quy', NULL, NULL, 1),
(21, 'Cây vạn lộc', 200000, 'https://vuoncayviet.com/data/items/949/cay-van-loc-vuoncayviet.jpg', 'Đây là mô tả', 10, 'cay-van-loc', NULL, NULL, 1),
(22, 'Cây xương rồng tháp', 200000, 'https://vuoncayviet.com/data/items/1136/xuong-rong-thap-1.jpg', 'Đây là mô tả', 10, 'cay-xuong-rong-thap', NULL, NULL, 3),
(23, 'Cây ổi', 150000, 'https://vuoncayviet.com/data/items/969/cay-oi-at001-1.jpg', 'Đây là mô tả', 10, 'cay-oi', NULL, NULL, 5),
(24, 'Cây lan tím', 85000, 'https://vuoncayviet.com/data/items/919/cay-lan-tim.jpg', 'Đây là mô tả', 10, 'cay-lan-tim', NULL, NULL, 2),
(25, 'Cây trường sinh', 190000, 'https://vuoncayviet.com/data/items/941/cay-truong-sinh-de-ban-vuoncayviet.com.jpg', 'Đây là mô tả', 10, 'cay-truong-sinh', NULL, NULL, 1),
(26, 'Cây hải đường', 200000, 'https://vuoncayviet.com/data/items/1218/cay-hoa-hai-duong.jpg', 'Đây là mô tả', 10, 'cay-hai-duong', NULL, NULL, 2),
(27, 'Cây thài lài sọc treo', 200000, 'https://vuoncayviet.com/data/items/1217/thai-lai-soc-treo.png', 'Đây là mô tả', 10, 'cay-thai-lai-soc-treo', NULL, NULL, 2),
(28, 'Cây trạng nguyên', 300000, 'https://vuoncayviet.com/data/items/1096/cay-trang-nguyen-1.png', 'Đây là mô tả', 10, 'cay-trang-nguyen', NULL, NULL, 1),
(29, 'Cây phú quý thủy sinh', 200000, 'https://vuoncayviet.com/data/items/899/cay-phu-quy-de-ban-phong-thuy.jpg', 'Đây là mô tả', 10, 'cay-phu-quy-thuy-sinh', NULL, NULL, 4),
(30, 'Cây phú quý', 200000, 'https://vuoncayviet.com/data/items/963/cay-phu-quy.jpg', 'Đây là mô tả', 10, 'cay-phu-quy', NULL, NULL, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('VUqwhGEAOu57OJvAjj6ju5T0qQvbhQ3QTpoPhrA4', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoicTBTSWRMZHZ6NjBMaGt1UjNVWGZTNjZMTlRwSUNiRllvZDlUck1BYSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDM6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi91c2VyX21hbmFnZW1lbnQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO30=', 1717676604);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `phone` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `google_id` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `phone`, `email_verified_at`, `password`, `google_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Admin', 'phanconghieu29@gmail.com', 'admin', '0123467892', NULL, '$2y$12$kMO3J3xaIiWqcHTChcLiHukICuwk/BHMlgh9SYG3yQ5bFNSBnJkKe', NULL, NULL, '2024-06-04 08:30:03', '2024-06-05 19:51:20'),
(4, 'Phan Công Hiệu', 'phanconghieu10@gmail.com', 'user', '0355949570', NULL, '$2y$12$19CYOtqSDz22qL.q0ReDIeeTwVg12JnX85f/qMkKoNqiPEAfFwHp6', NULL, NULL, '2024-06-06 00:15:35', '2024-06-06 00:15:35');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_items_order_id_foreign` (`order_id`);

--
-- Chỉ mục cho bảng `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Chỉ mục cho bảng `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Chỉ mục cho bảng `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
