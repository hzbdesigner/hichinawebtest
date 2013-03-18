<?php

class TeamController extends Controller
{
	public $layout = 'main';
	public function actionIndex( $type=0)
	{
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$param = array(
			//'order'=>'id DESC',
			'condition'=>" type = $type",
		);
		$criteria = new CDbCriteria($param);
		//¼ÇÂ¼×ÜÊı
		$count = Manager::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 20;
		$pages->applyLimit( $criteria );
		
		$page_num = ceil( $count/$pages->pageSize );
		$managers = Manager::model()->findAll($criteria);
		
		$sub_content = $this->renderPartial('cofounder',array(
			'managers'=>$managers,
			'pages' => $pages,
		),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}

	public function actionView( $id )
	{
		$manager = Manager::model()->findByPk($id);
		$sub_content = $this->renderPartial('view',array(
			'manager'=>$manager
		),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	
}