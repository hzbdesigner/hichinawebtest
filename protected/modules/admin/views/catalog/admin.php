
<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/news/_aside',array('action'=>'catalog'));?>
	</div>

	<div class='span10'>
		
		<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>×</button>$error</div>";
		}
		?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'catalog-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'cid',
				'title',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>
		<hr />
		<div>
			<a class='btn btn-primary pull-right' href="<?php echo $this->createUrl('/admin/catalog/create');?>">新建分类</a>
		</div>
	</div>

</div>
