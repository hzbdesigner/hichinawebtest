<div class="fs20 color-bluelight font-hua" style="border-left:2px solid #1980ab;line-height:20px;padding-left:5px;border-bottom:1px dotted #ddd;padding-bottom:3px;margin-top:2px;margin-bottom:15px;">
<?php 
if( $_REQUEST[type] == 'other' ){
	echo '正在上市或退出';
}else{
	echo '成功案例';
}
?>
</div>

<ul class="">
	<?php
	foreach( $prjs as $p ){
		echo <<<EOD
		<li class="mb20 cf pb15" style="border-bottom:1px dotted #ddd;">
		<div class="fl"><img src="$p[logo]" width="150px;"  style="margin-top:15px;" /></div>
		<div class="fl " style="width:495px;">
			<p class="title fs20 font-kai">$p[title]</P>
			<p class="content font-hua fs14 ml20">$p[description]</p>
		</div>	
	</li >
EOD;
	}
	?>
	
	
</ul>

<style type="text/css">
	.sub-pagination li{
		float: left;
		text-align: center;
		background-color: #1980AB;
	}
	li.last{
		display:none;
	}
	li.first{
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
