<?php

class NewsController extends Controller
{
	public $layout = 'main';
	public function actionIndex()
	{
		$catalogs = Catalog::model()->findAll();
		$aside = $this->renderPartial('/news/aside',array(
			'catalogs'=>$catalogs,
		),true);
		
		$sub_content = $this->renderPartial('catalogs',array(
			'catalogs'=>$catalogs,
		),true);
		
		$this->render('index',array(
			'aside'=>$aside,
			'sub_content'=>$sub_content,
		));
	}
	
	public function actionCatalog( $id )
	{
		$catalogs = Catalog::model()->findAll();
		$aside = $this->renderPartial('/news/aside',array(
			'catalogs'=>$catalogs,
		),true);
		$catalog = Catalog::model()->findByPk( $id );
		
		$param = array(	
			'condition'=>'isshow = 1 AND cid = '.$id,
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
		
		$sub_content = $this->renderPartial('catalog',array(
			'catalog'=>$catalog,
			'articles'=>$articles,
			'pages'=>$pages,
		),true);
		
		$this->render('index',array(
			'aside'=>$aside,
			'sub_content'=>$sub_content,
		));
	}
	
	
	public function actionSearch()
	{
		$catalogs = Catalog::model()->findAll();
		$aside = $this->renderPartial('/news/aside',array(
			'catalogs'=>$catalogs,
		),true);
		
		
		$key = $_REQUEST['k'];
		
		$param = array(	
			'condition'=>"isshow = 1 AND title LIKE '%$key%'",
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
		
		$sub_content = $this->renderPartial('search',array(
			'catalog'=>$catalog,
			'articles'=>$articles,
			'count'=>$count,
			'key'=>$key,
			'pages'=>$pages,
		),true);
		
		$this->render('index',array(
			'aside'=>$aside,
			'sub_content'=>$sub_content,
		));
	}
	
}