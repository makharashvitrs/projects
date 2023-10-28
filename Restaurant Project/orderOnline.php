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
        <link rel="stylesheet" href="orderOnline.css">
        <!--For footer icons-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>

        <!-- Code for navbar -->
        <div class="orderOnline">
            <div class="navbar">
                <h1 id="loggedIn">Ready to order, <?php echo $_SESSION['user_name']; ?>?</h1>
                <nav>
                    <ul>
                        <li><a href="home.php">HOME</a></li>
                        <li><a href="">MENU</a></li>
                        <li><a href="">ORDER ONLINE</a></li>
                        <li><a href="logout.php">LOG OUT</a></li>
                    </ul>
                </nav>

                <img src="images/menuIcon.jpg" alt="Menu Image" class="menuIcon">
            </div>

        </div>

        <!--End of nvabar-->



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
} else {
    header("Location: index.php");
    exit();
}
?>