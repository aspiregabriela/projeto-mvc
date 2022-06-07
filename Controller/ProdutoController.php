<?php

class ProdutoController
{
    public static function form()
    {
        include 'View/modules/Produto/ProdutoCadastro.php';

    }

    public static function index(){

            include 'Model/ProdutoModel.php';
    
            $model = new ProdutoModel();
            $model->getAllRows();
    
            $nome = "Adib";
            include 'View/modules/Produto/ListaProduto.php';
        
    }

    public static function save()
    {
        include 'Model/ProdutoModel.php';

        $produto = new ProdutoModel();
        $produto ->nome = $_POST['nome'];
        $produto->preco = $_POST['preço'];
        $produto ->descricao = $_POST['descrição'];

        $produto->save();  // chamando o método save da model.

        header("Location: /produto"); // redirecionando o usuário para outra rota.
    }

    public static function delete(){

        include 'Model/ProdutoModel.php';

            $model = new ProdutoModel();
            $model->delete( (int) $_GET['id'] );
            header("Location: /produto");
            
    }
}
