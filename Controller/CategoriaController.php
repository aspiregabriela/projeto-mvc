<?php

class CategoriaController 
{
    public static function index() 
    {

        $model = new CategoriaModel();
        $model->getAllRows();

        
        include 'View/modules/Categoria/ListaCategoria.php';
    }

    public static function form()
    {

        $model = new CategoriaModel;

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 
        include 'View/modules/Categoria/FormCategoria.php';
    }

    public static function save() 
    {
            $categoria = new CategoriaModel();
            $categoria->id = $_POST['id'];
            $categoria->descricao = $_POST['descricao'];
            $categoria->save(); 

        header("Location: /categoria"); 
    }

    public static function delete()
    {
        $model = new CategoriaDAO();
        $model->delete( (int) $_GET['id'] );
        header("Location: /categoria");
    }

}
