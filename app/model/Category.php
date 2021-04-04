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
            global $connection;
            $data =
            [
               'label' => $this->label,
               'description' => $this->description,
            ];
            $sql="insert into Category values(null,:label,:description)";
            //prepare la requette sql 
            $stmt=$connection->con->prepare($sql);
            //executer la requette en utilisant les parametre de la variable $data
            return $stmt ->execute($data);
             
        }
         
        public function delete($id)
        {
            global $connection;
            $data =
            [
                'id'=>$id,//valeur=$id , param='id'
            ];
            $sql="delete from Category where id=:id";
            //prepare la requette sql 
            $stmt=$connection->con->prepare($sql);
            //executer la requette en utilisant les parametre de la variable $data
            return $stmt ->execute($data);




             
        }
         
        public function getAll()
        {
            try 
            {
                global $connection ;
                $T=array();
                $res=$connection -> con->query("select * from Category");
                $i=0;
                while($tab=$res -> fetch(PDO::FETCH_NUM))//fetch va parcourir ligne par ligne les res
            
                {
                    $T[$i]=$Array=array
                    (
                        'id'=>$this->id,
                        'label'=>$this->label,
                        'description'=>$this->description 

                    );
                    

                }

            }
            catch (Exception $e)
            {
                echo "Erreur ".$e;
                return (null);
            }
             
        }
         
        public function update($id)
        {
            global $connection;
            $data =
            [
                'id'=>$id,//valeur=$id , param='id'
                'label'=>$this->label,
                'description'=>$this->description,
            ];
            $sql="update Category set label=:label , description=:description where id=:id";
            //prepare la requette sql 
            $stmt=$connection->con->prepare($sql);
            //executer la requette en utilisant les parametre de la variable $data
            return $stmt ->execute($data);
             
        }
     }
 ?>