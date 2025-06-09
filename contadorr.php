<?php
session_start();

if (!isset($_SESSION["contador"])) {
    $_SESSION["contador"] = 1;
} else {
    $_SESSION["contador"]++;
}
?>
<!DOCTYPE html>
<html>
<head><title>Contador</title></head>
<body>
    <p>Has visitado <?php echo $_SESSION["contador"]; ?> páginas.</p>
    <a href="muestracontador.php">Ir a otra página</a>
</body>
</html>