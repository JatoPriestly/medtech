<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
include '../config/db.php';

// Fetch events
$stmt = $pdo->query("SELECT * FROM events");
$events = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <title>Manage Events</title>
</head>
<body>
<div class="container">
    <h1 class="mt-5">Manage Events</h1>
    <a href="add_event.php" class="btn btn-success mb-3">Add Event</a>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($events as $event): ?>
                <tr>
                    <td><?php echo $event['id']; ?></td>
                    <td><?php echo $event['title']; ?></td>
                    <td>
                        <a href="edit_event.php?id=<?php echo $event['id']; ?>" class="btn btn-warning">Edit</a>
                        <a href="delete_event.php?id=<?php echo $event['id']; ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - MedTech Assist</title>
    <link rel="icon" type="image/png" href="favicon.png" sizes="32x32">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Navbar-Right-Links-Dark-icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <!-- AOS CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.css" rel="stylesheet">

    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.1/aos.js"></script>
<style>
            .hero-section {
            position: relative;
            height: 250px;
            background: url('assets/img/stock-photo-quality-assurance-concept-ensuring-the-products-or-services-meet-the-required-standards-and-2476030261.jpg') center center / cover no-repeat fixed;
        }
</style>
</head>

<body  style="background: white;">
<?php include 'include/navbar.php'; ?>
    <section class="hero-section up">
        <div class="container h-100">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-md-6 text-center" data-aos="fade-up" data-aos-duration="1000">
                    <div>
                        <h1 class="text-uppercase fw-bold">EVENTS</h1>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- if i have #05466b as primary color and i have #5ce1e6 as secondary color what color should i use as buttun colors to make a great mixture for a medtech company -->

<section class="bg-white help-section primary" data-aos="fade-up">
    <div class="container py-5 text-md-center">
        <div class="mx-auto">
            <div class="row">
                <h2 class="fw-bold secondary">EVENTS<br></h2>
                <div class="box col-md-8 col-xl-6 text-center mx-auto">
                    <p>COMING SOON.</p>
                </div>
            </div>
        </div>
    </div>
</section>





<?php include 'include/footer.php'; ?>
    <script>
        document.getElementById('service_of_interest').addEventListener('change', function() {
    var otherOption = document.getElementById('service_of_interest').value;
    var otherInputContainer = document.getElementById('other_input_container');

    if (otherOption === 'other') {
        otherInputContainer.style.display = 'block'; // Show the input field
    } else {
        otherInputContainer.style.display = 'none'; // Hide the input field
    }
});

    </script>
    <script>
        AOS.init();
    </script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/bold-and-dark.js"></script>
</body>

</html>