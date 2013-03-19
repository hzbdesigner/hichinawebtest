


<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/user/_aside',array('action'=>'update'));?>
	</div>

	<div class='span10'>
		<?php
		$this->breadcrumbs=array(
			'Users'=>array('index'),
			$model->uid,
		);

		$this->menu=array(
			array('label'=>'List User', 'url'=>array('index')),
			array('label'=>'Create User', 'url'=>array('create')),
			array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->uid)),
			array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->uid),'confirm'=>'Are you sure you want to delete this item?')),
			array('label'=>'Manage User', 'url'=>array('admin')),
		);
		?>

		<?php $this->widget('zii.widgets.CDetailView', array(
			'data'=>$model,
			'attributes'=>array(
				'uid',
				'username',
				'password',
				'email',
			),
		)); ?>

	</div>
</div>