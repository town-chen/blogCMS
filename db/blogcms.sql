/*
Navicat MySQL Data Transfer

Source Server         : ll
Source Server Version : 50622
Source Host           : localhost:3306
Source Database       : blogcms

Target Server Type    : MYSQL
Target Server Version : 50622
File Encoding         : 65001

Date: 2016-10-25 13:46:04
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `admin`
-- ----------------------------
DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of admin
-- ----------------------------
INSERT INTO `admin` VALUES ('1', '120935692@qq.com', '12345');

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('1', 'Symfony');
INSERT INTO `categories` VALUES ('2', 'PHP');
INSERT INTO `categories` VALUES ('3', 'Laravel');

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL,
  `post` int(11) NOT NULL,
  `website` varchar(200) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `is_admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comments
-- ----------------------------
INSERT INTO `comments` VALUES ('1', 'test', 'Vestibulum volutpat pretium libero. Maecenas nec odio et ante tincidunt tempus. Donec elit libero, sodales nec, volutpat a, suscipit non, turpis. Fusce a quam. Vestibulum ullamcorper mauris at ligula.\r\n\r\nSed hendrerit. Donec venenatis vulputate lorem. Cras id dui. Mauris sollicitudin fermentum libero. Aenean viverra rhoncus pede.', '2', 'www.baidu.com', '1', '0');
INSERT INTO `comments` VALUES ('2', 'test2', 'Cras id dui. Curabitur ligula sapien, tincidunt non, euismod vitae, posuere imperdiet, leo. Cras ultricies mi eu turpis hendrerit fringilla. Etiam ut purus mattis mauris sodales aliquam. Duis arcu tortor, suscipit eget, imperdiet nec, imperdiet iaculis, ipsum.', '1', '', '1', '0');
INSERT INTO `comments` VALUES ('3', 'test2', 'Cras sagittis. Aenean ut eros et nisl sagittis vestibulum. Sed aliquam ultrices mauris. Mauris sollicitudin fermentum libero. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est.', '2', '', '1', '1');

-- ----------------------------
-- Table structure for `gallery`
-- ----------------------------
DROP TABLE IF EXISTS `gallery`;
CREATE TABLE `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `poster` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of gallery
-- ----------------------------
INSERT INTO `gallery` VALUES ('1', 'test  gallery', 'Fusce vel dui. Pellentesque egestas, neque sit amet convallis pulvinar, justo nulla eleifend augue, ac auctor orci leo non est. Phasellus nec sem in justo pellentesque facilisis. Nunc sed turpis. Duis lobortis massa imperdiet quam.', 'E:\\桌面_160324\\images\\63d9f2d3572c11df71edda58632762d0f703c289.jpg', 'E:\\桌面_160324\\images\\');

-- ----------------------------
-- Table structure for `posts`
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) NOT NULL,
  `category` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `body` longtext NOT NULL,
  `author` varchar(100) NOT NULL,
  `keywords` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'Simple PHP Post', '2', 'March 27,2016', '<p>This blog post shows a few different types of content that\'s supported and styled with Bootstrap. Basic typography, images, and code are all supported.</p>\r\n            <hr>\r\n            <p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n            <blockquote>\r\n              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n            </blockquote>\r\n            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n            <h2>Heading</h2>\r\n            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>\r\n            <h3>Sub-heading</h3>\r\n            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n            <pre><code>Example code block</code></pre>\r\n            <p>Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa.</p>\r\n            <h3>Sub-heading</h3>\r\n            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean lacinia bibendum nulla sed consectetur. Etiam porta sem malesuada magna mollis euismod. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>\r\n            <ul>\r\n              <li>Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>\r\n              <li>Donec id elit non mi porta gravida at eget metus.</li>\r\n              <li>Nulla vitae elit libero, a pharetra augue.</li>\r\n            </ul>\r\n            <p>Donec ullamcorper nulla non metus auctor fringilla. Nulla vitae elit libero, a pharetra augue.</p>\r\n            <ol>\r\n              <li>Vestibulum id ligula porta felis euismod semper.</li>\r\n              <li>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</li>\r\n              <li>Maecenas sed diam eget risus varius blandit sit amet non magna.</li>\r\n            </ol>\r\n            <p>Cras mattis consectetur purus sit amet fermentum. Sed posuere consectetur est at lobortis.</p>', 'Town', 'php');
INSERT INTO `posts` VALUES ('2', 'Simple Symfony', '1', 'March 27, 2016', '<p>Cum sociis natoque penatibus et magnis <a href=\"#\">dis parturient montes</a>, nascetur ridiculus mus. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Sed posuere consectetur est at lobortis. Cras mattis consectetur purus sit amet fermentum.</p>\r\n            <blockquote>\r\n              <p>Curabitur blandit tempus porttitor. <strong>Nullam quis risus eget urna mollis</strong> ornare vel eu leo. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>\r\n            </blockquote>\r\n            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>\r\n            <p>Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros.</p>', 'Town', 'symfony');

-- ----------------------------
-- Table structure for `subscribers`
-- ----------------------------
DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE `subscribers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of subscribers
-- ----------------------------
INSERT INTO `subscribers` VALUES ('1', 'town', '120935692@qq.com');
INSERT INTO `subscribers` VALUES ('2', 'mica', '137540444@qq.com');
