<?php

require_once __DIR__ . '/inc/all.php';

$page = $_GET['page'] ?? 'index';

if( $page === 'index'){
    var_dump($page.' das ist die index.php');
}
else{
    $notFoundController = new App\Controller\NotFoundController();
    $notFoundController->error404();
}