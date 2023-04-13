<?php
include '../variaveis_sensores_atuadores/variaveis.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cheatsheet/">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Histórico</title>
</head>

<body>

    <div class="modal container center" style="display: none;" id="Modal">
        <div class="card">

            <!-- buscar dentro do vetor as atualizações de data e hora do sensor selecionado -->
            <?php
            if (isset($_GET['sensor'])) {
                $NOMESENSOR = $_GET['sensor'];
                $TEXTO = file_get_contents("../api/files/sensores/" . $NOMESENSOR . "/log.txt");
            } else {
                $NOMESENSOR = $_GET['atuador'];
                $TEXTO = file_get_contents("../api/files/atuadores/" . $NOMESENSOR . "/log.txt");
            }
            ?>

            <h2>
                <?php echo $NOMESENSOR ?>
            </h2>
            <hr>

            <div class="bd-example">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Data</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Modificação (ºC)</th>

                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php

                            $ARR = explode(",", $TEXTO);
                            foreach ($ARR as $valor) {
                                echo '<tr>';

                                $BRR = explode(" ", $valor);
                                foreach ($BRR as $valor2) {
                                    if ($BRR[2] < 19) {
                                        echo '<td style="color: white; background-color: blue">' . '' . $valor2 . '</td>';

                                        if ($BRR[2] < 29 && $BRR[2] > 19) {
                                            echo '<td style="color: white;  background-color: yellow">' . '' . $valor2 . '</td>';

                                            if ($BRR[2] > 29) {
                                                echo '<td style="color: white; background-color: #D55135">' . '' . $valor2 . '</td>';
                                            }
                                        }
                                    } else {
                                        echo '<td>' . '' . $valor2 . '</td>';
                                    }


                                }
                                echo '</tr>';
                            }
                            ?>
                        </tr>
                    </tbody>
                </table>
            </div>

            <form action="../dashboard/dashboard.php">
                <button type="submit">Back</button>
            </form>

        </div>
    </div>
</body>

</html>