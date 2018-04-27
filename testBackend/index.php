<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <!DOCTYPE html>
    <html>
        <head>
            <title>Aerolinea</title>
            <meta charset="utf-8"/>
            <meta name="viewport" content="width=device-width, user-scalable=no, inicial-scale=1.0, maxium-scale=1.0, minumum-scale=1.0"/>
            <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="../../frameworks/bootstrap-3.3.7-dist/css/bootstrap.min.css"/>
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="../../frameworks/bootstrap-3.3.7-dist/js/bootstrap.js" type="text/javascript"></script>
            <script src="../../frameworks/DataTables-1.10.13/media/js/jquery.dataTables.min.js"></script>
        </head>
        <body>

            <div class="wrapper" style="transform: none;">



                <div class="header header-default header-style-default v1 absolute header-sticky " style="background-color: black;opacity: 0.7;">

                    <div class="navbar navbar-default iw-header" style="background-image: url('img/jo.png');    background-color: black;
                         opacity: 0.7;">
                        <div class="container-fluid" style="height: 400px;">
                            <div class="navbar-header">

                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            <div clas="row">

                <div class="col-lg-12" >
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <center><strong><h2 style=" color: #203d57;">Aerolinea</h2></strong></center>

                            <center><strong><h3 style="color: #5192cb;">Consulta de vuelos</h3></strong></center>
                            <div class="panel panel-default">
                                <div class="panel-body">


                                    <div class="alert alert-info"><center>Filtrar por fecha y por trayecto.</center></div>

                                    <form id="consulta">
                                        <div class="col-sm-4">
                                            <label>Fecha inicial</label>
                                            <input type="date" class="form-control" name="fechaInicial" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Fecha final</label>
                                            <input type="date" class="form-control" name="fechaFinal" required>
                                        </div>
                                        <div class="col-sm-4">
                                            <label>Tipo tarea</label>
                                            <select class="form-control" name="tipo" id="tipo" required>
                                                <option value="">Seleccione...</option>

                                            </select>
                                        </div>
                                        <div class="col-sm-12" style="margin-top:15px;">
                                            <input type="submit" class="btn" value="Filtrar" style="width: 100%;
                                                   background-color: #119ee4;
                                                   color: white;">
                                        </div>
                                    </form>
                                </div> 
                            </div>
                        </div> 
                    </div>

                </div>
            </div>  
        </body>
    </html>
