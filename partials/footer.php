
    <!-- Add Animal Modal -->
    <div
      class="modal fade"
      id="exampleModal"
      tabindex="-1"
      aria-labelledby="exampleModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add New Animal</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form accept-charset="utf-8" action="https://www.beopari.pk/add-product-post" id="form_validate" method="post" name="form_validate" onkeypress="return event.keyCode != 13;">
              <div class="form-group mb-3">
                <input class="form-control form-input" maxlength="25" name="title" placeholder="Animal Name" required="" type="text">
              </div>
              <div class="form-group mb-3">
                <textarea class="form-control form-input" maxlength="490" name="description" placeholder="Description" required=""></textarea>
              </div>
              <div class="form-group mb-3">
                <input type='file' name='file' id='file' class='form-control' >
              </div>
              <div class="form-group form-group-category">
                  <label class="control-label">Category</label> <select class="form-control custom-select m-0" id="categories" name="category_id[]" onchange="get_subcategories(this.value, 0);" required="">
                    <option value="">
                      Select Category
                    </option>
                    <option value="1">
                      Goat
                    </option>
                    <option value="2">
                      Cattle
                    </option>
                    <option value="3">
                      Sheep
                    </option>
                    <option value="4">
                      Chicken
                    </option>
                    <option value="5">
                      Horse
                    </option>
                    <option value="6">
                      Cat
                    </option>
                    <option value="7">
                      Dog
                    </option>
                  </select>
                  <div id="category_select_container"></div>
                </div>

</form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Add</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Edit Animal Modal -->
    <div
      class="modal fade"
      id="editAnimalModal"
      tabindex="-1"
      aria-labelledby="editAnimalModalLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="editAnimalModalLabel">Edit Animal</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <form accept-charset="utf-8" action="https://www.beopari.pk/add-product-post" id="form_validate" method="post" name="form_validate" onkeypress="return event.keyCode != 13;">
              <div class="form-group mb-3">
                <input class="form-control form-input" maxlength="25" name="title" placeholder="Animal Name" required="" type="text">
              </div>
              <div class="form-group mb-3">
                <textarea class="form-control form-input" maxlength="490" name="description" placeholder="Description" required=""></textarea>
              </div>
              <div class="form-group mb-3">
                <input type='file' name='file' id='file' class='form-control' >
              </div>
              <div class="form-group form-group-category">
                  <label class="control-label">Category</label> <select class="form-control custom-select m-0" id="categories" name="category_id[]" onchange="get_subcategories(this.value, 0);" required="">
                    <option value="">
                      Select Category
                    </option>
                    <option value="1">
                      Goat
                    </option>
                    <option value="2">
                      Cattle
                    </option>
                    <option value="3">
                      Sheep
                    </option>
                    <option value="4">
                      Chicken
                    </option>
                    <option value="5">
                      Horse
                    </option>
                    <option value="6">
                      Cat
                    </option>
                    <option value="7">
                      Dog
                    </option>
                  </select>
                  <div id="category_select_container"></div>
                </div>

</form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Cancel
            </button>
            <button type="button" class="btn btn-primary">Save</button>
          </div>
        </div>
      </div>
    </div>


    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>