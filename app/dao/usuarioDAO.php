<?php 

include "../dao/DAO.php";
include_once "../class/ClassUsuario.php";


Class UsuarioDao extends Dao{

    public function insertUsuario(ClassUsuario $ClassUsuario){

        $sql = "INSERT INTO `usuario`(`usuario_id`, `usuario_nome`, `usuario_email`, `usuario_nascimento`, `usuario_empresa`, `usuario_setor`, `usuario_funcao`, `usuario_grupo`, `usuario_login`, `usuario_senha`, `usuario_confirmesenha`) 
        VALUES (null, :usuario_nome, :usuario_email, :usuario_nascimento, :usuario_empresa, :usuario_setor, :usuario_funcao, :usuario_grupo, :usuario_login, :usuario_senha, :usuario_confirmesenha)";

        $insert = $this->con->prepare($sql);
        $insert->bindValue(':usuario_nome',$ClassUsuario->getNome());
        $insert->bindValue(':usuario_email',$ClassUsuario->getEmail());
        $insert->bindValue(':usuario_nascimento',$ClassUsuario->getData());
        $insert->bindValue(':usuario_empresa',$ClassUsuario->getEmpresa());
        $insert->bindValue(':usuario_setor',$ClassUsuario->getSetor());
        $insert->bindValue(':usuario_funcao',$ClassUsuario->getFuncao());
        $insert->bindValue(':usuario_grupo',$ClassUsuario->getGrupo());
        $insert->bindValue(':usuario_login',$ClassUsuario->getLogin());
        $insert->bindValue(':usuario_senha',$ClassUsuario->getSenha());
        $insert->bindValue(':usuario_confirmesenha',$ClassUsuario->getConfirme());
        $insert->execute();
    }

}


?>