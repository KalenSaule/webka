<?
include("db_fng.php");
$id=$_GET['id'];
$product = get_product($id);
?>


<div class="collect">
    <img src=<?=$product['image']?> width="25%" height="auto" >
  <p>
    <a href="#" ><?=$product['title']?></a><br>
    <a href="#" ><?="$".$product['price']?></a><br>
    <a href="#" ><?=$product['description']?></a>
  </p>
</div>



