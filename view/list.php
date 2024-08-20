<?php
require_once '../init.php';

$posts = $post->listAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container">
    <h1 class="mt-5">Posts</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Content</th>
                <th>Author</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= htmlspecialchars($post['id']); ?></td>
                    <td><?= htmlspecialchars($post['title']); ?></td>
                    <td><?= htmlspecialchars($post['content']); ?></td>
                    <td><?= htmlspecialchars($post['author']); ?></td>
                    <td><?= htmlspecialchars($post['created_at']); ?></td>
                    <td><?= htmlspecialchars($post['updated_at']); ?></td>
                    <td>
                        <a href="update.php?id=<?= $post['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="delete.php?id=<?= $post['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</a>
                        <a href="show.php?id=<?= $post['id']; ?>" class="btn btn-primary btn-sm">Show</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="create.php?id=<?=$post['id'];?>" class="btn btn-primary">Add Post</a>
</body>
</html>
