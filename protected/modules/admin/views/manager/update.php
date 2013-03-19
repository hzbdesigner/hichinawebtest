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
		<?php
		if( $msg ){
			echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>$msg</div>";
		}
		?>
		<form method='POST' class="form-horizontal" enctype="multipart/form-data" style='width:610px'>
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="avatar">
						头像
					</label>
					<div class="controls">
						<img src="<?php echo $model[avatar]?>" alt="" />
						<input type="hidden" class="input-xlarge" name="Manager[avatar]" value="<?php echo $model[avatar]?>">
							
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
						<script type="text/plain" id="article_content">
							<?php
							echo  $model[description];
							?>
						</script>
					</div>
				</div>
				
				<div class="form-actions">
					<button type="submit" class="btn btn-primary">
						更新
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
	Ueditor.render('article_content');
});
</script>