<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width-device-width, initial-scale=1.0">
    <title><?php echo $page ?></title>
    <link rel="icon" type="image/png" href="./../assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <!--added a cdn link by searching font awesome4 cdn and getting this link from https://www.bootstrapcdn.com/fontawesome/ this url*/-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <?php if ($page === 'Success Email Page' || $page === 'Contact Us') : ?>
        <link href="./../node_modules/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="./../assets/css/bootstrap.min.css">
    <?php endif ?>
    <link rel="stylesheet" href="./../assets/css/style.css">
</head>

<?php if ($page !== 'Success Email Page' && $page !== 'Contact Us') : ?>

    <body>
        <div class="header">
            <div class="container">
                <div class="navbar">
                    <div class="logo">
                        <a href="./../">
                            <img src="./../assets/images/logo.png" alt="Logo Here" width="125px">
                        </a>
                    </div>
                    <nav>
                        <ul id="MenuItems">
                            <li><a href="./../">Home</a></li>
                            <li><a href="./">Products</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="./../contact-us/">Contact</a></li>


                        </ul>
                    </nav>
                    <a href="#"><img src="./../assets/images/cart.png" width="30px" height="30px"></a>
                    <img src="./../assets/images/menu.png" class="menu-icon" onClick="menutoggle()">
                </div>
            </div>
        </div>

    <?php endif; ?>