<?php
fuction banco($sql) {
  $conn = pg_connect(getenv("DATABASE_URL"));
  if ($conn)
    die("Erro conexão...");

  $resultado = pg_query($conn, $sql);
  if ($resultado)
    die("Erro query...");
  
  pg_close($conn);
  return $resultado;
}