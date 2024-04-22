<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WAPH-Login page</title>
  <script type="text/javascript">
      function displayTime() {
        document.getElementById('digit-clock').innerHTML = "Current time:" + new Date();
      }
      setInterval(displayTime,500);
  </script>
  <link rel="stylesheet" href="minifbstyle.css">
  <style>
    .container {
    background-color: #e6e6e6; /* Light gray background */
    padding: 20px;
    border-radius: 10px;
    margin: 20px auto;
    width: 400px; /* Adjust width as needed */
}

.header {
    text-align: center;
    margin-bottom: 20px;
}

.header h1 {
    color: #4b0082; /* Indigo text color */
}

.form-group label {
    color: #4b0082; /* Indigo label color */
}

.btn-primary {
    background-color: #4b0082; /* Indigo button background */
    color: #fff; /* White button text color */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-primary:hover {
    background-color: #2e0854; /* Darker indigo on hover */
}

.btn-secondary {
    background-color: #2f4f4f; /* Dark slate gray button background */
    color: #fff; /* White button text color */
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
}

.btn-secondary:hover {
    background-color: #1e1e1e; /* Darker slate gray on hover */
}

  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <h1>Welcome to My page, Please Login</h1>
      <h2>Individual Project 2</h2>
      <div id="digit-clock"></div>
    </div>
    <form action="index.php" method="POST" class="form login">
      <div class="form-group">
        <label for="username">Email address or phone number:</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Email address or phone number">
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Password">
      </div>
      <!-- Button Group -->
      <div class="button-group">
        <button type="submit" class="btn btn-primary">Log In</button>
        <button type="button" onclick="window.location.href='registrationform.php';" class="btn btn-secondary">Sign Up</button>
      </div>
    </form>
  </div>
</body>
</html>
