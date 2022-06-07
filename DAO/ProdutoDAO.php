<?php

class ProdutoDAO
{
   
    private $conexao;

    function __construct() 
    {
  
        $dsn = "mysql:host=localhost:3307;dbname=db_sistema";
        $user = "root";
        $pass = "etecjau";
        
        $this->conexao = new PDO($dsn, $user, $pass);
    }


    public function insert(ProdutoModel $model) 
    {
          
        $sql = "INSERT INTO produto
                (nome, preco, descricao) 
                VALUES (?, ?, ?)";
        
        
        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(2, $model->nome);
        $stmt->bindValue(2, $model->descricao);

        $stmt->execute();      
    }


    public function select()
    {
        $sql = "SELECT nome, preco, descricao FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll();
    } 
    
    public function delete(int $id)
    { 
        $sql = "DELETE FROM produto WHERE id=?";
        $stmt = $this->conexao-> prepare($sql);
        $stmt-> bindValue(1, $id);
        $stmt ->execute();

    }


    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET nome=?, discricao=?, preco=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->nome);
        $stmt->bindValue(2, $model->preco);
        $stmt->bindValue(2, $model->descricao);
        $stmt->execute();
    }

}