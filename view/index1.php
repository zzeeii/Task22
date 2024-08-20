<?php
require_once '../init.php'; // تأكد من تضمين ملف التهيئة الذي يتضمن الاتصال بقاعدة البيانات

$posts = $post->listAll(); // استرجاع جميع البوستات
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="my-5 text-center">Blog Posts</h1>

    <?php if (!empty($posts)): ?>
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <div class="col-md-6 mb-4">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title"><?= htmlspecialchars($post['title']); ?>Title:</h5>
                            <h6 class="card-subtitle mb-2 text-muted">By <?= htmlspecialchars($post['author']); ?>Author:</h6>
                            <p class="card-text"><?= nl2br(htmlspecialchars($post['content'])); ?>content:</p>
                        </div>
                        <div class="card-footer text-muted">
                            <a href="show.php?id=<?= $post['id']; ?>" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    <?php else: ?>
        <p class="text-center">No posts available.</p>
    <?php endif; ?>
</body>
</html>
