<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url()?>assets/admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url()?>assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url()?>assets/admin/css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css')?>">
    <script src="<?php echo base_url('assets/js/style.js')?>"></script>
  </head>

  <body class="home">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login<a class="navbar-nav" href="<?php echo base_url()?>index.php/Home" style="float:right;"><i class="fa fa-home"></i></a></div>
        <div class="card-body">
          <form action="<?php echo base_url('index.php/Login/aksi_login'); ?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputNama" name="username" class="form-control" placeholder="Nama" required="required" autofocus="autofocus">
                <label for="inputNama">Nama</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPass" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPass">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" value="Login">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo base_url()?>index.php/Login/register">Register an Account</a>
            <a class="d-block small" href="<?php echo base_url()?>index.php/Login/forgot">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>assets/admin/vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
