<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header("Location: login.php"); // Redirect to login page if not logged in
    exit();
}

$username = $_SESSION['username'];

$mysqli = new mysqli('localhost', 'waph_p2', 'password', 'waph_team18');
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}

$query = "SELECT * FROM users INNER JOIN profiles ON users.user_id = profiles.user_id WHERE users.username = ?";
$stmt = $mysqli->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $email = $row['email'];
    $additional_email = $row['additional_email'];
    $phone = $row['phone'];
} else {
    echo "No profile found for the logged-in user.";
}

$stmt->close();
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <style>
        body {
    font-family: 'Segoe UI', Arial, sans-serif; /* Updated font for a cleaner appearance */
    background-color: #f3f4f6; /* A softer, more contemporary gray */
    margin: 0;
    padding: 0;
}

.profile-container {
    max-width: 360px; /* Slightly narrower for a more elegant look */
    margin: 60px auto; /* Increased top and bottom margin for better spacing */
    padding: 25px; /* Increased padding for a more spacious interior */
    border: 1px solid #e0e0e0; /* Lighter border for subtlety */
    border-radius: 8px; /* Larger radius for smoother corners */
    background-color: #ffffff;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05); /* Softer, more spread out shadow */
}

.profile-container h2 {
    margin-top: 0;
    color: #0056b3; /* A darker, more professional blue */
    text-align: center;
    font-size: 24px; /* Larger size for better readability */
    padding-bottom: 10px; /* Additional padding to separate from content */
}

.profile-info {
    margin-bottom: 15px; /* Slightly larger margin for better visual separation */
}

.profile-info label {
    font-weight: 600; /* Bold but not too heavy */
    display: block; /* Ensure labels are on their own line for clarity */
    margin-bottom: 5px; /* Space between label and text */
}

.profile-info span {
    color: #666; /* Slightly darker gray for better readability */
    display: block; /* Block display to differentiate from the label */
    margin-left: 10px; /* Indent text to clearly associate with the label */
}

.home-link {
    display: block;
    text-align: center;
    margin-top: 25px; /* Increased margin to better separate from content */
    text-decoration: none;
    color: #0056b3; /* Consistent darker blue used in headings */
    font-weight: 500; /* Medium font weight for better emphasis */
}

.home-link:hover {
    text-decoration: underline;
    color: #004085; /* Even darker shade on hover for better interaction feedback */
}

    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Profile Details</h2>
        <div class="profile-info">
            <label>Name:</label>
            <span><?php echo $name; ?></span>
        </div>
        <div class="profile-info">
            <label>Email:</label>
            <span><?php echo $email; ?></span>
        </div>
        <div class="profile-info">
            <label>Additional Email:</label>
            <span><?php echo $additional_email; ?></span>
        </div>
        <div class="profile-info">
            <label>Phone:</label>
            <span><?php echo $phone; ?></span>
        </div>
    </div>
    <a href="index.php" class="home-link">Home Page</a>
</body>
</html>

