<?php
/*
$username1 = "gustavo";
$username1_PW = "admin";
$username2 = "andre";
$username2_PW = "admin1";
$pass1 = password_hash($username1_PW, PASSWORD_DEFAULT);
$pass2 = password_hash($username2_PW, PASSWORD_DEFAULT);
*/

$credentials = array(
    array("andre", password_hash("admin", PASSWORD_DEFAULT)),
    array("gustavo", password_hash("admin1", PASSWORD_DEFAULT))
)
    ?>