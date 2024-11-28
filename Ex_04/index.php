<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 4</title>
    <link rel="stylesheet" href="style.css"> <!-- Linkando ao arquivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Qual é o mês?</h1>
        <form method="POST" action="">
            <label for="numero">Digite um número de 1 a 12:</label>
            <input type="number" id="numero" name="numero" required>
            <button type="submit">Ver Mês</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe o número do mês
                $numero = $_POST["numero"];

                // Define os meses em um array
                $meses = array(
                    1 => "Janeiro", 
                    2 => "Fevereiro", 
                    3 => "Março", 
                    4 => "Abril", 
                    5 => "Maio", 
                    6 => "Junho", 
                    7 => "Julho", 
                    8 => "Agosto", 
                    9 => "Setembro", 
                    10 => "Outubro", 
                    11 => "Novembro", 
                    12 => "Dezembro"
                );

                // Verifica se o número está no intervalo de 1 a 12
                if ($numero >= 1 && $numero <= 12) {
                    // Exibe o mês correspondente
                    echo "Mês: " . $meses[$numero];
                } else {
                    // Exibe a mensagem de erro caso o número seja fora do intervalo
                    echo "<p class='red'>Não existe mês com este número.";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
