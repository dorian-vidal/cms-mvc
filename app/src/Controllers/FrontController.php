<?php
namespace App\Controllers;
use App\Models\ArticleManager;

class FrontController extends BaseController {
    public function index() {
        $url = 'http://' . $_SERVER['SERVER_NAME'];
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
    public function connexion() {
        $url = 'http://' . $_SERVER['SERVER_NAME'] . ':5555';
        define("URL", $url);

        // Affiche tous les articles

        // Afficher view articles
        $this->render(
            'template.php',
            'connexionView.php',
            'Connexion',
            []
        );
    }
}