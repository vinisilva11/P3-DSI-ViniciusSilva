<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Calcular o Fatorial de um Número</h1>

        <!-- Formulário para o usuário inserir o valor -->
        <form method="POST" action="">
            <label for="valor">Informe o valor:</label>
            <input type="number" name="valor" id="valor" required>
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe o valor inserido pelo usuário
                $valor = $_POST["valor"];

                // Inicializa a variável fatorial com 1 e a string do cálculo
                $fatorial = 1;
                $calculo = "";

                // Verifica se o valor fornecido é maior ou igual a 0
                if ($valor >= 0) {
                    // Cria o cálculo passo a passo
                    for ($i = $valor; $i >= 1; $i--) {
                        $fatorial *= $i;  // Multiplica o valor do fatorial pelo valor atual
                        $calculo .= $i;  // Adiciona o número ao cálculo

                        // Adiciona o símbolo "×" entre os números, mas não após o último número
                        if ($i > 1) {
                            $calculo .= " * ";
                        }
                    }

                    // Exibe o cálculo detalhado e o resultado
                    echo "$calculo = $fatorial";
                } else {
                    echo "Por favor, insira um número inteiro não negativo.";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>