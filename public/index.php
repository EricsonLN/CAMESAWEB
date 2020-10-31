<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php include('linkeos.php') ?>
  <title>Inicio</title>
</head>

<body>

  <?php include('_header.php') ?>

  <div class="main-service">
    <div class="main-service--container container">
      <div class="main-service__item">

        <img src="assets/img/seccion1.png" alt="">

      </div>

      <div class="main-service__item">
        <img src="assets/img/seccion1.1.png" alt="">
      </div>

    </div>
  </div>


  <!-- PRODUCTOS DESTACADOS -->
  <h1 class="producto-title">¡Productos destacados!</h1>
  <div class="slider-gallery container">
    <div class="slider-gallery__items gallery-conatiner">
      <div class="img-container gallery-card"><a href="images\img(21).jpg" data-lightbox="roadtrip"><img src="images\img(21).jpg" alt="" /></a></div>
    </div>
    <!-- segundo items-->
    <div class="slider-gallery__items gallery-conatiner">
      <div class="img-container gallery-card"><a href="images\img(22).jpg" data-lightbox="roadtrip"><img src="images\img(22).jpg" alt="" /></a></div>
    </div>
    <!-- TERCER items-->
    <div class="slider-gallery__items gallery-conatiner">
      <div class="img-container gallery-card"><a href="images\img(23).jpg" data-lightbox="roadtrip"><img src="images\img(23).jpg" alt="" /></a></div>
    </div>
    <!-- cuarto items-->
    <div class="slider-gallery__items gallery-conatiner">
      <div class="img-container gallery-card"><a href=images\img(24).jpg" data-lightbox="roadtrip"><img src="images\img(24).jpg" alt="" /></a></div>
    </div>
  </div>

  <br>
  <?php include('_layout.php') ?>
  <?php include('_script.php') ?>
</body>

</html>