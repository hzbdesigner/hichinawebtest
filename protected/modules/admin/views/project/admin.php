<div class='row'>
<div class='span2'>
	<?php $this->renderPartial('aside',array('action'=>'index'));?>
</div>

<div class='span10'>
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
					标题
				</th>
				<th>
					副标题
				</th>
				<th>
					链接
				</th>
				<th>
					简介
				</th>
				<th>
					管理
				</th>
			</tr>
		</thead>
		<tbody>
		<?php
		foreach( $projects as $prj ){
			if( mb_strlen( $prj[description] ) > 20 ){
				$prj[description] = mb_substr( $prj[description], 0, 20 , 'utf-8').'...';
			}
				
			$update_url = $this->createUrl('/admin/project/update?id=').$prj[cid];
			echo <<<EOD
			<tr id='tr_$prj[cid]'>
				<td>
					<img src = '$prj[logo]' />
				</td>
				<td>
					$prj[title]
				</td>
				<td>
					$prj[subtitle]
				</td>
				<td>
					$prj[link]
				</td>
				<td>
					$prj[description]
				</td>
				<td>
					<a href='#' class='delete_prj_btn' cid=$prj[cid]>删除</a>
					/
					<a href='$update_url' class='update_prj_btn'>修改</a>
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
		$('.delete_prj_btn').click(function(){
			if( confirm('你确定删除？') ){
				cid = $(this).attr('cid');
				url = '<?php echo $this->createUrl('/admin/project/delete');?>';
				$.get(url,{cid:cid},function(res){
					res = eval('('+res+')');
					if( res.error ){
						alert( res.msg );
					}else{
						alert( res.msg );
						$('#tr_'+cid).fadeOut();
					}
				});
			}
		});
	});
</script>

</div>