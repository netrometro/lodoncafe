<?php
session_start();
if (!isset($_SESSION["user"])) {
  header("Location: login.php");
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>London Café :: Admininstração</title>
</head>
<body>
  <nav>
    <a href="logout.php">Sair</a>
  </nav>
</body>
</html>