<?php
include '../db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $hotelID = $_POST['hotelID'] ?? '';

    $query = "DELETE FROM hotel WHERE hotel.hotel_id = '$hotelID'";
    $result = mysqli_query($link, $query) or die("Query failed");

    if ($result) {
        echo json_encode(['status' => true, 'message' => 'Hotel deleted successfully.']);
    } else {
        // mysqli_error($link) can provide more insight into why the query failed
        echo json_encode(['status' => false, 'message' => 'Failed to delete hotel.']);
    }
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['status' => 'error', 'message' => 'Invalid request method.']);
}