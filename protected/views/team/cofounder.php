 <div class="sub-content fl fs14 font-hua cf clear-reset"  style="width:675px;color:#444;margin-bottom:15px;" >
		<div class="fs20 color-bluelight" style="border-left:2px solid #1980ab;line-height:20px;padding-left:5px;border-bottom:1px dotted #ddd;padding-bottom:3px;margin-top:2px;">
<?php
if( $_REQUEST[type] == 1 ){
	echo "专家顾问";
}else{
	echo "管理团队";
}
?>
</div>
</div>
<ul class=" cf">
	<?php
	foreach( $managers as $mgr ){
		$view = $this->createUrl('/team/view?id=').$mgr[id];
		echo <<<EOD
		<li class="fl ml20 mb50 team-one" style="width:145px;">
			<a class="asblock" style="width:145px;height:143px;" href="$view">
				<img  width="145px" height="143px" src="$mgr[avatar]" />
			</a>
		
			<div class="des tc" style="background-color:#e5e5e5;border-top:3px solid #CB8619" >
				<p class="pt5"><a href="$view" class="name fs16 color-blue font-hua lh12 ">$mgr[name]</a></p>
				<p class="name fs12  font-hua lh2 " style="color:#999;">$mgr[title]</p>
			</div>
		</li>
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

