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
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_bouton.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_animation_scroll.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style_animation_scroll_header.css">
        <link rel="stylesheet" href="<?= URL ?>/src/Views/css/style.css">
    </head>
    
    <body>

        <?= $content; ?>
        
        <script src="<?= URL ?>/src/Views/js/script_animation_scroll.js"></script>
    </body>
</html>