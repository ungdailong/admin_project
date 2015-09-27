/*
Navicat MySQL Data Transfer

Source Server         : koding
Source Server Version : 50544
Source Host           : 54.254.181.61:3306
Source Database       : admin_project

Target Server Type    : MYSQL
Target Server Version : 50544
File Encoding         : 65001

Date: 2015-09-23 17:52:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for order_details
-- ----------------------------
DROP TABLE IF EXISTS `order_details`;
CREATE TABLE `order_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of order_details
-- ----------------------------

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `approved_by` int(11) DEFAULT NULL,
  `progress` tinyint(4) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------

-- ----------------------------
-- Table structure for product_branchs
-- ----------------------------
DROP TABLE IF EXISTS `product_branchs`;
CREATE TABLE `product_branchs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `branch_name` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of product_branchs
-- ----------------------------

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) DEFAULT NULL,
  `branch_id` int(11) DEFAULT NULL,
  `created_by` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` varchar(255) DEFAULT NULL,
  `modified` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of products
-- ----------------------------

-- ----------------------------
-- Table structure for user_groups
-- ----------------------------
DROP TABLE IF EXISTS `user_groups`;
CREATE TABLE `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user_groups
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `birthday` datetime DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `ip_login` varchar(255) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
