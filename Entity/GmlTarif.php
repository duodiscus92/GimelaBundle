<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmlTarif
 *
 * @ORM\Table(name="gml_tarif", indexes={@ORM\Index(name="trf_createur", columns={"trf_createur"})})
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\Repository\GmlTarifRepository")
 */
class GmlTarif
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
     * @ORM\Column(name="trf_date", type="datetime", nullable=false)
     */
    private $trfDate;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_libelle", type="string", length=255, nullable=false)
     */
    private $trfLibelle;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_comment", type="string", length=255, nullable=false)
     */
    private $trfComment;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_montant_inf25", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $trfMontantInf25;

    /**
     * @var string
     *
     * @ORM\Column(name="trf_montant_sup25", type="decimal", precision=10, scale=2, nullable=false)
     */
    private $trfMontantSup25;

    /**
     * @var integer
     *
     * @ORM\Column(name="trf_codbar", type="integer", nullable=false)
     */
    private $trfCodbar;

    /**
     * @var \GmlUser
     *
     * @ORM\ManyToOne(targetEntity="GmlUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="trf_createur", referencedColumnName="id")
     * })
     */
    private $trfCreateur;



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
     * Set trfDate
     *
     * @param \DateTime $trfDate
     * @return GmlTarif
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

    /**
     * Set trfLibelle
     *
     * @param string $trfLibelle
     * @return GmlTarif
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
     * @return GmlTarif
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
     * @return GmlTarif
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
     * @return GmlTarif
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
     * @return GmlTarif
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
     * Set trfCreateur
     *
     * @param \DJET\GimelaBundle\Entity\GmlUser $trfCreateur
     * @return GmlTarif
     */
    public function setTrfCreateur(\DJET\GimelaBundle\Entity\GmlUser $trfCreateur = null)
    {
        $this->trfCreateur = $trfCreateur;

        return $this;
    }

    /**
     * Get trfCreateur
     *
     * @return \DJET\GimelaBundle\Entity\GmlUser 
     */
    public function getTrfCreateur()
    {
        return $this->trfCreateur;
    }
}
