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
        <h2>Questão 09: Dias de Vida</h2>
    </header>

    <main>

   <form method="post">
            <label for="nome">Seu nome:</label>
            <input type="text" name="nome" id="nome" required>
            
            <label for="idade">Sua idade (anos completos):</label>
            <input type="number" name="idade" id="idade" min="0" required>
            
            <button type="submit">Calcular Dias de Vida</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['nome']) && isset($_POST['idade'])) {
                $nome = $_POST['nome'];
                $idade = intval($_POST['idade']);
                $dias_de_vida = $idade * 365;

                echo "<h3>Resultado:</h3>";
                echo "<p>Olá, $nome! Você já viveu aproximadamente <strong>$dias_de_vida</strong> dias.</p>";
            }
        }
        ?>
     
    </main>
</body>


</html>