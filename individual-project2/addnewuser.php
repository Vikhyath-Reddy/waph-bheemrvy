<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    $name = $_POST["name"];
    $additional_email = $_POST["additional_email"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    
    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format!";
        exit;
    }

    // Check if username or email is already registered
    if (userExists($username)) {
        echo "User already exists!";
        exit;
    }
    
    if (isset($username) && isset($password) && isset($name) && isset($additional_email) && isset($phone)) 
    {
        // Add user and fetch auto-generated user_id
        $user_id = addNewUser($username, $password);
        
        if ($user_id !== false) {
            if (addUserProfile($user_id, $name, $additional_email, $phone, $email)) {
                echo "Registration succeeded!";
            } else {
                echo "Failed to add user profile!";
            }
        } else {
            echo "Registration failed!";
        }
    } else {
        echo "Incomplete data provided!";
    }
    
    function addNewUser($username, $password) {
        $mysqli = new mysqli('localhost', 'waph_p2', 'password', 'waph_team18');
        if ($mysqli->connect_errno) {
            printf("Database connection failed: %s\n", $mysqli->connect_error);
            return false;
        }
        
        $prepared_sql = "INSERT INTO users (username, password) VALUES (?, MD5(?))";
        $stmt = $mysqli->prepare($prepared_sql);
        if (!$stmt) {
            printf("Prepare failed: %s\n", $mysqli->error);
            return false;
        }
        
        $stmt->bind_param("ss", $username, $password);
        if (!$stmt->execute()) {
            printf("Execute failed: %s\n", $stmt->error);
            return false;
        }
        
        $user_id = $mysqli->insert_id;
        $stmt->close();
        return $user_id;
    }
    
    function addUserProfile($user_id, $name, $additional_email, $phone, $email) {
        $mysqli = new mysqli('localhost', 'waph_p2', 'password', 'waph_team18');
        if ($mysqli->connect_errno) {
            printf("Database connection failed: %s\n", $mysqli->connect_error);
            return false;
        }
        
        $prepared_sql = "INSERT INTO profiles (user_id, name, additional_email, phone, email) VALUES (?, ?, ?, ?, ?)";
        $stmt = $mysqli->prepare($prepared_sql);
        if (!$stmt) {
            printf("Prepare failed: %s\n", $mysqli->error);
            return false;
        }
        
        $stmt->bind_param("issss", $user_id, $name, $additional_email, $phone, $email);
        if (!$stmt->execute()) {
            printf("Execute failed: %s\n", $stmt->error);
            return false;
        }
        
        $stmt->close();
        return true;
    }

    function userExists($username) {
    $mysqli = new mysqli('localhost', 'waph_p2', 'password', 'waph_team18');
    if ($mysqli->connect_errno) {
        printf("Database connection failed: %s\n", $mysqli->connect_error);
        return true; // Prevent further processing if the database connection fails
    }

    $sql = "SELECT 1 FROM users WHERE username = ?";
    $stmt = $mysqli->prepare($sql);
    if (!$stmt) {
        printf("Prepare failed: %s\n", $mysqli->error);
        return true; // Assume true to prevent duplicate entry
    }

    $stmt->bind_param("s", $username);
    if (!$stmt->execute()) {
        printf("Execute failed: %s\n", $stmt->error);
        $stmt->close();
        return true; // Assume true to prevent duplicate entry
    }

    $result = $stmt->get_result();
    $exists = $result->num_rows > 0;
    $stmt->close();
    return $exists;
}

?>
