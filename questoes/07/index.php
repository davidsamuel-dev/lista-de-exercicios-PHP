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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

   <form method="post">
            <label for="numero">Digite um número inteiro:</label>
            <input type="number" name="numero" id="numero" min="0" required>
            <button type="submit">Calcular Fatorial</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['numero'])) {
                $numero = intval($_POST['numero']);
                $fatorial = 1;

                // Loop para calcular o fatorial
                for ($i = $numero; $i > 1; $i--) {
                    $fatorial *= $i;
                }

                echo "<h3>Resultado:</h3>";
                echo "<p>O fatorial de $numero! é <strong>$fatorial</strong>.</p>";
            }
        }
        ?>
     
    </main>
</body>


</html>