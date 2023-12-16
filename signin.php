<?php 
include_once("connection.php");
session_start();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Movie Ticket Booking</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      max-width: 400px;
      margin: 0 auto;
      padding: 20px;
      background-color: #ffffff;
      border: 1px solid #cccccc;
      border-radius: 5px;
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
    }

    h2 {
      text-align: center;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    button {
      background-color: #4CAF50;
      color: #fff;
      padding: 12px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      width: 100%;
    }

    button:hover {
      background-color: #45a049;
    }

    .form-footer {
      text-align: center;
      margin-top: 20px;
    }

    .form-footer a {
      text-decoration: none;
      color: #999999;
    }

    .form-footer a:hover {
      color: #666666;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Sign In</h2>

    <form action="signin.php" method="POST">
      <label for="signin-email">Email:</label>
      <input type="text" id="signin-email" name="lemail" required>

      <label for="signin-password">Password:</label>
      <input type="password" id="signin-password" name="lpass"  required>

      <button type="submit" name="login">Sign In</button>
    </form>
    <div class="form-footer">
      New to our website? <a href="#signup">Sign Up</a>
    </div>
  </div>

  <div class="container" id="signup" style="display: none;">
    <h2>Sign Up</h2>
    <form action="signin.php" method="POST"> 
      <label for="signup-name">Name:</label>
      <input type="text" id="signup-name" name="uname"  required>
 
      <label for="signup-email">Email:</label>
      <input type="text" id="signup-email" name="uemail" required>

      <label for="signup-password">Password:</label>
      <input type="password" id="signup-password" name="upass" required>

      <button type="submit" name="submit">Sign Up</button>
    </form>
    <div class="form-footer">
      Already have an account? <a href="#">Sign In</a>
    </div>
  </div>

  <script>
    // JavaScript to toggle between Sign In and Sign Up forms
    document.addEventListener("DOMContentLoaded", function () {
      var signInLink = document.querySelector(".form-footer a");
      var signUpForm = document.getElementById("signup");
      var signInForm = signUpForm.previousElementSibling;

      signInLink.addEventListener("click", function (event) {
        event.preventDefault();
        signUpForm.style.display = "block";
        signInForm.style.display = "none";
      });

      var signInFormLink = signUpForm.querySelector(".form-footer a");
      signInFormLink.addEventListener("click", function (event) {
        event.preventDefault();
        signUpForm.style.display = "none";
        signInForm.style.display = "block";
      });
    });
  </script>
</body>
</html>

<?php
// Assuming $conn is defined and is your database connection

if (isset($_POST['submit'])) {
    $name=filter_input(INPUT_POST, 'uname', FILTER_SANITIZE_SPECIAL_CHARS);
    $pass = password_hash($_POST['upass'], PASSWORD_DEFAULT);
    $email =filter_input(INPUT_POST,'uemail',FILTER_SANITIZE_EMAIL);

    $query = "INSERT INTO ragistration(UserName,UserEmail,UserPass) VALUES('$name', '$email', '$pass')";
    $result = mysqli_query($conn, $query);

    if ($result) {
        ?>
        <script>
            alert("Registration done");
        </script>
        <?php
    } else {
        ?>
        <script>
            alert("Registration failed");
        </script>
        <?php
    }
}

if (isset($_POST['login'])) {
    $lemail = filter_input(INPUT_POST, 'lemail', FILTER_SANITIZE_EMAIL);
    $lpass = $_POST['lpass'];

    $query = "SELECT * FROM ragistration WHERE UserEmail = '$lemail'";
    $result = mysqli_query($conn, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        if (password_verify($lpass, $row['UserPass'])) {
            $_SESSION['UserEmail']=$row['UserEmail'];
            $_SESSION['UserPass']=$row['UserPass'];
            $_SESSION['id']=$row['id'];
            $_SESSION['UserName']=$row['UserName'];


            header("Location: cheack.php");
            exit();
        } else {
            ?>
            <script>
                alert("Incorrect password");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            alert("User not found");
        </script>
        <?php
    }
}
?>
