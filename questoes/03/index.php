<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

    <<form method="post">
            <label for="valor_hora">Quanto você ganha por hora (R$):</label>
            <input type="number" name="valor_hora" id="valor_hora" step="0.01" required>

            <label for="horas_mes">Horas trabalhadas no mês:</label>
            <input type="number" name="horas_mes" id="horas_mes" required>

            <button type="submit">Calcular Salário</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['valor_hora']) && isset($_POST['horas_mes'])) {
                $valor_hora = $_POST['valor_hora'];
                $horas_mes = $_POST['horas_mes'];
                $salario = $valor_hora * $horas_mes;
                echo "<h3>Resultado:</h3>";
                echo "<p>Seu salário total no mês é de R$ " . number_format($salario, 2, ',', '.') . ".</p>";
            }
        }
        ?>
     
    </main>
</body>


</html>