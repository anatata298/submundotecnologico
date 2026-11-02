
<?php
// Dados de conexão com o banco MySQL
$host = "sql103.infinityfree.com";
$banco = "if0_43306668_SUBMUNDOTECNOLOGICO";
$usuario = "if0_43306668";
$senha = "Yakuzayakuzac10";

try {
    $conexao = new PDO(
        "mysql:host=$host;dbname=$banco;charset=utf8mb4",
        $usuario,
        $senha
    );

    $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $conexao->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

} catch (PDOException $e) {
    die("Não foi possível conectar ao banco de dados.");
}
?>
