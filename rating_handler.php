<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database configuration
$servername = "localhost";
$username = "itech032";
$password = "vYwqL%qr4khg";
$database = "itech032"; // Change to your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the page ID from the request parameters
$userID = isset($_SESSION['user_id']);
$pageId = isset($_REQUEST['pageId']) ? $_REQUEST['pageId'] : 0;

// Handle AJAX requests
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Retrieve rating data based on the pageId
    $sql = "SELECT total_votes, average_rating, id FROM rating_data WHERE id = $pageId";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $totalVotes = $row['total_votes'];
        $averageRating = $row['average_rating'];
        $id = $row['id'];
        echo json_encode(array('totalVotes' => $totalVotes, 'averageRating' => $averageRating));
    } else {
        // If no data found, initialize with default values
        echo json_encode(array('totalVotes' => 0, 'averageRating' => 0));
    }
} 

elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $totalVotes = isset($_POST['totalVotes']) ? (int)$_POST['totalVotes'] : 0;
    $averageRating = isset($_POST['averageRating']) ? (float)$_POST['averageRating'] : 0;
    
    // Update database with new rating data for the specified pageId
    $sql = "UPDATE rating_data SET total_votes = $totalVotes, average_rating = $averageRating WHERE id = $pageId";
    if ($conn->query($sql) === FALSE) {
        echo json_encode(array('success' => false, 'error' => $conn->error));
    } else {
        echo json_encode(array('success' => true));
    }
}

// Close connection
$conn->close();

?>


