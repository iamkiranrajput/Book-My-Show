<?php
include_once("session.php");
include_once("connection.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book My Movie - Movie Booking</title>
  <link rel="stylesheet" href="css/booking.css" />

</head>
<body>
  <h1>Book My Movie - Movie Booking</h1>
  
  <nav>
    <ul>
      <li><a href="cheack.php">Home</a></li>
      <li><a href="streams.php">Streams</a></li>
      <li><a href="Events.php">Events</a></li>
      <li><a href="spports.php">Sports</a></li>
      <li><a href="help.php">Help</a></li>
      <li>  <a class="sign-in-button" href="logout.php">Logout</a></li>
    </ul>
  </nav>

    
  <section>
    
    
    <!-- Booking Form -->
    <div class="booking-form">
      <h2>Movie Booking</h2>
      <form action="#" method="post">
        <label for="movie">Selected Event:</label>
        <select name="event" id="movie">
          <option value="<?php echo$_GET['Event'];?>"><?php echo$_GET['Event'];?></option>
        </select>
       
        <label for="date"> <b><?php echo$_GET['Date'];?></b> </label>
        <label>Select Mode:</label>
        <input type="radio" name="mode" value="Live" checked>Live
        <input type="radio" name="mode" value="Recorded">Recorded
      <input type="submit" name='bookEvent' value="Book Now" class="booknowbtn">
      </form>
    </div>
    
  </section>

  
</body>
</html>
<?php
if(isset($_POST['bookEvent'])){
    $userid=$_SESSION['id'];
    $eventname=$_POST['event'];
    $date=$_GET['Date'];
    $mode=$_POST['mode'];

    $sql="INSERT INTO eventbooking (UserId,EventName,Date,Mode)VALUES('$userid','$eventname','$date','$mode')";

    $query=mysqli_query($conn, $sql);

    if($query){
        ?><Script>alert("Event Booked");
   
        </Script><?php

        
    }

}
?>