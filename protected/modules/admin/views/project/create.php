
<div class='row'>
	<div class='span2'>
		<?php $this->renderPartial('aside',array('action'=>'create'));?>
	</div>

	<div class='span10'>
		<?php
		if( $msg ){
			echo "<div class='alert alert-success'><button type='button' class='close' data-dismiss='alert'>×</button>$msg</div>";
		}
		?>
		<form method='POST' class="form-horizontal" enctype="multipart/form-data">
			<fieldset>
				<div class="control-group">
					<label class="control-label" for="title">
						标题
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="title" name="Project[title]" value='<?php echo $model[title]?>'>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="subtitle">
						副标题
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="subtitle" name="Project[subtitle]" value='<?php echo $model[subtitle]?>'>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="logo">
						LOGO
					</label>
					<div class="controls">
						<input type="file" class="input-xlarge" id="logo" name="logo">
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="type">
						类型
					</label>
					<div class="controls">
						<select class="input-xlarge" id="type" name="Project[type]">
							<option value=1 <?php if($model[type] == 1){echo " selected=selected ";}?>>
								成功案例
							</option>
							<option value=0 <?php if($model[type] == 0){echo " selected=selected ";}?>>
								正在上市或退出
							</option>
						</select>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="link">
						链接
					</label>
					<div class="controls">
						<input type="text" class="input-xlarge" id="link" name="Project[link]" value='<?php echo $model[link]?>'>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label" for="description">
						简介
					</label>
					<div class="controls">
						<textarea type="text" class="input-xlarge" id="description" name="Project[description]"  ><?php echo $model[description]?></textarea>
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