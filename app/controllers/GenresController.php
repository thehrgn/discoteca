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

        $option = $this->request->getPost("option");
        if($option === "edit")
        {
          $genre = Genres::findFirst($this->request->getPost('idEdit'));
        }
        else{
          $genre = new Genres();
        }

        $genre->name = $name ;
        $genre->save();

        $this->response->setJsonContent(["data"=>$name,"options"=>["option"=>$option,"id"=>$this->request->getPost('idEdit')]]);
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

    public function getByIdAction()
    {
      $this->view->disable();
      if($this->request->isAjax())
      {
        $id = $this->request->getPost('id');
        $genre = Genres::findFirst($id);
        $this->response->setJsonContent(["genre"=>$genre]);
        $this->response->setStatusCode(200, "OK");
        $this->response->send();
      }
    }


}
