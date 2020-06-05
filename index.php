<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <title>Denuncias Web App Transporte</title>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>


    <div class="container">
        <div class="row">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="descarga2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="descarga2.jpeg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="descarga2.jpeg" class="d-block w-100" alt="...">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <h3>Denuncias Web App</h3>
                <p>Aplicación web para el registro de denuncias del transporte publico en Colombia</p>
                <p>Permite el control y la veduría pública</p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p>Registre aquí sus denuncias</p>
                <form action="crearDenuncia.php" method="POST">
                    <div class="item-form">
                        <div class="row">
                            <div class="col-4">
                                <label class="label-input-form" for="">Lugar:</label>
                            </div>
                            <div class="col-8">
                                <input class="input-form" type="text" name="input_lugar" id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-4">
                                <label class="label-input-form" for="">Fecha:</label>
                            </div>
                            <div class="col-8">
                                <input class="input-form" type="date" name="input_fecha" id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-4">
                                <label for="">Hora:</label>
                            </div>
                            <div class="col-8">
                                <input type="number" name="input_hora" id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-4"></div>
                            <div class="col-8"></div>

                        </div>
                        <label for="">Tipo de Vehículo:</label>
                        <!-- <input type="text" name="input_tipo" id="" required> -->
                        <select name="input_tipo" id="">
                            <option value="Camión">Camión</option>
                            <option value="Carro particular">Carro particular</option>
                            <option value="Volqueta">Volqueta</option>
                            <option value="Motos">Motos</option>
                            <option value="Transporte público">Transporte público</option>
                        </select>
                    </div>
                    <div class="item-form">
                    <div class="row">
                            <div class="col-4">
                                <label for="">Placa:</label>
                            </div>
                            <div class="col-8">
                                <input type="text" name="input_placa" id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <div class="row">
                            <div class="col-4">
                                <label for="">Denuncia:</label>
                            </div>
                            <div class="col-8">
                                <input type="textarea" name="input_denuncia" id="" required>
                            </div>
                        </div>
                    </div>
                    <div class="item-form">
                        <input class="btn btn-primary btn-lg btn-block" type="submit">
                    </div>                
                </form>
            </div>
        </div>
        <div class="row">
            <div class="table-responsive">
                <table class="table table-bordered m-2" border="1">
                    <tr>
                        <th>id</th>
                        <th>Lugar</th>
                        <th>Fecha</th>
                        <th>Hora</th>
                        <th>Tipo</th>
                        <th>Placa</th>
                        <th>Denuncia</th>
                        <th></th>
                        <th></th>
                    </tr>
                    <?php
                    include_once('conexionbd.php');
                    //crear sentencia sql
                    $sql = "SELECT * from denuncias ORDER BY fecha DESC";
                    //lanzar la sentencia sql
                    $respuesta = $conn->query($sql);
                    while($row=$respuesta->fetch_array())
                    {
                    ?>
                    <tr>
                        <td> <?php echo $row['id_pk']; ?></td>
                        <td> <?php echo $row['lugar']; ?></td>
                        <td> <?php echo $row['fecha']; ?></td>
                        <td> <?php echo $row['hora']; ?></td>
                        <td> <?php echo $row['tipo']; ?></td>
                        <td> <?php echo $row['placa']; ?></td>
                        <td> <?php echo $row['denuncia']; ?></td>
                        <td><a href="verDenunciaParaEditar.php?id_para_editar=<?php echo $row['id_pk']; ?>">Editar</a></td>
                        <td><a href="eliminarDenuncia.php?id_para_borrar=<?php echo $row['id_pk']; ?>">eliminar</a></td>
                    </tr>
                    <?php
                    }
                    // cierra la conexión
                    $conn->close();
                    ?>
                </table>
            </div>
        </div>
        <div class="row">
            Realizado por JGA
        </div>
    </div>

        
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>