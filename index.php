<?php
use App\Pages\PagesRepository;

require_once __DIR__ . '/inc/all.php';

$page = @(string) ($_GET['page'] ?? 'index');

if( $page === 'index'){
    $pagesController = new App\Controller\PagesController(new PagesRepository);
    $pagesController->showPage('index');
}
else{
    $notFoundController = new App\Controller\NotFoundController();
    $notFoundController->error404();
}