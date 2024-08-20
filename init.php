<?php

require_once 'Post.php';

$post = new Post();
echo "
<script>
    window.onload = function() {
        var alertDiv = document.createElement('div');
        alertDiv.innerHTML = 'Connected to the database successfully and ensured \"posts\" table exists.';
        alertDiv.style.position = 'fixed';
        alertDiv.style.top = '20px';
        alertDiv.style.left = '50%';
        alertDiv.style.transform = 'translateX(-50%)';
        alertDiv.style.backgroundColor = '#4CAF50';
        alertDiv.style.color = '#fff';
        alertDiv.style.padding = '10px 20px';
        alertDiv.style.borderRadius = '5px';
        alertDiv.style.zIndex = '1000';
        document.body.appendChild(alertDiv);

        setTimeout(function() {
            alertDiv.style.display = 'none';
        }, 2000);
    };
</script>
";

?>
