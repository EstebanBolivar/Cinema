<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Cinema</title>
        <link href="css/Estilo1.css" type="text/css" rel="stylesheet">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="global-container">
            <div class="card login-form">
                <div class="card-body">
                    <h3 class="card-title text-center">Benvenido a cinema Unimonito</h3>
                    <h3 class="card-title text-center">Ingrese La informacion del Cliente</h3>
                    <div class="card-text">
                        <!--
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">Incorrect username or password.</div> -->
                        
                        <h3 class="card-title text-center">Seleccione la silla a reservar </h3>
                        <form method="post" enctype="multipart/form-data" action="Control.php">
                            <!-- to error: add class "has-danger" -->

                            <!--<div class="form-group">-->

                            <br><label for="marca">idSala: </label><br>

                            <select id="idSala" name="idSala" >
                                <?php
                                require_once 'DataBase.php';
                                $db = new DataBase();
                                $db->Conectar();
                                $res = $db->consultar("Sala", "idSala");
                                while ($row = mysqli_fetch_array($res)) {
                                    echo '<option>';
                                    echo $row['idSala'];
                                    echo '</option>';
                                }
                                ?>
                                <!--                            <option value="value1 ">Activo corriente</option> 
                                                                <option value="value2 ">Activo fijo</option>
                                                                <option value="value3 ">Activo financiero</option>
                                                                <option value="value4 ">Activo intangible</option>
                                                                <option value="value5 ">Activo subyacente</option>
                                                                <option value="value6 ">Activo funcional</option>-->
                            </select><br>
                            <br>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Ubicacion Columna</label>
                                <input type="text" name="UbicacionColumna" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Ubicacion Fila</label>
                                <input type="text" name="UbicacionFila" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Estado</label>
                                <input type="text" name="Estado" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                    </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Tipo Silla</label>
                                <input type="texy" name="tipo_silla" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">precio</label>
                                <input type="text" name="precio_silla" class="form-control form-control-sm" aria-describedby="emailHelp">
                            </div>
            <input id="RegistrarSilla" name="RegistrarSilla" onclick="location='ClienteFactura.php'"type="submit" class="btn btn-primary btn-block" value="registrarSilla">
                            <button type="button" class="btn btn-primary btn-block" onclick="location = 'index.php'" id="reEmpleado">Volver</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>