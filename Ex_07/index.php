<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Calcule o salário reajustado</h1>
        <form method="POST" action="">
            <label for="salario">Salário do funcionário:</label>
            <input type="number" id="salario" name="salario" value="0" required>
            
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe o salário do funcionário
                $salario = $_POST["salario"];

                // Verifica o valor do salário e aplica o reajuste
                if ($salario <= 300) {
                    // Reajuste de 50% para salários até 300
                    $reajuste = 0.50;
                } else {
                    // Reajuste de 30% para salários maiores que 300
                    $reajuste = 0.30;
                }

                // Calcula o salário reajustado
                $salarioReajustado = $salario + ($salario * $reajuste);

                // Exibe o salário original e reajustado
                echo "Salário original: R$ " . number_format($salario, 2, ',', '.') . "<br>";
                echo "Salário reajustado: R$ " . number_format($salarioReajustado, 2, ',', '.');
            }
            ?>
        </div>
    </div>
</body>
</html>
