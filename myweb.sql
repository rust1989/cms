-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 18 日 10:27
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `my_admin`
--

INSERT INTO `my_admin` (`id`, `user`, `pwd`, `logtime`, `logip`) VALUES
(1, '123', 'e10adc3949ba59abbe56e057f20f883e', '1350487970', ''),
(2, 'admin', 'c6cf3c7e985888502b5b72917d8de3b8', '1350524628', '');

-- --------------------------------------------------------

--
-- 表的结构 `my_attachment`
--

CREATE TABLE `my_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL,
  `picpath` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 导出表中的数据 `my_attachment`
--

INSERT INTO `my_attachment` (`id`, `cid`, `picpath`, `name`) VALUES
(6, 1, 'Uploads/20121018/03ff8ef80bb4ff4bed6d1b5eb32fe029.jpg', '03ff8ef80bb4ff4bed6d1b5eb32fe029.jpg'),
(7, 1, 'Uploads/20121018/b02e4dc444ef7b7aa9802ca6a7f440dc.jpg', 'b02e4dc444ef7b7aa9802ca6a7f440dc.jpg');

-- --------------------------------------------------------

--
-- 表的结构 `my_attachment_cateory`
--

CREATE TABLE `my_attachment_cateory` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `my_attachment_cateory`
--

INSERT INTO `my_attachment_cateory` (`id`, `name`) VALUES
(1, 'banner'),
(2, 'product'),
(3, 'img');

-- --------------------------------------------------------

--
-- 表的结构 `my_category`
--

CREATE TABLE `my_category` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL default '0',
  `title` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `module` varchar(255) NOT NULL,
  `mid` int(11) NOT NULL,
  `control` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 导出表中的数据 `my_category`
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

CREATE TABLE `my_module` (
  `moduleid` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `module` varchar(50) NOT NULL,
  PRIMARY KEY  (`moduleid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `my_module`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_module_field`
--

CREATE TABLE `my_module_field` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `field` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `my_module_field`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_setting`
--

CREATE TABLE `my_setting` (
  `name` varchar(255) NOT NULL,
  `val` varchar(255) NOT NULL,
  `langid` int(11) NOT NULL,
  PRIMARY KEY  (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 导出表中的数据 `my_setting`
--

INSERT INTO `my_setting` (`name`, `val`, `langid`) VALUES
('LOGO', 'Uploads/20121018/03ff8ef80bb4ff4bed6d1b5eb32fe029.jpg', 1),
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
