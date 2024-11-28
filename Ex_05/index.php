<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 5</title>
    <link rel="stylesheet" href="style.css"> 
</head>
<body>
    <div class="container">
        <h1>Calculadora Simples</h1>
        <form method="POST" action="">
            <label for="valor1">Digite o primeiro valor:</label>
            <input type="number" id="valor1" name="valor1" value="0" required>

            <label for="valor2">Digite o segundo valor:</label>
            <input type="number" id="valor2" name="valor2" value="0" required>

            <label for="operacao">Escolha a operação:</label>
            <select id="operacao" name="operacao" required>
                <option value="soma">Soma</option>
                <option value="subtração">Subtração</option>
                <option value="divisão">Divisão</option>
                <option value="multiplicação">Multiplicação</option>
            </select>

            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe os valores do formulário
                $valor1 = $_POST["valor1"];
                $valor2 = $_POST["valor2"];
                $operacao = $_POST["operacao"];

                // Utiliza switch case para realizar a operação
                switch ($operacao) {
                    case 'soma':
                        $resultado = $valor1 + $valor2;
                        echo "Resultado da soma: " . $resultado;
                        break;
                    case 'subtração':
                        $resultado = $valor1 - $valor2;
                        echo "Resultado da subtração: " . $resultado;
                        break;
                    case 'divisão':
                        if ($valor2 != 0) {
                            $resultado = $valor1 / $valor2;
                            echo "Resultado da divisão: " . number_format($resultado, 2);
                        } else {
                            echo "Erro: Divisão por zero não é permitida!";
                        }
                        break;
                    case 'multiplicação':
                        $resultado = $valor1 * $valor2;
                        echo "Resultado da multiplicação: " . $resultado;
                        break;
                    default:
                        echo "Operação inválida!";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
