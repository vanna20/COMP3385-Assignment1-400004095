<?php
//Observable interface
  interface Observable
  {
    //attach the observers
    public function attach(Observer $obj);
    public function detach(Observer $obj);
    public function notify(); //notify observers

  }
