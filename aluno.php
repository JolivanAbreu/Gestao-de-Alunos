<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/disciplina.css">
    <title>Document</title>
</head>

<body>
    <header id="cabeçalho">
        <div id="cab">
            <h1>Alunos</h1>
            <div class="Move">
                <div id="usuario">
                    <p href="login.php">
                    <p id="nome">
                    <h2><?php
                        session_start();
                        echo $_SESSION['nome']
                        ?></h2>
                    </p>
                    </p>
                </div>
            </div>
            <div id="sair">
                <button id="cadastrarTurma">
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="home.php">Sair</a>
                </button>
            </div>
        </div>
    </header>
</body>

</html>