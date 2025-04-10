<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcular Cédulas</title>
</head>
<body>
    <h2>Calculadora de Cédulas</h2>
    <form action="calcular.php" method="post">
        <label for="valor">Digite um valor em dinheiro:</label>
        <input type="number" name="valor" id="valor" min="1" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>
