-- --------------------------------------------------------

-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 30 Septembre 2021 à 14:34
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

-- --------------------------------------------------------

--
-- User `tp_web`
--

CREATE USER 'tp_web'@'localhost' IDENTIFIED BY 'tp_web';

GRANT ALL PRIVILEGES ON * . * TO 'tp_web'@'localhost';

FLUSH PRIVILEGES;


-- --------------------------------------------------------


--
-- Base de données :  `tp_web`
--

CREATE DATABASE IF NOT EXISTS tp_web


-- --------------------------------------------------------


--
-- Structure de la table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `ID` int(50) NOT NULL AUTO_INCREMENT,
  `P_Name` varchar(100) NOT NULL,
  `P_Price` decimal(10,0) NOT NULL,
  `P_Type` varchar(50) NOT NULL,
  `P_Satus` varchar(50) NOT NULL,
  `P_Picture` blob NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;


-- --------------------------------------------------------


--
-- Structure de la table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `F_NAME` varchar(50) NOT NULL,
  `L_NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `LOGIN` varchar(50) NOT NULL,
  `PASSWORD` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;




-- --------------------------------------------------------

--
-- Références
--

-- URL : https://www.mysqltutorial.org/mysql-create-database
-- URL : https://www.hostinger.com/tutorials/mysql/how-create-mysql-user-and-grant-permissions-command-line