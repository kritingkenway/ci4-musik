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
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
          <?= session()->getFlashdata('success')?>
      </div>
    </div>
    <form method="POST" action='/login' class="form">
      <label for="username" style="padding-top:13px">&nbsp;Username</label>
      <input id="username" class="form-content" type="username" name="username" autocomplete="on" required />
      <div class="form-border"></div>
      <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
      <input id="user-password" class="form-content" type="password" name="password" required />
      <div class="form-border"></div>
      <a href="#">
        <legend id="forgot-pass">Forgot password?</legend>
      </a>
      <input id="submit-btn" type="submit" name="login" value="LOGIN" onclick="alert('Berhasil Login')" /><a href="/register" id="signup">Don't have account yet?</a>
    </form>
  </div>
</body>

</html>