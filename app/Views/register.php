<!DOCTYPE html>
<html>

<head>

  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/style.css">
  <title>Register</title>
  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

</head>

<body>

            <div id="card">
              <div id="card-content">
                <div id="card-title">
                  <h2>REGISTER</h2>
                  <div class="underline-title"></div>

                </div>
              </div>
                <?php if($validation != null):?>
                    <?= $validation->listErrors()?>
                  <?php endif?>

                    <!-- <div class="form-group">
                      <label for="username">Nama Lengkap</label>
                      <input type="text" name="nama" class="form-control" id="name" aria-describedby="name" placeholder="Nama lengkap" autocomplete="off">
                    </div> -->
                  <form method="POST" action='/register' class="form">
                    <label for="username" style="padding-top:13px">&nbsp;Username</label>
                    <input id="username" class="form-content" type="username" name="username"   />
                    <div class="form-border"></div>
                    <label for="user-password" style="padding-top:22px">&nbsp;Password</label>
                    <input id="user-password" class="form-content" type="password" name="password"  />
                    <div class="form-border"></div>
                     <label for="user-password" style="padding-top:22px">&nbsp;Konfirmasi Password</label>
                    <input id="user-password" class="form-content" type="password" name="password_confirmation"/>
                    <div class="form-border"></div>
                    <input id="submit-btn" type="submit" name="register" value="REGISTER" />
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
</body>

</html>