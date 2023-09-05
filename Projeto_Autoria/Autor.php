<?php

include_once 'conectar.php';

//atributos

class Autor 
{
    private $Cod_Autor;
    private $NomeAutor;
    private $Sobrenome;
    private $Email;
    private $Nascimento;

    //getters e setters da vida

    public function getCod_Autor()
    {
        return $this->Cod_Autor; 
    }
    public function setCod_Autor($autoroi)
    {
        $this->Cod_Autor = $autoroi;
    }
    public function getNomeAutor()
    {
        return $this->NomeAutor;
    }
    public function setNomeAutor($Nome)
    {
        $this->NomeAutor = $Nome;
    }
    public function getSobrenome()
    {
        return $this->Sobrenome;
    }
    public function setSobrenome($Sobrenomei)
    {
        $this->Sobrenome = $Sobrenomei;
    }
    public function getEmail()
    {
        return $this->Email;
    }
    public function setEmail($Emaill)
    {
        $this->Email = $Emaill;
    }
    public function getNascimento()
    {
        return $this->Nascimento;
    }
    public function setNascimento($Nascimentos)
    {
        $this->Nascimento = $Nascimentos;
    }
   

    //métodos
 function salvar()
    {
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into autor values (?,?,?,?,?)");
            @$sql-> bindParam(1, $this->getCod_Autor(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getNomeAutor(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getSobrenome(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getEmail(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getNascimento(), PDO::PARAM_STR);
           
            if($sql->execute() == 1)
            {
                return "Registro salvo com sucesso!";
            }
            $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao salvar o registro. " . $exc->getMessage();
        }
    }
    
    function exclusao()
    {
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("DELETE FROM autor WHERE Cod_Autor = ? ");
            @$sql-> bindParam(1, $this->getCod_Autor(), PDO::PARAM_STR);
           if($sql->execute() == 1 )
           {
                return "Eba! Você conseguiu excluir o registro, parabéns!!!";
           }else
           {
            return "Erro ao tentar excluir! Tente novamente mais tarde";
           }
          
           $this->conn = null;
        }
        catch(PDOException $exc)
        {
            echo "Erro ao excluir." . $exc->getMessage();
        }
    }
    
    function listar()
    {
        try
        {
            $this-> conn = new conectar();
            $sql = $this->conn->query("select * from autor");
            $sql-> execute();
            return $sql->fetchAll();
            $this->conn = null; 
        
        }
        catch(PDOException $exc)
        {
            echo "Erro ao executar consulta :( " . $exc->getMessage();
        }
    }

}

?>