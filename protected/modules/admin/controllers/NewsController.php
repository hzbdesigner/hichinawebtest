<?php

class NewsController extends Controller
{
	public $layout = 'main';
	
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}
	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('index', 'admin', 'catalog', 'create'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$catalog = Catalog::model()->findAll();
		//print_r( $catalog );
		//exit;
		$this->render('index', array(
			'catalog'=>$catalog,
		));
	}

	public function actionAdmin()
	{
		$this->render('admin');
	}

	public function actionCatalog()
	{
		$this->render('catalog');
	}

	
}