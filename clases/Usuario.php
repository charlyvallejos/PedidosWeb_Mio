<?php

class Usuario{
    private $Id_Usuario;
    private $Usuario_Login;
    private $Clave;
    private $Nombre_Vendedor;
    private $Codigo_Vendedor;
    
    public function verificoAutentificacion(){
        if(isset($_SESSION['logueado'])){
            return true;
        }else{
            return false;
        }                    
    }
    
    public function login(){
        try
        {
            $sql = "SELECT Nombre_Vendedor, Codigo_Vendedor FROM usuarios WHERE Usuario_Login = :Usuario_Login AND Clave = :Clave";
            $conexion = Conexion::conectar();

            $query = $conexion->prepare($sql);
            $ok = array("ok" => false);
            if(isset($_POST) && $_POST['Usuario_Login'] != "" && $_POST['Clave'] != "")
            {
                $usuario = $_POST['Usuario_Login'];
                $clave = $_POST['Clave'];

                $clave = base64_encode($clave);
                $clave = sha1($clave);

                $query->bindParam(':Usuario_Login', $usuario, PDO::PARAM_STR);
                $query->bindParam(':Clave', $clave, PDO::PARAM_STR);

                $query->execute();            
                if($query->rowCount() > 0)
                {
                    $resultado = $query->fetch(PDO::FETCH_ASSOC);
                    $_SESSION['logueado'] = 1;
                    $_SESSION['Nombre_Vendedor'] = $resultado['Nombre_Vendedor'];
                    $_SESSION['Codigo_Vendedor'] = $resultado['Codigo_Vendedor'];
                    $ok = array('ok' => true);
                }
                return json_encode($ok);                                    
            }
            else
            {
                return json_encode($ok);
            }
        }
        catch (PDOException $ex)
        {
            $ex->getMessage();
            $ok = array("ok" => false);
            return json_encode($ok);
        }                
    }
    
    public function logout(){
        session_unset();
        session_destroy();
    }
    
}

