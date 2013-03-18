<div class="banner h600">
	<div id="slides">
		<ul class="slides_container">
			<li class="tc pr w1280 center-h">
				<img src="<?php echo $banner[banner1]?>"  />
				<div class="caption cap1 w960 center-hv-pa"  >
					<object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="400" height="306" id="FlashID" title="" class="fr center-v-pa" style=" right:50px;*right:-150px;*top:50%;*margin-top:-150px;">
					  <param name="movie" value="fla.swf" />
					  <param name="AllowScriptAccess" value="always" />
					  <param name="quality" value="high" />
					  <param name="wmode" value="transparent" />
					  <param name="swfversion" value="6.0.65.0" />
					  <!-- 此 param 标签提示使用 Flash Player 6.0 r65 和更高版本的用户下载最新版本的 Flash Player。如果您不想让用户看到该提示，请将其删除。 -->
					  <param name="expressinstall" value="Scripts/expressInstall.swf" />
					  <!-- 下一个对象标签用于非 IE 浏览器。所以使用 IECC 将其从 IE 隐藏。 -->
					  <!--[if !IE]>-->
					  <object type="application/x-shockwave-flash" data="<?php echo Yii::app()->baseUrl?>/fla.swf" width="400" height="306">
						<!--<![endif]-->
						<param name="quality" value="high" />
						<param name="AllowScriptAccess" value="always" />
						<param name="wmode" value="transparent" />
						<param name="swfversion" value="6.0.65.0" />
						<param name="expressinstall" value="<?php echo Yii::app()->baseUrl?>/Scripts/expressInstall.swf" />
						<!-- 浏览器将以下替代内容显示给使用 Flash Player 6.0 和更低版本的用户。 -->
						<div>
						  <h4>此页面上的内容需要较新版本的 Adobe Flash Player。</h4>
						  <p><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/<?php echo Yii::app()->baseUrl?>/images/shared/download_buttons/get_flash_player.png" alt="获取 Adobe Flash Player" width="112" height="33" /></a></p>
					  </div>
						<!--[if !IE]>-->
					</object>
					  <!--<![endif]-->
				  </object>
				</div>
			</li>
			<li class="tc pr w1280 center-h">
				<img src="<?php echo $banner[banner2]?>"  />
				<div class="caption cap2 w960 center-hv-pa"  >
				   <img class="fl  center-v-pa" src="<?php echo Yii::app()->baseUrl?>/images/banner/caption2.png"  style="left:50px;width+348px;*top:50%;*margin-top:-100px;*left:160px;"/>
				</div>
			</li>
			<li class="tc pr w1280 center-h">
				<img src="<?php echo $banner[banner3]?>"  />
				<div class="caption cap1 w960 center-hv-pa"  >
					<img class="fl  center-v-pa" src="<?php echo Yii::app()->baseUrl?>/images/banner/caption3.png"  style="left:50px;width+348px;*top:50%;*margin-top:-100px;*left:160px;"/>
				</div>
			</li>
			<li class="tc pr w1280 center-h">
				<img src="<?php echo $banner[banner4]?>"  />
				<div class="caption cap1 w960 center-hv-pa"  >
					<img class="fl  center-v-pa" src="<?php echo Yii::app()->baseUrl?>/images/banner/caption4.png"  style="left:50px; width+348px;*top:50%;*margin-top:-100px;*left:160px;"/>
				</div>
			</li>
		</ul>
		<div class="paginations w960 center-h-pa" style="box-shadow:2px 0px 6px rgba(0,0,0,0.20),-2px 0px 6px rgba(0,0,0,0.20);">
			<ul class="cf pagination ">
				<li class="fl bg-white">
					<p class="">品牌溯源</p>
					<a href="#"><img width=85 height=50 class="inblock img-grey" src="<?php echo $banner[banner1]?>"/><table class="inblock ml5"><tr><td class="h50"><img src="<?php echo Yii::app()->baseUrl?>/images/banner/pagi12.png"/></td></tr></table></a></li>
				<li class="fl bg-white">
					<p class="">控股股东</p>
					<a href="#"><img width=85 height=50 class="inblock img-grey" src="<?php echo $banner[banner2]?>"/><table class="inblock ml5"><tr><td class="h50"><img style="margin-left:25px;" src="<?php echo Yii::app()->baseUrl?>/images/banner/pagi22.png"/></td></tr></table></a></li>
				<li class="fl bg-white">
					<p class="">管理团队</p>
				<a href="#"><img width=85 height=50 class="inblock img-grey" src="<?php echo $banner[banner3]?>"/><table class="inblock ml5"><tr><td class="h50"><img style="margin-left:15px;" src="<?php echo Yii::app()->baseUrl?>/images/banner/pagi32.png"/></td></tr></table></a></li>
				<li class="fl bg-white">
					<p class="">传承创新</p>
				<a href="#"><img width=85 height=50 class="inblock img-grey" src="<?php echo $banner[banner4]?>"/><table class="inblock ml5"><tr><td class="h50"><img style="margin-left:20px;" src="<?php echo Yii::app()->baseUrl?>/images/banner/pagi42.png"/></td></tr></table></a></li>
			</ul>
		</div>
	</div>
	
