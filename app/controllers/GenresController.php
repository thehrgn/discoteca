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

    public function saveAction()
    {
      $this->view->disable();
      if($this->request->isAjax())
      {
        $name = $this->request->getPost("name");

        $genre = new Genres();
        $genre->name = $name ;
        $genre->save();

        $this->response->setJsonContent(["data"=>$name]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }

    public function deleteAction()
    {
      $this->view->disable();
      if($this->request->isAjax())
      {
        $id = $this->request->getPost("id");

        $genre = Genres::findFirst($id);
        $genre->delete();

        $this->response->setJsonContent(["data"=>$id]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }


}
