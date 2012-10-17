-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 17 日 17:07
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `myweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `my_admin`
--

CREATE TABLE IF NOT EXISTS `my_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `logtime` varchar(255) NOT NULL,
  `logip` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 转存表中的数据 `my_admin`
--

INSERT INTO `my_admin` (`id`, `user`, `pwd`, `logtime`, `logip`) VALUES
(1, '123', 'e10adc3949ba59abbe56e057f20f883e', '1350487970', ''),
(2, 'admin', 'c6cf3c7e985888502b5b72917d8de3b8', '1350491678', '');

-- --------------------------------------------------------

--
-- 表的结构 `my_attachment`
--

CREATE TABLE IF NOT EXISTS `my_attachment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cid` int(11) NOT NULL,
  `picpath` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `my_category`
--

CREATE TABLE IF NOT EXISTS `my_category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL DEFAULT '0',
  `title` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `mid` int(11) NOT NULL,
  `control` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `my_category`
--

INSERT INTO `my_category` (`id`, `pid`, `title`, `action`, `module`, `mid`, `control`) VALUES
(1, 0, '角色管理', '', 'Member', 0, ''),
(2, 0, '网站设置', '', 'Setting', 0, ''),
(3, 0, '网站栏目', '', 'Channel', 0, ''),
(4, 3, '添加栏目', '', 'Add', 0, ''),
(5, 2, '首页广告', '', 'Setting', 0, 'Banner'),
(6, 1, '管理员设置', '', 'Member', 0, 'Manager');

-- --------------------------------------------------------

--
-- 表的结构 `my_module`
--

CREATE TABLE IF NOT EXISTS `my_module` (
  `moduleid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `module` varchar(50) NOT NULL,
  PRIMARY KEY (`moduleid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `my_module_field`
--

CREATE TABLE IF NOT EXISTS `my_module_field` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `field` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `my_setting`
--

CREATE TABLE IF NOT EXISTS `my_setting` (
  `name` varchar(255) NOT NULL,
  `val` varchar(255) NOT NULL,
  `langid` int(11) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `my_setting`
--

INSERT INTO `my_setting` (`name`, `val`, `langid`) VALUES
('LOGO', '网站LOGO', 1),
('WEBSITE', '网站名称', 1),
('CLOSE', '网站关闭', 1),
('CLOSETXT', '关闭原因', 1),
('ATTACHSIZE', '', 0),
('ATTACHEXT', '', 0),
('THUMBMAXWIDTH', '', 0),
('THUMBMAXHEIGHT', '', 0),
('ATTACHPATH', '', 0),
('DB_TYPE', '', 0),
('DB_HOST', '', 0),
('DB_NAME', '', 0),
('DB_USER', '', 0),
('DB_PWD', '', 0),
('DB_PREFIX', '', 0),
('DB_FIELDS_CACHE', '', 0),
('submit', '', 1),
('WEBURL', '网站URL', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
