<?php
class Visite
{
    private $_idVisite;
    private $_dateVisite;

    public function getIdVisite()
    {
        return $this->_idVisite;
    }
    public function setIdVisite($idVisite)
    {
        return $this->_idVisite = $idVisite;
    }

    public function getDateVisite()
    {
        return $this->_dateVisite;
    }
    public function setDateVisite($dateVisite)
    {
        return $this->_dateVisite = $dateVisite;
    }

    public function __construct(array $options = [])
    {
        if (!empty($options))
        {
            $this->hydrate($options);
        }
    }

    public function hydrate($data)
    {
        foreach ($data as $key => $value)
        {
            $methode = "set" . ucfirst($key);
            if (is_callable(([$this, $methode])))
            {
                $this->$methode($value);
            }
        }
    }
    public function toString()
    {
        return $this->getDateVisite(); 
    }
}