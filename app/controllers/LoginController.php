<?php

use Phalcon\Mvc\Controller;

class LoginController extends Controller
{
    public function indexAction()
    {
       
    }

    public function submitAction()
	{
		$name = $this->request->get('username');
	

		$this->view->name = $name;
		
	}
}