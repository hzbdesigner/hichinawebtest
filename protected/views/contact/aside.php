<ul class="breadcrumb-nav color-blue fs12 font-hua cf">
	<li class="fl"><a href="<?php echo $this->createUrl('/site');?>">首页</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/contact');?>">联系我们</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/contact').'/'.$this->action->id;?>">
	<?php if( $this->action->id == 'index' ){echo '联系方式';} ?>
	<?php if( $this->action->id == 'local' ){echo '各地首代';} ?>
	<?php if( $this->action->id == 'job' ){echo '人员招聘';} ?>
	</a></li>
</ul>

<div class="sidebar-shadow fl" style="width:220px; min-height:671px;">
	<ul class= "color-black fs14 font-hua tc mt10">
		<li class="h30 lh30 <?php if( $this->action->id == 'index' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/contact/index');?>">联系方式</a></li>
		<!--li class="h30 lh30 <?php if( $this->action->id == 'local' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/contact/local');?>">各地首代</a></li-->
		<li class="h30 lh30 <?php if( $this->action->id == 'job' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/contact/job');?>">人员招聘</a></li>
	</ul>
</div>

