<?php
	class Connection
	{
		private $host; //server address
	    private $dbname; //db name
	    private $username;	//user name 
	    private $password;	//password
		public $con; // la chaine de connexion
		
		public function __construct($host,$dbname,$username,$password)
		{	
	        try
        	{
				$this->host=$host;
	            $this->dbname=$dbname;
	            $this->username=$username;	
	            $this->password	=$password;
				$this->con=new PDO("mysql:host=$this->host;	dbname=$this->dbname",$this->username,$this->password);
				$this->con->exec("set names utf8");
			}	
            catch(PDOException	$pe)	
	        {
				echo "Error of connection to database";
			}
		}
		
		public function getHost()
		{
			return $this->host;
		}
		
		public function setHost($host)
		{
			$this->host=$host;
		}
		
		public function getDbname()
		{
			return $this->dbname;
		}
		
		public function setDbname($dbname)
		{
			$this->dbname=$dbname;
		}
		
		public function getUsername()
		{
			return $this->username;
		}
		
		public function setUsername($username)
		{
			$this->username=$username;
		}
		
		public function getPassword()
		{
			return $this->password;
		}
		
		public function setPassword($password)
		{
			$this->password=$password;
		}
	}
	
	$connection=new Connection('localhost','stocks','root',''); // $connection bech netssta3mloha fi projet el kol 
?>
