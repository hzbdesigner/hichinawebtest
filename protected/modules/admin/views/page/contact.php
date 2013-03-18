<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>

<div class='row'>
	<div class='span2'>
		<?php $this->renderPartial('/page/_aside',array('action'=>'contact'));?>
	</div>

	<div class='span10'>
		<?php
		if( $msg ){
			echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>$msg</div>";
		}
		?>
		<div class='row-fluid'>
			<ul class="nav nav-tabs">
				<li <?php if( $p == 'way' ){ echo 'class="active"';}?>>
					<a href="<?php echo $this->createUrl('/admin/page/contact?p=way');?>">
						联系方式
					</a>
				</li>
				<li <?php if( $p == 'local' ){ echo 'class="active"';}?>>
					<a href="<?php echo $this->createUrl('/admin/page/contact?p=local');?>">
						各地首代
					</a>
				</li>
				<li <?php if( $p == 'job' ){ echo 'class="active"';}?>>
					<a href="<?php echo $this->createUrl('/admin/page/contact?p=job');?>">
						人员招聘
					</a>
				</li>
			</ul>
		</div>
		<?php
		echo $sub_page;
		?>
	</div>
</div>

<script type="text/javascript">
$(function(){
	var Ueditor = new baidu.editor.ui.Editor({
		UEDITOR_HOME_URL:'<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/',
		imagePath:"http://<?php echo $_SERVER['HTTP_HOST'].Yii::app()->baseUrl; ?>/tool/ueditor/php/",
		initialContent:'请输入文章内容',
		textarea:'page_content'
	});
	Ueditor.render('article_content');
});
</script>