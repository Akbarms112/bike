<?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $booking_id = intval($_POST['id']);
    $status = $_POST['status'] ?? null;
    $amount = isset($_POST['amount']) ? floatval($_POST['amount']) : null;

    if ($status === null) {
        echo "Missing status";
        exit;
    }

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        echo "Connection failed: " . $conn->connect_error;
        exit;
    }

    $query = "UPDATE bookings SET status = ?";
    $types = "s";
    $params = [$status];

    if ($amount !== null) {
        $query .= ", amount = ?";
        $types .= "d";
        $params[] = $amount;
    }

    $query .= " WHERE id = ?";
    $types .= "i";
    $params[] = $booking_id;

    $stmt = $conn->prepare($query);
    if (!$stmt) {
        echo "Prepare failed: " . $conn->error;
        exit;
    }

    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "update failed: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request";
}
?>
