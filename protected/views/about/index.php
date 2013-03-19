<div class="banner tc" style="height:253px;">
        <img  src="<?php echo Yii::app()->baseUrl; ?>/images/banner/banner-aboutus.jpg"/>
    </div>
    <div class="i-modules  center-h bg-white cf">
    	<?php
		echo $this->renderPartial('aside');
		?>
   
       <div class="sub-content fl fs14 font-hua cf clear-reset"  style="width:675px;color:#444;" >
		<div class="fs20 color-bluelight" style="border-left:2px solid #1980ab;line-height:20px;padding-left:5px;border-bottom:1px dotted #ddd;padding-bottom:3px;margin-top:2px;">
		<?php
		if( $this->action->id == 'brief'){
			echo '大事记';
		}elseif( $this->action->id == 'industry'){
			echo '产业布局';
		}elseif( $this->action->id == 'strength'){
			echo '核心优势';
		}elseif( $this->action->id == 'spirit'){
			echo '投资理念';
		}elseif( $this->action->id == 'culture'){
			echo '企业文化';
		}else{
			echo '公司简介';
		}
		?>
	</div>
	   <?php
		echo $sub_content;
		?>
       
    </div>