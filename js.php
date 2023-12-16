<script>
    document.addEventListener("DOMContentLoaded", function() {
      <?php
      session_start();
      if (isset($_SESSION['id'])) {
      ?>
     
        var anchorElement = document.getElementById("myAnchor");
        anchorElement.innerText= "Logout";
        anchorElement.href = "logout.php";
      <?php
      } else {
      ?>
        var anchorElement = document.getElementById("myAnchor");
        anchorElement.innerText = "Sign In";
        anchorElement.href = "signin.php";

      <?php
      }
      ?>
    });
  </script>