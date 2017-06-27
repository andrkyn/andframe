<?php


//namespace Andframe\Framework\Core;

//use Andframe\Framework\Core\Controller;

 class Controller
 {

    // public function __construct()
     //{
     //echo 'Я нахожусь в папке andframe/core';
     //}

     public $model;
     public $view;

     function __construct()
     {
         $this->view = new View();
     }

     // действие (action), вызываемое по умолчанию
     function action_index()
     {
         // todo
     }
 }


