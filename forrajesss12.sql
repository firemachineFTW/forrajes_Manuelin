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

 Date: 04/07/2022 21:13:04
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
) ENGINE = InnoDB AUTO_INCREMENT = 11 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for marca
-- ----------------------------
DROP TABLE IF EXISTS `marca`;
CREATE TABLE `marca`  (
  `IdMarca` int NOT NULL AUTO_INCREMENT,
  `NombreMarca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdMarca`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 30 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for producto
-- ----------------------------
DROP TABLE IF EXISTS `producto`;
CREATE TABLE `producto`  (
  `idProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DescripcionProduceto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrecioFinal` float(6, 2) NOT NULL,
  `stock` int NOT NULL,
  `IdCategoria` int NOT NULL,
  `IdMarca` int NOT NULL,
  PRIMARY KEY (`idProducto`) USING BTREE,
  INDEX `fk_categoria_calzado`(`IdCategoria`) USING BTREE,
  INDEX `fk_marca_calzado`(`IdMarca`) USING BTREE,
  CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`) ON DELETE RESTRICT ON UPDATE CASCADE,
  CONSTRAINT `fk_marca_producto` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Table structure for productoventa
-- ----------------------------
DROP TABLE IF EXISTS `productoventa`;
CREATE TABLE `productoventa`  (
  `IdProductoVenta` int NOT NULL AUTO_INCREMENT,
  `Cantidad` int NOT NULL,
  `PrecioVenta` float NOT NULL,
  `FechaHoraVenta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `idProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdProductoVenta`) USING BTREE,
  INDEX `fk_poducto_ventac`(`idProducto`) USING BTREE,
  CONSTRAINT `fk_Producto_ProductoVenta` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE RESTRICT ON UPDATE CASCADE
) ENGINE = InnoDB AUTO_INCREMENT = 33 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

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
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

SET FOREIGN_KEY_CHECKS = 1;
