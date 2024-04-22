<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Sign Up</title>
    <style>
    body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; /* Updated font for a modern look */
    background-color: #e9ecef; /* Lighter gray background for a softer appearance */
    color: #343a40; /* Slightly darker text color for better readability */
    margin: 0;
    padding: 0;
}

h1 {
    text-align: center;
    color: #17a2b8; /* Changed to a teal color for a different theme */
    font-size: 28px; /* Increased size for better visibility */
    margin-top: 20px; /* Added margin to give space from the top */
    padding-bottom: 10px; /* Padding for aesthetic spacing */
}

#digit-clock {
    text-align: center;
    font-size: 18px; /* Larger font size for better readability */
    margin-bottom: 30px; /* Increased margin for better visual separation */
    color: #6c757d; /* Dim gray for subtlety */
}

.form {
    max-width: 420px; /* Slightly larger form width */
    margin: 30px auto; /* Increased margin for more spacing */
    background: #ffffff;
    padding: 25px; /* More padding for better form field spacing */
    border-radius: 8px; /* Slightly larger radius for smoother corners */
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1); /* Softer shadow for subtle depth */
}

.text_field {
    width: 100%;
    padding: 12px; /* More padding for better text input area */
    margin-bottom: 12px; /* Uniform margin for consistency */
    border: 2px solid #dee2e6; /* Thicker border in a lighter shade */
    border-radius: 8px; /* Uniform radius with the form */
    box-sizing: border-box;
    font-size: 16px; /* Larger font size for ease of reading */
}

.button {
    width: 100%;
    padding: 12px; /* Increased padding for a better click area */
    background-color: #28a745; /* Green color for a positive, noticeable button */
    color: #fff;
    border: none;
    border-radius: 8px; /* Matching the border-radius of inputs and form */
    cursor: pointer;
    font-weight: bold; /* Bolder font for emphasis */
}

.button:hover {
    background-color: #218838; /* Darker green for hover state */
}

.home-link {
    display: block;
    text-align: center;
    margin-top: 20px;
    margin-bottom: 20px; /* Added bottom margin for spacing */
    text-decoration: none;
    color: #17a2b8; /* Matching the H1 color for theme consistency */
    font-size: 16px; /* Increased font size for better readability */
}

.home-link:hover {
    text-decoration: underline;
    color: #138496; /* A darker shade of teal for hover */
}

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
