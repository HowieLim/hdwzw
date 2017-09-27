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
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('1','╢п╫ў╞м','/action/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('2','╛ч╟щ╞м','/story/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('3','╨№╥╔╞м','/suspense/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('4','╧▓╛ч╞м','/comedy/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('5','░о╟щ╞м','/love/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('6','╒╜╒∙╞м','/war/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('7','┐╞╗├╞м','/science/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('8','╘╓─╤╞м','/disaster/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('9','┐╓▓└╞м','/terror/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('10','╖╕╫я╞м','/crime/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('11','╢п┬■','/cartoon/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('12','╛куд╞м','/thriller/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('13','╞ц╗├╞м','/fantasy-film/');");
E_D("replace into `www_92game_net_hdwan_enewsbefrom` values('14','├░╧╒╞м','/adventure/');");

@include("../../inc/footer.php");
?>