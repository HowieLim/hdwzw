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
E_D("replace into `www_92game_net_hdwan_enewsuserlist` values('1','��������ҳ','������������ | ����720P��1080P�����Ӱ����������վ,�����塣','../../','.html','select count(*) as total from [!db.pre!]ecms_news','select * from [!db.pre!]ecms_news order by id desc','0','23','9','������Ϊ���ṩ���µ�720P��1080P�����ӰBT�������أ�������������ע�ᣬ��ӭ���顣','�����壬����������������������ַ��BT���ã���Ӱ���ã�����720P�����Ӱ����Ӱ���ӣ��첥���ӣ�BT���ӣ�bt��Դ���أ��첥��ԴBT������վ����ӰBT���ӣ��������ӣ�720P���ӣ�1080P���ӣ������Ӱ����','0');");

@include("../../inc/footer.php");
?>