<?php
    require_once "../db.php";
    header("Access-Control-Allow-Origin: *");

    $link = conectar();

    $sql = "SELECT id,nombre,foto,descripcion,precio FROM productos";

    $query = mysqli_query($link, $sql);

    $productos = array();
    while($rs = mysqli_fetch_row($query)){
        $producto = new stdClass();
        $producto->id = $rs[0];
        $producto->nombre = $rs[1];
        $producto->foto = $rs[2];
        $producto->descripcion = $rs[3];
        $producto->precio = $rs[4];
        $productos[]=$producto;
    }

    echo json_encode($productos);
