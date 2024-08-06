<?php
    
    class User{
        public $Id;
        public $email;
        public $senha;
        public $tipo;

        public function __constructor($id, $email, $senha, $tipo){
            $this->id = $id;
            $this->email = $email;
            $this->senha = password_hash($senha, PASSWORD_DEFAULT);
            $this->tipo = $tipo;
        }
    
        public function verificarSenha($senha){
            return password_verify($senha, $this->senha);
            
        }

    }

?>