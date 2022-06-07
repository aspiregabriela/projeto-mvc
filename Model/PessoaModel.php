<?php

class PessoaModel
{
   
    public $id, $nome, $rg, $cpf;
    public $data_nascimento, $email;
    public $telefone, $endereco;

    public $rows;

    public function save()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        if($this->id == null) 
        {
            $dao->insert($this);
        } else {
            $dao->update($this);

        }
    }


    public function getById(int $id){
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        return $dao->getById($id);
    }

    public function getAllRows()
    {
        include 'DAO/PessoaDAO.php';

        $dao = new PessoaDAO();

        $this->rows = $dao->select();
    }

    public function delete (int $id)
    { 
        include 'DAO/PessoaDAO.php';
        $dao = new PessoaDAO;
 
        $dao->delete( (int) $id);

    }
}

