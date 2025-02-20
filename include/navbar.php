<?php
// Get the current page from the URL
$current_page = basename($_SERVER['REQUEST_URI'], ".php");
?>

<nav class="navbar navbar-expand-md fixed-top py-3" style="color: #05466b; background: white;">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="">
            <img src="assets/img/Medtech_size.png" width="200" alt="MedTech Assist Logo">
        </a>
        <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-5">
            <span class="visually-hidden">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navcol-5">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Services
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="consultant.php">Consulting</a></li>
                        <li><a class="dropdown-item" href="service-regulatory-compliance-management.php">Regulatory Compliance Management</a></li>
                        <li><a class="dropdown-item" href="service-quality-management-systems.php">Quality Management Systems</a></li>
                        <li><a class="dropdown-item" href="service-quality-assurance.php">Quality Assurance</a></li>
                        <li><a class="dropdown-item" href="service-training-education.php">Training & Education</a></li>
                        <li><a class="dropdown-item" href="service-health-safety.php">Health & Safety</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?php echo strpos($current_page, 'about-us') !== false ? 'active' : ''; ?>" href="about-us.php">About Us</a></li>
                <li class="nav-item"><a class="nav-link <?php echo strpos($current_page, 'team') !== false ? 'active' : ''; ?>" href="team.php">Team</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownResources" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownResources">
                        <li><a class="dropdown-item" href="blog.php">Blog</a></li>
                        <li><a class="dropdown-item" href="events.php">Events</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link <?php echo strpos($current_page, 'contact-us') !== false ? 'active' : ''; ?>" href="contact-us.php">Get in Touch</a></li>
                <?php if (isset($_SESSION['admin_id'])): ?>
                    <li class="nav-item"><a class="nav-link" href="admin">Admin</a></li>
                <?php else: ?>
                    <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>