<?php
  include 'C:\xampp\400004095\framework\Controller.php';

  class IndexController extends Controller
  {
      $view = new View();
      $view->setTemplate('../tpl/CourseController.tpl.php');
      $model = new Model();

      this->setModel($model);
      this->setView($view);

      $this->model->attach($this->view);
  }
