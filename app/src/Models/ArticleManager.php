<?php
namespace App\Models;

use App\Models\Model;

class ArticleManager extends Model {
    public function getAllArticles() {
        $this->getBdd();
        return $this->getDataBase('article');
    }
}
?>