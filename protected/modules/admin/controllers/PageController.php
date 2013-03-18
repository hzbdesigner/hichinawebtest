<?php

class PageController extends Controller
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
				'actions'=>array('index', 'home', 'about', 'biz', 'team', 'case', 'contact'),
				'users'=>array('@'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}
	
	public function actionIndex()
	{
		$this->redirect( $this->createUrl('/admin/page/home') );
	}
	
	//首页
	public function actionHome()
	{
		$msg = false;
		$model = Banner::model()->findByPk( 1 );
		
		if(isset($_POST['Banner']))
		{
			for( $i = 1; $i <= 4; $i++ ){
				$b = 'banner'.$i;
				if ( $_FILES[$b]['name'] ){
					// 验证图片后缀
					$fileTypes = array('jpg','jpeg','gif','png'); // File extensions
					$fileParts = pathinfo($_FILES[$b]['name']);
					
					$ext = strtolower( $fileParts['extension'] );
					if ( in_array( $ext ,$fileTypes ) ){
						$file_name = 'banner_'.time().rand(0,999).'.'.$ext;
						$avatar_file_path =  Yii::app()->basePath.'/../images/banner/'.$file_name;
						move_uploaded_file( $_FILES[$b]['tmp_name'] , $avatar_file_path);
						
						$_POST['Banner'][$b] = 'http://'.$_SERVER['HTTP_HOST'].Yii::app()->baseUrl.'/images/banner/'.$file_name;

					}else{
						$msg = '请上传 png/jpg/gif 格式的图片LOGO';
						break;
					}
				}
			}
			if( !$msg ){
				$model->attributes=$_POST['Banner'];
				if($model->save()){
					$msg = '保存成功！';
				}else{
					print_r( $model->errors );
					$msg = '保存失败！';
				}
			}
		}
		
		$this->render('home',array(
			'model'=>$model,
			'msg'=>$msg,
		));
	}
	
	//关于我们
	public function actionAbout( $p='company' )
	{
		$file = Yii::app()->basePath."\\views\\about\\$p.php";
		$msg = false;
		if( isset($_REQUEST['page_content']) ){
			file_put_contents(  $file, $_REQUEST['page_content']);
			$msg = '保存成功！';
		}

		$content = file_get_contents( $file );
		$sub_page = $this->renderPartial('subpage', array(
			'content'=>$content,
			'p'=>$p,
		),true);
		
		$this->render('about',array(
			'sub_page'=>$sub_page,
			'msg'=>$msg,
			'p'=>$p,
		));
	}
	
	//公司业务
	public function actionBiz( $p='invest' )
	{
		$file = Yii::app()->basePath."\\views\\biz\\$p.php";
		$msg = false;
		if( isset($_REQUEST['page_content']) ){
			file_put_contents(  $file, $_REQUEST['page_content']);
			$msg = '保存成功！';
		}

		$content = file_get_contents( $file );
		$sub_page = $this->renderPartial('subpage', array(
			'content'=>$content,
			'p'=>$p,
		),true);
		
		$this->render('biz',array(
			'sub_page'=>$sub_page,
			'msg'=>$msg,
			'p'=>$p,
		));
	}
	
	//联系我们
	public function actionContact( $p='way' )
	{
		$file = Yii::app()->basePath."\\views\\contact\\$p.php";
		$msg = false;
		if( isset($_REQUEST['page_content']) ){
			file_put_contents(  $file, $_REQUEST['page_content']);
			$msg = '保存成功！';
		}

		$content = file_get_contents( $file );
		$sub_page = $this->renderPartial('subpage', array(
			'content'=>$content,
			'p'=>$p,
		),true);
		
		$this->render('contact',array(
			'sub_page'=>$sub_page,
			'msg'=>$msg,
			'p'=>$p,
		));
	}
	
	//管理团队
	public function actionTeam( $p='cofounder' )
	{
		$file = Yii::app()->basePath."\\views\\team\\$p.php";
		$msg = false;
		if( isset($_REQUEST['page_content']) ){
			file_put_contents(  $file, $_REQUEST['page_content']);
			$msg = '保存成功！';
		}

		$content = file_get_contents( $file );
		$sub_page = $this->renderPartial('subpage', array(
			'content'=>$content,
			'p'=>$p,
		),true);
		
		$this->render('team',array(
			'sub_page'=>$sub_page,
			'msg'=>$msg,
			'p'=>$p,
		));
	}
	
	//投资案例
	public function actionCase( $p='story' )
	{
		$file = Yii::app()->basePath."\\views\\case\\$p.php";
		$msg = false;
		if( isset($_REQUEST['page_content']) ){
			file_put_contents(  $file, $_REQUEST['page_content']);
			$msg = '保存成功！';
		}

		$content = file_get_contents( $file );
		$sub_page = $this->renderPartial('subpage', array(
			'content'=>$content,
			'p'=>$p,
		),true);
		
		$this->render('case',array(
			'sub_page'=>$sub_page,
			'msg'=>$msg,
			'p'=>$p,
		));
	}
}