<?php session_start(); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HoldingDrink</title>

    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


    <!-- custom css file link -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/4592f70558.js" crossorigin="anonymous"></script>

</head>
<body> 

<!-- header section starts -->

<header class="header">
<!-- <a href="#" class="header-logo">Holding<span>Drink</span>.</a> -->

    <a href="#" class="logo">
        <img src="logo.png" alt="">
    </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#about">About</a>
        <a href="#menu">Menu</a>
        <a href="#contact">Contact</a>
    </nav>

    <div class="navbar-extra">
        <a href="#" id="search"><i data-feather="search"></i></a>
        <a href="#" id="shopping-cart"><i data-feather="shopping-cart"></i></a>
        <?php if(isset($_SESSION['username']) || !empty($_SESSION['username'])) {?>
        <a href="php/logout.php" id="log-out"><i data-feather="log-out"></i></a>
        <?php }else{ ?>
        <a href="indexlogin.php" id="log-in"><i data-feather="user"></i></a> 
        <?php } ?>
        <?php if(isset(($_SESSION['username'])) || !empty($_SESSION['username'])) {?>

        <a href="#" id="hamburger-menu"><i data-feather="menu"></i></a>
        <?php }  ?>
    </div>

    <div class="icons">
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-bars" id="menu-btn"></div>
    </div>

    <div class="search-form">
        <input type="search" id="search-box" placeholder="search here....">
        <label for="search-box" class="fas fa-search"></label>
    </div>

    <div class="cart-items-container">
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cart-item-1.jpg" alt="">
            <div class="content">
                <h3>cart item 01</h3>
                <div class="price">$15.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cart-item-1.jpg" alt="">
            <div class="content">
                <h3>cart item 02</h3>
                <div class="price">$15.000</div>
            </div>
        </div>
        <div class="cart-item">
            <span class="fas fa-times"></span>
            <img src="cart-item-1.jpg" alt="">
            <div class="content">
                <h3>cart item 03</h3>
                <div class="price">$15.000</div>
            </div>
        </div>
    </div>

</header>

<!-- header section ends -->

<!-- home section starts -->

<section class="home" id="home">
    
    <div class="content">
    <h1>Mari<span>  Minum </span></h1>
        <p>
        Lorem ipsum dolor sit amet consectetur!
        </p>
        <button type="button" class="btn">Beli sekarang</button>
    </div>

</section>

<!-- home section ends -->

<!-- about section starts -->

<section class="about" id="about">
    <h1 class="heading"> <span>about</span>  us </h1>

    <div class="row">

        <div class="image">
            <img src="bg.jpg" alt="">
        </div>

        <div class="content">
            <h3>Lorem ipsum dolor sit amet consectetur</h3>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Amet facilis recusandae nisi, ullam quasi debitis id animi
                quae nihil a veritatis earum ipsam officiis fugit, rerum tempore,
                voluptate totam ducimus?</p>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Amet facilis recusandae nisi, ullam quasi debitis id animi
                quae nihil a veritatis earum ipsam officiis fugit, rerum tempore,
                voluptate totam ducimus?</p>
            <button type="button" class="btn">Learn more</button>
        </div>
    </div>
</section>

<!-- about section ends -->

<!-- menu section starts -->

<section class="menu" id="menu">

    <h1 class="heading"><span>menu</span> kami </h1>
    <section class="about" id="about">
        <div class="content">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit</h3>
        </div>
    </section>

    <div class="box-container">

        <div class="box">
            <img src="menu-1.jpg" alt="">
            <h3>-Revision-</h3>
            <div class="price">$15.000 <span>20.00</span></div>
            <!-- <a type="button" class="btn btn-primary btn-lg">add to</a> -->
        </div>

        <div class="box">
            <img src="menu-1.jpg" alt="">
            <h3>-Revision-</h3>
            <div class="price">$15.000 <span>20.00</span></div>
            <!-- <a type="button" class="btn btn-primary btn-lg">add to</a> -->
        </div>

        <div class="box">
            <img src="menu-1.jpg" alt="">
            <h3>-Revision-</h3>
            <div class="price">$15.000 <span>20.00</span></div>
            <!-- <a type="button" class="btn btn-primary btn-lg">add to</a> -->
        </div>

        <div class="box">
            <img src="menu-1.jpg" alt="">
            <h3>-Revision-</h3>
            <div class="price">$15.000 <span>20.00</span></div>
            <!-- <a type="button" class="btn btn-primary btn-lg">add to</a> -->
        </div>

        <div class="box">
            <img src="menu-1.jpg" alt="">
            <h3>-Revision-</h3>
            <div class="price">$15.000 <span>20.00</span></div>
            <!-- <a type="button" class="btn btn-primary btn-lg">add to</a> -->
        </div>

        <div class="box">
            <img src="menu-1.jpg" alt="">
            <h3>-Revision-</h3>
            <div class="price">$15.000 <span>20.00</span></div>
            <!-- <a type="button" class="btn btn-primary btn-lg">add to</a> -->
        </div>
    </div>

</section>

<!-- menu section ends -->

<!-- contact section starts -->

<section class="contact" id="contact">

    <h1 class="heading"> <span>Kontak</span> Kami </h1>

    <div class="row">

        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.444738744275!2d111.
        71097837414261!3d-8.056034780481516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.
        1!3m3!1m2!1s0x2e791b2b0606b7a5%3A0x4a928b26bb669a9b!2sSMKN%202%20Trenggalek!5e0!3m2!1sid!2sid!4v1690635563576!5m2!1sid!2sid"
        allowfullscreen="" loading="lazy"></iframe>

        <form action="">
            <h3>get in touch</h3>
            <div class="inputBox">
                <span class="fas fa-user"></span>
                <input type="text" placeholder="name">
            </div>
            <div class="inputBox">
                <span class="fas fa-envelope"></span>
                <input type="email" placeholder="email">
            </div>
            <div class="inputBox">
                <span class="fas fa-phone"></span>
                <input type="number" placeholder="number">
            </div>
            <button type="button" class="btn">Kirim Pesan</button>
        </form>
        
    </div>

</section>

<!-- contact section ends -->

<!-- footer section starts -->

<section class="footer">

    <div class="share">
        <a href="#" class="fab fa-facebook-f"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
        <a href="#" class="fab fa-pinterest"></a>
    </div>

    <div class="links">
        <a href="#home">home</a>
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <a href="#contact">contact</a>
    </div>

    <div class="credit">created by dafa setya oriendra</span> | all rights reserved</div>
</section>

<!-- footer section ends -->

<!-- custom js file link -->

<script src="myScript.js"></script>

</body>
</html>