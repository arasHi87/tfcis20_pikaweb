-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2018 at 04:27 PM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tfcispika`
--

-- --------------------------------------------------------

--
-- Table structure for table `act`
--

CREATE TABLE `act` (
  `act_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `act_title` varchar(256) NOT NULL COMMENT '商品名稱',
  `act_content` text NOT NULL COMMENT '商品說明',
  `act_counter` smallint(5) UNSIGNED NOT NULL COMMENT '人氣',
  `act_date` datetime NOT NULL COMMENT '上架日期'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

CREATE TABLE `cmt` (
  `cmt_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '留言編號',
  `goods_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '單元編號',
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `panel_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '面板編號',
  `cmt_content` text NOT NULL COMMENT '留言內容',
  `cmt_date` datetime NOT NULL COMMENT '留言日期'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `goods_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '商品編號',
  `goods_title` varchar(256) NOT NULL COMMENT '商品名稱',
  `goods_content` text NOT NULL COMMENT '商品說明',
  `goods_price` mediumint(8) UNSIGNED NOT NULL COMMENT '商品價錢',
  `goods_counter` smallint(5) UNSIGNED NOT NULL COMMENT '人氣',
  `goods_date` datetime NOT NULL COMMENT '上架日期',
  `goods_another` text NOT NULL COMMENT '商品補充',
  `goods_name` varchar(256) NOT NULL COMMENT '檔案名稱',
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `panel_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '面板編號'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `panel`
--

CREATE TABLE `panel` (
  `panel_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '面版編號',
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `panel_content` varchar(255) NOT NULL COMMENT '面板簡介',
  `panel_title` varchar(255) NOT NULL COMMENT '面板名稱',
  `panel_date` datetime NOT NULL COMMENT '面板日期',
  `panel_counter` mediumint(5) UNSIGNED NOT NULL COMMENT '面板人氣'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_sn` mediumint(8) UNSIGNED NOT NULL COMMENT '使用者編號',
  `user_name` varchar(255) NOT NULL COMMENT '使用者姓名',
  `user_id` varchar(255) NOT NULL COMMENT '使用者帳號',
  `user_passwd` varchar(255) NOT NULL COMMENT '使用者密碼',
  `user_email` varchar(255) NOT NULL COMMENT '使用者信箱',
  `user_sex` enum('男','女') NOT NULL COMMENT '使用者性別',
  `user_tel` varchar(255) NOT NULL COMMENT '使用者電話',
  `user_content` text NOT NULL COMMENT '使用者介紹',
  `user_right` varchar(255) NOT NULL COMMENT '使用者權限',
  `user_token` varchar(255) NOT NULL COMMENT '使用者token'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `act`
--
ALTER TABLE `act`
  ADD PRIMARY KEY (`act_sn`);

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`cmt_sn`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`goods_sn`,`user_sn`);

--
-- Indexes for table `panel`
--
ALTER TABLE `panel`
  ADD PRIMARY KEY (`panel_sn`,`user_sn`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_sn`),
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `act`
--
ALTER TABLE `act`
  MODIFY `act_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號', AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `cmt_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '留言編號';
--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `goods_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '商品編號', AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `panel`
--
ALTER TABLE `panel`
  MODIFY `panel_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '面版編號', AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_sn` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '使用者編號', AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
