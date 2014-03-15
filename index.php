<!DOCTYPE html>
<html>
  <head>
    <title>陈建丽的Resume</title>
  </head>
  <body>
    
	  <?php
		  $dir 			= "images";
		  $glob_pattern 	= $dir."/*.{jpg,png,gif,PNG,JPG}";
		  $data			= array();
		  foreach (glob($glob_pattern,GLOB_BRACE) as $filename) {
		      $path =  "<div><img src='{$filename}' /></div>";
		  	$data[] = $path;
		  	echo $path;
		  }
	  ?>
	
  </body>
</html>