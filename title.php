<?php

$p = "index";
if(isset($_GET['p'])){
  $p = $_GET['p'];
}

switch($p) {
  case 'index':
    $title = "Dessert";
    break;
  case 'dessert':
    $title = "手作甜點";
    break;
  case 'restaurant':
    $title = "餐廳推薦";
    break;  
  case 'photo':
    $title = "攝影景點";
    break;  
  case 'work':
    $title = "作品集";
    break;
  case 'login':
    $title = "Log in";
    break;  
  default:
    $title = "請正確瀏覽網站";
    break;
}

  if($p === "index"): include("index.php");
  elseif($p === "dessert"): include("dessert.php");
  elseif($p === "restaurant"): include("restaurant.php");
  elseif($p === "photo"): include("photo.php");  
  else: echo "error page not found";  
  endif;

?>