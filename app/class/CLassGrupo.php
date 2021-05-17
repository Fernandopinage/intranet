<?php 


Class ClassGrupo {


    private $id;
    private $grupo;
    private $descricao;

    public function getID(){
        return $this->id;
    }

    public function setID($id){

        $this->id = $id;
    }

    public function getGrupo(){
        return $this->grupo;
    }

    public function setGrupo($grupo){

        $this->grupo = $grupo;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){

        $this->descricao = $descricao;
    }
}

?>