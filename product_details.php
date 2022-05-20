<?php include 'partials/header.php';
if (!isset($_GET["id"])) {
    header("Location: /");
}
?>

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
                                                            <a href="#" tabindex="0" title=""><img alt="slider-bg" class="img-bg" src="https://www.beopari.pk/assets/img/slider_bg.png"> <img alt="" class="img-product-slider" id="image" src="/assets/img/cows.jpg"></a>
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
                                            <h1 id="product_title">White Goat</h1><span style="margin-left: auto;">Views <span id="views">${0}</span></span>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="card-link" data-toggle="collapse" href="#collapse_description_content">Description<i class="icon-arrow-down"></i><i class="icon-arrow-up"></i></a>
                                            </div>
                                            <div class="card-body">
                                                <textarea class="w-100 border-0" readonly style="resize: none;" id="product_description"></textarea>
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
    function fetchData() {
        $.ajax({
            async: true,
            url: "/api/SharedController.php",
            data: JSON.stringify({
                id: <?= $_GET["id"] ?>,
                reqCode: "product",
                reqType: "get"
            }),
            method: "POST",
            dataType: 'json',
            contentType: 'application/json; charset=utf-8',
            converters: {
                'json': true
            },
            success: function(data) {
                console.log(data)
                $("#product_description").val(data.description_en)
                $("#product_title").text(data.title_en)
                $("#views").text(data.views)
                $("#image").attr("src", data.image)
            }
        });
    }
    $(function() {
        fetchData()
    })
</script>


</body>

</html>