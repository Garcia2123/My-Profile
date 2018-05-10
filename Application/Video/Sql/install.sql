# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.2.6-MariaDB)
# Database: resume
# Generation Time: 2018-02-25 16:53:11 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table re_video_actor
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_video_actor`;

CREATE TABLE `re_video_actor` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `name` varchar(31) NOT NULL DEFAULT '' COMMENT '姓名',
  `vid` int(11) NOT NULL DEFAULT 0 COMMENT '所属视频',
  `avatar` varchar(255) NOT NULL DEFAULT '' COMMENT '头像',
  `role` varchar(31) NOT NULL DEFAULT '' COMMENT '角色',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '修改时间',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT 0 COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='演员基本信息表';



# Dump of table re_video_channel
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_video_channel`;

CREATE TABLE `re_video_channel` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(31) NOT NULL DEFAULT '' COMMENT '标题',
  `type` int(11) NOT NULL DEFAULT 0 COMMENT '类型',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '修改时间',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT 0 COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='频道信息表';



# Dump of table re_resume_index
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_resume_index`;

CREATE TABLE `re_resume_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `uid` int(11) NOT NULL DEFAULT 0 COMMENT '绑定UID',
  `mobile` varchar(31) NOT NULL DEFAULT '' COMMENT '手机',
  `email` varchar(31) NOT NULL DEFAULT '' COMMENT '邮箱',
  `qq` varchar(31) NOT NULL DEFAULT '' COMMENT 'QQ',
  `name` varchar(63) NOT NULL DEFAULT '' COMMENT '姓名',
  `gender` int(11) NOT NULL DEFAULT 0 COMMENT '性别',
  `birthday` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '生日',
  `work_year` varchar(63) NOT NULL DEFAULT '' COMMENT '工作年限',
  `academic` int(11) NOT NULL DEFAULT 1 COMMENT '学历',
  `major` varchar(128) NOT NULL DEFAULT '' COMMENT '专业',
  `expect_position` varchar(128) NOT NULL DEFAULT '' COMMENT '期望职位',
  `expect_salary` varchar(31) NOT NULL DEFAULT '' COMMENT '期望薪资',
  `website` varchar(128) NOT NULL DEFAULT '' COMMENT '个人网站',
  `skill` text NOT NULL COMMENT '技能',
  `description` text NOT NULL COMMENT '自我评价',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '更新时间',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='简历信息表';



# Dump of table re_video_index
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_video_index`;

CREATE TABLE `re_video_index` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `title` varchar(31) NOT NULL DEFAULT '' COMMENT '标题',
  `subtitle` varchar(64) NOT NULL DEFAULT '' COMMENT '副标题',
  `cid` int(11) NOT NULL DEFAULT 0 COMMENT '所属频道',
  `cover` varchar(255) NOT NULL DEFAULT '' COMMENT '封面',
  `abstract` varchar(255) NOT NULL DEFAULT '' COMMENT '简介',
  `language` varchar(31) NOT NULL DEFAULT '' COMMENT '语言',
  `category` varchar(31) NOT NULL DEFAULT '' COMMENT '类型',
  `region` varchar(31) NOT NULL DEFAULT '' COMMENT '地区',
  `time_range` varchar(31) NOT NULL DEFAULT '' COMMENT '单集时长',
  `score` varchar(31) NOT NULL DEFAULT '' COMMENT '评分',
  `actors` varchar(255) NOT NULL DEFAULT '' COMMENT '演员表',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '修改时间',
  `sort` tinyint(3) unsigned NOT NULL DEFAULT 0 COMMENT '排序',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COMMENT='视频基本信息表';

# Dump of table re_video_slider
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_video_slider`;

CREATE TABLE `re_video_slider` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT '幻灯ID',
  `title` char(80) NOT NULL DEFAULT '' COMMENT '标题',
  `cover` varchar(255) NOT NULL DEFAULT '' COMMENT '封面图',
  `url` varchar(255) NOT NULL DEFAULT '' COMMENT '点击链接',
  `cid` int(11) NOT NULL DEFAULT 1 COMMENT '所属频道',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `sort` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '排序',
  `status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='幻灯切换表';


/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
