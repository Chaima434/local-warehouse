<?php
    class Contact
    {
        private $name;
        private $email;
        private $message;
        
        //name
        public function getName()
        {
            return $this->name;
        }
        
        public function setName($name)
        {
            $this->name = $name;
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
        
        //message
        public function setMessage($message)
        {
            $this->message = $message;
        }
        
        public function getMessage()
        {
            return $this->message;
        }
        
        //add
        public function add()
        {
            try
            {
                global $connection;
                $data =
                [
                    'name' => $this->name,
                    'email' => $this->email,
                    'message' => $this->message,
                ];
                $sql = "INSERT INTO Contact (name, email, message)
                        VALUES (:name, :email, :message)";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        //ToString()
        public function toString()
        {
            return "Contact
                    [
                        'name' => $name ,
                        'email' => $email ,
                        'message' => $message
                    ]";
        }
    }
?>