<?php

namespace model\business;

use model\business\Aliment;
use model\business\IBusinessClass;

class fromage extends Aliment implements IBusinessClass
{
    public $_identifiant;
    public $_Nom;
    public $_Pays;
    public $_Affinage ;
    public $_DateCreation;
    public $_image;
    public $_recette;
    public $_histoire;

    public function __construct(array $data)
    {
        $this->hydrate($data);
    }

    public function hydrate(array $donnees)
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

    public function getAffinage()
    {
        return $this->_Affinage;
    }
    public function setAffinage($Affinage)
    {
        $this->_Affinage = $Affinage;
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
}
