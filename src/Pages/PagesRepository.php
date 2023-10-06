<?php 

namespace App\Pages;
use PDO;

class PagesRepository{

    public function __construct(private PDO $pdo){}
    
    public function getNavigation(){
       return $this->fetchAll();        
    }

    public function fetchAll(){
        $stmt = $this->pdo->prepare('SELECT * FROM `pages` ORDER BY `id` ASC');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_CLASS, PagesModel::class);
        
    }
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