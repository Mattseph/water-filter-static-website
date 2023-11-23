<?php include "./../includes/header.php"; ?>


<!------------------------------ Products------------------------------>
<div class="small-container">
    <div class="row row-2">
        <h2>All Products</h2>
        <select>
            <option>Default sorting</option>
            <option>Short by price</option>
            <option>Short by popularity</option>
            <option>Short by rating</option>
            <option>Short by sale</option>
        </select>
    </div>


    <!--<h2 class="title" >Featured Products</h2>-->
    <div class="row">
        <div class="col-4">
            <a href="water-softener.php">
                <img src="./../assets/images/water-softener.png">
                <h4>Water Softener</h4>
            </a>

            <div class="rating">

                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half-o"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <a href="multimedia-filter.php">
                <img src="./../assets/images/multimedia-filter.png">
                <h4>Multimedia Filter</h4>
            </a>

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
            <a href="reverse-osmosis.php">
                <img src="./../assets/images/reverse-osmosis.png">
                <h4>Reverse Osmosis</h4>
            </a>

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

    <div class="page-btn">
        <span>1</span>
        <span>2</span>
        <span>3</span>
        <span>4</span>
        <span>&#8594;</span>
    </div>

</div>


<?php include "./../includes/footer.php"; ?>