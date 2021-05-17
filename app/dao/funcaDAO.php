<?php 

include_once "../dao/DAO.php";
include_once "../class/ClassFuncao.php";

Class FuncaoDao extends DAO{


    public function insertFuncao(ClassFuncao $ClassFuncao){

        $sql = "INSERT INTO `funcao`(`funcao_id`, `funcao_nome`, `funcao_descricao`) VALUES (null, :funcao_nome, :funcao_descricao)";
       
        $insert = $this->con->prepare($sql);
        $insert->bindValue(':funcao_nome',$ClassFuncao->getFuncao());
        $insert->bindValue(':funcao_descricao',$ClassFuncao->getDescricao());
        $insert->execute();
       
       
    }
}

?>