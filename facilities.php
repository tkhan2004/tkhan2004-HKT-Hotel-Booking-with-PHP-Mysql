<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php require('inc/links.php'); ?>
  <title><?php echo $settings_r['site_title'] ?> - FACILITIES</title>
  <style>
    .pop:hover{
      border-top-color: var(--teal) !important;
      transform: scale(1.03);
      transition: all 0.3s;
    }
  </style>
</head>
<body class="bg-light">

  <?php require('inc/header.php'); ?>

  <div class="my-5 px-4">
    <h2 class="fw-bold h-font text-center">VỀ CƠ SỞ VẬT CHẤT</h2>
    <div class="h-line bg-dark"></div>
    <p class="text-center mt-3">
    HKT Hotel tự hào sở hữu cơ sở vật chất hiện đại và sang trọng, mang lại sự tiện nghi tối đa cho khách hàng. Mỗi phòng nghỉ đều được trang bị đầy đủ tiện ích cao cấp như điều hòa không khí, TV màn hình phẳng, minibar và wifi tốc độ cao. Ngoài ra, khách sạn còn cung cấp hệ thống phòng họp và hội nghị với trang thiết bị tiên tiến, phù hợp cho các sự kiện và hội thảo chuyên nghiệp.<br>

Khách sạn còn có nhà hàng phục vụ ẩm thực đa dạng từ Á đến Âu, một phòng gym hiện đại với trang thiết bị tập luyện đầy đủ, cùng dịch vụ spa thư giãn giúp du khách tận hưởng những phút giây nghỉ ngơi thoải mái. Tất cả các tiện ích đều được thiết kế nhằm đảm bảo sự hài lòng và an toàn tuyệt đối cho khách hàng.
    </p>
  </div>

  <div class="container">
    <div class="row">
      <?php 
        $res = selectAll('facilities');
        $path = FACILITIES_IMG_PATH;

        while($row = mysqli_fetch_assoc($res)){
          echo<<<data
            <div class="col-lg-4 col-md-6 mb-5 px-4">
              <div class="bg-white rounded shadow p-4 border-top border-4 border-dark pop">
                <div class="d-flex align-items-center mb-2">
                  <img src="$path$row[icon]" width="40px">
                  <h5 class="m-0 ms-3">$row[name]</h5>
                </div>
                <p>$row[description]</p>
              </div>
            </div>
          data;
        }
      ?>
    </div>
  </div>


  <?php require('inc/footer.php'); ?>

</body>
</html>