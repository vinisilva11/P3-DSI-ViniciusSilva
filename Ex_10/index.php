<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 10</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Imprimir Valores Intermediários</h1>

        <!-- Formulário para o usuário inserir os dois valores -->
        <form method="POST" action="">
            <label for="primeiroValor">Primeiro Valor:</label>
            <input type="number" name="primeiroValor" id="primeiroValor" required><br><br>

            <label for="segundoValor">Segundo Valor:</label>
            <input type="number" name="segundoValor" id="segundoValor" required><br><br>

            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe os valores inseridos pelo usuário
                $primeiroValor = $_POST["primeiroValor"];
                $segundoValor = $_POST["segundoValor"];

                // Verifica se o primeiro valor é menor que o segundo
                if ($primeiroValor < $segundoValor) {
                    // Imprime os valores intermediários
                    for ($i = $primeiroValor + 1; $i < $segundoValor; $i++) {
                        echo $i . " ";  // Imprime o valor seguido de um espaço
                    }
                } else {
                    echo "<p class='red'>O primeiro valor têm que ser menor que o segundo valor.</p>";
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
