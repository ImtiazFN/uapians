<?php
 session_start();
  error_reporting(0);
 include("dbconnect.php");

  ?>
<?php
$b=$_SESSION['username'];
//$c=$_SESSION['userid'];


$userrole = mysql_query("select * from userinfo where username='{$b}'");
$userdata = mysql_fetch_assoc($userrole);
//echo $userdata['admin'];




if (empty($_SESSION['username'])) {
    ?>
    <script language="JavaScript">
        window.location="index.php";
    </script><?php } else { ?>
<html>
<head>
<?php
 include("header.php");
	?>
	<style>
img {
    opacity: 0.9;
    filter: alpha(opacity=40); /* For IE8 and earlier */
}

img:hover {
    opacity: 1.0;
    filter: alpha(opacity=100); /* For IE8 and earlier */
}
</style>
</head>

<body>

<div id="grad1">
<div class="bodydiv">

<?php include("logo.php"); ?>





<div class="realbody" style="min-height:2300px">



<?php include("menu.php"); ?>





	
	
	<div id="content">
		<div id="colOne">
<?php
include("sidebar.php");
?>
		</div>

	
     <div>
     <hr>
          <h1> Project Gallery </h1>
          <br>
          
          <hr>
          <br>
          <p> Here we will provide you with exe file , apk  or sometimes with the source code so that it will come helpful for you from the previous project of the seniors . </p>
          <br>
          <p> There is also some project ideas by wihch you can work with
          
     </div>
     <hr>
     <br>
     
 
<div id="margin_figure">
<table>
	<tr>
		<td>
			<a href="Project_Gallery_Java.php"><img border="0" alt="W3Schools" src="images/java.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_C.php"><img border="0" alt="W3Schools" src="images/c.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_C++.php"><img border="0" alt="W3Schools" src="images/c++.jpg" width="265" height="160"></a>
		</td>
	</tr>
		<tr>
		<td>
			<a href="Project_Gallery_Csharp.php"><img border="0" alt="W3Schools" src="images/csharp.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_Android.php"><img border="0" alt="W3Schools" src="images/android.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_Assembly.php"><img border="0" alt="W3Schools" src="images/assembly.jpg" width="265" height="160"></a>
		</td>
	</tr>
		<tr>
		<td>
			<a href="Project_Gallery_Webapps.php"><img border="0" alt="W3Schools" src="images/webapps.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_Python.php"><img border="0" alt="W3Schools" src="images/python.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_Database.php"><img border="0" alt="W3Schools" src="images/database.jpg" width="265" height="160"></a>
		</td>
	</tr>
			<tr>
		<td>
			<a href="Project_Gallery_Php.php"><img border="0" alt="W3Schools" src="images/php.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_Graphics.php"><img border="0" alt="W3Schools" src="images/graphics.jpg" width="265" height="160"></a>
		</td>
		
		<td>
			<a href="Project_Gallery_Wordpress.php"><img border="0" alt="W3Schools" src="images/wordpress.jpg" width="265" height="160"></a>
		</td>
	</tr>
</table>
</div>
     
     <!--<div>
          <p>fgfeaffwefw</p>
          <p><button style=" background:#C92124 " ><a href="About_me.php" target="_blank" >About me</        button></p>

     </div>-->
        
    </body>  

   
   </div>     
   </div>
        </div>

		<div class="footer">
<?php include("footer.php");
?>		 
		</div>
 
</body>
</html>
    <?php
}?>