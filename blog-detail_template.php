<?php
// Import database connection
include 'config/db.php';

// Ensuring if $pdo is correctly initialized
if (!isset($pdo)) {
    die("Database connection error.");
}

// Check if 'id' exists in URL and is a valid integer
if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid blog ID.");
}

$id = (int) $_GET['id']; // Cast to interger to avoid SQL injection

// Fetch blog data based on ID
$query = "SELECT id, img_url, title, slug, subtitle1, subtitle2, text1, text2, reference, description, updated FROM blog WHERE id= :id";
$stmt = $pdo->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$blog = $stmt->fetch(PDO::FETCH_ASSOC);

// Fetching orther blog contents
// Fetch blog data
$queryblogs = "SELECT id, img_url, title, created FROM blog ORDER BY created DESC LIMIT 3";
$stmt = $pdo->prepare($queryblogs);
$stmt->execute();
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 
?> 


<!DOCTYPE html>
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
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
     Font Awesome (for icons, if needed) -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

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
        
        .breadcrumb {
            background-color: transparent; /* Make background transparent */
            padding: 0; /* Remove padding */
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: ">";
            padding: 0 5px; /* Add space around the separator */
            color: #6c757d; /* Change color of the separator */
        }
        .italic {
            font-style: italic;
        }
        .vertical-line {
    width: 1px; /* Width of the line */
    background-color: #6c757d; /* Color of the line */
    height: 100%; /* Full height of the parent container */
    margin: 0 5px; /* Space around the line */
}
   
</style>
<style>
    .border-start {
        border-left: 2px solid #6c757d; /* Adjust the color and width as needed */
    }
</style>
</head>

<body  style="background: white;">
<?php include 'include/navbar.php'; ?>
    

    <section class="py-5 bg-white text-dark" data-aos="fade-up" data-aos-duration="1000">
        <div class="container py-5">
            <div class="row">
                <!-- Main Content Column -->
                <div class="col-lg-8 mb-4 primary">
                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($blog['title']) ?></li>
                        </ol>
                    </nav>
    
                    <!-- Blog Title -->
                    <h1 class="fw-bold primary"><?php echo htmlspecialchars($blog['title']) ?></h1>
    
                    <!-- Blog Image -->
                    <img src="<?= htmlspecialchars($blog['img_url']) ?>" class="img-fluid my-4" alt="Blog Post Image">
    
                    <!-- Blog Content -->
                    <p><?= htmlspecialchars($blog['description'])?></p>
                    <h3 class="fw-bold italic"><?= htmlspecialchars($blog['subtitl1'])?></h3>
                    <p><?= htmlspecialchars($blog['text1'])?></p>
                    <h3 class="fw-bold italic"><?= htmlspecialchars($blog['subtitle2'])?></h3>
                    <p><?= htmlspecialchars($blog['text2'])?></p>
                    
                    <h3 class="fw-bold italic">Reference</h3>
                    <p><?= htmlspecialchars($blog['reference']) ?></p>
                    <p><?= htmlspecialchars($blog['updated'])?></p>
                </div>
                
            <!-- Sidebar Column with Left Border -->
            <div class="col-lg-3 mb-4 border-start" style="margin-left: 30px; padding-left: 15px;">
                <!-- Sidebar Column -->
                <h3 class="fw-bold">About the Blog</h3>
                <p><?= htmlspecialchars($blog['description'])?></p>
<hr class="my-4">
                <h3 class="fw-bold">Get in Touch</h3>
                <p>Email: <a href="mailto:info@criterionedge.com" class="secondary">info@criterionedge.com</a></p>
                <p>Tel: <a href="tel:+4915755594025" class="secondary">+49 [1575] 5594025</a></p>
                <hr class="my-4">
                
                <h3 class="fw-bold">Recent Posts</h3>
                <ul class="list-unstyled">
                    <?php foreach ($blogs as $blogL): ?> 
                        <li>
                            <a class="fw-bold primary" style="font-size: 18px;">
                                <?= htmlspecialchars($blogL['title']) ?>
                            </a>
                            <button href="blog-detail_template.php?id=<?= $blogL['id'] ?>" class="btn btn-link secondary">Read More »</button>
                        </li>
                        <hr class="my-4">
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
</section>
   
    <section class="py-5 bg-light">
        <div class="container py-5" data-aos="fade-up" data-aos-duration="1500">
            <div class="row mb-5">
                <div class="col-md-8 col-xl-6 text-center mx-auto">
                    <h2 class="fw-bold secondary">RECENT BLOG POSTS</h2>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 mx-auto" style="max-width: 900px;">
                <?php if (count($blogs) > 0): ?>
                    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4">
                        <div class="card border-0 shadow-sm bg-white hover-card">
                            <?php foreach ($blogs as $blogItem): ?>
                                <!-- Include blog card template -->
                                <?php include 'blog_card_template.php'; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php else: ?>
                    <p>No blog posts available.</p>
                <?php endif; ?>
            </div>
            
        </div>
    </section>
    
    <style>
        .hover-card {
            transition: transform 0.3s, box-shadow 0.3s;
        }
    
        .hover-card:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
        }
    </style>

