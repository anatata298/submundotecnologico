
<?php
include "conecta.php";

try {
    $sql = "SELECT nome, cpf FROM aluno";

    $stmt = $conexao->prepare($sql);
    $stmt->execute();

    $alunos = $stmt->fetchAll();

} catch (PDOException $e) {
    die("Erro ao consultar os alunos.");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Alunos</title>
</head>
<body>

    <h2>Lista de Alunos</h2>

    <table border="1" cellpadding="10">
        <tr>
            <th>Nome</th>
            <th>CPF</th>
        </tr>

        <?php foreach ($alunos as $aluno): ?>
        <tr>
            <td><?= htmlspecialchars($aluno['nome']) ?></td>
            <td><?= htmlspecialchars($aluno['cpf']) ?></td>
        </tr>
        <?php endforeach; ?>

    </table>

    <br>
    <a href="index.php">Voltar ao login</a>

</body>
</html>
