<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewswapstyle`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewswapstyle` (
  `styleid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `stylename` varchar(60) NOT NULL DEFAULT '',
  `path` smallint(5) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`styleid`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewswapstyle` values('1','����ģ��','1');");
E_D("replace into `www_92game_net_hdwan_enewswapstyle` values('2','������Ϣģ��','2');");

@include("../../inc/footer.php");
?>