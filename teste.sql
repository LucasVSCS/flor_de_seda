-- MySQL Script generated by MySQL Workbench
-- Tue Dec 11 01:37:35 2018
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema floricultura
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema floricultura
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `floricultura` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci ;
USE `floricultura` ;

-- -----------------------------------------------------
-- Table `floricultura`.`Clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `floricultura`.`Clientes` (
  `idClientes` INT NOT NULL AUTO_INCREMENT,
  `cnpj` INT NOT NULL,
  `razao` VARCHAR(45) NOT NULL,
  `fone_um` VARCHAR(50) NOT NULL,
  `fone_dois` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `cep` INT NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `complemento` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idClientes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `floricultura`.`Funcionarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `floricultura`.`Funcionarios` (
  `idFuncionarios` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cpf` INT NOT NULL,
  `salario` FLOAT NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `telefone` INT NOT NULL,
  `nivel_acesso` VARCHAR(25) NOT NULL,
  PRIMARY KEY (`idFuncionarios`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `floricultura`.`Fornecedores`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `floricultura`.`Fornecedores` (
  `idFornecedores` INT NOT NULL AUTO_INCREMENT,
  `cnpj` INT NOT NULL,
  `razao` VARCHAR(45) NOT NULL,
  `fone_um` VARCHAR(50) NOT NULL,
  `fone_dois` VARCHAR(50) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `estado` VARCHAR(2) NOT NULL,
  `cidade` VARCHAR(45) NOT NULL,
  `cep` INT NOT NULL,
  `bairro` VARCHAR(100) NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `complemento` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idFornecedores`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `floricultura`.`Produtos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `floricultura`.`Produtos` (
  `idProdutos` INT NOT NULL AUTO_INCREMENT,
  `Fornecedores_idFornecedores` INT NOT NULL,
  `nome` VARCHAR(100) NOT NULL,
  `categoria` VARCHAR(100) NOT NULL,
  `preco` FLOAT NOT NULL,
  `validade` INT NOT NULL,
  `quantidade` INT NOT NULL,
  PRIMARY KEY (`idProdutos`),
  INDEX `fk_Produtos_Fornecedores1_idx` (`Fornecedores_idFornecedores` ASC),
  CONSTRAINT `fk_Produtos_Fornecedores1`
    FOREIGN KEY (`Fornecedores_idFornecedores`)
    REFERENCES `floricultura`.`Fornecedores` (`idFornecedores`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `floricultura`.`Pedidos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `floricultura`.`Pedidos` (
  `idPedidos` INT NOT NULL AUTO_INCREMENT,
  `Clientes_idClientes` VARCHAR(100) NOT NULL,
  `Funcionario_idFuncionario` VARCHAR(100) NOT NULL,
  `Produtos_idProdutos` VARCHAR(100) NOT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idPedidos`),
  INDEX `fk_Pedidos_Clientes_idx` (`Clientes_idClientes` ASC),
  INDEX `fk_Pedidos_Funcionario1_idx` (`Funcionario_idFuncionario` ASC),
  INDEX `fk_Pedidos_Produtos1_idx` (`Produtos_idProdutos` ASC),
  CONSTRAINT `fk_Pedidos_Clientes`
    FOREIGN KEY (`Clientes_idClientes`)
    REFERENCES `floricultura`.`Clientes` (`idClientes`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedidos_Funcionario1`
    FOREIGN KEY (`Funcionario_idFuncionario`)
    REFERENCES `floricultura`.`Funcionarios` (`idFuncionarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Pedidos_Produtos1`
    FOREIGN KEY (`Produtos_idProdutos`)
    REFERENCES `floricultura`.`Produtos` (`idProdutos`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
