<?php
    require 'config/config.php';
    $usuario = new Usuario();
    if ($usuario->verificoAutentificacion())
    {
?>
<html ng-app="appSapo">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>HOLA COMO VA TODO Viento?</h1>        
        <div ng-controller="loginController">
            <button ng-click="logout()">Salir</button>
        </div>         
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/angular.min.js"></script>
        <script src="js/dirPagination.js"></script>
        <script type="text/javascript" src="js/app.js"></script>
        <script type="text/javascript" src="js/login.js"></script>
        <script type="text/javascript" src="js/appCliente.js"></script>
        <script type="text/javascript" src="js/appProducto.js"></script>
        <script src="https://code.angularjs.org/1.3.0-rc.2/angular-messages.js"></script>
    </body>
</html>
<?php } else { require 'vistas/formLogin.php'; } ?>
