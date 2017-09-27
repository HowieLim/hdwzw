<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsuserlist`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsuserlist` (
  `listid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `listname` varchar(60) NOT NULL DEFAULT '',
  `pagetitle` varchar(120) NOT NULL DEFAULT '',
  `filepath` varchar(120) NOT NULL DEFAULT '',
  `filetype` varchar(12) NOT NULL DEFAULT '',
  `totalsql` text NOT NULL,
  `listsql` text NOT NULL,
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `lencord` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `pagekeywords` varchar(255) NOT NULL DEFAULT '',
  `pagedescription` varchar(255) NOT NULL DEFAULT '',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`listid`),
  KEY `classid` (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsuserlist` values('1','海盗湾首页','海盗湾中文网 | 最新720P、1080P高清电影种子下载网站,海盗湾。','../../','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by id desc','0','23','9','海盗湾为您提供最新的720P、1080P高清电影BT种子下载，下载种子无需注册，欢迎体验。','海盗湾，海盗湾中文网，海盗湾网址，BT天堂，电影天堂，最新720P高清电影，电影种子，快播种子，BT种子，bt资源下载，快播资源BT下载网站，电影BT种子，高清种子，720P种子，1080P种子，高清电影下载','0');");

@include("../../inc/footer.php");
?>