<?php
include('verificacao_login.php');
?>
<!DOCTYPE html>
<html>

<head>
  <title>Pop-up Login Form</title>
  <link rel="stylesheet" href="styleLogin.css">
</head>

<body>

  <div style="display: none;" id="login-popup" class="login-popup">
    <form class="login-form" method="post">
      <div id="login-popup" class="login-box">
        <h2>Login</h2>
        <form method="post">
          <div class="user-box">
            <input type="text" id="username" name="username" required>
            <label>Utilizador</label>
          </div>
          <div class="user-box">
            <input type="password" id="password" name="password" required>
            <label>Palavra-passe</label>


            <p class="p">
              <?php echo $message ?>
            </p>



          </div>

          <button type="submit" class="button-28">Submit</button>
        </form>
      </div>
    </form>
  </div>

</body>

</html>