<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SFAC | Code Verification</title>
    <link rel="icon" href="../../../assets/img/logo.png" type="image/gif" sizes="16x16">

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">

    <!-- Custom css -->
    <style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .background {
        background-repeat: no-repeat;
        background-size: cover;
        background-position-x: right;
        background-position-y: bottom;
    }
    </style>
</head>

<body class="hold-transition login-page background"
    style="background-image: url('../../../assets/img/background/bgn-8.jpg')" ;>
</body>
<div class="login-box">
    <div class="card card-outline card-danger">
        <div class="card-header text-center">
            <p class="h3"> <b>Verification Code</b></p>
        </div>
        <div class="card-body">
            <p class="login-box-msg">A verification code has been sent to your email address:
                <?php ?>
            </p>
            <form action="recover-password.html" method="post">
                <div class="input-group mb-3">
                    <input type="email" class="form-control" placeholder="Verification Code">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger btn-block">Submit</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>
            <p class="mt-3 mb-1 text-sm">
                <a class="text-lightblue" href="login.php">Back to Sign in</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>