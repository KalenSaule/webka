<?php
mysql_connect("localhost","root","");
mysql_select_db("webpr2016");
$id	= $_REQUEST["id"];
$model = $_REQUEST["model"];
$manufacturer = $_REQUEST["manufacturer"];
$year = $_REQUEST["year"];
$message = $_REQUEST["message"];
$query = "UPDATE `transports` SET `model`='$model',`manufacturer`='$manufacturer',`year`=$year, `message`='$message'
WHERE id=$id";
echo $query;
mysql_query($query);
header("location: retrieve.php");

?>
