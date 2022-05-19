<?php
include_once "api/helper.php";
if (!isset($_SESSION["userID"])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/shop.css" />
</head>

<body>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <img src="assets/img/Beopari-logo.svg" style="width: 100px; display: inline-block; margin: auto" />
        </a>

        <ul class="nav col-12 col-lg-auto ms-3 me-lg-auto mb-2 justify-content-center mb-md-0">
          <li>
            <a href="shop.php" class="nav-link px-2 link-secondary">Buy</a>
          </li>
          <li>
            <a href="sell.php" class="nav-link px-2 link-dark">Sell</a>
          </li>
        </ul>
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="assets/img/rabia-profile.png" alt="mdo" class="rounded-circle" width="32" height="32" />
          </a>
          <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
            <li><a class="dropdown-item" href="#">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="container">
    <div class="row">
      <div>
        <div class="navbar navbar-light navbar-expand">
          <ul class="nav navbar-nav mega-menu">
            <li class="nav-item dropdown" data-category-id="1">
              <a id="nav_main_category_1" href="https://www.beopari.pk/goat" class="nav-link dropdown-toggle nav-main-category" data-id="1" data-parent-id="0" data-has-sb="0">Goat</a>
            </li>
            <li class="nav-item dropdown" data-category-id="2">
              <a id="nav_main_category_2" href="https://www.beopari.pk/Cattle" class="nav-link dropdown-toggle nav-main-category" data-id="2" data-parent-id="0" data-has-sb="0">Cattle</a>
            </li>
            <li class="nav-item dropdown" data-category-id="3">
              <a id="nav_main_category_3" href="https://www.beopari.pk/sheep" class="nav-link dropdown-toggle nav-main-category" data-id="3" data-parent-id="0" data-has-sb="0">Sheep</a>
            </li>
            <li class="nav-item dropdown" data-category-id="4">
              <a id="nav_main_category_4" href="https://www.beopari.pk/chicken" class="nav-link dropdown-toggle nav-main-category" data-id="4" data-parent-id="0" data-has-sb="0">Chicken</a>
            </li>
            <li class="nav-item dropdown" data-category-id="5">
              <a id="nav_main_category_5" href="https://www.beopari.pk/horse" class="nav-link dropdown-toggle nav-main-category" data-id="5" data-parent-id="0" data-has-sb="0">Horse</a>
            </li>
            <li class="nav-item dropdown" data-category-id="6">
              <a id="nav_main_category_6" href="https://www.beopari.pk/cat" class="nav-link dropdown-toggle nav-main-category" data-id="6" data-parent-id="0" data-has-sb="0">Cat</a>
            </li>
            <li class="nav-item dropdown" data-category-id="7">
              <a id="nav_main_category_7" href="https://www.beopari.pk/dog" class="nav-link dropdown-toggle nav-main-category" data-id="7" data-parent-id="0" data-has-sb="0">Dog</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <section class="section-products">
    <div class="container">
      <div class="row justify-content-center text-center">
        <div class="col-md-8 col-lg-6">
          <div class="header">
            <h2>Most Wanted Animals</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- Single Product -->
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-1" class="single-product">
            <div class="part-1"></div>
            <div class="part-2">
              <h3 class="product-title">Kamori, Barbari, Beetal Goats</h3>
              <h4 class="product-old-price">₨35,000</h4>
              <h4 class="product-price">₨25,000</h4>
            </div>
          </div>
        </div>
        <!-- Single Product -->
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-2" class="single-product">
            <div class="part-1">
              <span class="discount">15% off</span>
            </div>
            <div class="part-2">
              <h3 class="product-title">Sahiwal Cow</h3>
              <h4 class="product-old-price">₨400,000</h4>
              <h4 class="product-price">₨340,000</h4>
            </div>
          </div>
        </div>
        <!-- Single Product -->
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-3" class="single-product">
            <div class="part-1"></div>
            <div class="part-2">
              <h3 class="product-title">Twin Komodos</h3>
              <h4 class="product-price">₨1,235,000</h4>
            </div>
          </div>
        </div>
        <!-- Single Product -->
        <div class="col-md-6 col-lg-4 col-xl-3">
          <div id="product-4" class="single-product">
            <div class="part-1">
              <span class="new">CUTE</span>
            </div>
            <div class="part-2">
              <h3 class="product-title">Cute Duck</h3>
              <h4 class="product-price">₨635,000</h4>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>