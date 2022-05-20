<?php include 'partials/header.php'; ?>

<div id="wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="product-details-container">
					<div class="row">
						<div class="col-12 col-sm-12 col-md-6">
							<div id="product_slider_container">
								<div class="product-slider-container">
									<div class="right">
										<div class="product-slider-content">
											<div class="product-slider gallery slick-initialized slick-slider" id="product_slider">
												<div class="slick-list draggable">
													<div class="slick-track" style="opacity: 1; width: 605px;">
														<div aria-hidden="false" class="item slick-slide slick-current slick-active" data-slick-index="0" style="width: 605px; position: relative; left: 0px; top: 0px; z-index: 999; opacity: 1;" tabindex="0">
															<a href="https://www.beopari.pk/uploads/images/202203/img_1920x_622a2607d3fe33-12979050-80448038.jpg" tabindex="0" title=""><img alt="slider-bg" class="img-bg" src="https://www.beopari.pk/assets/img/slider_bg.png"> <img alt="" class="img-product-slider" src="https://www.beopari.pk/uploads/images/202203/img_x500_622a2607a03319-30614849-93464742.jpg"></a>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="row-custom text-center"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-sm-12 col-md-6">
							<div class="product-content-details" id="response_product_details">
								<div class="row">
									<div class="col-12" style="">
										<div style="display: flex;">
										<h1 class="product-title">White Goat</h1><span style="margin-left: auto;">Views ${0}</span></div>
										<div class="card">
											<div class="card-header">
												<a class="card-link" data-toggle="collapse" href="#collapse_description_content">Description<i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></a>
											</div>
											<div class="card-body">
												<textarea class="w-100 border-0" readonly style="resize: none;"></textarea>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12"></div>
				</div>
			</div>
			<div class="col-12">
				<div class="row-custom row-bn"></div>
			</div>
		</div>
	</div>
</div>


<?php include 'partials/footer.php'; ?>

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


</body>

</html>