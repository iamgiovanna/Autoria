<?php

include_once 'Conectar.php';

    class Usuario
    {
        private $usu;
        private $senha;
        private $conn;

        public function getUsu()
        {
            return $this->usu;
        }
        public function setUsu($usuario)
        {
            $this->usu = $usuario;
        }
        public function getSenha()
        {
            return $this->senha;
        }
        public function setSenha($senhai)
        {
            $this->senha = $senhai;
        }

        function logar()
        {
            try
            {
                $this-> conn = new Conectar();
                $sql = $this->conn->prepare("select * from usuario where Login like ? and Senha = ?");   
                @$sql->bindParam(1,$this->getUsu(), PDO::PARAM_STR);
                @$sql->bindParam(2,$this->getSenha(), PDO::PARAM_STR);
                $sql->execute();
                return $sql->fetchAll();
                $this->conn = null;
            }
            catch(PDOException $exc)
            {
                echo "<span class='text-black-200'> ERRO AO EXECUTAR!</span>" . $exc->getMessage();
            }
        }
    }

?>