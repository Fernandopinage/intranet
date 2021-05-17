<?php 

include_once "../dao/setorDAO.php";
include_once "../class/ClassSetor.php";
if(isset($_POST['setorsalva'])){

    $ClassSetor = new ClassSetor();
    $ClassSetor->setSetor($_POST['setor']);
    $ClassSetor->setDescricao($_POST['descricao']);
    $setor = new SetorDao();
    $setor->insertSetor($ClassSetor);
}


?>
<form method="POST" class="form">
    <div class="card" id="card">
        <div class="navbar navbar  navbar-expand-lg" id="title">
            SETOR
        </div>
    </div>

    <div class="mb-3 row g-2">

        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Setor</label>
            <input type="text" class="form-control" id="setor" name="setor" placeholder="">
        </div>
        <div class="col-8 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="">
        </div>

    </div>


    <div class="modal-footer">

        <button type="submit" class="btn btn-success" name="setorsalva">Salvar</button>
    </div>

</form>