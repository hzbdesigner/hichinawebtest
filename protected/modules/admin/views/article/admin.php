<div class='row'>

	<div class='span2' >
		<?php $this->renderPartial('/news/_aside',array('action'=>'admin'));?>
	</div>

	<div class='span10'>
		<div class='row-fluid'>
			统计信息 <?php echo '第 '.$current_page.' 页 '.(($current_page-1)*$pages->pageSize+1).'-'.$current_page*$pages->pageSize.' 条记录 / 总共 '.$pages->itemCount.'篇文章' ?>
		</div>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>
						ID
					</th>
					<th>
						标题
					</th>
					<th>
						分类
					</th>
					<th>
						录入
					</th>
					<th>
						日期
					</th>
					<th>
						发布
					</th>
					<th>
						操作
					</th>
				</tr>
			</thead>
			<tbody>
			<?php
			foreach( $articles as $article ){
				$article[isshow] = $article[isshow] ? '是' : '否';
				$author = $article[author][username];
				$catalog = $article[catalog][title];
				if( mb_strlen( $article[title] ) > 20 ){
					$article[title] = mb_substr( $article[title], 0, 20 , 'utf-8').'...';
				}
				$update_url = $this->createUrl('/admin/article/update/id').'/'.$article[aid];
				$url = $this->createUrl('/article/view/id').'/'.$article[aid];
				echo <<<EOD
				<tr>
					<td>
						$article[aid]
					</td>
					<td>
						<a href='$url' target='_blank'>$article[title]</a>
					</td>
					<td>
						$catalog
					</td>
					<td>
						$author
					</td>
					<td>
						$article[dateline]
					</td>
					<td>
						$article[isshow]
					</td>
					<td>
						<a href='#' class='delete_article_btn' aid=$article[aid]>删除</a> / <a href='$update_url' class='update_user_btn'>修改</a>
					</td>
				</tr>
EOD;
			}
			?>
			</tbody>
		</table>

		<?php  $this->widget('CLinkPager',array(
			'pages'=>$pages,
			'firstPageLabel' => '首页',
			'lastPageLabel' => '末页',
			'nextPageLabel' => '下一页',
			'prevPageLabel' => '上一页',
			'header' => '',
			'footer' => '',
		)); ?>
	</div>

</div>

<script type="text/javascript">
	$('.delete_article_btn').click(function(){
		if( confirm('你确定删除？不可逆！') ){
			var aid = $(this).attr('aid');
			window.location = '<?php echo $this->createUrl('/admin/article/delete/id');?>/'+aid;
		}
	});
</script>