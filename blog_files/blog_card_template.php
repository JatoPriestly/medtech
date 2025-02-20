<?php
// Import database connection
require 'config/db.php';

// Fetch blog data
$query = "SELECT id, image, title, description, created_at, views FROM blogs ORDER BY created_at DESC LIMIT 6";
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
    <d class="container mt-5">
        
        <?php foreach ($blogs as $blog): ?>
            <div class="col mb-4">
                <div class="card border-0 shadow-sm bg-white hover-card">
                    <img src="<?= htmlspecialchars($blog['image_url']) ?>" class="card-img-top" alt="POST" style="height: 250px; object-fit: cover;">
                    <div class="card-body text-center text-dark">
                        <a href="blog-detail.php?id=<?= $blog['id'] ?>" class="card-title fw-bold primary py-4">
                            <?= htmlspecialchars($blog['title']) ?>
                        </a>
                        <p class="text-dark" style="font-size: 14px;">
                            <?= htmlspecialchars($blog['description']) ?>
                        </p>
                        <hr>
                        <p class="text-muted" style="font-size: 12px;">
                        <?= date('F j, Y, \a\t h:i A', strtotime($blog['created_at'])) ?> | Views: <?= (int) $blog['views'] ?>
                        </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
