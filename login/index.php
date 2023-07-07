<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SheltonSys | Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../public/templeates/AdminLTE-3.2.0/dist/css/adminlte.min.css">

  <!--Livraria SweetAlert2-->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="hold-transition login-page">
  <div class="login-box">
    <!-- /.login-logo -->

    <?php
    session_start();
    if (isset($_SESSION['mensaje'])) {
      $respuesta = $_SESSION['mensaje']; ?>
      <script>
        Swal.fire({
          position: 'top-end',
          icon: 'error',
          title: '<?php echo $respuesta; ?>',
          showConfirmButton: false,
          timer: 1500
        })
      </script>
    <?php
    }
    ?>

    <center>
      <img src="https://img.freepik.com/vetores-gratis ideia-de-brainstorm-de-equipe-de-negocios-e-lampada-de-quebra-cabeca-colaboracao-da-equipe-de-trabalho-cooperacao-empresarial-conceito-de-assistencia-mutua-de-colegas-ilustracao-de-vetor-isolado-de-coral-rosa_335657-1651.jpg?w=740&t=st=1688128941~exp=1688129541~hmac=2a5dae23d6a52fd4897b64e0af122cb0dc4580cc35eb1a4d0c5668123e57d981" alt="" width="300px">
    </center>
    <br>
    <div class="card card-outline card-primary">
      <div class="card-header text-center">
        <a href="../public/templeates/AdminLTE-3.2.0/index2.html" class="h1"><b>Sistema de </b>VENDAS</a>
      </div>
      <div class="card-body">
        <p class="login-box-msg">INSIRA SEUS DADOS</p>

        <form action="../app/controllers/login/ingreso.php" method="post">
          <div class="input-group mb-3">
            <input type="email" name="email" class="form-control" placeholder="Email">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-envelope"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input type="password" name="password_user" class="form-control" placeholder="Password">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <!-- /.col -->
            <div class="col-12">
              <button type="submit" class="btn btn-primary btn-block">Acessar</button>
            </div>
            <!-- /.col -->
          </div>
        </form>

      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.login-box -->

  <!-- jQuery -->
  <script src="../public/templeates/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="../public/templeates/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../public/templeates/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
</body>

</html>