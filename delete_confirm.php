<?php
mysql_connect("localhost","root","");
mysql_select_db("webpr2016");

$query = "SELECT * FROM transports ORDER BY model";
$result = mysql_query($query);
$num = mysql_num_rows($result);
	$row = mysql_fetch_array($result);?>
	<?= $row["model"]?> <?= $row["manufacturer"]?> <?= $row["year"]?> <?= $row["message"]?>
	<a href="delete.php?id=<?= $row['id']?>">Yes</a>
	<a href="website.php?page=check">No</a><br>

