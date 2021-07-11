<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

    function conectar(){
        $mysqli = mysqli_connect("db-inafeteria","root","123456","inafeteria_db");
        return $mysqli;
    }