<?php

include_once 'conectar.php';

//atributos

class Autoria 
{ 

    private $cod_autoria;
    private $Cod_Autor;
    private $Cod_livro;
    private $DataLancamento;
    private $Editora;
  
    //getters e setters da vida
    

    public function getcod_autoria(){

        return $this->cod_autoria; 
    }

    public function setcod_autoria($autoriaa){
        $this->cod_autoria = $autoriaa;
    }
    public function getCod_Autor(){

        return $this->Cod_Autor; 
    }
    public function setCod_Autor($Autori)
    {
        $this->Cod_Autor = $Autori;
    }
    public function getCod_livro()
    {
        return $this->Cod_livro; 
    }
    public function setCod_livro($livroi)
    {
        $this->Cod_livro = $livroi;
    }
    public function getDataLancamento()
    {
        return $this->DataLancamento;
    }
    public function setDataLancamento($DtLancamento)
    {
        $this->DataLancamento = $DtLancamento;
    }
    public function getEditora()
    {
        return $this->Editora;
    }
    public function setEditora($editoras)
    {
        $this->Editora = $editoras;
    }
   

    //métodos

    
    function salvar()
    {
        try{
            $this-> conn = new Conectar();
            $sql = $this->conn->prepare("insert into autoria values (?,?,?,?,?)");
            @$sql-> bindParam(1, $this->getcod_autoria(), PDO::PARAM_STR);
            @$sql-> bindParam(2, $this->getCod_Autor(), PDO::PARAM_STR);
            @$sql-> bindParam(3, $this->getCod_livro(), PDO::PARAM_STR);
            @$sql-> bindParam(4, $this->getDataLancamento(), PDO::PARAM_STR);
            @$sql-> bindParam(5, $this->getEditora(), PDO::PARAM_STR);
           
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
            $sql = $this->conn->prepare("DELETE FROM autoria WHERE id_autoria = ?");
            @$sql-> bindParam(1, $this->getcod_autoria(), PDO::PARAM_STR);
            
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
            $sql = $this->conn->query("select * from autoria");
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