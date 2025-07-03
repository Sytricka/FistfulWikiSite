<?php
session_start();

$servername = "localhost";
$username = "itech032";
$password = "vYwqL%qr4khg";
$database = "itech032";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id']; // Get the user ID from the session
    $pageId = isset($_REQUEST['pageId']) ? $_REQUEST['pageId'] : 0;    // Retrieve the page ID from the request parameters

    $sql = "SELECT COUNT(*) AS num_ratings FROM user_ratings WHERE user_id = ? AND page_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ii", $userId, $pageId);
    $stmt->execute();
    
    $result = $stmt->get_result();    // Get the result set

    if ($result) {
        $row = $result->fetch_assoc();
        $numRatings = $row['num_ratings'];
    }
    if ($numRatings > 0) {
        $hasRated = true;
    } else {
        $hasRated = false;
    }
    // Prepare the response
    $response = array('success' => true, 'hasRated' => $hasRated);

    // Send the response as JSON
    $jsonResponse = json_encode($response);
    if ($jsonResponse === false) {
        die(json_last_error_msg());
    }

    echo $jsonResponse;
} 
else {
    echo json_encode(array('success' => false, 'message' => 'User is not logged in.'));
}

$conn->close();
?>


