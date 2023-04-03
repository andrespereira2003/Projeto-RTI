<?php

$booleanficheiros = false;

header('Content-Type: text/html; charset=utf-8');
//echo $_SERVER['REQUEST_METHOD']

if (($_SERVER['REQUEST_METHOD'] == 'POST')) {
  if (isset($_POST['valor']) && isset($_POST['hora']) && isset($_POST['nome'])) {
    file_put_contents("files/" . $_POST['nome'] . "/valor.txt", $_POST['valor']);
    file_put_contents("files/" . $_POST['nome'] . "/hora.txt", $_POST['hora']);
    file_put_contents("files/" . $_POST['nome'] . "/log.txt", $_POST['hora'] . ";" . $_POST['valor'] . PHP_EOL, FILE_APPEND);
  } else {
    //var_dump(file_get_contents("php://input"));
    http_response_code(400);
  }
  ;

} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
  if (isset($_GET['nome'])) {
    if (file_exists("files/" . $_GET['nome'] . "/nome.txt")) {
      $nome = "files/" . $_GET['nome'] . "/valor.txt";
      echo file_get_contents($nome);
    } else {
      http_response_code(400);
      //echo "Faltam parametros no get";
    }
  }
} else {
  http_response_code(403);
}


?>