<?php
use App\Pages\PagesRepository;

require_once __DIR__ . '/inc/all.php';

$container = new App\Support\Container();

$container->add('pdo', function(){
    return require __DIR__ . '/inc/db-connect.inc.php';
    
});

$route = @(string) ($_GET['route'] ?? 'page');

if( $route === 'page'){
    $pagesController = new App\Controller\PagesController(new PagesRepository($pdo));
    $page = @(string) ($_GET['page'] ?? 'index');
    $pagesController->showPage($page);
}
else{
    $notFoundController = new App\Controller\NotFoundController(new PagesRepository($pdo));
    $notFoundController->error404();
}