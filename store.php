<html>
<head>
	<style>
	.bg {
		position: absolute;
		z-index: -1;
		margin-top: -135px;
		margin-left: -8px;

	} 

@font-face {
  font-family: Mathematics Boredom;
src: url(7fonts/7fonts.ru_MathematicsBoredom.ttf)); 
}


p  a{
display: inline;
  /*display: table-footer-group;*/
    font-family: Mathematics Boredom;
    color: black;
     text-decoration: none;
    font-size:20px;
    /*padding-left: 200px;*/
  /*/*padding-top: -400px;*/
   }
a:hover{
  color: purple;
}


.collect img{
  padding-left: 580px;
	margin-left: 50px;
  margin-bottom: 59px;
}

.cat{
  display: inline;
  float: center;
  margin: 30px;

}


	</style>
</head>




<body>
  <?php
include("index.php");
include("db_fng.php");
?>

<div class="bg">
	<img src="shop.gif" width="133%" height="auto"></div>
<?
  $categories = get_cat();
  foreach ($categories as $item):
?>
<div class="cat"><a href="website.php?page=cat&id=<?=$item["cat_id"]?>"><?=$item["name"];?></a></div>
<?endforeach;?>

<?
$product = get_products();
foreach ($product as $item):
?>

<div class="collect">
<a href="website.php?page=product&id=<?=$item["id"]?>">
    <img src="<?php
     echo "{$item['image']}"
    ?>" width="25%" height="auto" >
    </a>
  <p>
    <a href="#" ><?php echo "{$item['title']}"?>
    </a><br>
    <a href="#" ><?="$".$item['price']?></a><br>
  </p>


</div>



  <?endforeach;?>


</body>
</html>