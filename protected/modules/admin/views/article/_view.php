<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('aid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->aid), array('view', 'id'=>$data->aid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cid')); ?>:</b>
	<?php echo CHtml::encode($data->cid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($data->uid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($data->title); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('content')); ?>:</b>
	<?php echo CHtml::encode($data->content); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('dateline')); ?>:</b>
	<?php echo CHtml::encode($data->dateline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('isshow')); ?>:</b>
	<?php echo CHtml::encode($data->isshow); ?>
	<br />


</div>