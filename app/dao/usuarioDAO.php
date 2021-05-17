<?php 

include "../dao/DAO.php";
include_once "../class/ClassUsuario.php";
include_once "../class/ClassEmpresa.php";
include_once "../class/ClassSetor.php";
include_once "../class/ClassFuncao.php";
include_once "../class/CLassGrupo.php";

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

    public function listarEmpresa(){

        $sql = "SELECT * FROM `empresa` WHERE 1";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $ClassEmpresa = new ClassEmpresa();
            $ClassEmpresa->setID($row['empresa_id']);
            $ClassEmpresa->setRazao($row['empresa_razao']);
            $ClassEmpresa->setEmail($row['empresa_email']);
            $ClassEmpresa->setNome($row['empresa_nome']);
            $ClassEmpresa->setCnpj($row['empresa_cnpj']);
            $ClassEmpresa->setCelular($row['empresa_celular']);
            $ClassEmpresa->setTelefone($row['empresa_telefone']);
            $ClassEmpresa->setWhatsap($row['empresa_whatsap']);
            $ClassEmpresa->setCep($row['empresa_cep']);
            $ClassEmpresa->setUF($row['empresa_uf']);
            $ClassEmpresa->setCidade($row['empresa_cidade']);
            $ClassEmpresa->setLogradouro($row['empresa_logradouro']);
            $ClassEmpresa->setBairroD($row['empresa_bairro']);
            $ClassEmpresa->setComplemento($row['empresa_complemento']);

            $array[] = $ClassEmpresa;
        }

        return $array;

    }
    public function listarSetor(){

        $sql =  "SELECT * FROM `setor` WHERE 1";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();
        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $ClassSetor = new ClassSetor();
            $ClassSetor->setID($row['setor_id']);
            $ClassSetor->setSetor($row['setor_nome']);
            $ClassSetor->setDescricao($row['setor_descricao']);

            $array[] =  $ClassSetor;
        }
        return $array;
    }

    public function listarFuncao(){

        $sql =  "SELECT * FROM `funcao` WHERE 1";

        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();

        while($row = $select->fetch(PDO::FETCH_ASSOC)){

            $ClassFuncao = new ClassFuncao();
            $ClassFuncao->setID($row['funcao_id']);
            $ClassFuncao->setFuncao($row['funcao_nome']);
            $ClassFuncao->setDescricao($row['funcao_descricao']);
            $array[] = $ClassFuncao;


        }

        return $array;
    }

    public function listarGrupo(){

        $sql = "SELECT * FROM `grupo` WHERE 1";
        $select = $this->con->prepare($sql);
        $select->execute();
        $array = array();

        while($row = $select->fetch(PDO::FETCH_ASSOC))
        {

            $ClassGrupo = new ClassGrupo();
            $ClassGrupo->setID($row['grupo_id']);
            $ClassGrupo->setGrupo($row['grupo_nome']);
            $ClassGrupo->setDescricao($row['grupo_descricao']);
            $array[] = $ClassGrupo;
            
        }
            return $array;
    }

}
