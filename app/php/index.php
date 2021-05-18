<?php 
include_once "../class/ClassIndex.php";
include_once "../dao/indexDAO.php";
if(isset($_POST['loginentrar'])){

    $ClassIndex = new ClassIndex();
    $ClassIndex->setLogin($_POST['login']);
    $ClassIndex->setSenha($_POST['password']);
    $index = new Index();
    $index->selectIndex($ClassIndex);

}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/index.css">
    <title>Intranet</title>
</head>

<body>
    <div class="container">

        <form class="form-signin" method="POST">
            <div class="text-center" id="logo">
                <h2 class="form-signin-heading">ÁREA RESTRITA</h2>
                <hr>
            </div>
            <input type="text" class="form-control" name="login" placeholder="Email ou CPF:" required="" autofocus="" />
            <br>
            <input type="password" class="form-control" name="password" placeholder="Senha:" required="" />
            <br>
            <div class="text-left" id="cadastro">

            </div>

            <div class="d-grid gap-2">

            <input type="submit" class="btn" name="loginentrar" value="Entrar">
            </div>

        </form>

    </div>
</body>

</html>