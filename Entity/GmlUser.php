<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * GmlUser
 *
 * @ORM\Table(name="gml_user", uniqueConstraints={@ORM\UniqueConstraint(name="UNIQ_3CCFC580F6203804", columns={"usr_statut"})})
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\Repository\GmlUserRepository")
 */
class GmlUser
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
     * @ORM\Column(name="usr_date", type="datetime", nullable=false)
     */
    private $usrDate;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_nom", type="string", length=255, nullable=false)
     */
    private $usrNom;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_prenom", type="string", length=255, nullable=false)
     */
    private $usrPrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_login", type="string", length=255, nullable=false)
     */
    private $usrLogin;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_mdp", type="string", length=255, nullable=false)
     */
    private $usrMdp;

    /**
     * @var string
     *
     * @ORM\Column(name="usr_mail", type="string", length=255, nullable=false)
     */
    private $usrMail;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_codcvvfr", type="integer", nullable=false)
     */
    private $usrCodcvvfr;

    /**
     * @var integer
     *
     * @ORM\Column(name="usr_codffvv", type="integer", nullable=false)
     */
    private $usrCodffvv;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_forfait", type="boolean", nullable=false)
     */
    private $usrForfait;

    /**
     * @var boolean
     *
     * @ORM\Column(name="usr_aneg", type="boolean", nullable=false)
     */
    private $usrAneg;

    /**
     * @var \GmlStatut
     *
     * @ORM\ManyToOne(targetEntity="GmlStatut")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usr_statut", referencedColumnName="id")
     * })
     */
    private $usrStatut;



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
     * Set usrDate
     *
     * @param \DateTime $usrDate
     * @return GmlUser
     */
    public function setUsrDate($usrDate)
    {
        $this->usrDate = $usrDate;

        return $this;
    }

    /**
     * Get usrDate
     *
     * @return \DateTime 
     */
    public function getUsrDate()
    {
        return $this->usrDate;
    }

    /**
     * Set usrNom
     *
     * @param string $usrNom
     * @return GmlUser
     */
    public function setUsrNom($usrNom)
    {
        $this->usrNom = $usrNom;

        return $this;
    }

    /**
     * Get usrNom
     *
     * @return string 
     */
    public function getUsrNom()
    {
        return $this->usrNom;
    }

    /**
     * Set usrPrenom
     *
     * @param string $usrPrenom
     * @return GmlUser
     */
    public function setUsrPrenom($usrPrenom)
    {
        $this->usrPrenom = $usrPrenom;

        return $this;
    }

    /**
     * Get usrPrenom
     *
     * @return string 
     */
    public function getUsrPrenom()
    {
        return $this->usrPrenom;
    }

    /**
     * Set usrLogin
     *
     * @param string $usrLogin
     * @return GmlUser
     */
    public function setUsrLogin($usrLogin)
    {
        $this->usrLogin = $usrLogin;

        return $this;
    }

    /**
     * Get usrLogin
     *
     * @return string 
     */
    public function getUsrLogin()
    {
        return $this->usrLogin;
    }

    /**
     * Set usrMdp
     *
     * @param string $usrMdp
     * @return GmlUser
     */
    public function setUsrMdp($usrMdp)
    {
        $this->usrMdp = $usrMdp;

        return $this;
    }

    /**
     * Get usrMdp
     *
     * @return string 
     */
    public function getUsrMdp()
    {
        return $this->usrMdp;
    }

    /**
     * Set usrMail
     *
     * @param string $usrMail
     * @return GmlUser
     */
    public function setUsrMail($usrMail)
    {
        $this->usrMail = $usrMail;

        return $this;
    }

    /**
     * Get usrMail
     *
     * @return string 
     */
    public function getUsrMail()
    {
        return $this->usrMail;
    }

    /**
     * Set usrCodcvvfr
     *
     * @param integer $usrCodcvvfr
     * @return GmlUser
     */
    public function setUsrCodcvvfr($usrCodcvvfr)
    {
        $this->usrCodcvvfr = $usrCodcvvfr;

        return $this;
    }

    /**
     * Get usrCodcvvfr
     *
     * @return integer 
     */
    public function getUsrCodcvvfr()
    {
        return $this->usrCodcvvfr;
    }

    /**
     * Set usrCodffvv
     *
     * @param integer $usrCodffvv
     * @return GmlUser
     */
    public function setUsrCodffvv($usrCodffvv)
    {
        $this->usrCodffvv = $usrCodffvv;

        return $this;
    }

    /**
     * Get usrCodffvv
     *
     * @return integer 
     */
    public function getUsrCodffvv()
    {
        return $this->usrCodffvv;
    }

    /**
     * Set usrForfait
     *
     * @param boolean $usrForfait
     * @return GmlUser
     */
    public function setUsrForfait($usrForfait)
    {
        $this->usrForfait = $usrForfait;

        return $this;
    }

    /**
     * Get usrForfait
     *
     * @return boolean 
     */
    public function getUsrForfait()
    {
        return $this->usrForfait;
    }

    /**
     * Set usrAneg
     *
     * @param boolean $usrAneg
     * @return GmlUser
     */
    public function setUsrAneg($usrAneg)
    {
        $this->usrAneg = $usrAneg;

        return $this;
    }

    /**
     * Get usrAneg
     *
     * @return boolean 
     */
    public function getUsrAneg()
    {
        return $this->usrAneg;
    }

    /**
     * Set usrStatut
     *
     * @param \DJET\GimelaBundle\Entity\GmlStatut $usrStatut
     * @return GmlUser
     */
    public function setUsrStatut(\DJET\GimelaBundle\Entity\GmlStatut $usrStatut = null)
    {
        $this->usrStatut = $usrStatut;

        return $this;
    }

    /**
     * Get usrStatut
     *
     * @return \DJET\GimelaBundle\Entity\GmlStatut 
     */
    public function getUsrStatut()
    {
        return $this->usrStatut;
    }
}
