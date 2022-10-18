<?php

  class View implements Observer
  {
    private $tmpVariables = [];
    private $tpl = '';

    //sets the name of the template to be used by storing this value as a private member
    public function setTemplate(string $filename)
    {

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
        $viewUpdate = $obs->giveUpdate();
        foreach ($viewUpdate as $k=>$r) {
            $this->addVar($k, $r);
        }
        $this->display();
    }
  }
