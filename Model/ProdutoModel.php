<?php


class ProdutoModel
{
    public $id, $nome, $preco, $descricao;

    public function save()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();
        if($this->id) 
        {
            
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }
    
    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php';

        $dao = new ProdutoDAO();

        $this->rows = $dao->select();
 
    }

    public function delete (int $id)
    { 
        include 'DAO/ProdutoDAO.php';
        $dao = new ProdutoDAO;
 
        $dao->delete( (int) $id);

    }



}
