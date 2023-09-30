<?php 

namespace App\Pages;

class PagesRepository{
    function fetchPage($key){
        $pagesModel = new PagesModel;
        $pagesModel->id = 1;
        $pagesModel->key = $key;
        $pagesModel->title = 'Hallo Welt';
        $pagesModel->content = 'Ich bin der Seiteninhalt';
        return $pagesModel;
    }
}