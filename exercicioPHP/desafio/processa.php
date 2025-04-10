<?php
$numero_usuario = $_POST['numero'];
$sorte = $_POST['sorte'];
$tentativas = $_POST['tentativas'];

if ($numero_usuario == $sorte) {
    header("Location: resultado.php?sorte=$sorte&tentativas=$tentativas");
    exit();
} elseif ($numero_usuario < $sorte) {
    $mensagem = "O número é maior!";
} else {
    $mensagem = "O número é menor!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tentativa</title>
</head>
<body>
    <h2><?= $mensagem ?></h2>
    <form action="processa.php" method="post">
        <input type="number" name="numero" required>
        <input type="hidden" name="sorte" value="<?= $sorte ?>">
        <input type="hidden" name="tentativas" value="<?= $tentativas + 1 ?>">
        <input type="submit" value="Tentar novamente">
    </form>
</body>
</html>