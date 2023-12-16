
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book My Sports - Sports</title>
  <link rel="stylesheet" href="css/spports.css" />
</head>
<body>
  <h1>Book My Sports - Sports</h1>

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
    <img src="download/sports%201.jpg" alt="Sports Banner" width="100%" >
    <div class="search-form">
      <form action="#" method="get">
        <input type="text" name="search" placeholder="Search sports...">
        <input type="submit" value="Search">
      </form>
    </div>

    <h2>Upcoming Sports Events</h2>

    <div class="sport-list">
      <img src="download/sports%202.jpg" alt="Sport 1" style="max-width: 200px; height: auto;">
      <img src="download/sports%203.jpg" alt="Sport 2" style="max-width: 200px; height: auto;">
      <img src="download/sports%204.jpg" alt="Sport 3" style="max-width: 200px; height: auto;">
      <img src="download/sports%205.jpg" alt="Sport 4" style="max-width: 200px; height: auto;">
      <img src="download/sportss%20s%20.jpg" alt="Sport 5" style="max-width: 200px; height: auto;">
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
        <p><i class="fa fa-envelope"></i> shaikhtohit2313@gmail.com </p>
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
