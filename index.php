<?php //include_once 'link/connectlocal.php'; ?>
<?php //include_once 'check_login.php'; ?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include("head.php"); ?> 
    <title>Dessert</title>
</head>
<body class="container-body">

    <?php include("nav.php"); ?>

    <div class="index-body">
      <div class="index-image-dessert">
        <img src="images/index_icon/index-dessert.jpg">
        <h1 class="dessert-description">材料太難買、步驟太複雜而卻步嗎?<br>只要10分鐘，試試看簡單的免烤箱料理吧!</h1> 
        <h1 class="dessert-botton"><a href="dessert.php" class="wow swing">快速上手</a></h1>
      </div><!-- index-image-dessert -->
      <div class="index-image-restaurant">
        <img src="images/index_icon/index-restaurant.jpg">
        <h1 class="restaurant-description">平價高CP小吃，隱藏版巷弄美食，<br>燈光好氣氛佳的聚會餐廳怎麼能錯過!</h1>
        <h1 class="restaurant-botton"><a href="restaurant.php" class="wow swing">來去看看</a></h1>
      </div><!-- index-image-restaurant -->
      <div class="index-image-photo">
        <img src="images/index_icon/index-photo.jpg">
        <h1 class="photo-description">流浪過大江南北，卻只願為你駐留。</h1>
        <h1 class="photo-botton"><a href="photo.php" class="wow swing">一探究竟</a></h1>
      </div><!-- index-image-photo -->
  <!-- 
      <p>萬丈高樓平地起，好好經營作品集</p>
      <p>友善包容</p>
  -->
    </div><!-- body -->

    <?php include("footer.php"); ?>
</body>
</html>