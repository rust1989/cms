-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 17 日 10:24
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
(1, '123', 'e10adc3949ba59abbe56e057f20f883e', '1350464332', '');

-- --------------------------------------------------------

--
-- 表的结构 `my_attachment`
--

CREATE TABLE `my_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL,
  `picpath` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 导出表中的数据 `my_attachment`
--

INSERT INTO `my_attachment` (`id`, `cid`, `picpath`) VALUES
(1, 0, 'Uploads/20121017/30145a58731b5e73a0ae85e022569e7f.jpg'),
(2, 0, 'Uploads/20121017/5418b67ef4b2103eadc8b90b6c36bed9.jpg'),
(3, 0, 'Uploads/20121017/55a4078fdabe1d09b5cf75b42abf49e3.jpg'),
(4, 0, 'Uploads/20121017/0b3d9fa469f4226620de6042d096db16.jpg'),
(5, 0, 'Uploads/20121017/d5505506b9251509c7593896bf11e9e7.jpg'),
(6, 0, 'Uploads/20121017/6ab75f8bdbf23a09d793c11a341f8149.jpg'),
(7, 0, 'Uploads/20121017/cf8722be336cfa0852511b00353bc688.jpg'),
(8, 0, 'Uploads/20121017/188af990bbfd7f22e4219388da57db5f.jpg'),
(9, 0, 'Uploads/20121017/d0bd2a21e2b3b221368b5758d0bf993a.jpg'),
(10, 0, 'Uploads/20121017/9721328a60974f030030af3231f29488.jpg'),
(11, 0, 'Uploads/20121017/97601eea06e6ab78b15af2d8ab5469a2.jpg'),
(12, 0, 'Uploads/20121017/d568c2206575e908845df321206be28b.jpg'),
(13, 0, 'Uploads/20121017/c4d3a61b11bb466540167f843460edab.jpg'),
(14, 0, 'Uploads/20121017/519c7aaf258a17c94ddb1f9f30d209c8.jpg'),
(15, 0, 'Uploads/20121017/7571dd4d5f13cf7ea271b784cb82c1b2.jpg'),
(16, 0, 'Uploads/20121017/f226ddafbd3c03d43e4c4747d87508de.jpg'),
(17, 0, 'Uploads/20121017/58802f13b689199577d488e2d21f2131.jpg'),
(18, 0, 'Uploads/20121017/8294a6ccd71f72f521f9104648642a78.jpg'),
(19, 0, 'Uploads/20121017/c16580c07b9747498c465342550ddca7.jpg'),
(20, 0, 'Uploads/20121017/2ccb48f6063602a1da2b9b82d102c70f.jpg'),
(21, 0, 'Uploads/20121017/7bce4b20f41dd0c873e34c59b13f8b61.jpg'),
(22, 0, 'Uploads/20121017/b2862c7ab6c0f841e6f15e0e6ef754be.jpg'),
(23, 0, 'Uploads/20121017/300f84ae00761b7d84cc5b623e0feab5.jpg'),
(24, 0, 'Uploads/20121017/d5b7ad795ab32dc1b3562270f293c17e.jpg'),
(25, 0, 'Uploads/20121017/e04776d26a8b4899b36b7432b0bbc7d9.jpg'),
(26, 0, 'Uploads/20121017/1c08f09a8c5a85aa6f7703d4fea96a33.jpg'),
(27, 0, 'Uploads/20121017/85b399529fed488f696987257a6eb63e.jpg'),
(28, 0, 'Uploads/20121017/f03bddb18052b8a3c8c648212fbedbe1.jpg'),
(29, 0, 'Uploads/20121017/b50d51fcaf3ab3f27f699c1e69ab4604.jpg'),
(30, 0, 'Uploads/20121017/a3dab7b92a945f4421d2de27deebb8bc.jpg'),
(31, 0, 'Uploads/20121017/26599131cf9dbbb7eb85be071e0de3e4.jpg'),
(32, 0, 'Uploads/20121017/e7ca8cbe25224d9214cb6a67902cfcc5.jpg'),
(33, 0, 'Uploads/20121017/138c749356753060a178faa42af7aca4.jpg'),
(34, 0, 'Uploads/20121017/c238d2d8e68b7aa7bba224af30578aec.jpg');

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
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 导出表中的数据 `my_category`
--

INSERT INTO `my_category` (`id`, `pid`, `title`, `action`, `module`, `mid`) VALUES
(1, 0, '会员管理', '', 'Member', 0),
(2, 0, '网站设置', '', 'Setting', 0),
(3, 0, '网站栏目', '', 'Channel', 0),
(4, 3, '添加栏目', '', 'Add', 0),
(5, 2, '首页广告', '', 'Banner', 0);

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
