<?php
    require('inc/essential.php');
    adminLogin();
?>
<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Cài đặt</title>
    <?php require 'inc/link.php'; ?>
</head>
<body class="bg-light">
    <!-- Header -->
    <?php require('inc/header.php'); ?>

    <!-- Main Content -->
    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-4 overflow-hidden">
                <h3 class="mb-4">CÀI ĐẶT</h3>

                <!-- Cài đặt card -->
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Cài đặt tổng thể</h5>
                            <!-- Nút Tùy chỉnh kích hoạt Modal -->
                            <button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
                                <i class="bi bi-pencil-square"></i> Tùy chỉnh
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Tiêu đề</h6>
                        <p class="card-text" id="site_title"></p>
                        <h6 class="card-subtitle mb-1 fw-bold">Về chúng tôi</h6>
                        <p class="card-text" id="site_about"></p>
                    </div>
                </div>

                <!-- Modal Cài đặt -->
                <div class="modal fade" id="general-s" data-bs-backdrop="static" tabindex="-1" data-bs-keyboard="true" aria-labelledby="staticBackropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form id="general_s_form">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="general-sLabel">Cài đặt tổng thể</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Tên Miền</label>
                                        <input id="site_title_inp" type="text" name="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Về chúng tôi</label>
                                        <textarea id="site_about_inp" name="site_about" class="form-control shadow-none" rows="6" required></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" onclick="site_title_inp.value = general_data.site_title; site_about_inp.value = general_data.site_about" class="btn text-secondary shadow-none" data-bs-dismiss="modal">HỦY</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">ĐĂNG KÝ</button>
                                </div>
                            </div>
                        </form> <!-- Đảm bảo thẻ form được đóng đúng cách -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php require('inc/scripts.php'); ?>
       <script src="scripts/settings.js"></script>
    </body>
</html>