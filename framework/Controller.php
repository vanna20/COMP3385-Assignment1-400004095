<?php

include 'C:\xampp\400004095\framework\Observable.php';

 abstract class Controller implements Observable
 {
   protected $model = null;
   protected $view = null;


   //assigns the Model object to the protected attribute $model
   //in the Controller class, which is initialized as null.
   public function setModel(Model $m)
     {
        $this->model = $m;
     }

    //assigns the Model object to the protected attribute $model
    //in the Controller class, which is initialized as null.
    public function setView(View $v)
     {
        $this->view = $v;

     }

     abstract public function run();


 }
