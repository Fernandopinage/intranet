<?php 
include_once "../class/ClassEmpresa.php";
include_once "../dao/empresaDAO.php";

if(isset($_POST['clientesalva'])){

    $ClassEmpresa = new ClassEmpresa();

    $ClassEmpresa->setRazao($_POST['razao']);
    $ClassEmpresa->setEmail($_POST['email']);
    $ClassEmpresa->setNome($_POST['nome']);
    $ClassEmpresa->setCnpj($_POST['cnpj']);
    $ClassEmpresa->setCelular($_POST['celular']);
    $ClassEmpresa->setTelefone($_POST['telefone']);
    $ClassEmpresa->setWhatsap($_POST['whatsap']);
    $ClassEmpresa->setCep($_POST['cep']);
    $ClassEmpresa->setUF($_POST['uf']);
    $ClassEmpresa->setCidade($_POST['cidade']);
    $ClassEmpresa->setLogradouro($_POST['rua']);
    $ClassEmpresa->setBairroD($_POST['bairro']);
    $ClassEmpresa->setComplemento($_POST['complemento']);
    $empresa = new EmpresaDAO();
    $empresa->insertEmpresa($ClassEmpresa);
}


?>


<form  method="POST" class="form">
    <div class="card" id="card">
        <div class="navbar navbar  navbar-expand-lg" id="title">
            EMPRESA
        </div>
    </div>

    <div class="mb-2 row g-2">

        <div class="col-12 input-group-sm">
            <label for="staticEmail" class="col-sm-5 col-form-label">Razão Social</label>
            <input type="text" class="form-control" id="razao" name="razao" placeholder="">
        </div>

    </div>
    <div class="mb-2 row g-2">
        <div class="col-5 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-4 col-form-label">Nome Reduzido</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="">
        </div>
        <div class="col-3 input-group-sm">
            <label for="staticEmail" class="col-sm-5 col-form-label">CNPJ</label>
            <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="">
        </div>

    </div>

    <div class="mb-2 row g-2">
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Celular</label>
            <input type="text" class="form-control" id="celular" name="celular" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Telefone</label>
            <input type="text" class="form-control" id="telefone" name="telefone" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Whatsap</label>
            <input type="text" class="form-control" id="whatsap" name="whatsap" placeholder="">
        </div>

    </div>

    <div class="mb-2 row g-2">
        <div class="col-2 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" placeholder="">
        </div>
        <div class="col-2 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">UF</label>
            <input type="text" class="form-control" id="uf" name="uf" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" placeholder="">
        </div>
        <div class="col-4 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Logradouro</label>
            <input type="text" class="form-control" id="rua" name="rua" placeholder="">
        </div>

    </div>
    <div class="mb-5 row g-2">
        <div class="col-6 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" placeholder="">
        </div>
        <div class="col-6 input-group-sm">
            <label for="staticEmail" class="col-sm-2 col-form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" placeholder="">
        </div>
    </div>


    <div class="modal-footer">

        <button type="submit" class="btn btn-success" name="clientesalva">Salvar</button>
    </div>

</form>

<!-- Adicionando JQuery -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Adicionando Javascript -->
<script>
    $(document).ready(function() {

        function limpa_formulário_cep() {
            // Limpa valores do formulário de cep.
            $("#rua").val("");
            $("#bairro").val("");
            $("#cidade").val("");
            $("#uf").val("");
            $("#ibge").val("");
        }

        //Quando o campo cep perde o foco.
        $("#cep").blur(function() {

            //Nova variável "cep" somente com dígitos.
            var cep = $(this).val().replace(/\D/g, '');

            //Verifica se campo cep possui valor informado.
            if (cep != "") {

                //Expressão regular para validar o CEP.
                var validacep = /^[0-9]{8}$/;

                //Valida o formato do CEP.
                if (validacep.test(cep)) {

                    //Preenche os campos com "..." enquanto consulta webservice.
                    $("#rua").val("...");
                    $("#bairro").val("...");
                    $("#cidade").val("...");
                    $("#uf").val("...");
                    $("#ibge").val("...");

                    //Consulta o webservice viacep.com.br/
                    $.getJSON("https://viacep.com.br/ws/" + cep + "/json/?callback=?", function(dados) {

                        if (!("erro" in dados)) {
                            //Atualiza os campos com os valores da consulta.
                            $("#rua").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                            $("#ibge").val(dados.ibge);
                        } //end if.
                        else {
                            //CEP pesquisado não foi encontrado.
                            limpa_formulário_cep();
                            alert("CEP não encontrado.");
                        }
                    });
                } //end if.
                else {
                    //cep é inválido.
                    limpa_formulário_cep();
                    alert("Formato de CEP inválido.");
                }
            } //end if.
            else {
                //cep sem valor, limpa formulário.
                limpa_formulário_cep();
            }
        });
    });
</script>