<?php
namespace App\Controllers;

use App\Models\ArticleManager;
use App\Models\CommentaireManager;

class FrontController extends BaseController {
    
    public function connecteAdminDavy() {
        if (isset($_SESSION["membre"]) && $_SESSION["membre"]['statut'] == 0) {
            return true;
        }
        else {
            header("Location:" . URL . "/connexion");
            return false;
        }
    }

    public function index() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);

        // Affiche tous les articles
        $manager = new ArticleManager();
        $articles = $manager->getAllArticles();

        // Afficher view accueil
        $this->render(
            'template.php',
            'accueilView.php',
            'Accueil',
            ['articles' => $articles]
        );
    }
    public function article() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);

        // Affiche tous les articles
        $managerArticles = new ArticleManager();
        $articles = $managerArticles->getAllArticles();

        // Affiche tous les commentaires
        if (!empty($this->params['id'])) {
            $article_id = $this->params['id'];
        }
        else {
            $article_id = 0;

        }
        $managerCommentaires = new CommentaireManager();
        $commentaires = $managerCommentaires->getAllCommentaires($article_id);

        // Afficher view articles
        $this->render(
            'template.php',
            'articleView.php',
            'Article',
            [
                'articles' => $articles,
                'commentaires' => $commentaires,
                'id_article' => $article_id,
            ]
        );
    }
    public function connexion() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $notification = "";
        $erreur = "";
        $erreur_email = "";

        // Systeme connexion 
        $connexionManager = __DIR__ . '/../Models/ConnexionManager.php';
        require_once($connexionManager);

        // Afficher view articles
        $this->render(
            'template.php',
            'connexionView.php',
            'Connexion',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'erreur_email' => $erreur_email,
            ]
        );
    }
    public function gestion() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $this->connecteAdminDavy();
        $notification = "";
        $erreur = "";
        $row_count = "";
        $col_count = "";
        $pdo_statement = "";
        $bdd_table = "membre";
        $table_data = "";

        // Systeme gestion 
        $gestionManager = __DIR__ . '/../Models/GestionManager.php';
        require_once($gestionManager);

        // Afficher view gestion
        $this->render(
            'templateAdmin.php',
            'gestionView.php',
            'Gestion - Admin',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'row_count' => $row_count,
                'col_count' => $col_count,
                'pdo_statement' => $pdo_statement,
                'bdd_table' => $bdd_table,
                'table_data' => $table_data,
            ]
        );
    }
    public function modifier() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $this->connecteAdminDavy();
        $notification = "";
        $erreur = "";
        $erreur_email = "";
        $erreur_mdp = "";
        $erreur_mdp_confirm = "";
        $bdd_table = "membre";
        $table_data = "";
        if (!empty($this->params['id'])) {
            $id_membre = $this->params['id'];
        }
        else {
            $id_membre = 1;

        }

        // Systeme modifier 
        $modifierManager = __DIR__ . '/../Models/ModifierManager.php';
        require_once($modifierManager);

        // Afficher view modifier
        $this->render(
            'templateAdmin.php',
            'modifierView.php',
            'Modifier - Admin',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'erreur_email' => $erreur_email,
                'erreur_mdp' => $erreur_mdp,
                'erreur_mdp_confirm' => $erreur_mdp_confirm,
                'table_data' => $table_data,
            ]
        );
    }
    public function ajouter() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $this->connecteAdminDavy();
        $notification = "";
        $erreur = "";
        $erreur_email = "";
        $erreur_mdp = "";
        $erreur_mdp_confirm = "";

        // Systeme ajouter 
        $ajouterManager = __DIR__ . '/../Models/AjouterManager.php';
        require_once($ajouterManager);

        // Afficher view ajouter
        $this->render(
            'templateAdmin.php',
            'ajouterView.php',
            'Ajouter - Admin',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'erreur_email' => $erreur_email,
                'erreur_mdp' => $erreur_mdp,
                'erreur_mdp_confirm' => $erreur_mdp_confirm,
            ]
        );
    }
    public function inscription() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $notification = "";
        $erreur = "";
        $erreur_email = "";
        $erreur_mdp = "";
        $erreur_mdp_confirm = "";

        // Systeme ajouter 
        $ajouterManager = __DIR__ . '/../Models/AjouterManager.php';
        require_once($ajouterManager);

        // Afficher view ajouter
        $this->render(
            'template.php',
            'ajouterView.php',
            'Inscription',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'erreur_email' => $erreur_email,
                'erreur_mdp' => $erreur_mdp,
                'erreur_mdp_confirm' => $erreur_mdp_confirm,
            ]
        );
    }
    public function supprimer() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $this->connecteAdminDavy();
        $notification = "";
        $erreur = "";
        $row_count = "";
        $col_count = "";
        $pdo_statement = "";
        $bdd_table = "membre";
        $table_data = "";
        if (!empty($this->params['id'])) {
            $id_membre = $this->params['id'];
        }
        else {
            $id_membre = 1;

        }

        // Systeme supprimer 
        $gestionManager = __DIR__ . '/../Models/SupprimerManager.php';
        require_once($gestionManager);

        // Systeme gestion 
        $gestionManager = __DIR__ . '/../Models/GestionManager.php';
        require_once($gestionManager);


        // Afficher view modifier
        $this->render(
            'templateAdmin.php',
            'gestionView.php',
            'Gestion - Admin',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'row_count' => $row_count,
                'col_count' => $col_count,
                'pdo_statement' => $pdo_statement,
                'bdd_table' => $bdd_table,
                'table_data' => $table_data,
            ]
        );
    }
    public function profil() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);
        $notification = "";
        $erreur = "";
        $erreur_email = "";
        $erreur_mdp = "";
        $erreur_mdp_confirm = "";
        $bdd_table = "membre";
        $table_data = "";
        if (isset($_SESSION["membre"]) && isset($_SESSION["membre"]['id_membre'])) {
            $id_membre = $_SESSION["membre"]['id_membre'];
        }
        else {
            header("Location:" . URL . "/connexion");
        }

        // Systeme modifier 
        $modifierManager = __DIR__ . '/../Models/ModifierManager.php';
        require_once($modifierManager);

        // Afficher view modifier
        $this->render(
            'template.php',
            'modifierView.php',
            'Profil',
            [
                'notification' => $notification,
                'erreur' => $erreur,
                'erreur_email' => $erreur_email,
                'erreur_mdp' => $erreur_mdp,
                'erreur_mdp_confirm' => $erreur_mdp_confirm,
                'table_data' => $table_data,
            ]
        );
    }
}