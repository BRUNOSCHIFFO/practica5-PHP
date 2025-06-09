<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head><title>Mostrar contador</title></head>
<body>
    <p>Has visitado <?php echo $_SESSION["contador"] ?? 0; ?> páginas.</p>
    <a href="contadorr.php">Contar otra visita</a>
</body>
</html>