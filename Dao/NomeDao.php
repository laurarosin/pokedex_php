<?php

class NomeDAO
{
 
    private $conexao;


    function __construct() 
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    
    function insert(NomeModel $model) 
    {
        
        $sql = "INSERT INTO pokemon
                (nome, descricao, habilidade, tipo) 
                VALUES (?, ?, ?, ?)";
        
        $stmt = $this->conexao->prepare($sql);

        
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->habilidade);
        $stmt->bindValue(4, $model-> tipo);
        
       
        $stmt->execute();      

    }

    public function update(NomeModel $model)
    {
        $sql = "UPDATE pokemon SET nome=?, descricao=?, habilidade=? tipo=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->descricao);
        $stmt->bindValue(3, $model->preco);
        $stmt->bindValue(4, $model->id);
        $stmt->bindValue(5, $model-> tipo);
        $stmt->execute();
    }

    public function select()
    {
        $sql = "SELECT * FROM pokemon";
        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS);
    } 

    public function selectById(int $id)
    {
        include_once 'Model/NomeModel.php';

        $sql = "SELECT * FROM pokemon WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("NomeModel"); 
    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM pokemon WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}