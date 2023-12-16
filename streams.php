
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Streams - Streams</title>
    <link rel="stylesheet" href="css/streams.css" />
   
</head>

<body>
    <h1>Book My Streams - Streams</h1>

    <nav>
        <ul>
            <li><a href="cheack.php">Home</a></li>
            <li><a href="streams.php">Streams</a></li>
            <li><a href="Events.php">Events</a></li>
            <li><a href="spports.php">Sports</a></li>
            <li><a href="help.php">Help</a></li>
            <li> <a class="sign-in-button" href="" id="myAnchor"></a></li>
        </ul>
    </nav>
   

    <section>
        <div class="search-form">
            <form action="#" method="get">
                <input type="text" name="search" placeholder="Search streams...">
                <input type="submit" value="Search">
            </form>
        </div>

        <h2>Premiere Of Week</h2>

        <div class="stream-list">
            <img src="images/s.1.jpg" alt="Stream 1">
            <img src="images/s.2.jpg" alt="Stream 2">
            <img src="images/s.3.jpg" alt="Stream 3">
            <img src="images/s.4.jpg" alt="Stream 4">
            <img src="images/s.j.jpg" alt="Stream 5">
        </div>

        <h3>Upcoming Releases</h3>

        <div class="stream-list">
            <img src="images/3.1.jpg" alt="Stream 1">
            <img src="images/3.2.jpg" alt="Stream 2">
            <img src="images/3.3.jpg" alt="Stream 3">
            <img src="images/3.4.jpg" alt="Stream 4">
        </div>
    </section>
    
<footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>About Us</h3>
            <p>"Welcome to our online movie ticket booking platform, where you can easily browse, book, and enjoy the latest movies with just a few clicks. We provide a seamless and convenient experience, ensuring you never miss out on your favorite films.".</p>
        </div>
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p><i class="fa fa-phone"></i> +91 9156286746 Juned Shaikh</p>
            <p><i class="fa fa-envelope"></i>shaikhtohit2313@gmail.com </p>
            <p><i class="fa fa-map-marker"></i> PES college of engineering, Aurangabad, India</p>
        </div>
        <div class="footer-section links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="cheack.php">Home</a></li>
                <li><a href="streams.php">Streams</a></li>
                <li><a href="Events.php">Events</a></li>
                <li><a href="spports.php">Sports</a></li>
                <li><a href="help.php">Help</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom">
        <p>&copy; 2023 BookMyMovie. All rights reserved. | Designed by Juned Shaikh</p>
    </div>
</footer>
<?php
include_once("js.php");
?>
</body>



</html>
