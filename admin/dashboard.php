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
        require 'inc/link.php';
    ?>
</head>
<body class="bg-light">
    <div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
        <h3 class="mb-0 h-font">
            WEBSITE QUẢN LÝ
        </h3>
        <a href="logout.php" class="btn btn-light btn-sm">
            ĐĂNG XUẤT
        </a>
    </div>

    <div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid flex-lg-column align-items-stretch">
                <h4 class="mt-2 text-light">BẢNG ĐIỀU KHIỂN</h4>
                <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="adminDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="adminDropdown">
                    <ul class="nav nav-pills flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="dashboard.php">Bảng thống kê</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="room.php">Phòng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Khách hàng</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Cài đặt</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-10 ms-auto">
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nisi repudiandae iste et tempora vero quisquam voluptates, eum fuga. Incidunt id, ab qui iusto doloribus nihil quibusdam minus tempore eum magnam fuga mollitia soluta, tenetur consectetur ipsum praesentium commodi quos iste vel enim provident neque vero. Vel ad adipisci at recusandae blanditiis qui voluptatem quia, molestiae laboriosam maxime eaque saepe aspernatur unde eligendi odit officiis enim aperiam excepturi iure inventore natus nam hic in repellendus! Pariatur tempora sit nisi ea quos placeat quod voluptatem facere atque ullam aliquam quam iste nihil soluta minus libero recusandae quo officia, excepturi expedita doloribus ex eaque iusto quisquam? Autem ipsa obcaecati nam, sint eos alias nostrum quis consequuntur provident eveniet ex. Veniam consequuntur dolor, quod iusto totam, fuga minima excepturi est, iste at possimus aut doloremque esse a nostrum qui rem voluptatibus dicta ipsum? Eos, minus molestiae! Aspernatur aut minima ipsam rem unde incidunt explicabo est? Nisi maxime ipsa, ut esse ducimus reiciendis eos aut at atque recusandae, optio beatae earum quidem aperiam voluptatem dolorum perferendis! Sequi eius nihil, officia dignissimos corporis fugiat facere cupiditate quasi temporibus laborum sint eveniet soluta vel, totam enim earum fugit nostrum, perferendis unde reprehenderit libero in mollitia natus? Odio.
            </div>
        </div>
    </div>
    <?php
        require('inc/script.php');
    ?>
</body>
</html>