<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IF-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>packages</title>

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

<div class="heading" style="background: url(image/book-1.jpg) no-repeat">
    <h1>Book Now</h1>
</div>

<!---------booking section starts------------>
<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book-form">
        <div class="flex">
            <div class="inputBox">
                <span>name :</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email :</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone :</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address :</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>where to :</span>
                <input type="text" placeholder="place you want to visit" name="location">
            </div>
            <div class="inputBox">
                <span>how many :</span>
                <input type="number" placeholder="number of guests" name="guests">
            </div>
            <div class="inputBox">
                <span>arrivals :</span>
                <input type="date" name="arrivals">
            </div>
            <div class="inputBox">
                <span>leaving :</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>

<!---------booking section starts------------>





















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