<?php
include '../variaveis_sensores_atuadores/variaveis.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cheatsheet/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>

    <div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalCenteredScrollableTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalCenteredScrollableTitle">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
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
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>