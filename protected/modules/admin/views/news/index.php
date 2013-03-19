
<script type="text/javascript">
	window.UEDITOR_HOME_URL = '<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/';
</script>
<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/themes/default/ueditor.css" />
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_config.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/editor_all_min.js"></script>

<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/news/_aside',array('action'=>'index'));?>
	</div>

	<div class='span10'>
		<form action="<?php echo $this->createUrl('/admin/news/create')?>" method='POST'>
			<div class='row-fluid'>
				<div class='span6'>
					<div class="control-group">
						<label class="control-label" for="inputEmail">
							标题：
						</label>
						<div class="controls">
							<input class="span12" type="text" name='PostForm[title]'>
						</div>
					</div>
				</div>
				
				<div class='span2'>
					<div class="control-group">
						<label class="control-label" for="inputEmail">
							分类：
						</label>
						<div class="controls">
							<select class="span10" name='PostForm[catalog]'>
								<?php
								foreach( $catalog as $tmp ){
									echo "<option value=$tmp[cid]>$tmp[title]</option>";
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
							<select class="span10" name='PostForm[isshow]'>
								<option value=0>
									否
								</option>
								<option value=1>
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
							<button class="btn btn-large btn-primary btn-block" type="submit">保存</button>
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
					<textarea name="" id="article_content" name='PostForm[content]'></textarea>
				</div>
			</div>
			
		</form>
	</div>

</div>


<script type="text/javascript">
$(function(){

	var editor = new baidu.editor.ui.Editor({
		UEDITOR_HOME_URL:'<?php echo Yii::app()->baseUrl; ?>/tool/ueditor/',
		imagePath:"http://<?php echo $_SERVER['HTTP_HOST'].Yii::app()->baseUrl; ?>/tool/ueditor/php/",
		initialContent:'请输入文章内容'
	});
	editor.render('article_content');
});
</script>