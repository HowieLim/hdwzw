<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsbefrom`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsbefrom` (
  `befromid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `sitename` char(60) NOT NULL DEFAULT '',
  `siteurl` char(200) NOT NULL DEFAULT '',
  PRIMARY KEY (`befromid`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('1','����Ƭ','/action/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('2','����Ƭ','/story/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('3','����Ƭ','/suspense/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('4','ϲ��Ƭ','/comedy/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('5','����Ƭ','/love/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('6','ս��Ƭ','/war/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('7','�ƻ�Ƭ','/science/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('8','����Ƭ','/disaster/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('9','�ֲ�Ƭ','/terror/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('10','����Ƭ','/crime/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('11','����','/cartoon/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('12','���Ƭ','/thriller/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('13','���Ƭ','/fantasy-film/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('14','ð��Ƭ','/adventure/');");

@include("../../inc/footer.php");
?>