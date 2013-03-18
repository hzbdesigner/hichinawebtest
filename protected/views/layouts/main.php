<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<link type="text/css" rel="stylesheet" href="<?php echo Yii::app()->baseUrl; ?>/css/style.css">
<script language="javascript" src="<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.7.2.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/focus.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/hxrs.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo Yii::app()->baseUrl; ?>/Scripts/swfobject_modified.js" type="text/javascript"></script>
<title>华夏润石</title>
</head>
<body class="pr">
<div class="header w960 center-h-pa bg-white " style="box-shadow:2px 0px 4px rgba(0,0,0,0.20),-2px 0px 4px rgba(0,0,0,0.20),0px 3px 6px rgba(0,0,0,0.20);">
  <div class="h60 pr bg-white ">
    	<a href="<?php echo $this->createUrl('/site');?>" class="h60 inblock"><table><tr><td class="h60 w100 tc " style="width:220px;"><img src="<?php echo Yii::app()->baseUrl; ?>/images/logo-index.png"  height="40px"/></td></tr></table></a>
        <span class="inblock h60 " style="position:relative;left:-36px;top:-6px;"><table><tr><td class="h60 tc font-hua color-orangle fs14" >新华联集团控股旗下投资平台&nbsp;&nbsp;基金管理公司
</td></tr></table></span>
        <form id='search_form' action='<?php echo $this->createUrl('/news/search');?>' class="header-form inblock fr center-v-pa cf">
			<input  type="text" value="搜索" name="k" class="border0 font-hua fs12 asblock fl color999" style="color:#aaa;"/>
			<a id='search_btn' href="javascript:;" class=" asblock fl fs12" >提交</a>
		</form>
    </div>
    <div class=" h35 bg-nav  ">
    	<p class="h35  tc fs12 font-hei color-white fl" style="width:240px; height:35px;"><img style="position:relative; top:4px;" src="<?php echo Yii::app()->baseUrl; ?>/images/slogan.png"/></p>
        <div class="nav-bar fl cf">
        	<ul class="nav-menus font-hua fs16">
            	<li class="fl nav-menu <?php if( $this->id == 'site' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav1" href="<?php echo $this->createUrl('/site');?>">首页</a></li>
                <li class="fl nav-menu <?php if( $this->id == 'about' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav2" href="<?php echo $this->createUrl('/about');?>">关于我们</a>
                	<ul class="dropdowns pa" style="width:86px;">
                    	<li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/about/index');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">公司简介</a></li>
                        <!--li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/about/brief');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">大事记</a></li-->
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/about/industry');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">产业布局</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/about/strength');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">核心优势</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/about/spirit');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">投资理念</a></li>
                        <!--li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/about/culture');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">企业文化</a></li-->
			</ul>
                </li>                             
                <li class="fl nav-menu <?php if( $this->id == 'news' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav3" href="<?php echo $this->createUrl('/news');?>">新闻动态</a>
					<ul class="dropdowns pa" style="width:86px;">
						<?php
						$catalogs = Catalog::model()->findAll();
						foreach( $catalogs as $c ){
							echo '<li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="'.$this->createUrl('/news/catalog/id').'/'.$c[cid].'" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">'.$c[title].'</a></li>';
						}
						?>
                    	<!--li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/magazine')?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">内部刊物</a></li-->
					</ul>
				
				</li>
                <li class="fl nav-menu <?php if( $this->id == 'biz' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav4" href="<?php echo $this->createUrl('/biz');?>">公司业务</a>
					<ul class="dropdowns pa" style="width:86px;">
                    	<li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/biz/index');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">投资体系</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/biz/finance');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">融资体系</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/biz/serve');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">服务体系</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/biz/control');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">风控体系</a></li>
					</ul>
				</li>
                <li class="fl nav-menu <?php if( $this->id == 'team' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav5" href="<?php echo $this->createUrl('/team');?>">管理团队</a>
					<ul class="dropdowns pa" style="width:86px;">
                    	<li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/team/index');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">管理团队</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/team/team');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">专家顾问</a></li>
					</ul>
				</li>
                <li class="fl nav-menu <?php if( $this->id == 'case' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav6" href="<?php echo $this->createUrl('/case');?>">投资案例</a>
					<ul class="dropdowns pa" style="width:86px;">
                    	<li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/case/index');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">投资案例</a></li>
                        <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/case/story');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">投资故事</a></li>
					</ul>
				</li>
                <li class="fl nav-menu <?php if( $this->id == 'relation' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav7" href="<?php echo $this->createUrl('/relation');?>">投资者关系</a></li>
                <li class="fl nav-menu <?php if( $this->id == 'contact' ){echo 'n-m-current';} ?>"><a class="asblock h35 lh35 color-white tc nav8" href="<?php echo $this->createUrl('/contact');?>">联系我们</a>
					<ul class="dropdowns pa" style="width:86px;">
                    	<li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/contact/index');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">联系方式</a></li>
                       <!-- <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/contact/local');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">各地首代</a></li>
  -->                      <li class="dropdown"><a class="asblock tc color-black bg-white fs14" href="<?php echo $this->createUrl('/contact/job');?>" style="height:32px; line-height:32px; border-bottom:1px dashed #ddd;">人员招聘</a></li>
					</ul>
				</li>
            </ul>
        </div>
    </div>
