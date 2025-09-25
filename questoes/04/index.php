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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <form method="post">
            <label for="area">Tamanho da área a ser pintada (m²):</label>
            <input type="number" name="area" id="area" step="0.1" required>
            <button type="submit">Calcular</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['area'])) {
                $area = $_POST['area'];
                
                // Considerações:
                // 1 litro de tinta pinta 3 metros quadrados.
                // A tinta é vendida em latas de 18 litros.
                // Preço da lata: R$ 80,00.

                $litros_necessarios = $area / 3;
                $latas_necessarias = ceil($litros_necessarios / 18);
                $preco_total = $latas_necessarias * 80;

                echo "<h3>Resultado:</h3>";
                echo "<p>Para pintar uma área de $area m², você precisará de:</p>";
                echo "<ul>";
                echo "<li><strong>$latas_necessarias</strong> lata(s) de tinta.</li>";
                echo "<li>O custo total será de <strong>R$ " . number_format($preco_total, 2, ',', '.') . "</strong>.</li>";
                echo "</ul>";
            }
        }
        ?>
     
    </main>
</body>


</html>