<?php 

namespace App\Pages;
use PDO;

class PagesRepository{

    public function __construct(private PDO $pdo){}

    function fetchPage($key){

        $stmt = $this->pdo->prepare('SELECT * FROM `pages`');
        $stmt->execute();
        $stmt->fetchAll();
        var_dump($stmt);
        
        $pagesModel = new PagesModel;
        $pagesModel->id = 1;
        $pagesModel->slug = $key;
        $pagesModel->title = 'Hallo Welt';
        $pagesModel->content = 'Ich bin der Seiteninhalt';
        return $pagesModel;
    }
}