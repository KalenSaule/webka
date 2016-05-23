<?php
mysql_connect("localhost","root","");
mysql_select_db("webpr2016");
include("new.php");
$query = "SELECT * FROM transports ORDER BY model";
$result = mysql_query($query);
$num = mysql_num_rows($result);
	?>
    <a style="color: grey; font-size: 15px;  margin-left:550px; " href="#">Your letter was sended successfully</a> <br/>
    <a style = "color: grey; font-size: 15px; margin-left:610px;" href="#">...wait an answer...</a>


<!-- Include new form -->
