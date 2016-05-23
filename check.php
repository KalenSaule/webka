
   <?php
   $conn = mysql_connect('localhost', "root", "");
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT model, manufacturer, year, message FROM transports';
   mysql_select_db('webpr2016');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
  echo "<p>New Messages</p>";
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo " From: {$row['model']}  <br> ".
         "Age: {$row['year']} <br> ".
         "Hero name : {$row['manufacturer']} <br> ".
         "Message : {$row['message']} " ;?>
    <a href="delete_confirm.php?id=<?= $row['id']?>">Delete</a>
    <a href="edit.php?id=<?= $row['id']?>">    Edit</a> <br/><br>
    <?
 }
 ?>