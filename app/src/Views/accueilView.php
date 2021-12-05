        <!-- titre -->
        <div class="container mt-5">
            <div class="row">
                <div class="col text_center_davy">
                    <h1>Accueil</h1>
                    <hr class="hr_davy block_center_davy animation_davy">
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row">
<?php for ($i = 0; $i < count($articles); $i++): ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mb-5 text_center_davy">
                    <h2><?= $articles[$i]['titre'] ?></h2><br>
                    <img src="<?= URL ?>/src/Views/images/<?= $articles[$i]['image'] ?>" alt="<?= $articles[$i]['titre'] ?>" class="width_full_davy"><br><br>
                    <p><?= $articles[$i]['date'] ?></p><br>
                    <!-- bouton_anim_davy -->
                    <div class="text_center_davy">
                        <a href="<?= URL ?>/article/<?= $articles[$i]['id_article'] - 1; ?>" aria-label="Valider" class="bouton_anim_davy bouton_envoyer" data-text="Voir" title="Voir">
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
