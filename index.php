<?php include 'partials/header.php'; ?>

<div class="container">
  <div class="row">
    <div>
      <div class="navbar navbar-light navbar-expand">
        <ul class="nav navbar-nav mega-menu">
          <li class="nav-item dropdown">
            <a href="#" data-category="goat" class="nav-link dropdown-toggle nav-main-category">Goat</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-category="cattle" class="nav-link dropdown-toggle nav-main-category">Cattle</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-category="sheep" class="nav-link dropdown-toggle nav-main-category">Sheep</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-category="chicken" class="nav-link dropdown-toggle nav-main-category">Chicken</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-category="horse" class="nav-link dropdown-toggle nav-main-category">Horse</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-category="cat" class="nav-link dropdown-toggle nav-main-category">Cat</a>
          </li>
          <li class="nav-item dropdown">
            <a href="#" data-category="dog" class="nav-link dropdown-toggle nav-main-category">Dog</a>
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
    <div class="row" id="products">


    </div>
    <nav id="pagination" class="d-flex align-items-center justify-content-center">

    </nav>
  </div>


  <script>
    let page = 1,
      category = null;

    function fetchData(page, category = null) {
      $.ajax({
        async: true,
        url: "/api/SharedController.php",
        data: JSON.stringify({
          page,
          category,
          reqCode: "product",
          reqType: "getAll"
        }),
        method: "POST",
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        converters: {
          'json': true
        },
        success: function(data) {
          let products_html = data.products.map(product => `
          <div class="col-md-6 col-lg-4 col-xl-3">
              <a href="product_details.php?id=${product.id}">
                <div class="single-product">
                  <div class="part-1" style="background: url('${product.image ? product.image : '/assets/img/cows.jpg'}') no-repeat center;"></div>
                  <div class="part-2">
                    <h3 class="product-title">${product.title_en}</h3>
                    ${product.old_price ? `<h4 class="product-old-price">${product.old_price}</h4>`: ''}
                    <h4 class="product-price">${product.price}</h4>
                  </div>
                </div>
              </a>
          </div>
          `).join("");
          if (data.products.length == 0) {
            products_html = "<h3 class='text-danger'>No Product Found </h3>"
          }

          if (data.number_of_page > 1) {
            $("#pagination").html($(`
              <ul class="list-unstyled d-flex">
                <li><a class="btn btn-disabled" data-total="${data.number_of_page}" id="prevBtn" href="#">Previous</a></li>
                <li><a class="btn btn-primary" data-total="${data.number_of_page}" id="nextBtn" href="#">Next</a></li>
              </ul>
          `))
          }

          $("#products").html($(products_html))
        }
      });
    }
    $(function() {
      fetchData(page)

      $(document).on("click", ".nav-main-category", function(e) {
        e.preventDefault();
        category = $(this).data("category");
        page = 1
        fetchData(page, category)
      })

      $(document).on("click", "#nextBtn", function(e) {
        e.preventDefault();
        let total = $(this).data("total");
        if (page < total) {
          page += 1;
          fetchData(page, category)
        }
      })

      $(document).on("click", "#prevBtn", function(e) {
        e.preventDefault();
        if (page > 1) {
          page -= 1;
          fetchData(page, category)
        }
      })

    })
  </script>

  <?php include 'partials/footer.php'; ?>


  </body>

  </html>