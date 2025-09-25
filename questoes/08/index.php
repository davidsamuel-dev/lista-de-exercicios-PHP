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
        <h2>Questão 08: Números Ímpares</h2>
    </header>

    <main>

    <h3>Números ímpares de 1 a 50:</h3>
        <p>
            <?php
            $impares = [];
            for ($i = 1; $i <= 50; $i++) {
                // Se o resto da divisão por 2 for diferente de 0, é ímpar
                if ($i % 2 != 0) {
                    $impares[] = $i;
                }
            }
            echo implode(", ", $impares);
            ?>
        </p>
     
    </main>
</body>


</html>