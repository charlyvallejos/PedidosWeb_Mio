<?php
    require 'config/config.php';
    $usuario = new Usuario();
    if ($usuario->verificoAutentificacion())
    {
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>HOLA COMO VA</h1>
    </body>
</html>
<?php } else { require 'vistas/formLogin.php'; } ?>
