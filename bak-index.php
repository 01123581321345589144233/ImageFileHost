<?php

	//get current directory
	$working_dir = getcwd();
	
	//get image directory
	$img_dir = $working_dir . "";
	
	//change current directory to image directory
	chdir($img_dir);
	
	//using glob() function get images 
	$files = glob("*.{jpg,jpeg,png,gif,JPG,JPEG,PNG,GIF}", GLOB_BRACE );
	
	
	//again change the directory to working directory
	chdir($working_dir);
	?>
	<table width="100%" border="1px">
		<tr>
			<th>S/N</th>
			<th>Image Preview</th>
			<th>Image Name</th>
		</tr>
	
	<?php
	$c = 1;
	//iterate over image files
	foreach ($files as $file) {
	?>
		<tr align="center">
			<td><?php echo $c;?></td>
			<td><img src="<?php echo "" . $file ?>" style="height: 100px; width: 100px;"/></td>
			<td><?php echo $file ?></td>
		</tr>
	<?php $c++; } ?>
	</table>