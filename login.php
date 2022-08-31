<!DOCTYPE html>
<html lang="en">

<head>
<title>LOGIN SISTEMA</title>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="images/icono.png">

<link rel="stylesheet" href="fonts/icomoon/style.css" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/style.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous" />


</head>

<body>
    <form action="#" class="p-5 bg-white" id='registrar'>
        <div style='margin-left:25%; '>
            <h1><b>SISTEMA PARCIAL 2 - UG</b></h1>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="username">Usuario</label>
                    <input type="text" id="username" class="form-control" placeholder="Usuario">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                    <label class="font-weight-bold" for="password">Contraseña</label>
                    <input type="password" id="password" class="form-control" placeholder="Contraseña">
                </div>
            </div>

            <div c lass="row form-group">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary pill px-4 py-2" onclick='login()'>Iniciar Sesión</button>
                </div>
            </div>
    </form>
    </div>
</body>
<script src="js/form.js"></script>

</html>