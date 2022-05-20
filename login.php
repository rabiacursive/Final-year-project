<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beopari.pk | Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
    <main class="form-signin w-100 m-auto">
        <form id="loginForm">
            <img src="assets/img/Beopari-logo.svg" />

            <div>
                <input type="email" name="email" required class="form-control mb-3" id="floatingEmail" placeholder="Email Address" />
            </div>
            <div>
                <input type="password" name="password" required class="form-control mb-5" id="floatingPassword" placeholder="Password" />
            </div>

            <button class="w-100 btn btn-lg btn-primary" type="submit">
                Sign in
            </button>
            <hr />
            <a href="signup.php" class="w-100 btn btn-lg btn-secondary">
                Register
            </a>
            <p class="mt-5 mb-3 text-muted text-center">
                © Beopari 2022 All Rights Reserved
            </p>
        </form>
    </main>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


    <script>
        $(function() {
            $(document).on("submit", "#loginForm", (e) => {
                e.preventDefault()
                let email = e.target.email.value;
                let password = e.target.password.value;

                $.ajax({
                    async: true,
                    url: "/api/SharedController.php",
                    data: JSON.stringify({
                        email,
                        password,
                        reqCode: "auth",
                        reqType: "login"
                    }),
                    method: "POST",
                    dataType: 'json',
                    contentType: 'application/json; charset=utf-8',
                    converters: {
                        'json': true
                    },
                    success: function(data) {

                        if (data.status == "success") {
                            location.assign("dashboard.php");
                            return;
                        }
                        alert(data.message)
                    }
                });

            })
        })
    </script>

</body>

</html>