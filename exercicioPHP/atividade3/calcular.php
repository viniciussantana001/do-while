<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>

    <?php
    $numero_base = rand(0, 100);
    $contador = 0;
    $numeros_gerados = [];

    do {
        $aleatorio = rand(0, 100);
        $contador++;
        $numeros_gerados[] = $aleatorio;
    } while ($aleatorio != $numero_base);

    echo "<h3>Número Base: $numero_base</h3>";
    echo "Quantidade de tentativas: $contador <br>";
    echo "Números gerados: " . implode(", ", $numeros_gerados);
    ?>

</body>
</html>
