<?php
require_once '../init.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Post ID not specified.");
}

$post->delete($id);
echo "Post deleted successfully!";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="mt-5">Delete Post</h1>
    <a href="list.php" class="btn btn-primary">Back to Posts</a>
</body>
</html>
