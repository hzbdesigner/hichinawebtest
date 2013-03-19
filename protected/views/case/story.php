<div class="fs20 color-bluelight font-hua" style="border-left:2px solid #1980ab;line-height:20px;padding-left:5px;border-bottom:1px dotted #ddd;padding-bottom:3px;margin-top:2px;margin-bottom:15px;">
投资故事
</div>

<div  style="width:675px;">
	<ul>
		<?php
		foreach( $storys as $story ){
			echo <<<EOD
			<li class="mb15">	
				<div class="title cf">
					<div class="fl ml15"><img src="$story[logo]" width="120px" height="80px"/></div>
					<div class="fl " style="width:470px; ">
						<div class="name fs20 font-hua ml15 color-bluelight" style="margin-top:2px;">
						$story[title]
						</div>
						<div class="des fs14 mt5 ml15 text-omit" style="color:#999; width:450px;">
						$story[subtitle]
						</div>
						<div class="ml15 "><a class="btn-show-all color-blue fs12 " >显示全部<span >»</span></a></div>
					</div>
				</div>
				
				<div class="content clear-reset cb disnone " style="margin-left:15px;margin-top:15px;margin-right:15px;margin-bottom:20px;padding:10px;border:1px solid #ddd;background-color:#f1f1f1;">
					$story[content]
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
	
</div>