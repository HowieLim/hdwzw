<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsadminstyle`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsadminstyle` (
  `styleid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `stylename` char(30) NOT NULL DEFAULT '',
  `path` smallint(5) unsigned NOT NULL DEFAULT '0',
  `isdefault` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsadminstyle` values('1','����Ա��̨����','1','1');");
E_D("replace into `www_92game_net_hdwan_enewsadminstyle` values('2','�༭��̨����','2','0');");

@include("../../inc/footer.php");
?>