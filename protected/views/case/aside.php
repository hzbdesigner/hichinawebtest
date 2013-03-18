<ul class="breadcrumb-nav color-blue fs12 font-hua cf">
	<li class="fl"><a href="<?php echo $this->createUrl('/site');?>">首页</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/case');?>">投资案例</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/case').'/'.$this->action->id;?>">
	<?php if( $this->action->id == 'list' && $_REQUEST[type] != 'other' ){echo '成功案例';} ?>
	<?php if( $this->action->id == 'list' && $_REQUEST[type] == 'other' ){echo '正在上市或已退';} ?>
	<?php if( $this->action->id == 'story' ){echo '投资故事';} ?>
	</a></li>
</ul>

<div class="sidebar-shadow fl" style="width:220px; min-height:671px;">
	<ul class= "color-black fs14 font-hua tc mt10">
		<li class="h30 lh30 <?php if( $this->action->id == 'list' && $_REQUEST[type] != 'other' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/case/list?type=success');?>">成功案例</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'list' && $_REQUEST[type] == 'other' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/case/list?type=other');?>">正在上市或已退</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'story' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/case/story');?>">投资故事</a></li>
	</ul>
</div>
