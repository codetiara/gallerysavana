<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Web Gallery - Login</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/css/sb-admin-2.css') ?>" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Shrikhand&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>

    <style>
        .bg-gradient-primary {
            background: linear-gradient(45deg, #CE49BF, #F190B7);
        }

        .card {
            border: none;
            border-radius: 1.25rem;
        }

        .btn-primary {
            background-color: #CE49BF;
            border-color: #CE49BF;
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

        .login-container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2); /* Menambahkan efek shadow */
        }

        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-form {
            max-width: 400px;
            margin: 0 auto;
        }

        .login-form input {
            margin-bottom: 15px;
        }

        .login-form button {
            background-color: #DC5C94;
            color: #fff;
        }

        .login-form button:hover {
            background-color: #F190B7;
        }

        .shrikhand-font {
            font-family: 'Shrikhand', cursive;
        }
    </style>
</head>

<body class="bg-light">

    <div class="container">
        <!-- Outer Row -->
        <div class="row justify-content-center">
            <div class="col-xl-6 col-lg-8 col-md-8">
                <div class="card o-hidden border-0 shadow-lg my-5 login-container">
                    <div class="card-body p-0">
                    <div class="login-header">
                   
                        <img src="<?= base_url('assets/img/logosm.png') ?>" alt="Logo" class="img-fluid mb-4" style="max-width: 270px; margin-right: 10px;">
                        <h1 class="h4 mb-4 shrikhand-font" style="color: #DC5C94; margin-bottom: 0;">Halaman Login!</h1>
                    </div>
                                            <div class="login-form">
                            <form class="user" action="<?php echo site_url('Login/login'); ?>" method="post">
                                <div class="form-group">
                                    <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Username...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">Login</button>
                            </form>
                            <hr>
                           
                            <div class="text-center">
                                <a class="small" href="<?php echo site_url("Registration/")?>" style="color: #DC5C94;">Create an Account!</a>
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
