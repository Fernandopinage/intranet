<?php 

include_once "../dao/DAO.php";
include_once "../class/ClassSetor.php";

Class SetorDao extends DAO{

    public function insertSetor(ClassSetor $ClassSetor){

        $sql = "INSERT INTO `setor`(`setor_id`, `setor_nome`, `setor_descricao`) VALUES
         (null, :setor_nome, :setor_descricao)";

         $insert = $this->con->prepare();
         $insert->bindValue('setor_nome',$ClassSetor->getSetor());
         $insert->bindValue('setor_descricao',$ClassSetor->getDescricao());
         $insert->execute();
    }
}


?>