    <div class="menu-container wow slideInDown  fixed-top">
      <nav id="nav" class="nav d-flex align-items-center clear">
      <div class="menu-logo">
        <h1><a href="index.php">My Dessert</a></h1>
      </div><!-- menu-logo -->
        <div class="nav-menu">
          <ul class="clear">
            <li><a href="dessert.php">手作甜點</a>
              <ul>
                <div class="nav-select-1 clear">
                  <div class="nav-select-title-1">
                    <p>所有列表</p>
                  </div>
                  <li><a href="dessert.php">全部</a></li>
                  <p class="nav-select-title-2">免烤箱甜點</p>
                  <li><a href="biscuits.php">雪Q餅</a></li>
                  <li><a href="baileys_nobake.php">奶酒oreo生乳酪</a></li>
                  <li><a href="#">抹茶紅豆千層</a></li>
                  <li><a href="#">生巧克力塔</a></li>                
                  <li><a href="pancake.php">鬆餅</a></li>
                  <li><a href="#">法式吐司</a></li>
                  <li><a href="sandwich">三明治</a></li>
                </div>
              </ul>
            </li>
            <li><p>|</p></li>
            <li><a href="restaurant.php">餐廳推薦</a></li>
            <li><p>|</p></li>
            <li><a href="photo.php">攝影景點</a></li>
            <li><p>|</p></li>
            <li><a href="work.php">作品集</a></li>
          </ul>
        </div>
        <div class="nav-login">
          <ul class="clear">
<!--            <li><a href="https://www.instagram.com/sr_dessertlife/"><img src="images/icon/instagram.png"></a></li>            
            <li><a href="https://github.com/s60127h/dessert"><img src="images/icon/github.png"></a></li> -->
            <li><div class="dessert-body">
              <?php 
                if(isset($_SESSION['is_login'])){
                  echo "<a href='logout.php'>&emsp;&emsp;&emsp;登出";
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