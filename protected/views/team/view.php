<!--cofounder sub page-->
<dt class="  title fs18 font-hua color-black h30 lh30 mb10" style="border-bottom:2px solid #1980ab;">

<span class=" inblock h30 lh30 pl10 pr10"  style="border-bottom:2px solid #cb8619;width:150px;"></span></dt>

<div class="  fl ml10 mb50 team-one" style="width:145px;">
		
	<a class="asblock" style="width:145px;height:143px;">
	<img  width="145px" height="143px" src="<?php echo $manager[avatar]; ?>" />
	</a>
	
	<div class="des tc" style="background-color:#e5e5e5;border-top:3px solid #CB8619" >
		<p class="pt5"><a class="name fs16 color-blue font-hua lh12 pt5"><?php echo $manager[name]; ?></a></p>
		<p class="name fs12  font-hua lh2 "><?php echo $manager[title]; ?></p>
	</div>
</div>

<div class=" fl ml20 pt15 clear-reset" style="width:480px;">
	<p>
		<?php
		echo $manager[description];
		?>
	</p>
</div>