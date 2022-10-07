<?php

    require_once "./conexion.php";
    require_once "../metodosCrud.php";

    $marca=$_POST['marca'];
    $color=$_POST['color'];
    $descripcion=$_POST['descripcion'];
    

    $datos=array($marca,
    $color,
    $descripcion);

    $obj=new metodos();
    if ($obj->insertarDatosAutos($datos)==1) {
        header("location:../index.php");
    } else {
        echo "fallo al agregar";
    }