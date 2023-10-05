<?php

namespace App\Controller\Admin;

use App\Controller\AbstractController;

class PagesAdminController extends AbstractController {

    protected function render($path, array $data = []) {
        ob_start();
        extract($data);
        require __DIR__ . '/../../../views/admin/'. $path . '.view.php';
        $content = ob_get_contents();
        ob_end_clean();
        
        $navigation = $this->pagesRepository->getNavigation();

        require __DIR__ . '/../../../views/admin/layouts/main.view.php';
     }
    public function index(){
       $this->render('pages/index',[]);
    }
}