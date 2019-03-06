<?php

require 'config/config.php';

if(!empty(isset($_GET)))
{
    if(isset($_GET['login']))
    {
        $usuario = new Usuario();
        echo $usuario->login();        
    }
    else {
        $usuario = new Usuario();
        $usuario->logout();
    }
}
