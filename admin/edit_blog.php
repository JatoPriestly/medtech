<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
include '../config/db.php';

$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM blog WHERE id = ?");
$stmt->execute([$id]);
$blog = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $description = $_POST['description'];
    $subtitle1 = $_POST['subtitle1'];
    $text1 = $_POST['text1'];
    $subtitle2 = $_POST['subtitle2'];
    $text2 = $_POST['text2'];
    $reference = $_POST['reference'];

    // Handle file upload
    if (isset($_FILES['img_url']) && $_FILES['img_url']['error'] == UPLOAD_ERR_OK) {
        $img_tmp_name = $_FILES['img_url']['tmp_name'];
        $img_extension = pathinfo($_FILES['img_url']['name'], PATHINFO_EXTENSION);
        $img_new_name = "blogs/blog_$id.$img_extension";
        move_uploaded_file($img_tmp_name, $img_new_name);
        $img_url = "admin/".$img_new_name;
        // Insert into database to get the new blog ID
        $stmt = $pdo->prepare("UPDATE blog SET title = ?, slug = ?, description = ?, subtitle1 = ?, text1 = ?, subtitle2 = ?, text2 = ?, reference = ?, img_url = ? WHERE id = ?");
        $stmt->execute([$title, $slug, $description, $subtitle1, $text1, $subtitle2, $text2, $reference, $img_url, $id]);

        // Move the uploaded file to the 'blogs' directory with the blog ID as its name


        header('Location: blogs.php');
        exit;
    } else {
        echo "Image upload error.";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Edit Blog</title>
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
                <div class="text-center d-none d-md-inline"><button class="btn btn-link d-md-none rounded-circle me-3" id="sidebarToggle" type="button"><i class="fas fa-bars"></i></button></div>
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
                    <div style="margin-left:4px; margin-right:4px;" class="card w-100 shadow border-start-primary py-2">
                        <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Edit Blog</h3>
                    </div>
                        
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $blog['title']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="<?php echo $blog['slug']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="img_url" class="form-label">Pick Image</label>
                                <input type="file" class="form-control" name="img_url">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" required><?php echo $blog['description']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="subtitle1" class="form-label">Subtitle 1</label>
                                <input type="text" class="form-control" name="subtitle1" value="<?php echo $blog['subtitle1']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="text1" class="form-label">Text 1</label>
                                <textarea class="form-control" name="text1"><?php echo $blog['text1']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="subtitle2" class="form-label">Subtitle 2</label>
                                <input type="text" class="form-control" name="subtitle2" value="<?php echo $blog['subtitle2']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="text2" class="form-label">Text 2</label>
                                <textarea class="form-control" name="text2"><?php echo $blog['text2']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="reference" class="form-label">Reference</label>
                                <textarea class="form-control" name="reference"><?php echo $blog['reference']; ?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Blog</button>
                        </form>
                    </div>
                </div>
                </div>
                </div>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>
