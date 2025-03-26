<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}

// Check if 'id' exists in URL and is a valid integer
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid blog ID.");
}

$id = (int) $_GET['id']; // Cast to interger to avoid SQL injection

// Delete blog data based on ID
$query = "DELETE FROM blog WHERE id= :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();

// Redirect to all blogs page
header('Location: blogs.php');
exit;

