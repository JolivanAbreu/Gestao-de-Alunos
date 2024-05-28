<?php
session_start();

// Verifica se o usuário está logado
if (!isset($_SESSION['nome'])) {
    header("Location: login.php");
    exit();
}

// Função para obter as disciplinas do banco de dados
function obterDisciplinasDoBancoDeDados() {
    // Conexão com o banco de dados (substitua pelos seus dados)
    $conexao = new mysqli("localhost", "root", "", "gestao_escolar");

    // Verifica se houve erro na conexão
    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    // Query SQL para selecionar as disciplinas
    $sql = "SELECT id, nome FROM disciplinas";

    // Executa a query
    $resultado = $conexao->query($sql);

    // Verifica se retornou resultados
    if ($resultado->num_rows > 0) {
        // Array para armazenar as disciplinas
        $disciplinas = array();

        // Loop pelos resultados e armazena as disciplinas no array
        while ($row = $resultado->fetch_assoc()) {
            $disciplina = array(
                'id' => $row['id'],
                'nome' => $row['nome']
            );
            $disciplinas[] = $disciplina;
        }

        // Fecha a conexão
        $conexao->close();

        // Retorna o array de disciplinas
        return $disciplinas;
    } else {
        echo "Nenhuma disciplina encontrada.";
    }
}

// Chamada da função para obter as disciplinas
$disciplinas = obterDisciplinasDoBancoDeDados();

// Retorna as disciplinas em formato JSON
echo json_encode($disciplinas);
?>
