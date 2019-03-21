<?php

require 'config/config.php';

if(!empty(isset($_GET)))
{
    
    if(isset($_GET['login']))
    {
        $usuario = new Usuario();
        echo $usuario->login();        
    }
    else if(isset ($_GET['logout'])) {
            $usuario = new Usuario();
            $usuario->logout();
    }
    
    if(isset($_GET['a']))
        $accion = $_GET['a'];
    
    if(isset($_GET['t']))
        $tabla = $_GET['t'];
    
    if(isset($_GET['codVend']))
        $codVend = $_GET['codVend'];
    
    if(isset($accion) && $accion = 'get')
    {
        if(isset($tabla) && $tabla = 'ped')
        {
            $pedidCa = new Pedid_Ca();
            echo json_encode($pedidCa->consultaTodosxVendedor($codVend));
        }
    }
}
