<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsbqclass`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsbqclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `classname` char(30) NOT NULL DEFAULT '',
  PRIMARY KEY (`classid`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsbqclass` values('1','��Ϣ����');");
E_D("replace into `www_92game_net_hdwan_enewsbqclass` values('2','��Ŀ����');");
E_D("replace into `www_92game_net_hdwan_enewsbqclass` values('3','����Ϣ����');");
E_D("replace into `www_92game_net_hdwan_enewsbqclass` values('4','������ǩ');");

@include("../../inc/footer.php");
?>