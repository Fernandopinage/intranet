<?php

include_once "../dao/DAO.php";
include_once "../class/CLassGrupo.php";


Class GrupoDao extends DAO{


    public function insertGrupo(ClassGrupo $ClassGrupo){

        $sql = "INSERT INTO `grupo`(`grupo_id`, `grupo_nome`, `grupo_descricao`) VALUES (null, :grupo_nome, :grupo_descricao)";
        $insert = $this->con->prepare($sql);
        $insert->bindValue(':grupo_nome',$ClassGrupo->getGrupo());
        $insert->bindValue(':grupo_descricao',$ClassGrupo->getDescricao());
        $insert->execute();

    }
}



?>