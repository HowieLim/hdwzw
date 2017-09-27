<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsad`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsad` (
  `adid` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `picurl` varchar(255) NOT NULL DEFAULT '',
  `url` text NOT NULL,
  `pic_width` int(10) unsigned NOT NULL DEFAULT '0',
  `pic_height` int(10) unsigned NOT NULL DEFAULT '0',
  `onclick` int(10) unsigned NOT NULL DEFAULT '0',
  `classid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `adtype` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `title` varchar(100) NOT NULL DEFAULT '',
  `target` varchar(10) NOT NULL DEFAULT '',
  `alt` varchar(120) NOT NULL DEFAULT '',
  `starttime` date NOT NULL DEFAULT '0000-00-00',
  `endtime` date NOT NULL DEFAULT '0000-00-00',
  `adsay` varchar(255) NOT NULL DEFAULT '',
  `titlefont` varchar(14) NOT NULL DEFAULT '',
  `titlecolor` varchar(10) NOT NULL DEFAULT '',
  `htmlcode` text NOT NULL,
  `t` tinyint(3) unsigned NOT NULL DEFAULT '0',
  `ylink` tinyint(1) NOT NULL DEFAULT '0',
  `reptext` text NOT NULL,
  PRIMARY KEY (`adid`),
  KEY `classid` (`classid`),
  KEY `t` (`t`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsad` values('1','','','300','300','0','1','1','id_1广告位-300*300','','','2016-01-10','0000-00-00','','','','<div style=\"height:298px;width: 298px;border: 1px dashed red;text-align: center;background-color: #FFF;\"><br><br>id_1广告位-300*300</div>','2','0','');");
E_D("replace into `www_92game_net_hdwan_enewsad` values('2','','','300','300','0','1','1','id_2广告位-300*300','','','2016-01-10','0000-00-00','','','','<div style=\"height:248px;width: 298px;border: 1px dashed red;text-align: center;background-color: #FFF;\"><br><br>id_2广告位-300*250</div>','2','0','');");
E_D("replace into `www_92game_net_hdwan_enewsad` values('3','','','300','300','0','1','1','id_3广告位-300*300','','','2016-01-10','0000-00-00','','','','<div style=\"height:298px;width: 298px;border: 1px dashed red;text-align: center;background-color: #FFF;\"><br><br>id_3广告位-300*300</div>','2','0','');");
E_D("replace into `www_92game_net_hdwan_enewsad` values('4','','','600','90','0','1','1','id_4广告位-1000*90','','','0000-00-00','0000-00-00','','','','<div style=\"height: 88px;width:598px;border: 1px dashed red;text-align: center;background-color: #FFF;\"><br><br>id_4广告位-600*90</div>','2','0','');");

@include("../../inc/footer.php");
?>