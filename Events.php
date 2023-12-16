
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/Events.css" />
  <link rel="stylesheet" href="css/style.css" />
  
</head>
<body>




  <h1>Book My Event - Upcoming Events</h1>

  <nav>
    <ul>
      <li><a href="cheack.php">Home</a></li>
      <li><a href="streams.php">Streams</a></li>
      <li><a href="Events.php">Events</a></li>
      <li><a href="spports.php">Sports</a></li>
      <li><a href="help.php">Help</a></li>
      <li><a class="sign-in-button" href="" id="myAnchor"></a></li>
    </ul>
  </nav>
  
  <section>
    <div class="search-form">
      <form action="#" method="get">
        <input type="text" name="search" placeholder="Search events...">
        <input type="submit" value="Search">
      </form>
    </div>

    <img src="images/E1.jpg" alt="Event Banner" width="100%">

    <h2>Upcoming Events</h2>
    
    <div class="event-list">
      <div>
        <img src="images/E3.jpg" alt="Event 1">
        <a class="movie-button" href="Eventbooking.php?Event=Dongari To Nowhere&Date=19-10-2023">Book Now</a>

      </div>
      <div>
        <img src="images/E2.jpg" alt="Event 2">
        <a class="movie-button" href="Eventbooking.php?Event=Samay Raina&Date=24-06-2023">Book Now</a>

      </div>
      <div>
        <img src="images/E4.jpg" alt="Event 3">
        <a class="movie-button" href="Eventbooking.php?Event=Delhi Theater Festival&Date=soon">Book Now</a>

      </div>
      <div>
        <img src="images/3.0.jpg" alt="Event 4">
        <a class="movie-button" href="Eventbooking.php?Event=Ab Hai Apaki Bar&Date=05-08-2023">Book Now</a>
        
      </div>
      <div>
        <img src="images/3.0.0.jpg" alt="Event 5">
        <!-- <button class="book-button">Book Now</button> -->
        <a class="movie-button" href="Eventbooking.php?Event=Shubh Mangal Savdhan&Date=24-06-2023">Book Now</a>

      </div>
    </div>
  </section>

  <footer>
    <div class="footer-content">
      <div class="footer-section about">
        <h3>About Us</h3>
        <p>Welcome to our online event booking platform, where you can easily browse, book, and enjoy upcoming events with just a few clicks. We provide a seamless and convenient experience, ensuring you never miss out on your favorite events.</p>
      </div>
      <div class="footer-section contact">
        <h3>Contact Us</h3>
        <p><i class="fa fa-phone"></i> +91 9156286746 Juned Shaikh</p>
        <p><i class="fa fa-envelope"></i> shaikhtohit2313@gmail.com</p>
        <p><i class="fa fa-map-marker"></i> PES college of engineering, Aurangabad, India</p>
      </div>
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
      <p>&copy; 2023 BookMyEvent. All rights reserved. | Designed by Juned Shaikh</p>
    </div>
  </footer>

<?php
include_once("js.php");
?>
</body>
</html>
