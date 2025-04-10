<?php
    
        $numero = intval($_POST["numero"]);
        $contador = 0;

        echo "<h3>Processo de subtração:</h3>";

        do {
            $aleatorio = rand(1, 10);
            $numero -= $aleatorio;
            $contador++;
            echo "Subtraiu $aleatorio. Valor restante: $numero <br>";
        } while ($numero > 0);

        echo "<br>O processo foi executado $contador vezes.";
    
    ?>