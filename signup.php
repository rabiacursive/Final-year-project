<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Beopari.pk | Signup</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body>
    <main class="container w-75 m-auto">
        <form id="signupForm">
            <div class="row" style="justify-content: center">
                <div style="text-align: center; align-content: center; display: grid" class="col-lg-4">
                    <img src="assets/img/Beopari-logo.svg" style="width: 360px; display: inline-block; margin: auto" />
                    <p style="width: 320px; margin: auto">
                        Connect with friends and the world around you on Beopari.pk.
                    </p>
                </div>
                <div class="col-lg-4">
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="First Name" id="regFirstName" name="first_name" autocomplete="First Name" />
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" placeholder="Last Name" autocomplete="Last Name" name="last_name" id="regLastName" />
                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" id="reEmail" />
                    </div>
                    <div class="mb-3">
                        <input type="phone" class="form-control" placeholder="Phone" name="phone" id="regPhone" />
                    </div>

                    <div class="mb-3">
                        <input type="password" class="form-control" id="userPassword" name="password" autocomplete="current-password" placeholder="Password" />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" autocomplete="current-password" id="reenterUserPassword" name="re_password" placeholder="Re-Enter Password" />
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">
                        Register
                    </button>
                    <hr />
                    <a href="login.php" class="w-100 btn btn-lg btn-secondary">Login</a>
                    <p class="mt-5 mb-3 text-muted" style="text-align: center">
                        ©Beopari 2022 All Rights Reserved
                    </p>
                </div>
                <div class="col-lg-6"></div>
            </div>
        </form>
    </main>
    <script src="/assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script>
        $(function() {
            $(document).on("submit", "#signupForm", (e) => {
                e.preventDefault()
                let first_name = e.target.first_name.value;
                let last_name = e.target.last_name.value;
                let phone = e.target.phone.value;
                let email = e.target.email.value;
                let password = e.target.password.value;

                if (password !== e.target.re_password.value) {
                    alert("Password Not Matching")
                    return;
                }

                $.ajax({
                    async: true,
                    url: "/api/SharedController.php",
                    data: JSON.stringify({
                        first_name,
                        last_name,
                        phone,
                        email,
                        password,
                        reqCode: "auth",
                        reqType: "signup"
                    }),
                    method: "POST",
                    dataType: 'json',
                    contentType: 'application/json; charset=utf-8',
                    converters: {
                        'json': true
                    },
                    success: function(data) {
                        if (data.status == "success") {
                            location.assign("login.php");
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