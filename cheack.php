
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book My Movie</title>
    <link rel="stylesheet" href="css/style.css" />
   
</head>

<body>
    <h1>Book My Movie</h1>

    <nav>
        <ul>
            <li><a href="cheack.php">Home</a></li>
            <li><a href="streams.php">Streams</a></li>
            <li><a href="Events.php">Events</a></li>
            <li><a href="spports.php">Sports</a></li>
            <li><a href="help.php">Help</a></li>
            <li>  <a class="sign-in-button" href="" id="myAnchor"></a></li>
        
        </ul>
    </nav>
  

    <section>
        <div class="search-form">
            <form action="#" method="get">
                <input type="text" name="search" placeholder="Search movies...">
                <input type="submit" value="Search">
            </form>
        </div>

        <img src="download/stream.jpg" alt="Movie Banner" width="100%">

        <h2>Recommended Movies</h2>

        <div class="recommended-movies">
            <div class="movie-container">
                <img src="download/adipurush-poster-5.jpg" alt="Movie 1">
                <a class="movie-button" href="dd2.php?movie=Adipurush">Book Now</a>
            </div>
            <div class="movie-container">
                <img src="download/wp11345399.jpg" alt="Movie 2">
                <a class="movie-button" href="dd2.php?movie=John Wick 4">Book Now</a>
            </div>
            <div class="movie-container">
                <img src="download/adipurisg.jpg" alt="Movie 3">
                <a class="movie-button" href="dd2.php?movie=Flash">Book Now</a>
            </div>
            <div class="movie-container">
                <img src="download/4.jpg" alt="Movie 4">
                <a class="movie-button" href="dd2.php?movie=Transformer Rise of the Beasts">Book Now</a>
            </div>
            <div class="movie-container">
                <img src="download/5.jpg" alt="Movie 5">
                <a class="movie-button" href="dd2.php?movie=spider-man">Book Now</a>
            </div>
        </div>
        <h2>.</h2>
        <img src="download/stream.jpg" alt="Movie Banner" width="100%">

        <h2>The Best Of Live Events</h2>
        <img src="download/2%20.1%20.jpg" width="200" height="200" alt="Events 1">
        <img src="download/2.2.jpg" width="200" height="200" alt="Events 2">
        <img src="download/2.3.jpg" width="200" height="200" alt="Events 3">
        <img src="download/2.4.jpg" width="200" height="200" alt="Events 4">
        <img src="download/2.5.jpg" width="200" height="200" alt="Events 5">
    </section>

    <footer>
    <div class="footer-content">
        <div class="footer-section about">
            <h3>About Us</h3>
            <p>"Welcome to our online movie ticket booking platform, where you can easily browse, book, and enjoy the latest movies with just a few clicks. We provide a seamless and convenient experience, ensuring you never miss out on your favorite films.".</p>
        </div>
        <div class="footer-section contact">
            <h3>Contact Us</h3>
            <p><i class="fa fa-phone"></i>
                <div class="footer-section links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="cheack.php">Home</a></li>
                        <li><a href="streams.php">Movies</a></li>
                        <li><a href="Events.php">Events</a></li>
                        <li><a href="help.php">FAQ</a></li>
                        <li><a href="help.php">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 BookMyMovie. All rights reserved. | Designed by Juned Shaikh</p>
            </div>
        </div>
    </footer>
    <?php
include_once("js.php");
?>
</body>


</html>

