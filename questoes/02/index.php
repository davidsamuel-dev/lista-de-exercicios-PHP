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
        <h2>Questão 02: Metros para centimetros</h2>
    </header>

    <main>
        <form method="post">
            <label for="metros">Valor em metros (m):</label>
            <input type="number" name="metros" id="metros" step="0.01" required>
            <button type="submit">Converter</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica se o campo 'metros' foi enviado e não está vazio
            if (isset($_POST['metros']) && !empty($_POST['metros'])) {
                $metros = $_POST['metros'];
                $centimetros = $metros * 100;
                echo "<h3>Resultado:</h3>";
                echo "<p>$metros metros é igual a $centimetros centímetros.</p>";
            }
        }
        ?>     
    </main>
</body>


</html>