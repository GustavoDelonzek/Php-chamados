<?php
    session_start();
    
    require_once '../Php-chamados/src/controllers/LoginController.php';

    $loginController = new LoginController();
    
    $loginController->autenticar($_POST['email'], $_POST['senha']);
    


 ?>

