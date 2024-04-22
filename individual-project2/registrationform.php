<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
    <style>
   body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Keeping the font family */
    background-color: #f8f9fa; /* Soft blue-gray background */
    color: #495057; /* Slightly darker text color for better contrast */
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #007bff; /* Deep blue for headings */
    font-size: 32px; /* Slightly larger font size for emphasis */
    margin-top: 30px; /* Increased margin for more spacing from the top */
    padding-bottom: 15px; /* Adjusted padding for spacing */
}

#digit-clock {
    text-align: center;
    font-size: 20px; /* Increased font size for better visibility */
    margin-bottom: 25px; /* Adjusted margin for better separation */
    color: #6c757d; /* Dim gray for subtlety */
}

.form {
    max-width: 400px; /* Slightly wider form container */
    margin: 40px auto; /* Adjusted margin for better centering */
    background: #fff; /* White background */
    padding: 30px; /* Increased padding for better form field spacing */
    border-radius: 10px; /* Slightly larger border radius */
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Soft shadow effect */
}

.text_field {
    width: 100%;
    padding: 14px; /* Increased padding for text input area */
    margin-bottom: 20px; /* Adjusted margin for better spacing */
    border: 2px solid #ced4da; /* Lighter border color */
    border-radius: 8px; /* Slightly larger border radius */
    box-sizing: border-box;
    font-size: 18px; /* Larger font size for improved readability */
}

.button {
    width: 100%;
    padding: 14px; /* Increased padding for better click area */
    background-color: #28a745; /* Green color for buttons */
    color: #fff;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    font-weight: bold;
}

.button:hover {
    background-color: #218838; /* Darker green on hover */
}

.home-link {
    display: block;
    text-align: center;
    margin-top: 30px; /* Increased top margin for better spacing */
    text-decoration: none;
    color: #007bff; /* Deep blue color */
    font-size: 18px; /* Larger font size for improved readability */
}

.home-link:hover {
    text-decoration: underline;
    color: #0056b3; /* Darker blue on hover */
}

  </style>
  <script>
    function validateForm() {
      // Client-side validation logic
      var username = document.forms["registrationForm"]["username"].value;
      var password = document.forms["registrationForm"]["password"].value;
      var email = document.forms["registrationForm"]["email"].value;
      // Add more validation checks as needed
      
      if (username == "" || password == "" || email == "") {
        alert("All fields are required");
        return false;
      }
      // Add more client-side validation checks as needed
      return true;
    }
  </script>
</head>
<body>
  <h1>New user registration, for Individual Project2</h1>
  <form action="addnewuser.php" method="POST" class="form login">
    Username:<input type="text" class="text_field" name="username" /> <br>
    Password: <input type="password" class="text_field" name="password" /> <br>
    name:<input type="text" class="text_field" name="name" /> <br>
    additional_email: <input type="text" class="text_field" name="additional_email" /> <br>
    email:<input type="text" class="text_field" name="email" /> <br>
    phone: <input type="text" class="text_field" name="phone" /> <br>
    <button class="button" type="submit">Submit</button>
  </form>
  <a href="form2.php" class="home-link">Login Page</a>
</body>
</html>
