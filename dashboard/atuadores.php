<?php
session_start();
include '../variaveis_sensores_atuadores/variaveis.php';
include '../login/login.php';
include 'symbols.php';

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://unpkg.com/ionicons@4.4.8/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="sidebars.css">
    <link rel="stylesheet" href="./styleDashboard.css">
    <link rel="stylesheet" href="../login/styleLogin.css">
</head>

<!-- <script>

    while (true) {
        setTimeout(() => {
            fetch('url').then((res) => {
                const divSensor = document.querySelectorAll('.abc');
                divSensor.innerText = res.valor;
            }).catch((err) => console.log(err));
        }, 5000);
    }


</script> -->

<body>
    <main>

        <!-- Menu -->
        <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
            <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                <svg class="bi me-2" width="40" height="32" style="margin-bottom: 10px;">
                    <use xlink:href="#logo" />
                </svg>
                <span class="fs-4" style="margin-bottom: 10px;">Servidor IoT</span>
            </a>
            <span style="font-size: 14px">Tecnologias de Internet - Engenharia Informática</span>
            <hr>
            <ul class="list-unstyled ps-0 mb-auto">
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#home-collapse" aria-expanded="true" onclick="delay()">
                        Painel de controlo
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="sensores.php" class="link-light rounded"><svg class="bi me-2" width="16"
                                        height="16">
                                        <use xlink:href="#sensor" />
                                    </svg>
                                    Sensores</a></li>
                            <li><a href="#" class="link-light rounded"><svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#atuador" />
                                    </svg>
                                    Atuadores</a></li>
                        </ul>
                    </div>
                </li>
                <li class="mb-1">
                    <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
                        data-bs-target="#dashboard-collapse" aria-expanded="false">
                        Histórico
                    </button>
                    <div class="collapse" id="dashboard-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="sensores.php" class="link-light rounded"><svg class="bi me-2" width="16"
                                        height="16">
                                        <use xlink:href="#sensor" />
                                    </svg>
                                    Sensores</a></li>
                            <li><a href="#" class="link-light rounded"><svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#atuador" />
                                    </svg>
                                    Atuadores</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <!-- Perfil bottom -->
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle"
                    id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>
                        <?php
                        print_r($_SESSION['credenciais']);
                        ?>
                    </strong>
                </a>
                <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
                    <li><a class="dropdown-item" href="#">Alterar fotografia de perfil</a></li>
                    <li><a class="dropdown-item" href="#">Perfil</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="http://localhost:8080/Projeto-RTI/logout.php">Sign out</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="b-example-divider"></div>

        <!--Atuadores-->
        <div class="container">
            <h1 style="padding-top: 30px">Atuadores</h1>
            <div class="row" style="padding-top: 10px;">
                <!--Atuador Alarme-->
                <div class="col">
                    <div class="card bg-light mb-3">
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
                                <?php $teste = 'atuadores';
                                echo $hora_alarme; ?> - <a
                                    href="../historico/historicoLog.php?atuador=alarme">Histórico</a>
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
                                <?php echo $hora_janela ?> - <a
                                    href="../historico/historicoLog.php?atuador=janela">Histórico</a>
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
                                <?php echo $hora_luz ?> - <a
                                    href="../historico/historicoLog.php?atuador=luz">Histórico</a>
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
                                <?php echo $hora_porta ?> - <a
                                    href="../historico/historicoLog.php?atuador=porta">Histórico</a>
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
                                <?php echo $hora_ventoinha ?></b> - <a
                                    href="../historico/historicoLog.php?atuador=ventoinha">Histórico</a>
                            </p>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <script src="sidebars.js"></script>
    <script src="delay.js"></script>
    <div></div>
</body>

</html>