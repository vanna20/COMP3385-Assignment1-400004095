<?php

  class IndexController extends Controller
  {
    #Display the Most Popular and Top Recommended courses
    public function run()
    {
      #create the view object and use it to call the setTemplate funciton
      #Which is used to add data from the file to the template
      $viewObj = new View();
      $viewObj->setTemplate(TPL_DIR . '/index.tpl.php');

      #pass IndexModel object to the setModel function
      #and pass the the view object to setView
      $this->setModel(new IndexModel());
      $this->setView($viewObj);

      #add view obj to the observer array in the model abstract class
      $this->model->attach($this->viewObj);

      //data from the relevant json file is added to an array in the
      //IndexModel class which has the concrete function get all
      $jsonData = $this->model->getAll();

      #instructs the model abstract class to update the changed data
      $this->model->updateTheChangedData($jsonData);

      #instructs the model to notify its observers
      $this->model->notify();
    }
  }
