<?php 

Class ClassSubgrupo{

    private $id;
    private $subgrupo;
    private $descricao;

    public function getID(){
        return $this->id;
    }

    public function setID($id){

        $this->id = $id;
    }

    public function getSubgrupo(){
        return $this->subgrupo;
    }

    public function setSubgrupoo($subgrupo){

        $this->subgrupo = $subgrupo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
}



?>