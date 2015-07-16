<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmlPlindex
 *
 * @ORM\Table(name="gml_plindex")
 * @ORM\Entity
 */
class GmlPlindex
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
     * @var integer
     *
     * @ORM\Column(name="pli_index", type="integer", nullable=false)
     */
    private $pliIndex;



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
     * Set pliIndex
     *
     * @param integer $pliIndex
     * @return GmlPlindex
     */
    public function setPliIndex($pliIndex)
    {
        $this->pliIndex = $pliIndex;

        return $this;
    }

    /**
     * Get pliIndex
     *
     * @return integer 
     */
    public function getPliIndex()
    {
        return $this->pliIndex;
    }
}
