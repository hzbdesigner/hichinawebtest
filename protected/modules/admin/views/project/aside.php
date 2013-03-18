<ul class="nav nav-pills nav-stacked aside">
	<li <?php if( $this->action->id == 'admin' && $_REQUEST['type'] != 'other' ){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/project/admin?type=success');?>">
			成功案例
		</a>
	</li>
	<li <?php if( $_REQUEST[type] == 'other' ){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/project/admin?type=other');?>">
			正在上市/退出
		</a>
	</li>
	<li <?php if( $action == 'create'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/project/create');?>">
			添加
		</a>
	</li>
</ul>
