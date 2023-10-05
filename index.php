<?php


require_once __DIR__ . '/inc/all.php';

$container = new \App\Support\Container();

$container->add('pdo', function(){
    return require __DIR__ . '/inc/db-connect.inc.php';
});

$container->add('pagesRepository', function() use($container){
    return new \App\Pages\PagesRepository($container->get('pdo'));
});

$container->add('pagesController', function() use($container){
    return new \App\Controller\PagesController($container->get('pagesRepository'));
});

$container->add('notFoundController', function() use($container){
    return new \App\Controller\NotFoundController($container->get('pagesRepository'));
});

$container->add('pagesAdminController', function() use($container){
    return new \App\Controller\Admin\PagesAdminController($container->get('pagesRepository'));
});

$route = @(string) ($_GET['route'] ?? 'page');

if( $route === 'page'){
    $pagesController = $container->get('pagesController');
    $page = @(string) ($_GET['page'] ?? 'index');
    $pagesController->showPage($page);
}
else if($route === 'admin'){
    $pagesAdminController = $container->get('pagesAdminController');
    $pagesAdminController->index();
}
else{
    $notFoundController = $container->get('notFoundController');
    $notFoundController->error404();
}