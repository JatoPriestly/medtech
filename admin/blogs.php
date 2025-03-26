<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
include '../config/db.php';

// Fetch blogs
$stmt = $pdo->query("SELECT * FROM blog");
$blogs = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - MedTech Assist</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
            <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                    <div class="sidebar-brand-icon rotate-n-15"></div>
                    <div class="sidebar-brand-text mx-3"><span>MedTech Assist</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="index.php"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="blogs.php"><i class="fas fa-table"></i><span>All Blogs</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="events.php"><i class="fas fa-table"></i><span>All Events</span></a></li>
                    <br>
                    <li class="nav-item"><a class="nav-link" href="logout.php"><i class="fas fa-table"></i><span>Logout</span></a></li>

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                        
                        <ul class="navbar-nav flex-nowrap ms-auto">
                            
                            
                            
                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" href="#">
                                    <span class="d-none d-lg-inline me-2 text-gray-600 small">Senge Ajoeh</span>
                                    <img class="border rounded-circle img-profile" src="../assets/img/team/senge.jpg"></a>
                                    <div class="dropdown-menu shadow dropdown-menu-end animated--grow-in">
                                        <a class="dropdown-item" href="logout.php"><i class="fas fa-sign-out-alt fa-sm fa-fw me-2 text-gray-400"></i>&nbsp;Logout</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">ALL Blogs</h3>
                    </div>
                </div>
                <div class="container-fluid">
                <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                        <h3 class="text-dark mb-0">All Blogs</h3>
                        <a class="btn btn-primary btn-md d-none d-sm-inline-block" role="button" href="add_blog.php"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;Add Blog</a>
                    </div>
                    <table class="table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($blogs as $blog): ?>
                                <tr>
                                    <td><?php echo $blog['id']; ?></td>
                                    <td><?php echo $blog['title']; ?></td>
                                    <td><img class="rounded-circle me-2" width="30" height="30" src="../<?php echo $blog['img_url']; ?>"></td>
                                    <td>
                                        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#blogModal<?php echo $blog['id']; ?>">View</button>
                                        <a href="edit_blog.php?id=<?php echo $blog['id']; ?>" class="btn btn-warning">Edit</a>
                                        <a href="delete_blog.php?id=<?php echo $blog['id']; ?>" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>

                                <!-- Modal -->
                                <div class="modal fade" id="blogModal<?php echo $blog['id']; ?>" tabindex="-1" aria-labelledby="blogModalLabel<?php echo $blog['id']; ?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="blogModalLabel<?php echo $blog['id']; ?>"><?php echo htmlspecialchars($blog['title']); ?></h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="col-lg-8 mb-4 primary">
                                                    <!-- Breadcrumb -->
                                                    <nav aria-label="breadcrumb">
                                                        <ol class="breadcrumb">
                                                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                                                            <li class="breadcrumb-item"><a href="#">Blog</a></li>
                                                            <li class="breadcrumb-item active" aria-current="page"><?php echo htmlspecialchars($blog['title']); ?></li>
                                                        </ol>
                                                    </nav>
                                                    <!-- Blog Title -->
                                                    <h1 class="fw-bold primary"><?php echo htmlspecialchars($blog['title']); ?></h1>
                                                    <!-- Blog Image -->
                                                    <img src="../<?= htmlspecialchars($blog['img_url']); ?>" class="img-fluid my-4" alt="Blog Post Image">
                                                    <!-- Blog Content -->
                                                    <p><?= htmlspecialchars($blog['description']); ?></p>
                                                    <h3 class="fw-bold italic"><?= htmlspecialchars($blog['subtitle1']); ?></h3>
                                                    <p><?= htmlspecialchars($blog['text1']); ?></p>
                                                    <h3 class="fw-bold italic"><?= htmlspecialchars($blog['subtitle2']); ?></h3>
                                                    <p><?= htmlspecialchars($blog['text2']); ?></p>
                                                    <h3 class="fw-bold italic">Reference</h3>
                                                    <p><?= htmlspecialchars($blog['reference']); ?></p>
                                                    <p><?= htmlspecialchars($blog['updated']); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>



            </div>
           
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>