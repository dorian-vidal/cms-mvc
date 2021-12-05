        <!-- titre -->
        <div class="container mt-5">
            <div class="row">
                <div class="col text_center_davy">
                    <h1><?= $articles[$id_article]['titre'] ?></h1>
                    <hr class="hr_davy block_center_davy animation_davy">
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <div class="col p-5 text_center_davy">
                    <p class="color_davy"><strong><?= $articles[$id_article]['auteur'] ?></strong></p>
                    <p><strong><?= $articles[$id_article]['date'] ?></strong></p><br>
                    <img src="<?= URL ?>/src/Views/images/<?= $articles[$id_article]['image'] ?>" alt="<?= $articles[$id_article]['titre'] ?>" class="max_width_full_davy"><br><br>
                    <p><?= $articles[$id_article]['contenu'] ?></p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row p-5">
                <div class="col-12 text_center_davy">
                    <h2>Les commentaires</h2>
                    <hr class="hr_davy block_center_davy animation_davy">
                </div>
<?php if (count($commentaires) <= 0): ?>
                <div class="col text_center_davy">
                    Aucun commentaire
                </div>
<?php endif; ?>
<?php for ($i = 0; $i < count($commentaires); $i++): ?>
                <div class="ol-lg-3 col-md-4 col-sm-6 text_center_davy">
                    <p class="color_davy"><strong><?= $commentaires[$i]['auteur'] ?></strong></p><br>
                    <p><?= $commentaires[$i]['commentaire'] ?></p><br>
                    <p><strong><?= $commentaires[$i]['date'] ?></strong></p><br>
                </div>
<?php endfor; ?>
            </div>
<?php if (isset($_SESSION['membre'])) : ?>
            <div class="row p-5">
                <div class="col-12 text_center_davy">
                    <form method="post" enctype="multipart/form-data">
                        <textarea id="commentaire" tabindex="5" rows="9" name="commentaire" placeholder="Ecrire un commentaire" class="width_full_davy"></textarea><br><br>
                        <!-- bouton_anim_davy -->
                        <div class="col text_center_davy">
                            <a aria-label="Valider" class="bouton_anim_davy bouton_envoyer" data-text="Commenter" title="Commenter">
                                <span>V</span>
                                <span>a</span>
                                <span>l</span>
                                <span>i</span>
                                <span>d</span>
                                <span>e</span>
                                <span>r</span>
                                <input type="submit" id="commenter" name="commenter" value="Commenter" class="bouton_submit">
                            </a>
                        </div>
                    </form>
                </div>
            </div>
<?php endif; ?>

<?php if (!isset($_SESSION['membre'])) : ?>
            <div class="row p-5">
                <div class="col-12 text_center_davy">
                    <!-- bouton_anim_davy -->
                    <div class="col text_center_davy">
                        <a href="<?= URL ?>/connexion" aria-label="Connexion" class="bouton_anim_davy bouton_envoyer" data-text="Commenter" title="Commenter">
                            <span>C</span>
                            <span>o</span>
                            <span>n</span>
                            <span>n</span>
                            <span>e</span>
                            <span>x</span>
                            <span>i</span>
                            <span>o</span>
                            <span>n</span>
                        </a>
                    </div>
                </div>
            </div>
<?php endif; ?>
        </div>