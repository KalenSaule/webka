<?php
mysql_connect("localhost","root","");
mysql_select_db("webpr2016");
$model = $_GET["model"];
$manufacturer = $_GET["manufacturer"];
$year = $_GET["year"];
$message = $_GET["message"];
if(isset($_GET)){
 if(!empty($model)) {
 	if (!empty($manufacturer)) {
 		if (!empty($year)) {
 			if (!empty($message)) {
		  		if (preg_match('/^[0-9]{4}$/',$year)){
		  			$query = "INSERT INTO `transports` (`model`,`manufacturer`,`year`, `message`) values ('$model','$manufacturer','$year', '$message')";
		  			mysql_query($query);
		  			header("location: retrieve.php");

		  		}
		 		 else {
		  			include("new.php");
		  			echo "Enter four numbers";
		  		}
 			}
 		}
 	}
 }
else {

	include("new.php");
		  	echo "<br>"."Fill all gaps"."<br>"."<a href = 'new.php'>Clear</a>";
		  }

}
?>