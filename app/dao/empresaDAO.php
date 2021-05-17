<?php 
include_once "../dao/DAO.php";
include_once "../class/ClassEmpresa.php";


Class EmpresaDAO extends DAO{


    public function insertEmpresa(ClassEmpresa $ClassEmpresa){

        $sql = "INSERT INTO `empresa`(`empresa_id`, `empresa_razao`, `empresa_email`, `empresa_nome`, `empresa_cnpj`, `empresa_celular`, `empresa_telefone`, `empresa_whatsap`, `empresa_cep`, `empresa_uf`, `empresa_cidade`, `empresa_logradouro`, `empresa_bairro`, `empresa_complemento`)
         VALUES (null, :empresa_razao, :empresa_email, :empresa_nome, :empresa_cnpj, :empresa_celular, :empresa_telefone, :empresa_whatsap, :empresa_cep, :empresa_uf, :empresa_cidade, :empresa_logradouro, :empresa_bairro, :empresa_complemento)";

         $insert = $this->con->prepare($sql);
         $insert->bindValue(":empresa_razao",$ClassEmpresa->getRazao());
         $insert->bindValue(":empresa_email",$ClassEmpresa->getEmail());
         $insert->bindValue(":empresa_nome",$ClassEmpresa->getNome());
         $insert->bindValue(":empresa_cnpj",$ClassEmpresa->getCnpj());
         $insert->bindValue(":empresa_celular",$ClassEmpresa->getCelular());
         $insert->bindValue(":empresa_telefone",$ClassEmpresa->getTelefone());
         $insert->bindValue(":empresa_whatsap",$ClassEmpresa->getWhatsap());
         $insert->bindValue(":empresa_cep",$ClassEmpresa->getCep());
         $insert->bindValue(":empresa_uf",$ClassEmpresa->getUF());
         $insert->bindValue(":empresa_cidade",$ClassEmpresa->getCidade());
         $insert->bindValue(":empresa_logradouro",$ClassEmpresa->getLogradouro());
         $insert->bindValue(":empresa_bairro",$ClassEmpresa->getBairro());
         $insert->bindValue(":empresa_complemento",$ClassEmpresa->getComplemento());
         $insert->execute();
    }
}


?>