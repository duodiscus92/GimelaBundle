<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
//use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
/**
 * GmlAeronef
 *
 * @ORM\Table(name="gml_aeronef", indexes={@ORM\Index(name="aero_createur", columns={"aero_createur"})})
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\Repository\GmlAeronefRepository")
 * @UniqueEntity(fields="aeroImmat", message="Cette immatriculation a déjà été créee")
 */
class GmlAeronef
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
     * @ORM\Column(name="aero_date", type="datetime", nullable=false)
     */
    private $aeroDate;

    /**
     * @var string
     *
     * @ORM\Column(name="aero_type", type="string", length=255, nullable=false)
     */
    private $aeroType;

    /**
     * @var string
     *
     * @ORM\Column(name="aero_immat", type="string", length=255, nullable=false)
     */
    private $aeroImmat;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aero_statut", type="boolean", nullable=false)
     */
    private $aeroStatut;

    /**
     * @var boolean
     *
     * @ORM\Column(name="aero_envol", type="boolean", nullable=false)
     */
    private $aeroEnvol;

    /**
     * @var \GmlUser
     *
     * @ORM\ManyToOne(targetEntity="GmlUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="aero_createur", referencedColumnName="id")
     * })
     */
    private $aeroCreateur;



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
     * Set aeroDate
     *
     * @param \DateTime $aeroDate
     * @return GmlAeronef
     */
    public function setAeroDate($aeroDate)
    {
        $this->aeroDate = $aeroDate;

        return $this;
    }

    /**
     * Get aeroDate
     *
     * @return \DateTime 
     */
    public function getAeroDate()
    {
        return $this->aeroDate;
    }

    /**
     * Set aeroType
     *
     * @param string $aeroType
     * @return GmlAeronef
     */
    public function setAeroType($aeroType)
    {
        $this->aeroType = $aeroType;

        return $this;
    }

    /**
     * Get aeroType
     *
     * @return string 
     */
    public function getAeroType()
    {
        return $this->aeroType;
    }

    /**
     * Set aeroImmat
     *
     * @param string $aeroImmat
     * @return GmlAeronef
     */
    public function setAeroImmat($aeroImmat)
    {
        $this->aeroImmat = $aeroImmat;

        return $this;
    }

    /**
     * Get aeroImmat
     *
     * @return string 
     */
    public function getAeroImmat()
    {
        return $this->aeroImmat;
    }

    /**
     * Set aeroStatut
     *
     * @param boolean $aeroStatut
     * @return GmlAeronef
     */
    public function setAeroStatut($aeroStatut)
    {
        $this->aeroStatut = $aeroStatut;

        return $this;
    }

    /**
     * Get aeroStatut
     *
     * @return boolean 
     */
    public function getAeroStatut()
    {
        return $this->aeroStatut;
    }

    /**
     * Set aeroEnvol
     *
     * @param boolean $aeroEnvol
     * @return GmlAeronef
     */
    public function setAeroEnvol($aeroEnvol)
    {
        $this->aeroEnvol = $aeroEnvol;

        return $this;
    }

    /**
     * Get aeroEnvol
     *
     * @return boolean 
     */
    public function getAeroEnvol()
    {
        return $this->aeroEnvol;
    }

    /**
     * Set aeroCreateur
     *
     * @param \DJET\GimelaBundle\Entity\GmlUser $aeroCreateur
     * @return GmlAeronef
     */
    public function setAeroCreateur(\DJET\GimelaBundle\Entity\GmlUser $aeroCreateur = null)
    {
        $this->aeroCreateur = $aeroCreateur;

        return $this;
    }

    /**
     * Get aeroCreateur
     *
     * @return \DJET\GimelaBundle\Entity\GmlUser 
     */
    public function getAeroCreateur()
    {
        return $this->aeroCreateur;
    }
}
