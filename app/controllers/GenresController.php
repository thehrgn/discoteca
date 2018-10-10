<?php

class GenresController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {

    }

    public function datatableAction()
    {
      $this->view->disable();

      $genres = Genres::find();
      $this->response->setJsonContent(["data"=>$genres]);
      $this->response->setStatusCode(200, "OK");
      $this->response->send();
    }


}
