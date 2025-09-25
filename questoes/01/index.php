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
        <h2>Questão 1: Antecessor de um Valor</h2>
    </header>

    <main>

    <form method="post">
            <label for="valor">Digite um valor:</label>
            <input type="number" name="valor" id="valor" required>
            <button type="submit">Calcular Antecessor</button>
        </form>

        <?php
        // Verifica se o formulário foi enviado (se o método da requisição é POST)
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Verifica se o campo 'valor' foi enviado e não está vazio
            if (isset($_POST['valor']) && $_POST['valor'] !== '') {
                $valor = $_POST['valor'];
                $antecessor = $valor - 1;
                echo "<h3>Resultado:</h3>";
                echo "<p>O antecessor de $valor é <strong>$antecessor</strong>.</p>";
            }
        }
        ?>
     
    </main>
</body>


</html>