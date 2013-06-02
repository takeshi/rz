<?php

class AboutController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        $this->view->pageTitle=$this->_request->getParam("title");
    }

    public function contactAction()
    {
        // action body
    }


}



