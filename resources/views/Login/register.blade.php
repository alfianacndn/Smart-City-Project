<!doctype html>
<html lang="en">
<div class="bg-warning">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../asset2/fonts/icomoon/style.css">

        <link rel="stylesheet" href="../asset2/css/owl.carousel.min.css">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="../asset2/css/bootstrap.min.css">

        <!-- Style -->
        <link rel="stylesheet" href="../asset2/css/style.css">

        <title>Our Smart City | Registrasi</title>

    </head>

    <body>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 order-md-2">
                        <img src="../asset2/images/seluler.png" alt="Image" class="img-fluid">
                    </div>
                    <div class="col-md-6 contents">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="mb-4">
                                    <h3>Daftar <strong>Smart City</strong></h3>
                                    <h10 class="text-black">Upaya-upaya inovatif yang dilakukan ekosistem kota dalam mengatasi berbagai persoalan dan meningkatkan
                                        kualitas hidup manusia</h10>
                                </div>
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="form-group first">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" name="name">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group last mb-4">
                                        <label for="email">Email Address</label>
                                        <input type="email" class="form-control" id="email" name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group last mb-4">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-group last mb-4">
                                        <label for="password-confirm">Password Confirm</label>
                                        <input type="password" class="form-control" id="password-confirm" name="password_confirmation">

                                    </div>

                                    <div class="d-flex mb-5 align-items-center">

                                    </div>

                                    <input type="submit" value="Register" class="btn btn-lg btn-custom">
                                    <p></p>
                                    <span class="ml-auto"><a href="/login" class="forgot-pass">Have An Account? Login!</a></span>


                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>


        <script src="../asset2/js/jquery-3.3.1.min.js"></script>
        <script src="../asset2/js/popper.min.js"></script>
        <script src="../asset2/js/bootstrap.min.js"></script>
        <script src="../asset2/js/main.js"></script>
    </body>
</div>

</html>

<style>
    .btn-custom {
        color: #ffffff;
        background-color: #4b1768;
        border-color: #4b1768;
    }

    .btn-custom:hover,
    .btn-custom:focus,
    .btn-custom:active,
    .btn-custom.active,
    .open .dropdown-toggle.btn-custom {
        color: #ffffff;
        background-color: #990F4D;
        border-color: #E51DF0;
    }
</style>