<?php
namespace App\Models;

use App\Models\Article;

abstract class Model {
    private static $bdd;

    private static function setBdd() {
        self::$bdd = new \PDO('mysql:host=db;dbname=davy_cms;charset=utf8', 'root', 'example');
        self::$bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_WARNING);
    }
    protected function getBdd() {
        if (self::$bdd == null) {
            $this->setBdd();
        }
        return self::setBdd();
    }
    public function getDataBase($table) {
        $pdo_statement = self::$bdd->prepare('SELECT * FROM ' . $table . '');
        $pdo_statement->execute();
        $results = $pdo_statement->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }
    public function getDataBaseWhere($table, $name_id, $value_id) {
        $pdo_statement = self::$bdd->prepare('SELECT * FROM ' . $table . ' WHERE ' . $name_id . ' = ' . $value_id . '');
        $pdo_statement->execute();
        $results = $pdo_statement->fetchAll(\PDO::FETCH_ASSOC);
        return $results;
    }
}
?>