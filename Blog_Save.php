<?php
include("dbconnect.php");
$sql="Insert into blog(SID,Blog,Date)
values
('$_POST[SID]','$_POST[Blog]','$_POST[Date]')";
if(!mysql_query($sql))
{
	die('Error:'.mysql_error());
}
header ('location: http://uapians.net/Blog_List.php ');
?>