<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/user/_aside',array('action'=>'index'));?>
	</div>

	<div class='span10'>
		<?php
		if( $error ){
			echo "<div class='alert alert-error'><button type='button' class='close' data-dismiss='alert'>X</button>$error</div>";
		}
		?>

		<?php $this->widget('zii.widgets.grid.CGridView', array(
			'id'=>'user-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
				'uid',
				'username',
				'password',
				'email',
				array(
					'class'=>'CButtonColumn',
				),
			),
		)); ?>

	</div>
</div>