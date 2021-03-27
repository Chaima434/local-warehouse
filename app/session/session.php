<?php

    class Session
    {
        public function connect($login,$password,$page,$s)
        {
		    session_start ();
		    setcookie('login', $login, time() + $s);
		    setcookie('password', $password, time() + $s);
		    $_SESSION['login'] = $login;
		    $_SESSION['password'] = $password;
			$_COOKIE['login'] = $login;
		    header ("location: $page");
        }
        
        public function afterConnection()
        {
            session_start ();
            if ((!isset($_SESSION['login'])) || !isset($_SESSION['password']))
            {
				header ('location: login.php');
            }
        }
        
        public function logOut()
        {
            session_start ();
            session_unset ();
            session_destroy ();
            header ('location: login.php');
        }
        
    }
?>
