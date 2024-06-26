<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home</title>

    <!--------swiper css link---------->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-------font awesome cdn link---------->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/3.5.0/remixicon.css">

    <!---------custom css file link-------------->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!--------header section starts----------->
<section class="header">
    <a href="home.php" class="logo">Dream Tour</a>

    <nav class="navbar">
        <a href="home.php">home</a>
        <a href="about.php">about</a>
        <a href="package.php">packages</a>
        <a href="book.php">book</a>
    </nav>

    
<div id="menu-btn" class="ri-menu-line"></div>
</section>


<!--------header section ends----------->

<!---------home section starts----------->

<section class="home">
    <div class="swiper home-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide" style="background: url(/image/home-1.webp) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>travel around the world</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(/image/home-2.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>discover the new places</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-slide slide" style="background: url(/image/home-3.avif) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>make your tour worthwhile</h3>
                    <a href="package.php" class="btn">discover more</a>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<!---------home section ends----------->

<!--------service section starts--------->
<section class="services">
    <h1 class="heading-title"> our services</h1>
    <div class="box-container">
        <div class="box">
            <img src="image/icon-1.png" alt="">
            <h3>adventure</h3>
        </div>

        <div class="box">
            <img src="image/icon-2.png" alt="">
            <h3>tour guide</h3>
        </div>

        <div class="box">
            <img src="image/icon-3.png" alt="">
            <h3>trekking</h3>
        </div>

        <div class="box">
            <img src="image/icon-4.png" alt="">
            <h3>camp fire</h3>
        </div>

        <div class="box">
            <img src="image/icon-6.png" alt="">
            <h3>off roads</h3>
        </div>

        <div class="box">
            <img src="image/icon-5.png" alt="">
            <h3>camping</h3>
        </div>
    </div>
</section>

<!----------service section ends------------->

<!--------home about section starts--------->
<section class="home-about">
    <div class="image">
        <img src="/image/About.jpg" alt="">
    </div>
    <div class="content">
        <h3>about us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempora ex voluptatum culpa? Iste, blanditiis ratione a earum eum nobis recusandae vel debitis maiores! Aperiam necessitatibus repellat reiciendis, autem repudiandae voluptates!</p>
        <a href="about.php" class="btn">read more</a>
    </div>
</section>

<!--------home about section ends--------->

<!---------home packages section starts----------->
<section class="home-packages">
    <h1 class="heading-title"> our packages </h1>
    <div class="box-container">
        <div class="box">
            <div class="image">
                <img src="/image/tour-2.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nemo maxime quam illo adipisci explicabo, magnam impedit ad delectus, aliquid veniam, natus maiores reiciendis recusandae accusantium voluptate eius inventore optio?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/image/tour-1.jpg" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nemo maxime quam illo adipisci explicabo, magnam impedit ad delectus, aliquid veniam, natus maiores reiciendis recusandae accusantium voluptate eius inventore optio?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="box">
            <div class="image">
                <img src="/image/tour-3.webp" alt="">
            </div>
            <div class="content">
                <h3>adventure & tour</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nemo maxime quam illo adipisci explicabo, magnam impedit ad delectus, aliquid veniam, natus maiores reiciendis recusandae accusantium voluptate eius inventore optio?</p>
                <a href="book.php" class="btn">book now</a>
            </div>
        </div>
        <div class="load-more"> <a href="package.php" class="btn">load more</a></div>
    </div>
</section>
<!---------home packages section ends----------->

<!------home offer section starts------->

<section class="home-offer">
    <div class="content">
        <h3>upto 50% off</h3>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis eveniet amet sed aperiam quos nobis nihil mollitia suscipit saepe officiis rem magni temporibus aliquam cum, quaerat harum sequi veritatis quae!</p>
        <a href="book.php" class="btn">book now</a>
    </div>
</section>

<!------home offer section ends------->
















<!--------footer section starts---------->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>quick links</h3>
            <a href="home.php"><i class="ri-arrow-right-line"></i>home</a>
            <a href="about.php"><i class="ri-arrow-right-line"></i>about</a>
            <a href="package.php"><i class="ri-arrow-right-line"></i>package</a>
            <a href="book.php"><i class="ri-arrow-right-line"></i>book</a>
        </div>
        <div class="box">
            <h3>extra links</h3>
            <a href="#"><i class="ri-arrow-right-line"></i> ask questions</a>
            <a href="#"><i class="ri-arrow-right-line"></i> about us</a>
            <a href="#"><i class="ri-arrow-right-line"></i> privacy policy</a>
            <a href="#"><i class="ri-arrow-right-line"></i> terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="ri-contacts-line"></i> +91 985-675-2673</a>
            <a href="#"><i class="ri-contacts-line"></i> +999-666-324</a>
            <a href="#"><i class="ri-mail-line"></i> anuprita05@gmail.com</a>
            <a href="#"><i class="ri-map-pin-line"></i> pune, india - 411046</a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"><i class="ri-facebook-line"></i> facebook</a>
            <a href="#"><i class="ri-twitter-line"></i> twitter</a>
            <a href="#"><i class="ri-instagram-line"></i> instagram</a>
            <a href="#"><i class="ri-linkedin-line"></i> linkedIn</a>
        </div>
        

    </div>

    <div class="credit"> created by <span>Anuprita Prashant Yadav</span> | all rights reserved! </div>

</section>

<!--------footer section ends----------->

<!---------swiper js link----------->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!---------custom js file link-------------->
<script src="js/script.js"></script>
</body>
</html>