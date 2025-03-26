<?php
// Import database connection
include 'config/db.php';

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



        
                    <?php foreach ($blogs as $blog): ?> 
                    <div class="col mb-4" id="franklin">
                    <div class="card border-0 shadow-sm bg-white hover-card">
                        <img src="<?= htmlspecialchars($blog['img_url']) ?>" class="card-img-top" alt="POST" style="height: 250px; object-fit: cover;">
                        <div class="card-body text-center text-dark">
                            <a href="blog-detail_template.php?id=<?= $blog['id'] ?>" class="card-title fw-bold primary py-4"><?= htmlspecialchars($blog['title']) ?></a>
                            <hr>
                            <p class="text-muted" style="font-size: 12px;"><?= date('F j, Y, \a\t h:i A', strtotime($blog['created'])) ?> | Views: <?= (int) $blog['views'] ?></p>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>