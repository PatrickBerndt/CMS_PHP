<?php

namespace App\Controller;

class NotFoundController extends AbstractController{
    public function error404(){
        http_response_code(404);
       $this->render("notfound/error404", []);
       
    }
}