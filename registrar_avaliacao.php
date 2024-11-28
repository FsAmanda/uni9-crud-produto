<?php include 'conexao.php'; ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $aluno_id = $_POST['aluno_id'];
    $disciplina_id = $_POST['disciplina_id'];
    $nota = $_POST['nota'];

    $sql = "INSERT INTO avaliacoes (aluno_id, disciplina_id, nota) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$aluno_id, $disciplina_id, $nota]);
    echo "Avaliação registrada com sucesso!";
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Registrar Avaliação</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Registrar Avaliação</h1>
    <form method="post">
        Selecione o Aluno:
        <select name="aluno_id">
            <?php
            $alunos = $pdo->query("SELECT * FROM alunos")->fetchAll();
            foreach ($alunos as $aluno) {
                echo "<option value='{$aluno['id']}'>{$aluno['nome']}</option>";
            }
            ?>
        </select><br>

        Selecione a Disciplina:
        <select name="disciplina_id">
            <?php
            $disciplinas = $pdo->query("SELECT * FROM disciplinas")->fetchAll();
            foreach ($disciplinas as $disciplina) {
                echo "<option value='{$disciplina['id']}'>{$disciplina['nome']}</option>";
            }
            ?>
        </select><br>

        Nota: <input type="number" step="0.01" name="nota" required><br>
        <input type="submit" value="Registrar">
    </form>
    <a href="index.php">Voltar</a>
</body>
</html>