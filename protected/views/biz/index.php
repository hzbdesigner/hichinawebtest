<div class="banner tc" style="height:253px;">
	<img  src="<?php echo Yii::app()->baseUrl; ?>/images/banner/sub-business.jpg"/>
	
</div>
<div class="i-modules  center-h bg-white cf">
	
	<?php
	echo $this->renderPartial('aside');
	?>
   <div class="sub-content fl  cf "  style="width:675px;" >
	<div class="sub-content fl fs14 font-hua cf "  style="width:675px;color:#444;" >
		<div class="fs20 color-bluelight" style="margin-bottom:15px; border-left:2px solid #1980ab;line-height:20px;padding-left:5px;border-bottom:1px dotted #ddd;padding-bottom:3px;margin-top:2px;">
		
		<?php
		if( $this->action->id == 'finance'){
			echo '融资体系';
		}elseif( $this->action->id == 'serve'){
			echo '服务体系';
		}elseif( $this->action->id == 'control'){
			echo '风控体系';
		}else{
			echo '投资体系';
		}
		?>
		
	</div>
	
	<?php
	echo $sub_content;
	?>
   </div>
</div>