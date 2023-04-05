<?php
include 'credenciais.php';

//verificação se existe user e password
if (isset($_POST['username']) && isset($_POST['password'])) {

    for ($row = 0; $row < count($credentials); $row++) {
        if (($_POST['username'] == $credentials[$row][0] && password_verify($_POST['password'], $credentials[$row][1]))) {
            echo "Bem sucedido" . "<br>";
            session_start();
            $_SESSION['credenciais'] = $credentials[$row][0];
            header("Location: ../dashboard.php");
        } else {
            echo "<script> alert('Login Inválido! Tente novamente.'); location= 'login.php';
          </script>";
        }
    }
    /*
    //verificação user1
    if (($_POST['username'] == $username1 && password_verify($_POST['password'], $pass1))) {
    echo "Bem sucedido" . "<br>";
    session_start();
    $_SESSION['credenciais'] = $username1;
    header("Location: ../dashboard.php");
    } else {
    echo "<script> alert('Login Inválido! Tente novamente.'); location= 'login.php';
    </script>";
    }
    //verificação user2
    if (($_POST['username'] == $username2 && password_verify($_POST['password'], $pass2))) {
    echo "Bem sucedido" . "<br>";
    session_start();
    $_SESSION['credenciais'] = $username2;
    header("Location: ../dashboard.php");
    } else {
    //todo fazer com que popup mostre por cima da pagina
    echo "<script> alert('Login Inválido! Tente novamente.'); location= 'login.php';
    </script>";
    }
    */
}
?>