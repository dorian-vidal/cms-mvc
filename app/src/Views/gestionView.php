        <div class="block_admin_davy container">
            <div class="row">
                <div class="col text_center_davy">
                    <h1>Gestion : <?php if ($bdd_table) {echo $bdd_table;} ?></h1>
                    <hr class="hr_davy block_center_davy animation_davy">
                    <!-- bouton_anim_davy -->
                    <a href="<?= URL ?>/ajouter" aria-label="élément" class="bouton_anim_davy bouton_envoyer" data-text="Ajouter" title="Ajouter">
                        <span>é</span>
                        <span>l</span>
                        <span>é</span>
                        <span>m</span>
                        <span>e</span>
                        <span>n</span>
                        <span>t</span>
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="block_admin_davy container">
            <div class="row">
                <div class="col table_responsive_davy" id="container_davy">
                    <table>
                        <thead>
                            <tr>
<?php
for ($i = 0; $i < $col_count; $i++) :
    $col_meta = $pdo_statement->getColumnMeta($i);
?>
                                <th><?= $col_meta['name'] ?></th>
<?php
endfor;
?>
                                <th>Gestion</th>
                            </tr>
                        </thead>
                        <tbody>
<?php
for ($j = 0; $j < $row_count; $j++) :
?>
                            <tr>
<?php
    for ($i = 0; $i < $col_count; $i++) :
        $col_meta = $pdo_statement->getColumnMeta($i);
        $col_name = $col_meta['name'];
        if ($i == 0) :
            $id_col = $table_data[$j][$col_name];
?>
                                <td class="text_center_davy block_gestion_admin_davy"><?php echo substr(htmlspecialchars($table_data[$j][$col_name]), 0, 60); if (strlen($table_data[$j][$col_name]) > 60) {echo " ...";} ?><br><a href="<?= URL ?>/modifier/<?= $id_col ?>" title="Modifier"><svg class="icon_gestion_admin_davy" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 489.663 489.663"><g><path fill="currentColor" d="M467.144,103.963l5.6-5.6c22.5-22.5,22.5-58.9,0-81.4c-22.4-22.6-58.9-22.6-81.3-0.1l-5.6,5.6L467.144,103.963z"/></g><g><path fill="currentColor" d="M324.944,297.763v124.5h-257.5v-257.5h124.5l67.4-67.4h-244.6c-8.1,0-14.7,6.6-14.7,14.7v362.9c0,8.1,6.6,14.7,14.7,14.7 h362.9c8.1,0,14.7-6.6,14.7-14.7v-244.6L324.944,297.763z"/></g><g><polygon fill="currentColor" points="360.644,47.663 132.244,276.063 114.044,375.663 213.644,357.463 442.044,129.063"/></g></svg></a><a href="<?= URL ?>/supprimer/<?= $id_col ?>" onclick="return(confirm('Souhaitez-vous supprimer ?'))" title="Supprimer"><svg class="icon_gestion_admin_davy" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 448 512"><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg></a></td>
<?php
        else :
?>
                                <td><?php echo substr(htmlspecialchars($table_data[$j][$col_name]), 0, 60); if (strlen($table_data[$j][$col_name]) > 60) {echo " ...";} ?></td>
<?php
        endif;
    endfor;
?>
                                <td class="text_center_davy block_gestion_admin_davy"><a href="<?= URL ?>/modifier/<?= $id_col ?>" title="Modifier"><svg class="icon_gestion_admin_davy" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 489.663 489.663"><g><path fill="currentColor" d="M467.144,103.963l5.6-5.6c22.5-22.5,22.5-58.9,0-81.4c-22.4-22.6-58.9-22.6-81.3-0.1l-5.6,5.6L467.144,103.963z"/></g><g><path fill="currentColor" d="M324.944,297.763v124.5h-257.5v-257.5h124.5l67.4-67.4h-244.6c-8.1,0-14.7,6.6-14.7,14.7v362.9c0,8.1,6.6,14.7,14.7,14.7 h362.9c8.1,0,14.7-6.6,14.7-14.7v-244.6L324.944,297.763z"/></g><g><polygon fill="currentColor" points="360.644,47.663 132.244,276.063 114.044,375.663 213.644,357.463 442.044,129.063"/></g></svg></a><a href="<?= URL ?>/supprimer/<?= $id_col ?>" onclick="return(confirm('Souhaitez-vous supprimer ?'))" title="Supprimer"><svg class="icon_gestion_admin_davy" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 448 512"><path fill="currentColor" d="M32 464a48 48 0 0 0 48 48h288a48 48 0 0 0 48-48V128H32zm272-256a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zm-96 0a16 16 0 0 1 32 0v224a16 16 0 0 1-32 0zM432 32H312l-9.4-18.7A24 24 0 0 0 281.1 0H166.8a23.72 23.72 0 0 0-21.4 13.3L136 32H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg></a></td>
                            </tr>
<?php
endfor;
if ($row_count < 1) :
?>
                            <tr>
                                <td colspan="<?= $col_count + 1 ?>" class="text_center_davy">Aucun résultat</td>
                            </tr>
<?php
endif;
?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>