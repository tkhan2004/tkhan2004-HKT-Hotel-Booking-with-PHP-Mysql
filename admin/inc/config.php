<?php

    $hname = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hktbooking';
    // kết nối db
    $con = mysqli_connect($hname,$uname,$pass,$db);
    
    if(!$con){
        die("Không thể kết nối với database".mysqli_connect_error());
    }
    // hàm này để lọc cơ sở dữ liệu
    function filteration($data) {
        foreach($data as $key => $value){
            $data[$key] =trim($value);
            $data[$key] =stripcslashes($value);
            $data[$key] =htmlspecialchars($value);
            $data[$key] =strip_tags($value);
        }
        return $data;
    }
    function select($sql, $values, $datatype) {
        $con = $GLOBALS['con']; // Truy cập biến kết nối toàn cục $con
    
        if ($stmt = mysqli_prepare($con, $sql)) { // Chuẩn bị câu lệnh SQL
            mysqli_stmt_bind_param($stmt, $datatype, ...$values); // Liên kết các tham số với câu lệnh chuẩn bị
            if (mysqli_stmt_execute($stmt)) { // Thực thi câu lệnh
                $res = mysqli_stmt_get_result($stmt); // Lấy kết quả truy vấn
                mysqli_stmt_close($stmt); // Đóng câu lệnh chuẩn bị
                return $res; // Trả về kết quả
            } else {
                mysqli_stmt_close($stmt);
                die('Truy vấn không thể thực thi - Select'); // Thông báo lỗi nếu truy vấn không thực thi được
            }
        } else {
            die('Truy vấn không được chuẩn bị sẵn - Select'); // Thông báo lỗi nếu câu lệnh không chuẩn bị được
        }
    }
?>