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


# Dump of table re_resume_experience
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_resume_experience`;

CREATE TABLE `re_resume_experience` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `rid` int(11) NOT NULL DEFAULT 0 COMMENT '绑定简历ID',
  `company` varchar(64) NOT NULL DEFAULT '' COMMENT '公司',
  `position` varchar(64) NOT NULL DEFAULT '' COMMENT '职位',
  `time_range` varchar(64) NOT NULL DEFAULT '' COMMENT '时间段',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '更新时间',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='工作经历信息表';



# Dump of table re_resume_experience_project
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_resume_experience_project`;

CREATE TABLE `re_resume_experience_project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `company_id` int(11) NOT NULL DEFAULT 0 COMMENT '绑定公司ID',
  `title` varchar(64) NOT NULL DEFAULT '' COMMENT '项目名称',
  `content` text NOT NULL DEFAULT '' COMMENT '自我评价',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '更新时间',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='公司项目经历信息表';



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



# Dump of table re_resume_project
# ------------------------------------------------------------

DROP TABLE IF EXISTS `re_resume_project`;

CREATE TABLE `re_resume_project` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `rid` int(11) NOT NULL DEFAULT 0 COMMENT '绑定简历ID',
  `title` varchar(64) NOT NULL DEFAULT '' COMMENT '项目名称',
  `content` text NOT NULL DEFAULT '' COMMENT '自我评价',
  `create_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '创建时间',
  `update_time` int(11) unsigned NOT NULL DEFAULT 0 COMMENT '更新时间',
  `status` tinyint(3) NOT NULL DEFAULT 0 COMMENT '状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='项目经历信息表';




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
