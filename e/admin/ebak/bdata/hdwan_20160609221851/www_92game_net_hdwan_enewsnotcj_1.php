<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsnotcj`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsnotcj` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `word` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('1','<input type=hidden value=''��ӭʹ�õ۹���վ����ϵͳ��www.phome.com''>');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('2','<phome �۹���վ����ϵͳ,phome.com>');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('3','<!--�۹�CMS,phome.com-->');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('4','<table style=display:none><tr><td>\r\nEmpire CMS,phome.com\r\n</td></tr></table>');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('5','<div style=display:none>\r\nӵ�е۹�һ�У����п��ܡ���ӭ����phome.com\r\n</div>');");

@include("../../inc/footer.php");
?>