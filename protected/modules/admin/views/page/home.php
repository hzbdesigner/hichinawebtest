<div class='row'>
	<div class='span2'>
		<?php $this->renderPartial('/page/_aside',array('action'=>'home'));?>
	</div>

	<div class='span10'>
		<?php
		if( $msg ){
			echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>$msg</div>";
		}
		?>
		<div class='row-fluid'>
			<ul class="nav nav-tabs">
				<li class="active" >
					<a href="<?php echo $this->createUrl('/admin/page/home');?>">
						幻灯片
					</a>
				</li>
			</ul>
		</div>
		<form method="POST" class="form-horizontal" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="banner1">
						幻灯片1
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="banner1" name="Banner[banner1]" value="<?php echo $model[banner1]?>">
						<input type="file" name="banner1" value="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="banner2">
						幻灯片2
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="banner2" name="Banner[banner2]" value="<?php echo $model[banner2]?>">
						<input type="file" name="banner2" value="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="banner3">
						幻灯片3
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="banner3" name="Banner[banner3]" value="<?php echo $model[banner3]?>">
						<input type="file" name="banner3" value="">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="banner4">
						幻灯片4
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="banner4" name="Banner[banner4]" value="<?php echo $model[banner4]?>">
						<input type="file" name="banner4" value="">
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

});
</script>