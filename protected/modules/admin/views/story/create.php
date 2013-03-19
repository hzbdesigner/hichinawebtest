<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>


<div class='row'>
<div class='span2'>
	<?php $this->renderPartial('/page/_aside',array('action'=>'story'));?>
</div>

<div class='span10'>
	<div class="row-fluid">
		<ul class="nav nav-tabs">
			<li <?php if( $this->action->id == 'admin' ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/story/admin'); ?>">
					投资故事
				</a>
			</li>
			<li <?php if( $this->action->id == 'create' ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/story/create'); ?>">
					添加
				</a>
			</li>
		</ul>
	</div>
	<form method='POST' class="form-horizontal" enctype="multipart/form-data" style='width:610px'>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="logo">
					LOGO
				</label>
				<div class="controls">
					<input type="file" class="input-xlarge" id="logo" name="logo">
					
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="title">
					名称
				</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="title" name="Story[title]" value='<?php echo $model[title]?>'>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="subtitle">
					副标题
				</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="subtitle" name="Story[subtitle]" value='<?php echo $model[subtitle]?>'>
				</div>
			</div>
			
			<div class="control-group">
				<label class="control-label" for="content">
					简介
				</label>
				<div class="controls">
					<div id="content"></div>
					<script type="text/plain" name='Story[content]'></script>
				</div>
			</div>
			
			<div class="form-actions">
				<button type="submit" class="btn btn-primary">
					保存
				</button>
			</div>
		</fieldset>
	</form>
</div>
</div>

<script type="text/javascript">
$(function(){
	var Ueditor = new baidu.editor.ui.Editor({
		UEDITOR_HOME_URL:'<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/',
		imagePath:"http://<?php echo $_SERVER['HTTP_HOST'].Yii::app()->baseUrl; ?>/tool/ueditor/php/",
		initialContent:'请输入文章内容',
		textarea:'Story[content]'
	});
	Ueditor.render('content');
});
</script>