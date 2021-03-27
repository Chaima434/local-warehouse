<?php

    class Category
    {
        //declarer les attributs
        private $id;
        private $label;
        private $description;
        
        
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
        
        //label
        public function getLabel()
        {
            return $this->label;
        }
        
        public function setLabel($label)
        {
            $this->label= $label;
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