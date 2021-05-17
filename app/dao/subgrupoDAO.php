<?php 

include_once "../dao/DAO.php";
include_once "../class/ClassSubgrupo.php";

Class SubgrupoDao extends DAO{


    public function inserSubgrupo(ClassSubgrupo $ClassSubgrupo){

        $sql = "INSERT INTO `subgrupo`(`subgrupo_id`, `subgrupo_nome`, `subgrupo_descricao`) 
        VALUES (null, :subgrupo_nome, :subgrupo_descricao)";

        $insert = $this->con->prepare($sql);
        $insert->bindValue(':subgrupo_nome',$ClassSubgrupo->getSubgrupo());
        $insert->bindValue(':subgrupo_descricao',$ClassSubgrupo->getDescricao());
        $insert->execute();
    }
}


?>