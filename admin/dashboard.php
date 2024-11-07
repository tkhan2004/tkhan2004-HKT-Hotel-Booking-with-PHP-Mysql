<?php
    require('inc/essential.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php 
        require('inc/link.php');
    ?>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between">
        <h3 class="mb-0">
            ADMIN PANNEl
        </h3>
        <a href="logout.php" class="btn btn-light btn-sm ">
            LOG OUT
        </a>
    </div>
<?php
    require('inc/script.php');
?>
</body>
</html>