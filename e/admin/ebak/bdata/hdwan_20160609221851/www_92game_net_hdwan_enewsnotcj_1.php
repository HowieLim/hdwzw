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
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('1','<input type=hidden value=''欢迎使用帝国网站管理系统：www.phome.com''>');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('2','<phome 帝国网站管理系统,phome.com>');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('3','<!--帝国CMS,phome.com-->');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('4','<table style=display:none><tr><td>\r\nEmpire CMS,phome.com\r\n</td></tr></table>');");
E_D("replace into `www_92game_net_hdwan_enewsnotcj` values('5','<div style=display:none>\r\n拥有帝国一切，皆有可能。欢迎访问phome.com\r\n</div>');");

@include("../../inc/footer.php");
?>