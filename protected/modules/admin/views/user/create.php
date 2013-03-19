<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/user/_aside',array('action'=>'create'));?>
	</div>

	<div class='span10'>
		<form id="user-form" action="<?php echo $this->createUrl('/admin/user/create')?>" method="post">	
			<div class="control-group">
				<label class="control-label" for="inputEmail">
					用户名：
				</label>
				<div class="controls">
					<input size="60" maxlength="64" name="User[username]" id="User_username" type="text">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">
					邮箱：
				</label>
				<div class="controls">
					<input size="60" maxlength="256" name="User[email]" id="User_email" type="text">
				</div>
			</div>
			<div class="control-group">
				<label class="control-label" for="inputEmail">
					密码：
				</label>
				<div class="controls">
								<input size="60" maxlength="128" name="User[password]" id="User_password" type="password">
				</div>
			</div>
			<input type="submit" name="yt0" value="保存">
		</form>

	</div>
</div>

