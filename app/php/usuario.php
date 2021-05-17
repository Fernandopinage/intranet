<?php
include_once "../class/ClassUsuario.php";
include_once "../dao/usuarioDAO.php";
$ClassUsuario = new ClassUsuario();
$usuario = new UsuarioDao();

if (isset($_POST['enviar'])) {

    if ($_POST['senha'] === $_POST['confirmesenha']) {

        $ClassUsuario->setNome($_POST['nome']);
        $ClassUsuario->setEmail($_POST['email']);
        $ClassUsuario->setData($_POST['datanascimento']);
        $ClassUsuario->setEmpresa($_POST['empresa']);
        $ClassUsuario->setSetor($_POST['setor']);
        $ClassUsuario->setFuncao($_POST['funcao']);
        $ClassUsuario->setGrupo($_POST['grupo']);
        $ClassUsuario->setLogin($_POST['login']);
        $ClassUsuario->setSenha($_POST['senha']);
        $ClassUsuario->setConfirme($_POST['confirmesenha']);
        $usuario->insertUsuario($ClassUsuario);
    } else {
        echo "senha incorretar";
    }
}

$empresas =  $usuario->listarEmpresa();
$setores = $usuario->listarSetor();
$funcaes = $usuario->listarFuncao();
$grupos = $usuario->listarGrupo();

?>
<form method="POST" class="form">
    <div class="card" id="card">
        <div class="navbar navbar  navbar-expand-lg" id="title">
            NOVO USUÁRIO
        </div>
    </div>

    <div class="mb-3 row g-2">

        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Nome</label>
            <input type="text" class="form-control" id="Nome" name="nome" placeholder="">
        </div>
        <div class="col-5 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <input type="text" class="form-control" id="Email" name="email" placeholder="">
        </div>
        <div class="col-3 input-group-sm">
            <label for="staticEmail" class="col-sm-6 col-form-label">Data Nascimento</label>
            <input type="date" class="form-control" id="datanascimento" name="datanascimento" placeholder="">
        </div>
    </div>

    <div class="mb-3 row g-2">

        <div class="col-3 input-group-sm">
            <label for="staticEmail" class="col-sm-6 col-form-label">Empresa </label>
            <select id="empresa" name="empresa" class="form-select">
                <option value=""> </option>
                <?php
                foreach ($empresas as $empresa) {
                ?>
                    <option value="<?php echo $empresa->getID(); ?>"><?php echo $empresa->getRazao(); ?></option>

                <?php
                }
                ?>
            </select>
        </div>

        <div class="col-3 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Setor</label>
            <select id="setor" name="setor" class="form-select">
                <option value=""></option>
                <?php

                foreach ($setores as $setores) {
                ?>
                    <option value="<?php echo $setores->getID(); ?>"><?php echo $setores->getSetor(); ?> </option>
                <?php
                }

                ?>
            </select>
        </div>
        <div class="col-3 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Função</label>
            <select id="funcao" name="funcao" class="form-select">
                <option></option>
                <?php

                foreach ($funcaes as $funcaes) {
                ?>
                    <option value="<?php echo $funcaes->getID(); ?>"><?php echo $funcaes->getFuncao(); ?> </option>
                <?php
                }


                ?>
            </select>
        </div>
        <div class="col-3 input-group-sm">
            <label for="staticEmail" class="col-sm-6 col-form-label">Grupo/Subgrupo </label>
            <select id="grupo" name="grupo" class="form-select">
                <option></option>
                <?php

                foreach ($grupos as $grupos) {
                ?>
                    <option value="<?php echo $grupos->getID(); ?>"><?php echo $grupos->getGrupo(); ?> </option>
                <?php
                }

                ?>
            </select>
        </div>
    </div>

    <div class="mb-5 row g-2">
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Login</label>
            <input type="text" class="form-control" id="Login" name="login" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Senha</label>
            <input type="password" class="form-control" id="Senha" name="senha" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-4 col-form-label">Confirma Senha</label>
            <input type="password" class="form-control" id="confirmesenha" name="confirmesenha" placeholder="">
        </div>
    </div>
    <div class="modal-footer">

        <button type="submit" class="btn btn-success" name="enviar">Salvar</button>
    </div>

</form>