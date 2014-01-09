<?php  
$host="localhost";
$user="group5";
$password="gi2";
$link=mysql_connect($host,$user,$password);
$query = "SET NAMES 'utf8'";
$result = mysql_query($query);
mysql_select_db("group5",$link) || die("db error");
?>
