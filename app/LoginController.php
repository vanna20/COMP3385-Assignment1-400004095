<?php
  include 'C:\xampp\400004095\framework\Controller.php';

  class LoginController extends Controller
  {
      $view = new View();
      $view->setTemplate('../tpl/LoginController.tpl.php');
      $model = new Model();

      this->setModel($model);
      this->setView($view);

      $this->model->attach($this->view);
  }
