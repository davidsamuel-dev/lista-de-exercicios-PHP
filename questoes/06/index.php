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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

     <form method="post">
            <label for="n1">Primeiro número:</label>
            <input type="number" name="n1" id="n1" required>

            <label for="n2">Segundo número:</label>
            <input type="number" name="n2" id="n2" required>

            <label for="n3">Terceiro número:</label>
            <input type="number" name="n3" id="n3" required>

            <button type="submit">Ordenar</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['n1']) && isset($_POST['n2']) && isset($_POST['n3'])) {
                $numeros = [$_POST['n1'], $_POST['n2'], $_POST['n3']];
                
                // Ordena o array em ordem decrescente
                rsort($numeros);

                echo "<h3>Resultado:</h3>";
                echo "<p>Os números em ordem decrescente são: <strong>" . implode(", ", $numeros) . "</strong>.</p>";
            }
        }
        ?>
     
    </main>
</body>


</html>