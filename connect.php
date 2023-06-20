<?php

$mysql_query("select*mylogin",$connection);
$connect=mysql_connect("localhost","root","");
$db=mysql_select_db("company",$connection);
$db=mysql_query("select*from data",$connection);
<span>projects:</span><?php echo $row1['projects'];?>
<span>skills:</span><?php echo $row1['skills'];?>
<span>contacts:</span><?php echo $row1['contacts'];?>
mysql_connect($connection);
?>