<?php

session_start();

session_destroy();

unset( $_COOKIE['user_id'] );

header( 'location: https://localhost/cuzdan/login/login.php');

?>

<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/x-icon" href="logo.png" />
    <title>Login Sayfası</title>
    <link rel="stylesheet" href="login.css" />
  </head>
  <body>
    <div id="wrapper" class="wrapper">
      <div id="login-title" class="title">Şifre Hatırlatıcı</div>
      <form action="" method="POST">
        <div class="field">
          <input name="logout" type="submit" value="logout" />
        </div>
      </form>
    </div>
  </body>
</html>
