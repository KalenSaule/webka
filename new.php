<html>
<head>
	<style>

.bg{
	position: absolute;
	z-index: -1;
	margin-top: -370px;
}


@font-face {
  font-family: Mathematics Boredom;
src: url(7fonts/7fonts.ru_MathematicsBoredom.ttf)); 
}
   a {
    font-family: Mathematics Boredom;
     text-decoration: none;
  font-weight: bold;
  font-size:23px;
  text-align: left;
   }
   #title{
  text-align: center;
  font-size: 30px;
  font-family:  Mathematics Boredom;
  font-weight: bold;
  color:red;
}
#box{
  border: 5px dashed yellow;
}
#send{
  border: 3px solid red;
  border-radius: 20px;
  padding: 10px;
  color: black;
    font-family:  Mathematics Boredom;
  font-size: 25px;
  background-color: yellow;
  margin-top: -50px;
  margin-left: 1050px;
}
span{
   font-family:  Mathematics Boredom;
   color: blue;
  font-size: 20px;
}
#boxx{
    border: 2px solid yellow;
}

	</style>
</head>

<body>
  <?php
include("index.php");
  ?>
<div class="bg">
	<img src="contact.jpg" width="100%" height="auto"></div>

<div class="t">
  <p id = "title">Letter to Your Hero:</p><br>
</div>



 <form action="create.php">
<span>From: </span> <input id="boxx" type="text" name="model"/> <br/>
<span>To: </span><select id = "boxx" type="text" name="manufacturer">
	  <option value=""><span>--Select--</span></option>
	  <option value="Boy"><span>Boy</span></option>
	  <option value="GrandDad"><span>GrandDad</span></option>
      <option value="Dog"><span>Dog</span></option>
	  </select><br/>
<span>Your age: </span><input id="boxx" type="number" size="10" min="1" max="2016" name="year" onkeypress="if((event.keyCode < 48)||(event.keyCode > 57)) event.returnValue=false"/><br/>
<input id = "box" type="text" name="message" size="70" style="height:200px; font-size:14pt; text-align:left; margin-left:270px; margin-top:-90px;"  > <br/>
<input id="send" type="submit" value="send"/>
</form>




</body>
</html>