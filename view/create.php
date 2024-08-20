<?php
require_once '../init.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post->title = $_POST['title'];
    $post->content = $_POST['content'];
    $post->author = $_POST['author'];
    $post->create();
    echo "Post created successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="mt-5">Create a New Post</h1>
    <form method="POST" action="create.php">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" required>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
    <a href="list.php" class="btn btn-primary mt-4">Back to posts table</a>
    <a href="index1.php" class="btn btn-primary mt-4">Back to Posts</a>
</body>
</html>
