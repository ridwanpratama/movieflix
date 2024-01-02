<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['selected_hour'] = $_POST['hour'];
    $_SESSION['selected_price'] = $_POST['price'];
    $_SESSION['selected_location'] = $_POST['location'];
    echo json_encode(['status' => 'success', 'message' => 'Session data set']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}