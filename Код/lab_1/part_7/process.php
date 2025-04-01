<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $firstName = trim($_POST['first_name'] ?? '');
    $lastName = trim($_POST['last_name'] ?? '');

    if (empty($firstName) || empty($lastName)) {
        echo "Error: Both fields are required.";
    } elseif (!is_string($firstName) || !is_string($lastName)) {
        echo "Error: Invalid input.";
    } else {
        echo "Hello, " . htmlspecialchars($firstName) . " " . htmlspecialchars($lastName) . "!";
    }
} else {
    echo "Invalid request method.";
}
