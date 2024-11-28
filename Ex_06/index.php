<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 6</title>
    <link rel="stylesheet" href="style.css"> <!-- Linkando ao arquivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Calcule o valor com desconto</h1>
        <form method="POST" action="">
            <label for="valorCompra">Valor da compra:</label>
            <input type="number" id="valorCompra" name="valorCompra" value="0" required>
            
            <label for="codigoComprador">Código do comprador:</label>
            <select id="codigoComprador" name="codigoComprador" required>
                <option value="1">Cliente Comum</option>
                <option value="2">Funcionário</option>
                <option value="3">VIP</option>
            </select>
            
            <button type="submit">Calcular</button>
        </form>

        <div class="resultado">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Recebe os valores da compra e o código do comprador
                $valorCompra = $_POST["valorCompra"];
                $codigoComprador = $_POST["codigoComprador"];

                // Verifica o tipo de comprador e aplica o desconto correspondente
                switch ($codigoComprador) {
                    case 1:  // Cliente Comum
                        $desconto = 0;  // Sem desconto
                        break;
                    case 2:  // Funcionário
                        $desconto = 0.10;  // 10% de desconto
                        break;
                    case 3:  // VIP
                        $desconto = 0.05;  // 5% de desconto
                        break;
                    default:
                        echo "Código de comprador inválido!";
                        exit;  // Encerra o script se o código for inválido
                }

                // Calcula o valor com desconto
                $valorDesconto = $valorCompra * $desconto;
                $valorFinal = $valorCompra - $valorDesconto;

                // Exibe o valor final após o desconto
                echo "Valor da compra: R$ " . number_format($valorCompra, 2, ',', '.') . "<br>";
                echo "Desconto aplicado: R$ " . number_format($valorDesconto, 2, ',', '.') . "<br>";
                echo "Valor final a ser pago: R$ " . number_format($valorFinal, 2, ',', '.') . "";
                
            }
            ?>
        </div>
    </div>
</body>
</html>
