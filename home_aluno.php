<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home_aluno.css">
    <title>Document</title>
</head>

<body>
<header id="cabeçalho">
        <div id="cab">
            <h1>Portal do Aluno</h1>
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
                    <a class="link-offset-2 link-underline link-underline-opacity-0" href="login.php">Sair</a>
                </button>
            </div>
        </div>
    <main>
        <section id="notas">
            <h2>Notas</h2>
            <div id="notas-content">
                <!-- Aqui serão exibidas as notas do aluno -->
            </div>
        </section>
        <section id="disciplinas">
            <h2>Disciplinas</h2>
            <div id="disciplinas-content">
                <!-- Aqui serão exibidas as disciplinas cadastradas do aluno -->
            </div>
        </section>
        <section id="frequencia">
            <h2>Frequência</h2>
            <div id="frequencia-content">
                <!-- Aqui será exibida a frequência do aluno -->
            </div>
        </section>
    </main>
    <script src="aluno.js"></script>
</body>

</html>