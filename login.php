<?php
if (isset($_POST['login']) &&
    isset($_POST['senha']) &&
    $_POST['login'] != "" &&
    $_POST['senha'] != "" ) {

    if ($_POST['login'] == "admin" &&
        $_POST['senha'] == "12345") {

      session_start();
      $_SESSION['user'] = $_POST['login'];

      header("Location: admin.php");
    }
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
  <form action="login.php" method="post">
    <input type="text" name="login" placeholder="Digite o login" /> 
    <input type="password" name="senha" placeholder="Digite a senha" />
    <input type="submit" value="entrar" />
  </form>
</body>
</html>