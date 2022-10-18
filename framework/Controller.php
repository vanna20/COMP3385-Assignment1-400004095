<?php

 abstract class Controller
 {
   protected $model = null;
   protected $view = null;


   //assigns the Model object to the protected attribute $model
   //in the Controller class, which is initialized as null.
   public function setModel(Model $m)
     {
        $this->model = $m;
     }

    //assigns the View object to the protected attribute $view
    //in the Controller class, which is initialized as null.
    public function setView(View $v)
     {
        $this->view = $v;

     }

     abstract public function run();


 }
