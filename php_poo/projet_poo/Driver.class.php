<?php
class Driver{
    private $conn;
    public function __construct($conn){
        $this->conn = $conn;
    }

    public function findAll(){
        $donnees = [];
        $nb = 0;
        $sql = "SELECT * FROM personne";
        $res = $this->conn->query($sql);

        while($rows = $res->fetch()){

            $entity = new Entity();

            $entity->setId($rows['Id_personne']);
            $entity->setNom($rows['Nom']);
            $entity->setPrenom($rows['Prenom']);
            $entity->setAge($rows['Age']);

            //$donnees[$nb++] = $entity;
            array_push($donnees, $entity);
        }
        return $donnees;
    }
    public function delete($id){
        $sql = "DELETE FROM personne WHERE Id_personne = '".$id."'";
        $this->conn->exec($sql);
    }

    public function edit($id){
        $sql = "SELECT * FROM personne  
        WHERE Id_personne ='".$id."'";
        $res = $this->conn->query($sql);

         $entity = new Entity();

        if($ligne = $res->fetch()){
            $entity->setId($ligne['Id_personne']);
            $entity->setNom($ligne['Nom']);
            $entity->setPrenom($ligne['Prenom']);
            $entity->setAge($ligne['Age']);
        }
        return $entity;
    }

    public function updateItem(Entity $entity, $id){
        $sql = "UPDATE personne 
              SET Nom = '".$entity->getNom()."', 
                  Prenom = '".$entity->getPrenom()."', 
                  Age = '".$entity->getAge()."'
             WHERE Id_personne = '".$id."'
        ";
        $this->conn->exec($sql);
    }

    public function addItem(Entity $pers1){
        $sql = "INSERT INTO personne(Nom, Prenom, Age)
            VALUES('".$pers1->getNom()."', '".$pers1->getPrenom()."','".$pers1->getAge()."')
        ";
        $this->conn->exec($sql);
        $idLast = $this->conn->lastInsertId();
        return $idLast;
    }
}