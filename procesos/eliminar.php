<?php

    require_once "./conexion.php";
    require_once "../metodosCrud.php";

    $id_auto=$_GET['id_auto'];


    $obj=new metodos();
    if ($obj->eliminarDatosAutos($id_auto)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al eliminar";
    }