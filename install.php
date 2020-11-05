<?php
require('db.php');

banco("DROP TABLE IF EXISTS produtos");
echo "Tabela produtos apagada<br />";

$sql  = "CREATE TABLE produtos (";
$sql .= "codigo SERIAL NOT NULL, ";
$sql .= "nome VARCHAR(100), ";
$sql .= "descricao VARCHAR(250), ";
$sql .= "valor FLOAT);";
banco($sql);
echo "Tabela produtos criada<br />";

$sql  = "INSERT INTO produtos (nome, descricao, valor) ";
$sql .= "VALUES ('Café Expresso', 'Ingredientes: Café e açúcar.', 5.0);";
$sql .= "INSERT INTO produtos (nome, descricao, valor) ";
$sql .= "VALUES ('Cappuccino', 'Ingredientes: Café, açúcar, chocolate e bicarbonato de sódio.', 7.0);";
banco($sql);
echo "Tabela produtos populada<br />";

?>