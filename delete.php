<?php
mysql_connect("localhost","root","");
mysql_select_db("webpr2016");
$id = $_REQUEST["id"];
$query = "DELETE FROM transports WHERE id=$id";
mysql_query($query);
header("location: website.php?page=check");
?>
