<?php
class Conquete
{
    protected 
            $id,
            $nom,
            $prenom,
            $dateNaissance,
            $dateRencontre,
            $teint,
            $cheveux,
            $charme,
            $chaleur,
            $futur,
            $approche,
            $relation,
            $visage,
            $sParfait,
            $avant,
            $arriere,
            $tdt,
            $taille,
            $couple,
            $public,
            $conquerant;
    
    public function __construct(array $donnees)
    {
        $this->hydrate($donnees);
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
    
    public function get($champ)
    {
        return $this->$champ;
    }
    
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
    
    public function setDateNaissance($dn)
    {
        $this->dateNaissance = $dn;
    }
    
    public function setDateRencontre($dr)
    {
        $this->dateRencontre = $dr;
    }
    
    public function setTeint($teint)
    {
        $this->teint = $teint;
    }
    
    public function setCheveux($cheveux)
    {
        $this->cheveux = $cheveux;
    }
    
    public function setCharme($charme)
    {
        $this->charme = (int) $charme;
    }
    
    public function setChaleur($c)
    {
        $this->chaleur = (int) $c;
    }
    
    public function setFutur($f)
    {
        if($f == 1)
        {
            $this->futur = true;
        }
        
        else
        {
            $this->futur = false; 
        }
    }
    
    public function setApproche($a)
    {
        $this->approche = $a;
    }
    
    public function setRelation($r)
    {
        $this->relation = $r;
    }
    
    public function setVisage($v)
    {
        $this->visage = (int) $v;
    }
    
    public function setSParfait($sp)
    {
        $this->sParfait = (int) $sp;
    }
    
    public function setAvant($a)
    {
        $this->avant = (int) $a;
    }
    
    public function setArriere($a)
    {
        $this->arriere = (int) $a;
    }
    
    public function setTDT($tdt)
    {
        $this->tdt = (int) $tdt;
    }
    
    public function setTaille($taille)
    {
        $this->taille = (int) $taille;
    }
    
    public function setCouple($c)
    {
        if($c == 1)
        {
            $this->couple = true;
        }
        
        else
        {
            $this->couple = false; 
        }
    }
    
    public function setConquerant($c)
    {
        $this->conquerant = (int) $c;
    }
    
    public function setPublic($p)
    {
        if($p == 1)
        {
            $this->public = true;
        }
        
        else
        {
            $this->public = false; 
        }
                
    }
            
            
            
            
}

?>
