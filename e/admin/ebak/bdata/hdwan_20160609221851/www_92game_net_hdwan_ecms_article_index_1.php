<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_ecms_article_index`;");
E_C("CREATE TABLE `www_92game_net_hdwan_ecms_article_index` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `newstime` int(10) unsigned NOT NULL DEFAULT '0',
  `truetime` int(10) unsigned NOT NULL DEFAULT '0',
  `lastdotime` int(10) unsigned NOT NULL DEFAULT '0',
  `havehtml` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `classid` (`classid`),
  KEY `checked` (`checked`),
  KEY `newstime` (`newstime`),
  KEY `truetime` (`truetime`,`id`),
  KEY `havehtml` (`classid`,`truetime`,`havehtml`,`checked`,`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_ecms_article_index` values('1','15','1','1452580405','1452580417','1452580433','1');");
E_D("replace into `www_92game_net_hdwan_ecms_article_index` values('2','16','1','1452580482','1452580502','1465472948','1');");
E_D("replace into `www_92game_net_hdwan_ecms_article_index` values('3','17','1','1452580601','1452580630','1452580630','1');");

@include("../../inc/footer.php");
?>