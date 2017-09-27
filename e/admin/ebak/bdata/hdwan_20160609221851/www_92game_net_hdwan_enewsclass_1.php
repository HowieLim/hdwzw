<?php
@include("../../inc/header.php");

/*
		SoftName : EmpireBak
		Author   : wm_chief
		Copyright: Powered by www.phome.com
*/

E_D("DROP TABLE IF EXISTS `www_92game_net_hdwan_enewsclass`;");
E_C("CREATE TABLE `www_92game_net_hdwan_enewsclass` (
  `classid` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `bclassid` smallint(5) unsigned NOT NULL DEFAULT '0',
  `classname` varchar(50) NOT NULL DEFAULT '',
  `sonclass` text NOT NULL,
  `is_zt` tinyint(1) NOT NULL DEFAULT '0',
  `lencord` smallint(6) NOT NULL DEFAULT '0',
  `link_num` tinyint(4) NOT NULL DEFAULT '0',
  `newstempid` smallint(6) NOT NULL DEFAULT '0',
  `onclick` int(11) NOT NULL DEFAULT '0',
  `listtempid` smallint(6) NOT NULL DEFAULT '0',
  `featherclass` text NOT NULL,
  `islast` tinyint(1) NOT NULL DEFAULT '0',
  `classpath` text NOT NULL,
  `classtype` varchar(10) NOT NULL DEFAULT '',
  `newspath` varchar(20) NOT NULL DEFAULT '',
  `filename` tinyint(1) NOT NULL DEFAULT '0',
  `filetype` varchar(10) NOT NULL DEFAULT '',
  `openpl` tinyint(1) NOT NULL DEFAULT '0',
  `openadd` tinyint(1) NOT NULL DEFAULT '0',
  `newline` int(11) NOT NULL DEFAULT '0',
  `hotline` int(11) NOT NULL DEFAULT '0',
  `goodline` int(11) NOT NULL DEFAULT '0',
  `classurl` varchar(200) NOT NULL DEFAULT '',
  `groupid` smallint(6) NOT NULL DEFAULT '0',
  `myorder` smallint(6) NOT NULL DEFAULT '0',
  `filename_qz` varchar(20) NOT NULL DEFAULT '',
  `hotplline` tinyint(4) NOT NULL DEFAULT '0',
  `modid` smallint(6) NOT NULL DEFAULT '0',
  `checked` tinyint(1) NOT NULL DEFAULT '0',
  `firstline` tinyint(4) NOT NULL DEFAULT '0',
  `bname` varchar(50) NOT NULL DEFAULT '',
  `islist` tinyint(1) NOT NULL DEFAULT '0',
  `searchtempid` smallint(6) NOT NULL DEFAULT '0',
  `tid` smallint(6) NOT NULL DEFAULT '0',
  `tbname` varchar(60) NOT NULL DEFAULT '',
  `maxnum` int(11) NOT NULL DEFAULT '0',
  `checkpl` tinyint(1) NOT NULL DEFAULT '0',
  `down_num` tinyint(4) NOT NULL DEFAULT '0',
  `online_num` tinyint(4) NOT NULL DEFAULT '0',
  `listorder` varchar(50) NOT NULL DEFAULT '',
  `reorder` varchar(50) NOT NULL DEFAULT '',
  `intro` text NOT NULL,
  `classimg` varchar(255) NOT NULL DEFAULT '',
  `jstempid` smallint(6) NOT NULL DEFAULT '0',
  `addinfofen` int(11) NOT NULL DEFAULT '0',
  `listdt` tinyint(1) NOT NULL DEFAULT '0',
  `showclass` tinyint(1) NOT NULL DEFAULT '0',
  `showdt` tinyint(1) NOT NULL DEFAULT '0',
  `checkqadd` tinyint(1) NOT NULL DEFAULT '0',
  `qaddlist` tinyint(1) NOT NULL DEFAULT '0',
  `qaddgroupid` text NOT NULL,
  `qaddshowkey` tinyint(1) NOT NULL DEFAULT '0',
  `adminqinfo` tinyint(1) NOT NULL DEFAULT '0',
  `doctime` smallint(6) NOT NULL DEFAULT '0',
  `classpagekey` varchar(255) NOT NULL DEFAULT '',
  `dtlisttempid` smallint(6) NOT NULL DEFAULT '0',
  `classtempid` smallint(6) NOT NULL DEFAULT '0',
  `nreclass` tinyint(1) NOT NULL DEFAULT '0',
  `nreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `nrejs` tinyint(1) NOT NULL DEFAULT '0',
  `nottobq` tinyint(1) NOT NULL DEFAULT '0',
  `ipath` varchar(255) NOT NULL DEFAULT '',
  `addreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `haddlist` tinyint(4) NOT NULL DEFAULT '0',
  `sametitle` tinyint(1) NOT NULL DEFAULT '0',
  `definfovoteid` smallint(6) NOT NULL DEFAULT '0',
  `wburl` varchar(255) NOT NULL DEFAULT '',
  `qeditchecked` tinyint(1) NOT NULL DEFAULT '0',
  `wapstyleid` smallint(6) NOT NULL DEFAULT '0',
  `repreinfo` tinyint(1) NOT NULL DEFAULT '0',
  `pltempid` smallint(6) NOT NULL DEFAULT '0',
  `cgroupid` text NOT NULL,
  `yhid` smallint(6) NOT NULL DEFAULT '0',
  `wfid` smallint(6) NOT NULL DEFAULT '0',
  `cgtoinfo` tinyint(1) NOT NULL DEFAULT '0',
  `bdinfoid` varchar(25) NOT NULL DEFAULT '',
  `repagenum` smallint(5) unsigned NOT NULL DEFAULT '0',
  `keycid` smallint(6) NOT NULL DEFAULT '0',
  `allinfos` int(10) unsigned NOT NULL DEFAULT '0',
  `infos` int(10) unsigned NOT NULL DEFAULT '0',
  `addtime` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`classid`),
  KEY `bclassid` (`bclassid`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('1','0','动作片','','0','21','10','1','0','1','','1','action','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','动作片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','231','231','1452415807');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('2','0','剧情片','','0','21','10','1','0','1','','1','story','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','剧情片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','609','609','1452578487');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('3','0','悬疑片','','0','21','10','1','0','1','','1','suspense','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','悬疑片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','74','74','1452578516');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('4','0','喜剧片','','0','21','10','1','0','1','','1','comedy','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','喜剧片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','78','78','1452578554');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('5','0','爱情片','','0','21','10','1','0','1','','1','love','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','爱情片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','400','400','1452578582');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('6','0','战争片','','0','21','10','1','0','1','','1','war','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','战争片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','133','133','1452578609');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('7','0','科幻片','','0','21','10','1','0','1','','1','science','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','科幻片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','191','191','1452578630');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('8','0','灾难片','','0','21','10','1','0','1','','1','disaster','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','灾难片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','0','0','1452578656');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('9','0','恐怖片','','0','21','10','1','0','1','','1','terror','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','恐怖片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','247','247','1452578682');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('10','0','犯罪片','','0','21','10','1','0','1','','1','crime','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','犯罪片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','267','267','1452578706');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('11','0','动漫','','0','21','10','1','0','1','','1','cartoon','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','动漫','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','164','164','1452578726');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('12','0','惊悚片','','0','21','10','1','0','1','','1','thriller','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','惊悚片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','205','205','1452578748');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('13','0','奇幻片','','0','21','10','1','0','1','','1','fantasy-film','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','奇幻片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','113','113','1452578773');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('14','0','冒险片','','0','21','10','1','0','1','','1','adventure','.html','','0','.html','0','1','10','10','10','','0','0','','10','1','1','10','冒险片','0','0','1','news','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','1','1','0','0','0','0','bt','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','92','92','1452578790');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('15','0','求片留言','','0','25','10','8','0','7','','1','guestbook','.html','','0','.html','0','1','10','10','10','','0','0','','10','7','1','10','求片留言','0','0','7','article','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','7','1','1','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1452580244');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('16','0','网盘离线秒下教程','','0','25','10','8','0','7','','1','online','.html','','0','.html','0','1','10','10','10','','0','0','','10','7','1','10','网盘离线秒下教程','0','0','7','article','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','7','1','1','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1452580270');");
E_D("replace into `www_92game_net_hdwan_enewsclass` values('17','0','下载说明','','0','25','10','8','0','7','','1','shuoming','.html','','0','.html','0','1','10','10','10','','0','0','','10','7','1','10','下载说明','0','0','7','article','0','0','2','2','id DESC','newstime DESC','','','1','0','0','0','0','0','0','','0','0','0','','7','1','1','0','0','0','','1','0','0','0','','0','0','0','0','','0','0','0','','0','0','1','1','1452580292');");

@include("../../inc/footer.php");
?>