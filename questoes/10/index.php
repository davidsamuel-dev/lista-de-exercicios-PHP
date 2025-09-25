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
        <h2>Questão 10: Calculando as Horas</h2>
    </header>

    <main>

   <form method="post">
            <label for="segundos_total">Duração do evento em segundos:</label>
            <input type="number" name="segundos_total" id="segundos_total" min="0" required>
            <button type="submit">Converter</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['segundos_total'])) {
                $total_segundos = intval($_POST['segundos_total']);
                
                $horas = floor($total_segundos / 3600);
                $minutos = floor(($total_segundos % 3600) / 60);
                $segundos = $total_segundos % 60;

                echo "<h3>Resultado:</h3>";
                echo "<p>A duração do evento é de <strong>$horas</strong> hora(s), <strong>$minutos</strong> minuto(s) e <strong>$segundos</strong> segundo(s).</p>";
            }
        }
        ?>
     
    </main>
</body>


</html>