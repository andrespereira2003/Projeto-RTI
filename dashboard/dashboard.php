<?php
include '../variaveis_sensores_atuadores/variaveis.php';
include '../login/login.php';

session_start();
if (!isset($_SESSION['credenciais'])) {
    echo "<script>document.getElementById('login-popup').style.display = 'block'</script>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./styleDashboard.css">
    <link rel="stylesheet" href="../login/styleLogin.css">
</head>

<body>

    <nav class="navbar navbar-expand-sm bg-light" style="padding-left: 20px; padding-right: 20px;">

        <div class="container-fluid">
            <ul class="navbar-nav">
                <span class="navbar-brand">Dashboard EI-TI</span>
                <li class="nav-item">
                    <a class="nav-link" href="dashboard.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../historico/historicoLog.php">Histórico</a>
                </li>
            </ul>
            <a class="btn btn-sm btn-outline-secondary" href="http://localhost:8080/Projeto-RTI/logout.php"
                type="button">Logout</a>
        </div>

    </nav>

    <div class="container" style="padding-top: 30px;">
        <div class="card">
            <div class="card-body">
                <img class="float-end" src="../images/img_dashboard/estg.png" alt="estg" width="300">
                <h1>Servidor IoT</h1>
                <p>Bem Vindo <b>UTILIZADOR XPTO</b></p>
                <p>Tecnologias de Internet - Engenharia Informática</p>
            </div>
        </div>
    </div>
    <!--Inicio sensores-->
    <div class="container">
        <h1 style="padding-top: 30px">Sensores</h1>
        <div class="row" style="padding-top: 10px;">
            <!--Sensor temperatura-->
            <div class="col">
                <div class="card">
                    <div class="card-header sensor" style="text-align: center;">
                        <p><b>Temperatura:
                                <?php echo intval($valor_temperatura); ?>ºC
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/temperature-high.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização: </b>
                            <?php echo $hora_temperatura ?> - <a
                                href="../historico/historicoLog.php?sensor=temperatura">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Sensor Presença-->
            <div class="col">
                <div class="card">
                    <div class="card-header sensor" style="text-align: center;">
                        <p><b>Presença:
                                <?php echo ($valor_presenca); ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/humidity-high.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_presenca ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Sensor Humidade-->
            <div class="col">
                <div class="card">
                    <div class="card-header atuador" style="text-align: center;">
                        <p><b>Humidade:
                                <?php echo ($valor_humidade); ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_humidade ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Sensor Fumo-->
            <div class="col">
                <div class="card">
                    <div class="card-header atuador" style="text-align: center;">
                        <p><b>Fumo:
                                <?php echo ($valor_fumo); ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_fumo ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Gás-->
            <div class="col">
                <div class="card">
                    <div class="card-header atuador" style="text-align: center;">
                        <p><b>Gás:
                                <?php echo $valor_gas ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_gas ?></b> - <a href="www.youtube.com">Histórico</a>
                        </p>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Atuadores-->
    <div class="container">
        <h1 style="padding-top: 30px">Atuadores</h1>
        <div class="row" style="padding-top: 10px;">
            <!--Atuador Alarme-->
            <div class="col">
                <div class="card">
                    <div class="card-header sensor" style="text-align: center;">
                        <p><b>Alarme:
                                <?php echo intval($valor_alarme); ?>ºC
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/temperature-high.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização: </b>
                            <?php echo $hora_alarme ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Atuador Janela-->
            <div class="col">
                <div class="card">
                    <div class="card-header sensor" style="text-align: center;">
                        <p><b>Janela:
                                <?php echo ($valor_janela); ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/humidity-high.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_janela ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Atuador Luz-->
            <div class="col">
                <div class="card">
                    <div class="card-header atuador" style="text-align: center;">
                        <p><b>Luz:
                                <?php echo ($valor_luz); ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_luz ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Atuador Porta-->
            <div class="col">
                <div class="card">
                    <div class="card-header atuador" style="text-align: center;">
                        <p><b>Porta:
                                <?php echo ($valor_porta); ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_porta ?> - <a href="www.youtube.com">Histórico</a>
                        </p>
                    </div>
                </div>
            </div>
            <!--Atuador Ventoinha-->
            <div class="col">
                <div class="card">
                    <div class="card-header atuador" style="text-align: center;">
                        <p><b>Ventoinha:
                                <?php echo $valor_ventoinha ?>
                            </b></p>
                    </div>
                    <div class="card-body" style="text-align: center;">
                        <img src="../images/img_dashboard/light-on.png">
                    </div>
                    <div class="card-footer" style="text-align: center;">
                        <p><b>Atualização:</b>
                            <?php echo $hora_ventoinha ?></b> - <a href="www.youtube.com">Histórico</a>
                        </p>
                        </p>
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