<?php

include_once 'conectar.php';

//atributos

class Livro 
{
    private $Cod_livro;
    private $Titulo;
    private $Categoria;
    private $ISBN;
    private $Idioma;
    private $QtdePag;

    //getters e setters da vida

    public function getCod_livro()
    {
        return $this->Cod_livro; 
    }
    public function setCod_livro($livroi)
    {
        $this->Cod_livro = $livroi;
    }
    public function getTitulo()
    {
        return $this->Titulo;
    }
    public function setTitulo($tituloi)
    {
        $this->Titulo = $tituloi;
    }
    public function getCategoria()
    {
        return $this->Categoria;
    }
    public function setCategoria($categoriai)
    {
        $this->Categoria = $categoriai;
    }
    public function getISBN()
    {
        return $this->ISBN;
    }
    public function setISBN($ISBNA)
    {
        $this->ISBN = $ISBNA;
    }
    public function getIdioma()
    {
        return $this->Idioma;
    }
    public function setIdioma($Idiomas)
    {
        $this->Idioma = $Idiomas;
    }
    public function getQtdePag()
    {
        return $this->QtdePag;
    }
    public function setQtdePag($QtdePaga)
    {
        $this-> QtdePag = $QtdePaga;
    }

    //métodos

    function salvar()
    {
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into livro values (?,?,?,?,?,?)");
            @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getTitulo(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCategoria(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getISBN(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getIdioma(), PDO::PARAM_STR);
            @$sql-> bindParam(6, $this->getQtdePag(), PDO::PARAM_STR);
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
    try {
        $this->conn = new Conectar();
        $sql = $this->conn->prepare("DELETE FROM livro WHERE Cod_Livro = ?");
        
       @$sql-> bindParam(1, $this->getCod_livro(), PDO::PARAM_STR);
        if ($sql->execute()) {
          
            return "Eba! Você conseguiu excluir o registro, parabéns!!!";
        } else {
            return "Erro ao tentar excluir! Tente novamente mais tarde";
        }
    } catch (PDOException $exc) {
        echo "Erro ao excluir: " . $exc->getMessage();
    }
}

    function listar()
    {
        try
        {
            $this-> conn = new conectar();
            $sql = $this->conn->query("select * from livro");
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