-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 21, 2021 at 03:17 AM
-- Server version: 8.0.17
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moonlight_store`
--

-- --------------------------------------------------------

--
-- Table structure for table `color_product`
--

CREATE TABLE `color_product` (
  `ProductId` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `ProductColor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ProductPicture` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `color_product`
--

INSERT INTO `color_product` (`ProductId`, `ProductColor`, `ProductPicture`) VALUES
('SH001', 'black', '3.jpg'),
('SH001', 'white', '2.jpg'),
('SH001', 'yellow', '1.jpg'),
('SH002', 'black', '6.jpg'),
('SH002', 'cream', '5.jpg'),
('SH002', 'pink', '7.jpg'),
('SH002', 'red', '4.jpg'),
('SH002', 'renbow', '8.jpg'),
('SH003', 'pink', '10.jpg'),
('SH003', 'tiger', '9.jpg'),
('SH003', 'yellow', '11.jpg'),
('SH004', 'pink', '12.jpg'),
('SH004', 'yellow', '13.jpg'),
('SH005', 'gray', '18.jpg'),
('SH005', 'light gray', '19.jpg'),
('SH005', 'navy blue', '17.jpg'),
('SH005', 'red', '15.jpg'),
('SH005', 'scarlet', '14.jpg'),
('SH005', 'white', '16.jpg'),
('SH006', 'white-blue', '20.jpg'),
('SH006', 'white-brown', '23.jpg'),
('SH006', 'white-red', '22.jpg'),
('SH006', 'white-yellow', '21.jpg'),
('SH007', 'black', '26.jpg'),
('SH007', 'orange', '24.jpg'),
('SH007', 'white', '25.jpg'),
('SH008', 'pink', '28.jpg'),
('SH008', 'white', '2.jpg'),
('SH008', 'yellow', '27.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `CustomerId` int(100) NOT NULL,
  `CustomerFirstname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CustomerLastname` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CustomerAddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `CustomerTel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`CustomerId`, `CustomerFirstname`, `CustomerLastname`, `CustomerAddress`, `CustomerTel`) VALUES
