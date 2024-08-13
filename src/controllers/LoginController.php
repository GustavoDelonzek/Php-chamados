<?php
    require_once '../Php-chamados/src/models/User.php';

    class LoginController{
            private $usuarios;
            
            public function __construct(){
                $this->usuarios = [
                    new User(1, 'adm@teste.com', '1234', 1),
                    new User(2, 'normal@teste.com', '4321', 2),

                ];
            }

            public function autenticar($email, $senha){
                foreach($this->usuarios as $user){
                    if ($user->email == $email && $user->verificarSenha($senha)){
                        $_SESSION['autenticacao'] = 'SIM';
                        $_SESSION['id'] = $user->id;
                        $_SESSION['tipo'] = $user->tipo;

                        header('Location: ../Php-chamados/src/view/home.php');
                        exit;
                }
            }
            $_SESSION['autenticacao'] = 'NÃO';
            header('Location: index.php?login=erro');
            exit;
            }
    }
?>