</div>
<div class="i-modules  center-h bg-white cf" style="box-shadow:2px 0px 6px rgba(0,0,0,0.20),-2px 0px 6px rgba(0,0,0,0.20);">
	<dl class="fl i-m-about">
		<dt><a href="<?php echo $this->createUrl('/about');?>"><em class="font-hua fs16 color-blue " style="font-weight:bold;">公司介绍</em><em class=" fs12 color-999 ml15 font-hua">ABOUT</em><!--img src="<?php echo Yii::app()->baseUrl?>/images/m-1-title.png" /--></a></dt>
		<dd class="fs12 mt25 lh15" style="color:#666;">华夏润石致力于打造以"投资＋投行"为品牌特色的综合投资服务平台。华夏润石延续控股股东新华联集团22年的成功投资策略，以"资本+资源+资历+智慧+治理"为核心理念的价值导航模式，努力寻找产业转型升级中的结构性机会，发现、挖掘并提升企业价值，坚持支持创业创新，着力培育行业龙头。始终强调"精品投资、只投精品"。</dd>
	</dl>
	<div class="i-divider fl"></div>
	<dl class="fl  cf i-m-case" >
		<dt><a href="<?php echo $this->createUrl('/case');?>"><em class="font-hua fs16 color-blue" style="font-weight:bold;">投资案例</em><em class=" fs12 color-999 ml15 font-hua">CASE</em><!--img src="<?php echo Yii::app()->baseUrl?>/images/m-2-title.png" /--></a></dt>
		<dd class="mt15">
			<table>
				<tr>
					<td><a href="http://www.jinliufu.net/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case1.png" /></a></td>
					<td><a href="http://www.macrolink.com.cn/pdlist.php?id=6" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case2.png"/></a></td>
					<td><a href="http://www.vatsliquor.com/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case3.png"/></a></td>
				</tr>
				<tr>
					<td><a href="http://www.torking.com.cn/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case4.png" /></a></td>
					<td><a href="http://www.ycccb.com/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case5.png"/></a></td>
					<td><a href="http://www.cpic.com.cn/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case6.png"/></a></td>
				</tr>
				<tr>
					<td><a href="http://www.creatresources.com/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case7.png" /></a></td>
					<td><a href="http://www.taizinai.com.cn/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case8.png"/></a></td>
					<td><a href="http://www.dongyuechem.com/" target="_blank"><img src="<?php echo Yii::app()->baseUrl?>/images/case/case9.png"/></a></td>
				</tr>
			</table>
		</dd>
	</dl>
	<div class="i-divider fl"></div>
	<dl class="fl i-m-news" >
		<dt ><a href="<?php echo $this->createUrl('/news');?>"><em class="font-hua fs16 color-blue " style="font-weight:bold;">公司新闻</em><em class=" fs12 color-999 ml15 font-hua">NEWS</em><!--img src="<?php echo Yii::app()->baseUrl?>/images/m-3-title.png" /--></a></dt>
		<ul class="mt25 fs12" >
			<?php
				foreach( $articles as $article ){
					if( mb_strlen($article[title]) > 15 ){
						$title = mb_substr($article[title], 0, 17, 'utf-8').'...';
					}else{
						$title = $article[title];
					}
					
					echo '<li class="cf "><a href="'.$this->createUrl('/article/view/id').'/'.$article[aid].'" class="cf asblock fl hover-blue lh15" style="width:220px; overflow:hidden;">'.$title.'</a><span class="time asblock fr">'.substr( $article[dateline],0, 10 ).'</span></li>';
				}
			?>
		</ul>
	</dl>
</div>