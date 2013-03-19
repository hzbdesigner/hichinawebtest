<?php

class AboutController extends Controller
{
	public $layout = 'main';
	public function actionIndex()
	{
		$sub_content = $this->renderPartial('company',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionBrief()
	{
		$sub_content = $this->renderPartial('brief',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionIndustry()
	{
		$sub_content = $this->renderPartial('industry',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionStrength()
	{
		$sub_content = $this->renderPartial('strength',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionSpirit()
	{
		$sub_content = $this->renderPartial('spirit',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionCulture()
	{
		$sub_content = $this->renderPartial('culture',array(),true);
		
		$this->render('index',array(
			'sub_content'=>$sub_content,
		));
	}
	
}