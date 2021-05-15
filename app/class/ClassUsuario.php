<?php

Class ClassUsuario{

    private $id;
    private $nome;
    private $email;
    private $datanascimento;
    private $empresa;
    private $setor;
    private $funcao;
    private $grupo;
    private $login;
    private $senha;
    private $confirmesenha;


    public function getID()
    {

        return $this->id;
    }
    public function setID($id)
    {

        $this->id = $id;
    }

    public function getNome()
    {

        return $this->nome;
    }
    public function setNome($nome)
    {

        $this->nome = $nome;
    }

    public function getEmail()
    {

        return $this->email;
    }
    public function setEmail($email)
    {

        $this->email = $email;
    }
    public function getData()
    {

        return $this->datanascimento;
    }
    public function setData($datanascimento)
    {

        $this->datanascimento = $datanascimento;
    }
    public function getEmpresa()
    {

        return $this->empresa;
    }
    public function setEmpresa($empresa)
    {

        $this->empresa = $empresa;
    }
    public function getSetor()
    {

        return $this->setor;
    }
    public function setSetor($setor)
    {

        $this->setor = $setor;
    }
    public function getFuncao()
    {

        return $this->funcao;
    }
    public function setFuncao($funcao)
    {

        $this->funcao = $funcao;
    }
    public function getGrupo()
    {

        return $this->grupo;
    }
    public function setGrupo($grupo)
    {

        $this->grupo = $grupo;
    }
    public function getLogin()
    {

        return $this->login;
    }
    public function setLogin($login)
    {

        $this->login = $login;
    }
    public function getSenha()
    {

        return $this->senha;
    }
    public function setSenha($senha)
    {

        $this->senha = $senha;
    }
    public function getConfirme()
    {

        return $this->confirmesenha;
    }
    public function setConfirme($confirmesenha)
    {

        $this->confirmesenha = $confirmesenha;
    }

}

?>
