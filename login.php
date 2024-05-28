<?php 

session_start();

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gestao_escolar";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Função para limpar os dados de entrada
function limpar_dados($dados) {
    $dados = trim($dados);
    $dados = stripslashes($dados);
    $dados = htmlspecialchars($dados);
    return $dados;
}

// Sessão de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = limpar_dados($_POST['email']);
    $senha = limpar_dados($_POST['senha']);

    // Verificar se é professor
    $sql_professor = "SELECT * FROM professor WHERE email='$email' AND senha='$senha'";
    $result_professor = $conn->query($sql_professor);

    if ($result_professor->num_rows == 1) {
        $row = $result_professor->fetch_assoc();
        $_SESSION['id_professor'] = $row['id_professor'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['tipo'] = 'professor'; // Adiciona o tipo de usuário como professor
        header("Location:../home.php");
        exit();
    }

    // Verificar se é aluno
    $sql_aluno = "SELECT * FROM aluno WHERE email='$email' AND senha='$senha'";
    $result_aluno = $conn->query($sql_aluno);

    if ($result_aluno->num_rows == 1) {
        $row = $result_aluno->fetch_assoc();
        $_SESSION['id_aluno'] = $row['id_aluno'];
        $_SESSION['nome'] = $row['nome'];
        $_SESSION['tipo'] = 'aluno'; // Adiciona o tipo de usuário como aluno
        header("Location:../home_aluno.php");
        exit();
    }

    // Caso nenhum usuário seja encontrado
    echo "Login inválido";
}

// Seção de logout
if (isset($_GET['logout'])) {
    session_destroy();
    header("Location:../index.php");
    exit();
}


?>