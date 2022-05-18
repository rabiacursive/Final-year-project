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
    <main class="form-signin w-100 m-auto">
      <form>
        <img src="assets/img/Beopari-logo.svg" />

        <div>
          <input
            type="email"
            class="form-control mb-3"
            id="floatingInput"
            placeholder="Email Address"
          />
        </div>
        <div>
          <input
            type="password"
            class="form-control mb-5"
            id="floatingPassword"
            placeholder="Password"
          />
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">
          Sign in
        </button>
        <hr />
        <a
          href="register.html"
          class="w-100 btn btn-lg btn-secondary"
          type="submit"
        >
          Register
        </a>
        <p class="mt-5 mb-3 text-muted text-center">
          © Beopari 2022 All Rights Reserved
        </p>
      </form>
    </main>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
