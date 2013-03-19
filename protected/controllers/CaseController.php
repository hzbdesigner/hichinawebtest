<?php

class CaseController extends Controller
{
	public $layout = 'main';
	
	public function actionIndex()
	{
		$this->redirect( $this->createUrl('/case/list') );
		/* $sql = "SELECT * FROM {{project}} WHERE type = 1 ORDER BY cid DESC LIMIT 4";
		$success = Yii::app()->db->createCommand( $sql )->queryAll();
			
		$sql = "SELECT * FROM {{project}} WHERE type = 0 ORDER BY cid DESC LIMIT 4";
		$other = Yii::app()->db->createCommand( $sql )->queryAll();

		$sub_content = $this->renderPartial('case',array(
			'success'=>$success,
			'other'=>$other,
		),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		)); */
	}

	public function actionList( $type='success' )
	{
		
		if( $type == 'success' ){
			$condition = 'type = 1';
		}else{
			$condition = 'type = 0';
		}
		
		$current_page = isset( $_REQUEST['page'] )?$_REQUEST['page']:1;
		$param = array(
			'order'=>'cid DESC',
			'condition'=>$condition,
		);
		$criteria = new CDbCriteria($param);
		//记录总数
		$count = Project::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 6;
		$pages->applyLimit( $criteria );
		
		$page_num = ceil( $count/$pages->pageSize );
		$projects = Project::model()->findAll($criteria);

		$sub_content = $this->renderPartial('list',array(
			'prjs'=>$projects,
			'pages' => $pages,
		),true);
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionStory()
	{
		$param = array(	
			'order'=>'id desc',
		);
		$criteria = new CDbCriteria($param);
		//记录总数
		$count = Story::model()->count( $criteria);
		$pages = new CPagination( $count );
		$pages->pageSize = 5;
		$pages->applyLimit( $criteria );
		
		$page_num = ceil( $count/$pages->pageSize );
		$storys = Story::model()->findAll($criteria);
		
		$sub_content = $this->renderPartial('story',array(
			'storys'=>$storys,
			'pages'=>$pages,
		),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
}