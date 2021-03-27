<?php

    class Product
    {
        //declarer les attributs
        private $id;
        private $label ;
        private $description;
        private $number; 
        private $price;
        private $photo;
        private $idCat;
        private $idProvider;

        //id
        public function getId()
        {
            return $this->id;
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }
        
        //label
        public function getLabel()
        {
            return $this->label;
        }
        
        public function setLabel($label)
        {
            $this->label = $label;
        }
        
        //description
        public function getDescription()
        {
            return $this->description;
        }
        
        public function setDescription($description)
        {
            $this->description = $description;
        }
        
        //number
        public function getNumber()
        {
            return $this->number;
        }
        
        public function setNumber($number)
        {
            $this->number = $number;
        }
        
        //price
        public function getPrice()
        {
            return $this->price;
        }
        
        public function setPrice($price)
        {
            $this->price = $price;
        }
        
        //photo
        public function getPhoto()
        {
            return $this->photo;    
        }
        
        public function setPhoto($photo)
        {
            $this->photo = $photo;
        }
        
        //idCat
        public function getIdCat()
        {
            return $this->idCat;
        }
        
        public function setIdCat($idCat)
        {
            $this->idCat = $idCat;
        }
        
        //idProvider
        public function getIdProvider()
        {
            return $this->idProvider;
        }
        
        public function setIdProvider($idProvider)
        {
            $this->idProvider = $idProvider;
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