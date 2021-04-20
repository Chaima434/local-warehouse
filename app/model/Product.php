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
            try
            {
                return 1;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        public function delete($id)
        {
            try
            {
                global $connection;
                $data =
                [
                    'id'=>$id,//valeur=$id , param='id'
                ];
                $sql="delete from Product where id=:id";
                //prepare la requette sql 
                $stmt=$connection->con->prepare($sql);
                //executer la requette en utilisant les parametre de la variable $data
                return $stmt ->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        public function getAll()
        {
            try
            {
                global $connection ;
                $T=array();
                $res=$connection -> con->query("select * from Product");
                $i=0;
                while($tab=$res -> fetch(PDO::FETCH_NUM))
                {
                    $T[$i]=$Array=array
                    (
                        'id'=>$this->id,
                        'label'=>$this->label,
                        'description'=>$this->description ,
                        'number' => $this->number,
                        'price' => $this->price,
                        'photo' => $this->price,
                        'idCat' => $this->idCat,
                        'idProvider' => $this->idProvider
                    );
                }
                return $T;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return null;
            }
        }
        
        public function update()
        {
            try
            {
                return 1;
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        //toString() method
        public function toString()
        {
            return "[]";
        }
    }
?>