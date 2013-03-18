
<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>

<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/news/_aside',array('action'=>'admin'));?>
	</div>

	<div class='span10'>
		<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
		}
		?>
		
		<form action="<?php echo $this->createUrl('/admin/article/update/id').'/'.$model[aid]?>" method='POST' >
			<div class='row-fluid'>
				<div class='span6'>
					<div class="control-group">
						<label class="control-label" for="inputEmail">
							标题：
						</label>
						<div class="controls">
							<input class="span12" type="text" name='Article[title]' id='article_title' value="<?php echo $model[title];?>">
						</div>
					</div>
				</div>
				
				<div class='span2'>
					<div class="control-group">
						<label class="control-label" for="inputEmail">
							分类：
						</label>
						<div class="controls">
							<select class="span10" name='Article[cid]'>
								<?php
									foreach( $catalogs as $catalog ){
										echo "<option value='$catalog[cid]' ";
										if( $catalog[cid] == $model[cid] ){
											echo " selected=selected ";
										}
										echo ">$catalog[title]</option>";
									}
								?>
							</select>
						</div>
					</div>
				</div>
				
				<div class='span2'>
					<div class="control-group">
						<label class="control-label" for="inputEmail">
							是否发布：
						</label>
						<div class="controls">
							<select class="span10" name='Article[isshow]'>
								<option value=0 <?php if( !$model[isshow] ){ echo " selected=selected "; } ?> >
									否
								</option>
								<option value=1 <?php if( $model[isshow] ){ echo " selected=selected "; } ?>>
									是
								</option>
							</select>
						</div>
					</div>
				</div>
				
				<div class='span2'>
					<div class="control-group">
						<label class="control-label" for="inputEmail">
							
						</label>
						<div class="controls">
							<button class="btn btn-large btn-primary btn-block" id='post_btn' type='submit'>更新</button>
						</div>
					</div>
					
				</div>
			</div>
				
			<hr />
			<div class="control-group">
				<label class="control-label" for="inputEmail">
					正文：
				</label>
				<div class="controls">
					<script type="text/plain" id="article_content">
						<?php
						echo $model[content];
						?>
					</script>
				</div>
			</div>
			
		</form>
	</div>

</div>

<script type="text/javascript">
$(function(){
	var Ueditor = new baidu.editor.ui.Editor({
		UEDITOR_HOME_URL:'<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/',
		imagePath:"http://<?php echo $_SERVER['HTTP_HOST'].Yii::app()->baseUrl; ?>/tool/ueditor/php/",
		initialContent:'请输入文章内容',
		textarea:'Article[content]'
	});
	Ueditor.render('article_content');
});
</script>