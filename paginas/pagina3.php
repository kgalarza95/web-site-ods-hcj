<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petroleo por Pais</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
</head>

<body>

    <div class="container mt-5">
        <div class="row">
            

            <div class="col-md-12">

                <h1 class="my-4 text-center">Información de la venta de petroleo</h1>
                <table id="tblDatos" class="table table-striped table-bordered" style="width: 100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>NOMBRE</th>
                            <th>VENTA</th>
                            <th>MES</th>
                            <th>AÑO</th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>

    <script src="../js/lib/jquery-3.6.1.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

    <script src="../js/eventos/petroleoxpais.js"></script>
</body>

</html>