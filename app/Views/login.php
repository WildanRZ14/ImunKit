<?php
if (session()->get('logged_in')) {
    header('Location: /administrator');
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi ImunKit</title>
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/js/bootstrap.min.js">
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/style/css/custom.css">
</head>

<body class="bgLogin">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class="h4 text-gray-900 mb-4">Login ImunKit</h1>
                                    <hr>
                                </div>
                                <form action="<?= base_url('/users'); ?>" method="get">
                                    <div class="form-group">
                                        <div class="inputWithIcon">
                                            <input type="text" name="email" autofocus autocomplete="off" class="form-control form-control-user" placeholder="Masukan email">
                                            <i class="fa fa-envelope fa-lg fa-fw" aria-hidden="true"></i>
                                        </div>

                                        <div class="form-group">
                                            <div class="inputWithIcon">
                                                <input type="password" name="password" autofocus class="form-control form-control-user" placeholder="Masukan Password">
                                                <i class="fa fa-key fa-lg fa-fw" aria-hidden="true"></i>
                                            </div>
                                            <button type="submit" class="btn btn-light text-light buttonlogin">Login</button>
                                            <div>
                                                <label class="inforeg">Belum punya akun? <a href="<?= base_url(); ?>/register">Registrasi
                                                        Sekarang</a></label>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?= base_url(); ?>/assets/style/js/jquery-3.6.1.min.js"></script>
    <script src="<?= base_url(); ?>/assets/style/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url(); ?>/assets/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="<?= base_url(); ?>/assets/sweetalert2/custom-alert.js"></script>
    <script src="<?= base_url(); ?>/assets/sweetalert2/custom-alert.js"></script>
</body>

</html>