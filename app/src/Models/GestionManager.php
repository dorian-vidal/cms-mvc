<?php
require_once("PDO.php");

// Premier colonne
$pdo_statement = $pdo_object->prepare("SELECT * FROM $bdd_table");
$pdo_statement->execute();
$col_meta = $pdo_statement->getColumnMeta(0);
$col_meta_first = $col_meta['name'];

// Gestion
$pdo_statement = $pdo_object->prepare("SELECT * FROM $bdd_table ORDER BY $col_meta_first DESC");
$pdo_statement->execute();
$col_count = $pdo_statement->columnCount();
$row_count = $pdo_statement->rowCount();
$table_data = $pdo_statement->fetchAll(PDO::FETCH_ASSOC);
$id_col = 0;

?>