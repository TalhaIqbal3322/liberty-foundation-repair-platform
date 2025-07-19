<?php
// Database connection
include '../../db.php';

// Get POST data
$phone_or_email = $_POST['phone_or_email'];
$password = $_POST['password'];

// Check if phone_or_email is valid (check if it's an email or phone number)
if (filter_var($phone_or_email, FILTER_VALIDATE_EMAIL)) {
    // Email case
    $query = "SELECT * FROM admin WHERE email = '$phone_or_email' LIMIT 1";
}

// Execute the query
$result = mysqli_query($conn, $query);

// Check if user exists
if (mysqli_num_rows($result) > 0) {
    // Fetch user data
    $user = mysqli_fetch_assoc($result);


    // Verify password
    if (password_verify($password, $user['password'])) {
        // Successful login
        session_start();
        $_SESSION['admin_session'] = 'Active';

        echo json_encode(array("statusCode" => 200, "message" => "Login successful"));
    } else {
        // Incorrect password
        echo json_encode(array("statusCode" => 201, "message" => "Incorrect password"));
    }
} else {
    // User not found
    echo json_encode(array("statusCode" => 202, "message" => "User not found"));
}

// Close the database connection
mysqli_close($conn);
?>
