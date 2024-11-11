<?php
    require_once('inc/essential.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <?php 
        require_once 'inc/link.php';
    ?>
</head>
<body class="bg-light">
    <?php require_once('inc/header.php'); ?>
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi repudiandae iste et tempora vero quisquam voluptates...
            </div>
        </div>
    </div>
    <?php
        require_once('inc/script.php');
    ?>
</body>
</html>
