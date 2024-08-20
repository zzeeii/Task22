<?php
require_once '../init.php';

$id = $_GET['id'] ?? null;
if (!$id) {
    die("Post ID not specified.");
}

$post->read($id);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $post->title = $_POST['title'];
    $post->content = $_POST['content'];
    $post->author = $_POST['author'];
    $post->update($id);
    echo "Post updated successfully!";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="mt-5">Update Post</h1>
    <form method="POST" action="update.php?id=<?= $post->id; ?>">
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="<?= htmlspecialchars($post->title); ?>" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required><?= htmlspecialchars($post->content); ?></textarea>
        </div>
        <div class="mb-3">
            <label for="author" class="form-label">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="<?= htmlspecialchars($post->author); ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    <a href="list.php" class="btn btn-primary mt-4">Back to posts table</a>
    <a href="index1.php" class="btn btn-primary mt-4">Back to Posts</a>
</body>
</html>
