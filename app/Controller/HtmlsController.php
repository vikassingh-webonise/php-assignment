<?php
App::uses('AppController', 'Controller');

class HtmlsController extends AppController
{
    public function beforeFilter()
    {
        parent::beforeFilter();
//        $this->Auth->allow('*');
        $this->layout = 'admin';
    }

    public function index()
    {
        $this->layout = 'html';
    }
}