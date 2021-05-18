<?php

include_once "../class/ClassIndex.php";
include_once "../dao/DAO.php";
include_once "../class/ClassUsuario.php";
class Index extends Dao
{

    public function index()
    {

        header("location: ../intranet/app/php/index.php");
    }

    public function selectIndex(ClassIndex $ClassIndex)
    {

        $sql = "SELECT * FROM `usuario` WHERE  usuario_email = :usuario_email  and usuario_senha = :usuario_senha";
        $select = $this->con->prepare($sql);
        $select->bindValue(':usuario_email', $ClassIndex->getLogin());
        $select->bindValue(':usuario_senha', $ClassIndex->getSenha());
        $select->execute();
        $_SESSION['valor'] = array();

        if ($row = $select->fetch(PDO::FETCH_ASSOC)) {

            $_SESSION['valor'] = array(
                /*
               'id' => $row['CLIENTE_ID'],
               'cpf' => $row['CLIENTE_CPF'],
               'razao' => $row['CLIENTE_NOME'],
               'nome' => $row['CLIENTE_NOME'],
               'email' => $row['CLIENTE_EMAIL']
            */);
        }
    }
}
