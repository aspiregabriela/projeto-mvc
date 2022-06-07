<?php

class FuncionarioController
{


    public static function index()
    {
        include 'Model/FuncionarioModel.php';

        $model = new PessoaModel();
        $model->getAllRows();

        $nome = "Adib";
        include 'View/modules/Funcionario/ListaFuncionario.php';
    }

    public static function form()
    {
        include 'View/modules/Funcionario/Formfuncionario.php';
    }



    public static function save()
    {

        include 'Model/FuncionarioModel.php';


        $funcionario = new FuncionarioModel();
        $funcionario->nome = $_POST['nome'];
        $funcionario->rg = $_POST['rg'];
        $funcionario->cpf = $_POST['cpf'];
        $funcionario->data_nascimento = $_POST['data_nascimento'];
        $funcionario->email = $_POST['email'];
        $funcionario->telefone = $_POST['telefone'];
        $funcionario->endereco = $_POST['endereco'];

        $funcionario->save();

        header("Location: /pessoa");
    }

    public static function delete(){
        $model = new FuncionarioDAO();
        $model->delete( (int) $_GET['id'] );
        header("Location: /funcionario");
        
    }
}
