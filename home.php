<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <title>Tela Inicial</title>
</head>

<body>
    <header id="cabeçalho">
        <div id="cab">
            <h1>SGE - Sistema de Gestão Escolar</h1>
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
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="index.php">Sair</a>
                </button>
            </div>
        </div>
    </header>

    <div class="d-flex justify-content-evenly">
        <div class="opcoes disciplinas">
            <h2>Disciplinas</h2>
            <p>Texto antes do input</p>
            <a href="./disciplina.php"> <input type="submit" class="button" value="Entrar"/></a>
        </div>

        <div class="opcoes alunos">
            <h2>Alunos</h2>
            <p>Texto antes do input</p>
            <a href="./aluno.php"> <input type="submit" class="button" value="Entrar"/></a>
        </div>
    </div>
</body>

</html>