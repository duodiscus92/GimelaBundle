<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmlPlanche
 *
 * @ORM\Table(name="gml_planche")
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\Repository\GmlPlancheRepository")
 */
class GmlPlanche
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
     * @var \DateTime
     *
     * @ORM\Column(name="pl_date", type="date", nullable=false)
     */
    private $plDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pl_hd", type="time", nullable=false)
     */
    private $plHd;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="pl_ha", type="time", nullable=false)
     */
    private $plHa;

    /**
     * @var string
     *
     * @ORM\Column(name="pl_immat_planeur", type="string", length=10, nullable=false)
     */
    private $plImmatPlaneur;

    /**
     * @var string
     *
     * @ORM\Column(name="pl_immat_rem", type="string", length=10, nullable=false)
     */
    private $plImmatRem;

    /**
     * @var integer
     *
     * @ORM\Column(name="pl_dvr", type="integer", nullable=false)
     */
    private $plDvr;

    /**
     * @var string
     *
     * @ORM\Column(name="pl_1er_pil", type="string", length=100, nullable=false)
     */
    private $pl1erPil;

    /**
     * @var string
     *
     * @ORM\Column(name="pl_2em_pil", type="string", length=100, nullable=false)
     */
    private $pl2emPil;

    /**
     * @var string
     *
     * @ORM\Column(name="pl_typvol", type="string", length=50, nullable=false)
     */
    private $plTypvol;

    /**
     * @var integer
     *
     * @ORM\Column(name="pl_cod_1er_pil", type="integer", nullable=false)
     */
    private $plCod1erPil;

    /**
     * @var integer
     *
     * @ORM\Column(name="pl_cod_2em_pil", type="integer", nullable=false)
     */
    private $plCod2emPil;



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
     * Set plDate
     *
     * @param \DateTime $plDate
     * @return GmlPlanche
     */
    public function setPlDate($plDate)
    {
        $this->plDate = $plDate;

        return $this;
    }

    /**
     * Get plDate
     *
     * @return \DateTime 
     */
    public function getPlDate()
    {
        return $this->plDate;
    }

    /**
     * Set plHd
     *
     * @param \DateTime $plHd
     * @return GmlPlanche
     */
    public function setPlHd($plHd)
    {
        $this->plHd = $plHd;

        return $this;
    }

    /**
     * Get plHd
     *
     * @return \DateTime 
     */
    public function getPlHd()
    {
        return $this->plHd;
    }

    /**
     * Set plHa
     *
     * @param \DateTime $plHa
     * @return GmlPlanche
     */
    public function setPlHa($plHa)
    {
        $this->plHa = $plHa;

        return $this;
    }

    /**
     * Get plHa
     *
     * @return \DateTime 
     */
    public function getPlHa()
    {
        return $this->plHa;
    }

    /**
     * Set plImmatPlaneur
     *
     * @param string $plImmatPlaneur
     * @return GmlPlanche
     */
    public function setPlImmatPlaneur($plImmatPlaneur)
    {
        $this->plImmatPlaneur = $plImmatPlaneur;

        return $this;
    }

    /**
     * Get plImmatPlaneur
     *
     * @return string 
     */
    public function getPlImmatPlaneur()
    {
        return $this->plImmatPlaneur;
    }

    /**
     * Set plImmatRem
     *
     * @param string $plImmatRem
     * @return GmlPlanche
     */
    public function setPlImmatRem($plImmatRem)
    {
        $this->plImmatRem = $plImmatRem;

        return $this;
    }

    /**
     * Get plImmatRem
     *
     * @return string 
     */
    public function getPlImmatRem()
    {
        return $this->plImmatRem;
    }

    /**
     * Set plDvr
     *
     * @param integer $plDvr
     * @return GmlPlanche
     */
    public function setPlDvr($plDvr)
    {
        $this->plDvr = $plDvr;

        return $this;
    }

    /**
     * Get plDvr
     *
     * @return integer 
     */
    public function getPlDvr()
    {
        return $this->plDvr;
    }

    /**
     * Set pl1erPil
     *
     * @param string $pl1erPil
     * @return GmlPlanche
     */
    public function setPl1erPil($pl1erPil)
    {
        $this->pl1erPil = $pl1erPil;

        return $this;
    }

    /**
     * Get pl1erPil
     *
     * @return string 
     */
    public function getPl1erPil()
    {
        return $this->pl1erPil;
    }

    /**
     * Set pl2emPil
     *
     * @param string $pl2emPil
     * @return GmlPlanche
     */
    public function setPl2emPil($pl2emPil)
    {
        $this->pl2emPil = $pl2emPil;

        return $this;
    }

    /**
     * Get pl2emPil
     *
     * @return string 
     */
    public function getPl2emPil()
    {
        return $this->pl2emPil;
    }

    /**
     * Set plTypvol
     *
     * @param string $plTypvol
     * @return GmlPlanche
     */
    public function setPlTypvol($plTypvol)
    {
        $this->plTypvol = $plTypvol;

        return $this;
    }

    /**
     * Get plTypvol
     *
     * @return string 
     */
    public function getPlTypvol()
    {
        return $this->plTypvol;
    }

    /**
     * Set plCod1erPil
     *
     * @param integer $plCod1erPil
     * @return GmlPlanche
     */
    public function setPlCod1erPil($plCod1erPil)
    {
        $this->plCod1erPil = $plCod1erPil;

        return $this;
    }

    /**
     * Get plCod1erPil
     *
     * @return integer 
     */
    public function getPlCod1erPil()
    {
        return $this->plCod1erPil;
    }

    /**
     * Set plCod2emPil
     *
     * @param integer $plCod2emPil
     * @return GmlPlanche
     */
    public function setPlCod2emPil($plCod2emPil)
    {
        $this->plCod2emPil = $plCod2emPil;

        return $this;
    }

    /**
     * Get plCod2emPil
     *
     * @return integer 
     */
    public function getPlCod2emPil()
    {
        return $this->plCod2emPil;
    }
}
