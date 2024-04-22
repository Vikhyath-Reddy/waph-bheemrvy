<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH-Edit Profile</title>
  <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script>
  <style>
    body {
    font-family: 'Arial', sans-serif; /* Consistent font-family */
    background-color: #f3f3f3; /* Slightly lighter gray background */
    color: #333; /* Dark gray text color */
}

h1, h2 {
    color: #ff6347; /* Tomato red heading color */
    text-align: center;
}

#digit-clock {
    text-align: center;
    margin-bottom: 30px; /* Increased margin for better separation */
    color: #4682b4; /* Steel blue text color */
}

.form {
    max-width: 320px; /* Slightly wider form for better usability */
    margin: 0 auto;
    padding: 30px; /* Increased padding for better spacing */
    background: #ffffe0;
    border-radius: 8px; /* Larger border radius for softer corners */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Softer shadow effect */
}

.text_field {
    width: 100%;
    padding: 12px; /* Slightly increased padding for better input area */
    margin-bottom: 15px; /* Increased margin for better separation between fields */
    border: 2px solid #ff4500; /* Border color matches headings for consistency */
    border-radius: 6px; /* Slightly larger border radius */
    box-sizing: border-box;
}

.button {
    width: 100%;
    padding: 12px;
    background-color: #4caf50;
    color: #fff;
    border: none;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s ease; /* Smooth hover transition */
}

.button:hover {
    background-color: #45a049;
}

.home-link {
    display: block;
    text-align: center;
    margin-top: 25px; /* Increased margin for better spacing */
    text-decoration: none;
    color: #007bff;
}

.home-link:hover {
    text-decoration: underline;
}

  </style>
</head>
<body>
  <?php
  session_start();
?>
  <h1>Edit Profile, WAPH, Individual Project2</h1>
  <h2>Welcome <?PHP echo htmlentities($_SESSION['username']); ?> !</h2>
  <div id="digit-clock"></div>  

  <form action="editprofile.php" method="POST" class="form edit-profile">
     <input type="hidden" name="username" value="<?php echo $_SESSION['username']; ?>">
    Name:<input type="text" class="text_field" name="name"  /> <br>
    Additional Email: <input type="email" class="text_field" name="additional_email" /> <br>
    Phone: <input type="tel" class="text_field" name="phone" /> <br>
    <!-- Add more fields as needed -->
    <button class="button" type="submit">Save Changes</button>
  </form>
  <a href="index.php" class="home-link">Home Page</a>
</body>
</html>
