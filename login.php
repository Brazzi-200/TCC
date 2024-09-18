<?php
session_start();
if (isset($_SESSION['email-logado'])) {
    header("Location: sistema.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Home</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="centro">
        <div class="box-center">
            <form>
                <h1 class="titulo">LOGIN</h1>
                <p>Email<a class="aster">*</a></p>
                <input type="email" class="email" />
                <p>Senha<a class="aster">*</a></p>
                <input type="password" class="senha" />
                <p class="resultado"></p>
                <p class="tem">Não tem cadastro? <a class="click" href="index.html">Clique aqui</a></p>
                <input type="submit" value="CADASTRE-SE" class="cadastro">
            </form>
        </div>
    </div>
</body>
<script src="js/jquery/jquery-3.7.1.min.js"></script>
<script src="js/login.js"></script>

</html>