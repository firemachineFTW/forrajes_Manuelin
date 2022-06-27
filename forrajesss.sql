CREATE TABLE `categoria`  (
  `IdCategoria` int NOT NULL AUTO_INCREMENT,
  `NombreCategoria` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdCategoria`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `cliente`  (
  `IdCliente` int NOT NULL AUTO_INCREMENT,
  `NombreCliente` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ApellidoPCliente` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ApellidoMCliente` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NULL DEFAULT NULL,
  `DireccionCliente` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdCliente`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `marca`  (
  `IdMarca` int NOT NULL AUTO_INCREMENT,
  `NombreMarca` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`IdMarca`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 26 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `producto`  (
  `idProducto` varchar(6) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `DescripcionProduceto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `PrecioFinal` float(6, 2) NOT NULL,
  `IdCategoria` int NOT NULL,
  `IdMarca` int NOT NULL,
  PRIMARY KEY (`idProducto`) USING BTREE,
  INDEX `fk_categoria_calzado`(`IdCategoria`) USING BTREE,
  INDEX `fk_marca_calzado`(`IdMarca`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `ProductoVenta`  (
  `IdProductoVenta` int NOT NULL AUTO_INCREMENT,
  `IdVenta` int NOT NULL,
  `Cantidad` int NOT NULL,
  `PrecioVenta` float NOT NULL,
  `idProducto` varchar(6) NOT NULL,
  PRIMARY KEY (`IdProductoVenta`) USING BTREE,
  INDEX `fk_venta_ventac`(`IdVenta`) USING BTREE,
  INDEX `fk_poducto_ventac`(`IdProducto`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

CREATE TABLE `venta`  (
  `IdVenta` int NOT NULL AUTO_INCREMENT,
  `FechaHoraVenta` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `TotalVenta` float(6, 2) NOT NULL,
  PRIMARY KEY (`IdVenta`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_0900_ai_ci ROW_FORMAT = DYNAMIC;

ALTER TABLE `producto` ADD CONSTRAINT `fk_categoria_producto` FOREIGN KEY (`IdCategoria`) REFERENCES `categoria` (`IdCategoria`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `producto` ADD CONSTRAINT `fk_marca_producto` FOREIGN KEY (`IdMarca`) REFERENCES `marca` (`IdMarca`) ON DELETE RESTRICT ON UPDATE CASCADE;

ALTER TABLE `ProductoVenta` ADD CONSTRAINT `fk_venta_ProductoVenta` FOREIGN KEY (`IdVenta`) REFERENCES `venta` (`IdVenta`) ON DELETE RESTRICT ON UPDATE CASCADE;
ALTER TABLE `ProductoVenta` ADD CONSTRAINT `fk_Producto_ProductoVenta` FOREIGN KEY (`idProducto`) REFERENCES `producto` (`idProducto`) ON DELETE RESTRICT ON UPDATE CASCADE;


