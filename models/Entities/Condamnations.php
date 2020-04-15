<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Condamnations
 *
 * @ORM\Table(name="condamnations", indexes={@ORM\Index(name="fk_condamnations_recherches_idx", columns={"recherches_id_r"})})
 * @ORM\Entity
 */
class Condamnations
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_c", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idC;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle_affaire_c", type="string", length=45, nullable=false)
     */
    private $libelleAffaireC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_c", type="date", nullable=false)
     */
    private $dateC;

    /**
     * @var int
     *
     * @ORM\Column(name="duree_c", type="integer", nullable=false)
     */
    private $dureeC;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="date_liberation_c", type="date", nullable=true)
     */
    private $dateLiberationC;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="date", nullable=false)
     */
    private $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="created_by", type="string", length=255, nullable=false)
     */
    private $createdBy;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated_at", type="date", nullable=false)
     */
    private $updatedAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_by", type="string", length=255, nullable=false)
     */
    private $updatedBy;

    /**
     * @var \Entity\Recherches
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Entity\Recherches")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="recherches_id_r", referencedColumnName="id_r")
     * })
     */
    private $recherchesIdR;



    /**
     * Set idC.
     *
     * @param int $idC
     *
     * @return Condamnations
     */
    public function setIdC($idC)
    {
        $this->idC = $idC;

        return $this;
    }

    /**
     * Get idC.
     *
     * @return int
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * Set libelleAffaireC.
     *
     * @param string $libelleAffaireC
     *
     * @return Condamnations
     */
    public function setLibelleAffaireC($libelleAffaireC)
    {
        $this->libelleAffaireC = $libelleAffaireC;

        return $this;
    }

    /**
     * Get libelleAffaireC.
     *
     * @return string
     */
    public function getLibelleAffaireC()
    {
        return $this->libelleAffaireC;
    }

    /**
     * Set dateC.
     *
     * @param \DateTime $dateC
     *
     * @return Condamnations
     */
    public function setDateC($dateC)
    {
        $this->dateC = $dateC;

        return $this;
    }

    /**
     * Get dateC.
     *
     * @return \DateTime
     */
    public function getDateC()
    {
        return $this->dateC;
    }

    /**
     * Set dureeC.
     *
     * @param int $dureeC
     *
     * @return Condamnations
     */
    public function setDureeC($dureeC)
    {
        $this->dureeC = $dureeC;

        return $this;
    }

    /**
     * Get dureeC.
     *
     * @return int
     */
    public function getDureeC()
    {
        return $this->dureeC;
    }

    /**
     * Set dateLiberationC.
     *
     * @param \DateTime|null $dateLiberationC
     *
     * @return Condamnations
     */
    public function setDateLiberationC($dateLiberationC = null)
    {
        $this->dateLiberationC = $dateLiberationC;

        return $this;
    }

    /**
     * Get dateLiberationC.
     *
     * @return \DateTime|null
     */
    public function getDateLiberationC()
    {
        return $this->dateLiberationC;
    }

    /**
     * Set createdAt.
     *
     * @param \DateTime $createdAt
     *
     * @return Condamnations
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt.
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy.
     *
     * @param string $createdBy
     *
     * @return Condamnations
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy.
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set updatedAt.
     *
     * @param \DateTime $updatedAt
     *
     * @return Condamnations
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt.
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set updatedBy.
     *
     * @param string $updatedBy
     *
     * @return Condamnations
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;

        return $this;
    }

    /**
     * Get updatedBy.
     *
     * @return string
     */
    public function getUpdatedBy()
    {
        return $this->updatedBy;
    }

    /**
     * Set recherchesIdR.
     *
     * @param \Entity\Recherches $recherchesIdR
     *
     * @return Condamnations
     */
    public function setRecherchesIdR(\Entity\Recherches $recherchesIdR)
    {
        $this->recherchesIdR = $recherchesIdR;

        return $this;
    }

    /**
     * Get recherchesIdR.
     *
     * @return \Entity\Recherches
     */
    public function getRecherchesIdR()
    {
        return $this->recherchesIdR;
    }
}
