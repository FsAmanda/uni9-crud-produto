<?php include 'conexao.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $sql = "INSERT INTO disciplinas (nome) VALUES (?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nome]);
    echo "Disciplina adicionada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Adicionar Disciplina</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Adicionar Nova Disciplina</h1>
    <form method="post">
        Nome: <input type="text" name="nome" required><br>
        <input type="submit" value="Adicionar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>