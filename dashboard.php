

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
  <tbody>
    <tr>
      <th>123</th>
      <td>Cow-ard</td>
      <td>Big and scary</td>
      <td><img src="/assets/img/cows.jpg" style="width: 40px;"></td>
      <td>Cow</td>
      <td>
<input type="button" data-bs-toggle="modal" data-bs-target="#editAnimalModal" id="edit" value="Edit">
<input type="button" id="delete" value="Delete">
</td>
    </tr>
   
  </tbody>
</table>
  </div>
</div>


<?php include 'partials/footer.php'; ?>


  </body>
</html>