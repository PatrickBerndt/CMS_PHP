<?php 

namespace App\Pages;
use PDO;

class PagesRepository{

    public function __construct(private PDO $pdo){}

    function fetchPage($page){

        $stmt = $this->pdo->prepare("SELECT * FROM `pages` WHERE `slug` = :slug");
        $stmt->bindValue('slug', $page);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_CLASS, PagesModel::class);
        if(empty($result)){
            return null;
        }else{
            return $result;
        }
    }
}