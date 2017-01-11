/*
Navicat MySQL Data Transfer

Source Server         : 127
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : larcms

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-01-11 18:45:44
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for addonarticles
-- ----------------------------
DROP TABLE IF EXISTS `addonarticles`;
CREATE TABLE `addonarticles` (
  `aid` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `body` mediumtext,
  `redirecturl` varchar(255) NOT NULL DEFAULT '',
  `templet` varchar(30) NOT NULL DEFAULT '',
  `userip` char(15) NOT NULL DEFAULT '',
  `diyuci` varchar(250) NOT NULL DEFAULT '',
  `tag` varchar(255) DEFAULT NULL,
  `coordinates` varchar(255) DEFAULT NULL,
  `brandname` varchar(255) DEFAULT NULL,
  `brandtime` varchar(255) DEFAULT NULL,
  `brandorigin` varchar(255) DEFAULT NULL,
  `brandnum` varchar(11) DEFAULT NULL,
  `brandpay` varchar(255) DEFAULT NULL,
  `brabdaea` varchar(255) DEFAULT NULL,
  `brandmap` varchar(255) DEFAULT NULL,
  `brandperson` varchar(255) DEFAULT NULL,
  `brandattch` varchar(255) DEFAULT NULL,
  `brandapply` varchar(255) DEFAULT NULL,
  `brandchat` varchar(255) DEFAULT NULL,
  `brandgroup` varchar(255) DEFAULT NULL,
  `brandgarea` varchar(255) DEFAULT NULL,
  `brandduty` varchar(255) DEFAULT '',
  `imageslitpic` varchar(500) DEFAULT NULL,
  `jmxq` mediumtext,
  `jmys` mediumtext,
  `jmlc` mediumtext,
  `jmdt` mediumtext,
  `jmwd` mediumtext,
  PRIMARY KEY (`aid`),
  KEY `typeid` (`typeid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of addonarticles
-- ----------------------------
INSERT INTO `addonarticles` VALUES ('1', '12', '  <table cellspacing=\"0\" style=\"border-top: 1px solid rgb(230, 230, 230);\">\r\n    <tbody>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">品牌名称</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">东方车联汽车服务</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">投资金额</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">一万元以下</td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">成立日期</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">2005-01-06</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">门店总数</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">1500</td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">经营范围</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">汽车后市场产品</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">适合人群</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">自由创业</td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">加盟区域</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">全国</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">是否有区域授权</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">是</td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">品牌发源地</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">上海</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">合同期限</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\"></td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">培训期限</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">二周</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">特许使用费</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\"></td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">营业条件要求</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">有经营场所</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">保证金</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">1-5万元人民币</td>\r\n     </tr>\r\n     <tr>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\">加盟金</td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\">0万元人民币</td>\r\n      <td class=\"td_color\" style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 130px; background: rgb(249, 249, 249);\"> </td>\r\n      <td style=\"padding-top: 5px; padding-bottom: 5px; color: rgb(85, 85, 85); border-bottom: 1px solid rgb(230, 230, 230); text-indent: 15px; height: 20px; overflow: hidden; width: 266px;\"> </td>\r\n     </tr>\r\n    </tbody>\r\n   </table>', '', '', '', '', '一扫光', '', '一扫光', '2008-01-01', '上海', '10000', '5~10万', '全国', '零食', '创业者', '1000', '785', '30~50', '上海卡哇伊实业有限公司', '上海', '是', '/images/thread/2016/11/24/1fce4a35ddfd31ffffc89bd13d02bb33.png,/images/thread/2016/11/24/3075017e42df849e775f597202009471.png,/images/thread/2016/11/24/502b5cd79fe0b710c65aa2034479983f.png,/images/thread/2016/11/24/a221f29dc789f11562e3ff16841bde4b.png,', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">东方车联是上海九脉信息技术有限公司有限公司旗下的一级互联网项目，专业从事车载智能终端和运营平台的研发、制造及销售；基础行车服务；社区平台服务；电子商务通道；移动导购等项目。公司基于智能化终端、4G高速无线数据和互联网商业内容资源，向汽车消费者提供全新的整合服务。</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">东方车联网拥有行业领先的自主研发团队、超强的制造能力、一流的售后服务，通过不断努力和创新，正在建设成为中国最大的TSP终端设备和服务提供商。</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">行动似箭，智能随行!</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">东方车联网秉承“为顾客创造价值、为员工创造机会、为社会创造效益”的企业宗旨，坚持以智能的未来指导企业的长远发展，发扬“敬业、诚信、团队、创新”的企业精神，演绎“智能、实用、时尚”的精品理念，以“研制最好的产品，提供最好的服务，创建最好的品牌”的三好目标作为竞争策略，不断进行经营变革和管理创新，增强企业的核心竞争力。</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">伟大的理想需要过硬的技术去实现，只有这样，东方车联网才能给大家带来非凡的产品，东方车联网以自己独到的见解，自身独有的技术，人性化的设计，精湛的工艺，完成行业内对传统车载DVD/GPS的完美颠覆，同时开创行业的先河，打造国内真正意义上的车联网时代。</p>', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">经验不足不知道该怎么管理加盟店，这是投资者们最担心的问题，毕竟在餐饮行业竞争日益激烈的今天，管理者想要取胜，经验与管理技巧占有很大的优势。乐堡士快餐加盟总部承诺给投资进行长期有效的经验指导，除了在店面开业前会进行相应的培训，在店面开业以后也会定期的派人到店里协助管理。 促销活动的整体策划</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">促销活动是留住老顾客，吸引新顾客的有效办法。但是按照市场发展的需求，在不同的节假日都要有相应的活动，这对于投资者来说，绝对是一件头疼的事情。乐堡士快餐加盟总部有专业的策划团队，能够根据不同地区，不同加盟店的情况，为其策划完整的活动方案，为投资者解决一大麻烦事。</p>', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">经验不足不知道该怎么管理加盟店，这是投资者们最担心的问题，毕竟在餐饮行业竞争日益激烈的今天，管理者想要取胜，经验与管理技巧占有很大的优势。乐堡士快餐加盟总部承诺给投资进行长期有效的经验指导，除了在店面开业前会进行相应的培训，在店面开业以后也会定期的派人到店里协助管理。 促销活动的整体策划</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">促销活动是留住老顾客，吸引新顾客的有效办法。但是按照市场发展的需求，在不同的节假日都要有相应的活动，这对于投资者来说，绝对是一件头疼的事情。乐堡士快餐加盟总部有专业的策划团队，能够根据不同地区，不同加盟店的情况，为其策划完整的活动方案，为投资者解决一大麻烦事。</p>', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">经验不足不知道该怎么管理加盟店，这是投资者们最担心的问题，毕竟在餐饮行业竞争日益激烈的今天，管理者想要取胜，经验与管理技巧占有很大的优势。乐堡士快餐加盟总部承诺给投资进行长期有效的经验指导，除了在店面开业前会进行相应的培训，在店面开业以后也会定期的派人到店里协助管理。 促销活动的整体策划</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">促销活动是留住老顾客，吸引新顾客的有效办法。但是按照市场发展的需求，在不同的节假日都要有相应的活动，这对于投资者来说，绝对是一件头疼的事情。乐堡士快餐加盟总部有专业的策划团队，能够根据不同地区，不同加盟店的情况，为其策划完整的活动方案，为投资者解决一大麻烦事。</p>', '<p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">经验不足不知道该怎么管理加盟店，这是投资者们最担心的问题，毕竟在餐饮行业竞争日益激烈的今天，管理者想要取胜，经验与管理技巧占有很大的优势。乐堡士快餐加盟总部承诺给投资进行长期有效的经验指导，除了在店面开业前会进行相应的培训，在店面开业以后也会定期的派人到店里协助管理。 促销活动的整体策划</p><p style=\"margin-bottom: 0px; padding: 0px; line-height: 28px; color: rgb(102, 102, 102); font-family: tahoma, arial, \"Microsoft YaHei\", sans-serif; font-size: 14px; text-indent: 2em;\">促销活动是留住老顾客，吸引新顾客的有效办法。但是按照市场发展的需求，在不同的节假日都要有相应的活动，这对于投资者来说，绝对是一件头疼的事情。乐堡士快餐加盟总部有专业的策划团队，能够根据不同地区，不同加盟店的情况，为其策划完整的活动方案，为投资者解决一大麻烦事。</p>');
INSERT INTO `addonarticles` VALUES ('2', '3', 'sdfdsfds', '', '', '', '', '测试', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('3', '12', '<p><img src=\"/images/thread/2016/10/16/c54911ffe3815b053a3fa3055bae3489.jpg\" style=\"width: 298px;\">\r\n\r\n                    </p>', '', '', '', '', '一扫光零食怎么样', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('4', '8', '', '', '', '', '', '傻子瓜子', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('5', '8', null, '', '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('6', '8', '', '', '', '', '', '好想你枣', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('7', '8', '', '', '', '', '', '喜郎儿', '喜郎儿', '喜郎儿', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('8', '8', '', '', '', '', '', '戴永红', '戴永红', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('9', '8', '', '', '', '', '', '金大妈', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('10', '8', '', '', '', '', '', '崩豆张', '崩豆张', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('11', '8', '', '', '', '', '', '一品香', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('12', '8', '', '', '', '', '', '大山合', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('13', '8', '', '', '', '', '', '粒上皇', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('14', '8', '', '', '', '', '', '核工记', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('15', '9', '', '', '', '', '', '万国码头', '', '', '', '', '', '5~7', '', '零食炒货', '11', '33', '44', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('16', '9', '', '', '', '', '', '舌间味', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('17', '9', '', '', '', '', '', '非常味道', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('18', '9', '', '', '', '', '', '自由自在', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('19', '9', '', '', '', '', '', '百比佳', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('20', '9', '', '', '', '', '', '甜蜜小筑', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('21', '9', '', '', '', '', '', '优之良品', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('22', '9', '', '', '', '', '', '妮当家', '', '', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('23', '9', '', '', '', '', '', '优客龙', '', '', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('24', '9', '', '', '', '', '', '莫丽食品', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('25', '2', '', '', '', '', '', '三只松鼠', '', '', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('26', '13', '', '', '', '', '', '良品铺子加盟', '', '', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('27', '14', '', '', '', '', '', '老婆大人加盟', '', '', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('28', '15', '', '', '', '', '', '盐津铺子加盟', '', '', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('29', '17', '', '', '', '', '', '百草味加盟', '', '', '', '', '', '5~10', '', 'lingshi', '', '1000', '10000', '2000', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('30', '18', '', '', '', '', '', '零食多加盟', '', '', '', '', '', '10~20', '', '', '', '', '', '', '', '', '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('31', '3', '<h6><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">投资加盟零食店需要满足哪些条件？</strong><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">随着人们对于零食的需求量增大，市场上</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\"></u></a><u style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟</u></a>店</u><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">不断增多。因此，很多人都想要抓住机会，投资加盟零食店实现自己创业致富的梦想。既然是投资加盟零食店，首先大家需要明白的是投资加盟零食店需要满足哪些条件才可以加盟？只有清楚的了解加盟零食店的条件，才能更好的为以后做打算。下面小编给大家详细的介绍下投资加盟零食店需要满足的条件，让大家有个基本的了解。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\"><img alt=\"一扫光零食\" src=\"http://www.xxspfood.com/uploads/allimg/161008/1-16100Q44511128.jpg\" style=\"margin: 0px; padding: 0px; width: 360px; height: 242px;\"><br style=\"margin: 0px; padding: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">一扫光</u></a>零食</div><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　足够的创业资金</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　创业需要启动资金，相信大家都是知道的，不同的投资项目需要的资金也都是存在很大差别的。比如说现在投资加盟零食店，需要的成本就比较低，只需要几万元就足够了，当然也是根据加盟品牌来的。投资加盟国内知名的</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\"></u></a><u style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">一扫光零食</u></a>加盟</u><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">店，仅仅只要八万元就足够了，其中还包括了保证金，首次进货费，产品货架等费用。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　选择一个好的品牌</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　加盟零食店之前大家还需要选择一个好的零食加盟品牌，这是非常必要的。选择实力强，知名度高的加盟品牌，能够为零食加盟店积累较为稳定客户源，确保每天的基本收入，以及充足的客源。同时选择一个好的零食加盟品牌，还可以提高店铺的知名度以及影响力。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　经营管理店铺的能力</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　投资商想要开零食加盟店，还要具备一定的经营管理能力。只有掌握一些开零食店的基本知识和经营要领，零食加盟店才能有长远的发展和长久的利益。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　</span><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　投资加盟零食店需要满足哪些条件？</strong><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">看了上面的文章，相信大家对于投资加盟零食店需要的条件有了基本的了解。如果大家还有什么不清楚或者是不明白的地方，点击两边的弹窗进行详细的咨询</span><br></h6>\r\n\r\n                    ', '', '', '', '', '加盟零食店', '', null, null, null, null, '', null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('32', '3', '<strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　投资加盟零食店注意事项有哪些？</strong><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">创业有风险，投资需谨慎。投资开零食店也是一样，许多人为了规避风险，都选择了以投资的形势加盟零食店，降低创业的风险，同时也降低了创业需要的成本。那么在投资加盟零食店之前，大家有没有什么需要注意的事项呢？肯定是有的。下面小编给大家详细的介绍下投资加盟零食店注意事项有哪些，让大家有个基本的了解，可以在开店前期规避。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\"><img alt=\"一扫光零食\" src=\"http://www.xxspfood.com/uploads/allimg/160929/1-160929150K6432.jpg\" style=\"margin: 0px; padding: 0px; width: 360px; height: 230px;\"><br style=\"margin: 0px; padding: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">一扫光</u></a>零食</div><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　选择实力强的加盟品牌</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　投资加盟零食店首先需要注意的一点就是要选择一个好的</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟</u></a><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">品牌，选择一个实力强大的零食加盟品牌，在总部的帮助下，可以提高零食店知名度，这样一来投资商可以省下许多的宣传费用。并且现在加盟总部的实力强，</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\">零食店加盟</u></a><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">才有保障，有实力才有能力，有能力的加盟品牌才能让投资商放心加盟，开零食店成功率才高。如</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\"></u></a><u style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">一扫光零食</u></a>加盟</u><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">品牌成立多年，在零食行业占有一定份额，在零食市场有一批忠实的消费者。现在加盟一扫光零食店，投资商可以享有很大的保证，也可以提高</span><a href=\"http://www.xxspfood.com/lrfx/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\">零食店利润</u></a><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　注意产品的质量</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　现在是21世纪，人们对于零食的需求量不断增加，同时对于零食的要求也是越来越严格。大家在购买零食时都比较看重产品的质量，健康营养的零食更能吸引消费者的注意力。因此，现在投资加盟零食店一定要注重产品的质量问题。质量有保证，口味好，想要赚钱是非常简单地。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">&nbsp;</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　投资加盟零食店注意事项有哪些？</strong><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">看了上面的文章，相信大家对于投资加盟零食店注意事项有了简单地了解。如果还有什么不清楚或者是不明白的地方，点击两边的弹窗进行详细的咨询。如果大家是有创业想法的，在网站下面留言，我们会第一时间给大家回复的。</span>\r\n\r\n                    ', '', '', '', '', '投资加盟零食店', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('33', '3', '<span style=\"border-style: initial; border-color: initial; border-image: initial;\">　</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; outline-style: none; outline-width: initial;\">一扫光</a><span style=\"border-style: initial; border-color: initial; border-image: initial;\">怎么样？加盟赚钱吗？</span>随着时代的发展，越来越多的人走上了创业致富的道路，许多人依靠投资加盟零食店实现了自己创业致富的梦想。市场上不断地出现<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\"></a><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">零食加盟</a>店，加盟品牌也是越来越多。一扫光凭借其品牌优势和实力，可以说是<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">零食店加盟</a>品牌里的佼佼者。那么现在加盟<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">一扫光零食</a>店怎么样？赚钱吗？相信这是大家比较想要知道的，下面小编给大家详细的介绍下<a href=\"http://www.xxspfood.com/jmlr/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">开零食店赚钱吗</a>？让大家有个基本的了解。<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\"><div style=\"margin: 0px; padding: 0px; border: 0px;\"><img alt=\"一扫光零食\" src=\"http://www.xxspfood.com/uploads/allimg/160927/1-16092G53240W1.jpg\" style=\"margin: 0px; padding: 0px; width: 360px; height: 242px;\"><br style=\"margin: 0px; padding: 0px;\">一扫光零食</div>&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　首先，人们对于零食的需求量越来越大，消费群体不断增加，市场需求量不断地扩张。投资加盟零食店正是顺应了市场的发展，想要赚钱是比较简单的。人们对于零食的需求量居高不下，可以说零食是老少皆宜的产品。市场销量变大，投资加盟零食店只要抓住了消费者的心，再加上庞大的消费群体看，零食店加盟的市场前景就不容小觑。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　其次现在投资加盟一扫光零食店，投资商可以享有很大的优惠政策，同时也可以享受一扫光保姆式的免费服务。加盟一扫光零食点总部会针对投资商进行店铺经营、产品营销等方面的专业培训。同时总部还对各个地区零食加盟店做大量的品牌推广工作，这些工作大大降低了创业风险。如果选好了品牌，在总部的帮扶下，创业成功指日可待。据调查显示现在加盟一扫光<a href=\"http://www.xxspfood.com/lrfx/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">零食店利润</a>高达40%-60%以上，远超其他行业的平均利润。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\"><font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　　一扫光怎么样？加盟赚钱吗？</span></font>通过上面的分析和介绍，相信大家对于开零食店赚钱吗以及加盟一扫光零食店怎么样有了简单地了解。如果大家有创业想法的，在网站下面留言，我们会第一时间给大家进行回复的。\r\n\r\n                    ', '', '', '', '', '一扫光怎么样', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('34', '3', '<span style=\"border-style: initial; border-color: initial; border-image: initial;\">投资开零食店需要考虑哪些问题？</span>随着人们生活水平的提高，大家对于休闲零食的需求不断增加，促使了零食行业的火爆发展。因此，很多人看中了投资加盟零食店，觉得是一个创业比较好的项目。市场上不断地出现<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\"></a><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">零食加盟</a>店，竞争越来越激烈，投资商想要开家赚钱的零食加盟店，就需要掌握好开店的技巧还有注意事项。那么现在投资开零食加盟店需要考虑哪些问题呢？想必这是大家都非常想要的，下面小编给大家详细的介绍下，让大家有个基本的了解。<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\"><div style=\"margin: 0px; padding: 0px; border: 0px;\"><img alt=\"一扫光零食\" src=\"http://www.xxspfood.com/uploads/allimg/160926/1-160926152R9226.jpg\" style=\"margin: 0px; padding: 0px; width: 360px; height: 360px;\"><br style=\"margin: 0px; padding: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">一扫光</a>零食</div>&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　其一：选择一个优质的零食加盟品牌<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　零食行业的火爆发展，促使市场上出现了许多加盟品牌，鱼龙混杂。通过对不同品牌的调查显示，不同的零食加盟品牌给投资商带来的服务以及支持等都是不一样的，利润空间也存在很大的差别。因此，投资加盟零食店想要赚钱，在创业前期就需要选择一个好的零食加盟品牌。一扫光作为国内知名的零食加盟品牌，凭借着巨大的市场影响力以及较高的知名度，自成立以来，便吸引了不少人的加入。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\"><font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　　其二：店铺宣传要到位</span></font><br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　面对激烈的市场竞争，想要开家赚钱的零食加盟店，要获得很多消费者的支持。那么怎么做才能获得消费者的支持和认可呢？首先一定要把店铺推广出去，让更多的消费者知道店铺的存在，才会提高消费者进店购买零食的几率，从而保障店铺内的生意。店铺宣传到位了，可以吸引消费者的目光，同时也可以发掘潜在消费者，想要赚钱就比较简单。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\"><font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　　投资开零食店需要考虑哪些问题？</span></font>通过上面的分析和介绍，相信大家对于投资加盟零食店需要注意的事项有了简单地了解。在创业初期，一定要避开存在的危险，才能保证店铺后期的发展。如果还有什么不清楚或者是不明白的地方，点击两边的弹窗进行详细的咨询。\r\n\r\n                    ', '', '', '', '', '', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('35', '3', '<span style=\"border-style: initial; border-color: initial; border-image: initial;\">开零食店需要考虑哪些问题？</span>随着零食行业的火爆发展，许多人对于投资加盟零食店感到非常的有兴趣。不仅投入的资金比较少，承担的风险低，还可以获得很高的<a href=\"http://www.xxspfood.com/lrfx/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">零食店利润</a>空间，是非常适合大家创业的。但是在开店之前，大家需要明白的是开<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\"></a><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">零食加盟</a>店需要考虑哪些问题，相信这是许多人都想要知道的。下面小编给大家详细的介绍下开零食加盟店的注意事项，想要了解的一起来看下吧。<br style=\"margin: 0px; padding: 0px;\"><br style=\"margin: 0px; padding: 0px;\"><div style=\"margin: 0px; padding: 0px; border: 0px;\"><img alt=\"一扫光零食\" src=\"http://www.xxspfood.com/uploads/allimg/160923/1-160923151Z25a.jpg\" style=\"margin: 0px; padding: 0px; width: 360px; height: 242px;\"><br style=\"margin: 0px; padding: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">一扫光</a>零食</div>&nbsp;<br style=\"margin: 0px; padding: 0px;\"><font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　　了解加盟品牌的详细信息</span></font><br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　投资加盟零食店之前，大家需要对自己想要加盟的零食品牌进行详细的了解。了解清楚加盟品牌的相关资料，实力如何，加盟店数量是多少等。了解清楚之后便可以对该品牌心理有个底，可以放心的加盟。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\"><font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　　调查市场以及消费者</span></font><br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　加盟零食店之前还需要进行市场以及消费者进行调查，这是非常必要的。看看自己所选择的零食加盟品牌在市场上是否有较高的知名度以及认可度，并且消费者对于该品牌的评价如何，是否喜爱该品牌旗下的零食产品等。这样得出的结果比较明显，投资商可以更加详细的了解。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\"><font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　　实地考察加盟总部</span></font><br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　　投资商要到加盟品篇的总部实地考察一番，才能确保真正地了解该加盟公司的相关情况。另外对于总部旗下的零食加盟店，也要去观察一下经营情况怎么样，店内产品是否畅销等等，方便自己设想自己店面日后的经营情况。<br style=\"margin: 0px; padding: 0px;\">&nbsp;<br style=\"margin: 0px; padding: 0px;\">　<font color=\"#333333\" face=\"宋体\"><span style=\"border-style: initial; border-color: initial; border-image: initial; font-size: 14px;\">　开零食店需要考虑哪些问题？</span></font>通过上面的分析和介绍，相信大家对于开零食加盟店需要注意什么有了详细的了解。大家还有什么不清楚或者是不明白的地方，点击一扫光官网进行详细的咨询。如果大家是有创业想法的，在网站下面留言，我们会第一时间给大家回复的。（文/zdj）\r\n\r\n                    ', '', '', '', '', '开零食店', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('36', '3', '<div style=\"margin: 0px; padding: 0px; border: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; border: 0px; outline-style: none; outline-width: initial;\">休闲食品加盟</a>行业的发展，符合人们的消费需求，对于消费者来说，选择休闲食品加盟行业是非常理想的致富方式，但是很多投资者开店并没有得到想象中的高利润，原因就在于他们不懂得个人经营，那么<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">休闲食品加盟店</a>该如何去经营？是很多投资者想要了解的问题，本文带着这个问题就由<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">一扫光</a>小编来为大家详解一下吧。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\"><img alt=\"一扫光休闲食品加盟店\" src=\"http://www.xxspfood.com/uploads/allimg/160620/1-160620140J3420.jpg\" style=\"margin: 0px; padding: 0px; width: 348px; height: 349px;\"><br style=\"margin: 0px; padding: 0px;\">一扫光休闲食品加盟店</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　首先，想要经营好休闲食品加盟店一定要注重合理化运营品牌优势，如果投资者选择了优秀的品牌，就一定要将品牌优势最大化，利于品牌的高名气吸引消费者的关注。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　其次，产品的及时更新是非常重要的，对于消费者来说，都希望走进门店有更多的选择，如果店铺内的产品过于单一，那么是不利于店铺日后发展的。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　最后，促销宣传对于店铺来说是非常重要的，通过促销宣传活动，可以让消费者对于店铺有着过多的了解，也能够提升店铺的知名度，更能让消费者买到性价比较高的产品，这样常此以往，店铺更可以得到好的发展。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　休闲食品加盟店该如何去经营？通过以上介绍相信大家心中都有了初步的了解和认识了，如想进一步了解加盟相关信息可以点击本站的在线咨询，也可以在本站下方进行留言，本站专业的客服人员将会为您耐心解答。</div>\r\n\r\n                    ', '', '', '', '', '休闲食品加盟店经营', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('37', '3', '<div style=\"margin: 0px; padding: 0px; border: 0px;\"><a href=\"http://www.xxspfood.com/jmzx/\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\"><span style=\"border-style: initial; border-color: initial; border-image: initial;\">小食品加盟</span></a>店的经营技巧有哪些？小食品加盟行业的发展大家是有目共睹的，很多小食品加盟店门口也是门庭若市，但是并不是人人开店生意都能如此红火，除了依靠优秀的品牌，更需要个人的经营，那么小食品加盟店的经营技巧有哪些？本文带着这个问题就由<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; outline-style: none; outline-width: initial;\">一扫光</a>小编来为大家详解一下吧。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\"><img alt=\"一扫光小食品加盟店\" src=\"http://www.xxspfood.com/uploads/allimg/160614/1-16061416030R10.jpg\" style=\"margin: 0px; padding: 0px; width: 400px; height: 276px;\"></div><div style=\"margin: 0px; padding: 0px; border: 0px;\">一扫光小食品加盟店</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　首先，促销宣传是每一个个店铺都会做的活动，但是想要通过活动赚到钱，就一定要让活动变得有意义有影响力，经营者可以做些微信微博推广宣传，零食立减试吃的活动，让更多消费者得知店铺的存在，不要一直墨守成规的只有打折活动。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　其次，一定要做好小食品加盟店的产品齐全，由于每一位消费者对于零食的口感需求都有所不同，因此店铺一定要做好零食的齐全，才能使店铺得到长久的发展。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　最后，微笑服务是并不可少的，零食传递的就是一种积极向上、乐观健康的生活方式，因此一个会心的微笑，往往会让消费者对于店铺留下深刻的印象，使店铺得到长久的发展。</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">&nbsp;</div><div style=\"margin: 0px; padding: 0px; border: 0px;\">　　小食品加盟店的经营技巧有哪些？希望一扫光小编整理的相关建议能够给大家带来帮助，如想进一步了解加盟相关信息可以点击本站的在线咨询，也可以在本站下方进行留言，本站专业的客服人员将会为您耐心解答。</div>\r\n\r\n                    ', '', '', '', '', '小食品加盟店的经营技巧有哪些', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('38', '3', '<div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　<a href=\"http://www.xxspfood.com/\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><strong style=\"margin: 0px; padding: 0px; border: 0px;\">休闲</strong></a><strong style=\"margin: 0px; padding: 0px; border: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟</u></a></strong>店的经营技巧有哪些？想要店铺得到长久的发展，就一定要做好日常的经营，但是很多投资者对于经营一知半解，那么休闲零食店的经营技巧有哪些？是很多投资者想要了解的问题，本文带着这个问题就由<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">一扫光</u></a>小编来为大家详解一下吧。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\"><img alt=\"一扫光休闲零食加盟店\" src=\"http://www.xxspfood.com/uploads/allimg/160613/1-160613102956103.jpg\" style=\"margin: 0px; padding: 0px; width: 400px; height: 276px;\"></div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\">一扫光休闲<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟店</u></a></div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　首先，想要经营好休闲零食加盟店，一定要让店铺的零食覆盖量广泛，因为每个人的口感需求都不同，也由于地方特色不同，比如北方人喜欢辣的，南方人喜爱甜食等等，投资者一定要充分了解不同消费层次消费者的口感需求，做好零食的齐全。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"> </div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　其次，促销宣传活动对于店铺来说是非常重要的，这往往能够提升店铺的知名度，保障店铺的顺利运营，投资者可以通过微信、微博等平台进行一些推广活动，便于提高店铺对于消费者的吸引力，也可以做些立减打折的活动，吸引消费者的眼球。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"> </div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　最后，服务态度，在开店的过程中起到了非常重要的作用，很多消费者进店购物选择你们家，最简单的理由就是服务态度好，如果一家店铺知名度在高，零食再优质，服务态度差，消费者也不愿意去前往，因此为顾客一个微笑，一个细心的关怀，就可以让您的店铺得到长久的发展。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"> </div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　休闲零食店的经营技巧有哪些？经营店铺并非一朝一夕的事情，只有坚持不懈，用心经营店铺终将会得到丰厚的利润。</div>\r\n\r\n                    ', '', '', '', '', '休闲零食加盟店的经营技巧有哪些', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('39', '3', '<div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　<a href=\"http://www.xxspfood.com/\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><strong style=\"margin: 0px; padding: 0px; border: 0px;\">休闲</strong></a><strong style=\"margin: 0px; padding: 0px; border: 0px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟</u></a></strong>店该如何经营?在城市的街道上，总能看到有些店铺生意非常红火，而有的店铺门庭顾客寥寥无几，很多投资者都希望自己的店铺可以客似云来，但是高利润往往是个人经营的过程中创造出来的，那么休闲零食店该如何经营？是很多投资者想要了解的问题，本文带着这个问题就由<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">一扫光</u></a>小编来为大家详解一下吧。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\"><img alt=\"一扫光休闲零食加盟店\" src=\"http://www.xxspfood.com/uploads/allimg/160612/1-1606121100441N.jpg\" style=\"margin: 0px; padding: 0px; width: 320px; height: 352px;\"></div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\">一扫光休闲<a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟店</u></a></div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　首先，想要经营好休闲零食店，投资者一定要做好准备，对于消费者进行定位，比如有的人口味偏重，有些人在意零食的价格，而有些人在意零食的质量，投资者一定要将消费者的注意点都囊括其中，零食一定要做好种类齐全，满足消费者的各种需求。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"> </div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　其次，经营店铺并没有投资者所想的这么简单，很多投资者都认为，只要零食质量好，安静等待顾客就行，不过在这个酒香也怕巷子深的时代，只有做好宣传，才能提高店铺的知名度和曝光度，投资者可以做些VIP推行的活动，也可以进行微信点赞，积分卡立减的活动，吸引消费者的关注，自然有利于店铺得到长久的发展。</div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"> </div><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">　　休闲零食店该如何经营？希望一扫光小编整理的相关建议能够给大家带来帮助，如想进一步了解加盟相关信息可以点击本站的在线咨询，也可以在本站下方进行留言，本站专业的客服人员将会为您耐心解答</div>\r\n\r\n                    ', '', '', '', '', '休闲零食加盟店该如何经营', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('40', '3', '<span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"> 据市场调查显示：现在休闲零食的产品销售情况看好，“</span><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><u style=\"margin: 0px; padding: 0px;\">一扫光</u></a><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">”就是其中的代表。这个行业的前景引起了许多创业者的重视，因此很多人都来咨询</span><a href=\"http://www.xxspfood.com/\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial; font-family: 宋体; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px; border: 0px;\">休闲</strong></a><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><a href=\"http://www.xxspfood.com/\" target=\"_blank\" style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); outline-style: none; outline-width: initial;\"><u style=\"margin: 0px; padding: 0px;\">零食加盟</u></a></strong><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">投资开店如何经营。那么休闲零食连锁店该怎么经营呢?这是许多投资者比较关注的话题。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><div style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px; text-align: center;\"><img alt=\"一扫光休闲零食连锁店\" src=\"http://www.xxspfood.com/uploads/allimg/160608/1-16060Q50RV58.jpg\" style=\"margin: 0px; padding: 0px; width: 500px; height: 334px;\"><br style=\"margin: 0px; padding: 0px;\">一扫光休闲零食连锁店</div><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">    </span><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">一、特定的消费群</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">     休闲零食连锁店由于休闲零食针对特定的目标消费群，强调休闲零食品牌的个性化，包括产品的风格，休闲零食卖场设计，品牌形象策划等各个方面。只有当产品风格、卖场风格以及品牌形象一致时，品牌的性格才显露出来。因此，卖场对烘托品牌形象至关重要。卖场之于休闲零食，不仅仅是销售的场所，更是一种个性的展示。卖场的设计风格、道具、灯光等等都要烘托休闲零食的品质，提高休闲零食的附加值。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">    </span><strong style=\"margin: 0px; padding: 0px; border: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">二、树立品牌形象</strong><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">    休闲零食连锁店除了环境、管理与服务而外，由于品牌要取得市场、消费者及零售商的认可，终都将体现在其实际的休闲零食销售业绩上面。“没有销售的品牌不是好品牌”的营销观念，积极利用终端，促进销售。在定价方面，采取全国统一的定价策略，树立品牌的统一形象，加强消费者对品牌定价的认知。在产品销售时，除非电脑故障，一般通过商品条码扫描，按电脑显示的统一价格及折扣付款，增强产品价格的权威性。</span><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><br style=\"margin: 0px; padding: 0px; color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: 宋体; font-size: 14px;\">     现在开休闲零食连锁店要想获得好的收益，那么在日常开店时就应该掌握一定的经营方法，以上所介绍的经营方法，可供休闲零食连锁店的店主们开店时借鉴，同时准确的发展方向，有自己的特色产品，就能有好的市场口碑，抓好产品的质量和人员的培训就是在不断的创造利润的增值空间，这就是经营的关键。</span>\r\n\r\n                    ', '', '', '', '', '休闲零食加盟', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('41', '2', 'cvvvv', '', '', '', '', '四只松鼠', '杭州', '四只松鼠', '', '', '', '5~10', '', '', '', '', '', '', '', '', '', ',', '', '', '', '', '');
INSERT INTO `addonarticles` VALUES ('42', '17', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p><img style=\"width: 450px;\" src=\"/images/thread/2016/11/24/298ebcfa2ad53426f9051fc01d2bd2c9.jpg\">\r\n\r\n                    </p>', '', '', '', '', '合并报表', '', null, null, null, null, null, null, null, null, null, null, null, null, null, '', null, null, null, null, null, null);
INSERT INTO `addonarticles` VALUES ('43', '17', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '/images/thread/2017/01/11/fce2b7abf3023dd5331ee43288c8caf4.png,/images/thread/2017/01/11/886fcf5eb4dd4e233f0310a705e93475.png,', '<p>东方闪电的<img src=\"/images/thread/2017/01/11/c85f01c99338b9665164a2c8cad3c709.png\" style=\"width: 594px;\"></p>', '<p>实打实的所<img src=\"/images/thread/2017/01/11/b204f7246866fe7426d25b870e8e8864.png\" style=\"width: 594px;\"></p>', '<h2 class=\"title\" style=\"font-family: &quot;Helvetica Neue&quot;, Roboto, Arial, &quot;Droid Sans&quot;, sans-serif; color: rgb(115, 135, 156);\"><a style=\"color: rgb(90, 115, 142);\">加盟流程</a><img src=\"/images/thread/2017/01/11/119dd8e6b93c4d60936dc306779828e8.png\" style=\"width: 594px;\"></h2>', '<h2 class=\"title\" style=\"font-family: &quot;Helvetica Neue&quot;, Roboto, Arial, &quot;Droid Sans&quot;, sans-serif; color: rgb(115, 135, 156);\"><a style=\"color: rgb(90, 115, 142);\">品牌动态</a><img src=\"/images/thread/2017/01/11/329ed85b8c591380566e8e657ea030f5.png\" style=\"width: 594px;\"></h2>', '<h2 class=\"title\" style=\"font-family: &quot;Helvetica Neue&quot;, Roboto, Arial, &quot;Droid Sans&quot;, sans-serif; color: rgb(115, 135, 156);\"><a style=\"color: rgb(90, 115, 142);\">加盟问答</a><img src=\"/images/thread/2017/01/11/1f27748947527a9a500cf0f33c237db9.png\" style=\"width: 594px;\"></h2>');

-- ----------------------------
-- Table structure for admins
-- ----------------------------
DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of admins
-- ----------------------------
INSERT INTO `admins` VALUES ('1', '吴彦祖', 'dkoelpin@example.org', '$2y$10$DtHzFQVdDax0vjY1jLpeZ.kzRpKmBnQU3ZPziT3/eS34Uv949piIm', 'K0w862N5xF', '2016-12-27 07:31:45', '2016-12-27 07:31:45');
INSERT INTO `admins` VALUES ('2', '张柏芝', 'smith.rebekah@example.com', '$2y$10$DtHzFQVdDax0vjY1jLpeZ.kzRpKmBnQU3ZPziT3/eS34Uv949piIm', 'pC1IlOQAyT', '2016-12-27 07:31:45', '2016-12-27 07:31:45');
INSERT INTO `admins` VALUES ('3', '梁朝伟', 'beer.damien@example.net', '$2y$10$DtHzFQVdDax0vjY1jLpeZ.kzRpKmBnQU3ZPziT3/eS34Uv949piIm', 'Xybj5Vx1tI', '2016-12-27 07:31:45', '2016-12-27 07:31:45');
INSERT INTO `admins` VALUES ('4', 'Tara Conroy', 'qraynor@example.net', '$2y$10$WhgwVd0lypwkuwRhJ59MROsT91VSw5qx/6Ak/aYrEIopNM2XD5ae2', 'eqq2SD8PEU', '2016-12-27 07:32:47', '2016-12-27 07:32:47');
INSERT INTO `admins` VALUES ('5', 'Prof. Leora Tremblay', 'jarrod.stokes@example.net', '$2y$10$WhgwVd0lypwkuwRhJ59MROsT91VSw5qx/6Ak/aYrEIopNM2XD5ae2', 'fca4VdnbLV', '2016-12-27 07:32:47', '2016-12-27 07:32:47');
INSERT INTO `admins` VALUES ('6', 'Nathan Langworth DDS', 'wkessler@example.org', '$2y$10$WhgwVd0lypwkuwRhJ59MROsT91VSw5qx/6Ak/aYrEIopNM2XD5ae2', 'BQv9aBQVoE', '2016-12-27 07:32:47', '2016-12-27 07:32:47');
INSERT INTO `admins` VALUES ('7', 'Citlalli Green', 'mallie29@example.net', '$2y$10$Rv0PYRgzvbzrpesAq2om2eOD.kurkos/K47WbRzYbyuFgY/a5MlF2', 'EWhAwIeApP', '2016-12-27 07:32:52', '2016-12-27 07:32:52');
INSERT INTO `admins` VALUES ('8', 'Jedidiah Von', 'jnolan@example.org', '$2y$10$Rv0PYRgzvbzrpesAq2om2eOD.kurkos/K47WbRzYbyuFgY/a5MlF2', 'Hj6P7YHgRV', '2016-12-27 07:32:52', '2016-12-27 07:32:52');
INSERT INTO `admins` VALUES ('9', 'Stephanie Hessel', 'willms.letha@example.net', '$2y$10$Rv0PYRgzvbzrpesAq2om2eOD.kurkos/K47WbRzYbyuFgY/a5MlF2', 'JJqk02o9Ya', '2016-12-27 07:32:52', '2016-12-27 07:32:52');

-- ----------------------------
-- Table structure for answers
-- ----------------------------
DROP TABLE IF EXISTS `answers`;
CREATE TABLE `answers` (
  `qid` int(11) NOT NULL AUTO_INCREMENT,
  `id` int(11) NOT NULL,
  `contents` text,
  `goodpost` int(11) DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of answers
-- ----------------------------
INSERT INTO `answers` VALUES ('1', '3', '测试数据回复内容', null);
INSERT INTO `answers` VALUES ('2', '3', '再来一个评论', null);
INSERT INTO `answers` VALUES ('3', '1', '测试问答登录', null);
INSERT INTO `answers` VALUES ('4', '1', '火狐测测看', null);
INSERT INTO `answers` VALUES ('5', '1', '再测一次', null);
INSERT INTO `answers` VALUES ('6', '1', '1', null);
INSERT INTO `answers` VALUES ('7', '1', '要我怎样', null);
INSERT INTO `answers` VALUES ('8', '3', '还要我怎样', null);

-- ----------------------------
-- Table structure for archives
-- ----------------------------
DROP TABLE IF EXISTS `archives`;
CREATE TABLE `archives` (
  `id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `typeid2` varchar(90) NOT NULL DEFAULT '0',
  `sortrank` int(10) unsigned NOT NULL DEFAULT '0',
  `flag` set('c','h','p','f','s','j','a','b') DEFAULT '',
  `ismake` smallint(6) NOT NULL DEFAULT '0',
  `channel` smallint(6) NOT NULL DEFAULT '1',
  `arcrank` smallint(6) NOT NULL DEFAULT '0',
  `click` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title` char(60) NOT NULL DEFAULT '',
  `shorttitle` char(36) NOT NULL DEFAULT '',
  `writer` char(20) NOT NULL DEFAULT '',
  `source` char(30) NOT NULL DEFAULT '',
  `litpic` char(100) NOT NULL DEFAULT '',
  `pubdate` int(10) unsigned NOT NULL DEFAULT '0',
  `senddate` int(10) unsigned NOT NULL DEFAULT '0',
  `mid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `keywords` char(30) NOT NULL DEFAULT '',
  `description` varchar(255) NOT NULL DEFAULT '',
  `dutyadmin` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `tackid` int(10) NOT NULL DEFAULT '0',
  `mtype` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `weight` int(10) NOT NULL DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sortrank` (`sortrank`),
  KEY `mainindex` (`arcrank`,`typeid`,`channel`,`flag`,`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of archives
-- ----------------------------
INSERT INTO `archives` VALUES ('1', '12', '0', '0', 'c,f,a', '1', '1', '0', '0', '一扫光休闲食品加盟', '【一扫光休闲食品加盟】', '', '', '/images/thread/2016/11/24/8ffd5e592a59e71734049aa3dea1f0ce.png', '1484118949', '1476457236', '1', '一扫光休闲食品加盟', '品牌名称东方车联汽车服务投资金额一万元以下成立日期2005-01-06门店总数1500经营范围汽车后市场产品适合人群自由创业加盟区域全国是否有区域授权是品牌发源地上海合同期限培训期限二周特许使用费营业条件要求有经营场所保证金1-5万元人民币加盟金0万元人民币  东方车联汽车服务加盟详情东方车联是上海九脉信息技术有限公司有限公司旗下的一级互联网项目，专业从事车载智能终端和运营平台', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('2', '3', '0', '0', '', '1', '1', '0', '0', 'ces', 'ces', '', '', '/images/thread/2016/10/14/a200b44607e5329cc1a05bb13f9c8c46.jpg', '1476783122', '1476457344', '0', 'ce', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('3', '12', '0', '0', '', '1', '1', '0', '0', '一扫光零食怎么样', '一扫光零食怎么样', '', '', '/images/thread/2016/10/16/317ce904e264608f3a0ecc744a5a4699.jpg', '1476603638', '1476603638', '0', '一扫光零食怎么样', '一扫光零食怎么样', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('4', '8', '0', '0', '', '1', '1', '0', '0', '傻子瓜子', '傻子瓜子', '', '', '', '1476604856', '1476604856', '0', '傻子瓜子', '傻子瓜子', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('5', '8', '0', '0', 'h', '1', '1', '0', '0', '傻子瓜子', '傻子瓜子', '', '', '', '1476604975', '1476604975', '1', '傻子瓜子', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('6', '8', '0', '0', 'h', '1', '1', '0', '0', '好想你枣', '好想你枣', '', '', '', '1476605979', '1476605275', '1', '好想你枣', '好想你枣', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('7', '8', '0', '0', '', '1', '1', '0', '0', '喜郎儿', '喜郎儿', '', '', '', '1476606006', '1476606006', '1', '喜郎儿', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('8', '8', '0', '0', '', '1', '1', '0', '0', '戴永红', '戴永红', '', '', '', '1476606405', '1476606025', '1', '戴永红', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('9', '8', '0', '0', '', '1', '1', '0', '0', '金大妈', '金大妈', '', '', '', '1476606052', '1476606052', '1', '金大妈', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('10', '8', '0', '0', '', '1', '1', '0', '0', '崩豆张', '崩豆张', '', '', '', '1476606079', '1476606079', '1', '崩豆张', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('11', '8', '0', '0', '', '1', '1', '0', '0', '一品香', '一品香', '', '', '', '1476606104', '1476606104', '1', '一品香', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('12', '8', '0', '0', '', '1', '1', '0', '0', '大山合', '大山合', '', '', '', '1476606124', '1476606124', '1', '大山合', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('13', '8', '0', '0', '', '1', '1', '0', '0', '粒上皇', '粒上皇', '', '', '', '1476606221', '1476606221', '1', '粒上皇', '粒上皇', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('14', '8', '0', '0', '', '1', '1', '0', '0', '核工记', '核工记', '', '', '', '1476606428', '1476606252', '1', '核工记', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('15', '9', '0', '0', '', '1', '1', '0', '0', '万国码头', '万国码头', '', '', '', '1477709909', '1476607630', '1', '万国码头', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('16', '9', '0', '0', '', '1', '1', '0', '0', '舌间味', '舌间味', '', '', '', '1476607658', '1476607658', '1', '舌间味', '舌间味', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('17', '9', '0', '0', '', '1', '1', '0', '0', '非常味道', '非常味道', '', '', '', '1476607704', '1476607704', '1', '非常味道', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('18', '9', '0', '0', '', '1', '1', '0', '0', '自由自在', '自由自在', '', '', '', '1476607735', '1476607735', '1', '自由自在', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('19', '9', '0', '0', '', '1', '1', '0', '0', '百比佳', '百比佳', '', '', '', '1476607763', '1476607763', '1', '百比佳', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('20', '9', '0', '0', '', '1', '1', '0', '0', '甜蜜小筑', '甜蜜小筑', '', '', '', '1476607780', '1476607780', '1', '甜蜜小筑', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('21', '9', '0', '0', 'h', '1', '1', '0', '0', '优之良品', '优之良品', '', '', '', '1476613946', '1476607802', '1', '优之良品', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('22', '9', '0', '0', 'h', '1', '1', '0', '0', '妮当家', '妮当家', '', '', '', '1476613930', '1476607820', '1', '妮当家', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('23', '9', '0', '0', 'h', '1', '1', '0', '0', '优客龙', '优客龙', '', '', '', '1476613923', '1476607839', '1', '优客龙', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('24', '9', '0', '0', 'h', '1', '1', '0', '0', '莫丽食品', '莫丽食品', '', '', '', '1476613913', '1476607856', '1', '莫丽食品', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('25', '2', '0', '0', 'h', '1', '1', '0', '0', '三只松鼠加盟', '三只松鼠', '', '', '', '1476717188', '1476717177', '1', '三只松鼠', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('26', '13', '0', '0', 'a', '1', '1', '0', '0', '良品铺子加盟', '良品铺子加盟', '', '', '/images/thread/2016/10/17/2c8f54e48e645a5765e5881956cdb2f9.jpg', '1476717548', '1476717517', '1', '良品铺子加盟', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('27', '14', '0', '0', 'c', '1', '1', '0', '0', '老婆大人加盟', '老婆大人加盟', '', '', '/images/thread/2016/10/17/a177898a3976604ba4917550d2e53ec0.jpg', '1476717826', '1476717826', '1', '老婆大人加盟', '老婆大人加盟', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('28', '15', '0', '0', 's', '1', '1', '0', '0', '盐津铺子加盟', '盐津铺子', '', '', '', '1476757203', '1476757054', '1', '盐津铺子加盟', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('29', '17', '0', '0', 's', '1', '1', '0', '0', '百草味加盟', '百草味', '', '', '', '1477709095', '1476758866', '1', '百草味加盟', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('30', '18', '0', '0', 's', '1', '1', '0', '0', '零食多加盟', '零食多', '', '', '', '1479719703', '1476758892', '1', '零食多加盟', 'vbbnvbn', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('31', '3', '0', '0', '', '1', '1', '0', '0', '投资加盟零食店需要满足哪些条件', '投资加盟零食店需要满足哪些条件', '', '', '', '1476769876', '1476769876', '0', '加盟零食店', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('32', '3', '0', '0', '', '1', '1', '0', '0', '投资加盟零食店注意事项有哪些', '投资加盟零食店注意事项有哪些', '', '', '', '1476769933', '1476769933', '0', '投资加盟零食店', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('33', '3', '0', '0', '', '1', '1', '0', '0', '一扫光怎么样？加盟赚钱吗', '一扫光怎么样', '', '', '', '1476770000', '1476770000', '0', '一扫光怎么样', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('34', '3', '0', '0', '', '1', '1', '0', '0', '投资开零食店需要考虑哪些问题', '投资开零食店', '', '', '', '1476770085', '1476770085', '0', '', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('35', '3', '0', '0', '', '1', '1', '0', '0', '开零食店需要考虑哪些问题', '开零食店', '', '', '', '1476770196', '1476770196', '0', '开零食店需要考虑哪些问题', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('36', '3', '0', '0', '', '1', '1', '0', '0', '休闲食品加盟店该如何去经营', '休闲食品加盟店该如何去经营', '', '', '', '1476770295', '1476770295', '0', '休闲食品加盟店经营', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('37', '3', '0', '0', '', '1', '1', '0', '0', '小食品加盟店的经营技巧有哪些', '小食品加盟店的经营技巧有哪些', '', '', '', '1476770407', '1476770407', '0', '小食品加盟店的经营技巧有哪些', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('38', '3', '0', '0', '', '1', '1', '0', '0', '休闲零食加盟店的经营技巧有哪些', '休闲零食加盟店的经营技巧有哪些', '', '', '', '1476770475', '1476770449', '0', '休闲零食加盟店的经营技巧有哪些', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('39', '3', '0', '0', 'c', '1', '1', '0', '0', '休闲零食加盟店该如何经营', '休闲零食加盟店该如何经营', '', '', '', '1476770614', '1476770513', '0', '休闲零食加盟店该如何经营', '三只松鼠加盟费', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('40', '3', '0', '0', 'c,h,p', '1', '1', '0', '0', '休闲零食加盟投资开店如何经营11', '休闲零食加盟投资开店', '', '', '/images/thread/2016/11/21/95598f4f6e92294057239584e1165a93.png', '1484122073', '1476770558', '0', '休闲零食', ' 据市场调查显示：现在休闲零食的产品销售情况看好，“一扫光”就是其中的代表。这个行业的前景引起了许多创业者的重视，因此很多人都来咨询休闲零食加盟投资开店如何经营。那么休闲零食连锁店该怎么经营呢?这是许多投资者比较关注的话题。一扫光休闲零食连锁店    一、特定的消费群     休闲零食连锁店由于休闲零食针对特定的目标消费群，强调休闲零食品牌的个性化，包括产品的风格，休闲', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('41', '2', '0', '0', 'c,f,a', '1', '1', '0', '0', '四只松鼠加盟', '四只松鼠', '', '', '/images/thread/2016/11/22/ababdccc0fe3a108059ba594c941b96e.png', '1484121915', '1479808651', '1', '四只松鼠', '四只松鼠测试内容', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('42', '17', '0', '0', '', '0', '1', '0', '0', '111', '合并报表', '', '', '/images/thread/2016/11/24/f661ad95a857eff16a6d3858c8894b5f.jpg', '1479977734', '1479977734', '0', '合并报表', '', '1', '0', '0', '0', null);
INSERT INTO `archives` VALUES ('43', '17', '0', '0', '', '1', '1', '0', '0', '111', '1111', '', '', '/images/thread/2017/01/11/0390392735f981c75b27aaf020c35096.png', '1484113966', '1484113966', '1', '', '', '1', '0', '0', '0', '2017-01-11 15:28:00');

-- ----------------------------
-- Table structure for articles
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `aid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `body` mediumtext,
  `redirecturl` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`aid`),
  KEY `typeid` (`typeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of articles
-- ----------------------------

-- ----------------------------
-- Table structure for asks
-- ----------------------------
DROP TABLE IF EXISTS `asks`;
CREATE TABLE `asks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `answernum` int(11) DEFAULT NULL,
  `viewnum` int(11) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `description` text,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of asks
-- ----------------------------
INSERT INTO `asks` VALUES ('1', '测试问题', '2016-12-22 17:32:01', '1', '153', null, 'dsds', null);
INSERT INTO `asks` VALUES ('2', '测试问题2', '2016-12-22 17:34:22', '2', '171', null, '测试描述', '192.168.0.77');
INSERT INTO `asks` VALUES ('3', '经济学理论模型在设计函数形式时应该注意哪些问题？', '2016-12-24 17:16:36', '3', '137', null, '<p><span style=\"color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">举个例子，一个生产函数写成</span><img src=\"https://zhihu.com/equation?tex=f%28x%2Cy%2Cz%29%3Dx%5E%5Calpha+y%5E%5Cbeta++z\" alt=\"f(x,y,z)=x^\\alpha y^\\beta  z\" eeimg=\"1\" style=\"max-width: 100%; display: inline-block; margin: 0px 3px; color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\"><span style=\"color: rgb(34, 34, 34); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">不限范围，会不会很古怪或者错误？（α、β在推导时两者之和小于等于1才满足条件，算是模型的一个小推论）。</span></p><p>\r\n\r\n                    </p><div>作者：司马懿<br>链接：https://www.zhihu.com/question/53644635/answer/135967815<br>来源：知乎<br>著作权归作者所有，转载请联系作者获得授权。<br><br><div class=\"zm-editable-content clearfix\">经济学的的函数形式，以及函数性质，刚刚读文献的时候都会觉得很神秘，我也觉得——怎么他们就知道把函数设置成这个样子呢？<br><br>后来多看文献，自己也写了一些，温水煮青蛙被煮熟了，倒也不觉其异。其实主要是就是两点：<br><ul><li>现实中的原因，如果随便代入几个数字进去就有一个荒谬的结果，那是会被人攻击的，所以至少要有一部分是贴合现实，这个函数性质的方方面面，在你所研究的这个问题上“看上去像那么回事”。</li><li>数学上的原因，一般这个称之为技术假设，目的是为了让模型能够被算出来。能算出来解析解当然最好，实在不行也要能描述出几个特性出来。</li></ul><br>就拿你举的例子来说：<img src=\"//zhihu.com/equation?tex=f%28x%2C+y%2C+z%29+%3D+x%5E%5Calpha+y%5E%5Cbeta+z+-+p_1+x+-+p_2+y+-+p_3+z\" alt=\"f(x, y, z) = x^\\alpha y^\\beta z - p_1 x - p_2 y - p_3 z\" eeimg=\"1\"> 来说，如果这是一个利润函数，里面的x y z应该都是某种输入，p是价格，然后f是个净产出。如果你把其中一个参数，比如<img src=\"//zhihu.com/equation?tex=%5Calpha\" alt=\"\\alpha\" eeimg=\"1\"> 设定成大于1的，当然不是不可以，但是这意味着函数是x的凸函数，二阶导数大于0.<img src=\"//zhihu.com/equation?tex=%5Cfrac%7B%5Cpartial%5E2+f%7D%7B%5Cpartial+x%5E2%7D+%3D+%5Calpha+%28%5Calpha+-+1%29+x%5E%7B%5Calpha+-+2%7Dy%5E%7B%5Cbeta%7Dz+%3E0+\" alt=\"\\frac{\\partial^2 f}{\\partial x^2} = \\alpha (\\alpha - 1) x^{\\alpha - 2}y^{\\beta}z >0 \" eeimg=\"1\">。对x的投入越多越好，比如你往一群程序猿中间投一个妹子做鼓励师，效率加成为10%，投两个可能加成是30%，投三个加成为80%，投N个… 什么Windows， OSX都是一天写完加调试加debug^_^ 在很小的规模内或许是可行的，但是这个边际生产率递增，显然和我们在现实中的观察不一致的。<br><br><br>数学上说，一个凸函数，只有极小值，没有极大值，而经济学的收益最大化需要我们求极大值，怎么求呢？这个时候问题就变得很没趣，只要我们不断的投入x，这个函数给我们创造的产出会越来越多，根本不存在一个最优的组合。这个数学上没有问题，就说到无穷远就好了，但是这个问题有什么意义呢？最后得出的结论就是企业应该不断的扩大扩大x的投入，然后生产出无穷多的产品。<br><br>除非x的价格可变，也是买越多，价格越贵，比如说<img src=\"//zhihu.com/equation?tex=f%28x%2C+y%2C+z%29+%3D+x%5E%5Calpha+y%5E%5Cbeta+z+-+p_1+x%5E2+-+p_2+y+-+p_3+z%2C+1%3C%5Calpha%3C2+\" alt=\"f(x, y, z) = x^\\alpha y^\\beta z - p_1 x^2 - p_2 y - p_3 z, 1<\\alpha<2 \" eeimg=\"1\">, 这样的话，函数又凹回去了, 又可以求最大值了。<br><br>有些套路是约定俗成的，当大家都知道怎么回事的时候，用起来几乎不需要解释，不需要刻意的justify，所以越来越多的人会采用相似的设定。比如你例子中的柯布-道格拉斯函数就是一例，审稿人除非有特别的理由，一般不会去质疑你为什么用这个形式。再比如当effort是线性的时候，effort成本往往就设成二次方，这样求导的时候，正好能得出一个漂亮的解析解... 这都是很直观的技术假设。<br><br>再举一个稍微复杂一点的例子：<br><br>委托代理问题经常会要求 Inverse Hazard Rate <img src=\"//zhihu.com/equation?tex=%5Cfrac%7B1-F%28%5Ctheta%29%7D%7Bf%28%5Ctheta%29%7D\" alt=\"\\frac{1-F(\\theta)}{f(\\theta)}\" eeimg=\"1\"> 随着代理人的类型<img src=\"//zhihu.com/equation?tex=%5Ctheta\" alt=\"\\theta\" eeimg=\"1\">单调。开始接触的时候可能会觉得不知所以，但是如果你真的去解那个动态优化问题，就会发现如果这个东西不单调，就无法保证代理人的产出随着代理人类型的不同而单调变化，从而无法保证你求的解是全局最优的。有两种可能，第一你可能需要分情况讨论不单调的时候是什么产出水平（Bunching），这样还算好的，因为只是麻烦了一点，还能得出有意义的结论；第二就是可能会导致整个模型不tractable，得不出一个漂亮的结论来说些什么，那么这个时候建模的意义又何在呢？<br><br><br>一切都是套路，多看看就好了，看得多了，自己也就有自己的套路了。<br><br>还有就是，学点latex写写公式还是挺方便的:-)</div></div>', '192.168.0.77');

-- ----------------------------
-- Table structure for categories
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `reid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `sortrank` smallint(5) unsigned NOT NULL DEFAULT '50',
  `typename` char(30) NOT NULL DEFAULT '',
  `typedir` char(60) NOT NULL DEFAULT '',
  `description` char(150) NOT NULL DEFAULT '',
  `keywords` varchar(60) NOT NULL DEFAULT '',
  `seotitle` varchar(80) NOT NULL DEFAULT '',
  `ishidden` smallint(6) NOT NULL DEFAULT '0',
  `content` text,
  `litpic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reid` (`reid`,`ishidden`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of categories
-- ----------------------------
INSERT INTO `categories` VALUES ('17', '1', '10', '百草味', '/baicaowei/', '百草味', '百草味', '百草味', '0', '', null);
INSERT INTO `categories` VALUES ('18', '1', '3', '零食多', '/lingshiduo/', '零食多', '零食多', '零食多', '0', '', null);
INSERT INTO `categories` VALUES ('19', '1', '3', '悠百佳', '/youbaijia/', '悠百佳', '悠百佳', '悠百佳', '0', '', null);
INSERT INTO `categories` VALUES ('20', '1', '3', '伊味儿', '/yiweier/', '伊味儿', '伊味儿', '伊味儿', '0', '', null);
INSERT INTO `categories` VALUES ('3', '0', '0', '零食行业资讯', '/news/', '零食行业资讯', '零食行业资讯', '零食行业资讯', '0', '<p><img src=\"/images/thread/2016/10/12/63c0f369d230fd9ce7c0456446a8cb1e.jpg\" style=\"width: 298px;\">\r\n\r\n                                                        </p>   ', null);
INSERT INTO `categories` VALUES ('4', '0', '2', '加盟费用', '/jiamengfei/', '零食店加盟费', '零食店加盟费', '零食店加盟费用', '0', '', null);
INSERT INTO `categories` VALUES ('5', '0', '3', '零食行业展会', '/zhanhui/', '零食行业展会', '零食行业展会', '零食行业展会', '0', '', null);
INSERT INTO `categories` VALUES ('6', '0', '4', '问答', '/ask/', '问答', '问答', '问答', '0', '', null);
INSERT INTO `categories` VALUES ('7', '0', '5', '干果店', '/ganguodian/', '干果店', '干果店', '干果店', '0', '', null);
INSERT INTO `categories` VALUES ('8', '0', '6', '炒货店', '/chaohuodian/', '炒货店', '炒货店', '炒货店', '0', '', null);
INSERT INTO `categories` VALUES ('9', '0', '7', '进口零食店', '/jinkoulingshi/', '进口零食店', '进口零食店', '/jinkoulingshi/', '0', '', null);
INSERT INTO `categories` VALUES ('10', '0', '8', '进货批发', '/lingshijinhuo/', '进货批发', '进货批发', '进货批发', '0', '', null);
INSERT INTO `categories` VALUES ('11', '0', '9', '城市大全', '/citys/', '城市大全', '城市大全', '城市大全', '0', '', null);
INSERT INTO `categories` VALUES ('12', '1', '1', '一扫光', '/ysg/', '一扫光休闲食品加盟', '一扫光休闲食品加盟', '一扫光休闲食品加盟', '0', '', null);
INSERT INTO `categories` VALUES ('13', '1', '1', '良品铺子', '/lppz/', '良品铺子加盟', '良品铺子加盟', '良品铺子', '0', '', null);
INSERT INTO `categories` VALUES ('14', '1', '3', '老婆大人', '/lpdrfood/', '老婆大人', '老婆大人', '老婆大人', '0', '', null);
INSERT INTO `categories` VALUES ('15', '1', '4', '盐津铺子', '/yanjinpuzi/', '盐津铺子', '盐津铺子', '盐津铺子', '0', '', null);
INSERT INTO `categories` VALUES ('16', '1', '3', '百味林', '/baiweilin/', '百味林', '百味林', '百味林', '0', '', null);
INSERT INTO `categories` VALUES ('1', '0', '1', '零食店品牌', '/lsbrand/', '零食店品牌栏目描述', '零食店加盟品牌大全,零食店品牌,零食店品牌有哪些', '零食店加盟品牌大全_零食店品牌_零食店品牌有哪些', '0', '测试数据，后面会针对性填写 ', null);
INSERT INTO `categories` VALUES ('2', '1', '2', '三只松鼠', '/3school/', '三只松鼠加盟费', '三只松鼠加盟', '三只松鼠加盟费', '0', '<p><br></p><table class=\"table table-bordered\"><tbody><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr><tr><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td><td><br></td></tr></tbody></table><p>\r\n\r\n                                                        </p>', '/images/thread/2016/10/12/6a42af9fdf17c8c67300373588f7eb60.jpg');

-- ----------------------------
-- Table structure for citycoords
-- ----------------------------
DROP TABLE IF EXISTS `citycoords`;
CREATE TABLE `citycoords` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) DEFAULT NULL,
  `coord` varchar(255) DEFAULT NULL,
  `province` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=401 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of citycoords
-- ----------------------------
INSERT INTO `citycoords` VALUES ('1', '北京', '116.41166896162,39.911321235852', '北京');
INSERT INTO `citycoords` VALUES ('2', '嘉定', '121.25691479954,31.389204912052', '上海');
INSERT INTO `citycoords` VALUES ('3', '浦东', '121.57412978747,31.25228178164', '上海');
INSERT INTO `citycoords` VALUES ('4', '松江', '121.23000001623,30.73100619621', '上海');
INSERT INTO `citycoords` VALUES ('5', '金山', '121.33716072448,30.73100619621', '上海');
INSERT INTO `citycoords` VALUES ('6', '青浦', '121.1195259991,31.157148989023', '上海');
INSERT INTO `citycoords` VALUES ('7', '南汇', '121.57412978747,31.25228178164', '上海');
INSERT INTO `citycoords` VALUES ('8', '奉贤', '121.46490869028,30.9185498375', '上海');
INSERT INTO `citycoords` VALUES ('9', '崇明县', '121.40406482063,31.632721712', '上海');
INSERT INTO `citycoords` VALUES ('10', '天津', '117.19679255289,39.131294086189', '天津');
INSERT INTO `citycoords` VALUES ('11', '和平', '117.20248528607,39.124090932228', '天津');
INSERT INTO `citycoords` VALUES ('12', '河东', '117.23298258035,39.128392957204', '天津');
INSERT INTO `citycoords` VALUES ('13', '河西', '117.22397649093,39.108028060743', '天津');
INSERT INTO `citycoords` VALUES ('14', '南开', '117.17072566705,39.126238973534', '天津');
INSERT INTO `citycoords` VALUES ('15', '河北区', '117.20813702605,39.162486737103', '天津');
INSERT INTO `citycoords` VALUES ('16', '红桥', '117.16988023023,39.180844156545', '天津');
INSERT INTO `citycoords` VALUES ('17', '塘沽', '117.66080546613,39.038514555095', '天津');
INSERT INTO `citycoords` VALUES ('18', '汉沽', '118.21723625424,39.621465728668', '天津');
INSERT INTO `citycoords` VALUES ('19', '大港', '119.67586594786,32.194280389587', '天津');
INSERT INTO `citycoords` VALUES ('20', '东丽', '117.32053344226,39.093496746117', '天津');
INSERT INTO `citycoords` VALUES ('21', '西青', '117.01866704336,39.145732724475', '天津');
INSERT INTO `citycoords` VALUES ('22', '北辰', '117.14122199002,39.231801465729', '天津');
INSERT INTO `citycoords` VALUES ('23', '津南', '117.38899064163,38.995708722049', '天津');
INSERT INTO `citycoords` VALUES ('24', '武清', '117.06459314309,39.382581765361', '天津');
INSERT INTO `citycoords` VALUES ('25', '宝坻', '117.31469562201,39.722643164173', '天津');
INSERT INTO `citycoords` VALUES ('26', '静海县', '116.93188914861,38.941422505144', '天津');
INSERT INTO `citycoords` VALUES ('27', '宁河县', '117.83466260841,39.335166647591', '天津');
INSERT INTO `citycoords` VALUES ('29', '重庆', '106.511556879,29.538849592156', '重庆');
INSERT INTO `citycoords` VALUES ('30', '渝中', '106.56931142024,29.563063074009', '重庆');
INSERT INTO `citycoords` VALUES ('31', '大渡口', '106.4926789515,29.486759391566', '重庆');
INSERT INTO `citycoords` VALUES ('32', '江北', '106.53933647569,29.581400721903', '重庆');
INSERT INTO `citycoords` VALUES ('33', '沙坪坝', '106.4606530399,29.547463863762', '重庆');
INSERT INTO `citycoords` VALUES ('34', '九龙坡', '106.48753969737,29.529320159147', '重庆');
INSERT INTO `citycoords` VALUES ('35', '南岸', '106.56722950833,29.530313500358', '重庆');
INSERT INTO `citycoords` VALUES ('36', '北碚', '106.4442716793,29.831745808519', '重庆');
INSERT INTO `citycoords` VALUES ('37', '万盛', '106.63268194144,30.451431017733', '重庆');
INSERT INTO `citycoords` VALUES ('38', '双桥', '117.94560302901,40.982368495365', '重庆');
INSERT INTO `citycoords` VALUES ('39', '渝北', '106.51940008462,29.607197251461', '重庆');
INSERT INTO `citycoords` VALUES ('40', '巴南', '106.52595470945,29.387747632777', '重庆');
INSERT INTO `citycoords` VALUES ('41', '万州', '108.38668472431,30.813961453004', '重庆');
INSERT INTO `citycoords` VALUES ('42', '涪陵', '107.40131537821,29.709960774749', '重庆');
INSERT INTO `citycoords` VALUES ('43', '黔江', '108.78917320757,29.533226637818', '重庆');
INSERT INTO `citycoords` VALUES ('44', '永川', '105.90129017319,29.354439044441', '重庆');
INSERT INTO `citycoords` VALUES ('45', '合川', '106.27213344738,29.996685130147', '重庆');
INSERT INTO `citycoords` VALUES ('46', '江津', '106.25974467451,29.289088408767', '重庆');
INSERT INTO `citycoords` VALUES ('47', '南川', '107.10473568973,29.162326290736', '重庆');
INSERT INTO `citycoords` VALUES ('48', '长寿区', '107.08136185011,29.83958774506', '重庆');
INSERT INTO `citycoords` VALUES ('49', '綦江区', '106.65790325808,29.034111716622', '重庆');
INSERT INTO `citycoords` VALUES ('50', '潼南区', '105.84822061688,30.195867453402', '重庆');
INSERT INTO `citycoords` VALUES ('51', '荣昌区', '105.6004826536,29.409929611671', '重庆');
INSERT INTO `citycoords` VALUES ('52', '璧山区', '106.23761765281,29.599557735555', '重庆');
INSERT INTO `citycoords` VALUES ('53', '大足区', '105.7217300602,29.706806518171', '重庆');
INSERT INTO `citycoords` VALUES ('54', '铜梁区', '106.06140742528,29.846021810505', '重庆');
INSERT INTO `citycoords` VALUES ('55', '梁平县', '107.80656870571,30.678003545444', '重庆');
INSERT INTO `citycoords` VALUES ('56', '城口县', '108.67151352654,31.951983219422', '重庆');
INSERT INTO `citycoords` VALUES ('57', '潜江', '112.90333266489,30.4273338235', '湖北');
INSERT INTO `citycoords` VALUES ('58', '垫江县', '107.35525647719,30.335716311292', '重庆');
INSERT INTO `citycoords` VALUES ('59', '武隆县', '107.76298195951,29.330080968424', '重庆');
INSERT INTO `citycoords` VALUES ('60', '丰都县', '107.73895880971,29.872463414478', '重庆');
INSERT INTO `citycoords` VALUES ('61', '奉节县', '109.47225461497,31.026038066872', '重庆');
INSERT INTO `citycoords` VALUES ('62', '开县', '108.41988374677,31.173422994176', '重庆');
INSERT INTO `citycoords` VALUES ('63', '云阳县', '108.70414536092,30.936651482324', '重庆');
INSERT INTO `citycoords` VALUES ('64', '忠县', '108.04406412616,30.297413953641', '重庆');
INSERT INTO `citycoords` VALUES ('65', '巫溪县', '109.63548342884,31.402303084324', '重庆');
INSERT INTO `citycoords` VALUES ('66', '巫山县', '109.88547492925,31.080659988232', '重庆');
INSERT INTO `citycoords` VALUES ('67', '石柱县', '108.11886546208,30.004827911068', '重庆');
INSERT INTO `citycoords` VALUES ('68', '秀山县', '109.00257132572,28.450672553085', '重庆');
INSERT INTO `citycoords` VALUES ('69', '酉阳县', '108.77378864406,28.845576699102', '重庆');
INSERT INTO `citycoords` VALUES ('70', '彭水县', '108.17312978333,29.299612166466', '重庆');
INSERT INTO `citycoords` VALUES ('71', '广州', '113.28705168859,23.131512777536', '广东');
INSERT INTO `citycoords` VALUES ('72', '深圳', '114.09244690704,22.552926436623', '广东');
INSERT INTO `citycoords` VALUES ('73', '珠海', '113.56051876786,22.230912126276', '广东');
INSERT INTO `citycoords` VALUES ('74', '汕头', '116.71500975346,23.376698792595', '广东');
INSERT INTO `citycoords` VALUES ('75', '韶关', '113.59808866093,24.807038780728', '广东');
INSERT INTO `citycoords` VALUES ('76', '河源', '114.70425880609,23.752398984835', '广东');
INSERT INTO `citycoords` VALUES ('77', '梅州', '116.12412903198,24.30490134416', '广东');
INSERT INTO `citycoords` VALUES ('78', '惠州', '114.41917937807,23.085090704545', '广东');
INSERT INTO `citycoords` VALUES ('79', '汕尾', '115.37076225557,22.78024650453', '广东');
INSERT INTO `citycoords` VALUES ('80', '东莞', '113.75271627894,23.052495972375', '广东');
INSERT INTO `citycoords` VALUES ('81', '中山', '113.38883464023,22.527314071151', '广东');
INSERT INTO `citycoords` VALUES ('82', '江门', '113.10152501372,22.596107469949', '广东');
INSERT INTO `citycoords` VALUES ('83', '佛山', '113.12923382751,23.034634518814', '广东');
INSERT INTO `citycoords` VALUES ('84', '阳江', '111.98157547077,21.865461463397', '广东');
INSERT INTO `citycoords` VALUES ('85', '湛江', '110.37151059561,21.2808165495', '广东');
INSERT INTO `citycoords` VALUES ('86', '茂名', '110.92575844379,21.665597452322', '广东');
INSERT INTO `citycoords` VALUES ('87', '肇庆', '112.47904725969,23.05750376775', '广东');
INSERT INTO `citycoords` VALUES ('88', '清远', '113.05767869149,23.691307148792', '广东');
INSERT INTO `citycoords` VALUES ('89', '潮州', '116.6387534836,23.668026456743', '广东');
INSERT INTO `citycoords` VALUES ('90', '揭阳', '116.36230255369,23.549543622724', '广东');
INSERT INTO `citycoords` VALUES ('91', '云浮', '112.05097036139,22.935707506556', '广东');
INSERT INTO `citycoords` VALUES ('92', '福州市', '119.3127394733,26.081376190711', '福建');
INSERT INTO `citycoords` VALUES ('93', '厦门', '118.11673306444,24.496472998623', '福建');
INSERT INTO `citycoords` VALUES ('94', '三明', '117.64150892421,26.271349616545', '福建');
INSERT INTO `citycoords` VALUES ('95', '莆田', '119.0140618473,25.436963634613', '福建');
INSERT INTO `citycoords` VALUES ('96', '泉州', '118.59591299429,24.914862889795', '福建');
INSERT INTO `citycoords` VALUES ('97', '漳州', '117.66839676247,24.516549662212', '福建');
INSERT INTO `citycoords` VALUES ('98', '南平', '118.18492032662,26.641778946145', '福建');
INSERT INTO `citycoords` VALUES ('99', '龙岩', '117.03628828733,25.09760847424', '福建');
INSERT INTO `citycoords` VALUES ('100', '宁德', '119.53352596466,26.66557887702', '福建');
INSERT INTO `citycoords` VALUES ('101', '杭州', '120.16010877214,30.293393811751', '浙江');
INSERT INTO `citycoords` VALUES ('102', '宁波', '121.5562008036,29.874698035446', '浙江');
INSERT INTO `citycoords` VALUES ('103', '温州', '120.67869623967,28.006286220669', '浙江');
INSERT INTO `citycoords` VALUES ('104', '嘉兴', '120.75738144484,30.768640548623', '浙江');
INSERT INTO `citycoords` VALUES ('105', '湖州', '120.10886516778,30.873421796313', '浙江');
INSERT INTO `citycoords` VALUES ('106', '绍兴', '120.58855874715,30.003329661081', '浙江');
INSERT INTO `citycoords` VALUES ('107', '金华', '119.65593945376,29.095840860095', '浙江');
INSERT INTO `citycoords` VALUES ('108', '衢州', '118.87921315911,28.947430817915', '浙江');
INSERT INTO `citycoords` VALUES ('109', '舟山', '122.11346374424,30.021687643136', '浙江');
INSERT INTO `citycoords` VALUES ('110', '台州', '121.43500878271,28.667676447823', '浙江');
INSERT INTO `citycoords` VALUES ('111', '丽水', '119.92834381621,28.457788568404', '浙江');
INSERT INTO `citycoords` VALUES ('112', '南京', '118.77392455713,32.047498250241', '江苏');
INSERT INTO `citycoords` VALUES ('113', '徐州', '117.1914117394,34.26745002876', '江苏');
INSERT INTO `citycoords` VALUES ('114', '连云港', '119.18527726389,34.606220403401', '江苏');
INSERT INTO `citycoords` VALUES ('115', '淮安', '119.02770444014,33.603704868728', '江苏');
INSERT INTO `citycoords` VALUES ('116', '宿迁', '118.28173644858,33.968761103652', '江苏');
INSERT INTO `citycoords` VALUES ('117', '盐城', '120.14646429759,33.383816496174', '江苏');
INSERT INTO `citycoords` VALUES ('118', '扬州', '119.42745413591,32.399318728599', '江苏');
INSERT INTO `citycoords` VALUES ('119', '泰州', '119.92168347424,32.490780650024', '江苏');
INSERT INTO `citycoords` VALUES ('120', '南通', '120.87106392717,32.022308143682', '江苏');
INSERT INTO `citycoords` VALUES ('121', '镇江', '119.45935481138,32.21007394087', '江苏');
INSERT INTO `citycoords` VALUES ('122', '常州', '119.95354589692,31.778411829607', '江苏');
INSERT INTO `citycoords` VALUES ('123', '无锡', '120.30827384759,31.580374006145', '江苏');
INSERT INTO `citycoords` VALUES ('124', '苏州', '120.62601721552,31.305562298291', '江苏');
INSERT INTO `citycoords` VALUES ('125', '济南', '117.00729904719,36.682154187499', '山东');
INSERT INTO `citycoords` VALUES ('126', '青岛', '120.36154831413,36.089325225022', '山东');
INSERT INTO `citycoords` VALUES ('127', '淄博', '118.05414112005,36.820888703897', '山东');
INSERT INTO `citycoords` VALUES ('128', '枣庄', '117.56452620805,34.862215180088', '山东');
INSERT INTO `citycoords` VALUES ('129', '东营', '118.67112744296,37.440809198052', '山东');
INSERT INTO `citycoords` VALUES ('130', '潍坊', '119.11367145048,36.714914801206', '山东');
INSERT INTO `citycoords` VALUES ('131', '烟台', '121.39795632127,37.544988361656', '山东');
INSERT INTO `citycoords` VALUES ('132', '威海', '122.12295826701,37.515446679637', '山东');
INSERT INTO `citycoords` VALUES ('133', '济宁', '116.59385450637,35.42107327788', '山东');
INSERT INTO `citycoords` VALUES ('134', '日照', '119.467830196,35.434237000332', '山东');
INSERT INTO `citycoords` VALUES ('135', '德州', '116.31392361696,37.460018978053', '山东');
INSERT INTO `citycoords` VALUES ('136', '临沂', '118.33286633381,35.071621455747', '山东');
INSERT INTO `citycoords` VALUES ('137', '聊城', '115.98696120518,36.461659421576', '山东');
INSERT INTO `citycoords` VALUES ('138', '滨州', '118.02358223148,37.389190267325', '山东');
INSERT INTO `citycoords` VALUES ('139', '沈阳', '123.43572121395,41.802444901204', '辽宁');
INSERT INTO `citycoords` VALUES ('140', '沈阳市', '123.43572121395,41.802444901204', '辽宁');
INSERT INTO `citycoords` VALUES ('141', '鞍山', '123.00199786753,41.116982012478', '辽宁');
INSERT INTO `citycoords` VALUES ('142', '抚顺', '123.92766439526,41.88178882297', '辽宁');
INSERT INTO `citycoords` VALUES ('143', '本溪', '123.77713922108,41.303587649329', '辽宁');
INSERT INTO `citycoords` VALUES ('144', '丹东', '124.38967379706,40.129930070137', '辽宁');
INSERT INTO `citycoords` VALUES ('145', '锦州', '121.14234627663,41.124910146563', '辽宁');
INSERT INTO `citycoords` VALUES ('146', '葫芦岛', '120.86279827276,40.761805372516', '辽宁');
INSERT INTO `citycoords` VALUES ('147', '营口', '122.24172696757,40.673169923917', '辽宁');
INSERT INTO `citycoords` VALUES ('148', '盘锦', '122.07605106682,41.130487085247', '辽宁');
INSERT INTO `citycoords` VALUES ('149', '阜新', '121.65548178037,42.0177789937', '辽宁');
INSERT INTO `citycoords` VALUES ('150', '辽阳', '123.18813242476,41.275030276048', '辽宁');
INSERT INTO `citycoords` VALUES ('151', '铁岭', '123.85066125131,42.29695031825', '辽宁');
INSERT INTO `citycoords` VALUES ('152', '朝阳区', '120.45767549135,41.582782413923', '辽宁');
INSERT INTO `citycoords` VALUES ('153', '南昌', '115.89863778631,28.682531197463', '江西');
INSERT INTO `citycoords` VALUES ('154', '景德镇', '117.22115162682,29.29864893322', '江西');
INSERT INTO `citycoords` VALUES ('155', '萍乡', '113.85869665244,27.628989441898', '江西');
INSERT INTO `citycoords` VALUES ('156', '新余', '114.93730894615,27.816845316193', '江西');
INSERT INTO `citycoords` VALUES ('157', '九江', '115.99937140145,29.717758514434', '江西');
INSERT INTO `citycoords` VALUES ('158', '鹰潭', '117.04037038837,28.244572173043', '江西');
INSERT INTO `citycoords` VALUES ('159', '赣州', '114.94674614016,25.857147721897', '江西');
INSERT INTO `citycoords` VALUES ('160', '吉安', '114.99285045271,27.117761167284', '江西');
INSERT INTO `citycoords` VALUES ('161', '宜春', '114.3976223835,27.810275084955', '江西');
INSERT INTO `citycoords` VALUES ('162', '抚州', '116.36491952769,27.989654509424', '江西');
INSERT INTO `citycoords` VALUES ('163', '上饶', '117.9776173438,28.450716021318', '江西');
INSERT INTO `citycoords` VALUES ('164', '成都', '104.07221517047,30.665531299497', '四川');
INSERT INTO `citycoords` VALUES ('165', '自贡', '104.77986594135,29.359000254523', '四川');
INSERT INTO `citycoords` VALUES ('166', '攀枝花', '101.72255589603,26.586241733587', '四川');
INSERT INTO `citycoords` VALUES ('167', '泸州', '105.44986229289,28.895023819883', '四川');
INSERT INTO `citycoords` VALUES ('168', '德阳', '104.40506912131,31.134306776069', '四川');
INSERT INTO `citycoords` VALUES ('169', '绵阳', '104.74818585813,31.470206451243', '四川');
INSERT INTO `citycoords` VALUES ('170', '广元', '105.83619312865,32.439944672936', '四川');
INSERT INTO `citycoords` VALUES ('171', '遂宁', '105.57783957034,30.519338458085', '四川');
INSERT INTO `citycoords` VALUES ('172', '内江', '105.07271624042,29.59277898122', '四川');
INSERT INTO `citycoords` VALUES ('173', '乐山', '103.76779817096,29.587885903425', '四川');
INSERT INTO `citycoords` VALUES ('174', '南充', '106.08937195469,30.801590390325', '四川');
INSERT INTO `citycoords` VALUES ('175', '宜宾', '104.63722769792,28.766462715512', '四川');
INSERT INTO `citycoords` VALUES ('176', '广安', '106.63992072084,30.46214813929', '四川');
INSERT INTO `citycoords` VALUES ('177', '达州', '107.50871109884,31.215679728444', '四川');
INSERT INTO `citycoords` VALUES ('178', '巴中', '106.76024331559,31.864567688936', '四川');
INSERT INTO `citycoords` VALUES ('179', '雅安', '103.00756760375,29.993549946406', '四川');
INSERT INTO `citycoords` VALUES ('180', '眉山', '103.83830645346,30.0542930892', '四川');
INSERT INTO `citycoords` VALUES ('181', '资阳', '104.64832630635,30.128523989556', '四川');
INSERT INTO `citycoords` VALUES ('182', '阿坝州', '102.2278046754,31.905958846665', '四川');
INSERT INTO `citycoords` VALUES ('183', '甘孜州', '101.97035170183,30.056568300874', '四川');
INSERT INTO `citycoords` VALUES ('184', '凉山州', '102.2652088233,27.892936891217', '四川');
INSERT INTO `citycoords` VALUES ('185', '西安', '108.95443463155,34.269424644794', '陕西');
INSERT INTO `citycoords` VALUES ('186', '铜川', '108.98604937707,34.922748173711', '陕西');
INSERT INTO `citycoords` VALUES ('187', '宝鸡', '107.15130470747,34.375544942105', '陕西');
INSERT INTO `citycoords` VALUES ('188', '咸阳', '108.711555066,34.33967489192', '陕西');
INSERT INTO `citycoords` VALUES ('189', '渭南', '109.50948693704,34.505057423965', '陕西');
INSERT INTO `citycoords` VALUES ('190', '延安', '109.49740089555,36.602246708058', '陕西');
INSERT INTO `citycoords` VALUES ('191', '汉中', '107.03502061275,33.083928017284', '陕西');
INSERT INTO `citycoords` VALUES ('192', '榆林', '109.74782022414,38.295835763878', '陕西');
INSERT INTO `citycoords` VALUES ('193', '安康', '109.03587005065,32.696013516265', '陕西');
INSERT INTO `citycoords` VALUES ('194', '商洛地区', '109.94624119939,33.874494143468', '陕西');
INSERT INTO `citycoords` VALUES ('195', '武汉', '114.30514637941,30.59000828915', '湖北');
INSERT INTO `citycoords` VALUES ('196', '黄石', '115.08344270448,30.226410728572', '湖北');
INSERT INTO `citycoords` VALUES ('197', '襄樊', '112.15074630351,32.048099175129', '湖北');
INSERT INTO `citycoords` VALUES ('198', '十堰', '110.79441413299,32.652946160892', '湖北');
INSERT INTO `citycoords` VALUES ('199', '荆州', '112.24464751882,30.332712824979', '湖北');
INSERT INTO `citycoords` VALUES ('200', '宜昌', '111.29740650405,30.708336601224', '湖北');
INSERT INTO `citycoords` VALUES ('201', '荆门', '112.21064926729,31.04174344503', '湖北');
INSERT INTO `citycoords` VALUES ('202', '鄂州', '114.89661216894,30.402396176402', '湖北');
INSERT INTO `citycoords` VALUES ('203', '孝感', '113.93321108502,30.932155121681', '湖北');
INSERT INTO `citycoords` VALUES ('204', '黄冈', '114.88588781838,30.453544626692', '湖北');
INSERT INTO `citycoords` VALUES ('205', '咸宁', '114.33545683358,29.83877626761', '湖北');
INSERT INTO `citycoords` VALUES ('206', '随州', '113.38027112469,31.723568717022', '湖北');
INSERT INTO `citycoords` VALUES ('207', '仙桃', '113.460563548,30.370629776762', '湖北');
INSERT INTO `citycoords` VALUES ('208', '天门', '113.17228220002,30.659386483833', '湖北');
INSERT INTO `citycoords` VALUES ('209', '神农架', '114.30514637941,30.59000828915', '湖北');
INSERT INTO `citycoords` VALUES ('210', '恩施州', '109.49357748736,30.288861947941', '湖北');
INSERT INTO `citycoords` VALUES ('211', '河南省', '113.67187273655,34.764053386228', '河南');
INSERT INTO `citycoords` VALUES ('212', '郑州', '113.67187273655,34.764053386228', '河南');
INSERT INTO `citycoords` VALUES ('213', '开封', '114.34788417187,34.803242595104', '河南');
INSERT INTO `citycoords` VALUES ('214', '洛阳', '112.44085650984,34.669358695767', '河南');
INSERT INTO `citycoords` VALUES ('215', '平顶山', '113.31421764971,33.741285640724', '河南');
INSERT INTO `citycoords` VALUES ('216', '焦作', '113.24481090404,35.244839176852', '河南');
INSERT INTO `citycoords` VALUES ('217', '鹤壁', '114.30203417678,35.753901387681', '河南');
INSERT INTO `citycoords` VALUES ('218', '新乡', '113.81278123421,35.195772007353', '河南');
INSERT INTO `citycoords` VALUES ('219', '安阳', '115.07499775511,38.947934918994', '河南');
INSERT INTO `citycoords` VALUES ('220', '濮阳', '115.04785319866,35.774084615384', '河南');
INSERT INTO `citycoords` VALUES ('221', '许昌', '113.83265900987,34.028631712537', '河南');
INSERT INTO `citycoords` VALUES ('222', '漯河', '114.03286786038,33.58191362541', '河南');
INSERT INTO `citycoords` VALUES ('223', '三门峡', '111.20065847335,34.783083725285', '河南');
INSERT INTO `citycoords` VALUES ('224', '南阳', '112.54736152465,33.005263364597', '河南');
INSERT INTO `citycoords` VALUES ('225', '商丘', '115.65699136684,34.443062150647', '河南');
INSERT INTO `citycoords` VALUES ('226', '信阳', '114.08157697667,32.129029263999', '河南');
INSERT INTO `citycoords` VALUES ('227', '周口', '114.65625420936,33.626068249287', '河南');
INSERT INTO `citycoords` VALUES ('228', '驻马店', '114.03119050985,32.986255340601', '河南');
INSERT INTO `citycoords` VALUES ('229', '济源', '112.59655949352,35.096379988691', '河南');
INSERT INTO `citycoords` VALUES ('230', '石家庄', '114.5089254898,38.051608835786', '河北');
INSERT INTO `citycoords` VALUES ('231', '唐山', '118.18187716073,39.641217900105', '河北');
INSERT INTO `citycoords` VALUES ('232', '邯郸', '114.49710332568,36.618568756906', '河北');
INSERT INTO `citycoords` VALUES ('233', '邢台', '114.51533228467,37.074216104221', '河北');
INSERT INTO `citycoords` VALUES ('234', '保定', '115.48888874177,38.873444709315', '河北');
INSERT INTO `citycoords` VALUES ('235', '张家口', '114.89068737037,40.817673031822', '河北');
INSERT INTO `citycoords` VALUES ('236', '承德', '117.94560302901,40.982368495365', '河北');
INSERT INTO `citycoords` VALUES ('237', '沧州', '116.86393523591,38.316720707176', '河北');
INSERT INTO `citycoords` VALUES ('238', '廊坊', '116.71106651233,39.529590076546', '河北');
INSERT INTO `citycoords` VALUES ('239', '衡水', '115.67241372831,37.741355359844', '河北');
INSERT INTO `citycoords` VALUES ('240', '太原', '112.55565490751,37.863300531909', '山西');
INSERT INTO `citycoords` VALUES ('241', '阳泉', '113.58989273161,37.866850876084', '山西');
INSERT INTO `citycoords` VALUES ('242', '长治', '113.12012788339,36.196852260925', '山西');
INSERT INTO `citycoords` VALUES ('243', '晋城', '112.85785096152,35.503245642445', '山西');
INSERT INTO `citycoords` VALUES ('244', '朔州', '112.43975816953,39.337571697591', '山西');
INSERT INTO `citycoords` VALUES ('245', '忻州', '112.74015984703,38.423376142676', '山西');
INSERT INTO `citycoords` VALUES ('246', '临汾', '111.52450075829,36.090006454533', '山西');
INSERT INTO `citycoords` VALUES ('247', '运城', '111.0103422205,35.029099158496', '山西');
INSERT INTO `citycoords` VALUES ('248', '吕梁地区', '111.14073755786,37.530601658341', '山西');
INSERT INTO `citycoords` VALUES ('249', '内蒙古', '111.67741776937,40.824032749691', '内蒙古');
INSERT INTO `citycoords` VALUES ('250', '呼和浩特', '111.67741776937,40.824032749691', '内蒙古');
INSERT INTO `citycoords` VALUES ('251', '包头', '109.84695416309,40.663991863789', '内蒙古');
INSERT INTO `citycoords` VALUES ('252', '乌海', '106.8320222415,39.679802215414', '内蒙古');
INSERT INTO `citycoords` VALUES ('253', '赤峰', '118.96336433979,42.281200009305', '内蒙古');
INSERT INTO `citycoords` VALUES ('254', '通辽', '122.26954252772,43.623661561159', '内蒙古');
INSERT INTO `citycoords` VALUES ('255', '鄂尔多斯', '109.99687304336,39.822891424845', '内蒙古');
INSERT INTO `citycoords` VALUES ('256', '乌兰察布', '113.12112342561,41.039878273691', '内蒙古');
INSERT INTO `citycoords` VALUES ('257', '锡林郭勒', '116.09763124532,43.949715455416', '内蒙古');
INSERT INTO `citycoords` VALUES ('258', '呼伦贝尔', '119.76453733603,49.221695096299', '内蒙古');
INSERT INTO `citycoords` VALUES ('259', '巴彦淖尔', '107.42337008663,40.76359869045', '内蒙古');
INSERT INTO `citycoords` VALUES ('260', '阿拉善盟', '105.71281461533,38.851047639478', '内蒙古');
INSERT INTO `citycoords` VALUES ('261', '兴安盟', '122.07681868183,46.082259492727', '内蒙古');
INSERT INTO `citycoords` VALUES ('262', '长春', '125.33107301537,43.892575662727', '吉林');
INSERT INTO `citycoords` VALUES ('263', '通化', '125.94310707356,41.726798883093', '吉林');
INSERT INTO `citycoords` VALUES ('264', '白山', '126.43445388811,41.948156411157', '吉林');
INSERT INTO `citycoords` VALUES ('265', '松原', '124.83006181286,45.124366378656', '吉林');
INSERT INTO `citycoords` VALUES ('266', '白城', '122.84768716641,45.624866432314', '吉林');
INSERT INTO `citycoords` VALUES ('267', '延边州', '129.51974591459,42.910756050716', '吉林');
INSERT INTO `citycoords` VALUES ('268', '哈尔滨', '126.6490649321,45.762741632477', '黑龙江');
INSERT INTO `citycoords` VALUES ('269', '齐齐哈尔', '123.96427278809,47.348447886587', '黑龙江');
INSERT INTO `citycoords` VALUES ('270', '鹤岗', '130.28407512293,47.337849517815', '黑龙江');
INSERT INTO `citycoords` VALUES ('271', '双鸭山', '131.16364671887,46.649823244941', '黑龙江');
INSERT INTO `citycoords` VALUES ('272', '鸡西', '130.98259983627,45.305660784668', '黑龙江');
INSERT INTO `citycoords` VALUES ('273', '大庆', '125.11934564333,46.596444813733', '黑龙江');
INSERT INTO `citycoords` VALUES ('274', '伊春', '128.90580548926,47.730970104228', '黑龙江');
INSERT INTO `citycoords` VALUES ('275', '牡丹江', '129.62502894092,44.589179446671', '黑龙江');
INSERT INTO `citycoords` VALUES ('276', '佳木斯', '130.36822241605,46.815384505681', '黑龙江');
INSERT INTO `citycoords` VALUES ('277', '七台河', '131.02204779224,45.777383101272', '黑龙江');
INSERT INTO `citycoords` VALUES ('278', '黑河', '127.50565494833,50.255194671516', '黑龙江');
INSERT INTO `citycoords` VALUES ('279', '绥化', '126.99943453516,46.64333037435', '黑龙江');
INSERT INTO `citycoords` VALUES ('280', '大兴安岭', '124.71805074145,52.34123770458', '黑龙江');
INSERT INTO `citycoords` VALUES ('281', '合肥', '117.28960211675,31.866968632333', '安徽');
INSERT INTO `citycoords` VALUES ('282', '芜湖', '118.38304864056,31.331971649957', '安徽');
INSERT INTO `citycoords` VALUES ('283', '蚌埠', '117.36963092433,32.946014166671', '安徽');
INSERT INTO `citycoords` VALUES ('284', '淮南', '117.02477723333,32.653778543559', '安徽');
INSERT INTO `citycoords` VALUES ('285', '马鞍山', '118.51450013818,31.695038922385', '安徽');
INSERT INTO `citycoords` VALUES ('286', '淮北', '116.80119767869,33.977624530889', '安徽');
INSERT INTO `citycoords` VALUES ('287', '铜陵', '117.82302334303,30.936049195482', '安徽');
INSERT INTO `citycoords` VALUES ('288', '安庆', '117.0501279368,30.514605309765', '安徽');
INSERT INTO `citycoords` VALUES ('289', '滁州', '118.3226841694,32.309980145445', '安徽');
INSERT INTO `citycoords` VALUES ('290', '阜阳', '118.32267914897,32.903321326427', '安徽');
INSERT INTO `citycoords` VALUES ('291', '宿州', '116.99053597392,33.64013340318', '安徽');
INSERT INTO `citycoords` VALUES ('292', '六安', '116.99050888455,31.759122717659', '安徽');
INSERT INTO `citycoords` VALUES ('293', '亳州', '115.78939150485,33.875562299617', '安徽');
INSERT INTO `citycoords` VALUES ('294', '宣城', '118.76453738481,30.951454087608', '安徽');
INSERT INTO `citycoords` VALUES ('295', '池州', '117.49558139366,30.662349748243', '安徽');
INSERT INTO `citycoords` VALUES ('296', '长沙市', '112.98885507192,28.199751984474', '湖南');
INSERT INTO `citycoords` VALUES ('297', '株洲市', '113.15815296345,27.842113106413', '湖南');
INSERT INTO `citycoords` VALUES ('298', '衡阳', '112.61427855332,26.906091947069', '湖南');
INSERT INTO `citycoords` VALUES ('299', '邵阳', '111.47565974607,27.244125105069', '湖南');
INSERT INTO `citycoords` VALUES ('300', '岳阳', '113.13932550781,29.37633657472', '湖南');
INSERT INTO `citycoords` VALUES ('301', '常德', '111.69783909671,29.046247636729', '湖南');
INSERT INTO `citycoords` VALUES ('302', '张家界', '110.48644385116,29.133229012675', '湖南');
INSERT INTO `citycoords` VALUES ('303', '益阳', '112.36157411492,28.57598052454', '湖南');
INSERT INTO `citycoords` VALUES ('304', '郴州', '113.0384887773,25.799897788696', '湖南');
INSERT INTO `citycoords` VALUES ('305', '永州', '111.61446350069,26.440827236805', '湖南');
INSERT INTO `citycoords` VALUES ('306', '怀化', '109.98481352801,27.555750015759', '湖南');
INSERT INTO `citycoords` VALUES ('307', '娄底', '112.0150755741,27.733861068476', '湖南');
INSERT INTO `citycoords` VALUES ('308', '湘西州', '109.74631723717,28.319966341694', '湖南');
INSERT INTO `citycoords` VALUES ('309', '南宁', '108.32655983295,22.829861546188', '广西');
INSERT INTO `citycoords` VALUES ('310', '柳州', '109.41818497096,24.320643257926', '广西');
INSERT INTO `citycoords` VALUES ('311', '桂林', '110.30556389001,25.280391475163', '广西');
INSERT INTO `citycoords` VALUES ('312', '梧州', '111.30416317687,23.480469836124', '广西');
INSERT INTO `citycoords` VALUES ('313', '防城港', '108.35194062351,21.620870181195', '广西');
INSERT INTO `citycoords` VALUES ('314', '钦州', '108.63066336042,21.973226285197', '广西');
INSERT INTO `citycoords` VALUES ('315', '贵港', '109.60868957464,23.099405116278', '广西');
INSERT INTO `citycoords` VALUES ('316', '玉林', '110.16082003049,22.637673083491', '广西');
INSERT INTO `citycoords` VALUES ('317', '南宁地区', '103.80448060235,25.507577469049', '广西');
INSERT INTO `citycoords` VALUES ('318', '贺州地区', '111.55862002992,24.419872116235', '广西');
INSERT INTO `citycoords` VALUES ('319', '河池地区', '108.06865806353,24.701571531979', '广西');
INSERT INTO `citycoords` VALUES ('320', '海南省', '110.33773778584,20.037673128654', '海南');
INSERT INTO `citycoords` VALUES ('321', '海口', '110.33773778584,20.037673128654', '海南');
INSERT INTO `citycoords` VALUES ('322', '三亚', '109.51482759279,18.253574113295', '海南');
INSERT INTO `citycoords` VALUES ('323', '五指山', '109.52320238202,18.782709306422', '海南');
INSERT INTO `citycoords` VALUES ('324', '琼海', '110.47334931015,19.25170357093', '海南');
INSERT INTO `citycoords` VALUES ('325', '儋州', '109.58322902151,19.523693998268', '海南');
INSERT INTO `citycoords` VALUES ('326', '琼山', '110.36124648539,20.006810325225', '海南');
INSERT INTO `citycoords` VALUES ('327', '万宁', '110.39523224258,18.802488257828', '海南');
INSERT INTO `citycoords` VALUES ('328', '东方', '108.66035828545,19.107674302447', '海南');
INSERT INTO `citycoords` VALUES ('329', '定安县', '110.35579334368,19.690672816682', '海南');
INSERT INTO `citycoords` VALUES ('330', '屯昌县', '110.10934883747,19.36859287614', '海南');
INSERT INTO `citycoords` VALUES ('331', '临高县', '109.69413173976,19.914593637957', '海南');
INSERT INTO `citycoords` VALUES ('332', '白沙县', '109.45907935156,19.230847712121', '海南');
INSERT INTO `citycoords` VALUES ('333', '昌江县', '109.05984091371,19.267023949512', '海南');
INSERT INTO `citycoords` VALUES ('334', '乐东县', '109.18194973216,18.753675491881', '海南');
INSERT INTO `citycoords` VALUES ('335', '陵水县', '110.04368012613,18.511336814701', '海南');
INSERT INTO `citycoords` VALUES ('336', '琼中县', '109.84651019882,19.041402813968', '海南');
INSERT INTO `citycoords` VALUES ('337', '昆明', '102.71866384951,25.04688793727', '云南');
INSERT INTO `citycoords` VALUES ('338', '曲靖', '103.8042743976,25.507865037718', '云南');
INSERT INTO `citycoords` VALUES ('339', '玉溪', '102.55046920692,24.356156569452', '云南');
INSERT INTO `citycoords` VALUES ('340', '保山', '99.173708169586,25.11757341665', '云南');
INSERT INTO `citycoords` VALUES ('341', '昭通', '103.72372819906,27.342880456368', '云南');
INSERT INTO `citycoords` VALUES ('342', '思茅地区', '100.97977372023,22.782305783184', '云南');
INSERT INTO `citycoords` VALUES ('343', '临沧地区', '100.09340661233,23.892848068053', '云南');
INSERT INTO `citycoords` VALUES ('344', '丽江地区', '100.23952995802,26.878058491908', '云南');
INSERT INTO `citycoords` VALUES ('345', '文山州', '104.25051311707,23.375410158173', '云南');
INSERT INTO `citycoords` VALUES ('346', '红河州', '102.42776148486,23.374878908785', '云南');
INSERT INTO `citycoords` VALUES ('347', '西双版纳', '100.8043933493,22.00802812795', '云南');
INSERT INTO `citycoords` VALUES ('348', '楚雄州', '101.5525098114,25.048046293352', '云南');
INSERT INTO `citycoords` VALUES ('349', '大理州', '100.23217211419,25.595521532122', '云南');
INSERT INTO `citycoords` VALUES ('350', '德宏州', '98.584920152182,24.44239466126', '云南');
INSERT INTO `citycoords` VALUES ('351', '迪庆州', '99.712891376422,27.83307670057', '云南');
INSERT INTO `citycoords` VALUES ('352', '贵阳', '106.71999412288,26.584284440819', '贵州');
INSERT INTO `citycoords` VALUES ('353', '安顺', '105.93866210414,26.251575681851', '贵州');
INSERT INTO `citycoords` VALUES ('354', '铜仁地区', '109.19797417304,27.724641613824', '贵州');
INSERT INTO `citycoords` VALUES ('355', '毕节地区', '105.29156723484,27.307469083711', '贵州');
INSERT INTO `citycoords` VALUES ('356', '黔西南州', '106.04486531802,27.030744847959', '贵州');
INSERT INTO `citycoords` VALUES ('357', '黔东南州', '107.98395214498,26.589473909513', '贵州');
INSERT INTO `citycoords` VALUES ('358', '拉萨', '91.138808327398,29.666114449856', '西藏');
INSERT INTO `citycoords` VALUES ('359', '那曲地区', '92.066682689181,31.48214559282', '西藏');
INSERT INTO `citycoords` VALUES ('360', '昌都地区', '97.184915100189,31.143000841499', '西藏');
INSERT INTO `citycoords` VALUES ('361', '山南地区', '91.773026693717,29.241968668335', '西藏');
INSERT INTO `citycoords` VALUES ('362', '日喀则', '88.891657522066,29.273448166042', '西藏');
INSERT INTO `citycoords` VALUES ('363', '阿里地区', '80.112078206357,32.508948778362', '西藏');
INSERT INTO `citycoords` VALUES ('364', '林芝地区', '94.368916875451,29.660527608141', '西藏');
INSERT INTO `citycoords` VALUES ('365', '兰州', '103.83002111898,36.064144796986', '甘肃');
INSERT INTO `citycoords` VALUES ('366', '金昌', '102.19448926164,38.519953123427', '甘肃');
INSERT INTO `citycoords` VALUES ('367', '白银', '104.1800185,36.551915561323', '甘肃');
INSERT INTO `citycoords` VALUES ('368', '天水', '105.7314134781,34.584840505082', '甘肃');
INSERT INTO `citycoords` VALUES ('369', '嘉峪关', '98.283681609783,39.79281938705', '甘肃');
INSERT INTO `citycoords` VALUES ('370', '武威', '102.64123408012,37.935924502109', '甘肃');
INSERT INTO `citycoords` VALUES ('371', '定西地区', '104.63271699472,35.58581463737', '甘肃');
INSERT INTO `citycoords` VALUES ('372', '平凉地区', '106.69110621096,35.549105320326', '甘肃');
INSERT INTO `citycoords` VALUES ('373', '庆阳地区', '107.64474866509,35.740534596941', '甘肃');
INSERT INTO `citycoords` VALUES ('374', '陇南地区', '104.93598608722,33.394337668273', '甘肃');
INSERT INTO `citycoords` VALUES ('375', '张掖地区', '100.46190126773,38.93910635969', '甘肃');
INSERT INTO `citycoords` VALUES ('376', '酒泉地区', '98.517207993543,39.750290992399', '甘肃');
INSERT INTO `citycoords` VALUES ('377', '甘南州', '102.91759280767,34.992094068711', '甘肃');
INSERT INTO `citycoords` VALUES ('378', '临夏州', '103.21840352545,35.605689893009', '青海');
INSERT INTO `citycoords` VALUES ('379', '银川', '106.28473581467,38.472182736641', '青海');
INSERT INTO `citycoords` VALUES ('380', '石嘴山', '106.38280176647,39.019020675478', '青海');
INSERT INTO `citycoords` VALUES ('381', '吴忠', '106.20578912274,37.992480309094', '青海');
INSERT INTO `citycoords` VALUES ('382', '固原', '106.29177112457,36.010484868985', '青海');
INSERT INTO `citycoords` VALUES ('383', '西宁', '101.78537238167,36.629350780397', '青海');
INSERT INTO `citycoords` VALUES ('384', '西宁市', '101.78537238167,36.629350780397', '青海');
INSERT INTO `citycoords` VALUES ('385', '海北州', '100.90750075418,36.965600483672', '青海');
INSERT INTO `citycoords` VALUES ('386', '黄南州', '102.02643344221,35.523894406984', '青海');
INSERT INTO `citycoords` VALUES ('387', '海南州', '100.62616992627,36.286058037947', '青海');
INSERT INTO `citycoords` VALUES ('388', '果洛州', '100.24872198767,34.479425822497', '青海');
INSERT INTO `citycoords` VALUES ('389', '玉树州', '97.015107644948,33.009808323221', '青海');
INSERT INTO `citycoords` VALUES ('390', '乌鲁木齐', '87.624143705433,43.798970218285', '新疆');
INSERT INTO `citycoords` VALUES ('391', '克拉玛依', '84.880471302402,45.601831729411', '新疆');
INSERT INTO `citycoords` VALUES ('392', '石河子市', '86.047461663112,44.312151657211', '新疆');
INSERT INTO `citycoords` VALUES ('393', '哈密地区', '93.519675875607,42.839198896222', '新疆');
INSERT INTO `citycoords` VALUES ('394', '喀什地区', '75.995619961172,39.473667760284', '新疆');
INSERT INTO `citycoords` VALUES ('395', '克孜勒苏', '76.179305437319,39.719462608467', '新疆');
INSERT INTO `citycoords` VALUES ('396', '巴音郭楞', '86.157366232036,41.7747848758', '新疆');
INSERT INTO `citycoords` VALUES ('397', '昌吉州', '87.310619797735,44.020311087714', '新疆');
INSERT INTO `citycoords` VALUES ('398', '东城区', '116.42517345852,39.923733804668', '北京');
INSERT INTO `citycoords` VALUES ('400', '上海', '121.47917320781,31.237661728237', '上海');

-- ----------------------------
-- Table structure for flinks
-- ----------------------------
DROP TABLE IF EXISTS `flinks`;
CREATE TABLE `flinks` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sortrank` smallint(6) DEFAULT '0',
  `url` char(60) NOT NULL DEFAULT '',
  `webname` char(30) NOT NULL DEFAULT '',
  `msg` char(200) DEFAULT '',
  `email` char(50) DEFAULT '',
  `logo` char(60) DEFAULT '',
  `dtime` int(10) unsigned NOT NULL DEFAULT '0',
  `typeid` smallint(5) unsigned DEFAULT '0',
  `ischeck` smallint(6) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of flinks
-- ----------------------------
INSERT INTO `flinks` VALUES ('2', '0', 'http://www.ysgfood.com/', '靖江市西贝特食品有限公司', '', '15000554450', '', '1474696041', '0', '1');
INSERT INTO `flinks` VALUES ('3', '0', 'http://www.ysgfood.com/', '靖江市西贝特食品有限公司', '', '15000554450', '', '1474696263', '0', '1');
INSERT INTO `flinks` VALUES ('4', '0', 'http://www.ysgfood.com/', '靖江市西贝特食品有限公司', '', '15000554450', '', '1474696409', '0', '1');
INSERT INTO `flinks` VALUES ('5', '0', 'http://www.ysg.net', '靖江市西贝特食品有限公司', 'ceshi', '15000554450', '', '1474696421', '0', '1');
INSERT INTO `flinks` VALUES ('6', '0', 'http://www.ysgfood.com/', '一扫光', '老谢2', '15000554450', '', '1474699180', '0', '1');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table', '1');
INSERT INTO `migrations` VALUES ('2014_10_12_100000_create_password_resets_table', '1');
INSERT INTO `migrations` VALUES ('2016_09_23_112643_alter_archives_deleted_at', '2');
INSERT INTO `migrations` VALUES ('2016_12_26_180046_create_admins_table', '3');

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of password_resets
-- ----------------------------

-- ----------------------------
-- Table structure for replays
-- ----------------------------
DROP TABLE IF EXISTS `replays`;
CREATE TABLE `replays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `aid` int(11) NOT NULL,
  `contents` varchar(255) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  `ip` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of replays
-- ----------------------------

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `ip` int(255) unsigned zerofill NOT NULL,
  `tel` int(255) unsigned zerofill NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', '梁李良', 'liang569874@163.com', '$2y$10$H2tidXgTcUc5ZSMspBaPuOeeQl9PmfaNbN9bky.dg8Kxqfg/qYiP.', 'IwsH9CMtB2103JBj6xNQvH65hzERL1tioOZkxUSU9InI1jMmfupxKppDVsE4', '2016-09-03 09:24:02', '2016-12-27 16:47:42', '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000', '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000');
INSERT INTO `users` VALUES ('2', '吴彦祖', 'liang56987@163.com', '$2y$10$c7qeskK49dKIqhEzcYzKS.ONfbN.i98lJPbQPaeQWkwCHmpoMwon.', 'yu1C6QGnhJzWZGHqnxCWIw45hJuBGC0wH1dvqjcIatNEjZlKIfQORAzhw1sK', '2016-09-06 07:36:12', '2016-09-07 07:36:26', '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000', '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000');
INSERT INTO `users` VALUES ('3', 'liangliliang', 'liangliliang33@163.com', '$2y$10$X6F0Z.JBcYxHN1hp.epQaOq6oqszj9QmgAwr3R2yZmdeZFRfxyAu6', null, '2016-12-27 14:51:50', '2016-12-27 14:51:50', '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000', '000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000');
