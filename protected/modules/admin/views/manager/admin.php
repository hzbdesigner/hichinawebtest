<div class='row'>
<div class='span2'>
	<?php $this->renderPartial('/page/_aside',array('action'=>'manager'));?>
</div>

<div class='span10'>
	<div class="row-fluid">
		<ul class="nav nav-tabs">
			<li <?php if( $this->action->id == 'admin' && $_REQUEST[type] == 0 ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/manager/admin?type=0'); ?>">
					管理团队
				</a>
			</li>
			<li <?php if( $this->action->id == 'admin' && $_REQUEST[type] == 1 ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/manager/admin?type=1'); ?>">
					专家顾问
				</a>
			</li>
			<li <?php if( $this->action->id == 'create' ){ echo "class='active'";}?>>
				<a href="<?php echo $this->createUrl('/admin/manager/create'); ?>">
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
					图片
				</th>
				<th>
					名称
				</th>
				<th>
					头衔
				</th>
				<th>
					管理
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach( $managers as $mgr ){
			if( mb_strlen( $mgr[description] ) > 20 ){
				$mgr[description] = mb_substr( $mgr[description], 0, 20 , 'utf-8').'...';
			}
				
			$update_url = $this->createUrl('/admin/manager/update?id=').$mgr[id];
			echo <<<EOD
			<tr id='tr_$mgr[id]'>
				<td>
					<img src = '$mgr[avatar]' />
				</td>
				<td>
					$mgr[name]
				</td>
				<td>
					$mgr[title]
				</td>
				<td>
					<a href='#' class='delete_mgr_btn' id=$mgr[id]>删除</a>
					/
					<a href='$update_url' class='update_mgr_btn'>修改</a>
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
		$('.delete_mgr_btn').click(function(){
			if( confirm('你确定删除？') ){
				id = $(this).attr('id');
				url = '<?php echo $this->createUrl('/admin/manager/delete');?>';
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