<?php 

namespace App\Pages;
use PDO;

class PagesRepository{

    public function __construct(private PDO $pdo){}

    function fetchPage(string $page): ?PagesModel {

        $stmt = $this->pdo->prepare("SELECT * FROM `pages` WHERE `slug` = :slug");
        $stmt->bindValue('slug', $page);
        $stmt->setFetchMode(PDO::FETCH_CLASS, PagesModel::class);
        $stmt->execute();
        $result = $stmt->fetch();
        if(empty($result)){
            return null;
        }else{
            return $result;
        }
    }
}