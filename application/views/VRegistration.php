<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Gallery - Registration</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">

    <!-- SweetAlert2 CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(45deg, #CE49BF, #F190B7);
        }

        .card {
            border: none;
            border-radius: 1.25rem;
            background-color: rgba(255, 255, 255, 0.8); /* Warna transparan menggunakan RGBA */
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1), 0 6px 15px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2), 0 10px 24px rgba(0, 0, 0, 0.2);
        }

        .btn-primary {
            background-color: #DC5C94;
            border-color:  #DC5C94;
        }

        .btn-primary:hover {
            background-color: #F190B7;
            border-color: #F190B7;
        }

        .card-body {
            border-radius: 1.25rem;
        }

        .card-header {
            background-color: transparent;
            border-bottom: none;
            padding: 1.5rem;
        }

        .text-gray-900 {
            color: #333;
        }

        body {
            background: url('<?= base_url('assets/img/g.gif') ?>') no-repeat center center fixed;
            background-size: 100% 100%;
        }

    </style>

</head>

<body class="bg-light">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-10 col-sm-12"> <!-- Mengurangi lebar kolom agar card lebih kecil -->
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                    <h1 class="h4 mb-4" style="font-family: 'Shrikhand', cursive; color: #DC5C94;">Create an Account</h1>
                                    </div>
                                    <form class="user" action="<?php echo site_url('Registration/register'); ?>"
                                        method="post">
                                        <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                placeholder="Username">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="email" class="form-control form-control-user"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="namalengkap" class="form-control form-control-user"
                                                placeholder="Nama Lengkap">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="alamat" class="form-control form-control-user"
                                                placeholder="Alamat">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password"
                                                class="form-control form-control-user" placeholder="Password">
                                        </div>
                                        <button type="submit" name="btn_register"
                                            class="btn btn-primary btn-user btn-block">
                                            Register
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                       <a class="small" href="<?= site_url('Login') ?>" style="color: #DC5C94;">Already have an account? Login!</a>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery/jquery.min.js') ?>"></script>
    <script src="<?= base_url('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/js/sb-admin-2.min.js') ?>"></script>

</body>

</html>
