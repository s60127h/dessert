    <div class="menu-container wow slideInDown  fixed-top">
      <nav id="nav" class="nav d-flex align-items-center clear">
      <div class="menu-logo">
        <h1><a href="index.php">My Dessert</a></h1>
      </div><!-- menu-logo -->
        <div class="nav-menu">
          <ul class="clear">
            <li><a href="dessert.php" class="nav-wrapper">手作甜點</a>
              <ul>
                <div class="nav-select clear">
                  <div class="nav-select-1">
                    <p class="nav-select-title">所有列表</p>
                    <li><a href="dessert.php">全部</a></li>
                  </div>
                  <div class="nav-select-2">
                    <p class="nav-select-title">免烤箱甜點</p>
                    <li><a href="biscuits.php">雪Q餅</a></li>
                    <li><a href="baileys_nobake.php">奶酒oreo生乳酪</a></li>
                    <li><a href="notyet.php">抹茶紅豆千層</a></li>
                    <li><a href="notyet.php">生巧克力塔</a></li>                
                    <li><a href="pancake.php">鬆餅</a></li>
                    <li><a href="notyet.php">法式吐司</a></li>
                    <li><a href="sandwich.php">三明治</a></li>
                  </div>
                  <div class="nav-select-3">
                    <p class="nav-select-title">其他</p>
                    <li><a href="cookie.php">手工餅乾</a></li>
                    <li><a href="notyet.php">香蕉巧克力布朗尼</a></li>
                    <li><a href="notyet.php">三眼怪抹茶塔</a></li>
                    <li><a href="notyet.php">牛粒</a></li>                
                    <li><a href="egg_tart.php">台式蛋塔</a></li>
                    <li><a href="notyet.php">原味日式起司條</a></li>
                    <li><a href="notyet.php">輕乳酪蛋糕</a></li>
                  </div>
                </div>
              </ul>
            </li>
            <li><p>|</p></li>
            <li><a href="restaurant.php" class="nav-wrapper">餐廳推薦</a></li>
            <li><p>|</p></li>
            <li><a href="photo.php" class="nav-wrapper">攝影景點</a></li>
            <li><p>|</p></li>
            <li><a href="work.php" class="nav-wrapper">作品集</a></li>
          </ul>
        </div>
        <div class="nav-login">
          <ul class="clear">
<!--            <li><a href="https://www.instagram.com/sr_dessertlife/"><img src="images/icon/instagram.png"></a></li>            
            <li><a href="https://github.com/s60127h/dessert"><img src="images/icon/github.png"></a></li> -->
            <li><div class="dessert-body">
              <?php 
                if(isset($_SESSION['is_login'])){
                  echo "<a href='collection.php'>收藏</a> <a href='logout.php'>&emsp;&emsp;&emsp;登出";
                }else{
                  echo "<a href='register.php'>註冊</a> &emsp; <div id='loginbt'><a href='login.php' >登入";
                }
              ?>
                </a></div></div>
              </li>
          </ul>
        </div>
      </nav>
    </div><!-- menu-container -->