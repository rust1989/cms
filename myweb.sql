-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 15 日 10:25
-- 服务器版本: 5.0.45
-- PHP 版本: 5.2.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- 数据库: `myweb`
--

-- --------------------------------------------------------

--
-- 表的结构 `my_admin`
--

CREATE TABLE `my_admin` (
  `id` int(11) NOT NULL auto_increment,
  `user` varchar(50) NOT NULL,
  `pwd` varchar(50) NOT NULL,
  `logtime` varchar(255) NOT NULL,
  `logip` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `my_admin`
--

INSERT INTO `my_admin` (`id`, `user`, `pwd`, `logtime`, `logip`) VALUES
(1, '123', 'e10adc3949ba59abbe56e057f20f883e', '1350287847', '');

-- --------------------------------------------------------

--
-- 表的结构 `my_module`
--

CREATE TABLE `my_module` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `my_module`
--

INSERT INTO `my_module` (`id`, `pid`, `title`, `action`, `module`) VALUES
(1, 0, '会员管理', '', 'Member'),
(2, 0, '网站设置', '', 'Setting'),
(3, 0, '网站栏目', '', 'Channel'),
(4, 3, '添加栏目', '', 'Add');

-- --------------------------------------------------------

--
-- 表的结构 `my_setting`
--

CREATE TABLE `my_setting` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `val` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `my_setting`
--

INSERT INTO `my_setting` (`id`, `name`, `val`) VALUES
(1, 'LOGO', ''),
(2, 'WEBSITE', ''),
(3, 'CLOSE', ''),
(4, 'CLOSETXT', '');
