<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_SESSION['seat'] = $_POST['seat'];
    echo json_encode(['status' => 'success', 'message' => 'Session data set']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Invalid request']);
}