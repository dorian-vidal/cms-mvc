<?php
namespace App\Controllers;

use App\Models\ArticleManager;
use App\Models\CommentaireManager;

class FrontController extends BaseController {
    public function index() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);

        // Affiche tous les articles
        $manager = new ArticleManager();
        $articles = $manager->getAllArticles();

        // Afficher view articles
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
        $article_id = $this->params['id'];
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
                'id_article' => $this->params['id'] - 1,
            ]
        );
    }
    public function connexion() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);

        // Affiche 
        $connexionManager = __DIR__ . '/../Models/ConnexionManager.php';
        require_once($connexionManager);

        // Afficher view articles
        $this->render(
            'template.php',
            'connexionView.php',
            'Connexion',
            [
                'notification' => "",
                'erreur' => "",
                'erreur_email' => "",
            ]
        );
    }
}