<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../login/messageError.css">
    <title>LoginForm</title>
</head>

<body>
    <?php
    $message = '';
    include 'credenciais.php';


    //verificação se existe user e password
    if (isset($_POST['username']) && isset($_POST['password'])) {
        for ($row = 0; $row < count($credentials); $row++) {

            if (($_POST['username'] == $credentials[$row][0] && password_verify($_POST['password'], $credentials[$row][1]))) {
                session_start();
                $_SESSION['credenciais'] = $credentials[$row][0];
                header("Location: ../dashboard/dashboard.php");
            } else {
                $message = 'Username ou palavra passe inválidos!';

            }
        }
    }
    ?>

</body>

</html>