</div>
 <div></div>
<div class="content">
	<?php echo $content;?>
</div>

<div class="copyright cf color-blue font-hua fs12 w960 center-h pr" >
	<p class="fl">COPYRIGHT © <?php echo date('Y');?> 华夏润石（北京）股权投资基金管理有限公司 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<em style="color:#999;position:relative;left:15px;">企业邮箱登录:</em></p>
	<style>
	.bizmail_loginpanel{font-size:12px;width:300px;height:auto;margin-top:-13px;float:right;margin-right:-70px;color:#999; }
	.bizmail_LoginBox{padding:10px 15px;}
	.bizmail_loginpanel h3{padding-bottom:5px;margin:0 0 5px 0;border-bottom:1px solid #cccccc;font-size:14px;display:none;}
	.bizmail_loginpanel form{margin:0;padding:0;}
	.bizmail_loginpanel input.text{font-size:12px;width:100px;height:20px;margin:0 2px;border:1px solid #C3C3C3;border-color:#7C7C7C #C3C3C3 #C3C3C3 #9A9A9A;}
	.bizmail_loginpanel .bizmail_column{height:28px;}
	.bizmail_loginpanel .bizmail_column label{display:block;float:left;width:30px;height:24px;line-height:24px;font-size:12px;}
	.bizmail_loginpanel .bizmail_column .bizmail_inputArea{float:left;width:240px;}
	.bizmail_loginpanel .bizmail_column span{font-size:12px;word-wrap:break-word;margin-left: 2px;line-height:200%;}
	.bizmail_loginpanel .bizmail_SubmitArea{margin-left:30px;clear:both;}
	.bizmail_loginpanel .bizmail_SubmitArea a{font-size:12px;margin-left:5px;}
	.bizmail_loginpanel select{width:110px;height:20px;margin:0 2px;}
	</style>
<script type="text/javascript" src="http://exmail.qq.com/zh_CN/htmledition/js_biz/outerlogin.js"  charset="gb18030"></script>
<script type="text/javascript">
writeLoginPanel({domainlist:"hxrscapital.com", mode:"horizontal"});
</script>

	<p style="height:20px;line-height:20px; float:left; margin-top:-5px;">
		地址：北京市朝阳区东四环中路道家园18号新华联大厦10层 <em style="margin-left:25px;">电话：010-6530 3388-8078/8028</em>
	</p>
	<p style="height:24px;line-height:24px; float:right;  margin-top:-5px;"> <span style="">京ICP备 12041137 号</span></p>
    
</div>
<script type="text/javascript">
swfobject.registerObject("FlashID");

$(function(){
	$('#search_btn').click(function(){
		$('#search_form').submit();
	});
});
</script>
</body>
</html>
