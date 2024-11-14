<?php 

require('../admin/inc/db_config.php');
require('../admin/inc/essentials.php');

// Đăng ký người dùng
if(isset($_POST['register'])) {
    $data = filteration($_POST);

    // Kiểm tra xem mật khẩu có trùng khớp với mật khẩu xác nhận không
    if($data['pass'] != $data['cpass']) {
        echo 'pass_mismatch';  // Mật khẩu không khớp
        exit;
    }

    // Kiểm tra người dùng đã tồn tại chưa
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1", 
                       [$data['email'], $data['phonenum']], "ss");

    if(mysqli_num_rows($u_exist) != 0) {
        $u_exist_fetch = mysqli_fetch_assoc($u_exist);
        echo ($u_exist_fetch['email'] == $data['email']) ? 'email_already' : 'phone_already';  // Email hoặc số điện thoại đã tồn tại
        exit;
    }

    // Mã hóa mật khẩu
    $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

    // Thêm người dùng vào cơ sở dữ liệu
    $query = "INSERT INTO `user_cred`(`name`, `email`, `address`, `phonenum`, `pincode`, `dob`, `password`) 
              VALUES (?, ?, ?, ?, ?, ?, ?)";
    $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['pincode'], $data['dob'], $enc_pass];

    if(insert($query, $values, 'sssssss')) {
        echo 1;  // Đăng ký thành công
    } else {
        echo 'ins_failed';  // Thất bại khi thêm dữ liệu
    }
}

// Đăng nhập người dùng
if(isset($_POST['login'])) {
    $data = filteration($_POST);

    // Kiểm tra xem người dùng có tồn tại với email hoặc số điện thoại không
    $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? OR `phonenum` = ? LIMIT 1", 
                       [$data['email_mob'], $data['email_mob']], "ss");

    if(mysqli_num_rows($u_exist) == 0) {
        echo 'inv_email_mob';  // Email hoặc số điện thoại không đúng
    } else {
        $u_fetch = mysqli_fetch_assoc($u_exist);

        // Kiểm tra trạng thái tài khoản
        if($u_fetch['status'] == 0) {
            echo 'inactive';  // Tài khoản bị vô hiệu hóa
        } else {
            // Kiểm tra mật khẩu
            if(!password_verify($data['pass'], $u_fetch['password'])) {
                echo 'invalid_pass';  // Mật khẩu không đúng
            } else {
                // Đăng nhập thành công - bắt đầu phiên làm việc
                session_start();
                $_SESSION['login'] = true;
                $_SESSION['uId'] = $u_fetch['id'];
                $_SESSION['uName'] = $u_fetch['name'];
                $_SESSION['uPic'] = $u_fetch['profile'];
                $_SESSION['uPhone'] = $u_fetch['phonenum'];
                echo 1;  // Đăng nhập thành công
            }
        }
    }
}

?>

