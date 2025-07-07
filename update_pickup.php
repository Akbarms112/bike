<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['pickup_option'], $_POST['amount'])) {
    $booking_id = intval($_POST['id']);
    $pickup_option = $_POST['pickup_option'];
    $amount = floatval($_POST['amount']);

    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if ($conn->connect_error) {
        die("DB connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("UPDATE bookings SET pickup_option = ?, amount = ? WHERE id = ?");
    $stmt->bind_param("sdi", $pickup_option, $amount, $booking_id);

    if ($stmt->execute()) {
        echo "success";
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
