<?php

namespace App\Controller;
use App\Pages\PagesRepository;

class PagesController extends AbstractController{
     
    public function __construct(protected PagesRepository $pagesRepository) {
        
    }
    public function showPage(string $pageKey){
        $page = $this->pagesRepository->fetchPage($pageKey);

        $this->render('pages/showPage', [
            'page'=> $page
        ]);
    }
}