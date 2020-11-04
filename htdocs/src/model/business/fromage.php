<?php

namespace model\business;

class fromage
{
    public $_identifiant;
    public $_Nom;
    public $_Affinage ;
    public $_DateCreation;
    public $_image;
    public $_recette;
    public $_histoire;
    public $_pays;

    public function __construct($t)
    {
        $this->hydrate($t);
    }
    private function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'.ucfirst($key);
            if (method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    public function getIdentifiant()
    {
        return $this->_identifiant;
    }
    public function setIdentifiant($identifiant)
    {
        $this->_identifiant = $identifiant;
    }

    public function getNom()
    {
        return $this->_Nom;
    }
    public function setNom($Nom)
    {
        $this->_Nom = $Nom;
    }

    public function getAffinage()
    {
        return $this->_Affinage;
    }
    public function setAffinage($Affinage)
    {
        $this->_Affinage = $Affinage;
    }

    public function getDateCreation()
    {
        return $this->_DateCreation;
    }
    public function setDateCreation($DateCreation)
    {
        $this->_DateCreation = $DateCreation;
    }

    public function getImage()
    {
        return $this->_image;
    }
    public function setImage($image)
    {
        $this->_image = $image;
    }

    public function getRecette()
    {
        return $this->_recette;
    }
    public function setRecette($recette)
    {
        $this->_recette = $recette;
    }

    public function getHistoire()
    {
        return $this->_histoire;
    }
    public function setHistoire($histoire)
    {
        $this->_histoire = $histoire;
    }

    public function getPays()
    {
        return $this->_pays;
    }
    public function setPays($pays)
    {
        $this->_pays = $pays;
    }

}
