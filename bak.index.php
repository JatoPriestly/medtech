<?php
session_start(); // Start the session to manage user authentication
include 'config/db.php'; // Include your database connection

// Check if the user is logged in
$isLoggedIn = isset($_SESSION['admin_id']);

// Get the requested URL path
$request_uri = $_SERVER['REQUEST_URI'];

// Remove query string (if any)
$request_uri = strtok($request_uri, '?');

// Define routes
switch ($request_uri) {
    case '/':
    case '/index.php':
        include 'pages/index.php';
        break;

    case '/about-us':
        include 'pages/about-us.php';
        break;

    case '/contact-us':
        include 'pages/contact-us.php';
        break;

    case '/team':
        include 'pages/team.php';
        break;

    case '/blog':
        include 'pages/blog.php';
        break;

    case '/services':
        include 'pages/services.php';
        break;

    // Service details route using slug
    case (preg_match('/^\/service\/([a-zA-Z0-9-]+)$/', $request_uri, $matches) ? true : false):
        include 'pages/service-details.php';
        break;

    // Login page
    case '/login':
        include 'pages/login.php';
        break;

    // Admin secured pages
    case '/admin':
        if ($isLoggedIn) {
            include 'pages/admin/index.php'; // Admin dashboard
        } else {
            header("Location: /login"); // Redirect to login if not logged in
        }
        break;

    case '/admin/add-blog':
        if ($isLoggedIn) {
            include 'pages/admin/add-blog.php'; // Add blog page
        } else {
            header("Location: /login");
        }
        break;

    case '/admin/edit-blog':
        if ($isLoggedIn) {
            include 'pages/admin/edit-blog.php'; // Edit blog page
        } else {
            header("Location: /login");
        }
        break;

    case '/admin/delete-blog':
        if ($isLoggedIn) {
            include 'pages/admin/delete-blog.php'; // Delete blog page
        } else {
            header("Location: /login");
        }
        break;

    case '/admin/add-event':
        if ($isLoggedIn) {
            include 'pages/admin/add-event.php'; // Add event page
        } else {
            header("Location: /login");
        }
        break;

    case '/admin/edit-event':
        if ($isLoggedIn) {
            include 'pages/admin/edit-event.php'; // Edit event page
        } else {
            header("Location: /login");
        }
        break;

    case '/admin/delete-event':
        if ($isLoggedIn) {
            include 'pages/admin/delete-event.php'; // Delete event page
        } else {
            header("Location: /login");
        }
        break;

    default:
        // 404 Not Found
        header("HTTP/1.0 404 Not Found");
        include 'pages/404.php'; // Create a 404 page
        break;
}
?>