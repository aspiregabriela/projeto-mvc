<?php 

spl_autoload_register(function ($nome_classe){

    include dirname(__FILE__, 2) . '/' . $nome_classe .'.php';

    if(file_exists($classe_controller)){
        include $classe_controller;
    }else if(file_exists($classe_DAO)){
        include $classe_DAO;
    }else if(file_exists($classe_Model)){
        include $classe_Model;
    }*/

});