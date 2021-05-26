 <?php

   class Category
   {
      //declarer les attributs
      private $id;
      private $label;
      private $description;
        
        
      //Ecrire les getters et les setters de chaque attributs
        
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
         try
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
            $sql="delete from Category where id=:id";
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
            $res=$connection->con->query("select * from Category");
            $i=0;
            while($tab=$res -> fetch(PDO::FETCH_NUM))//fetch va parcourir ligne par ligne les res
            {
               $T[$i]=$Array=array
               (
                  'id'=>$tab[0],
                  'label'=>$tab[1],
                  'description'=>$tab[2]
               );
               $i++;
            }
            return($T);
         }
         catch (Exception $e)
         {
            echo "Error : ".$e;
            return (null);
         } 
      }
         
      public function update($id)
      {
         try
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
         catch(Exception $e)
         {
            echo "Error : ".$e;
            return 0;
         }
      }
        
      public function findCathegoryById($id)
      {
         try
         {
            $c = new Category();
            foreach ($this->getAll() as $v)
            {
               if ($id==$v{'id'})
               {
                  $c->setId($v{'id'});
                  $c->setLabel($v{'label'});
                  $c->setDescription($v{'description'});
                  break;
               }
            }
            return ($c);
         }
         catch(Exception $e)
         {
            echo "Error : ".$e;
            return null;
         }
      }
      
      public function nbCategory()
      {
        try
        {
          $nb=0;
          foreach ($this->getAll() as $v)
          {
            $nb++;
          }
          return $nb;
        }
        catch(Exception $e)
        {
          echo "Error ".$e;
          return 0;
        }
        
      }
        
   }
?>