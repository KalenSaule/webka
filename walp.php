<html>
<head>
	<style>
	.bg {
		position: absolute;
		z-index: -1;
		margin-top: -140px;
		margin-left: -8px;

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



.collect img{
	border: 10px ridge  rgba(255, 60, 217, 0.19);;
	border-radius: 100%;
	transition:all 0.9s ease;
}    
#a img{
	position: absolute;
	margin-left: 1000px;
	margin-top: 200px;
    border-radius:100%;
   
  
}
#a img:hover{
	z-index: 4;
	position: absolute;
    border-radius:0;
    -webkit-transform: scale(2.0);
}

#b img{
	position: absolute;
	margin-left: 650px;
	margin-top: 30px;
    border-radius:100%;
   
  
}
#b img:hover{
	position: absolute;
	z-index: 4;
    border-radius:0;
    -webkit-transform: scale(2.5);
}

#c img{
	position: absolute;
	margin-left: 150px;
	margin-top: -50px;
    border-radius:100%;
   
  
}
#c img:hover{
	z-index: 4;
	position: absolute;
    border-radius:0;
    -webkit-transform: scale(2.0);
}

#d img{
	position: absolute;
	margin-top: 210px;
	margin-left: 50px;
    border-radius:0%;
    border-color: transparent;
   
  
}
#d img:hover{
	position: absolute;
	z-index: 4;
    border-radius:0;
    -webkit-transform: scale(1.1);
}



	</style>
</head>




<body>
<?php
include("index.php");
  ?>

<div class="bg">
	<img src="walp.jpg" width="104%" height="auto"></div>

<div class="collect">
	<div id="a"><p>
		<img src="22.jpg" width="20%" height="auto"></p>
	</div>
	<div id="b">
		<img src="sky.jpg" width="20%" height="auto">
	</div>
	<div id="c">
		<img src="hero.jpg" width="20%" height="auto">
	</div>
	<div id="d">
		<img src="dogg.png" width="20%" height="auto">
	</div>
	
</div>
</div>

</body>
</html>