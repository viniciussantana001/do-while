<?php

$valor = intval($_POST["valor"]);
        $notas = [100, 50, 20, 10, 5, 2, 1];
        $index = 0;

        echo "<h3>Quantidade de cada nota para R$$valor:</h3>";

        do {
            $nota = $notas[$index];
            $quantidade = intval($valor / $nota);
            echo "R$$nota,00 = $quantidade <br>";
            $index++; 
        } while ($index < count($notas));

?>