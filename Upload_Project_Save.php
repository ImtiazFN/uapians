<?php include("dbconnect.php"); ?>
<?php
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "image/png"))
&& in_array($extension, $allowedExts))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
    }
  else
    {
	//echo "Thank You for Registration. please wait for Admin Review (maximum 24 hour)";
    					//echo "Upload: " . $_FILES["file"]["name"] . "<br>";
    					//echo "Type: " . $_FILES["file"]["type"] . "<br>";
   					//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
					//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";

    if (file_exists("images/" . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists please rename your photo ";
      }
      
    else
      {
      move_uploaded_file($_FILES["file"]["tmp_name"],
      "images/" . $_FILES["file"]["name"]);
      
      					//echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
	  				//$d = dir(getcwd());
	  
	  $a='images/'.$_FILES["file"]["name"];
	  				//echo $a;
	  mysql_query($sql="INSERT INTO project (language_id,project_name,platform_id,project_cat_id,SID,project_link,project_screenshot)VALUES ('" . $_REQUEST['language_id'] . "','" . $_REQUEST['project_name'] . "','" . $_REQUEST['platform_id'] . "','" . $_REQUEST['project_cat_id'] . "','" . $_REQUEST['SID'] . "','" . $_REQUEST['project_link'] . "','$a')");
	  
      }
    }
  }
else
  {
  echo "Registration Failed.... <br>Please Fill all the field Correctly";
  }
    header ('location: http://localhost/uapians/Upload_Project_Save_Confirmation.php '); 
mysql_close($con)
?> 