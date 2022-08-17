<?php


class NomeController 
{

    public static function index() 
    {
        include 'Model/NomeModel.php'; 
        
       
        $model = new NomeModel();
        $model->getAllRows();
        include 'View/Nome/NomeListar.php';
    }
    public static function form()
    {
        include 'Model/NomeModel.php'; 
        $model = new NomeModel();
      
        if(isset($_GET['id']))
        $model = $model->getById( (int) $_GET['id']);
        include 'View//Nome.php';
    }


    public static function save() {

        include 'Model/NomeModel.php'; 
        $nome = new NomeModel();
        $nome->id = $_POST['id'];
        $nome->nome = $_POST['nome'];
        $nome->descricao = $_POST['descricao'];
        $nome->habilidade = $_POST['habilidade'];
        $nome->tipo = $_POST['tipo'];
     
        $nome->save();  

        header("Location: /nome"); 
    }

    public static function delete()
    {
        include 'Model/NomeModel.php'; 

        $model = new NomeModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /nome"); 
    }

}