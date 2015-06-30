<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tarif
 *
 * @ORM\Table(name="gml_tarif")
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\TarifRepository")
 */
class Tarif
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="trf_date", type="datetime")
     */
    private $trfDate;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_libelle", type="string", length=255)
     */
    private $trfLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_comment", type="string", length=255)
     */
    private $trfComment;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_montant_inf25", type="decimal", precision=10, scale=2 )
     */
    private $trfMontantInf25;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_montant_sup25", type="decimal", precision=10, scale=2)
     */
    private $trfMontantSup25;

    /**
     * @var integer
     *
     * @ORM\Column(name="trf_codbar", type="integer")
     */
    private $trfCodbar;


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
     * Set trfLibelle
     *
     * @param string $trfLibelle
     * @return Tarif
     */
    public function setTrfLibelle($trfLibelle)
    {
        $this->trfLibelle = $trfLibelle;

        return $this;
    }

    /**
     * Get trfLibelle
     *
     * @return string 
     */
    public function getTrfLibelle()
    {
        return $this->trfLibelle;
    }

    /**
     * Set trfComment
     *
     * @param string $trfComment
     * @return Tarif
     */
    public function setTrfComment($trfComment)
    {
        $this->trfComment = $trfComment;

        return $this;
    }

    /**
     * Get trfComment
     *
     * @return string 
     */
    public function getTrfComment()
    {
        return $this->trfComment;
    }

    /**
     * Set trfMontantInf25
     *
     * @param string $trfMontantInf25
     * @return Tarif
     */
    public function setTrfMontantInf25($trfMontantInf25)
    {
        $this->trfMontantInf25 = $trfMontantInf25;

        return $this;
    }

    /**
     * Get trfMontantInf25
     *
     * @return string 
     */
    public function getTrfMontantInf25()
    {
        return $this->trfMontantInf25;
    }

    /**
     * Set trfMontantSup25
     *
     * @param string $trfMontantSup25
     * @return Tarif
     */
    public function setTrfMontantSup25($trfMontantSup25)
    {
        $this->trfMontantSup25 = $trfMontantSup25;

        return $this;
    }

    /**
     * Get trfMontantSup25
     *
     * @return string 
     */
    public function getTrfMontantSup25()
    {
        return $this->trfMontantSup25;
    }

    /**
     * Set trfCodbar
     *
     * @param integer $trfCodbar
     * @return Tarif
     */
    public function setTrfCodbar($trfCodbar)
    {
        $this->trfCodbar = $trfCodbar;

        return $this;
    }

    /**
     * Get trfCodbar
     *
     * @return integer 
     */
    public function getTrfCodbar()
    {
        return $this->trfCodbar;
    }

    /**
     * Set trfDate
     *
     * @param \DateTime $trfDate
     * @return Tarif
     */
    public function setTrfDate($trfDate)
    {
        $this->trfDate = $trfDate;

        return $this;
    }

    /**
     * Get trfDate
     *
     * @return \DateTime 
     */
    public function getTrfDate()
    {
        return $this->trfDate;
    }
}
