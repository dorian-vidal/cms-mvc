<div class="container">
    <div class="row">
<?php for ($i = 0; $i < count($articles); $i++): ?>
        <div class="col-lg-3 col-md-4 col-sm-6 text_center_davy">
            <h1><?= $articles[$i]['titre'] ?></h1><br>
            <p><?= $articles[$i]['auteur'] ?></p>
            <p><?= $articles[$i]['date'] ?></p><br>
            <img src="<?= URL ?>/src/Views/images/<?= $articles[$i]['image'] ?>" alt="<?= $articles[$i]['titre'] ?>" class="width_full_davy"><br><br>
            <p><?= $articles[$i]['contenu'] ?></p><br><br>
            <!-- bouton_anim_davy -->
            <div class="text_center_davy">
                <a href="<?= URL ?>/article/<?= $articles[$i]['id_article'] ?>" aria-label="Valider" class="bouton_anim_davy bouton_envoyer" data-text="Voir" title="Voir">
                    <span>V</span>
                    <span>a</span>
                    <span>l</span>
                    <span>i</span>
                    <span>d</span>
                    <span>e</span>
                    <span>r</span>
                </a>
            </div><br>
</div>
<?php endfor; ?>
    </div>
</div>
