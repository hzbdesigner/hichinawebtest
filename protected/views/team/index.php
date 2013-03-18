<div class="banner tc" style="height:253px;">
	<img  src="<?php echo Yii::app()->baseUrl; ?>/images/banner/sub-team.jpg"/>
</div>
<div class="i-modules  center-h bg-white cf">
	
	<?php
	echo $this->renderPartial('aside');
	?>
    <div class="sub-content fl fs14 font-hua cf"  style="width:675px;color:#444;" >
	<?php
	echo $sub_content;
	?>
   </div>
</div>