<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title>Phalk Water</title>
    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./assets/js/main.js" defer></script>
</head>

<body>
    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <a href="./"><img src="./assets/images/logo.png" alt="Logo Here" width="125px"></a>
                </div>
                <nav>
                    <ul id="MenuItems">
                        <li><a href="./">Home</a></li>
                        <li><a href="./product/">Products</a></li>
                        <li><a href="#">About</a></li>
                        <li><a href="#">Contact</a></li>


                    </ul>
                </nav>
                <a href="#"><img src="./assets/images/cart.png" width="30px" height="30px"></a>
                <img src="./assets/images/menu.png" class="menu-icon" onClick="menutoggle()">
            </div>

            <div class="row">
                <div class="col-2">
                    <h1>Phalk Water</h1>
                    <p id="typed-text"><br></p>
                    <a href="./product/" class="btn">Explore Now &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="./assets/images/landing-page.png" alt="Picture Here Company Ads or something| dimension: 2094 X 1806 pixel">
                </div>
            </div>
        </div>
    </div>

    <!------------------------------ featured categories------------------------------>
    <!-- <div class="categories">
            <div class="small-container">
                <div class="row">
                    <div class="col-3">
                        <img src="./assets/images/water-softener.png">
                    </div>
                    <div class="col-3">
                        <img src="./assets/images/Picture5.png">
                    </div>
                    <div class="col-3">
                        <img src="./assets/images/Picture5.png">
                    </div>
                </div>
            </div>
        </div> -->

    <!------------------------------ featured Products------------------------------>
    <div class="small-container">
        <h2 class="title">Featured Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="./product/water-softener.php"><img src="./assets/images/water-softener.png"></a>
                <h4>Water Softener</h4>
                <div class="rating">
                    <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="./product/multimedia-filter.php"><img src="./assets/images/multimedia-filter.png"></a>
                <h4>Multimedia Filter</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$35.00</p>
            </div>
            <div class="col-4">
                <a href="./product/reverse-osmosis.php"><img src="./assets/images/multimedia-filter.png"></a>
                <h4>Reverse Osmosis</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$15.00</p>
            </div>
        </div>


        <h2 class="title">Latest Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="./product/water-softener.php"><img src="./assets/images/water-softener.png"></a>
                <h4>Water Softener</h4>
                <div class="rating">
                    <!--(before this added awesome4 cdn font link to the head)added a cdn link by searching font awesome4 icon and from the site  search the star entering the first option and getting a link of this fa-star*-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$50.00</p>
            </div>
            <div class="col-4">
                <a href="./product/multimedia-filter.php"><img src="./assets/images/multimedia-filter.png"></a>
                <h4>Multimedia Filter</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>$21.00</p>
            </div>
            <div class="col-4">
                <a href="./product/reverse-osmosis.php"><img src="./assets/images/multimedia-filter.png"></a>
                <h4>Reverse Osmosis</h4>
                <div class="rating">
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>$09.00</p>
            </div>
        </div>
        <!--new row for the latest product-->
    </div>

    <!--------------------------`   offer   --------------------------------->
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="./assets/images/water-softener.png" offer-img">
                </div>
                <div class="col-2">
                    <p>Lorem ipsum dolor sit.</p>
                    <h1>Lorem, ipsum.</h1>
                    <small> Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aliquid error nostrum ad fuga iste modi nihil sequi, ab fugit ipsa. </small><br>
                    <a href="products.html" class="btn">Buy Now &#8594;</a>
                </div>
            </div>
        </div>
    </div>



    <!------------------------------Testimonial---------------------------------->


    <!----------------------------------Brands------------------------------------>
    <!-- <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="./assets/images/" alt="partners logo here">
                </div>
                <div class="col-5">
                    <img src="./assets/images/" alt="partners logo here">
                </div>
                <div class="col-5">
                    <img src="./assets/images/" alt="partners logo here">
                </div>
                <div class="col-5">
                    <img src="./assets/images/" alt="partners logo here">
                </div>
                <div class="col-5">
                    <img src="./assets/images/" alt="partners logo here">
                </div>
            </div>
        </div>
    </div> -->


    <!----------------------------------footer------------------------------------->
    <div class="footer">
        <div class="container">

            <div class="row">
                <div class="footer-col-1">
                    <h3>Lorem ipsum dolor sit amet consectetur.</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, accusamus.</p>
                    <div class="app-logo">
                        <img src="./assets/images/logo.png" alt="store logo">
                        <img src="./assets/images/" alt="partner logo">
                    </div>
                </div>
                <div class="footer-col-2">
                    <img src="./assets/images/logo.png" alt="store logo">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla, accusamus.</p>
                </div>
                <div class="footer-col-3">
                    <h3>Useful Links</h3>
                    <ul>
                        <li>Coupons</li>
                        <li>Blog Post</li>
                        <li>Return Policy</li>
                        <li>Join Affiliate</li>
                    </ul>
                </div>
                <div class="footer-col-4">
                    <h3>Follow us</h3>
                    <ul>
                        <li>Facebook</li>
                        <li>Twitter</li>
                        <li>Instagram</li>
                        <li>Youtube</li>
                    </ul>
                </div>

            </div>

        </div>
    </div>
</body>
<script src="./assets/js/main.js" defer></script>

</html>