<?php
   session_start();

   // Check if the user is already logged in
   if (isset($_SESSION['user_id'])) {
       // Redirect to UserProfile.html if already logged in
       header("Location: myAccount.php");
       exit;
   }
   
   // Check if the form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
       $email = $_POST['email'];
       $password = $_POST['psw'];
   
       $conn = mysqli_connect("localhost", "itech032", "vYwqL%qr4khg", "itech032");

       if (!$conn) {
           die("Connection failed: " . mysqli_connect_error());
       }
   
       // Prepare SQL statement with placeholders
       $sql = "SELECT * FROM users WHERE email = ?";
       $stmt = mysqli_prepare($conn, $sql);
       mysqli_stmt_bind_param($stmt, "s", $email);
       mysqli_stmt_execute($stmt);
   
       // Get the result
       $result = mysqli_stmt_get_result($stmt);
   
       if ($result && mysqli_num_rows($result) > 0) {
           // User with provided email exists, verify password
           $row = mysqli_fetch_assoc($result);
           if (password_verify($password, $row['password'])) {
               // Password verification successful
               $_SESSION['user_id'] = $row['user_id'];
               $_SESSION['display_name'] = $row['display_name'];

               header("Location: myAccount.php");
               exit;
           } 
           else {
               $_SESSION['login_error'] = 'Incorrect password';
               header("Location: account.php");
            exit;
           }
       } else {
           // User with provided email doesn't exist
           $_SESSION['login_error'] = "User with provided email doesn't exist";
           header("Location: account.php");
           exit;
       }
       mysqli_stmt_close($stmt);
   
       mysqli_close($conn);
   }
?>
