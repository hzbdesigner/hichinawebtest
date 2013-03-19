<?php
if( $error ){
	echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
}
?>

<form class="bs-docs-example form-horizontal" action='<?php echo $this->createUrl('/admin/default/login') ?>' method='post'>
	<legend>
		管理员登陆
	</legend>
	<div class="control-group">
		<label class="control-label" for="inputEmail">
			邮箱
		</label>
		<div class="controls">
			<input type="text" name='LoginForm[email]' id="inputEmail" placeholder="Email">
		</div>
	</div>
	<div class="control-group">
		<label class="control-label" for="inputPassword">
			密码
		</label>
		<div class="controls">
			<input type="password" name='LoginForm[password]' id="inputPassword" placeholder="Password">
		</div>
	</div>
	<div class="control-group">
		<div class="controls">
			<label class="checkbox">
				<input type="checkbox" name='LoginForm[rememberMe]' >
					记住我
				</label>
				
			<button type="submit" class="btn">
				登陆
			</button>
		</div>
	</div>
</form>