<?
include("db_fng.php");
$cat=$_GET['id'];
$products = get_cat_products($cat);
foreach($products as $item):
?>


<div class="collect">
<a href="website.php?page=product&id=<?=$item['id']?>">
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


