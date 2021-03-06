<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmlStatut
 *
 * @ORM\Table(name="gml_statut")
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\Repository\GmlStatutRepository")
 */
class GmlStatut
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="st_type", type="string", length=255, nullable=false)
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
     * @return GmlStatut
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
