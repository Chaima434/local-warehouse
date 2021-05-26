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
        private $login;

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
        
        //login
        public function getLogin()
        {
            return $this->login;
        }
        
        public function setLogin($login)
        {
            $this->login = $login;
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
                global $connection;
                $data =
                [
                    'label' => $this->label,
                    'description' => $this->description,
                    'number' => $this->number,
                    'price' => $this->price,
                    'photo' => $this->photo,
                    'idCat' => $this->idCat,
                    'login'=>$this->login,
                    'idProvider'=>$this->idProvider,
                ];
                $sql = "INSERT INTO Product ( label,description,number,price ,photo ,idCat ,login ,idProvider)
                        VALUES (:label,:description,:number, :price , :photo , :idCat ,:login ,:idProvider)";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);

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
                        'id'=>$tab[0],
                        'label'=>$tab[1],
                        'number'=>$tab[2] ,
                        'price' => $tab[3],
                        'description' => $tab[4],
                        'photo' => $tab[5],
                        'idCat' => $tab[6],
                        'login' => $tab[7],
                        'idProvider' =>$tab[8]
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
        
        public function update()
        {
            try
            {
                global $connection;
                $data =
                [
                    'id'=>$id,
                    'label' => $this->label,
                    'description' => $this->description,
                    'number' => $this->number,
                    'price' => $this->price,
                    'idCat' => $this->idCat,
                    'login'=>$this->login,
                    'idProvider'=>$this->idProvider,
                ];
                $sql = "UPDATE Product SET 
                            label=:label,
                            description=:description,
                            number=:number,
                            price=:price,
                            idCat=:idCat,
                            login=:login,
                            idProvider=:idProvider
                        WHERE id=:id";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
            }
            catch(Exception $e)
            {
                echo "Error : ".$e;
                return 0;
            }
        }
        
        public function findProductById($id)
        {
            $product= new Product();
            foreach($this->getAll() as $v)
            {
                if($v{'id'}==$id)
                {
                    $product->setId($v{'id'});
                    $product->setLabel($v{'label'});
                    $product->setDescription($v{'description'});
                    $product->setNumber($v{'number'});
                    $product->setPrice($v{'price'});
                    $product->setPhoto($v{'photo'});
                    $product->setIdCat($v{'idCat'});
                    $product->setidProvider($v{'idProvider'});
                    $product->setlogin($v{'login'});
                    break;
                }
            }
            return($product);
        }
        
        public function findProductsByProvider($idProvider)
        {
            try
            {
                global $connection ;
                $T=array();
                $res=$connection -> con->query("select * from Product where idProvider=$idProvider");
                $i=0;
                while($tab=$res -> fetch(PDO::FETCH_NUM))
                {
                    $T[$i]=$Array=array
                    (
                        'id'=>$tab[0],
                        'label'=>$tab[1],
                        'number'=>$tab[2] ,
                        'price' => $tab[3],
                        'description' => $tab[4],
                        'photo' => $tab[5],
                        'idCat' => $tab[6],
                        'login' => $tab[7],
                        'idProvider' =>$tab[8]
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
        
        public function findProductsByCategory($idCat)
        {
            try
            {
                global $connection ;
                $T=array();
                $res=$connection -> con->query("select * from Product where idCat=$idCat");
                $i=0;
                while($tab=$res -> fetch(PDO::FETCH_NUM))
                {
                    $T[$i]=$Array=array
                    (
                        'id'=>$tab[0],
                        'label'=>$tab[1],
                        'number'=>$tab[2] ,
                        'price' => $tab[3],
                        'description' => $tab[4],
                        'photo' => $tab[5],
                        'idCat' => $tab[6],
                        'login' => $tab[7],
                        'idProvider' =>$tab[8]
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
    
        //toString() method
        public function toString()
        {
            return "[]";
        }
    }
?>