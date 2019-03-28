<?php include_once 'link/connectlocal.php'; ?>
<!DOCTYPE html>
<html lang="zh-TW">
<head>
    <?php include("head.php") ?>
    <title>收藏</title>
</head>

<body class="container-body">
    <?php include("nav.php") ?>
    <div class="collect-body">
        
        <div class="collect-top">
            <p> <?php echo "&emsp;&emsp;歡迎，來新增你的收藏吧!"; ?></p>
        </div>

        <div class="card">
            <div class="card-header">
                分類: 全部 手作甜點 餐廳推薦 攝影景點 
            </div>
            <div class="card-body">
                <a href="biscuits.php">     
                <div class="media">
                    <img src="images/dessert/list/雪Q餅.jpg" class="align-self-center mr-3" alt="雪Q餅">
                    <div class="media-body">
                        <h5 class="mt-0">雪Q餅</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                </div>
                </a>
                <a href="egg_tart.php">     
                <div class="media">
                    <img src="images/dessert/list/台式蛋塔.jpg" class="align-self-center mr-3" alt="台式蛋塔">
                    <div class="media-body">
                        <h5 class="mt-0">台式蛋塔</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>

                </div>
                </a>

                <a href="pancake.php">     
                <div class="media">
                    <img src="images/dessert/list/鬆餅.jpg" class="align-self-center mr-3" alt="鬆餅">
                    <div class="media-body">
                        <h5 class="mt-0">鬆餅</h5>
                        <p>Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                    </div>
                </div>
                </a>
            </div> 
        </div>
    </div>
    <!-- 淺色註解收藏時間--> 
    <!-- <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer> -->

    <?php include("footer.php") ?>
</body>

</html>