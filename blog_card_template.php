<?php
// Import database connection
include $_SERVER['DOCUMENT_ROOT'].'config/db.php';

// Ensuring if $pdo is correctly initialized
if (!isset($pdo)) {
    die("Database connection error.");
}


// Fetch blog data
$query = "SELECT id, img_url, title, created FROM blog ORDER BY created DESC LIMIT 3";
$stmt = $pdo->prepare($query);
$stmt->execute();
$blogs = $stmt->fetchAll(PDO::FETCH_ASSOC);
?> 




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Cards</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
   <div class="container mt-5">
        <?php foreach ($blogs as $blog): ?> 
             <!-- blog_card_template.php -->
            <div class="col">
                <div class="card border-0 shadow-sm bg-white hover-card">
                    <img src="<?= htmlspecialchars($blog['img_url']) ?>" class="card-img-top" alt="POST" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center text-dark">
                        <a href="blog-detail_template.php?id=<?= $blog['id'] ?>" class="card-title fw-bold primary py-4">
                            <?= htmlspecialchars($blog['title']) ?>
                        </a>
                        <hr>
                        <p class="text-muted" style="font-size: 12px;">
                            <?= date('F j, Y, \a\t h:i A', strtotime($blog['created'])) ?> | Views: <?= (int) $blog['views'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div> 
</body>
</html>
