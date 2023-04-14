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
                        data-bs-target="#home-collapse" aria-expanded="true">
                        Painel de controlo
                    </button>
                    <div class="collapse show" id="home-collapse">
                        <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                            <li><a href="#" class="link-light rounded"><svg class="bi me-2" width="16" height="16">
                                        <use xlink:href="#sensor" />
                                    </svg>
                                    Sensores</a></li>
                            <li><a href="atuadores.php" class="link-light rounded"><svg class="bi me-2" width="16"
                                        height="16">
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
                            <li><a href="#" class="link-light rounded"><svg class="bi me-2" width="16" height="16">
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
        <!--Inicio sensores-->
        <div class="container">
            <h1 class="display-2 header">Sensores</h1>
            <div class="row" style="padding-top: 10px;">
                <!-- Sensor Temperatura -->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#temperatura" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Temperatura:</b>
                                <?php echo intval($valor_temperatura); ?>ºC
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_temperatura;
                                ?>
                            </p>
                            <form method="get">
                                <input type="submit" name="sensor" value="temperatura" class="btn
                                btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenteredScrollable"></input>
                            </form>
                        </div>
                    </div>
                </div>
                <!--Sensor Presença-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#presenca" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Presença:</b>
                                <?php echo ($valor_presenca); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_presenca;
                                ?>
                            </p>
                            <form method="get" id="form1">
                                <input type="submit" name="sensor" value="presenca" id="teste1"></input>
                                <button type="submit" name="sensor" value="presenca" type="button"
                                    class="btn btn-primary">
                                    Vertically centered scrollable modal
                                </button>
                            </form>
                        </div>
                    </div>
                </div>

                <script>
                    function submit() {
                        let form = document.getElementById("form1");
                        form.submit();
                        alert("Data stored in database!");
                    }
                </script>

                <!--Sensor Humidade-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#humidade" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Humidade:</b>
                                <?php echo ($valor_humidade); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_humidade;
                                ?>
                            </p>
                            <a href="../historico/historicoLog.php?sensor=humidade" class=" btn
                                btn-primary">Histórico</a>
                        </div>
                    </div>
                </div>
                <!--Sensor Fumo-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#fumo" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Fumo:</b>
                                <?php echo ($valor_fumo); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_fumo;
                                ?>
                            </p>
                            <a href="../historico/historicoLog.php?sensor=fumo" class=" btn
                                btn-primary">Histórico</a>
                        </div>
                    </div>
                </div>
                <!--Gás-->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#gas" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>Gás:</b>
                                <?php echo ($valor_gas); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_gas;
                                ?>
                            </p>
                            <a href="../historico/historicoLog.php?sensor=gas" class=" btn
                                btn-primary">Histórico</a>
                        </div>
                    </div>
                </div>
                <!-- RFID -->
                <div class="col-4 p-3">
                    <div class="card" style="text-align: center;">
                        <div class="card-header sensor" style="text-align: center;">
                            <svg class="bi me-2" width="125" height="125">
                                <use xlink:href="#rfid" />
                            </svg>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title"><b>RFID:</b>
                                <?php echo ($valor_rfid); ?>
                            </h5>
                            <hr>
                            <p class="card-text"><b>Atualização: </b>
                                <?php echo $hora_rfid;
                                ?>
                            </p>
                            <a href="../historico/historicoLog.php?sensor=rfid" class=" btn
                                btn-primary">Histórico</a>
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

    <div></div>
</body>

</html>