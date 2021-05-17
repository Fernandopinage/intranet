<?php 

include_once "../class/CLassGrupo.php";
if(isset($_POST['gruposalva'])){

    $ClassGrupo = new ClassGrupo();
    $ClassGrupo->setGrupo($_POST['grupo']);
    $ClassGrupo->setDescricao($_POST['descricao']);

}


?>
<form action="" class="form">
    <div class="card" id="card">
        <div class="navbar navbar  navbar-expand-lg" id="title">
            GRUPO
        </div>
    </div>

    <div class="mb-3 row g-2">

        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Grupo</label>
            <input type="text" class="form-control" id="grupo" placeholder="">
        </div>
        <div class="col-8 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" placeholder="">
        </div>

    </div>


    <div class="modal-footer">

        <button type="submit" class="btn btn-success" name="gruposalva">Salvar</button>
    </div>

</form>