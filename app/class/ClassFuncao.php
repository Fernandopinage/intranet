<?php 


Class ClassFuncao{

    private $id;
    private $funcao;
    private $descricao;

    public function getID(){
        return $this->id;
    }

    public function setID($id){

        $this->id = $id;
    }

    public function getFuncao(){
        return $this->funcao;
    }

    public function setFuncao($funcao){

        $this->funcao = $funcao;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
}

?>