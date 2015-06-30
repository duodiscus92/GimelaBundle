<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statut
 *
 * @ORM\Table(name="gml_statut")
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\StatutRepository")
 */
class Statut
{
    public function __construct()
    {
      // Par défaut, le statut est visiteur
      $this->stType = 'VISITEUR';
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="st_type", type="string", length=255)
     */
    private $stType;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set stType
     *
     * @param string $stType
     * @return Statut
     */
    public function setStType($stType)
    {
        $this->stType = $stType;

        return $this;
    }

    /**
     * Get stType
     *
     * @return string 
     */
    public function getStType()
    {
        return $this->stType;
    }
}
