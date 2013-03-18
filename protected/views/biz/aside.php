<ul class="breadcrumb-nav color-blue fs12 font-hua cf">
	<li class="fl"><a href="<?php echo $this->createUrl('/site');?>">首页</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/biz');?>">公司业务</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/biz').'/'.$this->action->id;?>">
	<?php if( $this->action->id == 'index' ){echo '投资体系';} ?>
	<?php if( $this->action->id == 'finance' ){echo '融资体系';} ?>
	<?php if( $this->action->id == 'serve' ){echo '服务体系';} ?>
	<?php if( $this->action->id == 'control' ){echo '风控体系';} ?>
	</a></li>
</ul>

<div class="sidebar-shadow fl" style="width:220px; min-height:671px;">
	<ul class= "color-black fs14 font-hua tc mt10">
		<li class="h30 lh30 <?php if( $this->action->id == 'index' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/biz/index');?>">投资体系</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'finance' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/biz/finance');?>">融资体系</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'serve' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/biz/serve');?>">服务体系</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'control' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/biz/control');?>">风控体系</a></li>
	</ul>
</div>
