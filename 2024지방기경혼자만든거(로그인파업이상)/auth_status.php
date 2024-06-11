<?php
// auth_status.php
session_start();

header('Content-Type: application/json');

$response = [
    'loggedIn' => isset($_SESSION['logged_in']) && $_SESSION['logged_in'],
    'role' => $_SESSION['role'] ?? '',
    'userEmail' => $_SESSION['user_email'] ?? ''
];

echo json_encode($response);
