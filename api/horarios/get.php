<?php
    require_once "../db.php";
    header("Access-Control-Allow-Origin: *");

    $link = conectar();

    $sql = "SELECT nro,dia,hora_inicio,hora_fin,abierto FROM horarios";

    $query = mysqli_query($link, $sql);

    $horarios = array();
    while($rs = mysqli_fetch_row($query)){
        $horario = new stdClass();
        $horario->nro = $rs[0];
        $horario->dia = $rs[1];
        $horario->hora_inicio = $rs[2];
        $horario->hora_fin = $rs[3];
        $horario->abierto = $rs[4]==0? false: true;
        $horarios[]=$horario;
    }

    echo json_encode($horarios);

