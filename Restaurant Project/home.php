<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- 
        Tristani Makharashvili
        CISC 380 - Web Development
        Restaurant Webapge
    -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Georgian Restaurant</title>
    <link rel="stylesheet" href="homePage.css">
    <!--For footer icons-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />
</head>

<body>
    <!-- 
        Code for homepage
    -->
    <div class="homePage">
        <div class="navbar">
        <h1 id="loggedIn">Welcome, <?php echo $_SESSION['user_name']; ?>!</h1>  
        <img src="images/Georgian Cuisine-logos_transparent.png" alt="Logo Image" class="logo">
            <nav>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">MENU</a></li>
                    <li><a href="orderOnline.php">ORDER ONLINE</a></li>
                    <li><a href="logout.php">LOG OUT</a></li>
                </ul>
            </nav>

            <img src="images/menuIcon.jpg" alt="Menu Image" class="menuIcon">
        </div>

        <div class="row">
            <div class="col">
                <h1 style="color: aliceblue; font-size: 60px;">Georgian Cuisine</h1>
                <p>Georgian food is arguably one of the world’s best cuisines, featuring flavors from Greece and the Mediterranean, as well as influences from Turkey and Persia. This Georgian food guide is drawn from experiences traveling across the country
                    — visits to local markets, meals in family homes and restaurants, and even an impromptu cooking course. </p>
                <button type="buttom">Explore</button>
            </div>

            <div class="col">
                <div class="card card1">
                    <h4>Sufra</h4>
                </div>
                <div class="card card2">
                    <h4>Khinkali</h4>
                </div>
                <div class="card card3">
                    <h4>Mwvadi</h4>
                </div>
                <div class="card card4">
                    <h4>Khachapuri</h4>
                </div>
            </div>
        </div>
    </div>

    <!-- 
        End of homepage
    -->


    <!--Menu-->
    <section id="menu">

        <div class="menu-heading">
            <span style="font-size: 60px; color: black;">Our Menu</span>
            <h3 style="color: grey; font-size: 30px;">Authentic Georgian Cuisine</h3>
        </div>

        <!--Menu container-->
        <div class="menu-container">

            <!--Meal 1-->
            <div class="menu-box">
                <!--Image-->
                <div class="menu-img">
                    <img src="images/acharuli-khachapuri.jpg" alt="menu">
                </div>

                <!--Text-->
                <div class="menu-text">
                    <span>Acharuli Khachapuri</span>
                    <a href="#" class="description">A Georgian bread stuffed with a specific melting cheese known as sulguni from the Samegrelo region of the Republic of Georgia, a country situated in Eurasia at the crossroads of Eastern Europe and West Asia between Russia and Turkey.</a>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="">Read More</a>
                </div>
            </div>

            <!--Meal 2-->
            <div class="menu-box">
                <!--Image-->
                <div class="menu-img">
                    <img src="images/khinkali-twojpg.jpg" alt="menu">
                </div>

                <!--Text-->
                <div class="menu-text">
                    <span>Khinkali</span>
                    <a href="#" class="description">Khinkali is a very popular dumpling in Georgian cuisine. It is made of twisted knobs of dough, stuffed with meat and spices.</a>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="">Read More</a>
                </div>
            </div>

            <!--Meal 3-->
            <div class="menu-box">
                <!--Image-->
                <div class="menu-img">
                    <img src="images/red-wine.jpg" alt="menu">
                </div>

                <!--Text-->
                <div class="menu-text">
                    <span>Red Wine</span>
                    <a href="#" class="description">In a classic instance of the tail wagging the dog, Georgia is known by many people for kvevri wines, which are fermented (and sometimes aged) in clay vessels—its namesake kvevri—that are often buried underground.</a>
                    <p>Lorem ipsum dolor sit amet.</p>
                    <a href="">Read More</a>
                </div>
            </div>
        </div>



    </section>
    <!--end of Menu-->

    <!--Form submission-->
    <div class="contact-title">
        <h1>We Want To Hear From You</h1>
        <h2>Provide feedback</h2>
    </div>



    <div class="contact-form">
        <form id="contact-form" method="post" action="feedbackSubmission.php">
            <input name="name" type="text" class="form-control" placeholder="Your Name" required><br>
            <input name="email" type="text" class="form-control" placeholder="Your Email" required><br>

            <textarea name="message" class="form-control" placeholder="Message" row="7" required></textarea><br>
        
            <input type="submit" class="form-control submit" value="Send Message">
        </form>
    </div>

    <!--Footer-->
    <section class="footer">
        <div class="social">
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-snapchat"></i></a>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
        </div>

        <ul class="list">
            <li><a href="#">Contact Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms</a></li>
        </ul>
        <p class="copyright">
            All Rights Reserved. <br>© Tristani Makharashvili
        </p>
    </section>
    <!--End of Footer-->

</body>

</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>