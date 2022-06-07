<?php

class CategoriaModel
{
    public $id, $descricao;

    public $rows;

    public function save()
    {
        $dao = new CategoriaDAO();

        if(empty($this->id)) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {
        $dao = new CategoriaDAO();

        $this->rows = $dao->select();
    }
    public function getById(int $id)
    {

        $dao = new CategoriaDAO();

        $obj = $dao->selectById($id); 
        return ($obj) ? $obj : new CategoriaModel(); 

    }
    public function delete(int $id)
    {
        include 'DAO/CategoriaDAO.php';
        $dao = new CategoriaDAO();
        $dao->delete($id);
    }
}