(1, 'ปิงปอง', 'เอ้ะงง', '', ''),
(2, 'ปภากร', 'ปิติคำพร', '491/27 ต.หมากแข้ง อ.เมือง จ.อุดรธานี', '0645659288'),
(3, 'พีรดา ', 'คำชัง', 'อาคารLA ห้อง322 ต.ปงยางคก อ.ห้างฉัตร จ.ลำปาง ', '0612727430'),
(4, 'กัญญาณัฐ', 'รักขาว', '999/149 ม.15 ต.บางเสาธง อ. บางเสาธง จ.สมุทรปราการ', '0624959064'),
(5, 'เจษฎากร', 'ใจแสน', '14, หอพักธนินี อ.เมืองกำแพงเพชร จ.กำแพงเพชร', '0966656622'),
(6, 'พรสวรรค์', 'ขาวรัมย์', '175 หมู่4	อ.สตึก จ.บุรีรัมย์\r\n', '0805178237'),
(7, 'ชัญญานุช', 'พรมพลอย', '571/5 แขวงบางโคล่ เขตบางคอแหลม กรุงเทพมหานคร', '0952639445'),
(9, 'น้อง', 'ทอง', '14ม บ ปรีชา  เขตตลิ่งชัน กรุงเทพมหานคร', '0633383305'),
(10, 'ณัฐญาดา', 'ประวงษ์รัตน์', 'ห้อง 115 หอพักนักศึกษาแพทย์ แขวงวชิรพยาบาล เขตดุสิต กรุงเทพมหานคร', '018208709'),
(12, 'ปิงปอง', 'Pary', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpId` int(10) NOT NULL,
  `EmpFirstname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `EmpLastname` varchar(30) COLLATE utf8mb4_general_ci NOT NULL,
  `EmpAddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `EmpTel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `EmpPosition` varchar(20) COLLATE utf8mb4_general_ci NOT NULL,
  `EmpSalary` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpId`, `EmpFirstname`, `EmpLastname`, `EmpAddress`, `EmpTel`, `EmpPosition`, `EmpSalary`) VALUES
(1, 'น้ำทิพย์', 'จันทร์ทา', '70/340 รามคำแหง 176 แขวงมียบุรี เขตมีนบุรี กรุงเทพฯ', '0616620199', 'พนักงานขาย', 4000),
(2, 'พิมพ์ณดา', 'พิพัฒนเดชาวัชร์', '33/340 เกรียงไกร 32 แขวงคลองสองต้นนุ่น เขตลาดกระบัง กรุงเทพฯ', '0661154642', 'แอดมิน, ฝ่ายบัญชี', 4000),
(3, 'ปิยวัฒน์', 'บุญอ่ำ', '251/166 แขวงคลองสองต้นนุ่น เขตลาดกระบัง กรุงเทพฯ', '0880058339', 'พนักงานส่งของ', 4000);

-- --------------------------------------------------------

--
-- Table structure for table `lot_product`
--

CREATE TABLE `lot_product` (
  `LotId` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `LotDate` date NOT NULL,
  `StoreId` int(10) NOT NULL,
  `EmpId` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lot_product`
--

INSERT INTO `lot_product` (`LotId`, `LotDate`, `StoreId`, `EmpId`) VALUES
('L001', '2021-04-14', 1, 1),
('L002', '2021-04-21', 1, 3),
('L003', '2021-04-24', 1, 2),
('L004', '2021-04-27', 1, 1),
('L005', '2021-04-29', 1, 1),
('L006', '2021-05-31', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `PurchaseId` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `ProductId` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `OrderQuantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`PurchaseId`, `ProductId`, `OrderQuantity`) VALUES
('2105070R1WGPHN', 'SH001', 22),
('2105070MT7S5AN', 'SH003', 12),
('2105070R1WGPHN', 'SH005', 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ProductId` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `ProductName` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `ProductPrice` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ProductId`, `ProductName`, `ProductPrice`) VALUES
('SH001', 'เสื้อครอปสายเดี่ยว', 59),
('SH002', 'เสื้อครอปแขนสั้นลายทาง', 59),
('SH003', 'เสื้อครอปแขนสั้นคอเหลี่ยม', 59),
('SH004', 'เสื้อครอปแขนสั้นคอกลม', 59),
('SH005', 'เสื้อครอปแขนสั้นกระดุมจริง', 59),
('SH006', 'เสื้อครอปแขนสั้นขอบสี', 59),
('SH007', 'เสื้อครอปแขนสั้นผูกหน้า', 59),
('SH008', 'เสื้อครอปแขนสั้นกระดุมแต่ง', 59);

-- --------------------------------------------------------

--
-- Table structure for table `purchase_order`
--

CREATE TABLE `purchase_order` (
  `PurchaseId` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `PurchaseDate` date NOT NULL,
  `CustomerId` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `purchase_order`
--

INSERT INTO `purchase_order` (`PurchaseId`, `PurchaseDate`, `CustomerId`) VALUES
('210506028CYEGK', '2021-05-06', 3),
('2105060674U5QM', '2021-05-06', 4),
('2105070MT7S5AN', '2021-05-07', 1),
('2105070R1WGPHN', '2021-05-07', 2),
('YIUYTDY1245', '2021-05-19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `size_product`
--

CREATE TABLE `size_product` (
  `ProductId` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `ProductSize` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `size_product`
--

INSERT INTO `size_product` (`ProductId`, `ProductSize`) VALUES
('SH001', 'L'),
('SH001', 'M'),
('SH001', 'S'),
('SH002', 'L'),
('SH002', 'M'),
('SH002', 'S'),
('SH003', 'M'),
('SH003', 'S'),
('SH003', 'Z'),
('SH004', 'L'),
('SH004', 'M'),
('SH004', 'S'),
('SH005', 'L'),
('SH005', 'M'),
('SH005', 'S'),
('SH005', 'Z'),
('SH006', 'L'),
('SH006', 'M'),
('SH006', 'S'),
('SH007', 'A'),
('SH007', 'L'),
('SH007', 'M'),
('SH007', 'S'),
('SH008', 'L'),
('SH008', 'M'),
('SH008', 'S');

-- --------------------------------------------------------

--
-- Table structure for table `stock_detail`
--

CREATE TABLE `stock_detail` (
  `LotId` varchar(10) COLLATE utf8mb4_general_ci NOT NULL,
  `ProductId` varchar(11) COLLATE utf8mb4_general_ci NOT NULL,
  `StockAmount` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `stock_detail`
--

INSERT INTO `stock_detail` (`LotId`, `ProductId`, `StockAmount`) VALUES
('L001', 'SH001', 15),
('L001', 'SH002', 25),
('L001', 'SH003', 15),
('L001', 'SH004', 20),
('L002', 'SH002', 34),
('L002', 'SH004', 20),
('L002', 'SH007', 30);

-- --------------------------------------------------------

--
-- Table structure for table `wholesale_store`
--

CREATE TABLE `wholesale_store` (
  `StoreId` int(10) NOT NULL,
  `StoreName` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  `StrorAddress` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `StoreTel` varchar(10) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `wholesale_store`
--

INSERT INTO `wholesale_store` (`StoreId`, `StoreName`, `StrorAddress`, `StoreTel`) VALUES
(1, 'Shein ', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `color_product`
--
ALTER TABLE `color_product`
  ADD PRIMARY KEY (`ProductId`,`ProductColor`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`CustomerId`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpId`);

--
-- Indexes for table `lot_product`
--
ALTER TABLE `lot_product`
  ADD PRIMARY KEY (`LotId`),
  ADD KEY `StoreId` (`StoreId`),
  ADD KEY `EmpId` (`EmpId`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`ProductId`,`PurchaseId`),
  ADD KEY `PurchaseId` (`PurchaseId`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ProductId`);

--
-- Indexes for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD PRIMARY KEY (`PurchaseId`),
  ADD KEY `CustomerId` (`CustomerId`);

--
-- Indexes for table `size_product`
--
ALTER TABLE `size_product`
  ADD PRIMARY KEY (`ProductId`,`ProductSize`);

--
-- Indexes for table `stock_detail`
--
ALTER TABLE `stock_detail`
  ADD PRIMARY KEY (`LotId`,`ProductId`),
  ADD KEY `ProductId` (`ProductId`);

--
-- Indexes for table `wholesale_store`
--
ALTER TABLE `wholesale_store`
  ADD PRIMARY KEY (`StoreId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `CustomerId` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `EmpId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `wholesale_store`
--
ALTER TABLE `wholesale_store`
  MODIFY `StoreId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `color_product`
--
ALTER TABLE `color_product`
  ADD CONSTRAINT `color_product_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `lot_product`
--
ALTER TABLE `lot_product`
  ADD CONSTRAINT `lot_product_ibfk_1` FOREIGN KEY (`StoreId`) REFERENCES `wholesale_store` (`StoreId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `lot_product_ibfk_2` FOREIGN KEY (`EmpId`) REFERENCES `employee` (`EmpId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `order_ibfk_2` FOREIGN KEY (`PurchaseId`) REFERENCES `purchase_order` (`PurchaseId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `purchase_order`
--
ALTER TABLE `purchase_order`
  ADD CONSTRAINT `purchase_order_ibfk_1` FOREIGN KEY (`CustomerId`) REFERENCES `customer` (`CustomerId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `size_product`
--
ALTER TABLE `size_product`
  ADD CONSTRAINT `size_product_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `stock_detail`
--
ALTER TABLE `stock_detail`
  ADD CONSTRAINT `stock_detail_ibfk_1` FOREIGN KEY (`ProductId`) REFERENCES `products` (`ProductId`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `stock_detail_ibfk_2` FOREIGN KEY (`LotId`) REFERENCES `lot_product` (`LotId`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
