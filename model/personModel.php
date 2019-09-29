<?php

class PersonModel{
    private $pdo;

    public function __construct(PDO $pdo){
        $this->pdo = $pdo;
    }

    public function list(){
        $sql = "SELECT * from person";

        $result = $this->pdo->query(
            $sql, PDO::FETCH_CLASS, 'Person'
        );

        $people = [];
        foreach($result as $person){
            $people[] = $person;
        }

        return $people;
    }

    public function save(Person $person){
        $sql = "INSERT into person 
                (name, height, rate)
                VALUES
                (:name, :height, :rate)";

        $query = $this->pdo->prepare($sql);

        $query->execute([
            'name'    => $person->getName(),
            'height'  => $person->getHeight(),
            'rate'    => $person->getRate(),
        ]);
    }

    public function update(Person $person){
        $sql = "UPDATE person SET 
                height  = :height
                WHERE id = :id
                ";

        try{
            $query = $this->pdo->prepare($sql);
        }catch(PDOException $e){
            echo $e->getMessage();
        }

        $query->execute([
            'height'    => $person->getHeight(),
            'id'        => $person->getId(),
        ]);
    }

    public function remove_all(){
        $sql = "TRUNCATE TABLE person";
        $query = $this->pdo->prepare($sql);
        $query->execute();
    }

    public function search($id){
        $sql = "SELECT * FROM person WHERE id = :id";
        $query = $this->pdo->prepare($sql);
        $query->execute([
            'id' => $id,
        ]);
        $person = $query->fetchObject('Person');
        return $person;
    }
}