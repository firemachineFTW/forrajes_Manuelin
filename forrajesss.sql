/*
 Navicat Premium Data Transfer

 Source Server         : 80mysql
 Source Server Type    : MySQL
 Source Server Version : 80028
 Source Host           : localhost:3306
 Source Schema         : forrajesss

 Target Server Type    : MySQL
 Target Server Version : 80028
 File Encoding         : 65001

 Date: 27/06/2022 13:00:58
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for categoria
-- ----------------------------
DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria`  (
  `IdCategoria` int NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdCategoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 10 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of categoria
-- ----------------------------
INSERT INTO `categoria` VALUES (9, 'Perros');
INSERT INTO `categoria` VALUES (10, 'Gatos');

-- ----------------------------
-- Table structure for compra
-- ----------------------------
DROP TABLE IF EXISTS `compra`;
CREATE TABLE `compra`  (
  `IdCompra` int NOT NULL AUTO_INCREMENT,
  `idProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `CantidadCompra` int NOT NULL,
  `FechaHoraCompra` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrecioCompra` float(8, 2) NOT NULL,
  `IdProveedor` int NOT NULL,
  PRIMARY KEY (`IdCompra`) USING BTREE,
  INDEX `fk_proveedor_compra`(`IdProveedor`) USING BTREE,
  INDEX `fk_idProducto_compra`(`idProducto`) USING BTREE,
  CONSTRAINT `fk_idProducto_compra` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_proveedor_compra` FOREIGN KEY (`IdProveedor`) REFERENCES `proveedor` (`IdProveedor`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of compra
-- ----------------------------

-- ----------------------------
-- Table structure for marca
-- ----------------------------
DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca`  (
  `IdMarca` int NOT NULL AUTO_INCREMENT,
  `NombreMarca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdMarca`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of marca
-- ----------------------------
INSERT INTO `marca` VALUES (26, 'DogChau');
INSERT INTO `marca` VALUES (27, 'PetLine');
INSERT INTO `marca` VALUES (28, 'Pedigree');
INSERT INTO `marca` VALUES (29, 'SuperKan');

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `idProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DescripcionProduceto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrecioFinal` float(6, 2) NOT NULL,
  `IdCategoria` int NOT NULL,
  `IdMarca` int NOT NULL,
  PRIMARY KEY (`idProducto`) USING BTREE,
  INDEX `fk_categoria_calzado`(`IdCategoria`) USING BTREE,
  INDEX `fk_marca_calzado`(`IdMarca`) USING BTREE,
  CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_marca_producto` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of producto
-- ----------------------------
INSERT INTO `producto` VALUES ('12can', 'er', 321.00, 9, 28);

-- ----------------------------
-- Table structure for productoventa
-- ----------------------------
DROP TABLE IF EXISTS `productoventa`;
CREATE TABLE `productoventa`  (
  `IdProductoVenta` int NOT NULL AUTO_INCREMENT,
  `IdVenta` int NOT NULL,
  `Cantidad` int NOT NULL,
  `PrecioVenta` float NOT NULL,
  `idProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdProductoVenta`) USING BTREE,
  INDEX `fk_venta_ventac`(`IdVenta`) USING BTREE,
  INDEX `fk_poducto_ventac`(`idProducto`) USING BTREE,
  CONSTRAINT `fk_Producto_ProductoVenta` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_venta_ProductoVenta` FOREIGN KEY (`IdVenta`) REFERENCES `venta` (`IdVenta`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of productoventa
-- ----------------------------

-- ----------------------------
-- Table structure for proveedor
-- ----------------------------
DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor`  (
  `IdProveedor` int NOT NULL AUTO_INCREMENT,
  `NombreProveedor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DireccionProveedor` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TelefonoProveedor` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `EmailProveedor` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdProveedor`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of proveedor
-- ----------------------------

-- ----------------------------
-- Table structure for venta
-- ----------------------------
DROP TABLE IF EXISTS `venta`;
CREATE TABLE `venta`  (
  `IdVenta` int NOT NULL AUTO_INCREMENT,
  `FechaHoraVenta` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TotalVenta` float(6, 2) NOT NULL,
  PRIMARY KEY (`IdVenta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of venta
-- ----------------------------

SET FOREIGN_KEY_CHECKS = 1;
