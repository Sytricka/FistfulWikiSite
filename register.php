<?php
session_start();

if (isset($_POST['register'])) { 
    // Connect to the database 
    $mysqli = new mysqli("localhost", "itech032", "vYwqL%qr4khg", "itech032"); 
    if ($mysqli->connect_error) { 
        die("Connection failed: " . $mysqli->connect_error); 
    } 
    
    // Get the form data 
    $email = $_POST['email'];
    $display_name = $_POST['dname'];
    $password = $_POST['psw'];
    
    // Check if the email already exists in the database
    $check_stmt = $mysqli->prepare("SELECT user_id FROM users WHERE email = ?");
    $check_stmt->bind_param("s", $email);
    $check_stmt->execute();
    $check_stmt->store_result();
    
    if ($check_stmt->num_rows > 0) {
        // Email already exists
        $_SESSION['registration_error'] = "This email is already registered.";
    } 
    else {

        $error = validateDisplayName($display_name, $mysqli);
        if ($error) {
            // Store the error message in session
            $_SESSION['registration_error'] = $error;
            // Redirect back to the registration page
            header("Location: account.php");
            exit();
        }

        $error = validatePassword($password, $mysqli);
        if ($error) {
            // Store the error message in session
            $_SESSION['registration_error'] = $error;
            // Redirect back to the registration page
            header("Location: account.php");
            exit();
        }

        $password = password_hash($password, PASSWORD_DEFAULT); 
        
        // Prepare and bind the SQL statement 
        $insert_stmt = $mysqli->prepare("INSERT INTO users (display_name, email, password) VALUES (?, ?, ?)"); 
        $insert_stmt->bind_param("sss", $display_name, $email, $password); 
        $_SESSION['success_reg'] = "Account created succesfully.";
        // Execute the SQL statement 
        if ($insert_stmt->execute()) {
            echo "Registration successful";
        } else { 
            $_SESSION['registration_error'] = "Error: " . $stmt->error; 
            echo "Error: " . $insert_stmt->error; 
        }
        $insert_stmt->close(); 
    }
    header("Location: account.php");
    
    $check_stmt->close(); 
    $mysqli->close(); 
    exit();
}

function validateDisplayName($display_name, $conn) {
    $error = null;

    // Check if the display name is empty or too long/short
    if (empty($display_name)) {
        $error = "Display name cannot be empty.";
    } elseif (strlen($display_name) < 3 || strlen($display_name) > 20) {
        $error = "Display name must be between 3 and 20 characters.";
    } elseif (preg_match('/\s/', $display_name)) {
        $error = "Display name cannot contain whitespace.";
    } else {
        // Check if the display name already exists in the database
        $sql = "SELECT * FROM users WHERE display_name = ?";
        $stmt = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stmt, "s", $display_name);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($result && mysqli_num_rows($result) > 0) {
            $error = "Display name is already in use. Please choose a different one.";
        }
    }
    return $error;
}

function validatePassword($password, $conn){
    $error = null;
    
    if (empty($password)) {
        $error = "Password cannot be empty.";
    } elseif (strlen($password) < 3 || strlen($password) > 30) {
        $error = "Password must be between 3 and 30 characters.";
    } elseif (preg_match('/\s/', $password)) {
        $error = "Password cannot contain whitespace.";
    }
    if (strpos($password, '\\') !== false) {
        $error = "Password cannot contain '\\'.";
    }
    return $error;
}

?>

