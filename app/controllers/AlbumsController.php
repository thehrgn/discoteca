<?php

class AlbumsController extends \Phalcon\Mvc\Controller
{

    public function indexAction()
    {
      $albums = Albums::find();
      $this->view->albums= $albums;

      
    }

}
