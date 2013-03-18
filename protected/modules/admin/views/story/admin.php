<div class='row'>
<div class='span2'>
	<?php $this->renderPartial('/page/_aside',array('action'=>'story'));?>
</div>

<div class='span10'>
	<div class="row-fluid">
		<ul class="nav nav-tabs">
			<li <?php if( $this->action->id == 'admin' ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/story/admin'); ?>">
					投资故事
				</a>
			</li>
			<li <?php if( $this->action->id == 'create' ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/story/create'); ?>">
					添加
				</a>
			</li>
		</ul>
	</div>
	
	<div class='row-fluid'>
		统计信息 <?php echo '第 '.$current_page.' 页 '.(($current_page-1)*$pages->pageSize+1).'-'.$current_page*$pages->pageSize.' 条记录 / 总共 '.$pages->itemCount.' 条记录'; ?>
	</div>
	<table class="table table-striped">
		<thead>
			<tr>
				<th>
					LOGO
				</th>
				<th>
					名称
				</th>
				<th>
					副标题
				</th>
				<th>
					管理
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach( $storys as $story ){
			if( mb_strlen( $story[subtitle] ) > 20 ){
				$story[subtitle] = mb_substr( $story[subtitle], 0, 20 , 'utf-8').'...';
			}
				
			$update_url = $this->createUrl('/admin/story/update?id=').$story[id];
			echo <<<EOD
			<tr id='tr_$story[id]'>
				<td>
					<img src = '$story[logo]' />
				</td>
				<td>
					$story[title]
				</td>
				<td>
					$story[subtitle]
				</td>
				<td>
					<a href='#' class='delete_story_btn' id=$story[id]>删除</a>
					/
					<a href='$update_url' class='update_story_btn'>修改</a>
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


<script language='javascript'>
	$(function(){
		//删除
		$('.delete_story_btn').click(function(){
			if( confirm('你确定删除？') ){
				id = $(this).attr('id');
				url = '<?php echo $this->createUrl('/admin/story/delete');?>';
				$.get(url,{id:id},function(res){
					res = eval('('+res+')');
					if( res.error ){
						alert( res.msg );
					}else{
						alert( res.msg );
						$('#tr_'+id).fadeOut();
					}
				});
			}
		});
	});
</script>

</div>