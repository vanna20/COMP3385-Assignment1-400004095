<?php

  abstract class Observable{

    abstract public function attach(Observer $obj);
    abstract public function detach(Observer $obj);
    abstract public function notify();

  }
