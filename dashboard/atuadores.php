<?php
session_start();
include '../variaveis_sensores_atuadores/variaveis.php';
include '../login/login.php';
include 'symbols.php';
include '../historico\historicoLog.php';

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
    <link rel="stylesheet" href="popUp.css">
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
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#logo" />
                </svg>
                <span class="fs-4">Casa Inteligente</span>
            </a>
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
        <div class="vr vr-blurry" style="height: 2000px"></div>

        <!--Atuadores-->
        <div class="container">
            <h1 class="display-2 header">Atuadores</h1>
            <div class="row" style="padding-top: 10px;">
                <!--Atuador Alarme-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#alarme" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Alarme:</b>
                                <?php echo ($valor_alarme); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_alarme;
                                ?>
                            </p>
                            <form method="get" id="form1">
  <p><a class="btn btn-primary" href="?atuador=alarme#popUpHistorico">Histórico</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Atuador Janela-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#janela" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Janela:</b>
                                <?php echo ($valor_janela); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_janela;
                                ?>
                            </p>
                            <form method="get" id="form1">
  <p><a class="btn btn-primary" href="?atuador=janela#popUpHistorico">Histórico</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Atuador Luz-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#luz" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Luz:</b>
                                <?php echo ($valor_luz); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_luz;
                                ?>
                            </p>
                            <form method="get" id="form1">
  <p><a class="btn btn-primary" href="?atuador=luz#popUpHistorico">Histórico</a></p>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <!--Atuador Porta-->
                    <div class="col-4 p-3">
                        <div class="card" style="text-align: center;">
                            <div class="card-header sensor" style="text-align: center;">
                                <svg class="bi me-2" width="125" height="125">
                                    <use xlink:href="#porta" />
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>Porta:</b>
                                    <?php echo ($valor_porta); ?>
                                </h5>
                                <hr>
                                <p class="card-text"><b>Atualização: </b>
                                    <?php echo $hora_porta;
                                    ?>
                                </p>
                                <form method="get" id="form1">
  <p><a class="btn btn-primary" href="?atuador=porta#popUpHistorico">Histórico</a></p>
                            </form>
                            </div>
                        </div>
                    </div>
                    <!--Atuador Ventoinha-->
                    <div class="col-4 p-3">
                        <div class="card" style="text-align: center;">
                            <div class="card-header sensor" style="text-align: center;">
                                <svg class="bi me-2" width="125" height="125">
                                    <use xlink:href="#ventoinha" />
                                </svg>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title"><b>Ventoinha:</b>
                                    <?php echo ($valor_ventoinha); ?>
                                </h5>
                                <hr>
                                <p class="card-text"><b>Atualização: </b>
                                    <?php echo $hora_ventoinha;
                                    ?>
                                </p>
                                <form method="get" id="form1">
  <p><a class="btn btn-primary" href="?atuador=ventoinha#popUpHistorico">Histórico</a></p>
                            </form>
                            </div>
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