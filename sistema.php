<?php
session_start();
if (!isset($_SESSION['email-logado'])) {
    header("Location: login.php");
}
#mudar o position de absolute para 
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-Vindo!</title>
    <style>
body {
    margin: 0;
    padding: 0;
    background-color: #5F4E94;
    font-family: "Josefin Sans", sans-serif;
}

    header{
    background-color: #211b35;
    color: white;
    top: 0;
}

.content {
    margin-top: 5rem ; /* Mesma altura do cabeçalho */
    margin-bottom: 5rem; /* Mesma altura do rodapé */
    padding: 20px;
}
footer{
    background-color: grey;
    bottom: 0;
    box-shadow: 0px -10px 10px 0px rgba(0,0,0,0.7);
}

header, footer{
    display: flex;
    justify-content: space-around;
    align-items: center;
    height: 5rem;
    position: fixed;  
    width: 100%;
}
</style>
</head>

<body>
    <header>
    <h1>Bem-Vindo!</h1>
    <button id="logoutBtn">Derrubar Sessão</button>
    </header>
    
    <div class="content">
    aqui vai ficar o conteudo da pagina.

    </div>


    <script>
        document.getElementById("logoutBtn").addEventListener("click", function () {
            if (confirm("Tem certeza que deseja encerrar a sessão?")) {
                fetch('logout.php', {
                    method: 'POST',
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status === "success") {
                        alert(data.message);
                        window.location.href = "login.php";
                    } else {
                        alert("Erro ao encerrar sessão.");
                    }
                })
                .catch(error => console.error("Erro:", error));
            }
        });
    </script>
    <footer>sistema de gerenciamento de condominio&copy;</footer>
</body>

</html>