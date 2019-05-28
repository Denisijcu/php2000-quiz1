<?php

use Phalcon\Mvc\Controller;

class ProfileController extends Controller
{
    public function indexAction()
    {
        $error = $this->request->get('error');
		$this->view->hasError = !empty($error);
    }

    public function submitAction()
	{


    

        $name = $this->request->get('username');
        $dbo = $this->request->get('dbo');
		$bio = $this->request->get('bio');
        $cvs = $this->request->get('cvs');
        
        if($name=="" || $dbo == "" || $bio =="" || $cvs==""){
            $this->response->redirect("/login?error=1");
        }

        $birthday = true;
        $today = date("Y/m/d");

        if($dbo == $today){
            $birthday = true;
        }
	

		$this->view->name = $name;
		$this->view->dbo = $dbo;
		$this->view->bio = $bio;
		$this->view->cvs = $cvs;
		
	}
}