<?php
    require('../inc/essential.php');
    require('../inc/config.php');
    adminLogin();

    if (isset($_POST['get_general'])) {
        // Sử dụng dấu nháy ngược để bao quanh tên bảng và cột
        $q = "SELECT * FROM `settings` WHERE `sr_no` = ?";
        $values = [1];

        // Thực hiện truy vấn
        $res = select($q, $values, "i");

        if ($res) {
            $data = mysqli_fetch_assoc($res);

            // Kiểm tra xem dữ liệu có tồn tại không
            if ($data) {
                // Mã hóa kết quả thành JSON và trả về
                echo json_encode($data);
            } else {
                // Nếu không có dữ liệu, trả về thông báo lỗi
                echo json_encode(["error" => "No data found."]);
            }
        } else {
            // Nếu truy vấn không thành công, trả về thông báo lỗi
            echo json_encode(["error" => "Query failed."]);
        }
    }
?>
