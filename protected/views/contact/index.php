
<div class="banner tc" style="height:253px;">
	<img  src="<?php echo Yii::app()->baseUrl; ?>/images/banner/sub-connect.jpg"/>
</div>
<div class="i-modules  center-h bg-white cf">
	
	<?php
	echo $this->renderPartial('aside');
	?>
   <div class="sub-content fl fs14 font-hua cf clear-reset"  style="width:675px;color:#444;" >
	<div class="fs20 color-bluelight" style="border-left:2px solid #1980ab;line-height:20px;padding-left:5px;border-bottom:1px dotted #ddd;padding-bottom:3px;margin-top:2px;">
	<?php
		if( $this->action->id == 'local'){
			echo '各地首代';
		}elseif( $this->action->id == 'job'){
			echo '人员招聘';
		}else{
			echo '联系方式';
		}
		?>
	</div>
	<?php
	echo $sub_content;
	?>
   </div>
</div>