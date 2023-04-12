<?php
include 'symbols.php'
  ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard</title>

  <!-- Bootstrap core CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>

  <!-- Custom styles for this template -->
  <link href="sidebars.css" rel="stylesheet">
</head>

<body>

  <main>
    <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
      <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
        <svg class="bi me-2" width="40" height="32" style="margin-bottom: 10px;">
          <use xlink:href="#bootstrap" />
        </svg>
        <span class="fs-4" style="margin-bottom: 10px;">Servidor IoT</span>
      </a>
      <span style="font-size: 14px">Tecnologias de Internet - Engenharia Informática</span>
      <hr>
      <ul class="list-unstyled ps-0">
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#home-collapse" aria-expanded="true">
            Dashboard
          </button>
          <div class="collapse show" id="home-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-light rounded">Overview</a></li>
              <li><a href="#" class="link-light rounded">Updates</a></li>
              <li><a href="#" class="link-light rounded">Reports</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#dashboard-collapse" aria-expanded="false">
            Dashboard
          </button>
          <div class="collapse" id="dashboard-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-light rounded">Overview</a></li>
              <li><a href="#" class="link-light rounded">Weekly</a></li>
              <li><a href="#" class="link-light rounded">Monthly</a></li>
              <li><a href="#" class="link-light rounded">Annually</a></li>
            </ul>
          </div>
        </li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#orders-collapse" aria-expanded="false">
            Orders
          </button>
          <div class="collapse" id="orders-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-light rounded">New</a></li>
              <li><a href="#" class="link-light rounded">Processed</a></li>
              <li><a href="#" class="link-light rounded">Shipped</a></li>
              <li><a href="#" class="link-light rounded">Returned</a></li>
            </ul>
          </div>
        </li>
        <li class="border-top my-3"></li>
        <li class="mb-1">
          <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse"
            data-bs-target="#account-collapse" aria-expanded="false">
            Account
          </button>
          <div class="collapse" id="account-collapse">
            <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
              <li><a href="#" class="link-light rounded">New...</a></li>
              <li><a href="#" class="link-light rounded">Profile</a></li>
              <li><a href="#" class="link-light rounded">Settings</a></li>
              <li><a href="#" class="link-light rounded">Sign out</a></li>
            </ul>
          </div>
        </li>
      </ul>

      <div class="dropdown">
        <a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser1"
          data-bs-toggle="dropdown" aria-expanded="false">
          <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
          <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu dropdown-menu-dark text-small shadow" aria-labelledby="dropdownUser1">
          <li><a class="dropdown-item" href="#">New project...</a></li>
          <li><a class="dropdown-item" href="#">Settings</a></li>
          <li><a class="dropdown-item" href="#">Profile</a></li>
          <li>
            <hr class="dropdown-divider">
          </li>
          <li><a class="dropdown-item" href="#">Sign out</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="b-example-divider"></div>

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
                <?php echo $hora_temperatura ?> - <a href="www.youtube.com">Histórico</a>
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
  </main>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
    crossorigin="anonymous"></script>

  <script src="sidebars.js"></script>

  <div></div>
</body>



</html>