
<?php

class FuncionarioModel
{
    
    public $id, $nome, $preco, $descricao;
   
    public $rows;

    public function save()
    {
        include 'DAO/FuncionarioDAO.php';
        $dao = new FuncionarioDAO();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        include 'DAO/FuncionarioDAO.php';

        $dao = new FuncionarioDAO();

        $this->rows = $dao->select();
    }
    
    public function delete (int $id)
    { 
        include 'DAO/FuncionarioDAO.php';
        $dao = new funcionarioDAO;
 
        $dao->delete( (int) $id);

    }

    

}