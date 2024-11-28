<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Exercício 2</h1>
        <p>Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo: para A=5 e B=4, a saída deve ser: "4 5".</p>
        <form method="POST" action="">
            <label for="valorA">Digite o valor de A:</label>
            <input type="number" id="valorA" name="valorA" value="0" required>
            
            <label for="valorB">Digite o valor de B:</label>
            <input type="number" id="valorB" name="valorB" value="0" required>
            
            <button type="submit">Exibir Ordem Crescente</button>
        </form>
        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $valueA = $_POST["valorA"];
                $valueB = $_POST["valorB"];
                
                // Verifica qual valor é maior e imprime em ordem crescente
                if ($valueA < $valueB) {
                    echo "<p>Ordem crescente: <strong>$valueA $valueB</strong></p>";
                } else {
                    echo "<p>Ordem crescente: <strong>$valueB $valueA</strong></p>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
