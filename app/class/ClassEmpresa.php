<?php

class ClassEmpresa
{


    private $id;
    private $razao;
    private $email;
    private $nome;
    private $cnpj;
    private $celular;
    private $telefone;
    private $whatsap;
    private $cep;
    private $uf;
    private $cidade;
    private $logradouro;
    private $bairro;
    private $complemento;


    public function setID($id)
    {
        $this->id = $id;
    }

    public function getID()
    {
        return $this->id;
    }

    public function setRazao($razao)
    {
        $this->razao = $razao;
    }

    public function getRazao()
    {
        return $this->razao;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    public function getCnpj()
    {
        return $this->cnpj;
    }

    public function setCelular($celular)
    {
        $this->celular = $celular;
    }

    public function getCelular()
    {
        return $this->celular;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function setWhatsap($whatsap)
    {
        $this->whatsap = $whatsap;
    }

    public function getWhatsap()
    {
        return $this->whatsap;
    }

    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    public function getCep()
    {
        return $this->cep;
    }

    public function setUF($uf)
    {
        $this->uf = $uf;
    }

    public function getUF()
    {
        return $this->uf;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function setLogradouro($logradouro)
    {
        $this->logradouro = $logradouro;
    }

    public function getLogradouro()
    {
        return $this->logradouro;
    }

    public function setBairroD($bairro)
    {
        $this->bairro = $bairro;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
    }

    public function getComplemento()
    {
        return $this->complemento;
    }
}
