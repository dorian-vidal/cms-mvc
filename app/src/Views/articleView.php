<div class="container">
    <div class="row">
        <div class="col p-5 text_center_davy">
            <h1><?= $articles[$id_article]['titre'] ?></h1><br>
            <p><?= $articles[$id_article]['auteur'] ?></p>
            <p><?= $articles[$id_article]['date'] ?></p><br>
            <img src="<?= URL ?>/src/Views/images/<?= $articles[$id_article]['image'] ?>" alt="<?= $articles[$id_article]['titre'] ?>"><br><br>
            <p><?= $articles[$id_article]['contenu'] ?></p>
        </div>
    </div>
</div>
<div class="container">
    <div class="row p-5 text_center_davy">
        <div class="col-12 text_center_davy">
            <h2>Les commentaires</h2><br>
        </div>
<?php for ($i = 0; $i < count($commentaires); $i++): ?>
        <div class="col-3 text_center_davy">
            <p><?= $commentaires[$i]['commentaire'] ?></p>
            <p><?= $commentaires[$i]['auteur'] ?></p>
            <p><?= $commentaires[$i]['date'] ?></p>
        </div>
<?php endfor; ?>
    </div>
    <div class="row p-5">
        <div class="col-12 text_center_davy">
            <form method="post" enctype="multipart/form-data">
                <label for="commentaire"><strong>Commentaire de <?= $articles[$id_article]['auteur'] ?></strong></label><br>
                <textarea id="commentaire" tabindex="5" rows="9" name="commentaire" placeholder="commentaire" class="width_full_davy"></textarea><br><br>
                <!-- bouton_anim_davy -->
                <div class="col text_center_davy">
                    <a aria-label="éléments" class="bouton_anim_davy bouton_envoyer" data-text="Modifier" title="Modifier">
                        <span>é</span>
                        <span>l</span>
                        <span>é</span>
                        <span>m</span>
                        <span>e</span>
                        <span>n</span>
                        <span>t</span>
                        <span>s</span>
                        <input type="submit" id="modifier" name="modifier" value="Modifier" class="bouton_submit">
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>