<?php


$url = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

include 'Controller/PessoaController.php';
include 'Controller/ProdutoController.php';
include 'Controller/CategoriaController.php';
include 'Controller/FuncionarioController.php';

switch($url)
{
    ## ROTAS PARA PESSOA
    case '/pessoa':
        PessoaController::index();
    break;

    case '/pessoa/form':
        PessoaController::form();
    break;

    case '/pessoa/save':
        PessoaController::save();
    break;
    
    case '/pessoa/delete':
        PessoaController::delete();

    ## ROTAS PARA PRODUTO
    case '/produto':
        ProdutoController::index();
    break;

    case '/produto/form':
        ProdutoController::form();
    break;

    case '/produto/save':
        ProdutoController::save();
    break;

    case '/produto/delete':
        ProdutoController::delete();
    break;
    
    ## ROTAS PARA CATEGORIA
    case '/categoria':
        CategoriaController::index();
    break;

    case '/categoria/form':
        CategoriaController::form();
    break;

    case '/categoria/save':
        CategoriaController::save();
    break;

    case '/categoria/delete':
        CategoriaController::delete();
    break;

    ## ROTAS PARA FUNCIONARIO

    case '/funcionario':
        FuncionarioController::index();
    break;

    case '/funcionario/form':
        FuncionarioController::form();
    break;

    case '/funcionario/save':
        FuncionarioController::save();
    break;

    case '/funcionario/delete':
        FuncionarioController::delete();
    break;

    default:
        include 'View/modules/pg_inicial\pagina_inicial.php';
    break;
}
    


 
