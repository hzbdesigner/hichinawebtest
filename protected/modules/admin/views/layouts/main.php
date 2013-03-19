<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title> <?php echo $this->pageTitle; ?> </title>
	<!-- Le styles -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/css/bootstrap.min.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/css/admin/style.css" />
	<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/js/jquery-1.7.2.js'></script>
	<!--JS 弹窗插件 artDialog-->
	<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/artdialog/artdialog.min.js?skin=twitter'></script>
	<script type="text/javascript">
	
	</script>
</head>
<body>
<div id='page-wrapper' class='container'>
	<div class='row' id='page-header' style='height:40px;'>
		<div class="navbar navbar-fixed-top">
			<div class="navbar-inner">
				<div class="container">
					<?php echo CHtml::link('华夏润石',array('/site'),array('class'=>'brand', 'target'=>'_blank'));?>
					<div class="nav-collapse">
						<ul class="nav">
							<?php
							if( !Yii::app()->user->isGuest ) {
							?>
							<li>
								<?php echo CHtml::link('新闻',array('/admin/article/admin'));?>
							</li>
							<li>
								<?php echo CHtml::link('页面',array('/admin/page'));?>
							</li>
							<li>
								<?php echo CHtml::link('案例',array('/admin/project'));?>
							</li>
							<li>
								<?php echo CHtml::link('用户',array('/admin/user'));?>
							</li>
							<li class="dropdown pull-right" id="my_dropdown_btn">
								<a href="#account" title="账户" class=" dropdown-toggle iqiubo-icon16" data-toggle="dropdown">账号</a>
								<ul class="dropdown-menu" id='my_dropdown_menu'>
									<li ><?php echo CHtml::link('修改',array('/admin/user/update/id/'.Yii::app()->user->id),array('title'=>'修改'));?></li>
									<li class="divider"></li>
									<li ><?php echo CHtml::link('退出',array('/admin/default/logout'),array('title'=>'退出'));?></li>
								</ul>
							</li>
							<?php
							}
							?>
							
						</ul>
					</div>
					<!-- /.nav-collapse -->
				</div>
			</div>
			<!-- /navbar-inner -->
		</div>
	
	</div>
	
	<div  style='margin-top:10px;' >
		<?php echo $content;?>
	</div>
	
	<div id='page-footer' style='margin-top:10px;'>
		<hr/>
		<div>
			Copyright &copy; <?php echo date('Y');?> 华夏润石. All Rights Reserved.
		</div>
	</div>	
</div>
<script language='javascript'>
	$(function(){
	});
</script>

<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-transition.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-alert.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-modal.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-dropdown.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-scrollspy.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-tab.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-tooltip.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-popover.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-button.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-collapse.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-carousel.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/bootstrap-typeahead.js'></script>
<script language='javascript' src='<?php echo Yii::app()->baseUrl; ?>/tool/bootstrap/js/application.js'></script>
</body>
</html>