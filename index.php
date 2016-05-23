<html>
<head>

<style>
/*menu*/
       .nav ul{margin-top: -10px; width: 110%;
    margin-left: -30px;}
.nav ul:hover{
  background: pink;

}

  
    }
    nav ul li a{
      float: left;
      text-decoration: none;
    }
    nav ul li a span{
      padding-left: 13px;
    }
    

     .nav ul li a img:hover{
     -webkit-transform: scale(1.3);
    -ms-transform: scale(1.3);
    transform: scale(1.3);
    }

    .nav ul:before,
    .nav ul:after {
      z-index: 3;
      content: "";
      display: table;
    }
    .nav ul:after {
      z-index: 3;
      clear: both;
    }
  
    .nav ul > li {
  
      z-index: 3;
      float: left;
      position: relative;
    }
    .nav a {
      width: 40px;
padding: 10px 95px;
z-index: 3;
border-left: 1px solid #595959;
height: 100px;
line-height: 1.2em;
color: #000;
display: block;
    }
    .nav a:hover {
      z-index: 3;
      text-decoration: none;

    }
    .nav li ul {
z-index: 3;
background: pink; 
background-position: absolute;  
margin-top: -60px;
margin-right: 2px;
margin-bottom: 50px;
margin-left: 0px;
padding-left: 0px;

    }
    .nav li ul li {
    z-index: 3;
width: 220px;
margin-left: -31.52px;
height: 70px;
    }
    .nav li ul a {
    margin-left: 31px;
z-index: 3;
height: 10px;
padding-top: 30px;
margin-top: 0px;
padding-bottom: 30px;
    }
    .nav li ul a:hover {
      z-index: 3;
      background: rgba(0, 0, 0, 0.59999999999999996); /*выделяет фон строк в кажд вкладке*/
    }
    .nav ul > li:hover ul {
      z-index: 3;
      max-height: 1000px;   /*высота всплывающего окна*/
      -webkit-transform: perspective(600) rotate3d(0, 0, 0, 0);
    }
    .nav li ul {
 position: absolute;
left: 1px;
top: 180px;
z-index: 3;
max-height: 0;
overflow: hidden;
-webkit-transform: perspective(600) rotate3d(1, 0, 0, -90deg);
-webkit-transform-origin: 50% 0;
-webkit-transition: 350ms;
-moz-transition: 350ms;
-o-transition: 350ms;
transition: 350ms;
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



<body>
<!--menu-->
    <nav class="nav">
            <ul>
                <li class="home">
                <a href="website.php?page=">
                  <img src="home.png" width="90px" height="auto" style="margin-top:-5px; margin-left:-30px;"> <br> <span style="margin-left:-30px;">HOME</span>
                </a>
                </li>
                <li>
                    <a href="#">
                     <img src="gallery.png" width="90px" height="auto" style="margin-top:10px; margin-left:-30px;"> <br><span style="margin-left:-40px;">Gallery</span>
                   </a>
                     <ul>
                        <li class="walp"><a href="walp.php?page=walp">Wallpapers</a></li>
                        <li class="muz"><a href="muz.php?page=muz">Music</a></li>
                        <li class="video"><a href="video.php?page=video">Video</a></li>
                    </ul> 
                </li>
                <li class="hero">
                    <a href="hero.php?page=hero">
                      <img src="hero.png" width="90px" height="auto" style="margin-top:10px; margin-left:-30px;"> <br> <span style="margin-left:-60px;">Characters</span>
                    </a>
                </li>
                <li class="store">
                    <a href="store.php?page=store">
                      <img src="store.png" width="90px" height="auto" style="margin-top:0px; margin-left:-30px;"><br><span style="margin-left:-50px;">"UP"store</span>
                    </a>
                
                </li>
                <li class="contact">
                    <a href="new.php?page=contact">
                      <img src="contact.png" width="90px" height="auto" style="margin-top:-10px; margin-left:-10px;"> <br><span style="margin-left:-50px;">Contact"UP"</span></a>
                </li>
                <li>
                  <a href="admin.php?page=admin">login</a>
                </li>
            </ul>
        </nav>




</body>
</html>