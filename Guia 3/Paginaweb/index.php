<?php 
include 'config.php';
include './login/connection.php';
include './login/functions.php';
include './counter/counter.php';
session_start();
?>

<?php $url="http://".$_SERVER['HTTP_HOST']."/paginaweb"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MuskaWat</title>
    <link rel="stylesheet" href="css/home.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/nav.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/product.css?v=<?=$version?>">
</head>
<body>

        <div class="nav">
            <a href="http://localhost/paginaweb/index.php" class="anchor-image"><img src="img/nvidia-logo.png" class="brand-logo" alt=""></a>
            <div class="nav-items">
                    <div class="search">
                        <input type="text" class="search-box" placeholder="search brand, product">
                        <button class="search-btn">search</button>
                    </div>
                        <a href="#"><img class="shopping-account" src="img/account.png" alt=""></a>
                        <a href="#"><img class="shopping-cart" src="img/shoppingCart.png" alt=""></a>
                        <div class="login-signup">
                            <a href="http://localhost/paginaweb/login/login.php">Login</a>
                            <span>/</span>
                            <a href="http://localhost/paginaweb/login/signup.php">Sign up</a>
                            <span>/</span>
                            <a href="http://localhost/paginaweb/login/logout.php">Log out</a>

                        </div>
            </div>
        </div>
            <ul class="links-container">
                <li class="link-item"><a href="http://localhost/paginaweb/index.php" class="link">home</a></li>
                <li class="link-item"><a href="#" class="link">desktops</a></li>
                <li class="link-item"><a href="#" class="link">laptops</a></li>
            </ul>
            <div class="welcome-session">
                    <span>Welcome<?php if(isset($_SESSION['username'])){echo " ".$_SESSION['username']; setcookie('user',$_SESSION['username']);}else {echo ""; setcookie('visitor','guest');}?>!</span>
            </div>

    <!-- hero section -->
    <header class="hero-section">
        <div class="content">
            <img src="img/nvidia-logo.png" class="logo" alt="">
            <p class="sub-heading">Prices that you will not find in any other place!</p>
        </div>
    </header>
    
    <!-- cards-container -->
    <section class="product">
        <h2 class="product-category">best selling</h2>
        <button class="pre-btn"><img src="img/pre-btn.png" alt=""></button>
        <button class="nxt-btn"><img src="img/nxt-btn.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product1.php"><img src="img/product1.jpeg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product1.php"><h2 class="product-brand">ASUS - 14.0" Chromebook - Intel Celeron N3350 - 4GB Memory - 32GB EMMC - Grey</h2></a>
                    <span class="price">20$</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product2.php"><img src="img/product2.jpeg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                 </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product2.php"><h2 class="product-brand">Dell - Inspiron Compact Desktop - Intel Core I5-12400 - 12GB Memory - 256GB SSD - Mist Blue</h2></a>
                    <span class="price">50$</span><span class="actual-price">$100</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product3.php"><img src="img/product3.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product3.php"><h2 class="product-brand">Dell - OptiPlex Desktop - Intel Core i5 - 8GB Memory - 500GB Hard Drive - Pre-Owned - Black</h2></a>
                    <span class="price">40$</span><span class="actual-price">$80</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product4.php"><img src="img/product4.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product4.php"><h2 class="product-brand">Lenovo N23 11.6" Pre-Owned Chromebook - Intel Celeron N3060 - 4GB Memory - 16GB eMMC - Chrome OS</h2></a>
                    <span class="price">30$</span><span class="actual-price">$60</span>
                </div>
            </div>
        </div>
    </section>

    <!-- collections  -->
    <section class="collection-container">
        <a href="#" class="collection">
            <img src="img/blue-banner.jpg" alt="">
            <h2 class="collection-title">Laptops & Desktops</h2>
        </a>
    </section>

    <!-- cards-container -->
    <section class="product">
        <h2 class="product-category">Laptops</h2>
        <button class="pre-btn"><img src="img/pre-btn.png" alt=""></button>
        <button class="nxt-btn"><img src="img/nxt-btn.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product1.php"><img src="img/product1.jpeg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product1.php"><h2 class="product-brand">ASUS - 14.0" Chromebook - Intel Celeron N3350 - 4GB Memory - 32GB EMMC - Grey</h2></a>
                    <span class="price">20$</span><span class="actual-price">$40</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product4.php"><img src="img/product4.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product4.php"><h2 class="product-brand">Lenovo N23 11.6" Pre-Owned Chromebook - Intel Celeron N3060 - 4GB Memory - 16GB eMMC - Chrome OS</h2></a>
                    <span class="price">30$</span><span class="actual-price">$60</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <a href="<?php echo $url;?>/product5.php"><img src="img/product5.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product5.phpl"><h2 class="product-brand">ASUS - 11.6" Chromebook - Intel Celeron - 4GB Memory - 32GB eMMC Flash Memory - Gray - Grey</h2></a>
                    <span class="price">70$</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <a href="<?php echo $url;?>/product7.php"><img src="img/product7.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product7.php"><h2 class="product-brand">HP - 14" Laptop - Intel Celeron - 4GB Memory - 64GB eMMC - Snowflake White</h2></a>
                    <span class="price">80$</span>
                </div>
            </div>
        </div>
    </section>

    <!-- cards-container -->
     <section class="product">
        <h2 class="product-category">Desktops</h2>
        <button class="pre-btn"><img src="img/pre-btn.png" alt=""></button>
        <button class="nxt-btn"><img src="img/nxt-btn.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product2.php"><img src="img/product2.jpeg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                 </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product2.php"><h2 class="product-brand">Dell - Inspiron Compact Desktop - Intel Core I5-12400 - 12GB Memory - 256GB SSD - Mist Blue</h2></a>
                    <span class="price">50$</span><span class="actual-price">$100</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <span class="discount-tag">50% off</span>
                    <a href="<?php echo $url;?>/product3.php"><img src="img/product3.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product3.php"><h2 class="product-brand">Dell - OptiPlex Desktop - Intel Core i5 - 8GB Memory - 500GB Hard Drive - Pre-Owned - Black</h2></a>
                    <span class="price">40$</span><span class="actual-price">$80</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <a href="<?php echo $url;?>/product6.php"><img src="img/product6.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product6.php"><h2 class="product-brand">Lenovo - IdeaCentre 3 07ADA Desktop - AMD Athlon Silver-Series - 4GB Memory - 1TB HDD - Silver</h2></a>
                    <span class="price">100$</span>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <a href="<?php echo $url;?>/product8.php"><img src="img/product8.jpg" class="product-thumb" alt=""></a>
                    <button class="card-btn">add to cart</button>
                </div>
                <div class="product-info">
                    <a href="<?php echo $url;?>/product8.php"><h2 class="product-brand">HP - Pavilion Desktop - Intel Core i3 - 8GB Memory - 256GB SSD - Natural Silver</h2></a>
                    <span class="price">110$</span>
                </div>
            </div>
        </div>
    </section>

    <p><?php echo "Total Visitors: ".$count;?></p>
    
<h1>Google maps</h1>

    <div id="googleMap" style="width:100%;height:400px;"></div>

    <footer></footer>


    <script src="js/footer.js?v=<?=$version?>"></script>
    <script src="js/home.js?v=<?=$version?>"></script>
<script>
function myMap() {
var mapProp= {
  center:new google.maps.LatLng(51.508742,-0.120850),
  zoom:5,
};
var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBfxnZ9y4vT3xqyroazkuvfRvit6cQH4iI&callback=myMap" async defer></script>

</body>
</html>
