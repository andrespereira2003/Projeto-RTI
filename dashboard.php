<?php
$valor_temperatura = file_get_contents("api/files/temperatura/valor.txt");
$hora_temperatura = file_get_contents("api/files/temperatura/hora.txt");
$nome_temperatura = file_get_contents("api/files/temperatura/nome.txt");

/*echo ($nome_temperatura.": ".$valor_temperatura."ºC em ".$hora_temperatura)
 */
?>

<?php
session_start();
if (!isset($_SESSION['credenciais'])) {
    header("refresh:5;url=index.php");
    die("Acesso Restrito");
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Plataforma Iot</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <meta http-equiv="refresh" content="2">
</head>

<body>
    <nav class="navbar navbar-expand-sm bg-light" style="padding-left: 20px; padding-right: 20px;">

        <div class="container-fluid">
            <ul class="navbar-nav">
                <span class="navbar-brand">Dashboard EI-TI</span>
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Histórico</a>
                </li>
            </ul>
            <a class="btn btn-sm btn-outline-secondary" href="http://localhost:8080/rti/logout.php"
                type="button">Logout</a>
        </div>

    </nav>

    <div class="container" style="padding-top: 30px;">
        <div class="card">
            <div class="card-body">
                <img class="float-end" src="images/imagensdashboard/estg.png" alt="estg" width="300">
                <h1>Servidor IoT</h1>
                <p>Bem Vindo <b>UTILIZADOR XPTO</b></p>
                <p>Tecnologias de Internet - Engenharia Informática</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="padding-top: 30px;">
            <div class="col">
                <div class="card">
                    <div class="card-header sensor">
                        <p><b>Temperatura:
                                <?php echo intval($valor_temperatura); ?>ºC
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="images/imagensdashboard/temperature-high.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização: </b>
                            <?php echo $hora_temperatura ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header sensor">
                        <p><b>Humidade: 72%</b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="images/imagensdashboard/humidity-high.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b> 2023/03/10 14:31 - <a href="www.youtube.com">Histórico</a></p>

                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <div class="card-header atuador">
                        <p><b>Humidade: 70%</b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="images/imagensdashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b> 2023/03/10 14:31 - <a href="www.youtube.com">Histórico</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container" style="padding-top: 30px;">
        <div class="card">
            <div class="card-header">
                <p><b>Tabela de Sensores</b></p>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Tipo de Dispositivo IoT</th>
                            <th scope="col">Valor</th>
                            <th scope="col">Data de Atualização</th>
                            <th scope="col">Estado Alertas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">
                                <?php echo $nome_temperatura; ?>
                            </td>
                            <td>
                                <?php echo intval($valor_temperatura) ?>ºC
                            </td>
                            <td>
                                <?php echo $hora_temperatura; ?>
                            </td>
                            <td><span class="badge rounded-pill text-bg-danger">Elevada</span></td>
                        </tr>
                        <tr>
                            <td scope="row">Humidade</td>
                            <td>70%</td>
                            <td>2023/03/10 14:31</td>
                            <td><span class="badge rounded-pill text-bg-primary">Normal</span></td>
                        </tr>
                        <tr>
                            <td scope="row">Led Arduino</td>
                            <td>Ligado</td>
                            <td>2023/03/10 14:31</td>
                            <td><span class="badge rounded-pill text-bg-success">Ativo</span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>