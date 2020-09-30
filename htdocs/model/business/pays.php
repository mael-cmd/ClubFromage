<?php

namespace model\business;

class pays
{
    public $_identifiant;
    public $_nom;

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
        return $this->_nom;
    }
    public function setNom($nom)
    {
        $this->_nom = $nom;
    }
}

