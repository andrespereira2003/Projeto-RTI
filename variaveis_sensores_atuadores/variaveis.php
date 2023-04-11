<?php

//SENSORES

//TEMPERATURA
$valor_temperatura = file_get_contents("../api/files/sensores/temperatura/valor.txt");
$hora_temperatura = file_get_contents("../api/files/sensores/temperatura/hora.txt");
$nome_temperatura = file_get_contents("../api/files/sensores/temperatura/nome.txt");
$log_temperatura = file_get_contents("../api/files/sensores/temperatura/log.txt");

//RFID
$valor_rfid = file_get_contents("../api/files/sensores/RFID/valor.txt");
$hora_rfid = file_get_contents("../api/files/sensores/RFID/hora.txt");
$nome_rfid = file_get_contents("../api/files/sensores/RFID/nome.txt");
$log_rfid = file_get_contents("../api/files/sensores/RFID/log.txt");

//PRESENÇA
$valor_presenca = file_get_contents("../api/files/sensores/presenca/valor.txt");
$hora_presenca = file_get_contents("../api/files/sensores/presenca/hora.txt");
$nome_presenca = file_get_contents("../api/files/sensores/presenca/nome.txt");
$log_presenca = file_get_contents("../api/files/sensores/presenca/log.txt");

//GAS
$valor_gas = file_get_contents("../api/files/sensores/gas/valor.txt");
$hora_gas = file_get_contents("../api/files/sensores/gas/hora.txt");
$nome_gas = file_get_contents("../api/files/sensores/gas/nome.txt");
$log_gas = file_get_contents("../api/files/sensores/gas/log.txt");

//FUMO
$valor_fumo = file_get_contents("../api/files/sensores/fumo/valor.txt");
$hora_fumo = file_get_contents("../api/files/sensores/fumo/hora.txt");
$nome_fumo = file_get_contents("../api/files/sensores/fumo/nome.txt");
$log_fumo = file_get_contents("../api/files/sensores/fumo/log.txt");

//HUMIDADE
$valor_humidade = file_get_contents("../api/files/sensores/humidade/valor.txt");
$hora_humidade = file_get_contents("../api/files/sensores/humidade/hora.txt");
$nome_humidade = file_get_contents("../api/files/sensores/humidade/nome.txt");
$log_humidade = file_get_contents("../api/files/sensores/humidade/log.txt");


//ATUADORES

//ALARME
$valor_alarme = file_get_contents("../api/files/atuadores/alarme/valor.txt");
$hora_alarme = file_get_contents("../api/files/atuadores/alarme/hora.txt");
$nome_alarme = file_get_contents("../api/files/atuadores/alarme/nome.txt");
$log_alarme = file_get_contents("../api/files/atuadores/alarme/log.txt");

//JANELA
$valor_janela = file_get_contents("../api/files/atuadores/janela/valor.txt");
$hora_janela = file_get_contents("../api/files/atuadores/janela/hora.txt");
$nome_janela = file_get_contents("../api/files/atuadores/janela/nome.txt");
$log_janela = file_get_contents("../api/files/atuadores/janela/log.txt");

//LUZ
$valor_luz = file_get_contents("../api/files/atuadores/luz/valor.txt");
$hora_luz = file_get_contents("../api/files/atuadores/luz/hora.txt");
$nome_luz = file_get_contents("../api/files/atuadores/luz/nome.txt");
$log_luz = file_get_contents("../api/files/atuadores/luz/log.txt");

//PORTA
$valor_porta = file_get_contents("../api/files/atuadores/porta/valor.txt");
$hora_porta = file_get_contents("../api/files/atuadores/porta/hora.txt");
$nome_porta = file_get_contents("../api/files/atuadores/porta/nome.txt");
$log_porta = file_get_contents("../api/files/atuadores/porta/log.txt");

//VENTOINHA
$valor_ventoinha = file_get_contents("../api/files/atuadores/ventoinha/valor.txt");
$hora_ventoinha = file_get_contents("../api/files/atuadores/ventoinha/hora.txt");
$nome_ventoinha = file_get_contents("../api/files/atuadores/ventoinha/nome.txt");
$log_ventoinha = file_get_contents("../api/files/atuadores/ventoinha/log.txt");

?>