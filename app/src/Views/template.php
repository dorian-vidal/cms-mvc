<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?= $title; ?></title>
        <meta name="description" content="<?= $title; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="<?= URL ?>/src/Views/images/logo-icon-min.png">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_bootstrap_grid.min.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_nav_pc.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_bouton.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_animation_scroll.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_animation_scroll_header.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style.css">
    </head>
    
    <body>
        <!-- nav_pc_davy -->
        <div class="nav_pc_davy">
            <div class="nav_block_pc_davy container">
                <div class="nav_gauche_pc_davy">
                    <a href="<?= URL ?>" class="menu_lien_pc_davy" title="Accueil">
                        Accueil
                    </a>
                </div>
                <div class="nav_centre_pc_davy">
                    <a href="<?= URL ?>/article" class="menu_lien_pc_davy" title="Article">Article</a>
                    <a href="<?= URL ?>/profil" class="menu_lien_pc_davy" title="Profil">Profil</a>
                    <a href="<?= URL ?>/inscription" class="menu_lien_pc_davy" title="Inscription">Inscription</a>
                    <a href="<?= URL ?>/connexion" class="menu_lien_pc_davy" title="Connexion">Connexion</a>
                </div>
                <div class="nav_droite_pc_davy">
                    <a href="<?= URL ?>/gestion" class="menu_lien_pc_droite_davy" title="Gestion">Admin</a>
                </div>
            </div>
        </div><br><br><br><br><br>

        <?= $content; ?>
        
        <script src="<?= URL ?>/src/Views/js/script_animation_scroll.js"></script>
    </body>
</html>