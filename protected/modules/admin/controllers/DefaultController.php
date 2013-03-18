<?php

class DefaultController extends Controller
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
				'actions'=>array( 'index', 'login'),
				'users'=>array('*'),
			),
			array('allow',
				'actions'=>array('logout'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	//后台首页
	public function actionIndex()
	{
		if( !Yii::app()->user->isGuest ) {
			$this->redirect($this->createUrl('/admin/news'));
		}else{
			$this->render('index');
		}
		
	}
	
	//用户登陆
	public function actionLogin()
	{
		$_POST['LoginForm']['password'] = md5( $_POST['LoginForm']['password'] );
		if( $_POST['LoginForm']['rememberMe'] ){
			$_POST['LoginForm']['rememberMe'] = true;
		}else{
			$_POST['LoginForm']['rememberMe'] = false;
		}
		$model=new LoginForm;
		$model->attributes = $_POST['LoginForm'];
		//print_r( $model );
		// validate user input and redirect to the previous page if valid
		if($model->validate() && $model->login()){
			$user = User::model()->findByPk( Yii::app()->user->id );
			$this->redirect( $this->createUrl('/admin/news') );
		}else{
			//print_r( $model->errors );
			$error = '邮箱 或 密码错误！';
			$this->render('index',array(
				'error'=>$error,
			));
		
		}
	}
	
	//退出登陆
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect( $this->createUrl('/admin') );
		//$this->redirect(Yii::app()->homeUrl);
	}
	
	//出错
	public function actionError( $msg = '出错啦~请联系管理员~' ){
		$this->pageTitle = '错误';
		$this->render('error',array(
			'msg'=>$msg,
		));
	}
}