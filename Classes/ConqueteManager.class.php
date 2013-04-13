<?php
class ConqueteManager
{
    private $db;

    public function __construct()
    {
        $this->db = new BDD();
    }
    
    public function selectFromConquerant($conq)
    {
        $q = $this->db->prepare("SELECT * FROM conquetes WHERE Conquerant = :conq");
        $q->bindValue(":conq", $conq);
        $q->execute();
        
        while($ligne = $q->fetch())
        {
            $liste[] = new Conquete($ligne);
        }
        
        if(isset($liste))
        {
            return $liste;
        }
        
        else
        {
            return false;
        }
    }
    
    public function select($conq)
    {
        $q = $this->db->prepare("SELECT * FROM conquetes WHERE ID = :conq");
        $q->bindValue(":conq", $conq);
        $q->execute();
        
        while($ligne = $q->fetch())
        {
            $liste[] = new Conquete($ligne);
        }
        
        if(isset($liste))
        {
            return $liste;
        }
        
        else
        {
            return false;
        }
    }
    
    
}

?>
