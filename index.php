<?php

$username = "admin";

$password_hash = '$2y$10$oytrcrXj3DOI/vKkYLhd1O.EyYpaATB4818Acepsuctctm.qF2/QS';

/*if (isset($_POST['username'])){
echo "O username submetido foi: " .$_POST['username']."<br>";
}
if (isset($_POST['password'])){
echo "A password submetida foi: " .$_POST['password']."<br>";
}
*/

if (isset($_POST['username']) == $username && password_verify($_POST['password'], $password_hash)) {
  session_start();
  $_SESSION["credenciais"] = $_POST['username'];
  header('Location: http://localhost:8080/rti/dashboard.php');
}

?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="./style.css">
</head>

<body>
  <div class="container">

    <div class="row justify-content-center">
      <form class="tiform" method="post">
        <a href="index.php"><img src="images/imagens-login/MicrosoftTeams-image.png" alt="image1"></a>
        <div class="mb-3" style="padding-top: 10px;">
          <label for="username" class="form-label">Username</label>
          <input name="username" type="text" class="form-control" id="username" placeholder="Username" required>
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input name="password" type="password" class="form-control" id="password" placeholder="Password" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>

    <?php
    if (isset($_POST['username']) != null && isset($_POST['password']) != null) {
      if ($_POST['username'] == $username) {
        echo "Username correto. <br>";
      } else {
        echo "Username incorreto. <br>";
      }

      if (password_verify($_POST['password'], $password_hash)) {
        echo "Password correta. <br>";
      } else {
        echo "Password incorreta. <br>";
      }
    }
    ?>

  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>