<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HKT Hotel</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <?php
    require('inc/link.php');
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
        <form >
          <div class="row align-items-end">
            <div class="col-lg-3">
              <label class="form-label" style="font-weight: 500;">Check In</label>
              <input type="date" class="form-control shadow-none" required>
            </div>
            <div class="col-lg-3">
              <label class="form-label" style="font-weight: 500;">Check Out</label>
              <input type="date" class="form-control shadow-none" required>
            </div>
            <div class="col-lg-3">
              <label class="form-lable" style="font-weight :500"> Số Người </label>
            <select class="form-control shadow-none" aria-label="Default select example">
              <option selected>Hãy lựa chọn</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
            </select>
            </div>
            <div class="col-lg-1 mb-lg-3 mt-2">
              <button type="submit" class="btn text-white shadow-none custom-bg "> Xác nhận</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- Phòng -->
   <h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font "> PHÒNG CỦA CHÚNG TÔI</h2>
   <div class="contaner">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 >Phòng Tình Yêu</h5>
            <h6> $200</h6>
            <div class="features">
              <h6 class="mb-1"> Đặc điểm</h6>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                2 phòng
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                2 tolet
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                1 ghế sofa
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1"> Đánh giá </h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i> 
            </div>
            <div class="d-flex">
            <a href="#" class="btn btn-sm text-white custom-bg">Đặt ngay</a>
            <a href="#" class="btn btn-sm text-outline-dark shadow-none">Xem chi tiết </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 >Phòng Tình Yêu</h5>
            <h6> $200</h6>
            <div class="features">
              <h6 class="mb-1"> Đặc điểm</h6>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                2 phòng
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                2 tolet
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                1 ghế sofa
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1"> Đánh giá </h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i> 
            </div>
            <div class="d-flex">
            <a href="#" class="btn btn-sm text-white custom-bg">Đặt ngay</a>
            <a href="#" class="btn btn-sm text-outline-dark shadow-none">Xem chi tiết </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 my-3">
        <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
          <img src="images/rooms/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 >Phòng Tình Yêu</h5>
            <h6> $200</h6>
            <div class="features">
              <h6 class="mb-1"> Đặc điểm</h6>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                2 phòng
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                2 tolet
              </span>
              <span class="badge bg-light text-dark mb-3 text-wrap  ">
                1 ghế sofa
              </span>
            </div>
            <div class="rating mb-4">
              <h6 class="mb-1"> Đánh giá </h6>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i>
              <i class="bi bi-star-fill text-warning"></i> 
            </div>
            <div class="d-flex">
            <a href="#" class="btn btn-sm text-white custom-bg">Đặt ngay</a>
            <a href="#" class="btn btn-sm text-outline-dark shadow-none">Xem chi tiết </a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-12 text-center mt-5">
        <a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none ">
          Một số phòng 
        </a>
      </div>  
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