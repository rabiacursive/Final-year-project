<!-- Add Animal Modal -->
<div class="modal fade" id="addAnimalModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add New Animal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form accept-charset="utf-8" id="addAnimalForm" method="post" name="form_validate" accept="multipart/form-data">
          <div class="form-group mb-3">
            <input class="form-control form-input" maxlength="25" name="title" placeholder="Animal Name" required="" type="text">
          </div>
          <div class="form-group mb-3">
            <input class="form-control form-input" maxlength="25" name="price" placeholder="Price" required="" type="text">
          </div>
          <div class="form-group mb-3">
            <textarea class="form-control form-input" maxlength="490" name="description" placeholder="Description" required=""></textarea>
          </div>
          <div class="form-group mb-3">
            <input type='file' accept="images" name='image' id='file' class='form-control'>
          </div>
          <div class="form-group form-group-category">
            <label class="control-label">Category</label> <select class="form-control custom-select m-0" id="categories" name="category" required="">
              <option value="">
                Select Category
              </option>
              <option value="goat">
                Goat
              </option>
              <option value="cattle">
                Cattle
              </option>
              <option value="sheep">
                Sheep
              </option>
              <option value="chicken">
                Chicken
              </option>
              <option value="horse">
                Horse
              </option>
              <option value="cat">
                Cat
              </option>
              <option value="dog">
                Dog
              </option>
            </select>
            <div id="category_select_container"></div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Close
            </button>
            <button type="submit" class="btn btn-primary">Add</button>
          </div>
      </div>
      </form>
    </div>

  </div>
</div>

<!-- Edit Animal Modal -->
<div class="modal fade" id="editAnimalModal" tabindex="-1" aria-labelledby="editAnimalModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="editAnimalModalLabel">Edit Animal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form accept-charset="utf-8" id="editAnimalForm" method="post" name="form_validate">
          <input type="hidden" name="id">
          <div class="form-group mb-3">
            <input class="form-control form-input" maxlength="25" name="title" placeholder="Animal Name" required="" type="text">
          </div>
          <div class="form-group mb-3">
            <textarea class="form-control form-input" maxlength="490" name="description" placeholder="Description" required=""></textarea>
          </div>
          <div class="form-group form-group-category">
            <label class="control-label">Category</label> <select class="form-control custom-select m-0" id="categories" name="category" required="">
              <option value="">
                Select Category
              </option>
              <option value="goat">
                Goat
              </option>
              <option value="cattle">
                Cattle
              </option>
              <option value="sheep">
                Sheep
              </option>
              <option value="chicken">
                Chicken
              </option>
              <option value="horse">
                Horse
              </option>
              <option value="cat">
                Cat
              </option>
              <option value="dog">
                Dog
              </option>
            </select>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
              Cancel
            </button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script>
  $(document).ready(function() {
    $(document).on("submit", "#addAnimalForm", function(e) {
      e.preventDefault();
      let formData = new FormData(e.target)
      formData.append("reqCode", "product")
      formData.append("reqType", "create")
      $.ajax({
        async: true,
        url: "/api/SharedController.php",
        data: formData,
        method: "POST",
        processData: false, // tell jQuery not to process the data
        contentType: false, // tell jQuery not to set contentType
        success: function(data) {
          console.log(data)
          if (data.status == "success") {
            location.reload();
          } else {
            alert(data.message)
          }
        }
      });
    })
  })
</script>