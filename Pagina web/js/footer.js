const createFooter = () => {
    let footer = document.querySelector('footer');

    footer.innerHTML = `
    <div class="footer-content">
        <img src="img/nvidia-logo.png" class="logo" alt="">
            <div class="footer-ul-container">
            <ul class="category">
                <li class="category-title">desktop</li>
               <li><a href="#" class="footer-link">office</a></li>
               <li><a href="#" class="footer-link">gaming</a></li>
            
           </ul>
           <ul class="category">
                <li class="category-title">laptops</li>
                <li><a href="#" class="footer-link">office</a></li>
             <li><a href="#" class="footer-link">gaming</a></li>
         </ul>
      </div>
    </div>
    <p class="footer-title">about company</p>
    <p class="info">Our mission is to sell computers that can be affordable for people of low resources and have access to technology for their daily lives. 
            <br>We gather computers from different sources and remanufacture them to be sold at a lower price of its original price.</p>
    <div class="footer-social-container">
        <div>
            <a href="#" class="social-link">Terms & Services</a>
           <a href="#" class="social-link">Privacy page</a>
       </div>
       <div>
           <a href="#" class="social-link">Instagram</a>
           <a href="#" class="social-link">Facebook</a>
          <a href="#" class="social-link">Twitter</a>
      </div>
    </div>
    <p class="footer-credit">Made with ♥</p>
    `
}

createFooter();