<?php include("dbconnect.php"); ?>
<?php
	  				//echo $a;
	  mysql_query($sql="INSERT INTO video_tutorial (video_tutorial_cat_id,tutorial_link)VALUES ('" . $_REQUEST['video_tutorial_cat_id'] . "','" . $_REQUEST['tutorial_link'] . "')");
	  

    header ('location: http://www.uapians.net/upload_video_tutorial.php '); 
mysql_close($con)
?> 