<?php 
        require('inc/config.php');
        require_once('inc/essential.php');
        session_start();
        if(isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true) {
            redirect('dashboard.php');
            exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Pannel</title>
    <?php 
        require('inc/link.php');
        require('inc/script.php');
    ?>
    <style>
        div.login-form{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
        }
    </style>
</head>
<body class="bg-light">
    <div class="login-form text-center rounded bg-white shadow over">

        <div>
            <form method="POST" >
                <h4 class="bg-dark text-white py-3">Quản trị viên</h4>
                <div class="p-4">
                <div class="mb-3">
                <input name="admin_name" type="text" class="form-control shadow-none text-center" placeholder="Tài khoản admin">
              </div>
              <div class="mb-3" >
                <input name="admin_password" type="password" class="form-control shadow-none text-center" placeholder="Mật khẩu">
              </div>
              <button name="login" type="submit" class="btn text while custom-bg shadow-none">Đăng nhập</button>
            </form>
        </div>
    </div>

    <?php
        if(isset($_POST['login'])){
            $fm_data = filteration($_POST);
            $query = "SELECT * FROM admin_user where admin_name =? AND admin_password=?";
            $value = [$fm_data['admin_name'], $fm_data['admin_password']];
            $datatypes = "ss";
            $res = select($query,$value,"ss");
            if($res->num_rows==1){
                $row = mysqli_fetch_assoc($res);
                $_SESSION['adminLogin'] = true;
                $_SESSION['adminId'] = $row['sr_no'];
                if(isset($_SESSION['adminLogin'])){
                    redirect('dashboard.php');
                }
            }else{
                alert('error' , 'Đăng nhập thất bại - Sai mật khẩu hoặc tên đăng nhập');
            }
        }
    ?>
</body>
</html>