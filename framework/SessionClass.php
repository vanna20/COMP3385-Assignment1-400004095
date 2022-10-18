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
        #inspect name to make sure it is valid
        if (preg_match('/^[a-zA-Z_\x80-\xff][a-zA-Z0-9_\x80-\xff]*$/', $name) == 0) {
          trigger_error('Invalid variable name used', E_USER_ERROR);
        }
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
