<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKT Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php
    require('inc/link.php');
    require('inc/config.php');
  ?>
</head>

<body>
  <?php
    require('inc/header.php');
  ?>
<!-- Swipper -->
<div class="swiper mySwiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide" class="w-100 d-block">
        <img src="images/carousel/trangchu1.png">
      </div>
      <div class="swiper-slide" class="w-100 d-block">
        <img src="images/carousel/trangchu2.png">
      </div>
      <div class="swiper-slide" class="w-100 d-block">
        <img src="images/carousel/trangchu3.png">
      </div>
      <div class="swiper-slide" class="w-100 d-block">
        <img src="images/carousel/trangchu4.png">
      </div>
      <div class="swiper-slide"class="w-100 d-block">
        <img src="images/carousel/trangchu5.png">
      </div>
      <div class="swiper-slide"class="w-100 d-block">
        <img src="images/carousel/trangchu6.png">
      </div>
    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
  </div>
  <!-- kiểm tra phòng có sẵn  -->
  <div class="container availability-form">
    <div class="row">
      <div class="con-lg-12 bg-white shadow p-4 roundeds">
        <h5 class="mb-4">Kiểm Tra Đặt Phòng Ở Đây Nhé </h5>
        <form action="index.php?page=list" id="filter" method="POST">
                  <div class="row">
                    <div class="col-md-3">
                      <label for="">Check-in Date</label>
                      <input type="date" class="form-control datepicker" name="date_in" 
                             value="<?php echo isset($date_in) ? date("Y-m-d",strtotime($date_in)) : "" ?>">
                    </div>
                    <div class="col-md-3">
                      <label for="">Check-out Date</label>
                      <input type="date" class="form-control datepicker" name="date_out"
                             value="<?php echo isset($date_out) ? date("Y-m-d",strtotime($date_out)) : "" ?>">
                    </div>
                    <div class="col-md-3">
                      <br>
                      <button class="btn btn-primary mt-3">Check Availability</button>
                    </div>
                  </div>
                </form>
      </div>
    </div>
  </div>
  <!-- Phòng -->
   <!-- Phòng -->
<!-- Phòng -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font">PHÒNG CỦA CHÚNG TÔI</h2>
<div class="container">
  <div class="row justify-content-center">
    <?php
    // Initialize date variables with default values
    $date_in = isset($_POST['check_in']) ? $_POST['check_in'] : date('Y-m-d');
    $date_out = isset($_POST['check_out']) ? $_POST['check_out'] : date('Y-m-d', strtotime('+1 day'));

    // Lấy các loại phòng từ cơ sở dữ liệu
    $cat = $con->query("SELECT * FROM room_categories");    
    $cat_arr = array();
    while($row = $cat->fetch_assoc()){
        $cat_arr[$row['id']] = $row;
    }

    // Truy vấn lấy các phòng có sẵn theo ngày
    $qry = $con->query("SELECT DISTINCT(category_id) FROM rooms WHERE id NOT IN 
                        (SELECT room_id FROM checked WHERE 
                        ('$date_in' BETWEEN date(date_in) AND date(date_out) 
                          OR '$date_out' BETWEEN date(date_in) AND date(date_out)))");

    while($row = $qry->fetch_assoc()):
        $category = $cat_arr[$row['category_id']];
    ?>
    <div class="col-lg-4 col-md-6 my-3">
      <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
        <!-- Thêm div bao bọc ảnh với tỷ lệ cố định -->
        <div style="aspect-ratio: 3/2; overflow: hidden;">
          <img src="images/rooms/<?php echo $category['cover_img'] ?>" 
               class="card-img-top"
               style="object-fit: cover; width: 100%; height: 100%;" 
               alt="<?php echo $category['name'] ?>">
        </div>
        <div class="card-body">
          <h5 class="card-title"><?php echo $category['name'] ?></h5>
          <h6 class="mb-4">$<?php echo number_format($category['price'], 2) ?></h6>
          <div class="features mb-4">
            <h6 class="mb-1">Đặc điểm</h6>
            <span class="badge bg-light text-dark text-wrap lh-base mb-2">
              2 phòng
            </span>
            <span class="badge bg-light text-dark text-wrap lh-base mb-2">
              2 tolet
            </span>
            <span class="badge bg-light text-dark text-wrap lh-base mb-2">
              1 ghế sofa
            </span>
          </div>
          <div class="facilities mb-4">
            <h6 class="mb-1">Tiện nghi</h6>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Wifi
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Television
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              AC
            </span>
            <span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
              Room heater
            </span>
          </div>
          <div class="rating mb-4">
            <h6 class="mb-1">Đánh giá</h6>
            <span class="badge rounded-pill bg-light">
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
            </span>
          </div>
          <div class="d-flex justify-content-evenly mb-2">
            <button class="btn btn-sm text-white custom-bg shadow-none" 
                    data-id="<?php echo $row['category_id'] ?>">
              Đặt ngay
            </button>
            <a href="#" class="btn btn-sm btn-outline-dark shadow-none">
              Xem chi tiết
            </a>
          </div>
        </div>
      </div>
    </div>
    <?php endwhile; ?>
  </div>

  <div class="col-lg-12 text-center mt-5">
    <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">
      Một số phòng
    </a>
  </div>
</div>

<?php 
    require('inc/footer.php');
?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false,
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
    });
  </script>
</script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>