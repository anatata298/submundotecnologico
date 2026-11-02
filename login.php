
<?php
include "conecta.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $cpf = trim($_POST['cpf'] ?? '');
    $senha = $_POST['senha'] ?? '';

    if ($cpf == '' || $senha == '') {
        exit("Preencha o CPF e a senha.");
    }

    try {
        $sql = "SELECT * FROM aluno
                WHERE cpf = :cpf AND senha = :senha";

        $stmt = $conexao->prepare($sql);

        $stmt->execute([
            ':cpf' => $cpf,
            ':senha' => $senha
        ]);

        $linha = $stmt->fetch();

        if ($linha) {
            echo "Login bem-sucedido!";
            echo "<br><a href='lista.php'>Ver lista de alunos</a>";
        } else {
            echo "CPF ou senha incorretos.";
        }

    } catch (PDOException $e) {
        echo "Erro ao verificar o login.";
    }

} else {
    echo "Acesse o formulário de login.";
}
?>
