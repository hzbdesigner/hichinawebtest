<?php

class StoryController extends Controller
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
				'actions'=>array('index','view','create','update','admin','delete'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array(),
				'users'=>array('admin'),
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
		$msg = false;
		if(isset($_POST['Story']))
		{
			if (!empty($_FILES)){
				// 验证图片后缀
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['logo']['name']);
				
				$ext = strtolower( $fileParts['extension'] );
				if ( in_array( $ext ,$fileTypes ) ){
					$file_name = 'logo_'.time().rand(0,999).'.'.$ext;
					$avatar_file_path =  Yii::app()->basePath.'/../images/story/'.$file_name;
					move_uploaded_file( $_FILES['logo']['tmp_name'] , $avatar_file_path);
					
					$_POST['Story']['logo'] = 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->baseUrl.'/images/story/'.$file_name;
					
					if( $_POST['Story']['title'] ){
						$model=new Story;
						$model->attributes=$_POST['Story'];
						if($model->save()){
							$this->redirect(array('admin'));
						}else{
							$msg = '保存失败！';
						}
					}else{
						$msg = '请填写名称！';
					}
				}else{
					$msg = '请上传 png/jpg/gif 格式的图片LOGO';
				}
			}else{
				$msg = '请上传LOGO图片';
			}	
		}

		$this->render('create',array(
			'model'=>$model,
			'msg'=>$msg,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$msg = false;
		$model=$this->loadModel($id);
		if(isset($_POST['Story']))
		{
			if ( $_FILES['logo']['name'] ){
				// 验证图片后缀
				$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
				$fileParts = pathinfo($_FILES['logo']['name']);
				
				$ext = strtolower( $fileParts['extension'] );
				if ( in_array( $ext ,$fileTypes ) ){
					$file_name = 'logo_'.time().rand(0,999).'.'.$ext;
					$avatar_file_path =  Yii::app()->basePath.'/../images/story/'.$file_name;
					move_uploaded_file( $_FILES['logo']['tmp_name'] , $avatar_file_path);
					
					$_POST['Story']['logo'] = 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->baseUrl.'/images/story/'.$file_name;

				}else{
					$msg = '请上传 png/jpg/gif 格式的图片LOGO';
				}
			}
			if( !$msg ){
				if( $_POST['Story']['title'] ){
					$model->attributes=$_POST['Story'];
					if($model->save()){
						$msg = '保存成功！';
					}else{
						$msg = '保存失败！';
					}
				}else{
					$msg = '请填写标题！';
				}
			}
		}

		$this->render('update',array(
			'model'=>$model,
			'msg'=>$msg,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$story = Story::model()->findByPk( intval($id) ); 
		if( $story ){
			$story->delete();
		}
		$result['error'] = 0;
		$result['msg'] = '删除成功';
		
		echo CJSON::encode($result);
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$this->redirect( $this->createUrl('/admin/story/admin') );
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$param = array(
			'order'=>'id DESC',
		);
		$criteria = new CDbCriteria($param);
		//记录总数
		$count = Story::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 20;
		$pages->applyLimit( $criteria );
		
		$page_num = ceil( $count/$pages->pageSize );
		$storys = Story::model()->findAll($criteria);
		
		$this->render('admin',array(
			'storys' => $storys,
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
		$model=Story::model()->findByPk($id);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='story-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
