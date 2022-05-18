<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
  </head>
  <body>
    <main class="container w-75 m-auto">
      <form>
        <div class="row" style="justify-content: center">
          <div
            style="text-align: center; align-content: center; display: grid"
            class="col-lg-4"
          >
            <img
              src="assets/img/Beopari-logo.svg"
              style="width: 360px; display: inline-block; margin: auto"
            />
            <p style="width: 320px; margin: auto">
              Connect with friends and the world around you on Beopari.pk.
            </p>
          </div>
          <div class="col-lg-4">
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="First Name"
                id="regFirstName"
                autocomplete="First Name"
              />
            </div>
            <div class="mb-3">
              <input
                type="text"
                class="form-control"
                placeholder="Last Name"
                autocomplete="Last Name"
                id="regLastName"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="Email"
                id="reEmail"
              />
            </div>
            <div class="mb-3">
              <input
                type="email"
                class="form-control"
                placeholder="Phone"
                id="regPhone"
              />
            </div>

            <div class="mb-3">
              <input
                type="password"
                class="form-control"
                id="userPassword"
                autocomplete="current-password"
                placeholder="Password"
              />
            </div>
            <div class="mb-3">
              <input
                type="password"
                class="form-control"
                autocomplete="current-password"
                id="reenterUserPassword"
                placeholder="Re-Enter Password"
              />
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">
              Register
            </button>
            <hr />
            <a
              href="login.html"
              class="w-100 btn btn-lg btn-secondary"
              type="submit"
              >Login</a
            >
            <p class="mt-5 mb-3 text-muted" style="text-align: center">
              ©Beopari 2022 All Rights Reserved
            </p>
          </div>
          <div class="col-lg-6"></div>
        </div>
      </form>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
