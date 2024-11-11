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
                        <p class="card-text" id="site_title">content</p>
                        <h6 class="card-subtitle mb-1 fw-bold">About us</h6>
                        <p class="card-text" id="site_about">content</p>
                    </div>
                </div>

                <!-- Modal Cài đặt -->
                <div class="modal fade" id="general-s" tabindex="-1" aria-labelledby="general-sLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="general-sLabel">Cài đặt tổng thể</h5>
                                </div>
                                <div class="modal-body">
                                    <div class="mb-3">
                                        <label class="form-label">Tên Miền</label>
                                        <input id="site_title" type="text" name="site_title_inp" class="form-control shadow-none" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">About us</label>
                                        <textarea  id="site_about_inp" name="site_about" class="form-control shadow-none" rows="6"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn text-secondary shadow-none" data-bs-dismiss="modal">HỦY</button>
                                    <button type="submit" class="btn custom-bg text-white shadow-none">ĐĂNG KÝ</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <?php
        // Đảm bảo bao gồm Bootstrap bundle cho modal hoạt động
        echo '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>';
        require('inc/script.php');
    ?>
    <script>
        function get_general() {
            let site_title = document.getElementById('site_title');
            let site_about = document.getElementById('site_about');

            let site_title_inp = document.getElementById('site_title_inp');
            let site_about_inp = document.getElementById('site_about_inp');

            let xhr = new XMLHttpRequest();
            xhr.open("POST", "ajax/settings_crud.php", true);
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    let general_data = JSON.parse(this.responseText);
                    console.log(general_data);

                    // Cập nhật nội dung vào các phần tử
                    site_title.innerText = general_data.site_title;
                    site_about.innerText = general_data.site_about;

                    site_title_inp.value = general_data.site_title;
                    site_about_inp.value = general_data.site_about;
                }
            }
            xhr.send('get_general');
        }

        window.onload = get_general; // Đảm bảo hàm được gọi sau khi trang tải
    </script>

</body>
</html>
