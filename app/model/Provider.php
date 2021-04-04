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
            try
            {
                global $connection;
                $data =
                [
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'email' => $this->email,
                    'address' => $this->address,
                    'telephone' => $this->telephone,
                ];
                $sql = "INSERT INTO Provider (first_name, last_name, email , address,telephone )
                        VALUES (:first_name, :last_name, :email , :address,:telephone)";
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
                    'id' => $id,
                ];
                $sql = "DELETE FROM Provider where id=$id";
                $stmt= $connection->con->prepare($sql);
                return $stmt->execute($data);
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
                global $connection;
                $T = array();
                $res = $connection->con->query("SELECT * from Provider");
                $i = 0;
                while($tab=$res->fetch(PDO::FETCH_NUM))
                {
                    $T[$i] = $Array = array
                    (
                        'id'=> $tab[0],
                        'first_name' => $tab[1],
                        'last_name' => $tab[2],
                        'email'=> $tab[3],
                        'address'=> $tab[4],
                        'telephone' => $tab[5]
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
        
        public function update($id)
        {
            try
            {
                global $connection;
                $data =
                [
                    'first_name' => $this->first_name,
                    'last_name' => $this->last_name,
                    'email' => $this->email,
                    'address' => $this->address,
                    'telephone' => $this->telephone,
                    'id' => $id,
                ];
                $sql = "UPDATE Provider SET 
                        first_name=:first_name,
                        last_name=:last_name,
                        email=:email,
                        address=:address,
                        telephone=:telephone
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
    }
?>