<section class="py-3 py-md-5 py-xl-8 bg-white" data-aos="fade-up">
    <div class="container" data-aos="fade-up">
        <div class="row">
            <div class="col-12 col-md-10 col-lg-8">
                <h2 class="fw-bold secondary">Contact Us</h2>
                <h5 class="mb-4 mb-md-5 mb-xl-8" style="color: #000;">We're always on the lookout to work with new clients. Please get in touch in one of the following ways.</h5>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row gy-4 gy-md-5 gy-lg-0 align-items-md-center text-dark">
            <div class="col-12 col-lg-6">
                <div class="border overflow-hidden">
                    <form action="#!">
                        <div class="row gy-2 gy-xl-3 p-4 p-xl-5">
                            <div class="col-12">
                                <label for="company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="company_name" name="company_name" placeholder="e.g., MedTech Innovations Ltd." required>
                            </div>
                    
                            <div class="col-12">
                                <label for="position" class="form-label">Position <span class="text-danger">*</span></label>
                                <input type="text" class="form-control form-control-sm" id="position" name="position" placeholder="e.g., Regulatory Affairs Manager" required>
                            </div>
                    
                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                                <div class="input-group input-group-sm">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                            <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                                        </svg>
                                    </span>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email" placeholder="e.g., john.doe@example.com" required>
                                </div>
                            </div>
                    
                            <div class="col-12">
                                <label for="service_of_interest" class="form-label">Service of Interest <span class="text-danger">*</span></label>
                                <select class="form-select form-select-sm" id="service_of_interest" name="service_of_interest" required>
                                    <option value="">Select a service</option>
                                    <option value="consulting">Consulting</option>
                                    <option value="regulatory_compliance_management">Regulatory Compliance Management</option>
                                    <option value="quality_management_systems">Quality Management Systems</option>
                                    <option value="quality_assurance">Quality Assurance</option>
                                    <option value="training_education">Training & Education</option>
                                    <option value="health_safety">Health & Safety</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                    
                            <div id="other_input_container" style="display:none;">
                                <label for="other_service" class="form-label">Please specify<span class="text-danger">*</span></label>
                                <input type="text" id="other_service" class="form-control form-control-sm" name="other_service" placeholder="e.g., Custom Software Development">
                            </div>
                    
                            <div class="col-12">
                                <label for="feedback" class="form-label">Feedback <span class="text-danger">*</span></label>
                                <textarea class="form-control form-control-sm" id="feedback" name="feedback" rows="3" placeholder="e.g., I would like more information about your services." required></textarea>
                            </div>
                    
                            <div class="col-12">
                                <div class="d-grid">
                                    <button class="button rounded-button btn btn-sm" type="submit">Send Message</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-12 col-lg-6 d-flex justify-content-center align-items-center" style="height: 100vh;">
                <div class="text-center">
                    <h1 class="fw-bold secondary">READY TO START YOUR NEXT PROJECT?</h1>
                    <p>Whether you’re looking for a regulatory, medical and/or scientific writing partner; or just want to price shop a potential project – we’d love to connect. Fill out the form and someone from our team will be in touch within one business day.</p>
                    <a href="tel:+4915755594025" class="btn btn-secondary mt-3">
                        <i class="fa fa-phone-alt"></i> +49 [1575] 5594025
                    </a>
                    <p class="mt-2">
                        <a href="mailto:info@medtechassist.com" class="secondary">
                            <i class="fa fa-envelope"></i> info@medtechassist.com
                        </a>
                    </p>
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