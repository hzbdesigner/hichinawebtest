<ul class="breadcrumb-nav color-blue fs12 font-hua cf">
	<li class="fl"><a href="<?php echo $this->createUrl('/site');?>">首页</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/about');?>">关于我们</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/about').'/'.$this->action->id;?>">
	<?php if( $this->action->id == 'index' ){echo '公司简介';} ?>
	<?php if( $this->action->id == 'brief' ){echo '大事记';} ?>
	<?php if( $this->action->id == 'industry' ){echo '产业布局';} ?>
	<?php if( $this->action->id == 'strength' ){echo '核心优势';} ?>
	<?php if( $this->action->id == 'spirit' ){echo '投资理念';} ?>
	<?php if( $this->action->id == 'culture' ){echo '企业文化';} ?>
	</a></li>
</ul>

<div class="sidebar-shadow fl" style="width:220px; min-height:671px;">
	<ul class= "color-black fs14 font-hua tc mt10">
		<li class="h30 lh30 <?php if( $this->action->id == 'index' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/about/index');?>">公司简介</a></li>
		<!--li class="h30 lh30 <?php if( $this->action->id == 'brief' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/about/brief');?>">大事记</a></li-->
		<li class="h30 lh30 <?php if( $this->action->id == 'industry' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/about/industry');?>">产业布局</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'strength' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/about/strength');?>">核心优势</a></li>
		<li class="h30 lh30 <?php if( $this->action->id == 'spirit' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/about/spirit');?>">投资理念</a></li>
		<!--li class="h30 lh30 <?php if( $this->action->id == 'culture' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/about/culture');?>">企业文化</a></li-->
	</ul>
</div>
