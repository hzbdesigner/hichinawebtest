<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>


<div class='row'>
<div class='span2'>
	<?php $this->renderPartial('/page/_aside',array('action'=>'manager'));?>
</div>

<div class='span10'>
	<div class="row-fluid">
		<ul class="nav nav-tabs">
			<li <?php if( $this->action->id == 'admin' && $_REQUEST[type] == 0 ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/manager/admin?type=0'); ?>">
					管理团队
				</a>
			</li>
			<li <?php if( $this->action->id == 'admin' && $_REQUEST[type] == 1 ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/manager/admin?type=1'); ?>">
					专家顾问
				</a>
			</li>
			<li <?php if( $this->action->id == 'create' ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/manager/create'); ?>">
					添加
				</a>
			</li>
		</ul>
	</div>
	<form method='POST' class="form-horizontal" enctype="multipart/form-data" style='width:610px'>
		<fieldset>
			<div class="control-group">
				<label class="control-label" for="avatar">
					头像
				</label>
				<div class="controls">
					<input type="file" class="input-xlarge" id="avatar" name="avatar">
					
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="name">
					名称
				</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="name" name="Manager[name]" value='<?php echo $model[name]?>'>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="title">
					头衔
				</label>
				<div class="controls">
					<input type="text" class="input-xlarge" id="title" name="Manager[title]" value='<?php echo $model[title]?>'>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="type">
					类型
				</label>
				<div class="controls">
					<select class="input-xlarge" id="type" name="Manager[type]">
						<option value=0 <?php if($model[type] == 0){echo " selected=selected ";}?>>
							管理成员
						</option>
						<option value=1 <?php if($model[type] == 1){echo " selected=selected ";}?>>
							专家顾问
						</option>
					</select>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="description">
					简介
				</label>
				<div class="controls">
					<div id="description"></div>
					<script type="text/plain" name='Manager[description]'></script>
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
		textarea:'Manager[description]'
	});
	Ueditor.render('description');
});
</script>