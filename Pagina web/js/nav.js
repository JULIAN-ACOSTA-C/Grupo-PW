const createNav = () => {
    let nav = document.querySelector('.navbar');

    nav.innerHTML = `
       <div class="nav">
            <a href="/index.html" class="anchor-image"><img src="img/nvidia-logo.png" class="brand-logo" alt=""></a>
            <div class="nav-items">
                <div class="search">
                    <input type="text" class="search-box" placeholder="search brand, product">
                    <button class="search-btn">search</button>
                </div>
                <a href="#"><img class="shopping-account" src="img/account.png" alt=""></a>
                <a href="#"><img class="shopping-cart" src="img/shoppingCart.png" alt=""></a>
            </div>
        </div>
        <ul class="links-container">
        <li class="link-item"><a href="/index.html" class="link">home</a></li>
        <li class="link-item"><a href="#" class="link">desktops</a></li>
        <li class="link-item"><a href="#" class="link">laptops</a></li>
        </ul>
    `;
}

createNav();