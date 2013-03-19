<div class="clear-reset" style='width:675px;'>

	<div class="tc fs20 font-hua" style="margin-top:15px; color:#000;"><?php echo $article[title]; ?></div>
	<p class="tc fs12 font-hua mt10" style="color:#777;">
	发布者：<?php echo $article[author][username]; ?> &nbsp;&nbsp;&nbsp;发布时间：<?php echo $article[dateline]; ?> &nbsp;&nbsp;&nbsp;阅读：<?php echo $article[readnum]; ?> 人
	</p>
	<div class="" style="border-bottom:1px solid #bbb;  height:2px;margin:5px 25px;margin-top:15px;"></div>

	<div class="font-hua" style="color:#444;">
		<?php echo $article[content]; ?>
	</div>

</div>