<?php

class NomeModel
{
   
    public $id, $nome, $descricao, $habilidade, $tipo;
    
    public $rows;

   
    public function save()
    {
        include 'DAO/NomeDAO.php';

        $dao = new NomeDAO();

        if(empty($this->id))
        {
           
            $dao->insert($this);
        } 
        else 
        {
            $dao->update($this);
      
        }
    }
        public function getAllRows()
        {
            include 'DAO/NomeDAO.php';
            $dao = new NomeDAO();
            $this->rows = $dao->select();
        }


        public function getById(int $id)
        {
            include 'DAO/NomeDAO.php';

            $dao = new NomeDAO();

            $obj = $dao->selectById($id);

            return ($obj) ? $obj : new NomeModel();
        }

        public function delete(int $id)
    {
        include 'DAO/NomeDAO.php'; 

        $dao = new NomeDAO();

        $dao->delete($id);
    }

    }