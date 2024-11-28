<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 11</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>Contar Caracteres e Imprimir Números</h1>

        <!-- Formulário para o usuário inserir a string -->
        <form method="POST" action="">
            <label for="string">Informe a string:</label>
            <input type="text" name="string" id="string" required><br><br>
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe a string inserida pelo usuário
                $string = $_POST["string"];

                // Remove os espaços da string
                $string_sem_espacos = str_replace(' ', '', $string);

                // Encontrar o número total de caracteres sem contar os espaços
                $total_caracter_sem_espacos = strlen($string_sem_espacos);

                // Usar um loop para imprimir os números de 1 até o total de caracteres sem os espaços
                echo "A string '$string' tem $total_caracter_sem_espacos caracteres (sem contar os espaços).<br>";
                echo "Imprimindo os números entre 1 e $total_caracter_sem_espacos:<br>";

                for ($i = 1; $i <= $total_caracter_sem_espacos; $i++) {
                    echo $i . " ";  // Imprime o número seguido de um espaço
                }
            }
            ?>
        </div>
    </div>
</body>

</html>
