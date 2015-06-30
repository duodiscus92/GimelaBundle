<?php

namespace DJET\GimelaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mouvement
 *
 * @ORM\Table(name="gml_mouvement")
 * @ORM\Entity(repositoryClass="DJET\GimelaBundle\Entity\MouvementRepository")
 */
class Mouvement
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
     * @ORM\Column(name="mvt_date", type="datetime")
     */
    private $mvtDate;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_debit", type="decimal", precision=10, scale=2)
     */
    private $mvtDebit;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_credit", type="decimal", precision=10, scale=2)
     */
    private $mvtCredit;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_operation_id", type="integer")
     */
    private $mvtOperationId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mvt_compte_id", type="integer")
     */
    private $mvtCompteId;

    /**
     * @var string
     *
     * @ORM\Column(name="mvt_comment", type="string", length=255)
     */
    private $mvtComment;

     /**
     * @ORM\OneToOne(targetEntity="DJET\GimelaBundle\Entity\User", cascade={"persist"})
     */
    private $user;


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
     * Set mvtDate
     *
     * @param \DateTime $mvtDate
     * @return Mouvement
     */
    public function setMvtDate($mvtDate)
    {
        $this->mvtDate = $mvtDate;

        return $this;
    }

    /**
     * Get mvtDate
     *
     * @return \DateTime 
     */
    public function getMvtDate()
    {
        return $this->mvtDate;
    }

    /**
     * Set mvtDebit
     *
     * @param string $mvtDebit
     * @return Mouvement
     */
    public function setMvtDebit($mvtDebit)
    {
        $this->mvtDebit = $mvtDebit;

        return $this;
    }

    /**
     * Get mvtDebit
     *
     * @return string 
     */
    public function getMvtDebit()
    {
        return $this->mvtDebit;
    }

    /**
     * Set mvtCredit
     *
     * @param string $mvtCredit
     * @return Mouvement
     */
    public function setMvtCredit($mvtCredit)
    {
        $this->mvtCredit = $mvtCredit;

        return $this;
    }

    /**
     * Get mvtCredit
     *
     * @return string 
     */
    public function getMvtCredit()
    {
        return $this->mvtCredit;
    }

    /**
     * Set mvtOperationId
     *
     * @param integer $mvtOperationId
     * @return Mouvement
     */
    public function setMvtOperationId($mvtOperationId)
    {
        $this->mvtOperationId = $mvtOperationId;

        return $this;
    }

    /**
     * Get mvtOperationId
     *
     * @return integer 
     */
    public function getMvtOperationId()
    {
        return $this->mvtOperationId;
    }

    /**
     * Set mvtCompteId
     *
     * @param integer $mvtCompteId
     * @return Mouvement
     */
    public function setMvtCompteId($mvtCompteId)
    {
        $this->mvtCompteId = $mvtCompteId;

        return $this;
    }

    /**
     * Get mvtCompteId
     *
     * @return integer 
     */
    public function getMvtCompteId()
    {
        return $this->mvtCompteId;
    }

    /**
     * Set mvtComment
     *
     * @param string $mvtComment
     * @return Mouvement
     */
    public function setMvtComment($mvtComment)
    {
        $this->mvtComment = $mvtComment;

        return $this;
    }

    /**
     * Get mvtComment
     *
     * @return string 
     */
    public function getMvtComment()
    {
        return $this->mvtComment;
    }
}
