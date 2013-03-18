
<div style="width:675px;margin-top:10px;">	
	<dt class="title fs18 font-hua color-black h30 lh30 mb10" style="border-bottom:2px solid #1980ab;">
	
	<span class=" inblock h30 lh30 pl10 pr10"  style="border-bottom:2px solid #cb8619;">
	"<?php echo $key?>" 搜索结果：<?php echo $count?> 条记录
	</span>
	
	</dt>
	
	<?php
	foreach( $articles as $a ){
		echo '<dd class="fs12 font-hua color-black pt5 pb5 ml20" style="border-bottom:1px dotted #999;">';
		echo '<a href="'.$this->createUrl('/article/view/id').'/'.$a[aid].'" class="pl5 hover-blue">'.$a[title].'</a>';
		echo '<span class="fr inblock">'.substr($a[dateline], 0, 10).'</span></dd>';
	}
	?>
	<style type="text/css">
		.sub-pagination li{
			float: left;
			text-align: center;
			background-color: #1980AB;
		}
		.hidden{
			display:none;
		}
		li.last{
			display:none;
		}
	</style>
	<?php  $this->widget('CLinkPager',array(
		'pages'=>$pages,
		'htmlOptions'=>array(
			"class"=>'sub-pagination cf fs12 color-white mt25 fr'
		),
		'cssFile'=>'pager.css',
		'firstPageLabel' => '首页',
		'lastPageLabel' => '末页',
		'nextPageLabel' => '>',
		'prevPageLabel' => '<',
		'header' => '',
		'footer' => '',
	)); ?>
</div>