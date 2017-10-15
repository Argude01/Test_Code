-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_test
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_test
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_test` DEFAULT CHARACTER SET utf8 ;
USE `db_test` ;

-- -----------------------------------------------------
-- Table `db_test`.`categories`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_test`.`categories` (
  `idCategory` INT NOT NULL AUTO_INCREMENT,
  `category` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idCategory`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_test`.`products`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_test`.`products` (
  `idProduct` INT NOT NULL AUTO_INCREMENT,
  `product` VARCHAR(45) NOT NULL,
  `idCategory` INT NOT NULL,
  PRIMARY KEY (`idProduct`),
  INDEX `fk_products_categories_idx` (`idCategory` ASC),
  CONSTRAINT `fk_products_categories`
    FOREIGN KEY (`idCategory`)
    REFERENCES `db_test`.`categories` (`idCategory`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_test`.`brands`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_test`.`brands` (
  `idBrand` INT NOT NULL AUTO_INCREMENT,
  `brand` VARCHAR(45) NOT NULL,
  `idProduct` INT NOT NULL,
  PRIMARY KEY (`idBrand`),
  INDEX `fk_brands_products1_idx` (`idProduct` ASC),
  CONSTRAINT `fk_brands_products1`
    FOREIGN KEY (`idProduct`)
    REFERENCES `db_test`.`products` (`idProduct`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
