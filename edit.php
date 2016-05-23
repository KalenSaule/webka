<?php
mysql_connect("localhost","root","");
mysql_select_db("webpr2016");
$id = $_REQUEST["id"];
$query = "SELECT * FROM transports WHERE id=$id";
$result = mysql_query($query);
$row = mysql_fetch_array($result);
?>
<form action="update.php">
From:  <input type="text" name="model" value="<?= $row['model'] ?>"/> <br/>
To: <select type="text" name="manufacturer">
	  <option value="">--Select--</option>
	  <option value="Boy">Boy</option>
	  <option value="GrandDad">GrandDad</option>
      <option value="Dog">Dog</option>
	  </select><br/>
Your age: <input type="number" name="year" onkeypress="if((event.keyCode < 48)||(event.keyCode > 57)) event.returnValue=false" value="<?= $row['year'] ?>"/><br/>
Message:  <input type="text" name="message" size="30"> <br/>
<input type="hidden" name="id" value="<?= $row['id'] ?>"/><br/>
<input type="submit"/>
</form>
