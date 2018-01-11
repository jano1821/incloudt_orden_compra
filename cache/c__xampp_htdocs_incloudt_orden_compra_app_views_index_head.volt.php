<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Ordens de Compra</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<link rel="stylesheet" href="css/custom.css">
<link rel=icon href='' sizes="32x32" type="image/png">
<nav class="navbar navbar-default ">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Ordenes de Compra</a>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="">
                    <a href="facturas.php">
                        <i class='glyphicon glyphicon-list-alt'></i> Comprobantes 
                    </a>
                </li>
                <li class="">
                    <a href="productos.php">
                        <i class='glyphicon glyphicon-barcode'></i> Productos
                    </a>
                </li>
                <li class="">
                    <a href="clientes.php">
                        <i class='glyphicon glyphicon-user'></i> Clientes
                    </a>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><?= $this->tag->linkTo(['index/logout', '<i class=\'glyphicon glyphicon-off\'></i> Salir']) ?>
            </ul>
        </div>
    </div>