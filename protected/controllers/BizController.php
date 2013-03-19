<?php

class BizController extends Controller
{
	public $layout = 'main';
	public function actionIndex()
	{
		$sub_content = $this->renderPartial('invest',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}

	public function actionFinance()
	{
		$sub_content = $this->renderPartial('finance',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	public function actionServe()
	{
		$sub_content = $this->renderPartial('serve',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	public function actionControl()
	{
		$sub_content = $this->renderPartial('control',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
	
	
}