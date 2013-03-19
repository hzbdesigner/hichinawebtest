<dl style="width:675px;">
	<dt class="fs18 font-hua color-black h30 lh30 mb20" style="border-bottom:2px solid #1980ab;"><span class="inblock h30 lh30 pl10 pr10"  style="border-bottom:2px solid #cb8619;">成功案例</span></dt>
	
	<?php
	foreach( $success as $p ){
		echo <<<EOD
		<dd class="fl mr10 mb15">
			<table><tr style="border-top:1px solid #ccc; border-bottom:1px solid #ccc;">
			<td class="tc" style="width:100px; height:80px; border-right:1px solid #ccc;"><img src="$p[logo]" style="max-width:90px; max-height:70px;"/></td>
			<td class="tc" style="width:110px; height:80px;"> <span class="font-hua fs14">$p[title]</span><br /><span class="font-hua fs12">$p[subtitle]</span></td>
			</tr></table>
		</dd>
EOD;
	}
	?>
	
	
	<dd class="fs12 font-hua color-black pt5 pb5 ml20 mt10 cb"><a href='<?php echo $this->createUrl('/case/list?type=success');?>' class="fr more-bg color-white tc " style="width:76px; height:15px;">MORE</a></dd>
	
	<dt class="fs18 font-hua color-black h30 lh30 mb10 mt15" style="border-bottom:2px solid #1980ab;"><span class=" inblock h30 lh30 pl10 pr10"  style="border-bottom:2px solid #cb8619;">正在上市或已退</span></dt>
	<?php
	foreach( $other as $p ){
		echo <<<EOD
		<dd class="fl mr10 mb15">
			<table><tr style="border-top:1px solid #ccc; border-bottom:1px solid #ccc;">
			<td class="tc" style="width:100px; height:80px; border-right:1px solid #ccc;"><img src="$p[logo]" style="max-width:90px; max-height:70px;"/></td>
			<td class="tc" style="width:110px; height:80px;"> <span class="font-hua fs14">$p[title]</span><br /><span class="font-hua fs12">$p[subtitle]</span></td>
			</tr></table>
		</dd>
EOD;
	}
	?>

	<dd class="fs12 font-hua color-black pt5 pb5 ml20  mt10"><a href='<?php echo $this->createUrl('/case/list?type=other');?>' class="fr more-bg color-white tc" style="width:76px; height:15px;">MORE</a></dd>
</dl>