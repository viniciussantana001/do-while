<!DOCTYPE html>
<html>
<head>
    <title>Número da Sorte</title>
</head>
<body>
    <h2>Digite seu Número da Sorte</h2>
    <form action="processa.php" method="post">
        <input type="number" name="numero" required>
        <input type="hidden" name="sorte" value="<?php echo rand(1, 100); ?>">
        <input type="hidden" name="tentativas" value="1">
        <input type="submit" value="Tentar">
    </form>
</body>
</html>
