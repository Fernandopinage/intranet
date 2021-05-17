<?php

include_once "../class/ClassFuncao.php";
include_once "../dao/funcaDAO.php";


if(isset($_POST['funcaosalva'])){

    $ClassFuncao = new ClassFuncao();
    $ClassFuncao->setFuncao($_POST['funcao']);
    $ClassFuncao->setDescricao($_POST['descricao']);
    $funcao = new FuncaoDao();
    $funcao->insertFuncao($ClassFuncao);
     
}


?>

<form method="POST" class="form">
    <div class="card" id="card">
        <div class="navbar navbar  navbar-expand-lg" id="title">
            FUNÇÃO
        </div>
    </div>

    <div class="mb-3 row g-2">

        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Função</label>
            <input type="text" class="form-control" id="funcao" name="funcao" placeholder="">
        </div>
        <div class="col-8 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="">
        </div>

    </div>


    <div class="modal-footer">

        <button type="submit" class="btn btn-success" name="funcaosalva">Salvar</button>
    </div>

</form>