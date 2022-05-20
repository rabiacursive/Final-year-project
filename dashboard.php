<?php include 'partials/header.php'; ?>
<div class="container">
  <div class="row">

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Animal</th>
          <th scope="col">Description</th>
          <th scope="col">Image</th>
          <th scope="col">Category</th>
          <th>Manage</th>
        </tr>
      </thead>
      <tbody id="products"></tbody>
    </table>
  </div>
</div>

<script>
  $(document).ready(function() {
    fetchData()
    $(document).on("submit", "#editAnimalForm", function(e) {
      e.preventDefault();
      let title = e.target.title.value,
        description = e.target.description.value,
        category = e.target.category.value,
        id = e.target.id.value;

      $.ajax({
        async: true,
        url: "/api/SharedController.php",
        data: JSON.stringify({
          id,
          title,
          description,
          category,
          reqCode: "product",
          reqType: "edit"
        }),
        method: "POST",
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        converters: {
          'json': true
        },
        success: function(data) {
          if (data.status == "success") {
            location.reload();
          } else {
            alert(data.message)
          }
          // location.reload();
        }
      });
    })
    $(document).on("click", ".edit_product", function(e) {
      e.preventDefault();
      $.ajax({
        async: true,
        url: "/api/SharedController.php",
        data: JSON.stringify({
          id: $(this).data("id"),
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
          $("#editAnimalForm [name=id]").val(data.id)
          $("#editAnimalForm [name=title]").val(data.title_en)
          $("#editAnimalForm [name=description]").val(data.description_en)
          $("#editAnimalForm [name=category]").val(data.category)
        }
      });
    })

    $(document).on("click", ".delete_product", function(e) {
      e.preventDefault();
      $.ajax({
        async: true,
        url: "/api/SharedController.php",
        data: JSON.stringify({
          id: $(this).data("id"),
          reqCode: "product",
          reqType: "delete"
        }),
        method: "POST",
        dataType: 'json',
        contentType: 'application/json; charset=utf-8',
        converters: {
          'json': true
        },
        success: function(data) {
          location.reload();
        }
      });
    })
  })

  function fetchData() {
    $.ajax({
      async: true,
      url: "/api/SharedController.php",
      data: JSON.stringify({
        reqCode: "product",
        reqType: "getUser"
      }),
      method: "POST",
      dataType: 'json',
      contentType: 'application/json; charset=utf-8',
      converters: {
        'json': true
      },
      success: function(data) {
        let products_html = data.products.map(product => `
          <tr>
          <th>${product.id}</th>
          <td><a href="product_details.php?id=${product.id}">${product.title_en}</a></td>
          <td>${product.description_en}</td>
          <td><img src="${product.image}" style="width: 40px;"></td>
          <td>${product.category}</td>
          <td>
            <a type="button" href="#" data-bs-toggle="modal" data-bs-target="#editAnimalModal" class="edit_product btn btn-primary" data-id="${product.id}">Edit</a>
            <a type="button" href="#" class="delete_product btn btn-danger" data-id="${product.id}">Delete</a>
          </td>
        </tr>
          `).join("");
        if (data.products.length == 0) {
          products_html = "<tr class='text-danger'><td colspan='3'>No Product Found </td> </tr>"
        }

        $("#products").html($(products_html))
      }
    });
  }
</script>

<?php include 'partials/footer.php'; ?>


</body>

</html>