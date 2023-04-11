<?php
include '../variaveis_sensores_atuadores/variaveis.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Histórico</title>
</head>

<body>
    <?php echo $log_temperatura; ?>
    <div class="container center">
        <div class="card">
            <!-- Buscar o nome do sensor  -->
            <?php
            $NOMESENSOR = $_GET['sensor'];
            ?>

            <h2>
                <?php echo $NOMESENSOR ?>
            </h2>
            <hr />
            <!-- buscar dentro do vetor as atualizações de data e hora do sensor selecionado -->

            <?php
            $NOMESENSOR = $_GET['sensor'];
            $TEXTO = file_get_contents("../api/files/sensores/" . $NOMESENSOR . "/log.txt");

            $ARR = explode(",", $TEXTO);
            foreach ($ARR as $valor) {
                echo '<p>' . '' . $valor . '</p>';
            }
            ?>

            <form action="../dashboard/dashboard.php">
                <button type="submit">Back</button>
            </form>

        </div>
    </div>
</body>

</html>