
<!DOCTYPE html>
<html>
<head>
  <title>Book My Movie - Help</title>
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="styles.css" />

 

<style>

 
</style>
</head>
<body class="bg-gray-100">
  <h1>Book My Movie - Help</h1>
  
  <nav>
    <ul>
      <li><a href="cheack.php">Home</a></li>
      <li><a href="streams.php">Streams</a></li>
      <li><a href="Events.php">Events</a></li>
      <li><a href="spports.php">Sports</a></li>
      <li><a href="help.php">Help</a></li>

      <li>   <a class="sign-in-button" href="" id="myAnchor"></a>   </li>
    </ul>
  </nav>

  
    <div class="flex items-center justify-center h-screen">
        <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-4">Contact Us</h1>
            <form id="contactForm" class="space-y-4">
                <div class="flex flex-wrap -mx-2">
                    <div class="w-1/2 px-2">
                        <label for="firstName" class="block text-sm font-medium text-gray-600">First Name</label>
                        <input type="text" id="firstName" name="firstName"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                    <div class="w-1/2 px-2">
                        <label for="lastName" class="block text-sm font-medium text-gray-600">Last Name</label>
                        <input type="text" id="lastName" name="lastName"
                            class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
                    </div>
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500">
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="mt-1 p-2 w-full border rounded-md focus:outline-none focus:border-blue-500"></textarea>
                </div>
                <button type="submit"
                    class="w-full p-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300">Submit</button>
            </form>
        </div>
    </div>
    <script src="app.js"></script>

  <?php
include_once("js.php");
?>
</body>
</html>
