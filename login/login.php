
<style type='text/css'>

.wrapper #error {
    background: red;
    color: white;
    padding: 5px;
    font-size: 18px;
    text-align: center;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
}

</style>

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
      <div id="login-title" class="title">Cüzdan Login</div>
      <form action="login.php" method="POST">
        <div class="field">
          <input type="text" name="mail" required />
          <label>E-Posta Adresi</label>
        </div>
        <div class="field">
          <input type="password" name="password" required />
          <label>Şifre</label>
        </div>
        <div class="content">
          <div class="checkbox">
            <input type="checkbox" name="remember" id="remember-me" />
            <label for="remember-me">Beni hatırla</label>
          </div>
          <div class="pass-link">
            <a href="../login/lost-password.php">Şifremi unuttum?</a>
          </div>
        </div>
        <div class="field">
          <input type="submit" value="Giriş Yap" />
        </div>
        <div class="signup-link">
          Bir hesabınız yok mu?
          <a href="../kullanici-kayitlari/sign-up.php">Şimdi Kaydolun!</a>
        </div>
      </form>
    </div>
  </body>
</html>

<?php
if( isset( $_POST['password'] ) && !password_verify( $_POST['password'], $check_login[0]->sifre ) ) {
	
echo "<script type='text/javascript'>

let wrapper = document.getElementById('wrapper');

wrapper.insertAdjacentHTML( 'beforeend', `<div id='error'>Giriş yapılamadı, mail adresi veya şifre hatalı...</div>` );

</script>";

} 
?>