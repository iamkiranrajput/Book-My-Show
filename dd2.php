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
      <li>  <a class="sign-in-button" href="" id="myAnchor"></a></li>
    </ul>
  </nav>

    
  <section>

    
    <!-- Booking Form -->
    <div class="booking-form">
      <h2>Movie Booking</h2>
      <form action="#" method="post">
        <label for="movie">Select Movie:</label>
        <select name="movie" id="movie">
          <option value="<?php echo$_GET['movie'];?>"><?php echo$_GET['movie'];?></option>
          <option  value="John Wick 4">John Wick 4</option>
          <option value="The Flash">The Flash</option>
          <option value="Transformers">Transformers</option>	
          <option value="Spiderman into spider verse">Spiderman into spider verse</option>	
        </select>
        <label for="date">Select Date:</label>
        <input type="date" name="date" id="date" placeholder="Date">
        <label>Select Format:</label>
        <input type="radio" name="format" value="2d" checked> 2D
        <input type="radio" name="format" value="3d"> 3D
      <input type="submit" name='bookseat' value="Book Now" class="booknowbtn">
      </form>
    </div>
    
  </section>
  <?php include_once("js.php");?>
</body>
</html>

<?php

if(isset($_POST['bookseat'])){
$id=$_SESSION['id'];
$moviename=$_POST['movie'];
$date=$_POST['date'];
$format=$_POST['format'];
$seat="Random";
    $sql="INSERT INTO moviebooking(UserId, MovieName,MovieDate,Format,Seat)VALUES('$id','$moviename','$date','$format','$seat')";

    $query=mysqli_query($conn, $sql);

    if($query){
      ?><script>alert("movie booked succesfully");
      </script><?php
    // header("Location:seats.php");

      
    }
    else{
      ?><script>alert("errtr");</script><?php

    }
}

?>