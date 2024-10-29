<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TJ Hotel - ABOUT</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <?php ('inc/link.php'); ?>
    <style>
        .box{
            border-top-color: var(--teal) !important;
        }
    </style>
    </head>
    <body class="bg-light">

    <?php require('inc/header.php'); ?>
    
    <div class="my-5 px-4">
        <h2 class="fw-bold h-font text-center">ABOUT US</h2>
        <div class="h-line bg-dark"></div>
        <p  class="text-center mt-3">
        Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Temporibus incidunt odio quos <br>dolore commodi repudiandae
        tenetur consequuntur et similique asperiores.
        </p>
    </div>
  
    <div class="container">
    <div class="row justify-content-between align-items-center">
        <div class="col-lg-6 col-md-5 md-4 order-lq-1 order-md-1 order-2">
            <h3 class="mb-3">Lorem ipsum dolor sit</h3>
            <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis minima sapiente aliquam sed officia nostrum fuga?
            Lorem ipsum dolor sit amet consectetur adipisicing elit.
            Omnis minima sapiente aliquam sed officia nostrum fuga?

            </p>
        </div>
        <div class="col-lq-5 col-md-5 md-4 order-lq-2 order-md-2 order-1">
            <img src="img/sapa3.png" class="w-100">

        </div>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/sapa6.jpg" width="70px">
            <h4 class="mt-3">100+ ROOMS</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/sapa6.jpg" width="70px">
            <h4 class="mt-3">200+ CUSTOMERS </h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/sapa6.jpg" width="70px">
            <h4 class="mt-3">150+ REVIEW</h4>
            </div>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 px-4">
            <div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
            <img src="img/sapa6.jpg" width="70px">
            <h4 class="mt-3">200+ STAFF</h4>
            </div>
        </div>
    </div>
</div>

<h3 class="my-5 fw-bold h-font text-center">MANAGEMET TEAM</h3>


<div class="container px-4">
<div class="swiper mySwiper">
    <div class="swiper-wrapper mb-5">
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
        <div class="swiper-slide bg-white text-center overflow-hidden rounded">
            <img src="img/sapa4.jpg" class="w-100">
            <h5 class="mt-2">Random Name</h5>
        </div>
    </div>
    <div class="swiper-pagination"></div>
</div>

</div>

            
    

    <?php require('inc/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
   <!-- Initialize Swiper -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper(".mySwiper", {
    slidesPerView: 4,
    pagination: {
        el: ".swiper-pagination",
    },
    breakpoints: {
  320: {
    slidesPerView: 1,
  },
  640: {
    slidesPerView: 1,
  },
  768: {
    slidesPerView: 3,
  },
  1024: {
    slidesPerView: 3,
  },
}

});
</script>

</body>

</html>