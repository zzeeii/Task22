<?php
require_once '../init.php'; 


$id = $_GET['id'] ?? null;
if (!$id) {
    die("Post ID not specified.");
}
 
 $postDetails = $post->read($id);

   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($postDetails['title']); ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="my-5"><?= htmlspecialchars($postDetails['title']); ?></h1>
    <h2 class="text-muted">Created By <?= htmlspecialchars($postDetails['author']); ?> on <?= date('F j, Y, g:i a', strtotime($postDetails['created_at'])); ?></h2>
    <hr>
    <div class="content">
        <p><?= nl2br(htmlspecialchars($postDetails['content'])); ?></p>
    </div>
    <a href="list.php" class="btn btn-primary mt-4">Back to posts table</a>
    <a href="index1.php" class="btn btn-primary mt-4">Back to Posts</a>
</body>
</html>
