<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

// Check if 'id' exists in URL and is a valid integer
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid event ID.");
}

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

// Delete event data based on ID
$query = "DELETE FROM events WHERE id= :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect to all event page
header('Location: events.php');
exit;
