<ul class="nav nav-pills nav-stacked aside">
	<li <?php if( $action == 'index'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/article/create');?>">
			添加新闻
		</a>
	</li>
	<li <?php if( $this->action->id == 'admin'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/article/admin');?>">
			管理新闻
		</a>
	</li>
	<li <?php if( $this->action->id == 'my'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/article/my');?>">
			我的录入
		</a>
	</li>
	<li <?php if( $action == 'catalog'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/catalog');?>">
			管理分类
		</a>
	</li>
</ul>
