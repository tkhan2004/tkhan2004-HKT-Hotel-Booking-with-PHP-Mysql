<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
    <h3 class="mb-0 h-font">WEBSITE QUẢN LÝ</h3>
    <a href="logout.php" class="btn btn-light btn-sm">ĐĂNG XUẤT</a>
</div>

<div class="col-lg-2 bg-dark border-top border-3 border-secondary" id="dashboard-menu">
    <nav class="navbar navbar-expand-lg navbar-dark" role="navigation" aria-label="Dashboard navigation">
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
                        <a class="nav-link text-white" href="settings.php">Cài đặt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
