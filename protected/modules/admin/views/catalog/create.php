
<div class='row'>

	<div class='span2'>
		<?php $this->renderPartial('/news/_aside',array('action'=>'catalog'));?>
	</div>

	<div class='span10'>
		<p class="text-success">
			新建分类
		</p>
		<hr />
		<div class="form">
			<form id="catalog-form" action="<?php echo $this->createUrl('/admin/catalog/create')?>" method="post">
				<div class="control-group">
					<label class="control-label" for="inputEmail">
						标题：
					</label>
					<div class="controls">
						<input size="60" maxlength="512" name="Catalog[title]" id="Catalog_title" type="text">
					</div>
				</div>
			
				<div>
					
					<input type="submit" name="yt0" value="保存">
				</div>
			</form>
		</div>
	</div>

</div>