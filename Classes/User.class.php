<?php

class User
{

    protected
            $id,
            $nom,
            $prenom;

    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
        $this->manager = new UserManager();
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set' . $key;

            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }
    
    public function arrivee()
    {
        $this->manager->arrivee($this->id);
    }
    
    
    // GET

    public function get($champ)
    {
        return $this->$champ;
    }

    // SETTERS 

    public function setID($id)
    {
        $this->id = (int) $id;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    public function setPresent($reponse)
    {

        $this->present = $reponse;
    }

    public function toXML()
    {
        $texte = "<user id='" . $this->id . "'>";
        $texte .= '<nom>' . $this->nom . '</nom>';
        $texte .= '<prenom>' . $this->prenom . '</prenom>';
        $texte .= "</user>";
        return $texte;
    }

}

?>
