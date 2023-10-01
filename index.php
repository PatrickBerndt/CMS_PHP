<?php
use App\Pages\PagesRepository;

require_once __DIR__ . '/inc/all.php';

$route = @(string) ($_GET['route'] ?? 'page');

if( $route === 'page'){
    $pagesController = new App\Controller\PagesController(new PagesRepository);
    $page = @(string) ($_GET['page'] ?? 'index');
    $pagesController->showPage($page);
}
else{
    $notFoundController = new App\Controller\NotFoundController();
    $notFoundController->error404();
}