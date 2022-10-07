<?php

    class metodos{
        public function mostrarDatos($sql){
            $c= new conectar();
            $conexion=$c->conexion();
            $result=mysqli_query($conexion,$sql);
            return mysqli_fetch_all($result,MYSQLI_ASSOC);
        }
        public function insertarDatosAutos($datos){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="INSERT into t_autos (
            marca,
            color,
            descripcion
            ) 
            values ('$datos[0]','$datos[1]','$datos[2]')";

            return $result=mysqli_query($conexion,$sql);
        }
        public function eliminarDatosAutos($id_auto){
            $c=new conectar();
            $conexion=$c->conexion();

            $sql="DELETE from t_autos where id_auto='$id_auto'";
            return $result=mysqli_query($conexion,$sql);

        }
        
    }