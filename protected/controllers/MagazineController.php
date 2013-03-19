<?php

class MagazineController extends Controller
{
	public $layout='main';
	
	public function actionIndex()
	{
		$catalogs = Catalog::model()->findAll();
		$aside = $this->renderPartial('/news/aside',array(
			'catalogs'=>$catalogs,
		),true);
		
		$sub_content = $this->renderPartial('index',array(
		),true);
		
		$this->render('/news/index',array(
			'sub_content'=>$sub_content,
			'aside'=>$aside,
		));
		
	}
	
	//查看某一期杂志
	public function actionView()
	{
		$catalogs = Catalog::model()->findAll();
		$aside = $this->renderPartial('/news/aside',array(
			'catalogs'=>$catalogs,
		),true);
		
		$sub_content = $this->renderPartial('view',array(
		),true);
		
		$this->render('/news/index',array(
			'sub_content'=>$sub_content,
			'aside'=>$aside,
		));
		
	}
	
}