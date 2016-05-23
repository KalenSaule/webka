 
<html>
<style >
@font-face {
  font-family: Mathematics Boredom;
src: url(7fonts/7fonts.ru_MathematicsBoredom.ttf)); 
}
 
#tit{
	text-align: center;
	margin-top: 200px;
	font-family: Mathematics Boredom;
	font-size: 50px;
	color: violet;


}
.pp{
	margin-left: 510px;
	height: 50px;
	border: 5px solid violet;
	font-size: 20px;
	color: purple;
}
.p1{
	background-color:purple;
	padding: 5px;
	color: white;

}
</style>

 <?php
	?>

	
    <p id="tit">Enter to Admin page</p>


  <form method="POST" action="website.php?page=admin">
     <input class="pp"  placeholder="Username" type="text" required="required" name="username"  value=""  style="width:300px"><br><br>
     <input class="pp" placeholder="Password" type="password" name="password"  value=""  style="width:300px;">
     <input class="p1" type="submit" value="NEXT" name="admin">
</form>





<?php

  if(isset($_POST['admin'])){ 
 $username = $_POST['username'];
 $password = $_POST['password'];
 mysql_connect("localhost","root","");
 mysql_select_db("webpr2016");

 $result = mysql_query("SELECT * FROM admin WHERE username ='$username'");
 $myrow = mysql_fetch_array($result);
 echo "$result";
if (empty($myrow['username'])) {
  echo "<script>alert('fill all gaps')</script>";
}
else{
  if ($myrow['password'==$password]) {
    $_SESSION['username']==$myrow['username'];
    echo "<script>window.open('website.php?page=check','_self')</script>";
  }
  else{
    echo "<script>alert('username or password is incorrect')</script>";
  }

}
 
}
  
   ?>

      </html>