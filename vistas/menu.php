<?php
    if(isset($_GET['vista']))
        $vista = $_GET['vista'];
    else
        $vista = 'vistaPedidos';
    
    
    

?>

<script>
    var CodVendedor = "<?php echo $_SESSION['Codigo_Vendedor'] ?>";  
</script>
<div class="nav-color">
    <div class="nav-wrap">
        <?php if(isset($_SESSION)){ ?>
        <div id="lang-selector" ng-controller="loginController">
            <a href=""  ng-click="logout()" class="active"><?php if(isset($_SESSION['Nombre_Vendedor'])) echo 'Cerrar Sesión'?></a>
             | 
            <a href=""><?php if(isset($_SESSION['Nombre_Vendedor'])) echo $_SESSION['Nombre_Vendedor'] ?></a>
        </div>
        <?php } ?>
    </div>    
</div> 


