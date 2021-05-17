<?php 

include_once "../class/ClassSubgrupo.php";
if(isset($_POST['subsalva'])){

    $ClassSubgrupo = new ClassSubgrupo();
    $ClassSubgrupo->setSubgrupoo($_POST['subgrupo']);
    $ClassSubgrupo->setDescricao($_POST['descricao']);
}

?>
<form action="" class="form">
    <div class="card" id="card">
        <div class="navbar navbar  navbar-expand-lg" id="title">
            SUBGRUPO
        </div>
    </div>

    <div class="mb-3 row g-2">

        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">SUBGRUPO</label>
            <input type="text" class="form-control" id="subgrupo" name="subgrupo" placeholder="">
        </div>
        <div class="col-8 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" placeholder="">
        </div>

    </div>


    <div class="modal-footer">

        <button type="submit" class="btn btn-success" name="subsalva">Salvar</button>
    </div>

</form>