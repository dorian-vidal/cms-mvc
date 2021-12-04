<?php
namespace App\Models;

use App\Models\Model;

class CommentaireManager extends Model {
    public function getAllCommentaires($article_id) {
        $this->getBdd();
        return $this->getDataBaseWhere('commentaire', 'article_id', $article_id);
    }
}
?>