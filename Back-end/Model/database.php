<?php

class GestionBaseDeDonnees {


    private $pdo;
    private $host = "localhost";
    private $db_name = "cardLoc"; 
    private $username = "root"; 
    private $password = ""; 

    public function __construct() {
        try {
            $this->pdo = new PDO(
                "mysql:host={$this->host};dbname={$this->db_name}",
                $this->username,
                $this->password
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur de connexion à la base de données : " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->pdo;
    }

}

?>