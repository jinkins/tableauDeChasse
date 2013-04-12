<?php

class UserManager
{

    private $db;

    public function __construct()
    {
        $this->db = new BDD();
    }

    public function connexion($id, $mdp)
    {
        $q = $this->db->prepare("SELECT COUNT(*) AS resultat FROM users WHERE ID = :id AND MDP = :mdp");
        $q->bindValue(":id" , $id);
        $q->bindValue(":mdp" , $mdp);
        $q->execute();
        
        $r = $q->fetch();
        $ok = $r["resultat"];
        
        if($ok == 0)
        {
            return false;
        }
        
        else
        {
            return true;
        }
    }
    
    public function selectAll()
    {
        $q = $this->db->query("SELECT ID, Nom, Prenom FROM users");
        return $q->fetchAll();
    }
    
    public function select($id)
    {
        $q = $this->db->prepare("SELECT * FROM users WHERE ID = :id");
        $q->bindValue(':id', $id);

        $q->execute();
        $resultat = $q->fetch();
        
        $user = new User($resultat);
        return $user;
    }
    
    
    
    
}
