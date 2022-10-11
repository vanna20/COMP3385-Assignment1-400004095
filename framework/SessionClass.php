<?php

  class SessionClass
  {
    public function create()
    {
        session_start();
    }

    public function destroy()
    {
        session_destroy();
        setcookie($name, "", time()-360);
    }

    public function add(string $name, $value)
    {
        $test = $name;
      if(!is_string($test))
        $this->throwException(new \InvalidArgumentException('Wrong DataType'));

        $this->$_SESSION[$name] = $value;
    }

    public function remove($name)
    {
      if(isset($_SESSION[$name]))
        unset($_SESSION[$name]);
    }

    public funtion accessible($user, $page): bool
    {
        if (in_array($user, $this->access[$page]))
        {
          return true;
        }
        return false;
    }
  }
