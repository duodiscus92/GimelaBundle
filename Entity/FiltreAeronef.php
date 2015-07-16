<?php

namespace DJET\GimelaBundle\Entity;

//use Doctrine\ORM\Mapping as ORM;

class FiltreAeronef
{
   private $remorqueur;
   private $planeur;
   
   public function setRemorqueur($remorqueur)
    {
        $this->remorqueur = $remorqueur;

        return $this;
    }

    public function getRemorqueur()
    {
        return $this->remorqueur;
    }

   public function setPlaneur($planeur)
    {
        $this->planeur = $planeur;

        return $this;
    }

    public function getPlaneur()
    {
        return $this->planeur;
    }

}


