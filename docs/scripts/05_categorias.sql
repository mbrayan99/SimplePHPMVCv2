CREATE TABLE `nw202003`.`category` (
  `catecod` BIGINT(10) NOT NULL,
  `catenom` VARCHAR(128) NULL,
  `cateest` CHAR(3) NULL,
  PRIMARY KEY (`catecod`));

INSERT INTO `nw202003`.`category` (`catenom`, `cateest`) VALUES ('Administrador', 'ACT');