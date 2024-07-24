<div class="sing_up">
        <div class="info">
            <h1>sing up for newsletter</h1>
            <p>get email upates about our shop latset shop and <span>special offerrs</span></p>
        </div>
        <div class="forms">
            <form action="#">
                <input type="text" placeholder="your email address">
                <button><a href="../web_site/singup.php">sing up</a></button>
            </form>
        </div>

    </div>




    
    <footer>

        <div class="item-footr contact_footer">
            <img src="../image_product/img_home/logo (1).png" alt="">
            <h3>contact</h3>
            <ul>
                <li>addresss: <span>562welligton rood street 32.san francisco</span></li>
                <li>phone:<span>+212 6154item-footre 26865/(+91)01234568</span></li>
                <li>hours:<span>10:00-18:00 man-sat</span></li>
            </ul>
            <h2>follow us</h2>
            <div class="icones">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-pinterest"></i>
                <i class="fa-brands fa-youtube"></i>
            </div>

        </div>

        <div class="item-footre about">
            <h2>about</h2>
            <ul>
                <li>about us</li>
                
                <li>delivery infomatio</li>
                <li>privacy policy</li>
                <li>terms & condition</li>
                <li>contact us</li>
            </ul>
        </div>
        <div class="item-footre my_account">
            <h2>my account</h2>
            <ul>
                <li>sing in</li>
                
                <li>view cart</li>
                <li>my wishilt</li>
                <li>track my order</li>
                <li>help</li>
            </ul>
        </div>
        <div class="item-footre app">
            <h2>install app</h2>
            
            <p>from app store or google play</p>

            <div class="app_image">
                <img src="../image_product/img_home/pay (1)/app.jpg" alt="">
                <img src="../image_product/img_home/pay (1)/play.jpg" alt="">
            </div>
            <p>secured payemnt gatewas</p>

            <img id="payement_app" src="../image_product/img_home/pay (1)/pay.png" alt="">
        </div>

        
        
        
    </footer>
    
    <p id="last_titer">©2021 tech 2 etc html css ecomerce template</p>
    
    <script src="../javascript/single_product.js"></script>
    <script src="../javascript/shopping_cart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="../javascript/main.js"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            activeLinks();
        });

    const swiper = new Swiper('.swiper', {
      // Optional parameters

      pagination: {
    el: '.swiper-pagination',
    },
      slidesPerView: 4,
      spaceBetween: 50,
      

      // If we need pagination


      // Navigation arrows
      navigation: {
        nextEl: '.swipe-prev',
        prevEl: '.swipe',
      },

      autoplay: {
        delay: 8000, // 2000ms = 2s
        disableOnInteraction: false,
      },

      pagination: {
      el: '.swiper-pagination',
      clickable: true, // Rendre les points cliquables
    },
    breakpoints: {
                1200: {
                    slidesPerView: 4,
                    spaceBetween: 50,
                },
                900: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                600: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                400: {
                    slidesPerView: 1,
                    spaceBetween: 10,
                },100:{
                    slidesPerView: 1,
                    spaceBetween: 10,
                }
            }

     

      // And if we need scrollbar

    });
  </script>
</body>
</html>