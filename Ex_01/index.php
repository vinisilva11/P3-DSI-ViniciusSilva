<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 1</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Exercício 1</h1>
        <p>Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".</p>
        <form method="POST" action="">
            <label for="numero">Digite um número:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Verificar</button>
        </form>
        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $numero = $_POST["numero"];

                // Verifica se o número é positivo, negativo ou igual a zero
                if ($numero > 0) {
                    echo "<p class='positivo'>Valor Positivo</p>";
                } elseif ($numero < 0) {
                    echo "<p class='negativo'>Valor Negativo</p>";
                } else {
                    echo "<p class='zero'>Valor Igual a Zero</p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
