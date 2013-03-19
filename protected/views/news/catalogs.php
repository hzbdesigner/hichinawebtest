<ul style="width:675px;">
	<?php
	foreach( $catalogs as $catalog ){
		if( $catalog[articles] ){
			echo "<li>";
			echo '<dt class="title fs18 font-hua color-black h30 lh30 mb10" style="border-bottom:2px solid #1980ab;"><span class=" inblock h30 lh30 pl10 pr10"  style="border-bottom:2px solid #cb8619;">'.$catalog[title].'</span></dt>';
			
			$i = 0;
			foreach($catalog[publishes] as $a){
				if( $i++ > 3 ){
					break;
				}
				echo '<dd class="fs12 font-hua color-black pt5 pb5 ml20" style="border-bottom:1px dotted #999;"><a href="'.$this->createUrl('/article/view/id').'/'.$a[aid].'" class="pl5 hover-blue">'.$a[title].'</a><span class="fr inblock " style="font-size:12px; color:#999;">'.substr( $a[dateline], 0, 10).'</span></dd>';
			}
			echo '<dd class="fs12 font-hua color-black pt5 pb5 ml20 mt10"><a href="'.$this->createUrl('/news/catalog/id').'/'.$catalog[cid].'" class="fr more-bg color-white tc " style="width:76px; height:15px;">MORE</a></dd>';
			echo "</li>";
		}
	}
	?>
</ul>