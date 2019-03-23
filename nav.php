    <div class="menu-container wow slideInDown  fixed-top">
      <nav id="nav" class="nav d-flex align-items-center clear">
      <div class="menu-logo">
        <h1><a href="index.php">My Dessert</a></h1>
      </div><!-- menu-logo -->
        <div class="nav-menu">
          <ul class="clear">
            <li><a href="dessert.php">手作甜點</a></li>
            <li><p>|</p></li>
            <li><a href="restaurant.php">餐廳推薦</a></li>
            <li><p>|</p></li>
            <li><a href="photo.php">攝影景點</a></li>
            <li><p>|</p></li>
            <li><a href="work.php">作品集</a></li>
          </ul>
        </div>
        <div class="nav-contact">
          <ul class="clear">
<!--            <li><a href="https://www.instagram.com/sr_dessertlife/"><img src="images/icon/instagram.png"></a></li>            
            <li><a href="https://github.com/s60127h/dessert"><img src="images/icon/github.png"></a></li> -->
            <li><div class="dessert-body">
              <?php 
                if(isset($_SESSION['is_login'])){
                  echo "<a href='logout.php'>登出";
                }else{
                  echo "<a href='login.php'>登入</a> &nbsp; <a href='register.php'>註冊";
                }
              ?>
                </a></div>
              </li>
          </ul>
        </div>
      </nav>
    </div><!-- menu-container -->