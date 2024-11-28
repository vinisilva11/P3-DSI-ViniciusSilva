<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 8</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Imprimir Números de 0 até o Valor Informado</h1>

        <!-- Formulário para o usuário inserir o valor -->
        <form method="POST" action="">
            <label for="valor">Informe o valor:</label>
            <input type="number" name="valor" id="valor" required>
            <button type="submit">Enviar</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe o valor inserido pelo usuário
                $valor = $_POST["valor"];

                // Imprime os números de 0 até o valor inserido
                $contador = 0;
                while ($contador <= $valor) {
                    echo $contador . " ";
                    $contador++;
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
