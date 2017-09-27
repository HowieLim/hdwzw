<?php
/*  www.dede168.com  */
/********密码验证***********/
$password='123456';//这个密码是登陆验证用的.您需要在模块里设置和这里一样的密码....注意一定需要修改.
if($password!=$_GET['pw']) exit('pwerror');   //安全检测,密码不符则退出

/****以下代码非专业人员不建议修改***************/
define('EmpireCMSAdmin','1');
define('EmpireCMSAPage','login');

require("../class/connect.php");
require("../class/db_sql.php");
require("../class/functions.php");
require LoadLang("pub/fun.php");
require("../class/delpath.php");
require("../class/copypath.php");
require("../class/t_functions.php");
require("../data/dbcache/class.php");
require("../data/dbcache/MemberLevel.php");

//echo('classcount:'.count($class_r));
//获取分类列表
foreach($class_r as $kv)
{
	if($kv['modid']=='1')
	{
		$cates[]=array('cname'=>$kv['classname'],'cid'=>$kv['classid'],'pid'=>$kv['bclassid']);
	}
}

if(empty($_POST))
{
	//这里刷新列表
	echo "<select name='list'>";
	echo maketree($cates,0,'');
	echo '</select>';
	exit();
}
$link=db_connect();
$empire=new mysqlquery();

//验证用户
$loginin=RepPostVar($_POST['username']);
$lur=$empire->fetch1("select * from {$dbtbpre}enewsuser where `username`='$loginin'");
if(!$lur) exit('不存在的用户名'.$loginin);


$logininid=$lur['userid'];
$loginrnd=$lur['rnd'];
$loginlevel=$lur['groupid'];
$loginadminstyleid=$lur['adminstyleid'];

$incftp=0;
if($public_r['phpmode'])
{
	include("../class/ftp.php");
	$incftp=1;
}
require("../class/hinfofun.php");
$navtheid=(int)$_POST['filepass'];


$zhanwai=(int)$_POST['zhanwai'];



//=====================================判断标题重复
$title=addslashes($_POST['title']);
$_POST['titlepic']=str_replace('<img src=','',$_POST['titlepic']);
$_POST['titlepic']=str_replace('>','',$_POST['titlepic']);
$_POST['titlepic']=str_replace('"','',$_POST['titlepic']);
$_POST['titlepic']=str_replace('\\','',$_POST['titlepic']);


//if($_POST['livetime'])$_POST['livetime']=date('Y-',time()).$_POST['livetime'].':00';




$tr=$empire->fetch1("select id,title,classid,isgood,firsttitle,filename from {$dbtbpre}ecms_news where  title='$title'  ");
//if($tr) exit('成功,已存在'.$title);
if($tr)
{
	$_POST['id']=$tr['id'];
	$_POST['classid']=$tr['classid'];
	$_POST['title']=$tr['title'];
	$_POST['isgood']=$tr['isgood'];
	$_POST['firsttitle']=$tr['firsttitle'];
	$_POST['filename']=$tr['filename'];


	EditNews($_POST,$logininid,$loginin);
	echo("已存在,增加信息成功");
}
else
{

	AddNews($_POST,$logininid,$loginin);
	echo("增加信息成功");
}
db_close();
$empire=null;

/***生成目录的一个遍历算法***/
function maketree($ar,$id,$pre)
{
	$ids='';
	foreach($ar as $k=>$v){
		$pid=$v['pid'];
		$cname=$v['cname'];
		$cid=$v['cid'];
		if($pid==$id)
		{
			$ids.="<option value='$cid'>{$pre}{$cname}</option>";
			foreach($ar as $kk=>$vv)
			{
				$pp=$vv['pid'];
				if($pp==$cid)
				{ 
					$ids.=maketree($ar,$cid,$pre);
					break;
				}
			}
		}
	}
	return $ids;
}
?>