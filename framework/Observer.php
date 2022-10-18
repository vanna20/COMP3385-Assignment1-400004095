<?php
//Observer interface
  interface Observer
  {
    //update function passing the observaple object
    public function update(Observable $obj);

  }
