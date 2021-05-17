<?php 


Class ClassSetor{


    private $id;
    private $setor;
    private $descricao;


    public function getID(){
        return $this->id;
    }

    public function setID($id){

        $this->id = $id;
    }

    public function getSetor(){
        return $this->setor;
    }

    public function setSetor($setor){

        $this->setor = $setor;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
}
?>