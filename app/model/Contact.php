<?php
    class Contact
    {
        private $id;
        private $name;
        private $email;
        private $message;
        private $date_message;
        
        //id
        public function getId()
        {
            return $this->id ;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
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
        
        //date_message
        public function getDate_message()
        {
            return $this->date_message;
        }
        
        public function setDate_message($date_message)
        {
            $this->date_message = $date_message;
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
                    'date_message' => date("Y/m/d"),
                ];
                $sql = "INSERT INTO Contact (name, email, message, date_message)
                        VALUES (:name, :email, :message, :date_message)";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        //getAll
        public function getAll()
        {
            try
            {
                global $connection ;
                $T=array();
                $res=$connection -> con->query("select * from Contact");
                $i=0;
                while($tab=$res -> fetch(PDO::FETCH_NUM))
                {
                    $T[$i]=$Array=array
                    (
                        'id' => $tab[0],
                        'name' => $tab[1],
                        'email' => $tab[2] ,
                        'message' => $tab[3],
                        'date_message' => $tab[4],
                    );
                    $i++;
                }
                return $T;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return null;
            }
        }
        
        public function findMessageById($id)
        {
            $contact = new Contact();
            try
            {
                foreach($this->getAll() as $v)
                {
                    if($v{'id'} == $id)
                    {
                        $contact->setId($id);
                        $contact->setName($v{'name'});
                        $contact->setEmail($v{'email'});
                        $contact->setMessage($v{'message'});
                        $contact->setDate_message($v{'date_message'});
                        break;
                    }
                }
                return $contact;
            }
            catch(Exception $e)
            {
                echo "Error ".$e;
                return null;
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