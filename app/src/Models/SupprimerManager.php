<?php
require_once("PDO.php");

// Supprimer
if (isset($id_membre) && isset($_SESSION['membre']) && $_SESSION['membre']['statut'] == 0 && $_SESSION['membre']['id_membre'] != $id_membre) {
    $pdo_statement = $pdo_object->prepare("SELECT * FROM $bdd_table");
    $pdo_statement->execute();
    $col_meta = $pdo_statement->getColumnMeta(0);
    $col_meta_first = $col_meta['name'];
    $sql_select = "DELETE FROM " . $bdd_table . " WHERE " . $col_meta_first . " = :" . $col_meta_first;
    $bind_value = ":" . $col_meta_first;
    $pdo_statement = $pdo_object->prepare($sql_select);
    $pdo_statement->bindValue($bind_value, $id_membre, PDO::PARAM_INT);
    $pdo_statement->execute();
}
?>