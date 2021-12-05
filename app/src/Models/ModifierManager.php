<?php
require_once("PDO.php");

// Modifier
$notification = "";
$erreur = "";
$erreur_email = "";
$erreur_mdp = "";
$erreur_mdp_confirm = "";

if (isset($_POST['modifier'])) {
    // Champs rempli
    if (!empty($_POST['nom']) && !empty($_POST['prenom']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['mdp_confirm'])) {
        // Email format
        if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            // Mdp longueur + Majuscule + Minuscule + Chiffre + Caractère spécial
            if (strlen($_POST['mdp']) >= 8 && strtolower($_POST['mdp']) != $_POST['mdp'] && strtoupper($_POST['mdp']) != $_POST['mdp'] && preg_match('!\d+!', $_POST['mdp']) && preg_replace('/[^0-9a-zA-Z]/', '', $_POST['mdp']) != $_POST['mdp']) {
                // Mdp confirmation
                if ($_POST['mdp'] === $_POST['mdp_confirm']) {
                    // Enregister
                    $pdo_statement = $pdo_object->prepare("UPDATE membre SET nom = :nom, prenom = :prenom, email = :email, mdp = :mdp, statut = :statut, limit_connexion = :limit_connexion, limit_date = :limit_date WHERE id_membre = :id_membre");
                    $pdo_statement->bindValue(':id_membre', $id_membre, PDO::PARAM_INT);
                    $pdo_statement->bindValue(':nom', htmlspecialchars($_POST['nom']), PDO::PARAM_STR);
                    $pdo_statement->bindValue(':prenom', htmlspecialchars($_POST['prenom']), PDO::PARAM_STR);
                    $pdo_statement->bindValue(':email', htmlspecialchars($_POST['email']), PDO::PARAM_STR);
                    $pdo_statement->bindValue(':mdp', password_hash($_POST['mdp'], PASSWORD_DEFAULT), PDO::PARAM_STR);
                    $pdo_statement->bindValue(':statut', $_POST['statut'], PDO::PARAM_INT);
                    $pdo_statement->bindValue(':limit_connexion', 0, PDO::PARAM_INT);
                    $pdo_statement->bindValue(':limit_date', date("Y-m-d"), PDO::PARAM_STR);
                    $pdo_statement->execute();
                    // SESSION
                    if (isset($_SESSION["membre"]) && $_SESSION["membre"]['statut'] != 0) {
                        $_SESSION['membre']['id_membre'] = $id_membre;
                        $_SESSION['membre']['nom'] = $_POST['nom'];
                        $_SESSION['membre']['prenom'] = $_POST['prenom'];
                        $_SESSION['membre']['email'] = $_POST['email'];
                        $_SESSION['membre']['statut'] = $_POST['statut'];
                    }
                    $notification = "Les éléments sont modifiés";
                }
                else {
                    $erreur_mdp_confirm = "Les mots de passe saisis ne sont pas identiques";
                }
            }
            else {
                $erreur_mdp = "Le mot de passe doit comporter au minimum 8 caractères, 1 majuscule, 1 minuscule, 1 chiffre, 1 caractère spécial";
            }
        }
        else {
            $erreur_email = "Mettre une adresse email valable";
        }
    }
    else {
        $erreur = "Veuillez remplir tous les champs";
    }
}

// Premier colonne
$pdo_statement = $pdo_object->prepare("SELECT * FROM $bdd_table");
$pdo_statement->execute();
$col_meta = $pdo_statement->getColumnMeta(0);
$col_meta_first = $col_meta['name'];

// Gestion
$bind_value = ":" . $col_meta_first;
$pdo_statement = $pdo_object->prepare("SELECT * FROM $bdd_table WHERE $col_meta_first = $bind_value");
$pdo_statement->bindValue($bind_value, $id_membre, PDO::PARAM_INT);
$pdo_statement->execute();
$table_data = $pdo_statement->fetch(PDO::FETCH_ASSOC);

?>