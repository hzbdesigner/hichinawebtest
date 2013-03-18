<ul class="nav nav-pills nav-stacked aside">
	<li <?php if( $action == 'home'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/page/home');?>">
			首页
		</a>
	</li>
	<li <?php if( $action == 'about'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/page/about');?>">
			关于我们
		</a>
	</li>
	<li <?php if( $this->action->id == 'biz'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/page/biz');?>">
			公司业务
		</a>
	</li>
	<li <?php if( $action == 'manager'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/manager');?>">
			管理团队
		</a>
	</li>
	<li <?php if( $action == 'story' ){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/story');?>">
			投资故事
		</a>
	</li>
	
	<li <?php if( $action == 'contact'){echo 'class="active"';}?>>
		<a href="<?php echo $this->createUrl('/admin/page/contact');?>">
			联系我们
		</a>
	</li>
</ul>
