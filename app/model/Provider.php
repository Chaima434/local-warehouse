<?php

    class fournisseur
    {
        //declarer les attributs
        private $id;
        private $first_name;
        private $last_name;
        private $email;
        private $address;
        private $telephone;
        
        //Ecrire les getters et les setters de chaque attributs
        
        //login
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
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
        public function getTelephone()
        {
            return $this->telephone;
        }
        
        public function setTelephone($telephone)
        {
            $this->telephone = $telephone;
        }
        
        public function getAddress()
        {
            return $this->address;
        }
        
        public function setAddress($address)
        {
            $this->address = $address;
        }
        
        //Ecrire les methods  de crud
        
        public function add()
        {
            
        }
        
        public function delete()
        {
            
        }
        
        public function getAll()
        {
            
        }
        
        public function update()
        {
            
        }
    }
?>
