<html>
  <head>
    <META HTTP-EQUIV="Content-type" CONTENT="text/html; charset=utf-8">
    <meta name="author" content="Каленова Сауле Ерлановна">
    <meta name="copyright" content="Все права принадлежат Каленовой Сауле Ерлановне">
    <meta name="keywords" content="SDU, Saule", СДУ, Сауле>
    <meta name="description" content="СДУ - университет Сауле»">
    <title>Saule проект</title>




    <style>
    .background-video {
      opacity: 0.2;
      position: fixed;
      z-index: 0;
      width: 100%;
      height: 100%;
      overflow: hidden;
      top: 0;
      left: 0;
    }

    .scroll-chevron>svg{
      cursor: pointer;
      position: absolute;
      top: auto;
      right: 0;
      bottom: 0;
      left: 0;
      margin: 0 auto;
      width: 93.6px;
      height: 201.5px;
      height: 93.6px;
      width: 201.5px
    }
    .mainbg {
      z-index: -1;
      position: absolute;
      margin-left: -8px;
      margin-top: -16px;

    }

    .clouds {
      z-index: 10;
      position: absolute;
      margin-top: 500px;
      margin-left: 300px;
     


     
    }

     .scroll {
      z-index: 50;
      position: absolute;
      margin-left: 608px;
      margin-top: 525px;

      
    }


      #HideBeginning {

      z-index: 13;
      background: transparent url(hide-ben.psd) no-repeat;
      background-size: cover;
      position: absolute;
      top: 650px;
      right: 186;
      bottom: 0;
      left: 0;
      margin: 0 auto;
      width: 386px;
      height: 570px;
   }
   
   .trailer {
    position: absolute;
    z-index: 4;
    margin-top: 380px;
    margin-left: 10px;
   }

   .trailer:hover {
    color: rgb(0, 0, 0 , 0,8);
   }

   .play a{
    position: absolute;
    font-size: larger;
    font-style: bold;
    text-decoration: none;
    color: white;
    border: 4px solid red;
    border-radius: 20px;
    background-color: red;
    z-index: 5;
    margin-top: 560px;
    margin-left: 140px;
   }
   .play a:hover{
    background: black;
    border-color: black;
    -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
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




    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js" type="text/javascript"></script>


      <script>
$(document).ready(function(){
var obj = $('.clouds');
var offset = obj.offset();
var topOffset = offset.top;
var leftOffset = offset.left;
var marginTop = obj.css("marginTop");
var marginLeft = obj.css("marginLeft");



$(window).scroll(function() {
var scrollTop = $(window).scrollTop();

  if (scrollTop >= topOffset){

    obj.css({
      marginTop: -255,  /*расположение дома при прокрутке*/
      marginLeft: 130,
      position: 'fixed',
    });
  }

  if (scrollTop < topOffset){

    obj.css({
      marginTop: 245, /*расположение дома в начале*/
      marginLeft: 130,
      position: 'absolute',
    });
  }
});
});
  </script>

  </head>




  <body>


<?php
include("index.php");
$page = $_GET['page'];
 if($page == ""){
  ?>

      <div class="background-video">
      <video id="video" preload="auto" autoplay="true" loop="loop" muted="muted" width="100%" height="auto"> 
        <source src="Natural Bliss.mp4" type="video/mp4">
      </video>  
      </div>        
    
      <div class="mainbg">
        <img src="fon.psd" width="100%" height ="">
      </div>

       <div class="clouds">
        <img src="home.psd" width="100%" height="180%" >
      </div>

        <div class="scroll">
        <img src="scroll.gif" width="16%" height="10%">
      </div>
    
   


<div aria-hidden="true" class="scroll-chevron pure-hidden-xs pure-hidden-sm">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 155 72" clip="0 155 72 0" overflow="hidden">
    <path opacity=".50" fill="red" d="M155 77.5c0 42.8-34.7 77.5-77.5 77.5s-77.5-34.7-77.5-77.5 34.7-77.5 77.5-77.5 77.5 34.7 77.5 77.5zm-57-37.1c1-1 1-2.8 0-3.8s-2.8-1-3.8 0l-17.1 17.1-17.1-17.1c-1-1-2.8-1-3.8 0s-1 2.8 0 3.8l20.9 20.9 20.9-20.9z"></path>
</svg>
    </div> 


<div id = "HideBeginning"></div>

<div class="play">
  <a href="trailer.html">Play Trailer</a>
</div>

<div class="trailer">
      <a href="trailer.html">
        <img src="video.gif" width = "400px" height ="auto">
      </a>
</div>  




<?php
 }
 else if($page == "walp"){
   include("walp.php");
}
else if($page == "muz"){
  include("muz.php");
}
else if($page == "video"){
  include("video.php");
}
else if($page == "hero"){
  include("hero.php");
}
else if($page == "store"){
  include("store.php");
}
else if($page == "contact"){
  include("new.php");
}
else if($page == "product"){
  include("product.php");
}
else if($page == "cat"){
  include("cat.php");
}
else if($page == "admin"){
  include("admin.php");
}
else if($page=="check"){
  include("check.php");
}


?>











       </body>
</html>

