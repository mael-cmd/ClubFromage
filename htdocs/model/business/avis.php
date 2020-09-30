<?php

namespace model\business;

class avis
{
    public $_Avis;
    public $_Note;
    public $_fromage;
    public $_membre;

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

    public function getAvis()
    {
        return $this->_Avis;
    }
    public function setAvis($Avis)
    {
        $this->_Avis = $Avis;
    }

    public function getNote()
    {
        return $this->_Note;
    }
    public function setNote($Note)
    {
        $this->_Note = $Note;
    }

    public function getFromage()
    {
        return $this->_fromage;
    }
    public function setFromage($fromage)
    {
        $this->_fromage = $fromage;
    }

    public function getMembre()
    {
        return $this->_membre;
    }
    public function setMembre($membre)
    {
        $this->_membre = $membre;
    }

}

