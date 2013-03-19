<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'article-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'aid'); ?>
		<?php echo $form->textField($model,'aid'); ?>
		<?php echo $form->error($model,'aid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cid'); ?>
		<?php echo $form->textField($model,'cid'); ?>
		<?php echo $form->error($model,'cid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'uid'); ?>
		<?php echo $form->textField($model,'uid'); ?>
		<?php echo $form->error($model,'uid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>1024)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'content'); ?>
		<?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'content'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'dateline'); ?>
		<?php echo $form->textField($model,'dateline'); ?>
		<?php echo $form->error($model,'dateline'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'isshow'); ?>
		<?php echo $form->textField($model,'isshow'); ?>
		<?php echo $form->error($model,'isshow'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->