<form action="<?php echo $this->createUrl('/admin/page').'/'.$this->action->id.'?p='.$p; ?>" method='POST' style='width:710px'>
	<div class="control-group">
		<div class="controls">
			<script type="text/plain" id="article_content">
				<?php
				echo $content;
				?>
			</script>
		</div>
	</div>
	<hr />
	<div class='row-fluid'>
		<div class='span2'>
			<div class="control-group">
				<label class="control-label" for="inputEmail">
					
				</label>
				<div class="controls">
					<button class="btn btn-large btn-primary btn-block" type="submit">保存</button>
				</div>
			</div>
			
		</div>
	</div>
</form>