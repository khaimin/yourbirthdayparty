-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 29, 2017 lúc 06:10 SA
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `yourbirthday`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` int(10) UNSIGNED NOT NULL,
  `idTin` int(11) NOT NULL,
  `tieude` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `noidung` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinhanh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `idTin`, `tieude`, `title`, `mota`, `noidung`, `hinhanh`, `created_at`, `updated_at`) VALUES
(1, 1, 'CÁCH CHỌN MÓN ĂN TRONG TIỆC CƯỚI THÔNG MINH NHẤT', 'Cách chọn món ăn trong tiệc cưới thông minh nhất. Điều này dễ tạo ra sự đơn điệu và nhàm chán trong các tiệc cưới.', 'Cách chọn món ăn trong tiệc cưới thông minh nhất. Tron thường lêó thực đơn giống hệt nhau.', 'CÁCH CHỌN THỰC ĐƠN TRONG TIỆC CƯỚI Tiệc cưới vy đặc biệt khi mùa cưới đến.', 'bbig3.jpg', '2017-06-26 01:55:42', '2017-06-27 06:37:21'),
(2, 2, 'Ý tưởng trang trí cho các buổi lễ thân mật', 'Ý tưởng trang trí cho các buổi lễ thân mật', 'Ý tưởng trang trí cho các buổi lễ thân mật', '100 Layer Cake l', '5.jpg', '2017-06-26 01:58:47', '2017-06-26 01:58:47'),
(3, 3, 'Dành cho các cô dâu tín đồ thời trang', 'GWS giới thiệu xu hướng đám cưới và cảm hứng thời trang hàng ngày cho những cô dâu cá tính và yêu thời trang.', 'GWS giới thiệu xu hướng đám cưới và cảm hứng thời trang hàng ngày cho những cô dâu cá tính và yêu thời trang.', 'GWS giới thiệu xu hướng đám cưới và cảm hứng thời trang hàng ngày cho những cô dâu cá tính và yêu thời trang.', 'khonggian5.jpg', '2017-06-26 01:59:46', '2017-06-26 01:59:46'),
(4, 4, 'Sinh nhật', 'Sinh nhật là gì??', 'Sinh nhật là gì??', 'là ngày tổ chức kỷ niệm này sinh của một người. Sinh nhật thường được tổ chức ở nhiều quốc gi', '1.jpg', '2017-06-26 02:01:51', '2017-06-26 02:01:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cthd`
--

