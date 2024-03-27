

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
      <form action="login.php" method="POST">
        <div class="field">
          <input type="text" name="mail" required />
          <label>E-Posta Adresi</label>
        </div>
        <div class="field">
          <input type="submit" value="Gönder" />
        </div>
      </form>
    </div>
  </body>
</html>



