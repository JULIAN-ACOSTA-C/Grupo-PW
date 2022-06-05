<?php include 'config.php';?>
<?php $url="http://".$_SERVER['HTTP_HOST']."/paginaweb"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product3 </title>

    <link rel="stylesheet" href="css/home.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/nav.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/footer.css?v=<?=$version?>">
    <link rel="stylesheet" href="css/product.css?v=<?=$version?>">
</head>
<body>

    <nav class="navbar"></nav>

    <section class="product-details">
        <div class="image-slider">
            <div class="product-images">
                <img src="img/product3.jpg" class="active" alt="">
                <img src="img/product3_2.jpg" alt="">
                <img src="img/product3_3.jpg" alt="">
            </div>
        </div>

    <div class="details">
        <h2 class="product-brand">Dell - OptiPlex Desktop - Intel Core i5 - 8GB Memory - 500GB Hard Drive - Pre-Owned - Black</h2>
        <div class="details-price">
            <span class="product-discount">( 50% off )</span> 
            <span class="product-price">$40</span>
            <span class="product-actual-price">$80</span>   
        </div>    
        <button class="btn cart-btn">add to cart</button>
    </div>
    </section>

    <section class="detail-des">
        <h2 class="heading">Specifications</h2>
        <div class="specs-container">
            <div class="specs-category">
                <div class="category-title-container">
                    <h2 class="title">Key specs</h2>
                </div>
                <div class="item-specs">
                 <ul class="item-specs-list">
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Processor Model </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">Intel 4th Generation Core i5 </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Processor Model Number </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">i5-4570 </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Processor Cores </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">4-cores </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Processor Speed (up to) </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">3.6 gigahertz </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Storage Type </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">HDD </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Total Storage Capacity </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">500 gigabytes </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">System Memory (RAM) </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">8 gigabytes </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Operating System </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">Windows 10 Pro </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Type of Memory (RAM) </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">DDR3 SDRAM </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Cache Memory </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">18 megabytes </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Number of Memory Slots </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">2 </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Graphics </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">Intel UHD Graphics </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Internet Connectivity </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">Ethernet </span>
                        </div>
                    </li>
                    <li class="list-item">
                        <div class="item-title-container">
                            <span class="item-title">Ethernet Card </span>
                        </div>
                        <div class="item-value-container">
                            <span class="item-value">10/100/1000 </span>
                        </div>
                    </li>
                 </ul>
                </div>
            </div>
             
        </div>
    </section>

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

    <footer></footer>

    
    <script src="js/nav.js?v=<?=$version?>"></script>
    <script src="js/footer.js?v=<?=$version?>"></script>
    <script src="js/home.js?v=<?=$version?>"></script>
    <script src="js/product.js?v=<?=$version?>"></script>
</body>
</html>