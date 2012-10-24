-- phpMyAdmin SQL Dump
-- version 2.11.2.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 24 日 07:39
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
  `langid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `my_admin`
--

INSERT INTO `my_admin` (`id`, `user`, `pwd`, `logtime`, `logip`, `langid`) VALUES
(1, '123', 'e10adc3949ba59abbe56e057f20f883e', '1350487970', '', 0),
(2, 'admin', 'c6cf3c7e985888502b5b72917d8de3b8', '1351047218', '127.0.0.1', 0);

-- --------------------------------------------------------

--
-- 表的结构 `my_article`
--

CREATE TABLE `my_article` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `langid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `my_article`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_attachment`
--

CREATE TABLE `my_attachment` (
  `id` int(11) NOT NULL auto_increment,
  `cid` int(11) NOT NULL,
  `picpath` varchar(255) NOT NULL,
  `spicpath` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` varchar(50) NOT NULL,
  `langid` int(11) NOT NULL,
  `width` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `my_attachment`
--


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
  `show` int(11) NOT NULL default '0',
  `position` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- 导出表中的数据 `my_category`
--

INSERT INTO `my_category` (`id`, `pid`, `title`, `action`, `module`, `mid`, `show`, `position`) VALUES
(1, 0, '角色管理', '', 'Member', 1, 0, ''),
(2, 0, '网站设置', '', 'Setting', 0, 0, ''),
(3, 0, '网站栏目', '', 'Channel', 0, 0, ''),
(4, 3, '栏目类型', 'Module', 'Channel', 0, 0, ''),
(6, 1, '管理员设置', 'Manager', 'Member', 2, 1, '0,1'),
(11, 0, '产品管理', '', 'Product', 3, 1, '0,1'),
(10, 1, '会员管理', 'User', 'Member', 1, 1, '0,1'),
(14, 0, '图集管理', '', 'Img', 4, 1, '0,1'),
(13, 11, '产品分类', 'Procates', 'Product', 3, 1, '0,1'),
(15, 14, '图集分类', 'Procates', 'Img', 4, 1, '0,1');

-- --------------------------------------------------------

--
-- 表的结构 `my_img`
--

CREATE TABLE `my_img` (
  `id` int(11) NOT NULL auto_increment,
  `tid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `picid` varchar(50) NOT NULL,
  `langid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `my_img`
--

INSERT INTO `my_img` (`id`, `tid`, `name`, `date`, `picid`, `langid`) VALUES
(1, 1, '111111', '1351062882', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `my_member`
--

CREATE TABLE `my_member` (
  `id` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `tid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `my_member`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_member_role`
--

CREATE TABLE `my_member_role` (
  `tid` int(11) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `permission` varchar(255) NOT NULL,
  PRIMARY KEY  (`tid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- 导出表中的数据 `my_member_role`
--

INSERT INTO `my_member_role` (`tid`, `name`, `permission`) VALUES
(1, '管理员', '2,3,4,5,6');

-- --------------------------------------------------------

--
-- 表的结构 `my_model`
--

CREATE TABLE `my_model` (
  `mid` int(11) NOT NULL auto_increment,
  `name` varchar(255) NOT NULL,
  `module` varchar(50) NOT NULL,
  `database` varchar(50) NOT NULL,
  PRIMARY KEY  (`mid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 导出表中的数据 `my_model`
--

INSERT INTO `my_model` (`mid`, `name`, `module`, `database`) VALUES
(1, '单页', '', 'page'),
(2, '文章列表', '', 'article'),
(3, '产品列表', '', 'product'),
(4, '图片列表', '', 'img');

-- --------------------------------------------------------

--
-- 表的结构 `my_model_field`
--

CREATE TABLE `my_model_field` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `field` varchar(50) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 导出表中的数据 `my_model_field`
--


-- --------------------------------------------------------

--
-- 表的结构 `my_procates`
--

CREATE TABLE `my_procates` (
  `id` int(11) NOT NULL auto_increment,
  `pid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `picpath` varchar(255) NOT NULL,
  `langid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 导出表中的数据 `my_procates`
--

INSERT INTO `my_procates` (`id`, `pid`, `cid`, `name`, `picpath`, `langid`) VALUES
(1, 0, 14, '图片一', '', 1),
(2, 0, 11, '手机', '', 1),
(3, 2, 11, '充电器', '', 1);

-- --------------------------------------------------------

--
-- 表的结构 `my_product`
--

CREATE TABLE `my_product` (
  `id` int(11) NOT NULL auto_increment,
  `tid` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `picid` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL,
  `langid` int(11) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 导出表中的数据 `my_product`
--

INSERT INTO `my_product` (`id`, `tid`, `name`, `date`, `content`, `picid`, `price`, `langid`) VALUES
(1, 2, '2222', '1351062937', '', '', '33333', 1);

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
('ATTACHSIZE', '3145728', 1),
('ATTACHEXT', '*.jpg;*.gif;*.png;*.jpeg;', 1),
('THUMBMAXWIDTH', '500', 1),
('THUMBMAXHEIGHT', '500', 1),
('ATTACHPATH', './Uploads', 1),
('DB_HOST', 'localhost', 1),
('DB_NAME', 'myweb', 1),
('DB_USER', 'root', 1),
('DB_PWD', '123456', 1),
('DB_PREFIX', 'my_', 1),
('TMPL_CACHE_ON', 'true', 1),
('WEBURL', '网站URL', 1),
('ACTION_CACHE_ON', 'true', 1),
('HTML_CACHE_ON', 'true', 1),
('banner_1', 'Uploads/20121018/03ff8ef80bb4ff4bed6d1b5eb32fe029.jpg', 1),
('banner_2', 'Uploads/20121018/b02e4dc444ef7b7aa9802ca6a7f440dc.jpg', 1);
