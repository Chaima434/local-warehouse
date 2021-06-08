<?php

    class Admin
    {
        //declarer les attributs
        private $login;
        private $first_name;
        private $last_name;
        private $email;
        private $address;
        private $password;
        
        //Ecrire les getters et les setters de chaque attributs
        
        //login
        public function getLogin()
        {
            return $this->login;
        }
        
        public function setLogin($login)
        {
            $this->login = $login;
        }
        
        //first_name
        public function getFirst_name()
        {
            return $this->first_name;
        }
        
        public function setFirst_name($first_name)
        {
            $this->first_name = $first_name;
        }
        
        //last_name
        public function getLast_name()
        {
            return $this->last_name;
        }
        
        public function setLast_name($last_name)
        {
            $this->last_name = $last_name;
        }
        
        //email
        public function getEmail()
        {
            return $this->email;
        }
        
        public function setEmail($email)
        {
            $this->email = $email;
        }
        
        //address
        public function getAddress()
        {
            return $this->address;
        }
        
        public function setAddress($address)
        {
            $this->address = $address;
        }
        
        //password
        public function getPassword()
        {
            return $this->password;
        }
        
        public function setPassword($password)
        {
            $this->password = $password;
        }
        
        //Ecrire les methods  de crud
        
        public function add()
        {
            try
            {
                global $connection;
                $data =
                [
                    'login' => $this->login,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'email' => $this->email,
                    'address' => $this->address,
                    'password' => $this->password,
                ];
                $sql = "INSERT INTO Admin (login, first_name, last_name , email,address,password )
                        VALUES (:login, :first_name, :last_name , :email, :address, :password)";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        public function delete()
        {
            try
            {
                return 1;
            }
            catch(Exception $e)
            {
                echo "Error ".$e;
                return 0;
            }
        }
        
        public function getAll()
        {
            try
            {
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from Admin");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'login'=> $tab[0],
                        'first_name' => $tab[1],
                        'last_name' => $tab[2],
                        'email'=> $tab[3],
                        'address'=> $tab[4],
                        'password' => $tab[5]
                    );
                    $i++;
                }
                return $T;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return false;
            }
        }
        
        public function update($login)
        {
            try
            {
                global $connection;
                $data =
                [
                    'login' => $this->login,
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'email' => $this->email,
                    'address' => $this->address,
                    'old_login' => $login,
                ];
                $sql = "UPDATE Admin SET 
                            login=:login,
                            first_name=:first_name,
                            last_name=:last_name,
                            email=:email,
                            address=:address 
                        WHERE login=:old_login";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        public function updatePassword($login)
        {
            try
            {
                global $connection;
                $data =
                [
                    'password' => $this->password,
                    'login' => $login,
                ];
                $sql = "UPDATE Admin SET 
                        password=:password
                        WHERE login=:login";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        //toString method
        public function toString()
        {
            return "[
                        login => ".$this->login.", \n
                        first_name => ".$this->first_name.", \n
                        last_name => ".$this->last_name.", \n
                        email => ".$this->email.", \n
                        address => ".$this->address.", \n
                        password => ".$this->password.", \n
                    ]";
        }
    }
?>