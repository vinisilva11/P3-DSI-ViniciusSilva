<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Exercício 3</h1>
        <p>Insira as notas para calcular a média final. A média deve ser maior ou igual a 6 para o aluno ser aprovado.</p>
        <form method="POST" action="">
            <label for="nota1">Nota 1:</label>
            <input type="number" id="nota1" name="nota1" value="0" step="0.01" required>

            <label for="nota2">Nota 2:</label>
            <input type="number" id="nota2" name="nota2" value="0" step="0.01" required>

            <label for="nota3">Nota 3:</label>
            <input type="number" id="nota3" name="nota3" value="0" step="0.01" required>

            <button type="submit">Calcular Média</button>
        </form>
        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe as notas do formulário
                $nota1 = $_POST["nota1"];
                $nota2 = $_POST["nota2"];
                $nota3 = $_POST["nota3"];

                // Insere as notas em um array
                $notas = array($nota1, $nota2, $nota3);

                // Calcula a média final
                $media = array_sum($notas) / count($notas);

                // Exibe a média final
                echo "<p>Média Final: <strong>" . number_format($media, 2) . "</strong></p>";

                // Verifica se o aluno foi aprovado ou reprovado
                if ($media >= 6) {
                    echo "<p>Status: <strong style='color: green;'>Aprovado</strong></p>";
                } else {
                    echo "<p>Status: <strong style='color: red;'>Reprovado</strong></p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
