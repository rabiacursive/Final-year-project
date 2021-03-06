<?php
include_once "api/helper.php"

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Beopari.pk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
  <link rel="stylesheet" href="/assets/css/product_info.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="/assets/css/shop.css" />
  <script src="/assets/js/jquery.min.js"></script>
</head>

<body>
  <header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <img src="assets/img/Beopari-logo.svg" style="width: 100px; display: inline-block; margin: auto">
        </a>
        <?php if (isset($_SESSION["userID"])) { ?>
          <div class="dropdown ms-auto
            text-end">
            <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
              <img src="assets/img/rabia-profile.png" alt="mdo" class="rounded-circle" width="32" height="32">
            </a>
            <ul class="dropdown-menu text-small" aria-labelledby="dropdownUser1">
              <li><a class="dropdown-item" href="/dashboard.php">Dashboard</a></li>
              <li><a class="dropdown-item" href="/api/SharedController.php?reqCode=logout">Sign out</a></li>
            </ul>
          </div>
          <ul style="margin: auto 10px;">
            <li style="list-style: none">
              <!-- Button trigger modal -->
              <button type="button" data-bs-toggle="modal" data-bs-target="#addAnimalModal" style="font-size: 27px;padding: 5px 15px;margin: auto;margin-right: 10px;line-height: 1;" class="btn btn-light border shadow">
                +????
              </button>
            </li>
          </ul>
        <?php } else { ?>
          <ul style="margin: auto 10px;" class="ms-auto d-flex">
            <li style="list-style: none" class="mx-2">
              <a href="/login.php">Login</a>
            </li>
            <li style="list-style: none">
              <a href="/signup.php">Signup</a>
            </li>
          </ul>
        <?php } ?>
      </div>
    </div>
  </header>