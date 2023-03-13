<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/style.css">
  <title>Login</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <div class="container">
          <div class="row">
            <div class="col-md-4 offset-md-4 mt-5">
              <div class="card ">
                <div class="card-title text-center">
                  <h1>Register Form</h1>
                </div>
                <div class="card-body">
                  <form action="/register" method="post">
                    <!-- <div class="form-group">
                      <label for="username">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="name" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">
                    </div> -->
                    <div class="form-group">
                      <label for="username">Username</label>
                      <input type="text" name="username" class="form-control" id="username" aria-describedby="username" placeholder="username" autocomplete="off">
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <label for="password">Konfirmasi Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password">
                    </div>
                    <button type="submit" class="btn btn-primary" name='register'>Register</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>

</html>