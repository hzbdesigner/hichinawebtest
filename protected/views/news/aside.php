<ul class="breadcrumb-nav color-blue fs12 font-hua cf">
	<li class="fl"><a href="<?php echo $this->createUrl('/site');?>">首页</a><span class="bread-divider">&gt;</span></li>
	<li class="fl"><a href="<?php echo $this->createUrl('/news');?>">新闻动态</a><span class="bread-divider">&gt;</span></li>
	
	<?php 
	if( $this->action->id == 'view' && $this->id == 'article' ){
		echo  '<li class="fl"><a href="'.$this->createUrl('/news/catalog/id').'/'.$article[catalog][cid].'">'.$article[catalog][title].'</a></li>';
	}
	?>
</ul>

<div class="sidebar-shadow fl" style="width:220px; min-height:671px;">
	<ul class= "color-black fs14 font-hua tc mt10">
		<?php
		foreach( $catalogs as $catalog ){
			echo '<li class="h30 lh30 ';
			if( $this->action->id == 'catalog' && $catalog[cid] == $_REQUEST[id] ){echo 'sidebar-active';}
			echo ' "><a class="hover-blue" href="'.$this->createUrl('/news/catalog/id').'/'.$catalog[cid].'">'.$catalog[title].'</a></li>';
		}
		?>	
		<!--li class="h30 lh30  <?php if( $this->id == 'magazine' ){echo 'sidebar-active';} ?>"><a class="hover-blue" href="<?php echo $this->createUrl('/magazine')?>">内部刊物</a></li-->
	</ul>
</div>
