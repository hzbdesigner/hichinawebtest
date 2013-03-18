<ul class="nav nav-pills nav-stacked aside">
	<li <?php if( $action == 'index'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/user');?>">
			管理用户
		</a>
	</li>
	<li <?php if( $action == 'create'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/user/create');?>">
			添加用户
		</a>
	</li>
</ul>
