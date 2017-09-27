<?php
//---------------------------用户自定义标签函数文件
function user_PhotoMorepic($tempid){
	global $navinfor,$public_r;
	$morepic=$navinfor['morepic'];
	$rexp="\r\n";
	$fexp="::::::";
	$rstr="";
	$sdh="";
	$w_morepic="";
	$rr=explode($rexp,$morepic);
	$count=count($rr);
	$num=$count;
	
	//取得模板
	$tr=sys_ReturnBqTemp($tempid);
	if(empty($tr['tempid']))
	{return "";}
	$listtemp=str_replace('[!--news.url--]',$public_r[newsurl],$tr[temptext]);
	$subnews=$tr[subnews];
	$listvar=str_replace('[!--news.url--]',$public_r[newsurl],$tr[listvar]);
	$rownum=$tr[rownum];
	$formatdate=$tr[showdate];
	if(empty($rownum))
	{$rownum=1;}
	
	
	//列表
	$list_exp="[!--empirenews.listtemp--]";
	$list_r=explode($list_exp,$listtemp);
	$listtext=$list_r[1];
	$no=1;
	$changerow=1;
	
	for($i=0;$i<$count;$i++)
	{
		
		$fr=explode($fexp,$rr[$i]);
	
		$smallpic=$fr[0]?$fr[0]:$public_r[newsurl]."e/data/images/notimg.gif";	//小图
		$bigpic=$fr[1]?$fr[1]:$public_r[newsurl]."e/data/images/notimg.gif";	//大图
		if(empty($bigpic))
		{
			$bigpic=$smallpic;
		}
		$picname=htmlspecialchars($fr[2]);	//名称
		$val[picname]=$picname;
		$val[bigpic]=$bigpic;
		$val[smallpic]=$smallpic;
		/////////////////
		$strF=",picname,bigpic,smallpic,";
		$repvar=user_ReplaceShowpicsVars($listvar,$strF,$val,$no);
		$listtext=str_replace("<!--list.var".$changerow."-->",$repvar,$listtext);
		$changerow+=1;
		//超过行数
		if($changerow>$rownum)
		{
		$changerow=1;
		$string.=$listtext;
		$listtext=$list_r[1];
		}
		$no++;
			
	}
   $string=$list_r[0].$string.$list_r[2];
	echo $string;
}

function user_ReplaceShowpicsVars($listtemp,$strF,$val,$no){
$fr=explode(',',$strF);
$fcount=count($fr)-1;;
for($i=1;$i<$fcount;$i++)
{
$f=$fr[$i];
$value=$val[$f];
$listtemp=str_replace('[!--'.$f.'--]',$value,$listtemp);
}
$listtemp=str_replace('[!--no.num--]',$no,$listtemp);

return $listtemp;
}



?>