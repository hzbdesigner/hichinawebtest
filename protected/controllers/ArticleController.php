<?php

class ArticleController extends Controller
{
	public $layout = 'main';
	
	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionView( $id )
	{
		$article = Article::model()->findByPk( $id );
		
		$catalogs = Catalog::model()->findAll();
		$aside = $this->renderPartial('/news/aside',array(
			'catalogs'=>$catalogs,
			'article'=>$article,
		),true);
		
		$article->readnum += 1;
		$article->save();
		
		$sub_content = $this->renderPartial('view',array(
			'article'=>$article,
		),true);
		
		$this->render('/news/index',array(
			'aside'=>$aside,
			'sub_content'=>$sub_content,
		));
	}
}