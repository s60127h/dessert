<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="css/style.css" charset="utf-8">
    <title>Dessert</title>
</head>
<body>

  <div class="container">
    <div class="menu-container">
      <div class="menu-logo">
        <h1>My Dessert</h1>
      </div><!-- menu-logo -->
      <nav class="site-nav">
        <ul class="clear">
          <li><a href="dessert.php">手作甜點</a></li>
          <li><a href="restaurant.php">餐廳推薦</a></li>
          <li><a href="photo.php">攝影景點</a></li>
          <li><a href="work.php">作品集</a></li>
        </ul>
      </nav>
    </div><!-- menu-container -->

    <div class="index-body">
      <div class="index-image-dessert">
        <img src="images/index-dessert.jpg">
        <h1 class="dessert-description">材料太難買、步驟太複雜而卻步嗎?<br>只要10分鐘，試試看簡單的免烤箱料理吧!</h1> 
        <h1 class="dessert-botton"><a href="dessert.php">快速上手</a></h1>
      </div><!-- index-image-dessert -->

      <div class="index-image-restaurant">
        <img src="images/index-restaurant.jpg">
        <h1 class="restaurant-description">平價高CP小吃，隱藏版巷弄美食，<br>燈光好氣氛佳的聚會餐廳怎麼能錯過!</h1>
        <h1 class="restaurant-botton"><a href="restaurant.php">來去看看</a></h1>
      </div><!-- index-image-restaurant -->
  
      <div class="index-image-photo">
        <img src="images/index-photo.jpg">
        <h1 class="photo-description">流浪過大江南北，卻只願為你駐留。</h1>
        <h1 class="photo-botton"><a href="photo.php">一探究竟</a></h1>
      </div><!-- index-image-photo -->
  <!-- 
      <p>萬丈高樓平地起，好好經營作品集</p>
      <p>友善包容</p>
  -->
    </div><!-- body -->

    <?php include("footer.php") ?>

  </div><!-- container -->
</body>
</html>