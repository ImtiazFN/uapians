<?php
$connect=mysql_connect("localhost","root","");
$select_db=mysql_select_db("mylab");

$strquery=" DELETE from gallery where Photo_Id = '" . $_GET['Photo_Id'] . "' ";
$results=mysql_query ($strquery);
header ('location: https://localhost/mylab/galary.php '); 
?>