CREATE TABLE `cthd` (
  `id` int(10) UNSIGNED NOT NULL,
  `sohd` int(10) UNSIGNED NOT NULL,
  `idSP` int(10) UNSIGNED NOT NULL,
  `soluong` int(11) NOT NULL,
  `ghichu` int(11) NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `cthd`
--

INSERT INTO `cthd` (`id`, `sohd`, `idSP`, `soluong`, `ghichu`, `mota`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 3, 1, 1, 250000, '', NULL, '2017-06-28 09:37:46', '2017-06-28 09:37:46');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id` int(10) UNSIGNED NOT NULL,
  `sohd` int(11) NOT NULL,
  `nghd` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `user_id` int(10) UNSIGNED NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `ghichu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id`, `sohd`, `nghd`, `user_id`, `tongtien`, `trangthai`, `ghichu`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 2, '2017-06-28 16:37:52', 2, 250000, 0, '0', NULL, '2017-06-28 09:37:43', '2017-06-28 09:37:52');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_san_phams`
--

CREATE TABLE `loai_san_phams` (
  `id` int(10) UNSIGNED NOT NULL,
  `idLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_san_phams`
--

INSERT INTO `loai_san_phams` (`id`, `idLoai`, `tenLoai`, `created_at`, `updated_at`) VALUES
(1, '1', 'banh-kem', '2017-06-26 00:29:35', '2017-06-26 00:29:35'),
(2, '2', 'qua-tang', '2017-06-26 00:31:05', '2017-06-26 00:31:34'),
(3, '3', 'thuc-an', '2017-06-26 00:31:24', '2017-06-26 00:31:24'),
(4, '4', 'trang-tri', '2017-06-26 00:31:48', '2017-06-26 00:31:48'),
(5, '5', 'blog', '2017-06-26 00:32:01', '2017-06-26 00:32:01');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_19_124627_create_loai_san_phams_table', 1),
(4, '2017_04_19_124639_create_san_phams_table', 1),
(5, '2017_05_10_005944_create_blog', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2017_05_21_070736_create_hoadon', 2),
(10, '2017_05_21_084116_create_cthd', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `san_phams`
--

CREATE TABLE `san_phams` (
  `id` int(10) UNSIGNED NOT NULL,
  `idSP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idLoai` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenSP` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idNCC` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hinh` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mota` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `dongia` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trangthai` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `san_phams`
--

INSERT INTO `san_phams` (`id`, `idSP`, `idLoai`, `tenSP`, `idNCC`, `icon`, `hinh`, `mota`, `dongia`, `trangthai`, `created_at`, `updated_at`) VALUES
(1, '1', '1', 'Bánh Kem Trái Tim', '2', 'bk_heart.jpg', 'bk_heart.jpg', 'Công thức pound cake cân bằng về tỉ lệ, cứ 1 bột: 1 bơ :1 trứng: 1 đường nên đây là một trong các loại bánh bông lan đơn giản nhất cho người mới bắt đầu. Tuy vậy, pound cake lại có một nhược điểm là khá khô và nặng nên bánh thường được ăn kèm với mứt trái cây, syrup hoặc thêm trái cây tươi vào để bánh giảm bớt độ bứ và đặc.\r\nCông thức và thao tác làm bánh cũng khá đơn giản. Ngoài ra, bánh còn có kết cấu đặc và nặng cho phép bạn có thể trang trí nhiều loại kem bên trên mà không lo bánh bị “sụp”.\r\n\r\nDòng high-fat cake có cách trộn bột phổ biến nhất là: Đánh bơ đến khi đặc, xốp và chuyển sang màu trắng ngà thì bạn cho từng phần nguyên liệu lỏng gồm nước trái cây (với bánh butter cake), sữa, trứng vào từ từ, cuối cùng bạn mới rây phần nguyên liệu khô gồm bột mì, muối nở hoặc bột nở, các bột phụ gia như trà xanh, ca cao,… vào hỗn hợp, tiếp đó bạn trộn nhanh và nhẹ tay rồi mang đi nướng là xong.\r\nhứa hẹn sẽ đem lại cho bạn cảm giác ngon và ngọt nhất.\r\nĐặc biệt cho các sự kiện tình nhân. nâng cao tình yêu cũng như tạo sự bất ngờ cho bạn gái', '250000', 1, '2017-06-25 10:39:59', '2017-06-25 10:39:59'),
(2, '2', '1', 'Bánh Kem Tim Đôi', '1', 'bk_timdoi.jpg', 'bk_timdoi.jpg', 'Rất thích hợp cho dịp sinh nhât. Đặc biệt là các cặp đôi đáng yêu nhau.!! là một món bánh ngọt và ở dạng kem được làm từ các nguyên liệu như bột mỳ, trứng, sữa bơ…. đánh đều tạo thành một hỗn hợp và sau đó bằng thao tác ép và phun qua một cái túi để định hình thành những bánh nhỏ và cuối cùng được nướng chín.Kì diệu từ lớp vỏ mỏng, mềm và thơm phức đến lớp nhân mịn, béo ngậy và ngọt mát. Dù vỏ bánh ăn giống bánh mì nhưng bánh su kem không có cảm giác khô bởi vì vị kem ngậy hòa với vỏ bánh tan trong miệng. Nó hấp dẫn đến mức ăn một cái rồi lại làm bạn muốn thêm cái nữa. Bánh su kem là loại bánh kem rất được ưa chuộng ở Việt nam', '240000', 1, '2017-06-25 10:52:23', '2017-06-28 10:25:51'),
(3, '4', '1', 'Bánh Kem', '1', 'bk_snow.jpg', 'bk_snow.jpg', 'Đây là bánh Kem với thành phần rất nhìu Kem  . Tạo cảm giác mát lạnh khi nhìn thấy phía ngoài rất nhìu Kem .\r\nbắt đầu phát triển theo xu hướng foam cake với những chiếc bánh nhẹ như mây, mềm như bông. Foam cake có công thức làm bánh hoàn toàn không chứa hoặc chứa rất ít chất béo, chính vì thế kết cấu của bánh nhẹ và không hề ẩm đặc\r\nThay vì dùng muối nở hay bột nở như high-fat cake thì các loại bánh bông lan foam cake đều dựa vào trứng đánh bông để nở. Bánh cũng chứa rất ít bột nên tạo cảm giác nhẹ mềm chứ không nghẹn bứ do chứa nhiều dầu, bơ, bột như các loại bánh bông lan cổ điển.', '150000', 1, '2017-06-25 10:58:02', '2017-06-28 10:25:59'),
(4, '3', '1', 'Bánh Kem', '1', 'bk_3tang.jpg', 'bk_3tang.jpg', 'Đây là bánh kem 3 tầng. giúp tạo cảm giác mới mà sang trọng. tạo cảm giác bắt mắt cũng như thể hiện sự trang nhã.\r\n là món bánh “ăn khách” nhất trong các loại bánh ngọt Pháp. Bánh macaron là loại bánh ngọt được làm từ nguyên liệu chính là trứng, đường cát, bột hạnh nhân, và một chút màu thực phẩm. Phủ bên trong hai lớp bánh giòn tan là lớp nhân được làm từ kem bơ hoặc mứt.\r\nTuy rằng công thức làm macaron khá đơn giản, nhưng để tạo ra những viên macaron ngon và đẹp như người Pháp thì không dễ tẹo nào.Khi làm Macaron phải chú trọng vào tất cả các công đoạn từ thời tiết bên ngoài, nhiệt độ và độ ẩm trong phòng. Đến khâu quấy bột đánh lòng trắng trứng sao cho bông đều lên, lúc cho bột hạnh nhân và đường vào thật khẽ rồi khuấy đều tay để lòng trắng trứng vẫn giữ được độ xốp và quyện vừa đủ.', '400000', 0, '2017-06-25 11:02:20', '2017-06-25 11:02:20'),
(5, '5', '1', 'Bánh Kem Rượu Vang', '2', 'bk_ruouvang.jpg', 'bk_ruouvang.jpg', 'Đây là loại bánh với hương vị đặc biệt của rươu vang. Chắc hẳn sẽ mang lại cho bạn hương vị mới lạ.\r\nKhác hẳn với high-fat cake truyền thống, các loại bánh bông lan hiện đại bắt đầu phát triển theo xu hướng foam cake với những chiếc bánh nhẹ như mây, mềm như bông. Foam cake có công thức làm bánh hoàn toàn không chứa hoặc chứa rất ít chất béo, chính vì thế kết cấu của bánh nhẹ và không hề ẩm đặc.\r\n\r\nThay vì dùng muối nở hay bột nở như high-fat cake thì các loại bánh bông lan foam cake đều dựa vào trứng đánh bông để nở. Bánh cũng chứa rất ít bột nên tạo cảm giác nhẹ mềm chứ không nghẹn bứ do chứa nhiều dầu, bơ, bột như các loại bánh bông lan cổ điển.\r\nKhuôn chiffon có cấu tạo đặc biệt với lõi giữa giúp nhiệt lượng truyền vào bánh đồng đều tránh cho vỏ bánh nở phồng nhưng bên trong bánh chưa chín gây lõm, xẹp bánh.', '3000000', 0, '2017-06-25 11:05:38', '2017-06-25 11:05:38'),
(6, '6', '1', 'Bánh Kem Tình Yêu', '2', 'bk_lov.jpg', 'bk_lov.jpg', 'Với sự mạng mang lại tình iu cho các cặp đôi.Bánh Kem Tình Yêu hứa hẹn sẽ mang lại cho bạn một tình yêu tươi mới.\r\nVới  là công thức bánh tiêu biểu cho dòng foam cake, đây cũng là một cốt bánh có độ thử thách cao đối với người làm bánh. Chiffon cake có rất ít bột, bánh nở dựa hoàn toàn vào lòng trắng trứng đánh bông. Bạn phải nướng bánh ở thời gian chuẩn xác để bánh nở to nhưng phần ruột lại cứng cáp và không bị xẹp khi mang ra khỏi lò nướng.\r\n\r\nKhuôn chiffon có cấu tạo đặc biệt với lõi giữa giúp nhiệt lượng truyền vào bánh đồng đều tránh cho vỏ bánh nở phồng nhưng bên trong bánh chưa chín gây lõm, xẹp bánh.', '260000', 0, '2017-06-25 11:08:43', '2017-06-25 11:08:43'),
(7, '7', '2', 'Hộp Nhạc Đu Quay', '1', 'gift_hopnhac.jpg', 'gift_hopnhac.jpg', 'Chiếc đu quay thường có hai ý nghĩa, một biểu hiện cho niềm vui của ký ức tuổi thơ, có thể là món quà gia đình, món quà tặng trẻ em, hoặc quà tặng tình bạn , món quà cho người bạn thân nhất. Với kiểu dáng đẹp, sản phẩm có thể làm phụ kiện trang trí nhà, bàn làm việc hay góc học tập…\r\nMusic box hình trò chơi đu quay khổng lồ tại các công viên, hàng xịn Made in Taiwan của Đài Loan với thiết kế Nhật Bản.\r\nHộp nhạc luôn là một món quà bất hủ, những bản nhạc ý nghĩa được gửi gắm sẽ luôn thay bạn thể hiện tình cảm với người bạn yêu. ... Music box, hộp nhạc .', '340000', 1, '2017-06-25 11:12:50', '2017-06-28 10:25:45'),
(8, '8', '2', 'Gấu Bông Đoremon', '1', 'gift_gaubong.jpg', 'gift_gaubong.jpg', 'Đây là món quà vô cùng thú vị cho những bạn đặc bịêt là những bạn yêu mến nhân vật Đôremon.\r\nChúng ta từng biết đến nhật vật hoạt hình nổi tiếng người máy Doremon qua những tập truyện tranh, qua phim ảnh hay một số sản phẩm gối ôm. Và ngay bây giờ  là fan của chú mèo máy vừa thông minh vừa tốt bụng này thì hãy nhanh tay đặt hàng tại Quà trực tuyến để đưa em Gấu bông Doremon về nhé.\r\nThiết kế, chất liệu Gấu bông Doremon\r\n\r\nGấu bông Đôrêmon được làm từ chất liệu Bông PP cao cấp cùng với đường may chắc chắn và tinh tế, đảm bảo an toàn và sức khỏe của con người, chất liệu bông mềm mại bên cạnh đó có sự co dãn đàn hồi tốt đem lại sự thoải mái cho người sử dụng.\r\nThiết kế giống với  thân hình mèo máy Đôrêmon. Gấu bông Doremon có những đặc điểm nổi bật mà bạn có thể nhận ra ngay, đó là làn da xanh, cái mũi thì màu đỏ và vật kỉ niệm đáng nhớ mà Đôrêmon luôn mang theo mình là chiếc chuông màu vàng được treo trên cổ.', '500000', 1, '2017-06-25 11:20:02', '2017-06-28 10:25:32'),
(9, '9', '2', 'Bộ chăn gối  gấu lớn', '1', 'gift_changoi.jpg', 'gift_changoi.jpg', 'Bộ chăn gối 3 trong 1 hình gấu lớn với chiếc gối đa năng êm ái và chăn lông ấm áp là món quà vô cùng tâm lý, thể hiện sự quan tâm chu đáo của bạn đến người nhận.Bộ chăn gối 3 trong 1 hình gấu lớn - Điểm nổi bậtBộ chăn gối 3 trong 1 hình gấu lớn được làm bằng bông sạch không gây hại với môi trường và sức khỏe con người. Bộ sản phẩm gồm 1 chiếc gối hình mặt gấu đáng yêu được thiết kế độc đáo với khe hổng ở giữa giúp bạn giữ ấm đôi tay trong mùa đông giá rét. Bạn chỉ cần kéo khóa ở mặt sau gối là có thể nhìn thấy chiếc chăn lông mềm mại, ấm áp được cất gọn gàng.Kích thước: gối 33*28cm; chăn 160 * 95 cm (+-10cm)Tác dụng của Bộ chăn gối 3 trong 1 hình gấu lớnBộ chăn gối 3 trong 1 hình gấu lớn là bộ chăn gối đa năng có thiết kế gọn gàng và tiện dụng, có thể sử dụng như gối ôm, gối tựa lưng, gối kê đầu và gối giữ ấm tay. Chiếc chăn bông mỏng ở phía sau rất thích hợp với môi trường điều hòa và thời tiết se lạnh.Còn gì tuyệt vời hơn khi có chiếc gối vừa để tựa lưng giúp bạn đỡ mỏi, vừa có thể giữ ấm đôi tay và chăn để giữ ấm cơ thể..', '300000', 0, '2017-06-25 11:31:10', '2017-06-25 21:08:17'),
(10, '10', '2', 'Mèo bông mặt bự', '1', 'gift_bongmao.jpg', 'gift_bongmao.jpg', 'Mèo bông mặt bự (mèo bông mặt lớn) là một trong những chú mèo bông được ưa chuộng bởi sự trong sáng, thơ ngây pha chút ngộ nghĩnh đáng yêu.\r\nThiết kế và chất liệu Mèo bông mặt bự\r\n\r\n1. Thiết kế\r\n\r\nMèo bông mặt bự (mèo bông mặt lớn) được thiết kế với kiểu dáng độc đáo với chiếc đuôi dài, mặt lớn cùng nụ cười vô cùng dễ thương. Sản phẩm là sự kết hợp giữa các màu sắc chủ đạo là màu nâu và màu trắng kem, mang lại nét tinh tế, trong sáng. Chiếc nơ đen nổi bật dưới cổ làm cho chú mèo trở nên duyên dáng hơn.\r\n2. Chất liệu\r\n\r\nGấu bông mèo mặt bự được làm từ 100% bông PP, loại bông sạch đảm bảo an toàn sức khỏe, ngay cả với trẻ nhỏ và thân thiện với môi trường. Bề mặt vỏ ngoài được làm bằng nhung Hàn Quốc mang lại sự mềm mại và thích thú.', '350000', 0, '2017-06-25 11:33:18', '2017-06-25 11:33:18'),
(11, '11', '2', 'Hộp nhạc cầu thủy tinh', '1', 'gift_hopnhax.jpg', 'gift_hopnhax.jpg', 'Những món quà sang trọng đầy ý nghĩa luôn là sự lựa chọn hoàn hảo cho những người bạn yêu quý. Hộp nhạc quả cầu thủy tinh Tanabata 60307 - lời chúc hạnh phúc trùng phùng cho lứa đôiÝ tưởng thiết kế - Tanabata - Lễ hội Ngưu lang Chức nữLễ hội Tanabata - tức lễ Thất Tịch - là một trong những ngày lễ đẹp và lãng mạn nhất trong các lễ hội Nhật Bản. Ngày lễ này có nguồn gốc từ Trung Hoa và được biết đến ở khá nhiều nước. Vốn còn có tên là Lễ hội Sao, Lễ Tanabata mang truyền thuyết về người con gái đã dệt nên dải Ngân Hà có mối tình bị chia cắt, và chỉ duy nhất trong ngày 7 tháng 7, hai ngôi sao Altair và Vega ở hai đầu của dải Ngân Hà sẽ được trùng phùng.Truyền thuyết kể rằng, Ngọc Hoàng Thượng Đế có người con gái rất được yêu chiều tên là Orihime (Chức Nữ - ‘chức’ là con thoi trên khung cửi). Nàng dệt lụa rất đẹp, và làm chăm chỉ suốt ngày đêm đến nỗi không gặp được chàng trai nào để tính chuyện se tơ kết tóc.Lo lắng cho con, Ngọc Hoàng bèn đưa một chàng trai tên gọi Hikoboshi (Khiên Ngưu, hay Ngưu Lang như ông bà ta thường kể) đến gặp nàng. Hikoboshi là một chàng chăn bò sống ở bờ bên kia của dải Ngân Hà (Ama no gawa). Hai người vừa gặp mặt đã phải lòng nhau, và họ đã cưới nhau ngay sau đó. Nhưng rồi, vì quá say mê nhau, hai vợ chồng suốt ngày quấn quít, chẳng chịu làm việc gì. Orihime bỏ khung cửi lạnh tanh, còn Hikoboshi cũng để mặc đàn bò không ai chăn dắt. Ngọc Hoàng thấy vậy bèn nổi trận lôi đình, ra lệnh cho hai người phải rời nhau đến sống ở hai bờ cách biệt của sông Ngân, suốt đời không được gặp lại.Thế nhưng, mềm lòng trước nước mắt con gái, ngài lại cho phép họ gặp nhau mỗi năm một lần vào ngày 7 tháng Bảy. Có điều dải Ngân Hà rộng mênh mông, lại không có chiếc cầu nào bắc ngang, làm sao vợ chồng nàng qua nổi? Thương người con gái đau khổ khóc than, đàn chim ô thước bên bờ sông đã lấy thân mình làm cầu cho nàng vượt sông đến gặp chồng.', '400000', 1, '2017-06-25 11:36:09', '2017-06-28 10:25:38'),
(12, '12', '2', 'Thiệp gỗ khung ảnh', '1', 'gift_khungsanh.jpg', 'gift_khungsanh.jpg', 'Thiệp gỗ khung ảnh để bàn Sinh nhật M12\r\n\r\n- Bạn đang tìm một mẫu thiệp sinh nhật lãng mạn mà độc đáo dành tặng bạn gái của mình\r\n\r\n- Bạn muốn dành những thông điệp ngọt ngào gửi tới cô ấy theo cách riêng của bạn?\r\n\r\nVậy thì thiệp gỗ khung ảnh chính là món quà vô cùng ý nghĩa mà bạn dành tặng cho một nửa của mình. \r\n\r\nĐặc điểm nổi bật của thiệp gỗ khung ảnh để bàn sinh nhật M12\r\n\r\n-  Tấm thiệp được làm bằng chất liệu gỗ tự nhiên. Bên trong bạn có thể ghi những lời chúc thân thương gửi tới người bạn của mình.\r\n  Kích thước: 11×9 cm\r\n\r\n-  Có chân chống để dựng như khung ảnh\r\n\r\nQuà tặng trực tuyến có thể thay bạn gửi lời chúc tới người thân của mình. Chỉ cần cho chúng tôi biết thông điệp bạn muốn gửi tới và món quà của bạn sẽ được gửi tới cùng những lời nhắn đầy ấm áp, yêu thương theo cách riêng của bạn nhé !', '30000', 0, '2017-06-25 11:37:54', '2017-06-25 11:37:54'),
(13, '13', '3', 'Salad', '1', 'bbig1.jpg', 'bbig1.jpg', 'Đây là món ăn rất thích hợp với các dịp tiệc tùng vui chơi. Đặc biệt với hương vị độc đáo hứa hẹn sẽ tạo cảm giác mới lạ cho thực khách', '80000', 0, '2017-06-25 11:41:26', '2017-06-27 12:56:56'),
(14, '14', '3', 'Bánh bông lan', '1', 'bbig7.jpg', 'bbig7.jpg', 'Đây là món bánh rất được mọi người ưa thích. Với đủ loại màu  sắc và bắt mắt', '79000', 1, '2017-06-25 11:43:30', '2017-06-28 10:25:11'),
(15, '15', '3', 'spaghetti', '1', 'big3.jpg', 'big3.jpg', 'Nếu bạn muốn thử cảm giác mới mẻ thì đây là lựa chọn tuyệt vời . Đảm bảo sẽ khiến bạn ngạc nhiên', '90000', 1, '2017-06-25 11:44:01', '2017-06-28 10:25:05'),
(16, '16', '3', 'Bánh dâu bơ', '1', 'bbig8.jpg', 'bbig8.jpg', 'Đây là sự kết hợp độc đáo tạo nên sự khác biệt hoàn toàn so với nhũng món ăn mà bạn đã từng ăn trước đây', '1200000', 1, '2017-06-25 11:44:35', '2017-06-28 10:25:00'),
(17, '17', '3', 'Bánh Crepe', '1', 'page2_img6.jpg', 'page2_img6.jpg', 'Với một it rau xanh rắc trên tạo cảm giác tươi mát. Làm cho người dùng cảm thấy thoải mái nhất. Hứa hẹn sẽ tạo nên sự khác biệt trong buổi tiệc', '100000', 1, '2017-06-25 11:45:10', '2017-06-28 10:24:54'),
(18, '18', '4', 'Trang trí cổ điển', '1', 'trangtri1.jpg', 'trangtri1.jpg', 'Đây là bàn trang trí với mục đích đơn giản nhất có thể . Tạo cho người xem một cảm giác trang nhã cũng nhử ưa mắt nhất', '500000', 1, '2017-06-25 11:47:58', '2017-06-28 10:24:48'),
(19, '19', '4', 'Trang trí hịên đại', '1', 'trangtri7.JPG', 'trangtri7.JPG', 'Trang trí theo kiểu hiện đại. Với màu sắc bắt mắt , tông màu chủ yếu xanh dương tạo cảm giác mát mẻ nhất cho người xem', '600000', 1, '2017-06-25 11:48:38', '2017-06-28 10:24:42'),
(20, '20', '4', 'Trang trí mới', '1', 'trangtri4.jpg', 'trangtri4.jpg', 'Đây là kiểu trang trí mới . Tạo nên cảm giác khác biệt so với các sản phẩm cùng loại', '450000', 1, '2017-06-25 11:49:17', '2017-06-28 10:24:37'),
(21, '21', '4', 'Trang trí sắc hồng', '1', 'trangtri8.jpg', 'trangtri8.jpg', 'Trang trí sắc hồng đang là xu hướng mới hiện nay. phù hợp cho các bạn trẻ , đặc  biệt là phái nữa', '550000', 1, '2017-06-25 11:49:51', '2017-06-28 10:24:30'),
(22, '22', '4', 'Trắng tinh khôi', '1', 'trangtri3.jpg', 'trangtri3.jpg', 'Trắng tinh khôi là màu mà bất cứ ai nhìn thấy cũng cảm thấy thoải mái và ưa thích', '350000', 1, '2017-06-25 11:50:43', '2017-06-28 10:24:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rule` int(11) NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `diachi` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `rule`, `avatar`, `diachi`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Can', 'can@gmail.com', '$2y$10$ZeYElPtQsoHf8phhgVTOu.NLlJW.httGKLh6L/dMph3RrifDfNhcm', 1001, 'LaravelLogo.png', 'abc', 2, 'LGgOLaWCF83eF9jSwmyV17MoAjjEHBylWkFtj4KvchD5WpI0pvxiiLsAASKd', '2017-06-27 19:19:58', '2017-06-27 19:19:58'),
(2, 'can1', 'can1@gmail.com', '$2y$10$Jr0YrS6ec/dSV2zvfFzevu5NZGY5xxQal7L0uQbX4MXGlAnT8rDEi', 0, 'Boostrap_logo.svg.png', 'âss', 2, 'e4Iu9jGFGg7CYUcEGMpQb3LTE8srT4cHRtPk9mzWI1A9nrH4sWdrqLD9BZjB', '2017-06-27 19:59:30', '2017-06-27 22:29:42'),
(3, 'can2', 'can2@gmail.com', '$2y$10$twOOsqmZOSuyfqYpkxSKZuyb4OFYT52RuYfQ9m1Ws7yMe3cSMKu8u', 0, 'github-circle-mascot-git-icon-6.png', 'ssfds', 0, '15ePHLOEZPMtLjr0N7zSZ3WeqHzYTkOWzk7aTlcV3MtqGOE2UUlUJlpV1j1t', '2017-06-27 20:55:29', '2017-06-27 20:55:29'),
(4, 'khai', 'khai@gmail.com', '$2y$10$CCwC84wE7CCZszqQbwG6U.f4ZCMGUYdzmvsFjm95HshkF3rJaMZ.C', 1, 'Boostrap_logo.svg.png', 'dfds', 2, NULL, '2017-06-28 09:10:59', '2017-06-28 09:10:59');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cthd_sohd_foreign` (`sohd`),
  ADD KEY `cthd_idsp_foreign` (`idSP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `hoadon_sohd_unique` (`sohd`),
  ADD KEY `hoadon_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `loai_san_phams`
--
ALTER TABLE `loai_san_phams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `loai_san_phams_idloai_unique` (`idLoai`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `san_phams_idsp_unique` (`idSP`),
  ADD KEY `san_phams_idloai_foreign` (`idLoai`);

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
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `cthd`
--
ALTER TABLE `cthd`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT cho bảng `loai_san_phams`
--
ALTER TABLE `loai_san_phams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `cthd`
--
ALTER TABLE `cthd`
  ADD CONSTRAINT `cthd_idsp_foreign` FOREIGN KEY (`idSP`) REFERENCES `san_phams` (`id`),
  ADD CONSTRAINT `cthd_sohd_foreign` FOREIGN KEY (`sohd`) REFERENCES `hoadon` (`id`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `san_phams`
--
ALTER TABLE `san_phams`
  ADD CONSTRAINT `san_phams_idloai_foreign` FOREIGN KEY (`idLoai`) REFERENCES `loai_san_phams` (`idLoai`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
