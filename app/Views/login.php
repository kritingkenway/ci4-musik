<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/index.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/assets/fontawesome/css/all.min.css">

  <title><?= $title ?></title>
</head>

<body>


  <!-- Jumbotron -->
  <div class="jumbotron jumbotron-fluid text-center">
    <div class="container">
      <h1 class="display-4"><span class="font-weight-bold">Melody Store</span></h1>
      <hr>
      <p class="lead font-weight-bold">Toko Alat Musik Terlengkap di Subang<br>
      </p>
    </div>
  </div>
  <!-- Akhir Jumbotron -->

  <!-- Navbar -->
  <div class="text-center">
    <nav class="navbar navbar-expand-lg  bg-dark">
      <div class="container">
        <a class="navbar-brand text-white" href="#"><strong>LOGIN</strong></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      </div>
    </nav>
    <!-- Akhir Navbar -->



    <!-- Awal Menu -->

    <div class="text-center">

      <div class="container">
        <div class="header">
          <strong class="h1 mb-3 font-weight-small ">
            <h1>Welcome back</h1>
          </strong>
          <?php if (session()->has('msg')) { ?>
            <p><?= session()->getFlashdata('msg') ?></p>
          <?php } elseif (session()->has('success')) { ?>
            <p><?= session()->get('success') ?></p>
          <?php } else { ?>
            <p>Welcome back! Please enter your details.</p>
          <?php } ?>
        </div>
        <form action="/login" method="post">

          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" placeholder="Enter your Username" name='username'>
          <p>
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" placeholder="Enter your password" name='password'>


          <div class="checkbox mb-2">
            <label>
              <!-- <input type="checkbox" value="remember-me"> Remember me </label> -->
          </div>
          <button class="btn btn-lg btn-primary btn-block" type="submit" name='login'>Login</button>
        </form>
        <!-- <a class="nav-link mr-4" href="home.php">LOGIN</a> -->
        <div class="text-center">
          <span class="d-inline">Don't have an account? <a href="/register" class="d-inline text-decoration-none">Sign up for free</a></span>
        </div>

        <!-- Akhir Menu -->