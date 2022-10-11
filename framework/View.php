<?php
  include 'C:\xampp\400004095\framework\Observer.php';

  class View implements Observer
  {
    private $tmpVariables = [];
    private $tpl = '';

    //sets the name of the template to be used by storing this value as a private member
    public function setTemplate(string $filename)
    {
      $test = $filename;

      if(!is_string($test))
        $this->throwException(new \InvalidArgumentException('Wrong DataType'));

        $this->tpl = $filename;
    }

    //Outputs a page as a string that is displayed in the browser
    public function display()
    {
      extract($this->tmpVariables);
      require $this->tpl;
    }

    //Adds a variable's value to the template for processing
    public function addVar(string $name, $value): array
    {
      $this->tmpVariables[$name] = $value;
    }

    public function update(Observable $obj)
    {
        $viewUpdate = $obj->update();
        
        foreach ($viewUpdate as $name => $value) {
          $this->addVar($name, $value);
        }

        $this->display();
    }
  }
