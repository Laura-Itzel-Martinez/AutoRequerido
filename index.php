
<?php session_start();

require_once "procesos/conexion.php";
require_once "metodosCrud.php";


?>
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
    <br><br>
    <div class="container ">
        <div class="card border-0 shadow my-5">
            <div class="card-body p-5">
                <h1 class="font-weight-light">Agregar auto requerido</h1>
                <p class="lead">
                    <div class="row">
                        <div class="col">
                            <form action="procesos/insertar.php" method="POST">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label for="marca">Marca de auto</label>
                                        <input type="text" require class="form-control" name="marca" required>

                                        <label for="color">Selecciona un color</label>


                                        <br><label for="color">Rojo</label>
                                        <input type="checkbox" name="color" id="color" value="rojo">

                                        <label for="color">azul</label>
                                        <input type="checkbox" name="color" id="color" value="azul">

                                        <label for="color">negro</label>
                                        <input type="checkbox" name="color" id="color" value="azul">
                                        


                                        <br><label for="descripcion">Descripcion</label>
                                        <textarea name="descripcion" id="descripcion" cols="30" rows="10"  class="form-control" require></textarea>
                                        <br>
                                        <button class="btn btn-info">Agregar</button>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <table class="table table-striped table-hover text-center" border="2"  style="text-align: center">
                            <tr>
                                <td>Marca</td>
                                <td>color</td>
                                <td>Descripcion</td>
                                <td>Eliminar</td>
                            </tr>

                                <?php
                                    $obj= new metodos();
                                    $sql="SELECT id_auto,
                                    marca,
                                    color,
                                    descripcion FROM t_autos";

                                    $datos=$obj->mostrarDatos($sql);

                                    foreach ($datos as $key){
                                ?>

                            <tr>
                                
                                <td><?php echo $key ['marca'];?></td>
                                <td><?php echo $key ['color'];?></td>
                                <td><?php echo $key ['descripcion'];?></td>
                                <td><a href="procesos/eliminar.php?id_auto=<?php echo $key['id_auto']?>"><button class="btn btn-danger">Eliminar</button></a></td>
                            
                            </tr>
                                <?php
                                    }
                                ?>
                        </table>
                    </div>
                </p>
            </div>
        </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
