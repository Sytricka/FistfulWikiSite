<?php
   session_start();

   if (isset($_POST['delete_account'])) {
    $conn = mysqli_connect("localhost", "itech032", "vYwqL%qr4khg", "itech032"); 
    
    if (!$conn) { 
        die("Connection failed: " . mysqli_connect_error()); 
    } 
    
    // Get the user ID from the session
    $user_id = $_SESSION['user_id'];

    // Delete the user's account and related data from the database
    $sql = "DELETE FROM users WHERE user_id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    
    if (!$stmt) {
        die("Prepare failed: " . mysqli_error($conn));
    }

    mysqli_stmt_bind_param($stmt, "i", $user_id);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        // Account deleted successfully, redirect to a confirmation page or log out the user
        session_unset();
        session_destroy();
        header("Location: account.php");
        exit();
    } else {
        // Failed to delete the account
        $error = "Failed to delete account: " . mysqli_error($conn);
    }

    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
