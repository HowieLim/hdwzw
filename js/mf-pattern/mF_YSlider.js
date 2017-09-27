myFocus.pattern.extend({//*********************YSlide--翻页效果******************
	'mF_YSlider':function(settings,$){
		var $focus=$(settings);
		var $picList=$focus.find('.pic li');
		var $rePicList=$focus.addHtml('<div class="rePic">'+$focus.find('.pic').html()+'</div>').find('li');
		var $txtList=$focus.addListTxt().find('li');
		var $numList=$focus.addListNum().find('li');
		//PLAY
		var s=settings.direction==='single'?true:false,d1=settings.width,d2=settings.height;
		$focus.play(function(i,n){
			var r=s?1:Math.round(1+(Math.random()*(2-1))),dis,d,p={};
			dis=r===1?d1:d2,d=Math.round(Math.random()+s)?dis:-dis,p[r===1?'left':'top']=d;
			$picList[i].style.display=$txtList[i].style.display='none';
			$numList[i].className='';
			$rePicList.eq(i).css({left:0,top:0,display:'block',opacity:1}).slide(p,500,'swing').fadeOut(500);
		},function(i,n){
			$picList[i].style.display=$txtList[i].style.display='block';
			$numList[i].className='current';
		});
		//Control
		$focus.bindControl($numList);
	}
});


myFocus.config.extend({
	'mF_YSlider':{//可选个性参数
		seamless:true,//是否无缝，可选：true(是)/false(否)
		duration:600,//过渡时间(毫秒)，时间越大速度越小
		direction:'single',//运动方向，可选：'top'(向上) | 'left'(向左)//切出方向,可选：'random'(随机) | 'single'(单向/向右)
		easing:'easeOut',//运动形式，可选：'easeOut'(快出慢入) | 'easeIn'(慢出快入) | 'easeInOut'(慢出慢入) | 'swing'(摇摆运动) | 'linear'(匀速运动)
		txtHeight:'0'//文字层高度设置(像素),'default'为默认高度，0为隐藏
		
	}
});