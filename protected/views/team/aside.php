<ul class="breadcrumb-nav color-blue fs12 font-hua cf">
	<li class="fl"><a href="<?php echo $this->createUrl('/site');?>">首页</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/team');?>">管理团队</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/site').'/'.$this->action->id;?>">
	<?php if( $_REQUEST[type] == 0 ){echo '管理团队';} ?>
	<?php if( $_REQUEST[type] == 1 ){echo '专家顾问';} ?>
	</a></li>
</ul>

<div class="sidebar-shadow fl" style="width:220px; min-height:671px;">
	<ul class= "color-black fs14 font-hua tc mt10">
		<li class="h30 lh30 <?php if( $_REQUEST[type] == 0 ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/team/index?type=0');?>">管理团队</a></li>
		<li class="h30 lh30 <?php if( $_REQUEST[type] == 1 ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/team/index?type=1');?>">专家顾问</a></li>
	</ul>
</div>