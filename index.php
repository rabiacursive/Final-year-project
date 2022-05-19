<?php include 'partials/header.php'; ?>

<div class="container">
  <div class="row">
    <div>
      <div class="navbar navbar-light navbar-expand">
        <ul class="nav navbar-nav mega-menu">
          <li class="nav-item dropdown" data-category-id="1">
            <a id="nav_main_category_1" href="product_details.php" class="nav-link dropdown-toggle nav-main-category">Goat</a>
          </li>
          <li class="nav-item dropdown" data-category-id="2">
            <a id="nav_main_category_2" href="product_details.php" class="nav-link dropdown-toggle nav-main-category">Cattle</a>
          </li>
          <li class="nav-item dropdown" data-category-id="3">
            <a id="nav_main_category_3" href="product_details.php" class="nav-link dropdown-toggle nav-main-category">Sheep</a>
          </li>
          <li class="nav-item dropdown" data-category-id="4">
            <a id="nav_main_category_4" href="product_details.php" class="nav-link dropdown-toggle nav-main-category">Chicken</a>
          </li>
          <li class="nav-item dropdown" data-category-id="5">
            <a id="nav_main_category_5" href="product_details.php" class="nav-link dropdown-toggle nav-main-category">Horse</a>
          </li>
          <li class="nav-item dropdown" data-category-id="6">
            <a id="nav_main_category_6" href="https://www.beopari.pk/cat" class="nav-link dropdown-toggle nav-main-category">Cat</a>
          </li>
          <li class="nav-item dropdown" data-category-id="7">
            <a id="nav_main_category_7" href="https://www.beopari.pk/dog" class="nav-link dropdown-toggle nav-main-category">Dog</a>
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
        <a href="product_details.php">
          <div id="product-1" class="single-product">
            <div class="part-1"></div>
            <div class="part-2">
              <h3 class="product-title">Kamori, Barbari, Beetal Goats</h3>
              <h4 class="product-old-price">₨35,000</h4>
              <h4 class="product-price">₨25,000</h4>
            </div>
          </div>
        </a>

      </div>
      <!-- Single Product -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <a href="product_details.php">
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
        </a>
      </div>
      <!-- Single Product -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <a href="product_details.php">
          <div id="product-3" class="single-product">
            <div class="part-1"></div>
            <div class="part-2">
              <h3 class="product-title">Twin Komodos</h3>
              <h4 class="product-price">₨1,235,000</h4>
            </div>
          </div>
        </a>
      </div>
      <!-- Single Product -->
      <div class="col-md-6 col-lg-4 col-xl-3">
        <a href="product_details.php">
          <div id="product-4" class="single-product">
            <div class="part-1">
              <span class="new">CUTE</span>
            </div>
            <div class="part-2">
              <h3 class="product-title">Cute Duck</h3>
              <h4 class="product-price">₨635,000</h4>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <?php include 'partials/footer.php'; ?>


  </body>

  </html>