<?php //include_once 'link/connectlocal.php'; ?>

<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include("head.php"); ?>
    <title>手作甜點</title>
</head>

<body class="container-body">
    <?php include("nav.php"); ?>
    <!-- 要多給圖片一個div不然margin-top不對會跑版 -->
	<div class="main-area clear">
    <br>
    <h2 id="dessert-title">甜點清單</h2>
    <hr class="hr-style">
      <ul id="gallery">
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="biscuits.php" class="wrapper">
                <img src="images/dessert/list/雪Q餅.jpg">
                <p class="dessert-name">雪Q餅</p>
            </a>
            
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="cookie.php" class="wrapper">
                <img src="images/dessert/list/手工餅乾.jpg">
                <p class="dessert-name">手工餅乾</p> 
            </a>

        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/香蕉巧克力布朗尼.jpg">
                <p class="dessert-name">香蕉巧克力布朗尼</p>
            </a> 
            
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="baileys_nobake.php" class="wrapper">
                <img src="images/dessert/list/奶酒oreo生乳酪.jpg">
                <p class="dessert-name">奶酒oreo生乳酪</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/法式吐司.jpg">
                <p class="dessert-name">法式吐司</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/抹茶紅豆千層.jpg">
                <p class="dessert-name">抹茶紅豆千層</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/三眼怪抹茶塔.jpg">
                <p class="dessert-name">三眼怪抹茶塔</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/牛粒.jpg">
                <p class="dessert-name">牛粒</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="egg_tart.php" class="wrapper">
                <img src="images/dessert/list/台式蛋塔.jpg">
                <p class="dessert-name">台式蛋塔</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/原味日式起司條.jpg">
                <p class="dessert-name">原味日式起司條</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="pancake.php" class="wrapper">
                <img src="images/dessert/list/鬆餅.jpg">
                <p class="dessert-name">鬆餅</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/輕乳酪蛋糕.jpg">
                <p class="dessert-name">輕乳酪蛋糕</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="notyet.php" class="wrapper">
                <img src="images/dessert/list/生巧克力塔.jpg">
                <p class="dessert-name">生巧克力塔</p>
            </a> 
        </li>
        <li data-heartpic="♥" data-heartnum="5" data-lookmore="點擊查看食譜" class="wow fadeInUp">
            <a href="sandwich.php" class="wrapper">
                <img src="images/dessert/list/三明治.jpg">
                <p class="dessert-name">三明治</p>
            </a> 
        </li>
      </ul>
    </div><!-- main area -->

    <?php include("footer.php"); ?>
</body>

</html>