<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    header('Location: login.php');
    exit;
}
include '../config/db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM events WHERE id = ?");
    $stmt->execute([$id]);
    $event = $stmt->fetch();

    if (!$event) {
        header('Location: events.php');
        exit;
    }
} else {
    header('Location: events.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $slug = $_POST['slug'];
    $img_url = $_POST['img_url'];
    $details = $_POST['details'];
    $link = $_POST['link'];
    $img_extension = pathinfo($_FILES['img_url']['name'], PATHINFO_EXTENSION);
    $img_tmp_name = $_FILES['img_url']['tmp_name'];
    $img_new_name = "events/event_$id.$img_extension";
    move_uploaded_file($img_tmp_name, $img_new_name);
    $img_url = "admin/".$img_new_name;
    $stmt = $pdo->prepare("UPDATE events SET title = ?, slug = ?, img_url = ?, details = ?, link = ? WHERE id = ?");
    $stmt->execute([$title, $slug, $img_url, $details, $link, $id]);

    header('Location: events.php');
    exit;
}
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
                    <li class="nav-item"><a class="nav-link" href="events.php"><i class="fas fa-table"></i><span>All Events</span></a></li>

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
                        <h3 class="text-dark mb-0">Edit Event</h3>
                    </div>
                        
                        <form method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $event['title']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="slug" class="form-label">Slug</label>
                                <input type="text" class="form-control" name="slug" value="<?php echo $event['slug']; ?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="img_url" class="form-label">Pick Image</label>
                                <input type="file" class="form-control" name="img_url" value="<?php echo $event['img_url']; ?>">
                            </div>
                            <div class="mb-3">
                                <label for="details" class="form-label">Details</label>
                                <textarea class="form-control" name="details" required><?php echo $event['details']; ?></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="link" class="form-label">Link</label>
                                <input type="text" class="form-control" name="link" value="<?php echo $event['link']; ?>" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Edit Event</button>
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

