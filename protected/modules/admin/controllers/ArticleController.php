<?php

class ArticleController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='main';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('index','view','create','update','admin','delete','my'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new Article;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$error = '';
		if(isset($_POST['Article']))
		{
			//print_r( $_POST );
			//exit; 
			$model->attributes=$_POST['Article'];
			$model->uid = Yii::app()->user->id;

			if($model->save()){
				$this->redirect(array('admin','id'=>$model->aid));
			}else{
				$error = '请正确填写文章标题、分类、正文~！';
			}
		}
		$catalogs = Catalog::model()->findAll();
		$this->render('create',array(
			'catalogs'=>$catalogs,
			'model'=>$model,
			'error'=>$error,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$error = '';
		if(isset($_POST['Article']))
		{
			//print_r( $_POST );
			//exit; 
			$model->attributes=$_POST['Article'];
			if($model->save()){
				$this->redirect( $this->createUrl('/admin/article/admin') );
			}else{
				$error = '请正确填写文章标题、分类、正文~！';
			}
				
		}
		
		$catalogs = Catalog::model()->findAll();
		$this->render('update',array(
			'catalogs'=>$catalogs,
			'model'=>$model,
			'error'=>$error,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();
		$this->redirect( $this->createUrl('/admin/article/admin') );
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Article');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$param = array(
			'order'=>'aid desc',
		);
		$criteria = new CDbCriteria($param);
		//记录总数
		$count = Article::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 20;
		$pages->applyLimit( $criteria );
		
		$page_num = ceil( $count/$pages->pageSize );
		$articles = Article::model()->findAll($criteria);
		
		$this->render('admin',array(
			'articles' => $articles,
			'pages' => $pages,
			'current_page' => $current_page,
		));
		
	}

	public function actionMy()
	{
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$uid = isset( $_REQUEST['id'] ) ? $_REQUEST['id'] : Yii::app()->user->id;
		$param = array(
			'condition'=>'uid = '.$uid,
			'order'=>'aid desc',
		);
		$criteria = new CDbCriteria($param);
		//记录总数
		$count = Article::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 20;
		$pages->applyLimit( $criteria );
		
		$page_num = ceil( $count/$pages->pageSize );
		$articles = Article::model()->findAll($criteria);
		
		$this->render('admin',array(
			'articles' => $articles,
			'pages' => $pages,
			'current_page' => $current_page,
		));
		
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Article::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='article-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
