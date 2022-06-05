const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
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
            <span>Welcome !</span>
    </div>
    `;
}

createNav();