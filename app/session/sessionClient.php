<?php

    class SessionClient
    {
        public function connect($login,$password,$page,$s)
        {
		    session_start ();
		    setcookie('loginClient', $login, time() + $s);
		    setcookie('password', $password, time() + $s);
		    $_SESSION['loginClient'] = $login;
		    $_SESSION['password'] = $password;
			$_COOKIE['loginClient'] = $login;
		    header ("location: $page");
        }
        
        public function afterConnection()
        {
            session_start ();
            if ((!isset($_SESSION['loginClient'])) || !isset($_SESSION['password']))
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