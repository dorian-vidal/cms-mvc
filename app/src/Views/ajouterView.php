<?php if (isset($_SESSION['membre'])) : ?>
        <!-- titre -->
        <div class="block_admin_davy container">
            <div class="row">
                <div class="col text_center_davy">
                    <h1>Ajouter : membre</h1>
                    <hr class="hr_davy block_center_davy anime_scroll_davy">
                    <!-- bouton_anim_davy -->
                    <a href="<?= URL ?>/gestion" aria-label="Table" class="bouton_anim_davy bouton_envoyer" data-text="Retour" title="Retour">
                        <span>T</span>
                        <span>a</span>
                        <span>b</span>
                        <span>l</span>
                        <span>e</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
<?php endif; ?>

<?php if (!isset($_SESSION['membre'])) : ?>
        <!-- titre -->
        <div class="container mt-5">
            <div class="row">
                <div class="col text_center_davy">
                    <h1>Inscription</h1>
                    <hr class="hr_davy block_center_davy animation_davy">
                </div>
            </div>
        </div>
<?php endif; ?>

        <div class="block_admin_davy container">
            <div class="row">
                <div class="col">
                    <div class="color_davy text_center_davy"><strong><?= $notification ?><?= $erreur ?></strong></div><br>
                    <!-- inscription -->
                    <form method="post">
                        <div class="row">
                            <div class="col-md p-0 pe-md-2">
                                <label for="nom"><strong>Nom</strong></label><br>
                                <input type="text" id="nom" name="nom" placeholder="Saisir votre nom" class="width_full_davy"><br><br>
                            </div>
                            <div class="col-md p-0 ps-md-2">
                                <label for="prenom"><strong>Prénom</strong></label><br>
                                <input type="text" id="prenom" name="prenom" placeholder="Saisir votre prenom" class="width_full_davy"><br><br>
                            </div>
                        </div>
                        <label for="email"><strong>Email</strong></label> <span class="color_davy"><strong><?= $erreur_email ?></strong></span><br>
                        <input type="email" id="email" name="email" placeholder="Saisir votre email" class="width_full_davy"><br><br>
                        <label for="mdp"><strong>Mot de passe</strong></label> <span class="color_davy"><strong><?= $erreur_mdp ?></strong></span><br>
                        <input type="password" id="mdp" name="mdp" placeholder="Saisir votre mot de passe" class="width_full_davy"><br><br>
                        <label for="mdp_confirm"><strong>Confirmation du mot de passe</strong></label> <span class="color_davy"><strong><?= $erreur_mdp_confirm ?></strong></span><br>
                        <input type="password" id="mdp_confirm" name="mdp_confirm" placeholder="Confirmer votre mot de passe" class="width_full_davy"><br><br>
                        <div class="text_center_davy">
                            <!-- bouton_anim_davy -->
                            <a aria-label="Valider" class="bouton_anim_davy bouton_envoyer" data-text="Inscription" title="Inscription">
                                <span>V</span>
                                <span>a</span>
                                <span>l</span>
                                <span>i</span>
                                <span>d</span>
                                <span>e</span>
                                <span>r</span>
                                <input type="submit" id="inscription" name="inscription" value="Inscription" class="bouton_submit">
                            </a>
                        </div><br>
                    </form>
                </div>
            </div>
        </div>