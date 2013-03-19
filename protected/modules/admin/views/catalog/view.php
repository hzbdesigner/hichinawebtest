
<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/news/_aside',array('action'=>'catalog'));?>
	</div>

	<div class='span10'>
		<p class="text-success">
			<a href="<?php echo $this->createUrl('/admin/catalog'); ?>">返回</a>
		</p>
		<hr />
		
		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'cid',
				'title',
			),
		)); ?>
	</div>

</div>