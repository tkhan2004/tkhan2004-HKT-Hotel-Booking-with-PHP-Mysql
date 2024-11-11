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
    <?php 
        require 'inc/link.php';
    ?>
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
                                Tùy chỉnh
                            </button>
                        </div>
                        <h6 class="card-subtitle mb-1 fw-bold">Tiêu đề</h6>
                        <p class="card-text">content</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text">content</p>
                    </div>
                </div>

                <!-- Modal Cài đặt -->
                <div class="modal fade" id="general-s" tabindex="-1" aria-labelledby="general-sLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="general-sLabel">Cài đặt tổng thể</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <!-- Nội dung tùy chỉnh trong modal -->
                                <form>
                                    <div class="mb-3">
                                        <label for="settingTitle" class="form-label">Tiêu đề</label>
                                        <input type="text" class="form-control" id="settingTitle" placeholder="Nhập tiêu đề...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="settingAbout" class="form-label">About Us</label>
                                        <textarea class="form-control" id="settingAbout" rows="3" placeholder="Nhập nội dung..."></textarea>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
                                <button type="button" class="btn btn-primary">Lưu thay đổi</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php
        require('inc/script.php');
    ?>
</body>
</html>
